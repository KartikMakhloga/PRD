<?php


defined('BASEPATH') or exit('No direct script access allowed');

class DistrictModel extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }

    // i have id, name, username, password, role created_at, updated_at in the database
    public function getDistricts()
    {
        $query = $this->db->get('district');
        return $query->result();
    }

    public function getDistrictById($id)
    {
        $query = $this->db->get_where('district', ['id' => $id]);
        return $query->row();
    }

    public function createDistrict($data)
    {
        $this->db->insert('district', $data);
    }

    public function updateDistrict($id, $data)
    {
        $this->db->where('id', $id);
        $this->db->update('district', $data);
    }

    public function deleteDistrict($id)
    {

        $this->db->select('id');
        $this->db->where('district_id', $id);
        $query = $this->db->get('block');
        $blocks = $query->result();
        foreach ($blocks as $block) {
            $this->db->where('block_id', $block->id);
            $this->db->delete('jawan');
        }

        // delete all blocks of this district before deleting the district
        $this->db->where('district_id', $id);
        $this->db->delete('block');

        // delete the district
        $this->db->where('id', $id);
        $this->db->delete('district');
    }

    public function getDistrictByUsername($username, $password)
    {
        $query = $this->db->get_where('district', ['username' => $username, 'password' => $password]);
        return $query->row();
    }

    

}