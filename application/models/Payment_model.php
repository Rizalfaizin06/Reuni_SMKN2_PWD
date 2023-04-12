<?php
class Payment_model extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }

    public function get_kbm()
    {
        $result = $this->db->get('tbl_kbm');
        return $result;
    }

    public function get_status_pembayaran($uuid)
    {
        $this->db->select('*');
        $this->db->from('tbl_users');
        $this->db->where('uuid', $uuid);
        $result = $this->db->get()->row();
        return $result;
    }

    public function get_status_konfirmasi()
    {
        $uuid = $this->session->userdata('user_uuid');
        $this->db->select('konfirmasiBK, konfirmasiWakel');
        $this->db->from('tbl_perizinan');
        $this->db->where('uuid', $uuid);
        $this->db->order_by('id', 'DESC');
        $this->db->limit(1);
        $result = $this->db->get()->row();
        return $result;
    }

    public function get_all_users()
    {
        $this->db->select('*');
        $this->db->from('tbl_users');
        $result = $this->db->get()->result();
        // $result = $this->db->get('tbl_perizinan');
        return $result;
    }

    public function get_status_bayar($uuid)
    {
        $this->db->select('*');
        $this->db->from('tbl_users');
        $this->db->where('uuid', $uuid);
        $result = $this->db->get()->row();
        // $result = $this->db->get('tbl_perizinan');
        return $result;
    }

    public function get_all_izin_wakel()
    {
        $this->db->select('*');
        $this->db->from('tbl_perizinan');
        $this->db->where('konfirmasiWakel', 0);
        $this->db->order_by('id', 'DESC');
        $result = $this->db->get()->result();
        // $result = $this->db->get('tbl_perizinan');
        return $result;
    }

    public function get_izin($uuid)
    {
        $this->db->select('*');
        $this->db->from('tbl_perizinan');
        $this->db->where('uuid', $uuid);
        $this->db->order_by('id', 'DESC');
        $this->db->limit(1);
        $result = $this->db->get()->row();
        // $result = $this->db->get('tbl_perizinan');
        return $result;
    }

    public function update_kehadiran($uuid)
    {
        $this->db->set('statusHadir', '1');
        $this->db->where('uuid', $uuid);
        $this->db->update('tbl_users');
    }

    public function update_confirmation($id)
    {
        $this->db->set('statusBayar', '1');
        $this->db->where('idUser', $id);
        $this->db->update('tbl_users');
    }

    public function reject_confirmation($id)
    {
        $this->db->set('statusBayar', '0');
        $this->db->where('idUser', $id);
        $this->db->update('tbl_users');
    }


    public function get_users_count($search = "")
    {
        $this->db->select('*');
        $this->db->from('tbl_users');
        $this->db->where('role', 'alumni');
        $this->db->like('nama', $search);
        $result = $this->db->count_all_results();

        return $result;
    }


    public function get_users($rowno, $rowperpage, $search = "")
    {
        $this->db->select('*');
        $this->db->from('tbl_users');
        $this->db->where('role', 'alumni');
        $this->db->like('nama', $search);

        $result = $this->db->limit($rowperpage, $rowno)->get();
        return $result;
    }
}