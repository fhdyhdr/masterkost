<?php
include 'midtrans-php/Midtrans.php'; 

// Set konfigurasi Midtrans
\Midtrans\Config::$serverKey = 'SB-Mid-server-crW17VOnqFraLBWc_3WjiayF';
\Midtrans\Config::$isProduction = false;
\Midtrans\Config::$isSanitized = true;
\Midtrans\Config::$is3ds = true;

class Payment extends CI_Controller {

    public function __construct() {
        parent::__construct();
        if(!$this->session->userdata("id_admin")){
            redirect('login/login'); 
        }
        date_default_timezone_set('Asia/Jakarta');
        $this->load->model('dashboard/Madmin'); 
    }


    public function updatesub($tipelangganan) {

        $expirationDate = date('Y-m-d H:i:s', strtotime('+1 month'));
        $data = [
            'subscription' => $tipelangganan,
            'waktu_sub' => $expirationDate
        ];
    
        $updateSuccess = $this->Madmin->updateSub($data);
    
        if ($updateSuccess) {
            $this->session->set_userdata('subscription', $tipelangganan);
            redirect('dashboard'); 
        } 
        else{
            redirect('welcome'); 
        }
     
    }
    

    public function choosePlan($plan) {
        try {
            // Tentukan nominal berdasarkan plan
            $grossAmount = 0;
            switch ($plan) {
                case 'basic':
                    $grossAmount = 25000;
                    break;
                case 'middle':
                    $grossAmount = 75000;
                    break;
                case 'pro':
                    $grossAmount = 120000;
                    break;
                default:
                    throw new Exception("Invalid plan selected.");
            }
    
            // Menyimpan snap token dan order ID
            $params = [
                'transaction_details' => [
                    'order_id' => 'ORDER-' . time(),
                    'gross_amount' => $grossAmount,
                ],
                'customer_details' => [
                    'first_name' => 'John',
                    'last_name' => 'Doe',
                    'email' => 'john.doe@example.com',
                    'phone' => '+628123456789'
                ]
            ];
    
            $snapToken = \Midtrans\Snap::getSnapToken($params);
    
            // Redirect ke showPayment dengan parameter plan
            $orderId = $params['transaction_details']['order_id'];
            redirect('payment/showPayment/' . $orderId . '/' . $plan);
    
        } catch (Exception $e) {
            $data["error"] = $e->getMessage();
            $this->load->view('error_view', $data);
        }
    }
    




    public function showPayment($orderId, $plan) {
        try {
            // Tentukan nominal berdasarkan plan
            $grossAmount = 0;
            switch ($plan) {
                case 'basic':
                    $grossAmount = 25000;
                    break;
                case 'middle':
                    $grossAmount = 75000;
                    break;
                case 'pro':
                    $grossAmount = 120000;
                    break;
                default:
                    throw new Exception("Invalid plan selected.");
            }
    
            // Ambil Snap Token
            $params = [
                'transaction_details' => [
                    'order_id' => $orderId,
                    'gross_amount' => $grossAmount
                ]
            ];
            $snapToken = \Midtrans\Snap::getSnapToken($params);
    
            // Ambil status transaksi menggunakan cURL
            $curl = curl_init();
            curl_setopt_array($curl, array(
                CURLOPT_URL => "https://api.sandbox.midtrans.com/v2/" . $orderId . "/status",
                CURLOPT_RETURNTRANSFER => true,
                CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
                CURLOPT_CUSTOMREQUEST => "GET",
                CURLOPT_HTTPHEADER => array(
                    "accept: application/json",
                    "authorization: Basic U0ItTWlkLXNlcnZlci1jclcxN1ZPbnFGcmFMQldjXzNXamlheUY6YW1pa29t"
                ),
            ));
    
            $response = curl_exec($curl);
            $err = curl_error($curl);
            curl_close($curl);
    
            if ($err) {
                throw new Exception("cURL Error #:" . $err);
            } else {
                $statusResponse = json_decode($response, true);
                $data["status"] = $statusResponse;
            }
    
            // Periksa apakah pembayaran berhasil
            if (isset($statusResponse['transaction_status']) && $statusResponse['transaction_status'] === 'settlement') {
                // Hitung tanggal kedaluwarsa langganan (1 bulan dari sekarang)
                $expirationDate = date('Y-m-d', strtotime('+1 month'));
    
                // Perbarui kolom subscription dan subscription_expiration
                $userId = $this->session->userdata('user_id'); // Ambil user ID dari sesi
                $this->db->where('id_admin', $userId);
                $this->db->update('admin', [
                    'subscription' => $plan,
                    'waktu_sub' => $expirationDate
                ]);
            }
    
            // Siapkan data untuk view
            $data["snapToken"] = $snapToken;
            $data["orderId"] = $orderId;
            $data["grossAmount"] = $grossAmount;
            $data["tipelangganan"] = $plan;
            $data["tanggal"] = date('Y-m-d H:i:s');
            $data["expiredTime"] = date('Y-m-d H:i:s', strtotime('+24 hours')); // Waktu berakhir pembayaran dalam 24 jam
            // Load view
            $this->load->view('payment_view', $data);
    
        } catch (Exception $e) {
          
            $this->load->view('dashboard/landingpage');
        }
    }
    
    
}

