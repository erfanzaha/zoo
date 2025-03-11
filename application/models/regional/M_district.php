<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class M_district extends CI_Model{

    public function __construct(){
        parent::__construct();
        date_default_timezone_set("Asia/Jakarta");
    }

    public function viewDistrict($id){
        $cekData =  $this->db->order_by('name','asc')
                        ->get_where('indonesia_districts',['city_id'=>$id]);
        if($cekData->num_rows() > 0 ){
            return $cekData->result_array();
        }else{
            return FALSE;
        }   
    }

}