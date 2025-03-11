<?php
if(!defined('BASEPATH')) exit('no file allowed');
class Themes{
    protected $_ci;
     function __construct(){
        $this->_ci =&get_instance();
    }

        function Auth($theme, $data=null){
        $data['_config_content']    =$this->_ci->load->view($theme,$data,true);
        $data['js']                 =$this->_ci->load->view('themes/auth/js',$data,true);
        $data['css']                =$this->_ci->load->view('themes/auth/css',$data,true);
        $this->_ci->load->view('themes/AuthTemplate', $data);
    }
    
    function Admin($theme, $data=null){
        $data['_config_content']    =$this->_ci->load->view($theme,$data,true);
        $data['header']             =$this->_ci->load->view('themes/admin/header',$data,true);
        $data['footer']             =$this->_ci->load->view('themes/admin/footer',$data,true);
        $data['js']                 =$this->_ci->load->view('themes/admin/js',$data,true);
        $data['css']                =$this->_ci->load->view('themes/admin/css',$data,true);
        $data['navbar']             =$this->_ci->load->view('themes/admin/navbar',$data,true);
        $data['breadcum']           =$this->_ci->load->view('themes/admin/breadcum',$data,true);
        $data['modal']              =$this->_ci->load->view('themes/admin/modal',$data,true);
        $this->_ci->load->view('themes/AdminTemplate', $data);
    }

    function Portal($theme, $data=null){
        $data['_config_content'] = $this->_ci->load->view($theme,$data,true);
        $data['footer']          = $this->_ci->load->view('themes/Portal/footer',$data,true);
        $data['js']              = $this->_ci->load->view('themes/Portal/js',$data,true);
        $data['header']          = $this->_ci->load->view('themes/Portal/header',$data,true);
        $data['modal']           = $this->_ci->load->view('themes/Portal/modal',$data,true);
        $this->_ci->load->view('themes/PortalTemplate', $data);
    }
}