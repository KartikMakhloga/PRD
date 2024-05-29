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
        $jawans = $this->JawanModel->getJawansByBlockId($blockId);
        header("Content-Type: application/json");
        echo json_encode($jawans);
    }

    public function jawanDetails()
    {
        $this->checkLogin();
        if ($this->session->userdata('role_name') != 'block') {
            redirect(base_url(), 'refresh');
        }
        $jawans = $this->JawanModel->getJawansByBlockId($this->session->userdata('user_id'));
        $data['jawans'] = $jawans;
        
        $this->load->view("admin/templates/header");
        $this->load->view('block/viewJawanBlock', $data);
        $this->load->view("admin/templates/footer");
    }

}