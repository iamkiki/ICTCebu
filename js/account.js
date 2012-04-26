$(init_account);
function init_account()
{
    $('#form_account').submit(function() {
        //alert('test');
        //e.preventDefault();
        var o_form = $(this);
        var emailReg = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/;
        var email = $.trim($('#email').val());
        var password = $.trim($('#password').val());
        var confirm_password = $.trim($('#confirm_password').val());
        var error_found = 0;

        if(!emailReg.test(email) || email == '')
        {
            $('.e_login').removeClass('hidden');
            $('.e_login').html('Invalid email address.');
            $('#txt_email').focus();
        }
        if(password != ''){
            if(confirm_password != password){
                $('.e_confirm_password').removeClass('hidden');
                $('.confirm_password').addClass('error');
                error_found++;
            }

            if($('#password').val().length > 1 && $('#password').val().length < 6){
                $('.e_password').removeClass('hidden');
                $('.password').addClass('error');
                error_found++;
            }
        }

        if( error_found == 0) {
            $.ajax({
                'url': '/companies/update',
                'type':'POST',
                'dataType':'json',
                'data': o_form.serialize(),
                success: function(data)
                {
                    if(data.status == 'success')
                    {
                        $('.success').removeClass('hidden');
                        $('#email').focus();
                    }
                }
            });
        }

        return false;
    });
}