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
        $this->db->order_by('jawan.name', 'asc');
        $query = $this->db->get();
        return $query->result();
    }

    public function getJawansByDistrictIdForReport($districtId)
    {
        $this->db->select('jawan.*, block.name as block_name');
        $this->db->from('jawan');
        $this->db->join('block', 'block.id = jawan.block_id');
        $this->db->where('block.district_id', $districtId);
        $this->db->order_by('jawan.name', 'asc');
        $query = $this->db->get();
        return $query->result();
    }

    public function getAvailableJawanByBlockId($blockId)
    {
        $this->db->select('jawan.*, block.name as block_name');
        $this->db->from('jawan');
        $this->db->join('block', 'block.id = jawan.block_id');
        $this->db->where('block.id', $blockId);
        $this->db->where('jawan.availability', 0);
        $this->db->order_by('jawan.name', 'asc');
        $query = $this->db->get();
        return $query->result();

    }

    public function allocateJawanToDepartment($jawanId, $requestId)
    {
        if ($this->getJawanById($jawanId)->department_id == null) {
            $this->db->where('id', $jawanId);
            $this->db->update('jawan', ['request_id' => $requestId, 'availability' => 1]);
            return true;
        } else {
            return false;
        }
    }

    public function deallocateJawanToDepartment($jawanId)
    {
        if ($this->getJawanById($jawanId)->request_id != null) {
            $this->db->where('id', $jawanId);
            $this->db->update('jawan', ['department_id' => null, 'availability' => 0, 'request_id' => null, 'from' => null, 'to' => null]);
            return true;
        } else {
            return false;
        }
    }

    public function getFilteredJawansByBlockId($blockId, $availability = null, $training = null, $department = null, $generalSearch = null)
    {
        $this->db->from('jawan');
        $this->db->where('block_id', $blockId);

        if ($availability !== null && $availability !== '') {
            $this->db->where('availability', $availability);
        }

        if ($training !== null && $training !== '') {
            if ($training === 'untrained') {
                $this->db->where('training', 'none');
            } else if ($training === 'trained') {
                $this->db->where('training !=', 'none');
            }
        }

        if ($department !== null && $department !== '') {

            $this->db->where('department_id', $department);

        }

        if ($generalSearch) {
            $this->db->group_start();
            $this->db->like('name', $generalSearch);
            $this->db->or_like('father_name', $generalSearch);
            $this->db->or_like('residential_address', $generalSearch);
            $this->db->or_like('permanent_address', $generalSearch);
            $this->db->group_end();
        }

        $query = $this->db->get();
        return $query->result();
    }

    public function getAvailableJawansByBlockId($blockId)
    {
        $this->db->from('jawan');
        $this->db->where('block_id', $blockId);
        $this->db->where('availability', 0);
        $query = $this->db->get();
        return $query->result();
    }



    public function allocateJawans($jawan_ids, $requestId, $blockId)
    {
        $this->db->where_in('id', $jawan_ids);
        $this->db->update('jawan', ['request_id' => $requestId, 'availability' => 1]);

        $this->db->where('request_id', $requestId);
        $this->db->where('block_id', $blockId);
        $this->db->update('skilled_jawan_request', ['approval' => '2']);

        return true;

    }


}