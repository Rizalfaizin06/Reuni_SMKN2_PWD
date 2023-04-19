<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Export extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Payment_model');
        if ($this->session->userdata('user_role') != "admin") {
            redirect('auth/login');
            exit;
        }
    }

    public function index()
    {
        $this->load->library('pdf');
        $alumni = $this->Payment_model->get_all_users();
        $pdf = new Pdf();
        $pdf->SetTitle('Daftar Product');
        $pdf->AddPage("L");

        $pdf->SetFont('Arial', 'B', 16);
        $pdf->Cell(0, 20, 'Daftar Alumni', 0, 1, 'C');
        $pdf->SetFont('Arial', 'B', 10);
        $pdf->SetXY(3, 30);
        $pdf->Cell(10, 7, 'No', 1, 0, 'C');
        $pdf->Cell(45, 7, 'Nama', 1, 0, 'C');
        $pdf->Cell(40, 7, 'Jurusan', 1, 0, 'C');
        $pdf->Cell(15, 7, 'Lulus', 1, 0, 'C');
        $pdf->Cell(30, 7, 'Whatsapp', 1, 0, 'C');
        $pdf->Cell(45, 7, 'Email', 1, 0, 'C');
        $pdf->Cell(35, 7, 'Pekerjaan', 1, 0, 'C');
        $pdf->Cell(40, 7, 'Nama Perusahaan', 1, 0, 'C');
        $pdf->Cell(15, 7, 'Hadir', 1, 0, 'C');
        $pdf->Cell(15, 7, 'Bayar', 1, 1, 'C');

        $pdf->SetFont('Arial', '', 7);
        $pdf->SetXY(3, 37);
        $count = 1;
        foreach ($alumni->result() as $row) {
            $pdf->Cell(10, 7, $count, 1, 0, 'C');
            $pdf->Cell(45, 7, $row->nama, 1, 0, 'C');
            $pdf->Cell(40, 7, $row->jurusan, 1, 0, 'C');
            $pdf->Cell(15, 7, $row->tahunLulus, 1, 0, 'C');
            $pdf->Cell(30, 7, $row->telp, 1, 0, 'C');
            $pdf->Cell(45, 7, $row->email, 1, 0, 'C');
            $pdf->Cell(35, 7, $row->pekerjaan, 1, 0, 'C');
            $pdf->Cell(40, 7, $row->namaPerusahaan, 1, 0, 'C');
            if ($row->statusHadir == 1) {
                $pdf->SetFillColor(0, 255, 100);
                $pdf->Cell(15, 7, 'V', 1, 0, 'C', true);
            } else {
                $pdf->Cell(15, 7, 'X', 1, 0, 'C');
            }
            if ($row->statusBayar == 1) {
                $pdf->SetFillColor(0, 255, 100);
                $pdf->Cell(15, 7, 'V', 1, 1, 'C', true);
            } else {
                $pdf->Cell(15, 7, 'X', 1, 1, 'C');
            }
            $pdf->SetX(3);
            $count++;
        }
        $totalAlumniInt = $count - 1;
        $totalAlumniString = 'Total Alumni = ' . $totalAlumniInt . '    ';
        $pdf->SetFont('Arial', '', 12);
        $pdf->Cell(290, 10, $totalAlumniString, 1, 0, 'R');

        $pdf->Output('I', 'Daftar Alumni.pdf');
    }
}