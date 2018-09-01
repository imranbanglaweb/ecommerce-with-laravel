@section('categories')
	
 			<h3 class="btn bg-primary">Categories</h3>
 			<hr>
 				
 				<ul class="list-group" style="list-style: none;">
				@foreach($categories as $category)
 					
 				<li class="list-group-item list-group-item-primary" id="catId{{$category->id}}" value="{{$category->id}}">
 					<a href="">
            <i class="fa fa-arrow-right"></i> {{$category->category_name}}

 					</a>

 				</li>
 				
				@endforeach
 				</ul>
 		
<!-- js -->
<script type="text/javascript" src="{{ asset('public/Frontend/')}}/js/jquery-2.1.4.min.js"></script>
<script>
$(document).ready(function(){
  @foreach($categories as $category)
  $("#catId{{$category->id}}").click(function(e){
  	e.preventDefault();
    var catId = $("#catId{{$category->id}}").val();
    // alert(catId);
    
    $.ajax({
      type: 'get',
      dataType: 'html',
      url: '{{ url('/categoryWiseProduct')}}',
      data: 'id=' + catId,
       beforeSend: function(){
        // Show image container
        $('#preloader').fadeOut('slow');
       
        
       },
      success:function(response){
        console.log(response);
        $("#categoryWiseProduct").html(response);
       
      },
      complete: function(){
             $('#preloader').delay(350).fadeOut('slow');
        },
    });
  });
    @endforeach
});
</script>
@endsection

