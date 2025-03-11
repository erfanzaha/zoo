<?php
$uri = $this->uri->segment(1);
$uri2 = $this->uri->segment(2);
$uri3 = $this->uri->segment(3);
if($uri2 == "dashboard" || $uri2 == "profile"):
    $this->load->view($uri.'/'.$uri2.'/modal/modal-'.$uri2);
elseif($uri3 == ''):
    if($uri2 == 'produk' && $uri3 == ''):
        $this->load->view('admin/produk/data-produk/modal/modal-data-produk');
    else:
        $this->load->view('admin/'.$uri2.'/modal/modal-'.$uri2);
    endif;
else:
    if($uri2 != 'produk' && ($uri2 != 'pesanan' && $uri3 != 'detail-pesanan') && ($uri2 != 'riwayat-pesanan' && $uri3 != 'detail-riwayat-pesanan')):
        $this->load->view('admin/'.$uri2.'/'.$uri3.'/modal/modal-'.$uri3);
    endif;    
endif;
?>

<div class="modal fade" id="modalResetPassword">
    <div class="modal-dialog modal-dialog-centered modal-md">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalCenterTitle">Reset Password</h5>
                <button type="button" class="close" onclick="closeResetPass();">
                    <i class="icon-close"></i>
                </button>
            </div>
            <form method="post" id="form_reset_pass">
                <div class="modal-body">
                    <input type="hidden" id="id_reset" name="id_reset">
                    <input type="hidden" id="type" name="type" value="1">
                    <div class="alert alert-danger" style='display:none;' id="msg-alert-reset">
                        <span></span>
                    </div>
                    <div class="form-group row">
                        <div class="col-sm-12">
                            <input autofocus type="password" class="form-control" placeholder="Enter New Password"
                                id="r-newpass" name="r_newpass" onkeyup="checkResetPass();">
                        </div>
                    </div>

                    <div class="form-group row">
                        <div class="col-sm-12">
                            <input type="password" class="form-control" placeholder="Enter Confirm Password"
                                id="r-confirm" name="r_confirm" onkeyup="checkResetPass();">
                        </div>
                    </div>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn disabled" id="btnSaveReset">Simpan Perubahan</button>
                </div>
            </form>
        </div>
    </div>
</div>