
$(document).ready(function(){

    //get base URL *********************
    var url = $('#url').val();


    //display modal form for creating new product *********************
    $('#btn_add').click(function(){
        $('#btn-save').val("add");
        $('#myModalLabel').text("Add Logo");
        $('#frmProducts').trigger("reset");
        $('#myModal').modal('show');
    });



    //display modal form for product EDIT ***************************
    $(document).on('click','.open_modal',function(){
        var id = $(this).val();
        // var id = $('#id').val();
        // var logo_image = $('#logo_image')[0].files[0];
        var old_img_path = $('#old_img_path').val();
        var logoUpload = $('#logoUpload').val();
        var logo_title = $('#logo_title').val();
        var logo_link = $('#logo_link').val();

        var form = new FormData();
        form.append('id', id);
        form.append('old_img_path', old_img_path);
        form.append('logoUpload', logoUpload);
        form.append('logo_title', logo_title);
        form.append('logo_link', logo_link);
        form.append('logo_image', logo_image);
        // Populate Data in Edit Modal Form

        $.get(url + '/edit/' + id, function (form) {
            //success data

             $.ajax({
            type: "GET",
            url: url + '/edit/' + id,
             cache: false,
            contentType: false,
            datatype: 'json',
            processData: false,
            data:form,
            success: function (form) {
                console.log(form);
                $('#id').val(form.id);
                $('#old_img_path').val(form.old_img_path);
                $('#logoUpload').val(form.logoUpload);
                $('#logo_title').val(form.logo_title);
                $('#logo_link').val(form.logo_link);
            $('#logo_image').attr('src', form.logo_image);
                // $('#logo_image').attr("<img src='"+form.logo_image+"' width='100' height='100' style='display: inline-block;'>");
                $('#btn-save').val("update");
                $('#myModal').modal('show');
            },
            error: function (data) {
                console.log('Error:', data);
            }
        });


        })
      
    });



    //create new product / update existing product ***************************
    $("#btn-save").click(function (e) {
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
            }
        })

        e.preventDefault(); 
        // var logo_image = $('#logo_image')[0].files[0];
        var formData = new FormData();
        var formData = {
            id: $('#id').val(),
            old_img_path: $('#old_img_path').html(),
            logo_title: $('#logo_title').val(),
            logo_link: $('#logo_link').val(),
            logo_image: $('#logo_image').html('<img src="' + logo_image[0] + '" alt="" ">'),
              // $('#logo_image').attr('src', form.logo_image);
            // image: $('#image').val(),
        }

        //used to determine the http verb to use [add=POST], [update=PUT]
        var state = $('#btn-save').val();
        var type = "PUT"; //for creating new resource
        var id = $('#id').val();;
        var my_url = url;
        if (state == "update"){
            type = "PUT"; //for updating existing resource
            my_url += '/update/' + id;
        }
        console.log(formData);
        $.ajax({
            type: type,
            url: my_url,
            data: formData,
            cache: false,
            contentType: false,
            processData: false,
            dataType: 'json',
            success: function (data) {
                console.log(data);
                toastr.success('Logo  Updated Successfully.', {timeOut: 50000});
 // setTimeout("location.reload(true);", 3000);
                $('#msg').text("Category  Updated ");
                $('#frmProducts').trigger("reset");
                $('#myModal').modal('hide')
            },
            error: function (data) {
                console.log('Error:', data);
            }
        });
    });


     //delete product and remove it from TABLE list ***************************
    $(document).on('click','.delete-logo',function(e){
        e.preventDefault();
        var id = $(this).val();
         $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
            }
        })
        $.ajax({
            type: "DELETE",
            url: url + '/destroy/' + id,
            success: function (data) {
                console.log(data);
                toastr.warning('Logo  Deleted Successfully.', {timeOut: 50000});
 setTimeout("location.reload(true);", 3000);
                $('#errormsg').text("Logo  Deleted ");
                $("#id" + id).remove();
            },
            error: function (data) {
                console.log('Error:', data);
            }
        });
    });
});