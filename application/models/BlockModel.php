<?php 

defined('BASEPATH') or exit('No direct script access allowed');

class BlockModel extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }

    public function getBlocks()
    {
        // get blocks in sorted order by name
        $this->db->order_by('name', 'ASC');
        $query = $this->db->get('block');
        return $query->result();
        
    }

    public function getBlockById($id)
    {
        $query = $this->db->get_where('block', ['id' => $id]);
        return $query->row();
    }

    public function createBlock($data)
    {
        $this->db->insert('block', $data);
    }

    public function updateBlock($id, $data)
    {
        $this->db->where('id', $id);
        $this->db->update('block', $data);
    }

    public function deleteBlock($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('block');
    }

    public function getBlockByUsername($username)
    {
        $query = $this->db->get_where('block', ['username' => $username]);
        return $query->row();
    }

    public function getAllBlocksWithDistrictNames()
    {
        $this->db->select('block.*, district.name as district_name');
        $this->db->from('block');
        $this->db->join('district', 'district.id = block.district_id');
        $query = $this->db->get();
        return $query->result();
    }

    public function getBlockByDistrictId($district_id)
    {
        $query = $this->db->get_where('block', ['district_id' => $district_id]);
        return $query->result();
    }
    
   
}