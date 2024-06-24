<?php
defined('BASEPATH') or exit('No direct script access allowed');
date_default_timezone_set('Asia/Calcutta');
class District extends CI_Controller
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

    private function notifyBlocks($blocksJawans)
    {
        // foreach ($blocksJawans as $blockId => $numberOfJawans) {
        //     // Send notification to the block
        //     $this->NotificationModel->sendToBlock($blockId, "You are required to provide $numberOfJawans jawans.");
        // }
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

    public function getJawansByBlock($blockId)
    {
        if ($this->session->userdata('role_name') != 'district') {
            redirect(base_url(), 'refresh');
        }

        $availability = $this->input->get('availability');
        $generalSearch = $this->input->get('generalSearch');

        error_log("Received block ID: " . $blockId);
        error_log("Received availability filter: " . $availability);
        error_log("Received general search: " . $generalSearch);

        $this->load->model('JawanModel');
        $jawans = $this->JawanModel->getFilteredJawansByBlockId($blockId, $availability, null, null, $generalSearch);

        header("Content-Type: application/json");
        echo json_encode(['data' => $jawans]);
    }


    public function getJawansByDistrict($id)
    {
        if ($this->session->userdata('role_name') != 'district') {
            redirect(base_url(), 'refresh');
        }
        $jawans = $this->JawanModel->getJawansByDistrictId($id);
        header("Content-Type: application/json");
        echo json_encode(['data' => $jawans]);
    }


    public function jawanDetails()
    {
        $this->checkLogin();
        if ($this->session->userdata('role_name') != 'district') {
            redirect(base_url(), 'refresh');
        }
        $jawans = $this->JawanModel->getJawans();
        $data['jawans'] = $jawans;
        $data['blocks'] = $this->BlockModel->getBlockByDistrictId($this->session->userdata('user_id'));

        $this->load->view("admin/templates/header");
        $this->load->view("district/viewJawanDistrict", $data);
        $this->load->view("admin/templates/footer");
    }

    public function BlockJawans($id)
    {
        $this->checkLogin();
        if ($this->session->userdata('role_name') != 'district') {
            redirect(base_url(), 'refresh');
        }
        $jawans = $this->JawanModel->getJawansByBlockId($id);
        $data['jawans'] = $jawans;
        $data['block_id'] = $id;
        $data['name'] = $this->BlockModel->getBlockById($id)->name;
        $this->load->view("admin/templates/header");
        $this->load->view("district/viewJawansByBlock", $data);
        $this->load->view("admin/templates/footer");
    }

    public function requestJawans()
    {
        $this->checkLogin();
        if ($this->session->userdata('role_name') != 'district') {
            redirect(base_url(), 'refresh');
        }
        $data['departments'] = $this->DepartmentModel->getDepartments();
        $data['blocks'] = $this->BlockModel->getBlockByDistrictId($this->session->userdata('user_id'));
        $data['skills'] = ["Carpenter", "Electrician", "Plumber", "Mason", "Painter", "Welder", "Fitter", "Turner", "Machinist", "Sheet_Metal_Worker", "Computer_Operator_and_Programming_Assistant", "Draftsman_Civil"];

        $this->load->view("admin/templates/header");
        $this->load->view("district/requestJawans", $data);
        $this->load->view("admin/templates/footer");
    }

    // public function registerRequest()
    // {
    //     $this->checkLogin();
    //     if ($this->session->userdata('role_name') != 'district') {
    //         redirect(base_url(), 'refresh');
    //     }
    //     $this->form_validation->set_rules('department_id', 'Department', 'required');
    //     $this->form_validation->set_rules('jawans[]', 'Jawans', 'required');


    //     if ($this->form_validation->run() == false) {
    //         redirect(base_url('district/requestJawans'));
    //     } else {
    //         // Prepare block_ids and jawans arrays
    //         $blockIds = $this->input->post('block_ids');
    //         $jawans = $this->input->post('jawans');
    //         $blocksJawans = array();

    //         // Calculate total jawans and map jawans to block_ids
    //         $totalJawans = 0;
    //         foreach ($jawans as $index => $jawan) {
    //             $totalJawans += $jawan;
    //             $blockId = isset($blockIds[$index]) ? $blockIds[$index] : null;
    //             if ($blockId) {
    //                 $blocksJawans[$blockId] = $jawan;
    //             }
    //         }

    //         $data = array(
    //             'department_id' => $this->input->post('department_id'),
    //             'district_id' => $this->session->userdata('user_id'),
    //             'total_jawans_requested' => $totalJawans,
    //             'status' => 'Pending',
    //             'block_ids' => json_encode($blocksJawans), // Encode the associative array
    //         );

    //         $this->RequestModel->createRequest($data);
    //         $this->session->set_flashdata('success', 'Requested successfully');

    //         // Send notifications to blocks
    //         $this->notifyBlocks($blocksJawans);
    //         redirect(base_url('district/requestJawans'));
    //     }
    // }

    public function registerRequest()
    {
        $this->checkLogin();
        if ($this->session->userdata('role_name') != 'district') {
            redirect(base_url(), 'refresh');
        }

        $block_ids = $this->input->post('block_ids');
        $jawans = $this->input->post('jawans');

        if (!is_array($block_ids) || !is_array($jawans)) {
            $this->session->set_flashdata('error', 'Invalid input.');
            redirect(base_url('district/requestJawans'));
        }

        // Filtering out blocks with empty jawans before combining
        $block_jawans = array_combine($block_ids, $jawans);
        $block_jawans = array_filter($block_jawans, function ($jawans_count) {
            return !empty($jawans_count);
        });

        $this->form_validation->set_rules('department_id', 'Department', 'required');
        $this->form_validation->set_rules('from_date', 'From Date', 'required');
        $this->form_validation->set_rules('demandNumber', 'Demand Number', 'required');

        if ($this->form_validation->run() === FALSE) {
            $this->session->set_flashdata('error', validation_errors());
            redirect(base_url('district/requestJawans'));
        } else {
            $data = [
                'district_id' => $this->session->userdata('user_id'),
                'department_id' => $this->input->post('department_id'),
                'total_jawans_requested' => array_sum($jawans), // Sum of all jawans
                'demand_number' => $this->input->post('demandNumber'),
                'from_date' => $this->input->post('from_date'),
                'to_date' => $this->input->post('to_date'),
                'block_ids' => json_encode($block_jawans)
            ];

            $requestId = $this->RequestModel->insertRequest($data);
            if ($requestId) {
                $skilledData = [];
                foreach ($this->input->post('skilled_jawans') as $blockId => $skills) {
                    // Ensure the sum of the skill counts is greater than zero before adding to skilledData
                    // if (array_sum($skills) > 0) {
                    $skilledData[] = [
                        'request_id' => $requestId,
                        'block_id' => $blockId,
                        'skilled_jawans' => json_encode($skills)
                    ];
                    // }
                }
                $this->RequestModel->insertSkilledJawans($skilledData);
                $this->session->set_flashdata('success', 'Request submitted successfully!');
                redirect(base_url('district/requestJawans'));
            } else {
                $this->session->set_flashdata('error', 'Failed to submit request.');
                redirect(base_url('district/requestJawans'));
            }
        }
    }


    public function registerDepartment()
    {
        $this->checkLogin();
        if ($this->session->userdata('role_name') != 'district') {
            echo json_encode(['status' => 'error', 'message' => 'Unauthorized access']);
            return;
        }
        $this->form_validation->set_rules('name', 'Name', 'required');
        if ($this->form_validation->run() === FALSE) {
            $errors = validation_errors();
            $this->session->set_flashdata('error', $errors);
            echo json_encode(['status' => 'error', 'message' => 'Validation failed: ' . $errors]);
            return;
        } else {
            $data = array(
                'name' => $this->input->post('name'),
                'district_id' => $this->session->userdata('user_id')
            );
            if ($this->DepartmentModel->createDepartment($data)) {
                $this->session->set_flashdata('success', 'Department added successfully');
                echo json_encode(['status' => 'success', 'message' => 'Department added successfully']);
            } else {
                $this->session->set_flashdata('error', 'Database error');
                echo json_encode(['status' => 'error', 'message' => 'Database error']);
            }
        }
    }

    public function allRequest()
    {
        $this->checkLogin();
        if ($this->session->userdata('role_name') != 'district') {
            redirect(base_url(), 'refresh');
        }
        $requests = $this->RequestModel->getRequests();
        $data['requests'] = $requests;
        $this->load->view("admin/templates/header");
        $this->load->view("district/allRequest");
        $this->load->view("admin/templates/footer");
    }

    public function getRequestByDistrictId()
    {
        if ($this->session->userdata('role_name') != 'district') {
            redirect(base_url(), 'refresh');
        }

        $blocks = $this->BlockModel->getAllBlockNames();
        $blockNameMap = [];
        foreach ($blocks as $block) {
            $blockNameMap[$block['id']] = $block['name'];
        }

        $district_id = $this->session->userdata('user_id');
        $requests = $this->RequestModel->getRequestByDistrictId($district_id);

        // Process each request
        foreach ($requests as &$request) {
            // Replace block_ids keys from ID to name
            $newBlockIds = [];
            foreach ($request['block_ids'] as $blockId => $quantity) {
                if (!empty($quantity)) { // Check if the quantity is not empty
                    $blockName = isset($blockNameMap[$blockId]) ? $blockNameMap[$blockId] : 'Unknown Block'; // Fallback in case the block ID isn't found
                    $newBlockIds[$blockName] = $quantity;
                }
            }
            $request['block_ids'] = $newBlockIds; // Update the block_ids with the new keys

            // Clean blocks and skills
            foreach ($request['blocks'] as $blockName => $skills) {
                // Check if the block is empty
                $isEmptyBlock = true;
                foreach ($skills as $skillName => $value) {
                    if (!empty($value)) {
                        $isEmptyBlock = false;
                        break;
                    }
                }
                if ($isEmptyBlock) {
                    // Remove the block if it's empty
                    unset($request['blocks'][$blockName]);
                } else {
                    // Remove empty skills within the block
                    foreach ($skills as $skillName => $value) {
                        if (empty($value)) {
                            unset($request['blocks'][$blockName][$skillName]);
                        }
                    }
                }
            }
        }
        unset($request); // Unset the reference to the last element

        header('Content-Type: application/json');
        echo json_encode(['data' => $requests]);
    }


    public function getRequestById($id)
    {
        $request = $this->RequestModel->getRequestByIdForDistrict($id);

        if ($request) {
            echo json_encode(['data' => $request]);
        } else {
            echo json_encode(['error' => 'Request not found']);
        }
    }

    public function editRequest($id)
    {
        $this->checkLogin();
        if ($this->session->userdata('role_name') != 'district') {
            redirect(base_url(), 'refresh');
        }
        $data['request'] = $this->RequestModel->getRequestById($id);
        $data['departments'] = $this->DepartmentModel->getDepartments();
        $data['blocks'] = $this->BlockModel->getBlockByDistrictId($this->session->userdata('user_id'));
        $data['skills'] = ["Carpenter", "Electrician", "Plumber", "Mason", "Painter", "Welder", "Fitter", "Turner", "Machinist", "Sheet_Metal_Worker", "Computer_Operator_and_Programming_Assistant", "Draftsman_Civil"];
        $this->load->view("admin/templates/header");
        $this->load->view("district/editRequest", $data);
        $this->load->view("admin/templates/footer");
    }

    public function updateRequest($id)
    {
        $this->checkLogin();
        if ($this->session->userdata('role_name') != 'district') {
            echo json_encode(['status' => 'error', 'message' => 'Unauthorized access']);
            return;
        }

        $this->form_validation->set_rules('demandNumber', 'Demand Number', 'required');

        if ($this->form_validation->run() === FALSE) {
            $this->session->set_flashdata('error', validation_errors());
            echo json_encode(['status' => 'error', 'message' => 'Validation failed: ' . validation_errors()]);
            redirect($_SERVER['HTTP_REFERER']);
            return;
        }

        $block_ids = $this->input->post('block_ids');
        $jawans = $this->input->post('jawans');

        // Check if both arrays exist and have the same number of elements
        if (!is_array($block_ids) || !is_array($jawans) || count($block_ids) !== count($jawans)) {
            $this->session->set_flashdata('error', 'Mismatched input arrays.');
            echo json_encode(['status' => 'error', 'message' => 'Invalid input: Mismatched block and jawan counts']);
            redirect($_SERVER['HTTP_REFERER']);
            return;
        }

        // Filtering out blocks with empty jawans before combining
        $block_jawans = array_combine($block_ids, $jawans);
        $block_jawans = array_filter($block_jawans, function ($jawans_count) {
            return !empty($jawans_count);
        });

        $data = [
            'department_id' => $this->input->post('department_id'),
            'total_jawans_requested' => array_sum($jawans), // Sum of all jawans
            'demand_number' => $this->input->post('demandNumber'),
            'from_date' => $this->input->post('from_date'),
            'to_date' => $this->input->post('to_date'),
            'block_ids' => json_encode($block_jawans)
        ];

        $requestId = $this->RequestModel->updateRequest($id, $data);

        if ($requestId) {
            foreach ($this->input->post('skilled_jawans') as $blockId => $skills) {
                // if (array_sum($skills) > 0) {
                $skilledData = json_encode($skills); // Directly encode skills to JSON
                $this->RequestModel->updateSkilledJawans($id, $blockId, $skilledData);
                // }
            }
            $this->session->set_flashdata('success', 'Request updated successfully!');
            echo json_encode(['status' => 'success', 'message' => 'Request updated successfully']);
            redirect($_SERVER['HTTP_REFERER']);
        } else {
            $this->session->set_flashdata('error', 'Failed to update request.');
            echo json_encode(['status' => 'error', 'message' => 'Failed to update request']);
            redirect($_SERVER['HTTP_REFERER']);
        }
    }

    public function generateOrderId($id)
    {
        $this->checkLogin();
        if ($this->session->userdata('role_name') != 'district') {
            echo json_encode(['status' => 'error', 'message' => 'Unauthorized access']);
            return;
        }

        $order_id = substr($this->session->userdata('name'), 0, 3) . rand(1000000, 9999999);

        $result = $this->RequestModel->SaveOrderId($id, $order_id);
        if ($result) {
            if ($this->input->is_ajax_request()) {
                echo json_encode(['status' => 'success', 'message' => 'Order ID generated successfully', 'order_id' => $order_id]);
            } else {
                $this->session->set_flashdata('success', 'Order ID generated successfully!');
                redirect($_SERVER['HTTP_REFERER']);
            }
        } else {
            if ($this->input->is_ajax_request()) {
                echo json_encode(['status' => 'error', 'message' => 'Failed to generate order ID']);
            } else {
                $this->session->set_flashdata('error', 'Failed to generate order ID.');
                redirect($_SERVER['HTTP_REFERER']);
            }
        }
    }


    public function completeOrder($id)
    {
        $this->checkLogin();
        if ($this->session->userdata('role_name') != 'district') {
            echo json_encode(['status' => 'error', 'message' => 'Unauthorized access']);
            return;
        }

        $result = $this->RequestModel->updateOrderStatus($id, 'Completed');
        if ($result) {
            echo json_encode(['success' => true]);
        } else {
            echo json_encode(['success' => false]);
        }
    }

    public function rejectOrder($id) {
        $this->checkLogin();
        if ($this->session->userdata('role_name') != 'district') {
            echo json_encode(['status' => 'error', 'message' => 'Unauthorized access']);
            return;
        }

        $result = $this->RequestModel->updateOrderStatus($id, 'Rejected');
        if ($result) {
            echo json_encode(['success' => true]);
        } else {
            echo json_encode(['success' => false]);
        }
    }

}