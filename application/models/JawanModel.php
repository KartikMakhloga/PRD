<?php


defined('BASEPATH') or exit('No direct script access allowed');

class JawanModel extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }

    public function getJawans()
    {
        $query = $this->db->get('jawan');
        return $query->result();
    }

    public function getJawanById($id)
    {
        $query = $this->db->get_where('jawan', ['id' => $id]);
        return $query->row();
    }

    public function createJawan($data)
    {
        $this->db->insert('jawan', $data);
    }

    public function updateJawan($id, $data)
    {
        $this->db->where('id', $id);
        $this->db->update('jawan', $data);
    }

    public function deleteJawan($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('jawan');
    }

    public function getJawanByUsername($username)
    {
        $query = $this->db->get_where('jawan', ['username' => $username]);
        return $query->row();
    }

    public function getAllJawansWithBlockName()
    {
        $this->db->select('jawan.*, block.name as block_name');
        $this->db->from('jawan');
        $this->db->join('block', 'block.id = jawan.block_id');
        $query = $this->db->get();
        return $query->result();
    }

    public function getJawansByBlockId($blockId)
    {
        $query = $this->db->get_where('jawan', ['block_id' => $blockId]);
        return $query->result();
    }

    public function getJawansByDistrictId($districtId)
    {
        $this->db->select('jawan.*, block.name as block_name');
        $this->db->from('jawan');
        $this->db->join('block', 'block.id = jawan.block_id');
        $this->db->where('block.district_id', $districtId);
        $query = $this->db->get();
        return $query->result();
    }


}