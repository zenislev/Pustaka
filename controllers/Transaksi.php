<?php
class Transaksi extends CI_Controller
{
    public function index()
    {
        // View Form
        $this->load->view('view-form-transaksi');
    }

    public function cetak()
    {
        $merek = $this->input->post('merek');

        if ($merek == "Nike") {
            $harga = 375000;
        }
        else if ($merek == "Adidas") {
            $harga = 300000;
        }
        else if ($merek == "Kickers") {
            $harga = 250000;
        }
        else if ($merek == "Eiger") {
            $harga = 275000;
        }
        else if ($merek == "Bucherri") {
            $harga = 400000;
        }

            $this->load->view('view-data-transaksi', $data);
        }
    }

?>