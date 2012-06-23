$(init_company);
function init_company()
{
    $('#contact_company').click(function(e){
        e.preventDefault();
        var emailReg = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/;
        var s_email = $.trim($('#email').val());
        var s_name = $('#name').val();
        var s_message = $('#message').val();
        var i_id = $('#hdn_id').val();

        if(!emailReg.test(s_email) || s_email == '')
        {
            $('.email').addClass('error');
            $('.help-inline').removeClass('hidden');
            $('#email').focus();
        }
        else
        {
            var post_var = {'s_email':s_email, 's_name':s_name, 's_message': s_message };
            $.ajax({
                'url': '/companies/contact/'+i_id,
                'type':'POST',
                'dataType':'json',
                'data': post_var,
                success: function(data)
                {
                    if(data.status == 'success') {
                        $('#email').val('');
                        $('#name').val('');
                        $('#message').val('');
                        $('.email').removeClass('error');
                        $('.help-inline').addClass('hidden');
                        $('#name').focus();
                        $('.alert-success').removeClass('hidden');
                    } 
                }
            });
        }

    });
}