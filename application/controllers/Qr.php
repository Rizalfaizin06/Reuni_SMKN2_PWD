<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Qr extends CI_Controller
{

    public function index()
    {
        $this->load->library('phpqrcode/qrlib');

        $data = 'rizalscom.com'; // data yang akan dienkripsi dalam QR code
        $errorCorrectionLevel = 'L'; // tingkat koreksi kesalahan (L, M, Q, atau H)
        $matrixPointSize = 6; // ukuran matriks QR code (1 hingga 10)

        // menghasilkan gambar QR code dan menampilkannya di browser
        QRcode::png($data, false, $errorCorrectionLevel, $matrixPointSize);
    }

}