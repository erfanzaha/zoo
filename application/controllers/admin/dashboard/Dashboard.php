<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {
	public function __construct(){
        parent::__construct();
        date_default_timezone_set("Asia/Jakarta");
        isAuth();
    }

    public function index(){
        $data['title'] = "Dashboard";
        $data['role']  = $this->session->userdata('role');
        $data['info']  = getInfo();
        $this->themes->Admin('admin/dashboard/index',$data);      
    }

}
