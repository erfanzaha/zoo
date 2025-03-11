<script>
$(document).ready( function () {
			$("#form-data").validate( {
				rules: {
				
					password: {
						required: true,
						minlength: 5
					},
					confirm_password: {
						required: true,
						minlength: 5,
						equalTo: "#password"
					},
					
					
				},
				messages: {
					
					password: {
						required: "Tolong Masukin Password Anda",
						minlength: "Password anda tidak boleh kurang dari 5 kata"
					},
					confirm_password: {
						required: "Tolong Masukin Konfirmasi Password Anda",
						minlength: "Password anda tidak boleh kurang dari 5 kata",
						equalTo: "password anda tidak sesuai dengan sebelumnya"
					},
					
					
				},
				errorElement: "div",
				errorPlacement: function ( error, element ) {
					// Add the `help-block` class to the error element
					error.addClass( "invalid-feedback" );

					if (element.prop( "type" ) === "checkbox") {
						error.insertAfter( element.parent( "label" ) );
					} else {
						error.insertAfter( element );
					}
				},
				highlight: function ( element, errorClass, validClass ) {
					$( element ).parents( ".col-sm-5" ).addClass( "invalid-feedback" ).removeClass( "valid-feedback" );
				},
				unhighlight: function (element, errorClass, validClass) {
					$( element ).parents( ".col-sm-5" ).addClass( "valid-feedback" ).removeClass( "invalid-feedback" );
				},

                submitHandler: function (form){
                    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
        }
    });
    $.ajax({
        url: "<?php echo base_url('proses-reset-password'); ?>",
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
                    window.location.href = "<?= base_url('customer') ?>";
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
			} );

    });

// var ins = $('#form-data').on('submit', function(e){
      
//       e.preventDefault();
//       $.ajaxSetup({
//         headers: {
//           'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
//         }
//       });
//       $.ajax({
//         url: "<?php echo base_url('proses-reset-password'); ?>",
//         method: 'post',
//         data: new FormData(this),
//         dataType: "json",
//         contentType: false,
//         cache: false,
//         processData: false,
//         success: function(r){
//           if(r.icon == 'success'){
//               swal({
//                   title: "Success",
//                   icon: r.icon,
//                   text: r.msg,
//                   dangerMode: false,
//                   buttons: {                        
//                       confirm: "Lanjut login",
//                   }
//               }).then((ok) => {
//                 window.location.href = "<?= base_url('customer') ?>";
//               });
//             }else{
//               swal({
//                   title: r.icon,
//                   text: r.msg,
//                   icon: r.icon
//               });
//             }
//         }
//       }); 
    
//   });
</script>