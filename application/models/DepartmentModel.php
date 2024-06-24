<?php 

defined('BASEPATH') or exit('No direct script access allowed');

class DepartmentModel extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }

    public function getDepartments()
    {
        // get departments in sorted order by name
        $this->db->order_by('name', 'ASC');
        $query = $this->db->get('department');
        return $query->result();
    }
    
    public function getDepartmentById($id)
    {
        $query = $this->db->get_where('department', ['id' => $id]);
        return $query->row();
    }

    public function createDepartment($data)
    {
        $result = $this->db->insert('department', $data);
        return $this->db->affected_rows() > 0 ? true : false;
    }
    

    public function updateDepartment($id, $data)
    {
        $this->db->where('id', $id);
        $this->db->update('department', $data);
    }

    public function deleteDepartment($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('department');
    }

    
   
}