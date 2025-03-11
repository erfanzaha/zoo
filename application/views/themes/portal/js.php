<script>
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
</script>