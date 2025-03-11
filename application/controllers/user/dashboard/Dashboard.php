<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {
	public function __construct(){
        parent::__construct();
        date_default_timezone_set("Asia/Jakarta");
        isAuth();
    }

    public function index(){
        $uri                = $this->uri->segment(1);
        $data['title']      = "login";
        $data['opsi']       = "<a onclick='keluar()'>Logout</a>";  
        $this->themes->Portal('portal/beranda/index',$data);
    }

}
