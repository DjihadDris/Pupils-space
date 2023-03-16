function savepass(){
                                    var currentPass = document.getElementById('currentPass').value;
                                    var newPass = document.getElementById('newPass').value;
                                    var confirmPass = document.getElementById('confirmPass').value;
                                    if(currentPass != "" && currentPass.length >= 4){
                                        if(newPass != "" && newPass.length >= 4){
                                            if(confirmPass != "" && confirmPass.length >= 4){
                                    if(newPass == confirmPass){
        $.ajax({
			url: "changepass.php",
			type: "POST",
			cache: false,
			data:{
                currentPass: currentPass,
				newPass: newPass
			},
            beforeSend: function() {
				$('#changepassbtn').html('<i class="fa fa-spinner fa-spin"></i>');
			},
			success: function(dataResult){
				var dataResult = JSON.parse(dataResult);
				if(dataResult.statusCode==200){
					$('#change_password').modal('hide');
                    $('#changepassbtn').html('تأكيد التعديلات');
					alertify.success('تم تغيير كلمة المرور بنجاح');			
				}else if(dataResult.statusCode==201){
                    $('#changepassbtn').html('تأكيد التعديلات');
                    alertify.error('تعذّر تغيير كلمة المرور، الرجاء التواصل مع الإدارة');	
                }else if(dataResult.statusCode==202){
                    $('#changepassbtn').html('تأكيد التعديلات');
                    alertify.error('كلمة المرور الحالية خاطئة');	
                }
			}
		});
                                    }else{
                                        alertify.error('تحقق من كلمة المرور الجديدة');
                                    }
                                            }else{
                                                alertify.error('الرجاء تأكيد كلمة المرور الجديدة');
                                            }
                                        }else{
                                            alertify.error('الرجاء إدخال كلمة المرور الجديدة');
                                        }
                                    }else{
                                        alertify.error('الرجاء إدخال كلمة المرور الحالية');
                                    }
                                }