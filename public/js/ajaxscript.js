
$(document).ready(function(){

    //get base URL *********************
    var url = $('#url').val();


    //display modal form for creating new product *********************
    $('#btn_add').click(function(){
        $('#btn-save').val("add");
        $('#frmProducts').trigger("reset");
        $('#myModal').modal('show');
    });



    //display modal form for product EDIT ***************************
    $(document).on('click','.open_modal',function(){
        var social_id = $(this).val();
       
        // Populate Data in Edit Modal Form

        $.get(url + '/edit/' + social_id, function (data) {
            //success data
             $.ajax({
            type: "GET",
            url: url + '/edit/' + social_id,
            success: function (data) {
                console.log(data);
                $('#social_id').val(data.id);
                $('#name').val(data.name);
                $('#title').val(data.title);
                $('#link').val(data.link);
                $('#image').val(data.image);
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
        var image = $('#image')[0].files[0];
        var formData = new FormData($('form')[0]);
        var formData = {
            social_id: $('#social_id').val(),
            name: $('#name').val(),
            title: $('#title').val(),
            link: $('#link').val(),
            image: $('#image').val(),
        }

        //used to determine the http verb to use [add=POST], [update=PUT]
        var state = $('#btn-save').val();
        var type = "POST"; //for creating new resource
        var social_id = $('#social_id').val();;
        var my_url = url;
        if (state == "update"){
            type = "PUT"; //for updating existing resource
            my_url += '/update/' + social_id;
        }
        console.log(formData);
        $.ajax({
            type: type,
            url: my_url,
            data: formData,
            dataType: 'json',
             cache: false,
            // async: true,
            contentType: false,
            processData: false,
            success: function (data) {
                console.log(data);
                $('#frmProducts').trigger("reset");
                $('#myModal').modal('hide')
            },
            error: function (data) {
                console.log('Error:', data);
            }
        });
    });


    
});