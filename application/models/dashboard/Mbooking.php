<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mbooking extends CI_Model {


    private $id_admin;

    public function __construct() {
        parent::__construct();
        $this->id_admin = $this->session->userdata('id_admin');
    }

    public function updateTidakLunas() {
        $today = date('Y-m-d'); 
    
        // Query untuk mencari booking yang statusnya belum lunas dan tanggal_tenggat sudah lewat
        $this->db->where('status_booking !=', 'lunas'); // Status booking belum lunas
        $this->db->where('DATE(tanggal_tenggat) <', $today); // Menggunakan DATE() untuk hanya membandingkan tanggal
        $query = $this->db->get('booking');
    
        // Cek apakah ada data yang sesuai
        if ($query->num_rows() > 0) {
            foreach ($query->result() as $row) {
                $updated_tgl_tenggat = $row->tanggal_tenggat;
$updated_tgl_booking = $row->tgl_booking;

if ($updated_tgl_tenggat < $today) {
    // Gunakan DateTime untuk manipulasi tanggal
    $tglBooking = new DateTime($updated_tgl_booking); // Mulai dari tgl_booking saat ini
    
    // Cek apakah $row->angka dan $row->waktu tersedia
    if (isset($row->angka) && isset($row->waktu)) {
        // Loop untuk mengupdate tanggal booking secara bertahap
        while ($tglBooking->format('Y-m-d') < $today) {
            switch ($row->waktu) {
                case 'Hari':
                    $tglBooking->modify("+" . $row->angka . " days"); // Tambah jumlah hari
                    break;
                case 'Bulan':
                    $tglBooking->modify("+" . $row->angka . " months"); // Tambah jumlah bulan
                    break;
                case 'Tahun':
                    $tglBooking->modify("+" . $row->angka . " years"); // Tambah jumlah tahun
                    break;
            }

            // Jika tanggal yang baru lebih besar dari $today, keluar dari loop
            if ($tglBooking->format('Y-m-d') > $today) {
                break;
            }

            // Update tgl_booking menjadi tanggal terbaru
            $updated_tgl_booking = $tglBooking->format('Y-m-d');
        }
    }
} else {
    // Jika belum lewat, gunakan tanggal_tenggat
    $updated_tgl_booking = $updated_tgl_tenggat;
}

    
                // Update kolom tgl_booking menjadi tanggal_tenggat yang ada atau disesuaikan
                $this->db->set('tgl_booking', $updated_tgl_booking); // Set tgl_booking sesuai tanggal_tenggat atau yang disesuaikan
    
                // Perbarui tanggal_tenggat berdasarkan angka dan waktu
                if ($row->angka && $row->waktu) {
                    $tglBooking = new DateTime($updated_tgl_booking); // Gunakan tanggal_tenggat untuk perhitungan
                    
                    // Modifikasi berdasarkan waktu dan angka
                    switch ($row->waktu) {
                        case 'Hari':
                            $tglBooking->modify("+$row->angka days"); // Tambah jumlah hari
                            break;
                        case 'Bulan':
                            $tglBooking->modify("+$row->angka months"); // Tambah jumlah bulan
                            break;
                        case 'Tahun':
                            $tglBooking->modify("+$row->angka years"); // Tambah jumlah tahun
                            break;
                    }
        
                    // Tanggal tenggat yang baru berdasarkan perhitungan
                    $tanggalTenggatBaru = $tglBooking->format('Y-m-d'); // Ambil tanggal baru
        
                    // Update tanggal_tenggat dengan tanggal baru
                    $this->db->set('tanggal_tenggat', $tanggalTenggatBaru);
                }
    
                // Update data di tabel booking
                $this->db->where('id_booking', $row->id_booking);
                $this->db->update('booking');
    
    

                // Update status_booking menjadi 'belum lunas' sesuai id_penyewa dan id_kamar
                $this->db->set('pembayaran_terlewat', 1)
                        ->where('id_penyewa', $row->id_penyewa)
                        ->where('id_kamar', $row->id_kamar)
                        ->update('booking');

                $this->db->set('status_booking', 'belum lunas')
                        ->where('id_penyewa', $row->id_penyewa)
                        ->where('id_kamar', $row->id_kamar)
                        ->update('booking');

                // Ambil harga kamar berdasarkan id_kamar
                $this->db->select('kamar.harga_kamar');
                $this->db->from('kamar');
                $this->db->where('kamar.id_kamar', $row->id_kamar);
                $hargaKamarQuery = $this->db->get();

                $harga_kamar = 0;
                if ($hargaKamarQuery->num_rows() > 0) {
                    $harga_kamar = $hargaKamarQuery->row()->harga_kamar;
                }

                // Ambil data pemasukan terbaru untuk menghitung kekurangan pembayaran
$this->db->select('pemasukan.kekurangan_pembayaran');
$this->db->from('pemasukan');
$this->db->where('pemasukan.id_penyewa', $row->id_penyewa);
$this->db->where('pemasukan.id_kamar', $row->id_kamar);
$this->db->order_by('pemasukan.tgl_pemasukan', 'DESC');
$this->db->limit(1);

$pemasukanQuery = $this->db->get();

// Default nilai kekurangan_pembayaran
$kekurangan_pembayaran_baru = 0; // Inisialisasi dengan 0

if ($pemasukanQuery->num_rows() > 0) {
    // Ada data pemasukan sebelumnya
    $pemasukanData = $pemasukanQuery->row();
    $kekurangan_pembayaran_baru += $pemasukanData->kekurangan_pembayaran + $harga_kamar;
} else {
    // Belum ada pemasukan sebelumnya
    $kekurangan_pembayaran_baru = $harga_kamar * 2; // Harga kamar x2
}

// Data yang akan diinsert ke tabel pemasukan
$dataPemasukan = [
    'id_penyewa' => $row->id_penyewa,
    'id_kamar' => $row->id_kamar,
    'kekurangan_pembayaran' => $kekurangan_pembayaran_baru,
    'nominal' => 0,
    'status_pemasukan' => 'tagihanawal',
    'id_admin' => $this->id_admin,
    'tgl_pemasukan' => $updated_tgl_booking,
];

// Insert ke tabel pemasukan
$this->db->insert('pemasukan', $dataPemasukan);




                
                $tanggalTenggat = new DateTime($row->tanggal_tenggat);
                $todayDate = new DateTime($today);
                
                // Hitung total waktu yang terlewat berdasarkan angka dan waktu
                if ($todayDate > $tanggalTenggat && isset($row->angka) && isset($row->waktu)) {
                    // Clone tanggal_tenggat untuk menghitung loncatan waktu
                    $tempDate = clone $tanggalTenggat;
                    $totalLoncatan = 0;
                
                    // Inisialisasi array untuk update data pemasukan
                    $dataUpdatePemasukan = []; // Array untuk menyimpan update pemasukan
                    $tglBookingTerbaru = clone $tanggalTenggat;
                
                    // Loop untuk menghitung jumlah loncatan waktu yang terlewat
                    while ($tempDate <= $todayDate) {
                        switch ($row->waktu) {
                            case 'Hari':
                                $tempDate->modify("+" . $row->angka . " days");
                                break;
                            case 'Bulan':
                                $tempDate->modify("+" . $row->angka . " months");
                                break;
                            case 'Tahun':
                                $tempDate->modify("+" . $row->angka . " years");
                                break;
                        }
                
                        // Jika masih <= hari ini, increment loncatan dan update pemasukan
                        if ($tempDate <= $todayDate) {
                            $totalLoncatan++;
                
                            // Update tgl_booking terbaru
                            $tglBookingTerbaru = clone $tempDate;
                
                            // Menambahkan data update pemasukan untuk batch
                            $dataUpdatePemasukan[] = [
                                'kekurangan_pembayaran' => $harga_kamar, // Tambah harga_kamar ke kekurangan_pembayaran
                                'id_penyewa' => $row->id_penyewa,       // Set id_penyewa
                                'id_kamar' => $row->id_kamar,           // Set id_kamar
                                'status_pemasukan' => 'tagihanawal',    // Status pemasukan
                                'tgl_pemasukan' => $tglBookingTerbaru->format('Y-m-d') // tgl booking terbaru
                            ];
                        }
                    }
                
                    // Update kolom pembayaran_terlewat
                    if ($row->pembayaran_terlewat === NULL) {
                        $this->db->set('pembayaran_terlewat', $totalLoncatan); // Set langsung nilai pembayaran_terlewat
                    } else {
                        $this->db->set('pembayaran_terlewat', 'pembayaran_terlewat + ' . $totalLoncatan, FALSE); // Tambahkan nilai loncatan
                    }
                
                    // Tentukan kondisi berdasarkan id_booking
                    $this->db->where('id_booking', $row->id_booking);
                    $this->db->update('booking');
                
                    // Update pemasukan di tabel pemasukan untuk setiap loncatan
                    foreach ($dataUpdatePemasukan as $update) {
                        $this->db->where('id_penyewa', $update['id_penyewa'])
                                 ->where('id_kamar', $update['id_kamar'])
                                 ->where('status_pemasukan', 'tagihanawal') // Hanya update yang statusnya tagihanawal
                                 ->set('kekurangan_pembayaran', "kekurangan_pembayaran + {$update['kekurangan_pembayaran']}", FALSE)
                                 ->set('tgl_pemasukan', $update['tgl_pemasukan']); // Update tgl_pemasukan sesuai loncatan
                        $this->db->update('pemasukan');
                    }
                }
                
                

                
            }
        }
    }
    
    
    public function updateLunas(){
        $today = date('Y-m-d'); 
    
        // Query untuk mencari booking yang statusnya lunas
        $this->db->where('status_booking', 'lunas'); // Status booking = lunas
        $this->db->where('DATE(tanggal_tenggat) <', $today); // Menggunakan DATE() untuk hanya membandingkan tanggal
        $query = $this->db->get('booking');
        
        // Cek apakah ada data yang sesuai
        if ($query->num_rows() > 0) {
            foreach ($query->result() as $row) {
                $updated_tgl_tenggat = $row->tanggal_tenggat;
$updated_tgl_booking = $row->tgl_booking;

if ($updated_tgl_tenggat < $today) {
    // Gunakan DateTime untuk manipulasi tanggal
    $tglBooking = new DateTime($updated_tgl_booking); // Mulai dari tgl_booking saat ini
    
    // Cek apakah $row->angka dan $row->waktu tersedia
    if (isset($row->angka) && isset($row->waktu)) {
        // Loop untuk mengupdate tanggal booking secara bertahap
        while ($tglBooking->format('Y-m-d') < $today) {
            switch ($row->waktu) {
                case 'Hari':
                    $tglBooking->modify("+" . $row->angka . " days"); // Tambah jumlah hari
                    break;
                case 'Bulan':
                    $tglBooking->modify("+" . $row->angka . " months"); // Tambah jumlah bulan
                    break;
                case 'Tahun':
                    $tglBooking->modify("+" . $row->angka . " years"); // Tambah jumlah tahun
                    break;
            }

            // Jika tanggal yang baru lebih besar dari $today, keluar dari loop
            if ($tglBooking->format('Y-m-d') > $today) {
                break;
            }

            // Update tgl_booking menjadi tanggal terbaru
            $updated_tgl_booking = $tglBooking->format('Y-m-d');
        }
    }
} else {
    // Jika belum lewat, gunakan tanggal_tenggat
    $updated_tgl_booking = $updated_tgl_tenggat;
}

    
                // Update kolom tgl_booking menjadi tanggal_tenggat yang ada atau disesuaikan
                $this->db->set('tgl_booking', $updated_tgl_booking); // Set tgl_booking sesuai tanggal_tenggat atau yang disesuaikan
    
                // Perbarui tanggal_tenggat berdasarkan angka dan waktu
                if ($row->angka && $row->waktu) {
                    $tglBooking = new DateTime($updated_tgl_booking); // Gunakan tanggal_tenggat untuk perhitungan
                    
                    // Modifikasi berdasarkan waktu dan angka
                    switch ($row->waktu) {
                        case 'Hari':
                            $tglBooking->modify("+$row->angka days"); // Tambah jumlah hari
                            break;
                        case 'Bulan':
                            $tglBooking->modify("+$row->angka months"); // Tambah jumlah bulan
                            break;
                        case 'Tahun':
                            $tglBooking->modify("+$row->angka years"); // Tambah jumlah tahun
                            break;
                    }
        
                    // Tanggal tenggat yang baru berdasarkan perhitungan
                    $tanggalTenggatBaru = $tglBooking->format('Y-m-d'); // Ambil tanggal baru
        
                    // Update tanggal_tenggat dengan tanggal baru
                    $this->db->set('tanggal_tenggat', $tanggalTenggatBaru);
                }
    
                // Update data di tabel booking
                $this->db->where('id_booking', $row->id_booking);
                $this->db->update('booking');
    
                // Update status_booking menjadi 'belum lunas' sesuai id_penyewa dan id_kamar
                $this->db->set('status_booking', 'belum lunas');
                $this->db->where('id_penyewa', $row->id_penyewa); // Berdasarkan id_penyewa
                $this->db->where('id_kamar', $row->id_kamar); // Berdasarkan id_kamar
                $this->db->update('booking'); // Eksekusi update
    
                // Ambil harga kamar berdasarkan id_kamar dan id_penyewa
                $this->db->select('kamar.harga_kamar');
                $this->db->from('kamar');
                $this->db->where('kamar.id_kamar', $row->id_kamar);
                $hargaKamarQuery = $this->db->get();
    
                if ($hargaKamarQuery->num_rows() > 0) {
                    $harga_kamar = $hargaKamarQuery->row()->harga_kamar;
    
                    // Insert ke tabel pemasukan
                    $dataPemasukan = [
                        'kekurangan_pembayaran' => $harga_kamar, // Set kekurangan_pembayaran = harga_kamar
                        'id_penyewa' => $row->id_penyewa,       // Set id_penyewa
                        'id_kamar' => $row->id_kamar,   
                        'nominal'   => 0,   
                        'status_pemasukan' => 'tagihanawal',  
                        'id_admin' =>  $this->id_admin, 
                        'tgl_pemasukan' => date('Y-m-d H:i:s')
                    ];
    
                    $this->db->insert('pemasukan', $dataPemasukan); // Masukkan data ke tabel pemasukan
                }
                $tanggalTenggat = new DateTime($row->tanggal_tenggat);
                $todayDate = new DateTime($today);
                
                // Hitung total waktu yang terlewat berdasarkan angka dan waktu
                if ($todayDate > $tanggalTenggat && isset($row->angka) && isset($row->waktu)) {
                    // Clone tanggal_tenggat untuk menghitung loncatan waktu
                    $tempDate = clone $tanggalTenggat;
                    $totalLoncatan = 0;
                
                    // Inisialisasi array untuk update data pemasukan
                    $dataUpdatePemasukan = []; // Array untuk menyimpan update pemasukan
                    $tglBookingTerbaru = clone $tanggalTenggat;
                
                    // Loop untuk menghitung jumlah loncatan waktu yang terlewat
                    while ($tempDate <= $todayDate) {
                        switch ($row->waktu) {
                            case 'Hari':
                                $tempDate->modify("+" . $row->angka . " days");
                                break;
                            case 'Bulan':
                                $tempDate->modify("+" . $row->angka . " months");
                                break;
                            case 'Tahun':
                                $tempDate->modify("+" . $row->angka . " years");
                                break;
                        }
                
                        // Jika masih <= hari ini, increment loncatan dan update pemasukan
                        if ($tempDate <= $todayDate) {
                            $totalLoncatan++;
                
                            // Update tgl_booking terbaru
                            $tglBookingTerbaru = clone $tempDate;
                
                            // Menambahkan data update pemasukan untuk batch
                            $dataUpdatePemasukan[] = [
                                'kekurangan_pembayaran' => $harga_kamar, // Tambah harga_kamar ke kekurangan_pembayaran
                                'id_penyewa' => $row->id_penyewa,       // Set id_penyewa
                                'id_kamar' => $row->id_kamar,           // Set id_kamar
                                'status_pemasukan' => 'tagihanawal',    // Status pemasukan
                                'tgl_pemasukan' => $tglBookingTerbaru->format('Y-m-d') // tgl booking terbaru
                            ];
                        }
                    }
                
                    // Update kolom pembayaran_terlewat
                    if ($row->pembayaran_terlewat === NULL) {
                        $this->db->set('pembayaran_terlewat', $totalLoncatan); // Set langsung nilai pembayaran_terlewat
                    } else {
                        $this->db->set('pembayaran_terlewat', 'pembayaran_terlewat + ' . $totalLoncatan, FALSE); // Tambahkan nilai loncatan
                    }
                
                    // Tentukan kondisi berdasarkan id_booking
                    $this->db->where('id_booking', $row->id_booking);
                    $this->db->update('booking');
                
                    // Update pemasukan di tabel pemasukan untuk setiap loncatan
                    foreach ($dataUpdatePemasukan as $update) {
                        $this->db->where('id_penyewa', $update['id_penyewa'])
                                 ->where('id_kamar', $update['id_kamar'])
                                 ->where('status_pemasukan', 'tagihanawal') // Hanya update yang statusnya tagihanawal
                                 ->set('kekurangan_pembayaran', "kekurangan_pembayaran + {$update['kekurangan_pembayaran']}", FALSE)
                                 ->set('tgl_pemasukan', $update['tgl_pemasukan']); // Update tgl_pemasukan sesuai loncatan
                        $this->db->update('pemasukan');
                    }
                }
                
                

                
            }

            $id_admin = $this->session->userdata('id_admin'); 
            $this->db->where('pemasukan_terlewat', 0); // Kondisi pemasukan_terlewat = 0
            $this->db->or_where('pemasukan_terlewat', NULL); // Kondisi pemasukan_terlewat = 0
            $this->db->where('id_admin', $id_admin);   // Kondisi id_admin sesuai parameter
            $this->db->set('pemasukan_terlewat', 1);   // Set pemasukan_terlewat menjadi 1
            $this->db->update('pemasukan');           // Update tabel pemasukan

        }
    }
    

    public function cekStatusBooking() {
        $this->db->where('pembayaran_terlewat <', 1);
        $this->db->or_where('pembayaran_terlewat', NULL);
        $query = $this->db->get('booking');
        
        
        // Cek apakah ada data booking
        if ($query->num_rows() > 0) {
            foreach ($query->result() as $row) {
                // Ambil id_penyewa dan id_kamar
                $id_penyewa = $row->id_penyewa;
                $id_kamar = $row->id_kamar;
                $tgl_booking = $row->tgl_booking;
                $tanggal_tenggat = $row->tanggal_tenggat;
    
                // Query untuk menghitung jumlah nominal dari tgl_pemasukan di antara tgl_booking dan tanggal_tenggat
                $this->db->select_sum('nominal');
                $this->db->from('pemasukan');
                $this->db->where('id_penyewa', $id_penyewa);
                $this->db->where('id_kamar', $id_kamar);
                $this->db->where('tgl_pemasukan >=', $tgl_booking);
                $this->db->where('tgl_pemasukan <=', $tanggal_tenggat);
                $nominalQuery = $this->db->get();
                
                // Ambil total nominal
                $total_nominal = $nominalQuery->row()->nominal;
    
                // Ambil harga kamar dari tabel kamar berdasarkan id_kamar
                $this->db->select('harga_kamar');
                $this->db->from('kamar');
                $this->db->where('id_kamar', $id_kamar);
                $hargaKamarQuery = $this->db->get();
                
                // Cek apakah harga kamar ada
                if ($hargaKamarQuery->num_rows() > 0) {
                    $harga_kamar = $hargaKamarQuery->row()->harga_kamar;
    
                    // Jika total nominal lebih besar atau sama dengan harga kamar, ubah status_booking menjadi 'lunas'
                    if ($total_nominal >= $harga_kamar) {
                        $this->db->set('status_booking', 'lunas');
                        $this->db->where('id_booking', $row->id_booking);  // Berdasarkan id_booking
                        $this->db->update('booking');  // Eksekusi update
                    }
                    else{
                        $this->db->set('status_booking', 'belum lunas');
                        $this->db->where('id_booking', $row->id_booking);  // Berdasarkan id_booking
                        $this->db->update('booking');  // Eksekusi update
                    }
                }
            }
        }
    }




    public function cekStatusTerlewat()
    {   
        $this->db->where('pembayaran_terlewat <', 1);
        $this->db->or_where('pembayaran_terlewat', NULL);
        $query = $this->db->get('booking');
    
        // Cek apakah ada data booking
        if ($query->num_rows() > 0) {
            foreach ($query->result() as $row) {
                // Ambil id_penyewa, id_kamar, tgl_booking, dan tanggal_tenggat
                $id_penyewa = $row->id_penyewa;
                $id_kamar = $row->id_kamar;
                $tgl_booking = $row->tgl_booking;
                $tanggal_tenggat = $row->tanggal_tenggat;
    
                // Query untuk menghitung jumlah nominal dari tgl_pemasukan di antara tgl_booking dan tanggal_tenggat
                $this->db->select_sum('nominal');
                $this->db->from('pemasukan');
                $this->db->where('id_penyewa', $id_penyewa);
                $this->db->where('id_kamar', $id_kamar);
                $this->db->where('tgl_pemasukan >=', $tgl_booking);
                $this->db->where('tgl_pemasukan <=', $tanggal_tenggat);
                $nominalQuery = $this->db->get();
    
                // Ambil total nominal
                $total_nominal = $nominalQuery->row()->nominal;
    
                // Ambil harga kamar dari tabel pemasukan sesuai id_penyewa dan id_kamar
                $this->db->select('id_pemasukan, kekurangan_pembayaran');
                $this->db->from('pemasukan');
                $this->db->where('id_penyewa', $id_penyewa);
                $this->db->where('id_kamar', $id_kamar);
                $this->db->where('status_pemasukan', 'tagihanterlewatselesai');
                $hargaKamarQuery = $this->db->get();
    
                if ($hargaKamarQuery->num_rows() > 0) {
                    $harga_kamar = $hargaKamarQuery->row()->kekurangan_pembayaran;
                    $id_pemasukan = $hargaKamarQuery->row()->id_pemasukan; // Ambil id_pemasukan
    
                    // Jika total nominal lebih besar atau sama dengan harga kamar, ubah status_booking menjadi 'lunas'
                    if ($total_nominal >= $harga_kamar) {
                        $this->db->set('status_booking', 'lunas');
                        $this->db->where('id_booking', $row->id_booking);
                        $this->db->update('booking');
                    } else {
                        $this->db->set('status_booking', 'belum lunas');
                        $this->db->where('id_booking', $row->id_booking);
                        $this->db->update('booking');
    
                        // Update status_pemasukan menggunakan id_pemasukan
                        $this->db->set('status_pemasukan', 'tagihanawal');
                        $this->db->where('id_pemasukan', $id_pemasukan); // Berdasarkan id_pemasukan
                        $this->db->update('pemasukan');

                        $this->db->set('pembayaran_terlewat', 1);
                        $this->db->where('id_booking',$row->id_booking); // Berdasarkan id_pemasukan
                        $this->db->update('booking');
                    }
                }
            }
        }
    }
    
    




    public function getBooking() {
        $this->db->select('booking.*, penyewa.nama_penyewa, kamar.no_kamar,tipe_kamar.id_tipe_kamar, tipe_kamar.nama_tipe');
        $this->db->from('booking');
        $this->db->join('penyewa', 'penyewa.id_penyewa = booking.id_penyewa', 'left');
        $this->db->join('kamar', 'kamar.id_kamar = booking.id_kamar', 'left');
        $this->db->join('tipe_kamar', 'tipe_kamar.id_tipe_kamar = kamar.id_tipe_kamar', 'left');
        $this->db->where('booking.id_admin',  $this->id_admin); 
        $query = $this->db->get();
        return $query->result_array();
    }
    

    public function getAllPenyewa() {
        $this->db->select('penyewa.id_penyewa, penyewa.nama_penyewa');
        $this->db->from('penyewa');
        $this->db->join('booking', 'penyewa.id_penyewa = booking.id_penyewa', 'left');
        $this->db->where('booking.id_penyewa IS NULL');
        $this->db->where('penyewa.id_admin',  $this->id_admin); 
        $query = $this->db->get();
        return $query->result_array();
    }
    
    public function getEditPenyewa() {
        $this->db->select('penyewa.id_penyewa, penyewa.nama_penyewa');
        $this->db->from('penyewa');
        $this->db->join('booking', 'penyewa.id_penyewa = booking.id_penyewa', 'left');
        $this->db->where('penyewa.id_admin',  $this->id_admin); 
        $query = $this->db->get();
        return $query->result_array();
    }

    public function getAllTipeKamar() {
        $this->db->select('id_tipe_kamar, nama_tipe');
        $this->db->where('tipe_kamar.id_admin',  $this->id_admin); 
        $query = $this->db->get('tipe_kamar');
        return $query->result_array();
    }

    public function getKamarByTipe($id_tipe_kamar) {
        $id_tipe_kamar = intval($id_tipe_kamar);
        $this->db->select('kamar.id_kamar, kamar.no_kamar');
        $this->db->from('kamar');
        $this->db->join('booking', 'kamar.id_kamar = booking.id_kamar', 'left');
        $this->db->where('kamar.id_tipe_kamar', $id_tipe_kamar);
        $this->db->where('kamar.status_kamar', 'kosong');
        $this->db->where('booking.id_kamar IS NULL'); // Memastikan kamar tidak ada di booking
        $this->db->where('kamar.id_admin',  $this->id_admin); 

        $query = $this->db->get();
        return $query->result_array();
    }
    
    


    public function tambahBooking($data) {
        $data['id_admin'] = $this->id_admin;
        return $this->db->insert('booking', $data);
    }

    public function getNoKamar(){
        $this->db->select('id_kamar, no_kamar');
        $this->db->where('id_admin',  $this->id_admin); 
        $query = $this->db->get('kamar');
        return $query->result_array();
    }

    public function getNoByTipe($id_tipe_kamar) {
        $id_tipe_kamar = intval($id_tipe_kamar);
        $this->db->select('kamar.id_kamar, kamar.no_kamar');
        $this->db->from('kamar');
        $this->db->join('booking', 'kamar.id_kamar = booking.id_kamar', 'left');
        $this->db->where('kamar.id_tipe_kamar', $id_tipe_kamar);
        $this->db->where('kamar.id_admin',  $this->id_admin); 
        $this->db->where('booking.id_kamar IS NULL'); // Hanya kamar yang belum dipesan
        $query = $this->db->get();
        return $query->result_array();
    }



    public function editNoByTipe($id_tipe_kamar) {
        $id_tipe_kamar = intval($id_tipe_kamar);
        $this->db->select('kamar.id_kamar, kamar.no_kamar');
        $this->db->from('kamar');
        $this->db->join('booking', 'kamar.id_kamar = booking.id_kamar', 'left');
        $this->db->where('kamar.id_tipe_kamar', $id_tipe_kamar);
        $this->db->where('kamar.id_admin',  $this->id_admin); 
        $this->db->where('booking.id_kamar IS NULL'); // Hanya kamar yang belum dipesan

        $query = $this->db->get();
        return $query->result_array();
    }







    public function editBooking($id_booking, $data) {
        $this->db->where('id_booking', $id_booking);
        return $this->db->update('booking', $data);
    }

    public function updateStatusBooking($id_kamar)
    {
        // Update status_kamar menjadi 'terisi' untuk id_kamar yang sesuai
        $this->db->where('id_kamar', $id_kamar);
        return $this->db->update('kamar', ['status_kamar' => 'terisi']);
    }


    public function hapusStatusBooking($id_kamar)
    {
        // Update status_kamar menjadi 'terisi' untuk id_kamar yang sesuai
        $this->db->where('id_kamar', $id_kamar);
        return $this->db->update('kamar', ['status_kamar' => 'kosong']);
    }


    
    function hapus($id_booking){
        $this->db->where('id_booking',$id_booking);
        $this->db->delete('booking');
    }
    
        
    function updateStatusHapusPenyewa($id_penyewa){
        $this->db->where('id_penyewa',$id_penyewa);
        return $this->db->update('penyewa', ['status_penyewa' => 'tidak aktif']);
    }
    


    public function getBookingById($id_booking)
    {
        // Melakukan query untuk mendapatkan data booking berdasarkan ID
        $this->db->where('id_booking', $id_booking);
        $query = $this->db->get('booking'); // 'booking' adalah nama tabel yang menyimpan data booking

        // Mengembalikan hasil query, jika ditemukan, kembalikan hasilnya sebagai array
        if ($query->num_rows() > 0) {
            return $query->row_array(); // Mengembalikan hasil dalam bentuk array
        }

        // Jika tidak ditemukan, kembalikan null
        return null;
    }


    public function updateStatusPenyewa($id_penyewa)
    {
        // Update status_kamar menjadi 'terisi' untuk id_penyewa yang sesuai
        $this->db->where('id_penyewa', $id_penyewa);
        return $this->db->update('penyewa', ['status_penyewa' => 'aktif']);
    }

}
