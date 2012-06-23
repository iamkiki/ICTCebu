$(init_post);
function init_post()
{
    $('#post_job').click(function() {
        var o_form = $(this);
        var emailReg = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/;
        var title = $.trim($('#title').val());
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
       
        if( error_found == 0) { 
            $('#form_post').submit()
        }
    });

}