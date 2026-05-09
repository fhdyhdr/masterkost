<?php
defined('BASEPATH') OR exit('No direct script access allowed');




use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require 'email/vendor/phpmailer/phpmailer/src/Exception.php';
require 'email/vendor/phpmailer/phpmailer/src/PHPMailer.php';
require 'email/vendor/phpmailer/phpmailer/src/SMTP.php';

require 'email/vendor/autoload.php'; // Sesuaikan path ini dengan lokasi instalasi PHP Mailer

class Forget extends CI_Controller {


    public function __construct() {
        parent::__construct();
        $this->load->model('login/Mforgot'); 
        date_default_timezone_set('Asia/Jakarta');
    }

    public function index()
    {
        // Tampilkan halaman login
        $this->load->view('login/forgetpass');
    }



    public function process_forgot() {
        $email = $this->input->post('email');

        // Cek apakah email ada di database
        if ($this->Mforgot->email_exists($email)) {

          
        $mail = new PHPMailer(true);
    
        try {

            $code = rand(999999,111111);
            $expirationtime = time() + 300;
            // Konfigurasi SMTP
            $mail->isSMTP();
            $mail->Host       = 'smtp.gmail.com';
            $mail->SMTPAuth   = true;
            $mail->Username   = 'fhdyhdrnd@gmail.com';
            $mail->Password   = 'odro kyex nruu vnox';
            $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
            $mail->Port       = 587;
    
            // Pengaturan email
            $mail->setFrom('fhdyhdrnd@gmail.com', 'MaKu Kompeni');
            $mail->addAddress($email, 'Recipient Name');
            $mail->Subject = 'Email Verification Code';
            $mail->Body    = 'This is a test email '.$code. '. This Code will Expire at ' . date('H:i', $expirationtime);
    
            // Kirim email
            $mail->send();
            $_SESSION['verification_code'] = $code;
            $_SESSION['verification_expiration'] = $expirationtime;
            $_SESSION['forgot_password_email'] = $email;
            $this->session->set_flashdata('successOtp', 'OTP telah dikirim ke email Anda: '.$email);
            $this->load->view('login/otp_forgot');
        } catch (Exception $e) {
            $this->session->set_flashdata('errorForgot', 'Gagal mengirim OTP, coba lagi nanti.');
            $this->load->view('login/forgetpass');
        }


    
        } else {
            // Jika email tidak ditemukan
            $this->session->set_flashdata('errorForgot', 'Email tidak ditemukan.');
            redirect('login/forget');
        }
    }
    public function verify_otp(){
        $userCode = $this->input->post('otp'); // Ambil OTP gabungan
        
        // Check if the session variables exist
        if (isset($_SESSION['verification_code']) && isset($_SESSION['verification_expiration'])) {
            // Get the stored verification code and expiration time
            $storedCode = $_SESSION['verification_code'];
            $expirationTime = $_SESSION['verification_expiration'];
    
            // Check if the code has expired
            if (time() > $expirationTime) {
                $this->session->set_flashdata('errorOtp', 'Kode Verifikasi sudah kadaluarsa');
                $this->load->view('login/otp_forgot');
            } else {
                // Check if the input code matches the stored code
                if ($userCode == $storedCode) {
                    // Clear the session variables to prevent reuse
                    unset($_SESSION['verification_code']);
                    unset($_SESSION['verification_expiration']);
                    $this->load->view('login/resetpass');
                } else {
                    $this->session->set_flashdata('errorOtp', 'Kode OTP Salah, silahkan ulangi kembali!');
                    $this->load->view('login/otp_forgot');
                }
            }
        } else {
            $this->session->set_flashdata('errorOtp', 'Terjadi kesalahan coba lagi nanati');
            $this->load->view('login/otp_forgot');
        }
    }




    
    public function resetpass() {
        // Ambil email yang disimpan di sessionStorage dari client-side
        $email = $this->input->post('email'); // Ambil data dari hidden input atau melalui metode lain dari front-end

        // Pastikan email ada
        if (!$email) {
            $this->session->set_flashdata('errorReset', 'Email tidak ditemukan. Silakan coba lagi.');
            $this->load->view('login/resetpass');
        }

        // Ambil password baru dari input form
        $password1 = $this->input->post('password1');
        $password2 = $this->input->post('password2');

        // Validasi bahwa kedua password sesuai
        if ($password1 !== $password2) {
            $this->session->set_flashdata('errorReset', 'Password tidak sesuai. Silakan coba lagi.');
            $this->load->view('login/resetpass');
        }

        // Validasi panjang password minimal 5 karakter
        if (strlen($password1) < 5) {
            $this->session->set_flashdata('errorReset', 'Password minimal 5 karakter.');
            $this->load->view('login/resetpass');
        }

        // Enkripsi password sebelum disimpan ke database
        $hashedPassword = password_hash($password1, PASSWORD_BCRYPT);

        // Update password pada database
        $update = $this->Mforgot->update_password_by_email($email, $hashedPassword);

        // Cek apakah update berhasil
        if ($update) {
            // Password berhasil diubah
            $this->session->set_flashdata('successReg', 'Password berhasil diubah. Silakan login.');
            redirect('login/login'); 
        } else {
            // Jika ada masalah dalam update
            $this->session->set_flashdata('errorReset', 'Terjadi kesalahan. Silakan coba lagi.');
            $this->load->view('login/resetpass');
        }
    }
    
}
