<?php
$uri  = $this->uri->segment(1);
$uri2 = $this->uri->segment(2);
$uri3 = $this->uri->segment(3);
if($uri2 == "dashboard" || $uri2 == "profile"):
    $this->load->view($uri.'/'.$uri2.'/js/js-'.$uri2);
elseif($uri3 == ''):
    if($uri2 == 'produk' && $uri3 == ''):
        $this->load->view('admin/produk/data-produk/js/js-data-produk');
    else:
        $this->load->view('admin/'.$uri2.'/js/js-'.$uri2);
    endif;
else:
    if($uri2 == 'produk' && $uri3 != ''):
        $this->load->view('admin/produk/add-produk/js/js-add-produk');
    else:
        if($uri2 != 'produk' && $uri3 != 'detail-pesanan' && $uri3 != 'detail-riwayat-pesanan'):
            $this->load->view('admin/'.$uri2.'/'.$uri3.'/js/js-'.$uri3);
        endif;
    endif;
endif;
?>

<script>
function underConstruction() {
    swal({
        title: "Peringatan",
        text: "Menu under construction",
        icon: "info"
    });
}

function ubahKataSandi(key) {
    $("#id_reset").val(key);
    $("#modalResetPassword").modal({
        backdrop: 'static',
        keyboard: false
    }, 'show');
}

function checkResetPass() {
    var newPass = $('#r-newpass').val();
    var confirmPass = $('#r-confirm').val();
    if (newPass == confirmPass && newPass != "" && confirmPass != "" && newPass.length >= 5) {
        $('#btnSaveReset').attr('type', 'submit');
        $('#btnSaveReset').attr('class', 'btn btn-primary pd-y-12 btn-block');
        $('#msg-alert-reset').attr('style', 'display:block;');
        $('#msg-alert-reset').attr('class', 'alert alert-success');
        $('#msg-alert-reset span').html('Password sesuai');
    } else {
        $('#msg-alert-reset').attr('style', 'display:block;');
        $('#msg-alert-reset').attr('class', 'alert alert-danger');
        if (newPass != confirmPass) {
            $('#msg-alert-reset span').html('Password tidak sama');
        } else if (newPass.length < 8) {
            $('#msg-alert-reset span').html('Panjang password kurang dari 5');
        }
        $('#btnSaveReset').attr('type', 'button');
        $('#btnSaveReset').attr('class', 'btn disbled pd-y-12 btn-block');
    }
}

function closeResetPass() {
    $('#modalResetPassword').modal('hide');
    $('#form_reset_pass').trigger("reset");
    $('#msg-alert-reset').attr('style', 'display:none;');
    $('#btnSaveReset').attr('type', 'button');
    $('#btnSaveReset').attr('class', 'btn disbled');
}

var resetPassword = $('#form_reset_pass').on('submit', function(e) {
    e.preventDefault();
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
        }
    });
    $.ajax({
        url: '<?= base_url('proses-reset-password'); ?>',
        method: 'post',
        data: new FormData(this),
        dataType: "json",
        contentType: false,
        cache: false,
        processData: false,
        success: function(r) {
            if (r.icon == 'success') {
                swal({
                    title: "Success",
                    icon: r.icon,
                    text: r.msg,
                    dangerMode: false,
                    buttons: {
                        confirm: "ok",
                    }
                }).then((ok) => {
                    closeResetPass();
                });
            } else {
                swal({
                    title: r.icon,
                    text: r.msg,
                    icon: r.icon
                });
            }
        }
    });
});

function keluar() {
    swal({
        title: "Peringatan",
        icon: "warning",
        text: "Apakah anda yakin ingin keluar ?",
        dangerMode: true,
        buttons: {
            cancel: "Batal",
            confirm: "Keluar",
        }
    }).then((ok) => {
        if (ok) {
            $.ajax({
                url: "<?php echo base_url('logout'); ?>",
                type: "POST",
                dataType: "JSON",
                success: function(r) {
                    swal({
                        title: "Berhasil",
                        icon: r.icon,
                        text: r.msg,
                        dangerMode: false,
                        buttons: {
                            confirm: "Ok",
                        }
                    }).then((ok) => {
                        window.location.href = "<?= base_url() ?>" + r.link;
                    });
                }
            });
        } else {
            swal({
                title: "Dibatalkan",
                text: "Batal keluar",
                icon: "info"
            });
        }
    });
}

function showNotifikasi(id) {
    $.ajax({
        url: "<?php echo base_url('admin/notifikasi/get-notifikasi'); ?>",
        type: "POST",
        dataType: "JSON",
        data: {
            id: id,
        },
        success: function(res) {
            if (res.icon != null && res.icon != '') {
                swal({
                    title: "Terjadi kesalahan",
                    text: res.msg,
                    icon: res.icon
                });
            } else {
                $('#modalNotifikasi').modal({
                    backdrop: 'static',
                    keyboard: false
                }, 'show');
                $('#isi-notifikasi').html(res.keterangan);
            }
        },
        error: function() {
            swal({
                title: "Terjadi kesalahan",
                text: "Kesalahan dalam mengambil data",
                icon: "error"
            });
        }
    });
}

function keluar() {
    swal({
        title: "Peringatan",
        icon: "warning",
        text: "Apakah anda yakin ingin keluar ?",
        dangerMode: true,
        buttons: {
            cancel: "Batal",
            confirm: "Keluar",
        }
    }).then((ok) => {
        if (ok) {
            $.ajax({
                url: "<?php echo base_url('logout'); ?>",
                type: "POST",
                dataType: "JSON",
                success: function(r) {
                    swal({
                        title: "Berhasil",
                        icon: r.icon,
                        text: r.msg,
                        dangerMode: false,
                        buttons: {
                            confirm: "Ok",
                        }
                    }).then((ok) => {
                        window.location.href = "<?= base_url('/') ?>";
                    });
                }
            });
        } else {
            swal({
                title: "Dibatalkan",
                text: "Batal keluar",
                icon: "info"
            });
        }
    });
}
</script>