<?php
defined('BASEPATH') or exit('No direct script access allowed');
date_default_timezone_set('Asia/Calcutta');
class Admin extends CI_Controller
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
        $this->load->helper('form');

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

    public function index()
    {
        $this->checkLogin();
        $jawans = $this->JawanModel->getJawans();
        $data['jawans'] = $jawans;
        $data['blocks'] = $this->BlockModel->getBlocksByDistrictId($this->session->userdata('user_id'));
        $data['districts'] = $this->DistrictModel->getDistricts();
        $this->load->view("admin/templates/header");
        $this->load->view("admin/home", $data);
        $this->load->view("admin/templates/footer");
    }

    public function districts()
    {
        // Fetch data from your database
        if ($this->session->userdata('role_name') != 'admin') {
            redirect(base_url(), 'refresh');
        }
        $districts = $this->DistrictModel->getDistricts();
        foreach ($districts as $district) {
            unset($district->password);
        }

        // Return data in JSON format
        header('Content-Type: application/json');
        echo json_encode($districts);
    }


    public function blocks()
    {
        // Fetch data from your database
        if ($this->session->userdata('role_name') != 'admin') {
            redirect(base_url(), 'refresh');
        }
        $blocks = $this->BlockModel->getAllBlocksWithDistrictNames();
        foreach ($blocks as $block) {
            unset($block->password);
        }

        // Return data in JSON format
        header('Content-Type: application/json');
        echo json_encode($blocks);
    }

    public function jawans()
    {
        // Fetch data from your database
        if ($this->session->userdata('role_name') != 'admin') {
            redirect(base_url(), 'refresh');
        }
        $jawans = $this->JawanModel->getAllJawansWithBlockName();
        foreach ($jawans as $jawan) {
            unset($jawan->password);
        }

        // Return data in JSON format
        header('Content-Type: application/json');
        echo json_encode($jawans);
    }


    public function login()
    {
        if ($this->isLoggedIn()) {
            redirect(base_url());
        } else {
            $this->load->view("admin/login");
        }
    }

    public function registerDistrict()
    {
        $this->checkLogin();
        if ($this->session->userdata('role_name') != 'admin') {
            redirect(base_url(), 'refresh');
        }
        $this->form_validation->set_rules('name', 'Name', 'required');
        $this->form_validation->set_rules('username', 'Username', 'required');
        $this->form_validation->set_rules('password', 'Password', 'required');
        $this->form_validation->set_rules('confirm_password', 'Confirm Password', 'required|matches[password]');

        if ($this->form_validation->run() == FALSE) {
            $this->session->set_flashdata('error', validation_errors());
            redirect($_SERVER['HTTP_REFERER']);
        } else {
            $data = [
                'name' => $this->input->post('name'),
                'username' => $this->input->post('username'),
                'password' => $this->input->post('password'),
                'password_encrypted' => password_hash($this->input->post('password'), PASSWORD_DEFAULT),
                'role' => 'district'
            ];
            $this->DistrictModel->createDistrict($data);
            $this->session->set_flashdata('success', 'District registered successfully');
            redirect($_SERVER['HTTP_REFERER']);
        }
    }

    public function registerBlock()
    {
        $this->checkLogin();
        if ($this->session->userdata('role_name') != 'admin') {
            redirect(base_url(), 'refresh');
        }
        $this->form_validation->set_rules('district_id', 'District', 'required');
        $this->form_validation->set_rules('name', 'Name', 'required');
        $this->form_validation->set_rules('username', 'Username', 'required');
        $this->form_validation->set_rules('password', 'Password', 'required');
        $this->form_validation->set_rules('confirm_password', 'Confirm Password', 'required|matches[password]');

        if ($this->form_validation->run() == FALSE) {
            $districts = $this->DistrictModel->getDistricts();
            $data['districts'] = $districts;
            $this->session->set_flashdata('error', validation_errors());
            redirect($_SERVER['HTTP_REFERER']);
        } else {
            $data = [
                'district_id' => $this->input->post('district_id'),
                'name' => $this->input->post('name'),
                'username' => $this->input->post('username'),
                'password' => $this->input->post('password'),
                'password_encrypted' => password_hash($this->input->post('password'), PASSWORD_DEFAULT),
                'role' => 'block'
            ];
            $this->BlockModel->createBlock($data);
            $this->session->set_flashdata('success', 'Block registered successfully');
            redirect($_SERVER['HTTP_REFERER']);
        }
    }

    public function signin()
    {
        if ($this->isLoggedIn()) {
            redirect(base_url());
        }

        $this->form_validation->set_rules('username', 'Username', 'required');
        $this->form_validation->set_rules('password', 'Password', 'required');

        if ($this->form_validation->run() == FALSE) {
            $this->session->set_flashdata('error', validation_errors());
            redirect(base_url('login'));
        } else {
            $username = $this->input->post('username');
            $password = $this->input->post('password');

            $district = $this->DistrictModel->getDistrictByUsername($username, $password);
            $block = $this->BlockModel->getBlockByUsername($username);
            $adminUsername = 'admin';
            $adminPassword = 'admin';
            if ($district) {
                $blocks = $this->BlockModel->getBlocksByDistrictId($district->id);
                $this->session->set_userdata([
                    'user_id' => $district->id,
                    'role_name' => $district->role,
                    'name' => $district->name,
                    'email' => $district->username,
                    'blocks' => $blocks
                ]);
                redirect(base_url());
            } elseif ($block) {
                $this->session->set_userdata([
                    'user_id' => $block->id,
                    'role_name' => $block->role,
                    'name' => $block->name,
                    'email' => $block->username
                ]);
                redirect(base_url());
            } elseif ($username == $adminUsername && $password == $adminPassword) {
                $this->session->set_userdata([
                    'user_id' => '0',
                    'role_name' => 'admin',
                    'name' => 'Kartik',
                    'email' => $adminUsername
                ]);
                redirect(base_url());
            } else {
                $this->session->set_flashdata('error', 'Invalid username or password');
                redirect(base_url('login'));
            }
        }
    }

    public function logout()
    {
        $this->checkLogin();
        $this->session->sess_destroy();
        redirect(base_url('login'));
    }


    public function addDistrict()
    {
        $this->checkLogin();
        if ($this->session->userdata('role_name') != 'admin') {
            redirect(base_url(), 'refresh');
        }
        $this->load->view("admin/templates/header");
        $this->load->view("admin/addDistrict");
        $this->load->view("admin/templates/footer");
    }

    public function addBlock()
    {
        $this->checkLogin();
        if ($this->session->userdata('role_name') != 'admin') {
            redirect(base_url(), 'refresh');
        }
        $districts = $this->DistrictModel->getDistricts();
        $data['districts'] = $districts;
        $this->load->view("admin/templates/header");
        $this->load->view("admin/addBlock", $data);
        $this->load->view("admin/templates/footer");
    }

    public function viewDistrict()
    {
        if ($this->session->userdata('role_name') != 'admin') {
            redirect(base_url(), 'refresh');
        }
        $this->checkLogin();
        $districts = $this->DistrictModel->getDistricts();
        $data['districts'] = $districts;
        $this->load->view("admin/templates/header");
        $this->load->view("admin/viewDistrict", $data);
        $this->load->view("admin/templates/footer");
    }

    public function viewBlock()
    {
        if ($this->session->userdata('role_name') != 'admin') {
            redirect(base_url(), 'refresh');
        }
        $this->checkLogin();
        $blocks = $this->BlockModel->getBlocks();
        $data['blocks'] = $blocks;
        $this->load->view("admin/templates/header");
        $this->load->view("admin/viewBlock", $data);
        $this->load->view("admin/templates/footer");
    }

    public function editDistrict($id)
    {
        $this->checkLogin();
        if ($this->session->userdata('role_name') != 'admin') {
            redirect(base_url(), 'refresh');
        }
        $district = $this->DistrictModel->getDistrictById($id);
        $data['district'] = $district;
        $this->load->view("admin/templates/header");
        $this->load->view("admin/editDistrict", $data);
        $this->load->view("admin/templates/footer");
    }

    public function updateDistrict($id)
    {
        $this->checkLogin();
        if ($this->session->userdata('role_name') != 'admin') {
            redirect(base_url(), 'refresh');
        }
        $this->form_validation->set_rules('name', 'Name', 'required');
        $this->form_validation->set_rules('username', 'Username', 'required');

        if ($this->form_validation->run() == FALSE) {
            $this->session->set_flashdata('error', validation_errors());
            redirect($_SERVER['HTTP_REFERER']);
        } else {
            $data = [
                'name' => $this->input->post('name'),
                'username' => $this->input->post('username')
            ];
            $this->DistrictModel->updateDistrict($id, $data);
            $this->session->set_flashdata('success', 'District updated successfully');
            redirect($_SERVER['HTTP_REFERER']);
        }
    }

    public function deleteDistrict($id)
    {
        $this->checkLogin();
        if ($this->session->userdata('role_name') != 'admin') {
            redirect(base_url(), 'refresh');
        }
        $this->DistrictModel->deleteDistrict($id);
        $this->session->set_flashdata('success', 'District deleted successfully');
        redirect($_SERVER['HTTP_REFERER']);
    }

    public function editBlock($id)
    {
        $this->checkLogin();
        if ($this->session->userdata('role_name') != 'admin') {
            redirect(base_url(), 'refresh');
        }
        $block = $this->BlockModel->getBlockById($id);
        $districts = $this->DistrictModel->getDistricts();
        $data['block'] = $block;
        $data['districts'] = $districts;
        $this->load->view("admin/templates/header");
        $this->load->view("admin/editBlock", $data);
        $this->load->view("admin/templates/footer");
    }

    public function updateBlock($id)
    {
        $this->checkLogin();
        if ($this->session->userdata('role_name') != 'admin') {
            redirect(base_url(), 'refresh');
        }
        $this->form_validation->set_rules('district_id', 'District', 'required');
        $this->form_validation->set_rules('name', 'Name', 'required');
        $this->form_validation->set_rules('username', 'Username', 'required');

        if ($this->form_validation->run() == FALSE) {
            $this->session->set_flashdata('error', validation_errors());
            redirect($_SERVER['HTTP_REFERER']);
        } else {
            $data = [
                'district_id' => $this->input->post('district_id'),
                'name' => $this->input->post('name'),
                'username' => $this->input->post('username')
            ];
            $this->BlockModel->updateBlock($id, $data);
            $this->session->set_flashdata('success', 'Block updated successfully');
            redirect($_SERVER['HTTP_REFERER']);
        }
    }

    public function deleteBlock($id)
    {
        $this->checkLogin();
        if ($this->session->userdata('role_name') != 'admin') {
            redirect(base_url(), 'refresh');
        }
        $this->BlockModel->deleteBlock($id);
        $this->session->set_flashdata('success', 'Block deleted successfully');
        redirect($_SERVER['HTTP_REFERER']);
    }

    public function addJawan()
    {
        $this->checkLogin();
        if ($this->session->userdata('role_name') != 'admin') {
            redirect(base_url(), 'refresh');
        }
        $blocks = $this->BlockModel->getBlocks();
        $data['blocks'] = $blocks;
        $this->load->view("admin/templates/header");
        $this->load->view("admin/addJawan", $data);
        $this->load->view("admin/templates/footer");
    }

    public function registerJawan()
    {
        $this->checkLogin();
        if ($this->session->userdata('role_name') != 'admin') {
            redirect(base_url(), 'refresh');
        }

        // Setting validation rules for each input field
        $this->form_validation->set_rules('block_id', 'Block', 'required');
        $this->form_validation->set_rules('name', 'Name', 'required');
        $this->form_validation->set_rules('father_name', 'Father Name', 'required');
        $this->form_validation->set_rules('village', 'Village', 'required');
        $this->form_validation->set_rules('mobile_number', 'Mobile Number', 'required');
        $this->form_validation->set_rules('alternative_mobile_number', 'Alternative Mobile Number', 'required');
        $this->form_validation->set_rules('aadhar_number', 'Aadhar Number', 'required');
        $this->form_validation->set_rules('pan_number', 'Pan Number', 'required');
        $this->form_validation->set_rules('bank_name', 'Bank Name', 'required');
        $this->form_validation->set_rules('account_number', 'Account Number', 'required');
        $this->form_validation->set_rules('ifsc_code', 'Ifsc Code', 'required');
        $this->form_validation->set_rules('training', 'Training', 'required');
        $this->form_validation->set_rules('skills', 'Skills', 'required');
        $this->form_validation->set_rules('birth_mark', 'Birth Mark');
        $this->form_validation->set_rules('height', 'Height', 'required|numeric');
        $this->form_validation->set_rules('weight', 'Weight', 'required|numeric');
        $this->form_validation->set_rules('blood_group', 'Blood Group', 'required|alpha_numeric');
        $this->form_validation->set_rules('dob', 'Date of Birth', 'required');
        // $this->form_validation->set_rules('photo', 'Profile Photo', 'required');
        // $this->form_validation->set_rules('aadhar_card', 'Aadhar Card', 'required');
        // $this->form_validation->set_rules('pan_card', 'Pan Card', 'required');
        // $this->form_validation->set_rules('learning_certificate', 'Learning Certificate', 'required');
        // $this->form_validation->set_rules('eight_certificate', 'Eight Certificate', 'required');
        // $this->form_validation->set_rules('medical', 'Medical', 'required');
        // $this->form_validation->set_rules('police_verification', 'Police Verification', 'required');
        // $this->form_validation->set_rules('caste_certificate', 'Caste Certificate', 'required');



        // Handling form submission
        if ($this->form_validation->run() == FALSE) {
            $blocks = $this->BlockModel->getBlocks();
            $data['blocks'] = $blocks;
            $this->session->set_flashdata('error', validation_errors());
            redirect($_SERVER['HTTP_REFERER']);
        } else {

            $jawan_name = url_title($this->input->post('name'), 'underscore', TRUE); // Sanitize and create a valid directory name
            $jawan_id = $this->input->post('mobile_number');

            $upload_path = './uploads/' . $jawan_name . '_' . $jawan_id;

            // Check if directory exists, if not create it
            if (!is_dir($upload_path)) {
                mkdir($upload_path, 0777, TRUE);
            }
            // Handle file uploads
            $config['upload_path'] = $upload_path;
            $config['allowed_types'] = 'gif|jpg|png|jpeg|pdf';
            $config['max_size'] = 2048;
            $this->upload->initialize($config);

            // Upload profile photo
            if (!$this->upload->do_upload('photo')) {
                $error = $this->upload->display_errors();
                $this->session->set_flashdata('error', $error);
                redirect($_SERVER['HTTP_REFERER']);
            } else {
                $photo_data = $this->upload->data();
                $profile_photo = $photo_data['file_name'];
            }

            // Upload Aadhar Card
            if (!$this->upload->do_upload('aadhar_card')) {
                $error = $this->upload->display_errors();
                $this->session->set_flashdata('error', $error);
                redirect($_SERVER['HTTP_REFERER']);
            } else {
                $aadhar_data = $this->upload->data();
                $aadhar_card = $aadhar_data['file_name'];
            }

            // Upload PAN Card
            if (!$this->upload->do_upload('pan_card')) {
                $error = $this->upload->display_errors();
                $this->session->set_flashdata('error', $error);
                redirect($_SERVER['HTTP_REFERER']);
            } else {
                $pan_data = $this->upload->data();
                $pan_card = $pan_data['file_name'];
            }

            // Upload training certificate
            if (!$this->upload->do_upload('learning_certificate')) {
                $error = $this->upload->display_errors();
                $this->session->set_flashdata('error', $error);
                redirect($_SERVER['HTTP_REFERER']);
            } else {
                $training_data = $this->upload->data();
                $training_certificate = $training_data['file_name'];
            }

            // Upload eight certificate
            if (!$this->upload->do_upload('eight_certificate')) {
                $error = $this->upload->display_errors();
                $this->session->set_flashdata('error', $error);
                redirect($_SERVER['HTTP_REFERER']);
            } else {
                $eight_data = $this->upload->data();
                $eight_certificate = $eight_data['file_name'];
            }

            // Upload medical certificate
            if (!$this->upload->do_upload('medical')) {
                $error = $this->upload->display_errors();
                $this->session->set_flashdata('error', $error);
                redirect($_SERVER['HTTP_REFERER']);
            } else {
                $medical_data = $this->upload->data();
                $medical = $medical_data['file_name'];
            }

            // Upload police verification
            if (!$this->upload->do_upload('police_verification')) {
                $error = $this->upload->display_errors();
                $this->session->set_flashdata('error', $error);
                redirect($_SERVER['HTTP_REFERER']);
            } else {
                $police_data = $this->upload->data();
                $police_verification = $police_data['file_name'];
            }

            // Upload caste certificate
            if (!$this->upload->do_upload('caste_certificate')) {
                $error = $this->upload->display_errors();
                $this->session->set_flashdata('error', $error);
                redirect($_SERVER['HTTP_REFERER']);
            } else {
                $caste_data = $this->upload->data();
                $caste_certificate = $caste_data['file_name'];
            }

            // Check if permanent address is the same as residential
            $same_as_residential = $this->input->post('same_as_residential_address') == '1';
            $residential_address = $this->input->post('address1') . ', ' . $this->input->post('village') . ', ' . $this->input->post('city') . ', ' . $this->input->post('state') . ', ' . $this->input->post('country') . ', ' . $this->input->post('postal_code');
            $permanent_address = $same_as_residential ? $residential_address : $this->input->post('permanent_address1') . ', ' . $this->input->post('permanent_village') . ', ' . $this->input->post('permanent_city') . ', ' . $this->input->post('permanent_state') . ', ' . $this->input->post('permanent_country') . ', ' . $this->input->post('permanent_postal_code');


            $availability = $this->input->post('availability') == '0' ? 0 : 1;
            $department_id = $this->input->post('department_id') || null;
            $from_date = $this->input->post('from_date') || null;
            $to_date = $this->input->post('to_date') || null;

            $data = [
                'block_id' => $this->input->post('block_id'),
                'name' => $this->input->post('name'),
                'father_name' => $this->input->post('father_name'),
                'residential_address' => $residential_address,
                'permanent_address' => $permanent_address,
                'birth_mark' => $this->input->post('birth_mark'),
                'aadhar' => $this->input->post('aadhar_number'),
                'aadhar_photo' => $aadhar_card,
                'pan' => $this->input->post('pan_number'),
                'pan_photo' => $pan_card,
                'profile_photo' => $profile_photo,
                'bank_name' => $this->input->post('bank_name'),
                'account_number' => $this->input->post('account_number'),
                'ifsc_code' => $this->input->post('ifsc_code'),
                'mobile_number' => $this->input->post('mobile_number'),
                'alternative_number' => $this->input->post('alternative_mobile_number'),
                'training' => $this->input->post('training'),
                'skills' => $this->input->post('skills'),
                'height' => $this->input->post('height'),
                'weight' => $this->input->post('weight'),
                'blood_group' => $this->input->post('blood_group'),
                'training_certificate' => $training_certificate,
                'eight_certificate' => $eight_certificate,
                'medical' => $medical,
                'police_verification' => $police_verification,
                'caste_certificate' => $caste_certificate,
                'dob' => $this->input->post('dob'),
                'availability' => $availability,
                'department_id' => $department_id,
                'from_date' => $from_date,
                'to_date' => $to_date
            ];

            $this->JawanModel->createJawan($data);
            $this->session->set_flashdata('success', 'Jawan registered successfully');
            redirect($_SERVER['HTTP_REFERER']);
        }
    }


    public function viewJawan()
    {
        if ($this->session->userdata('role_name') != 'admin') {
            redirect(base_url(), 'refresh');
        }
        $this->checkLogin();
        $jawans = $this->JawanModel->getJawans();
        $data['jawans'] = $jawans;
        $this->load->view("admin/templates/header");
        $this->load->view("admin/viewJawan", $data);
        $this->load->view("admin/templates/footer");
    }

    public function editJawan($id)
    {
        $this->checkLogin();
        if ($this->session->userdata('role_name') != 'admin') {
            redirect(base_url(), 'refresh');
        }
        $jawan = $this->JawanModel->getJawanById($id);
        $blocks = $this->BlockModel->getBlocks();
        $data['jawan'] = $jawan;
        $data['blocks'] = $blocks;
        $this->load->view("admin/templates/header");
        $this->load->view("admin/editJawan", $data);
        $this->load->view("admin/templates/footer");
    }

    public function updateJawan($id)
    {
        $this->checkLogin();
        if ($this->session->userdata('role_name') != 'admin') {
            redirect(base_url(), 'refresh');
        }

        $this->form_validation->set_rules('block_id', 'Block', 'required');
        $this->form_validation->set_rules('name', 'Name', 'required');
        $this->form_validation->set_rules('father_name', 'Father Name', 'required');
        $this->form_validation->set_rules('residential_address', 'Residential Address', 'required');
        $this->form_validation->set_rules('permanent_address', 'Permanent Address', 'required');
        $this->form_validation->set_rules('village', 'Village', 'required');
        $this->form_validation->set_rules('vital', 'Vital', 'required');
        $this->form_validation->set_rules('birth_mark', 'Birth Mark');
        $this->form_validation->set_rules('aadhar_number', 'Aadhar Number', 'required');
        $this->form_validation->set_rules('pan_number', 'Pan Number', 'required');
        $this->form_validation->set_rules('mobile_number', 'Mobile Number', 'required');
        $this->form_validation->set_rules('alternative_mobile_number', 'Alternative Mobile Number', 'required');
        $this->form_validation->set_rules('training', 'Training', 'required');
        $this->form_validation->set_rules('skills', 'Skills', 'required');

        if ($this->form_validation->run() == FALSE) {
            $this->session->set_flashdata('error', validation_errors());
            redirect($_SERVER['HTTP_REFERER']);
        } else {
            $data = [
                'block_id' => $this->input->post('block_id'),
                'name' => $this->input->post('name'),
                'father_name' => $this->input->post('father_name'),
                'residential_address' => $this->input->post('residential_address'),
                'permanent_address' => $this->input->post('permanent_address'),
                'village' => $this->input->post('village'),
                'vitals' => $this->input->post('vital'),
                'birth_mark' => $this->input->post('birth_mark'),
                'aadhar' => $this->input->post('aadhar_number'),
                'pan' => $this->input->post('pan_number'),
                'mobile_number' => $this->input->post('mobile_number'),
                'alternative_number' => $this->input->post('alternative_mobile_number'),
                'training' => $this->input->post('training'),
                'skills' => $this->input->post('skills')
            ];
            $this->JawanModel->updateJawan($id, $data);
            $this->session->set_flashdata('success', 'Jawan updated successfully');
            redirect($_SERVER['HTTP_REFERER']);
        }
    }

    public function deleteJawan($id)
    {
        $this->checkLogin();
        if ($this->session->userdata('role_name') != 'admin') {
            redirect(base_url(), 'refresh');
        }
        $this->JawanModel->deleteJawan($id);
        $this->session->set_flashdata('success', 'Jawan deleted successfully');
        redirect($_SERVER['HTTP_REFERER']);
    }

    public function getBlockByDistrictId($district_id)
    {
        $this->checkLogin();
        if ($this->session->userdata('role_name') != 'admin') {
            redirect(base_url(), 'refresh');
        }
        $blocks = $this->BlockModel->getBlocksByDistrictId($district_id);
        header("Content-Type: application/json");
        echo json_encode($blocks);
    }

    public function getJawansByBlock($blockId)
    {
        if ($this->session->userdata('role_name') != 'admin') {
            redirect(base_url(), 'refresh');
        }
        error_log("Received block ID: " . $blockId);
        $jawans = $this->JawanModel->getJawansByBlockId($blockId);
        header("Content-Type: application/json");
        echo json_encode(['data' => $jawans]);
    }

    public function getJawansByDistrict($id)
    {
        if ($this->session->userdata('role_name') != 'admin') {
            redirect(base_url(), 'refresh');
        }
        $jawans = $this->JawanModel->getJawansByDistrictId($id);
        header("Content-Type: application/json");
        echo json_encode(['data' => $jawans]);
    }
}