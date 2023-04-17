<?php
class Ajax extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Payment_model');
    }

    public function check_status_pembayaran()
    {
        if ($this->input->post('uuidSiswa')) {
            $uuidSiswa = $this->input->post('uuidSiswa');

            $data['status'] = $this->Payment_model->get_status_pembayaran($uuidSiswa)->statusBayar;

            if ($data['status'] == 1 || $data['status'] == 0) {
                $this->Payment_model->update_kehadiran($uuidSiswa);
            }

            $this->load->view('ajax/status_pembayaran', $data);

        } else {
            $data['error'] = 'Username atau password salah';
            $this->load->view('ajax/status_pembayaran', $data);
        }

    }

    public function get_status_konfirmasi()
    {
        $status = $this->Payment_model->get_status_konfirmasi();
        $data['konfirmasiBK'] = $status->konfirmasiBK;
        $data['konfirmasiWakel'] = $status->konfirmasiWakel;
        $this->load->view('ajax/ajax_status_pembayaran', $data);

    }
}