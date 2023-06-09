<?php
class Dashboard extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Payment_model');
    }

    public function index()
    {
        if (!$this->session->userdata('user_id')) {
            redirect('auth/login');
        } else {
            if ($this->session->userdata('user_role') == "admin") {
                $this->load->view('dashboard_admin');
            } else {
                $this->load->view('dashboard_alumni');
            }
        }
    }


    public function perizinan()
    {
        $data['error'] = '';

        $data['kbm'] = $this->Payment_model->get_kbm()->result();
        $this->load->view('izin_page_siswa', $data);


    }

    public function verifikasi($row_no = 0)
    {
        // $data['users'] = $this->Payment_model->get_all_users();
        // $this->load->view('verifikasi_pembayaran', $data);

        if ($this->session->userdata('user_role') != "admin") {
            redirect('auth/login');
            exit;
        }


        //search text
        $search = "";
        if ($this->input->method() == 'post') {
            $search = $this->input->post('search');
            $this->session->set_userdata("search", $search);
        } else {
            if ($this->session->userdata('search')) {
                $search = $this->session->userdata('search');
            }
        }

        //--pagination--
        $row_per_page = 20;

        if ($row_no != 0) {
            $row_no = ($row_no - 1) * $row_per_page;
        }
        // Pagination Configuration
        // All record count
        $config['total_rows'] = $this->Payment_model->get_users_count($search);
        $config['base_url'] = base_url() . 'dashboard/verifikasi';
        $config['use_page_numbers'] = true;
        $config['per_page'] = $row_per_page;

        //initialize
        $this->pagination->initialize($config);

        $data['pagination'] = $this->pagination->create_links();

        // Get record
        $data['users'] = $this->Payment_model->get_users($row_no, $row_per_page, $search);

        $data['row'] = $row_no;

        $data['search'] = $search;
        $data['totalRow'] = $config['total_rows'];

        $this->load->view('verifikasi_pembayaran', $data);
    }



    public function cek_status()
    {
        if ($this->session->userdata('user_role') != "admin") {
            redirect('auth/login');
            exit;
        }
        $this->load->view('cek_status_pembayaran');

    }



    public function confirmation_waiting()
    {
        $data['error'] = '';
        if ($this->input->post('izin')) {
            // $username = $this->input->post('username');
            // $password = $this->input->post('password');
            // $user = $this->user_model->get_user($username, $password);
            // if ($user) {
            //     $this->session->set_userdata('user_id', $user->id);
            //     $this->session->set_userdata('user_role', $user->role);
            //     redirect('Dashboard');
            // } else {
            //     $data['error'] = 'Username atau password salah';
            // }

            // $data['status'] = $this->Payment_model->get_status_konfirmasi()->result();
        }

        $data['uuid'] = $this->session->userdata('user_uuid');
        $data['info'] = $this->Payment_model->get_izin($this->session->userdata('user_uuid'));
        $this->load->view('waiting_confirmation_siswa', $data);

    }

    public function update_confirmation()
    {
        if ($this->session->userdata('user_role') != "admin") {
            redirect('auth/login');
            exit;
        }
        if ($this->input->post('konfirm')) {
            $id = $this->input->post('id');
            $this->Payment_model->update_confirmation($id);
            redirect('dashboard/verifikasi');
        } elseif ($this->input->post('reject')) {
            $id = $this->input->post('id');
            $this->Payment_model->reject_confirmation($id);
            redirect('dashboard/verifikasi');
        }

    }




}