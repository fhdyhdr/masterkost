<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Statistik extends CI_Controller {


    function __construct(){
        parent::__construct();
        if(!$this->session->userdata("id_admin")){
            redirect('login/login'); 
        }
        $this->load->model('dashboard/Mpenyewa'); 
    }


    public function index() {
        $id_admin = $this->session->userdata('id_admin'); 


        $this->db->select('tipe_filter');
        $this->db->where('id_admin', $id_admin);
        $tipe_filter = $this->db->get('admin')->row()->tipe_filter;



        // Query Pemasukan Bulanan
        $this->db->select('DATE_FORMAT(tgl_pemasukan, "%b") as bulan, SUM(nominal) as nominal');
        $this->db->where('id_admin', $id_admin);
        if ($tipe_filter == 1) {
            $this->db->where('YEAR(tgl_pemasukan)', date('Y'));
        } elseif ($tipe_filter == 2) {
            $this->db->where('tgl_pemasukan >=', date('Y-m-d', strtotime('-1 year')));
        }
        elseif ($tipe_filter == 3) {
            $this->db->where('tgl_pemasukan >=', date('Y-m-d', strtotime('-2 year')));
        }
        elseif ($tipe_filter == 4) {
            $this->db->where('tgl_pemasukan >=', date('Y-m-d', strtotime('-3 year')));
        }
        $this->db->group_by('MONTH(tgl_pemasukan)');
        $data_pemasukan = $this->db->get('pemasukan')->result_array();
        
        // Query Ringkasan Pemasukan
        $this->db->select('IFNULL(MIN(nominal), 0) as min_nominal, IFNULL(MAX(nominal), 0) as max_nominal, IFNULL(AVG(nominal), 0) as avg_nominal');
        $this->db->where('id_admin', $id_admin);
        if ($tipe_filter == 1) {
            $this->db->where('YEAR(tgl_pemasukan)', date('Y'));
        } elseif ($tipe_filter == 2) {
            $this->db->where('tgl_pemasukan >=', date('Y-m-d', strtotime('-1 year')));
        }
        elseif ($tipe_filter == 3) {
            $this->db->where('tgl_pemasukan >=', date('Y-m-d', strtotime('-2 year')));
        }
        elseif ($tipe_filter == 4) {
            $this->db->where('tgl_pemasukan >=', date('Y-m-d', strtotime('-3 year')));
        }

        $summary = $this->db->get('pemasukan')->row_array();
        
        // Pastikan data tidak null sebelum round
        $min_nominal = round($summary['min_nominal'] ?? 0);
        $max_nominal = round($summary['max_nominal'] ?? 0);
        $avg_nominal = round($summary['avg_nominal'] ?? 0);
        
        // Query Pengeluaran Bulanan
        $this->db->select('DATE_FORMAT(tgl_pengeluaran, "%b") as bulan, SUM(nominal_pengeluaran) as nominal_pengeluaran');
        $this->db->where('id_admin', $id_admin);
        if ($tipe_filter == 1) {
            $this->db->where('YEAR(tgl_pengeluaran)', date('Y'));
        } elseif ($tipe_filter == 2) {
            $this->db->where('tgl_pengeluaran >=', date('Y-m-d', strtotime('-1 year')));
        }
        elseif ($tipe_filter == 3) {
            $this->db->where('tgl_pengeluaran >=', date('Y-m-d', strtotime('-2 year')));
        }
        elseif ($tipe_filter == 4) {
            $this->db->where('tgl_pengeluaran >=', date('Y-m-d', strtotime('-3 year')));
        }
        $this->db->group_by('MONTH(tgl_pengeluaran)');
        $data_pengeluaran = $this->db->get('pengeluaran')->result_array();



        
        // Siapkan data untuk Chart.js
        $labels = [];
        $nominals = [];
        $pengeluaran = [];

        foreach ($data_pemasukan as $row) {
            $labels[] = $row['bulan']; // Contoh: "Feb", "Mar", dll.
            $nominals[] = (float)$row['nominal']; // Nominal pemasukan

            $nominal_pengeluaran = 0;
            foreach ($data_pengeluaran as $row_pengeluaran) {
                if ($row_pengeluaran['bulan'] == $row['bulan']) {
                    $nominal_pengeluaran = (float)$row_pengeluaran['nominal_pengeluaran'];
                    break;
                }
            }

            $pengeluaran[] = $nominal_pengeluaran; // Total nominal pengeluaran
        }
        
        // Kirim data ke view
        $data['chartData'] = [ 
            'labels' => $labels,
            'data' => $nominals,
            'tipefilter' => $tipe_filter,
            'min' => (float)$summary['min_nominal'],
            'max' => (float)$summary['max_nominal'],
            'avg' => round($summary['avg_nominal'], 2), // Rata-rata dengan 2 desimal
            'pengeluaran' => $pengeluaran 
        ];
        


        

        $this->db->select('SUM(nominal) as total_pemasukan');
        if ($tipe_filter == 1) {
            $this->db->where('YEAR(tgl_pemasukan)', date('Y'));
        } elseif ($tipe_filter == 2) {
            $this->db->where('tgl_pemasukan >=', date('Y-m-d', strtotime('-1 year')));
        }
        elseif ($tipe_filter == 3) {
            $this->db->where('tgl_pemasukan >=', date('Y-m-d', strtotime('-2 year')));
        }
        elseif ($tipe_filter == 4) {
            $this->db->where('tgl_pemasukan >=', date('Y-m-d', strtotime('-3 year')));
        }
        $this->db->where('id_admin', $id_admin);
        $total_pemasukan = $this->db->get('pemasukan')->row()->total_pemasukan;
    
        // Hitung total pengeluaran selama 1 tahun terakhir
        $this->db->select('SUM(nominal_pengeluaran) as total_pengeluaran');
        if ($tipe_filter == 1) {
            $this->db->where('YEAR(tgl_pengeluaran)', date('Y'));
        } elseif ($tipe_filter == 2) {
            $this->db->where('tgl_pengeluaran >=', date('Y-m-d', strtotime('-1 year')));
        }
        elseif ($tipe_filter == 3) {
            $this->db->where('tgl_pengeluaran >=', date('Y-m-d', strtotime('-2 year')));
        }
        elseif ($tipe_filter == 4) {
            $this->db->where('tgl_pengeluaran >=', date('Y-m-d', strtotime('-3 year')));
        }
        $this->db->where('id_admin', $id_admin);
        $total_pengeluaran = $this->db->get('pengeluaran')->row()->total_pengeluaran;
    
        // Kirim data ke view
        $data['summaryData'] = [
            'pemasukan' => (float)$total_pemasukan,
            'pengeluaran' => (float)$total_pengeluaran
        ];

        $data['total_pemasukan'] = $this->Mpenyewa->getTotalPemasukan(); 

        
    
        $this->load->view('dashboard/statistik', $data);
    }
    

    public function updateFilter()
    {
        $id_admin = $this->session->userdata('id_admin');
        $filter = $this->input->post('filter'); // Dapatkan data POST
    
        if (!$filter) {
            echo json_encode(['status' => 'error', 'message' => 'Filter tidak valid']);
            http_response_code(400); // Bad Request
            return;
        }
    
        $this->db->where('id_admin', $id_admin);
        $this->db->update('admin', ['tipe_filter' => $filter]);
    
        echo json_encode(['status' => 'success']);
    }
    

}
