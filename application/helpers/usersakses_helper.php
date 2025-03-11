<?php
if(!defined('BASEPATH')) exit('no file allowed');
function isAuth(){
    $Ci =& get_instance();
    $status_login = $Ci->session->userdata('status_login');
    if ($status_login == false) {
        redirect('/');
    }
}



function isLogged(){
    $Ci =& get_instance();
    $status_login = $Ci->session->userdata('status_login');
    if ($status_login == true) {
        redirect('/dashboard');
    }
}

function getInfo(){
    $Ci     =& get_instance();
    $id     = $Ci->session->userdata('id_user');
    $data   = $Ci->db->select('*, user.id as iduser')
                         ->join('user_detail','user_detail.id_user = user.id')
                         ->get_where('user',['user.id'=>$id]);
    return $data->row();    
}