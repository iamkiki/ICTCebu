$(init_edit_profile);
function init_edit_profile()
{
    $('#edit_profile').click(function() {
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
            $('#form_editprofile').submit()
//            $.ajax({
//                'url': '/companies/update',
//                'type':'POST',
//                'dataType':'json',
//                'data': {form: o_form.serialize(), description: CKEDITOR.instances['description'].getData()},
//                success: function(data)
//                {  
//                    if(data.status == 'success')
//                    {
//                        $('.success').removeClass('hidden');
//                        $('#name').focus();
//                    } 
//                }
//            });
        }

        return false;
    });

}