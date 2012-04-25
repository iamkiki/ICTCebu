$(init_edit_profile);
function init_edit_profile()
{
    $('#form_editprofile').submit(function() {
        //alert('test');
        //e.preventDefault();
        var o_form = $(this);
        var company_name = $.trim($('#name').val());
        var error_found = 0;
        if(company_name == ''){
            $('.e_company_name').removeClass('hidden');
            $('.company_name').addClass('error');
            error_found++;
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
                        $('#name').focus();
                    } 
                }
            });
        }

        return false;
    });

}