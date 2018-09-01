
$(document).ready(function(){

    //get base URL *********************
    var url = $('#url').val();


    //display modal form for creating new product *********************
    $('#btn_add').click(function(){
        $('#btn-save').val("add");
        $('#myModalLabel').text("Add Category");
        $('#frmProducts').trigger("reset");
        $('#myModal').modal('show');
    });



    //display modal form for product EDIT ***************************
    $(document).on('click','.open_modal',function(){
        var id = $(this).val();
       
        // Populate Data in Edit Modal Form

        $.get(url + '/edit' + id, function (data) {
            //success data
             $.ajax({
            type: "GET",
            url: url + '/edit/' + id,
            success: function (data) {
                console.log(data);
                $('#id').val(data.id);
                $('#category_name').val(data.category_name);
                $('#category_dis').val(data.category_dis);
                $('#category_slug').val(data.category_slug);
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
        // var image = $('#image')[0].files[0];
        // var formData = new FormData($('form')[0]);
        var formData = {
            id: $('#id').val(),
            category_name: $('#category_name').val(),
            category_dis: $('#category_dis').val(),
            category_slug: $('#category_slug').val(),
            // image: $('#image').val(),
        }

        //used to determine the http verb to use [add=POST], [update=PUT]
        var state = $('#btn-save').val();
        var type = "POST"; //for creating new resource
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
            dataType: 'json',
            success: function (data) {
                console.log(data);
                toastr.success('Category  Updated Successfully.', {timeOut: 50000});
 setTimeout("location.reload(true);", 3000);
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
    $(document).on('click','.delete-category',function(){
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
                toastr.warning('Category  Deleted Successfully.', {timeOut: 50000});
 setTimeout("location.reload(true);", 3000);
                $('#errormsg').text("Category  Deleted ");
                $("#id" + id).remove();
            },
            error: function (data) {
                console.log('Error:', data);
            }
        });
    });
});