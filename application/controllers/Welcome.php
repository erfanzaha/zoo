<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {
	public function __construct(){
        parent::__construct();
		date_default_timezone_set("Asia/Jakarta");
        isLogged();
	}

    public function index(){
        $uri                = $this->uri->segment(1);
        $data['title']      = "Login";
        $data['opsi']       = "<a href=" . base_url('login') . ">Sign up / login</a>";  
        $this->themes->Portal('portal/beranda/index',$data);
        
    }

    public function dashboard(){
        $uri                = $this->uri->segment(1);
        $data['opsi']       = "<a href=" . base_url('logout') . ">Logout</a>";  
        $this->themes->Portal('portal/beranda/index',$data);
        
    }
}

