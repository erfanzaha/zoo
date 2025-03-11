<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class M_province extends CI_Model{

    public function __construct(){
        parent::__construct();
        date_default_timezone_set("Asia/Jakarta");
    }

    public function viewProvince(){
        return $this->db->order_by('name','asc')
                        ->get('indonesia_provinces');
    }

}