@section('brand')

 			<h3 class="btn bg-primary">Brand</h3>
 			<hr>
 			<ul class="list-group" style="list-style: none;">
 				@foreach($brands as $brand)
 				<li id="brandId{{$brand->id}}" value="{{$brand->id}}">
 				<a href="" class="list-group-item list-group-item-success"><i class="fa fa-list"></i>
 					{{ $brand->brand_name}}
 				</a></li>
 				@endforeach
 			</ul>
<script type="text/javascript" src="{{ asset('public/Frontend/')}}/js/jquery-2.1.4.min.js"></script>

<script>
$(document).ready(function(){
@foreach($brands as $brand)
  $("#brandId{{$brand->id}}").click(function(e){
  	e.preventDefault();
    var brandId = $("#brandId{{$brand->id}}").val();
    // alert(brandId);
    
    $.ajax({
      type: 'get',
      dataType: 'html',
      url: '{{ url('/brandWiseProduct')}}',
      data: 'id=' + brandId,
       beforeSend: function(){
        // Show image container
        $('#spinner').show();
        
       },
      success:function(response){
        console.log(response);
        $("#categoryWiseProduct").html(response);
      },
      complete: function(){
            $('#spinner').hide();
        },
    });
  });
    @endforeach
});
</script>

@endsection