@extends('Backend.admin_master')
@section('main_content')
<div class="inner-block">
<div class="blank">
<h2>Logo List</h2>
<a class="pull-right btn btn-primary" href="{{ url('logo/create')}}"><i class="fa fa-plus"></i> &nbsp;Add Logo</a>
<hr>
<div class="blankpage-main">
	<div class="container">
      <div class="col-md-8">
          <div class="table-responsive">
     <table class="table table table-hover">
      <tr>
        <th width="5%">Sl</th>
        <th width="15%">Logo Name</th>
        <th width="5%">Logo Link</th>
        <th width="8%">Image</th>
        <th width="3%">Edit</th>
        <th width="3%">Delete</th>
      </tr>
      @php
      $i=1;
      @endphp
      @foreach($logos as $logo) 
      
      <tr>
        <td>{{$i++}}</td>
        <td>{{ $logo->logo_title }}</td>
        <td>{{ $logo->logo_link }}</td>
        <td><img src="{{ asset($logo->logo_image)}}" alt="" height="50" width="50"></td>
        <td>
       
          <button data-toggle="tooltip" data-placement="top" title="Edit Logo!" class="btn btn-success btn-detail open_modal" value={{ $logo->id }}"">
            <i class="fa fa-edit"></i>&nbsp;   
              </button>

        </td>
        <td>


           <input type="hidden" name="_token" value="{{ Session::token() }}">
          {{ method_field('DELETE') }}
            <button data-toggle="tooltip" data-placement="top" title="Delete Logo!" class="delete-logo btn-sm btn-danger" value={{ $logo->id }}"">
              <i class="fa fa-remove"></i>&nbsp;   
              </button>
 

        </td>
      </tr> 
      @endforeach
      {!! Toastr::message() !!}
     </table>
   </div>
      </div>
  </div>
</div>
</div>
<!-- Passing BASE URL to AJAX -->
        <input id="url" type="hidden" value="{{ \Request::url() }}">

        <!-- MODAL SECTION -->
        <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                <h4 class="modal-title text-success" id="myModalLabel"><i class="fa fa-star"></i> Logo Update</h4>
              </div>
              <div class="modal-body">
                <form id="frmProducts" method="post" name="frmProducts" class="form-horizontal" enctype="multipart/form-data">
                  <div class="form-group error">
                    <label for="inputName" class="col-sm-3 control-label">Title</label>
                    <div class="col-sm-9">
                      <input type="text" class="form-control has-error" id="logo_title" name="logo_title" placeholder="Title" value="">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputDetail" class="col-sm-3 control-label">Link</label>
                    <div class="col-sm-9">
                      <input type="text" class="form-control" id="logo_link" name="logo_link" placeholder="Link" value="">
                    </div>
                  </div>
  
                  <div class="form-group">
                    <label for="inputDetail" class="col-sm-3 control-label">Image</label>
                    <div class="col-sm-9">
                    <img style="border: 1px solid #ccc; border-radius: 50%%; padding: 5px" id="logo_image" name="logo_image"  src="" alt="" width="80" height="80">
                    
                  
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputDetail" class="col-sm-3 control-label">Upload </label>
                    <div class="col-sm-9">
                    <input type="file" id="logoUpload" name="logoUpload"  accept="image/*">
                 
                    </div>
                  </div>
             
                </form>
              </div>
              <div class="modal-footer">
              
                <input class="btn btn-success" type="button" id="btn-save"  value="Add">
                <input type="hidden" id="id" name="id" value="0">
                <input type="hidden" id="old_img_path" name="old_img_path" value="0">
              </div>
            </div>
          </div>
        </div>
        {{-- end Modal Div --}}
 <meta name="_token" content="{!! csrf_token() !!}" />
        <!-- Scripts -->
</div>
<script src="{{asset('public/js/logoajax.js')}}"></script>
@show