<?php
defined('BASEPATH') or exit('No direct script access allowed');

class ResetPassword extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        date_default_timezone_set("Asia/Jakarta");
        isLogged();
    }

    public function index()
    {
        $this->themes->Auth('auth/reset-password');
    }

    public function proses()
    {
        try {
            $update = $this->m_reset_password->proses();
            if ($update):
                $msg = array(
                    'msg' => 'Reset password berhasil',
                    'icon' => 'success',
                );
            else:
                $msg = array(
                    'msg' => 'Reset password gagal',
                    'icon' => 'error',
                );
            endif;
        } catch (Exception $e) {
            echo $e->getMessage();
            die();
        }
        echo json_encode($msg);
    }

}
