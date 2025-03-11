<script>
$(document).ready(function() {
    $("#form-data").validate({
        rules: {
            nama: "required",
            alamat: "required",
            no_telp: {
                required: true,
                minlength: 10,
            },
            username: {
                required: true,
                minlength: 2
            },
            password: {
                required: true,
                minlength: 5
            },
            confirm_password: {
                required: true,
                minlength: 5,
                equalTo: "#password"
            },
            email: {
                required: true,
                email: true
            },

        },
        messages: {
            nama: "Tolong Masukin Nama Anda",
            alamat: "Tolong Masukin Alamat Anda",

            no_telp: {
                required: "Mohon Masukin Nomor Telepon",
                minlength: "Minimal 10 digit"

            },

            username: {
                required: "Tolong Masukin Username Anda",
                minlength: "Username anda harus lebih 2 kata"
            },
            password: {
                required: "Tolong Masukin Password Anda",
                minlength: "Password anda tidak boleh kurang dari 5 kata"
            },
            confirm_password: {
                required: "Tolong Masukin Konfirmasi Password Anda",
                minlength: "Password anda tidak boleh kurang dari 5 kata",
                equalTo: "password anda tidak sesuai dengan sebelumnya"
            },
            email: "Tolong Masukin Email Anda",

        },
        errorElement: "div",
        errorPlacement: function(error, element) {
            // Add the `help-block` class to the error element
            error.addClass("invalid-feedback");

            if (element.prop("type") === "checkbox") {
                error.insertAfter(element.parent("label"));
            } else {
                error.insertAfter(element);
            }
        },
        highlight: function(element, errorClass, validClass) {
            $(element).parents(".col-sm-5").addClass("invalid-feedback").removeClass(
                "valid-feedback");
        },
        unhighlight: function(element, errorClass, validClass) {
            $(element).parents(".col-sm-5").addClass("valid-feedback").removeClass(
                "invalid-feedback");
        },

        submitHandler: function(form) {
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
                }
            });
            $.ajax({
                url: "<?php echo base_url('proses-register'); ?>",
                method: 'post',
                data: new FormData(form),
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
                                confirm: "Lanjut login",
                            }
                        }).then((ok) => {
                            window.location.href =
                            "<?= base_url('/') ?>";
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
        },
    });

});
</script>