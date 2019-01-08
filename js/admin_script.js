$(document).ready(function(){
	$('.send_student_info_mail').click(function(e){
        e.preventDefault();
        var student_id = $(this).attr('data-student_id');
        if (typeof student_id != 'undefined') {
            $.getJSON(base_url+'admin/send_student_info_mail/'+student_id,null,function(data){
                if (data.status == 1) {
                    swal('Success!', data.message, "success",{
                      button: 'Close',
                    });
                }else{
                    swal('Fail!', data.message, "error",{
                      button: 'Close',
                    });
                }
            });
        }
    });
});