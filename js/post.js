$(init_post);
function init_post()
{
    $('#form_post').submit(function() {
        
        var o_form = $(this);
        var emailReg = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/;
        var title = $.trim($('#title').val());
        var req = $.trim($('#requirements').val());
        var email = $.trim($('#email').val());
        var error_found = 0;
        
        if(title == ''){
            $('.e_title').removeClass('hidden');
            $('.title').addClass('error');
            $('#title').focus();
            error_found++;
        }
        
        if(!emailReg.test(email) || email == '')
        {
            $('.e_email').removeClass('hidden');
            $('.email').addClass('error');
            $('#email').focus();
            error_found++;
        }
        
        if(req == ''){
            $('.requirements').addClass('error');
            error_found++;
        }

        if( error_found == 0) {
            $.ajax({
                'url': '/jobs/submit',
                'type':'POST',
                'dataType':'json',
                'data': o_form.serialize(),
                success: function(data)
                {
                    if(data.status == 'success')
                    {
                        $('.success').removeClass('hidden');
                        $('#title').focus();
                    }
                }
            });
        }

        return false;
    });

}