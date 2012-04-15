$(document).ready(function() {
   $('#company_name').focus();
 });

$(init_access);
function init_access()
{

    $('.forgot_btn').click(function(e){
        e.preventDefault();
        $('.login').addClass('hidden');
        $('.forgot_pass').removeClass('hidden');
    });

    $('.login_btn').click(function(e){
        e.preventDefault();
        var emailReg = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/;
        var s_email = $.trim($('#txt_email').val());
        var s_password = $('#txt_password').val();

        if(!emailReg.test(s_email) || s_email == '')
        {
            $('.e_login').removeClass('hidden');
            $('.e_login').html('Invalid email address.');
            $('#txt_email').focus();
        }
        else
        {
            var post_var = {'s_email':s_email, 's_password':s_password };
            $.ajax({
                'url': '/access/login',
                'type':'POST',
                'dataType':'json',
                'data': post_var,
                success: function(data)
                {
                    if(data.status == 'error') {
                        $('.e_login').html('');
                    	$('.e_login').removeClass('hidden');
                        $('.e_login').html(data.message);
                    } else if(data.status == 'success') {
                       	window.location.href = '/';
                    } else {
                       	window.location.href = '/access';
                    }
                }
            });
        }

    });

    $('.reset_btn').click(function(e){
        e.preventDefault();
        var emailReg = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/;
        var s_email = $.trim($('#rs_email').val());

        if(!emailReg.test(s_email) || s_email == '')
        {
            $('.e_reset').removeClass('hidden');
            $('.e_reset').html('Invalid email address.');
            $('#rs_email').focus();
        }
        else
        {
            var post_var = {'s_email':s_email };
            $.ajax({
                'url': '/access/resetpassword',
                'type':'POST',
                'dataType':'json',
                'data': post_var,
                success: function(data)
                {
                    if(data.status == 'error') {
                    	$('.e_reset').html('');
                    	$('.e_reset').removeClass('hidden');
                        $('.e_reset').html(data.message);
                    } else if(data.status == 'success') {
                        $('.e_reset').addClass('hidden');
                        $('#rs_email').val('')
                       	$('.reset').removeClass('hidden');
                    } 
                }
            });
        }

    });
    
    $('.register_btn').click(function(e){
        e.preventDefault();
       
        var emailReg = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/;
        var numReg = /[0-9]/;

        var company_name = $.trim($('#company_name').val());
        var email = $.trim($('#email').val());
        var password = $.trim($('#password').val());
        var confirm_password = $.trim($('#confirm_password').val());
        var person = $.trim($('#person').val());
        var contact = $.trim($('#contact').val());
        var address = $.trim($('#address').val());
        var city = $.trim($('#contact').val());
        var zip = $.trim($('#zip').val());
        var website = $.trim($('#website').val());
        var description = $.trim($('#description').val());
        var category = $('#category').val();

        var error_found = 0;
      
        if($('#agree').is(":checked") == false){
            $('.e_agree').removeClass('hidden');
            error_found++;
        }

        if(company_name == ''){
            $('.e_company_name').removeClass('hidden');
            $('.company_name').addClass('error');
            error_found++;
        }

        if(!emailReg.test(email) || email == ''){
            $('.e_email').removeClass('hidden');
            $('.email').addClass('error');
            error_found++;
        }

        if(password == ''){
            $('.e_password').removeClass('hidden');
            $('.password').addClass('error');
            error_found++;
        }

        if(confirm_password != password){
            $('.e_confirm_password').removeClass('hidden');
            $('.confirm_password').addClass('error');
            error_found++;
        }

        if($('#password').val().length > 1 && $('#password').val().length < 6){
            $('.e_password').addClass('red');
            $('.password').addClass('error');
            error_found++;
        }

        if(person == ''){
            $('.e_person').removeClass('hidden');
            $('.person').addClass('error');
            error_found++;
        }

        if(!numReg.test(contact) || contact == ''){
            $('.e_contact').removeClass('hidden');
            $('.contact').addClass('error');
            error_found++;
        }

        if( error_found == 0) {
            var post_var = {
                'company_name':company_name,
                'email': email,
                'password': password,
                'person': person,
                'contact': contact,
                'address': address,
                'city': city,
                'zip': zip,
                'website': website,
                'description': description,
                'category': category
                };
                
            $.ajax({
                'url': '/access/register',
                'type':'POST',
                'dataType':'json',
                'data': post_var,
                success: function(data)
                {
                    if(data.status == 'success')
                    {
                        $('#company_name').val('');
                        $('#email').val('');
                        $('#password').val('');
                        $('#confirm_password').val('');
                        $('#person').val('');
                        $('#contact').val('');
                        $('#address1').val('');
                        $('#address2').val('');
                        $('#contact').val('');
                        $('#zip').val('');
                        $('#website').val('');
                        $('#description').val('');
                        $('#category').val('');
                        $("#agree").removeAttr("checked");
                        $('#company_name').focus();
                    	$('.success').removeClass('hidden');
                    } else if(data.status == 'email') {
                        $('#email').focus();
                        $('.alert-error').removeClass('hidden');
                    } else {
                        location.href = '/access';
                    }
                }
            });
        }

    });
}
