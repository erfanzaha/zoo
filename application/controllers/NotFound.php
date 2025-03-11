<?php
defined('BASEPATH') or exit('No direct script access allowed');

class NotFound extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        date_default_timezone_set("Asia/Jakarta");
    }

    public function index()
    {
        $data['title'] = "Page Not Found";
        $this->themes->Portal('errors/error-404', $data);

    }

}
