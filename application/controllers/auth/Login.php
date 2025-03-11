<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {
	public function __construct(){
        parent::__construct();
        date_default_timezone_set("Asia/Jakarta");
        isLogged();
    }

    public function index(){
        $data['title']  = "Login";
        $this->themes->Auth('auth/login',$data);
    }

    public function proses(){
		$check   = $this->m_login->proses();
        if($check['status'] == TRUE):
            $this->session->set_userdata(array(
                'status_login'  =>TRUE,
                'id_user'       =>$check['id'],
                'user'          =>$check['user'],
                'role'          =>$check['role'],
            ));
            $msg = array(
                'msg'  => 'Berhasil login',
                'icon' => 'success',
                'role' => $check['role'],
            );
        else:
            $msg = array(
                'msg'  => $check['msg'],
                'icon' => $check['icon'],
                
            );
        endif;
        echo json_encode($msg);
    }
}
