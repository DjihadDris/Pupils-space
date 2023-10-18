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
                document.getElementById('changepassbtn').disabled = true;
			},
			success: function(dataResult){
				var dataResult = JSON.parse(dataResult);
				if(dataResult.statusCode==200){
					$('#change_password').modal('hide');
                    $('#changepassbtn').html('تأكيد التعديلات');
                    document.getElementById('changepassbtn').disabled = false;
					alertify.success('تم تغيير كلمة المرور بنجاح');
                    document.getElementById('currentPass').value = "";
                    document.getElementById('newPass').value = "";
                    document.getElementById('confirmPass').value = "";
				}else if(dataResult.statusCode==201){
                    $('#changepassbtn').html('تأكيد التعديلات');
                    document.getElementById('changepassbtn').disabled = false;
                    alertify.error('تعذّر تغيير كلمة المرور، الرجاء التواصل مع الإدارة');
                }else if(dataResult.statusCode==202){
                    $('#changepassbtn').html('تأكيد التعديلات');
                    document.getElementById('changepassbtn').disabled = false;
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