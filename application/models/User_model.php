<?php
class User_model extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }

    public function get_user($username, $password)
    {
        $query = $this->db->get_where('tbl_users', array('username' => $username, 'password' => $password));
        return $query->row();

    }

    public function get_user_uuid($uuid)
    {
        $query = $this->db->get_where('tbl_users', array('uuid' => $uuid));
        return $query->row();

    }

    public function registrasi($uuid, $username, $password, $nama, $jurusan, $tahunLulus, $telp, $email, $pekerjaan, $jabatan, $namaPerusahaan)
    {
        $data = array(
            'idUser' => 'NULL',
            'uuid' => $uuid,
            'username' => $username,
            'password' => $password,
            'nama' => $nama,
            'jurusan' => $jurusan,
            'tahunLulus' => $tahunLulus,
            'telp' => $telp,
            'email' => $email,
            'pekerjaan' => $pekerjaan,
            'jabatan' => $jabatan,
            'namaPerusahaan' => $namaPerusahaan,
            'role' => 'alumni',
            'statusBayar' => '0',
            'statusHadir' => '0'
        );

        if ($this->db->insert('tbl_users', $data)) {
            // Registrasi berhasil
            return true;
        } else {
            // Registrasi gagal
            return false;
        }


    }

    public function is_username_exist($username)
    {
        $this->db->where('username', $username);
        $query = $this->db->get('tbl_users');
        return $query->num_rows() > 0;
    }
}