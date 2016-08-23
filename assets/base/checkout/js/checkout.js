 $(document).ready(function(){
 	$('input[type="checkbox"]').click(function(){
 		if($(this).is(":checked")){
 			$('.shipping_address').css('display','block');
 		}
 		else if($(this).is(":not(:checked)")){
 			$('.shipping_address').css('display','none');
 		}
 	});
check_user_login();
 });

 $('#login').on('click',function(){
 	var formdata = $('#login-form-wrap').serialize();
 	$.ajax({
 		url:'checkout/customer_login',
 		type:'post',
 		dataType:'json',
 		data: formdata,
 		success:function(data){
 			if (data.length == 0) {
 				$('#invalid').css({'display':'block','color':'red'});
 			}else{
 				$('#invalid').css({'display':'none'});
 				$('.login').addClass('logged-in');
 				$.each(data,function(index,value){
 					$('#billing_first_name').val(value.first_name);
 					$('#billing_last_name').val(value.last_name);
 					$('#billing_address_1').val(value.billing_address_line_1);
 					$('#billing_address_2').val(value.billing_address_line_2);
 					$('#billing_city').val(value.city);
 					$('#billing_state').val(value.country);
 					$('#billing_postcode').val(value.pincode);
 					$('#billing_email').val(value.email);
 					$('#billing_phone').val(value.mobile_number);
 					$('[name=billing_country] option').filter(function() { 
    					return ($(this).val() == value.country);
						}).prop('selected', true); 
 					$('[name=billing_state] option').filter(function() { 
    					return ($(this).val() == value.state);
						}).prop('selected', true);
 				})
 				check_user_login();
 			}
 		}
 	})
 	return false;
 })

 function check_user_login(){
 	 	$.ajax({
 		url:'checkout/check_login',
 		type:'post',
 		dataType:'json',
 		success:function(data){
 			if (data.length == 0) {
 				$('#invalid').css({'display':'block','color':'red'});
 			}else{
 				$('#invalid').css({'display':'none'});
 				$('.login').addClass('logged-in');
 				$.each(data,function(index,value){
 					$('#billing_first_name').val(value.first_name);
 					$('#billing_last_name').val(value.last_name);
 					$('#billing_address_1').val(value.billing_address_line_1);
 					$('#billing_address_2').val(value.billing_address_line_2);
 					$('#billing_city').val(value.city);
 					$('#billing_state').val(value.country);
 					$('#billing_postcode').val(value.pincode);
 					$('#billing_email').val(value.email);
 					$('#billing_phone').val(value.mobile_number);
 					$('[name=billing_country] option').filter(function() { 
    					return ($(this).val() == value.country);
						}).prop('selected', true); 
 					$('[name=billing_state] option').filter(function() { 
    					return ($(this).val() == value.state);
						}).prop('selected', true);
 				}); 
 			}
 		}
 	})
 }
