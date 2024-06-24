<?php
defined('BASEPATH') or exit('No direct script access allowed');
date_default_timezone_set('Asia/Calcutta');
class Block extends CI_Controller
{

    public $form_data = array();
    public function __construct()
    {
        parent::__construct();
        $this->load->library('session');
        $this->load->helper('url');
        $this->load->library('upload');
        $this->load->library('form_validation');
        $this->load->model('DistrictModel');
        $this->load->model('BlockModel');
        $this->load->model('JawanModel');
        $this->load->model('DepartmentModel');
        $this->load->model('RequestModel');
    }

    private function isLoggedIn()
    {
        return $this->session->userdata('user_id') !== null;
    }

    private function checkLogin()
    {
        if (!$this->isLoggedIn()) {
            redirect(base_url('login'));
        }
    }

    public function getJawansByBlocks($blockId)
    {
        if ($this->session->userdata('role_name') != 'block') {
            redirect(base_url(), 'refresh');
        }

        $availability = $this->input->get('availability');
        $training = $this->input->get('training');
        $generalSearch = $this->input->get('generalSearch');

        $department = $this->input->get('department');

        $this->load->model('JawanModel');
        $jawans = $this->JawanModel->getFilteredJawansByBlockId($blockId, $availability, $training, $department, $generalSearch);

        header("Content-Type: application/json");
        echo json_encode(['data' => $jawans]);
    }


    public function jawanDetails()
    {
        $this->checkLogin();
        if ($this->session->userdata('role_name') != 'block') {
            redirect(base_url(), 'refresh');
        }
        $jawans = $this->JawanModel->getJawansByBlockId($this->session->userdata('user_id'));
        $data['jawans'] = $jawans;
        $data['availableJawanCount'] = $this->JawanModel->getAvailableJawanByBlockId($this->session->userdata('user_id'));
        $data['departments'] = $this->DepartmentModel->getDepartments();

        $this->load->view("admin/templates/header");
        $this->load->view('block/viewJawanBlock', $data);
        $this->load->view("admin/templates/footer");
    }

    public function allocateJawanToDepartment()
    {
        $this->checkLogin();
        if ($this->session->userdata('role_name') != 'block') {
            echo json_encode(['status' => 'error', 'message' => 'Unauthorized access']);
            return;
        }
        $jawanId = $this->input->post('jawan_id');
        $departmentId = $this->input->post('department_id');
        if ($departmentId == null) {
            echo json_encode(['status' => 'error', 'message' => 'Please select a department to allocate jawan.']);
        } else {
            $result = $this->JawanModel->allocateJawanToDepartment($jawanId, $departmentId);
            if ($result) {
                echo json_encode(['status' => 'success', 'message' => 'Jawan allocated to department successfully.']);
            } else {
                echo json_encode(['status' => 'error', 'message' => 'Jawan allocation failed or already allocated.']);
            }
        }
    }

    public function deallocateJawanFromDepartment()
    {
        $this->checkLogin();
        if ($this->session->userdata('role_name') != 'block') {
            echo json_encode(['status' => 'error', 'message' => 'Unauthorized access']);
            return;
        }

        $jawanId = $this->input->post('jawan_id');
        if ($jawanId) {
            $result = $this->JawanModel->deallocateJawanToDepartment($jawanId, null);
            if ($result) {
                echo json_encode(['status' => 'success', 'message' => 'Jawan deallocated from department successfully.']);
            } else {
                echo json_encode(['status' => 'error', 'message' => 'Jawan might already be deallocated.']);
            }
        } else {
            echo json_encode(['status' => 'error', 'message' => 'Invalid Jawan ID provided.']);
        }
    }

    public function requests()
    {
        $this->checkLogin();
        if ($this->session->userdata('role_name') != 'block') {
            redirect(base_url(), 'refresh');
        }
        $data['requests'] = $this->RequestModel->getRequestsByBlockId($this->session->userdata('user_id'));
        $this->load->view("admin/templates/header");
        $this->load->view('block/requests', $data);
        $this->load->view("admin/templates/footer");
    }

    // public function getRequestByBlockId()
    // {
    //     $this->checkLogin();
    //     if ($this->session->userdata('role_name') != 'block') {
    //         echo json_encode(['status' => 'error', 'message' => 'Unauthorized access']);
    //         return;
    //     }
    //     $requests = $this->RequestModel->getRequestsByBlockId($this->session->userdata('user_id'));
    //     header("Content-Type: application/json");
    //     echo json_encode(['data' => $requests]);
    // }

    public function requestDetailsBlockwise()
    {
        $this->checkLogin();
        if ($this->session->userdata('role_name') != 'block') {
            echo json_encode(['status' => 'error', 'message' => 'Unauthorized access']);
            return;
        }
        $requests = $this->RequestModel->getRequestsWithSkilledJawans($this->session->userdata('user_id'));
        header("Content-Type: application/json");
        echo json_encode(['data' => $requests]);
    }

    public function getRequestDetails($requestId)
    {
        $this->checkLogin();
        if ($this->session->userdata('role_name') != 'block') {
            echo json_encode(['status' => 'error', 'message' => 'Unauthorized access']);
            return;
        }
        $request = $this->RequestModel->getRequestByIdForBlock($requestId, $this->session->userdata('user_id'));
        header("Content-Type: application/json");
        echo json_encode(['data' => $request]);
    }
    public function approveRequest()
    {
        $this->checkLogin();
        if ($this->session->userdata('role_name') != 'block') {
            echo json_encode(['status' => 'error', 'message' => 'Unauthorized access']);
            return;
        }
    
        // Read and decode raw input data
        $rawData = file_get_contents('php://input');
    
        $data = json_decode($rawData, true);
        $requestId = isset($data['request_id']) ? $data['request_id'] : null;
        $blockId = isset($data['block_id']) ? $data['block_id'] : null;
    
        if (empty($requestId) || empty($blockId)) {
            echo json_encode(['status' => 'error', 'message' => 'Invalid request ID or block ID']);
            return;
        }
    
        $this->load->model('RequestModel'); // Ensure the model is loaded
    
        $result = $this->RequestModel->approveRequest($requestId, $blockId);
    
        if ($result) {
            echo json_encode(['status' => 'success', 'message' => 'Request approved successfully.']);
        } else {
            echo json_encode(['status' => 'error', 'message' => 'Request approval failed.']);
        }
    }
    

    public function allocateRequest()
{
    $this->checkLogin();
    if ($this->session->userdata('role_name') != 'block') {
        echo json_encode(['status' => 'error', 'message' => 'Unauthorized access']);
        return;
    }

    // Read and decode raw input data
    $rawData = file_get_contents('php://input');
    $data = json_decode($rawData, true);
    $requestId = isset($data['request_id']) ? $data['request_id'] : null;
    $blockId = isset($data['block_id']) ? $data['block_id'] : null;

    if (empty($requestId) || empty($blockId)) {
        echo json_encode(['status' => 'error', 'message' => 'Invalid request ID or block ID']);
        return;
    }

    $this->load->model('RequestModel'); // Ensure the model is loaded

    $result = $this->RequestModel->allocateRequest($requestId, $blockId);

    if ($result) {
        echo json_encode(['status' => 'success', 'message' => 'Request allocated successfully.']);
    } else {
        echo json_encode(['status' => 'error', 'message' => 'Request allocation failed.']);
    }
}

    




}