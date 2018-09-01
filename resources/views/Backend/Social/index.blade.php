@extends('Backend.admin_master')
@section('main_content')
   <!-- Important to work AJAX CSRF -->
    <meta name="_token" content="{!! csrf_token() !!}" />
<div class="inner-block">
<div class="blank">
<h2>Social List</h2>
<a class="pull-right btn btn-primary" href="{{ url('social/create')}}"><i class="fa fa-plus"></i>
Add Social</a>
<hr>
<div class="blankpage-main">
	<div class="container">
      <div class="col-md-8">
         <table class="display table">
        <thead class="text-primary bg-success">
          <tr>
            <th width="4%">SL</th>
            <th width="40%">Name</th>
            <th width="40%">Title</th>
            <th width="40%">Link</th>
            <th width="15%">Image</th>
            <th width="3%">Edit</th>
            <th width="4%">Delete</th>
          </tr>
         </thead>
         <tbody>
         <?php $i=1; ?>
           @foreach ($socialList as $social)
            <tr id="social{{$social->id}}" class="active">
             <td style="color: green">{{$i++}}</td>
             <td>{{$social->name}}</td>
             <td>
             {{$social->title}}
             </td>
             <td>
             <a href="{{$social->link}}" target="blank">Link</a>
             </td>
              <td>
<img src="{{ asset($social->image)}}" width="50" height="50">
              </td>
              <td>

     {!! Form::open(['method' => 'get', 'action' => ['SocialController@edit', $social->id]]) !!}
          {!! Form::button( '<i class="fa fa-edit"></i>', ['type' => 'submit', 'class' => 'btn btn-success','data-id' => $social->id ] ) !!}
     {!! Form::close() !!}
              </td>
              <td>

  <div id="deleteTheItem">
      {!! Form::open(['method' => 'DELETE', 'id' => 'formDeleteItem', 'action' => ['SocialController@destroy', $social->id]]) !!}
          {!! Form::button( '<i class="fa fa-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger delete text-danger deleteSocial','id' => 'btnDeleteSocial', 'data-id' => $social->id ] ) !!}
     {!! Form::close() !!}
 </div>
            
              </td>
              
            </tr>
            @endforeach
        </tbody>

        </table> 
        {{-- <span>{{ $sliders->links() }}</span> --}}
      {!! Toastr::message() !!}
     
</div>

      </div>
  </div>
</div>

 <meta name="_token" content="{!! csrf_token() !!}" />
        <!-- Scripts -->
<script src="{{asset('public/js/ajaxscript.js')}}"></script>
{{-- delete item --}}
</div>




<script type="text/javascript">
$('.deleteSocial').on('click', function(e) {
    var inputData = $('#formDeleteItem').serialize();

    var dataId = $('#btnDeleteSocial').attr('data-id');

    $.ajax({
        url: '{{ url('/social/item') }}' + '/' + dataId,
        type: 'POST',
        data: inputData,
        success: function( msg ) {
            if ( msg.status === 'success' ) {
                toastr.warning( msg.msg );
                setInterval(function() {
                    window.location.reload();
                }, 5900);
            }
        },
        error: function( data ) {
            if ( data.status === 422 ) {
                toastr.error('Cannot delete the Item');
            }
        }
    });

    return false;
});


  </script>

@show
