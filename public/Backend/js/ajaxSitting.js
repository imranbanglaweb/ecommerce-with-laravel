var page = 1;
var current_page = 1;
var total_page = 0;
var is_ajax_fire = 0;



$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});


/* Updated new Post */
$(".update").click(function(e) {
    e.preventDefault();
    var form_action = $("#edit-item").find("form").attr("action");
    var theme_name = $("#edit-item").find("input[name='theme_name']").val();
    var theme_author = $("#edit-item").find("textarea[name='theme_author']").val();
    $.ajax({
        dataType: 'json',
        type:'PUT',
        url: form_action,
        data:{theme_name:theme_name, theme_author:theme_author}
    }).done(function(data){
        toastr.success('Post Updated Successfully.', 'Success Alert', {timeOut: 5000});
    });
});	