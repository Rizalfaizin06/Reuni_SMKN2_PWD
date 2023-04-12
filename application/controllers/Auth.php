<?php
class Auth extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('user_model');


    }

    public function login()
    {
        if ($this->input->cookie('uuid', TRUE)) {
            $uuid = $this->input->cookie('uuid', TRUE);
            $hashName = $this->input->cookie('key', TRUE);


            $user = $this->user_model->get_user_uuid($uuid);

            if (hash('sha256', $user->nama) == $hashName) {
                $this->session->set_userdata('user_id', $user->idUser);
                $this->session->set_userdata('user_role', $user->role);
                $this->session->set_userdata('user_uuid', $user->uuid);
                $this->session->set_userdata('user_nama', $user->nama);
                $this->session->set_userdata('user_jurusan', $user->jurusan);
                $this->session->set_userdata('user_tahunLulus', $user->tahunLulus);
                $this->session->set_userdata('user_telp', $user->telp);
                $this->session->set_userdata('user_email', $user->email);
                $this->session->set_userdata('user_pekerjaan', $user->pekerjaan);
                $this->session->set_userdata('user_jabatan', $user->jabatan);
                $this->session->set_userdata('user_namaPerusahaan', $user->namaPerusahaan);


                $nama = $user->nama;
                $hashName = hash('sha256', $nama);

                if ($this->input->post('rememberMe')) {
                    $cookie_data = array(
                        'name' => 'uuid',
                        'value' => $user->uuid,
                        'expire' => 3600 * 24 * 2,
                    );
                    $this->input->set_cookie($cookie_data);
                    $cookie_data = array(
                        'name' => 'key',
                        'value' => $hashName,
                        'expire' => 3600 * 24 * 2,
                    );
                    $this->input->set_cookie($cookie_data);
                }


                redirect('Dashboard');
            }
        }

        $data['error'] = '';

        if ($this->session->userdata('user_id')) {
            redirect('Dashboard');
        } else {
            if ($this->input->post('login')) {
                $username = strtolower($this->input->post('username'));
                $password = $this->input->post('password');
                $user = $this->user_model->get_user($username, hash('sha256', $password));
                if ($user) {
                    $this->session->set_userdata('user_id', $user->idUser);
                    $this->session->set_userdata('user_role', $user->role);
                    $this->session->set_userdata('user_uuid', $user->uuid);
                    $this->session->set_userdata('user_nama', $user->nama);
                    $this->session->set_userdata('user_jurusan', $user->jurusan);
                    $this->session->set_userdata('user_tahunLulus', $user->tahunLulus);
                    $this->session->set_userdata('user_telp', $user->telp);
                    $this->session->set_userdata('user_email', $user->email);
                    $this->session->set_userdata('user_pekerjaan', $user->pekerjaan);
                    $this->session->set_userdata('user_jabatan', $user->jabatan);
                    $this->session->set_userdata('user_namaPerusahaan', $user->namaPerusahaan);


                    $nama = $user->nama;
                    $hashName = hash('sha256', $nama);

                    if ($this->input->post('rememberMe')) {
                        $cookie_data = array(
                            'name' => 'uuid',
                            'value' => $user->uuid,
                            'expire' => 3600 * 24 * 2,
                        );
                        $this->input->set_cookie($cookie_data);
                        $cookie_data = array(
                            'name' => 'key',
                            'value' => $hashName,
                            'expire' => 3600 * 24 * 2,
                        );
                        $this->input->set_cookie($cookie_data);
                    }


                    redirect('Dashboard');
                } else {
                    $data['error'] = 'Username atau password salah';
                }
            }
        }

        $this->load->view('login', $data);
    }

    public function logout()
    {
        $this->session->sess_destroy();

        // Hapus semua cookies
        delete_cookie('uuid');
        delete_cookie('key');

        // $this->session->unset_userdata('user_id');
        redirect('auth/login');
    }

    function generate_uuid($data = null)
    {
        // Generate 16 bytes (128 bits) of random data or use the data passed into the function.
        $data = $data ?? random_bytes(16);
        assert(strlen($data) == 16);

        // Set version to 0100
        $data[6] = chr(ord($data[6]) & 0x0f | 0x40);
        // Set bits 6-7 to 10
        $data[8] = chr(ord($data[8]) & 0x3f | 0x80);

        // Output the 36 character UUID.
        return vsprintf('%s%s-%s-%s-%s-%s%s%s', str_split(bin2hex($data), 4));
    }

    public function registrasi()
    {
        $data['error'] = '';

        if ($this->input->post('registasi')) {
            $username = strtolower($this->input->post('username'));
            $password = $this->input->post('password');
            $konfirmasiPassword = $this->input->post('konfirmasiPassword');
            $nama = $this->input->post('nama');
            $jurusan = $this->input->post('jurusan');
            $tahunLulus = $this->input->post('tahunLulus');
            $telp = $this->input->post('telp');
            $email = $this->input->post('email');
            $pekerjaan = $this->input->post('pekerjaan');
            $jabatan = $this->input->post('jabatan');
            $namaPerusahaan = $this->input->post('namaPerusahaan');
            $uuid = $this->generate_uuid();

            $this->session->set_userdata('r_username', $username);
            $this->session->set_userdata('r_nama', $nama);
            $this->session->set_userdata('r_jurusan', $jurusan);
            $this->session->set_userdata('r_tahunLulus', $tahunLulus);
            $this->session->set_userdata('r_telp', $telp);
            $this->session->set_userdata('r_email', $email);
            $this->session->set_userdata('r_pekerjaan', $pekerjaan);
            $this->session->set_userdata('r_jabatan', $jabatan);
            $this->session->set_userdata('r_namaPerusahaan', $namaPerusahaan);

            $data['username'] = $this->session->userdata('r_username');
            $data['password'] = $this->session->userdata('r_password');
            $data['nama'] = $this->session->userdata('r_nama');
            $data['jurusan'] = $this->session->userdata('r_jurusan');
            $data['tahunLulus'] = $this->session->userdata('r_tahunLulus');
            $data['r_telp'] = $this->session->userdata('r_telp');
            $data['email'] = $this->session->userdata('r_email');
            $data['pekerjaan'] = $this->session->userdata('r_pekerjaan');
            $data['jabatan'] = $this->session->userdata('r_jabatan');
            $data['namaPerusahaan'] = $this->session->userdata('r_namaPerusahaan');

            if ($password != $konfirmasiPassword) {
                $data['error'] = 'Konfirmasi Password Berbeda';
                $this->load->view('registrasi', $data);
            } else {
                $registrasi = $this->user_model->is_username_exist($username);
                if ($registrasi) {
                    $data['error'] = 'User Sudah adda';
                    $this->load->view('registrasi', $data);
                } else {
                    $registrasi = $this->user_model->registrasi($uuid, $username, hash('sha256', $password), $nama, $jurusan, $tahunLulus, $telp, $email, $pekerjaan, $jabatan, $namaPerusahaan);
                    if ($registrasi == true) {
                        $data['error'] = 'Registrasi Berhasil';
                        $this->load->view('login', $data);
                    } else {
                        $data['error'] = 'Registrasi Gagal';
                        $this->load->view('registrasi', $data);
                    }
                }
                // $data['error'] = "sdfgsdfgdfgdgsfsdg";
                // $this->load->view('registrasi', $data);
            }
        } else {
            $this->load->view('registrasi');
        }
        // if ($this->session->userdata('user_id')) {
        //     redirect('Dashboard');
        // } else {
        //     if ($this->input->post('login')) {
        //         $username = $this->input->post('username');
        //         $password = $this->input->post('password');
        //         $user = $this->user_model->get_user($username, $password);
        //         if ($user) {
        //             $this->session->set_userdata('user_id', $user->id);
        //             $this->session->set_userdata('user_role', $user->role);
        //             $this->session->set_userdata('user_uuid', $user->uuid);
        //             redirect('Dashboard');
        //         } else {
        //             $data['error'] = 'Username atau password salah';
        //         }
        //     }
        // }

        // $this->load->view('login', $data);
    }

}