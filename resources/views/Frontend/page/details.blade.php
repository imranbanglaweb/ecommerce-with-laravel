@section('pageDisplay')

<ul><li><i class="fa fa-home"></i> Home / {{$pageByid->page_title}}</li></ul>
<hr>
<p>{!!$pageByid->page_dis!!}</p>
@endsection