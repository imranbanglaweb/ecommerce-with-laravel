@extends('Backend.admin_master')
@section('main_content')
<div class="inner-block">
<div class="blank">
<h2>Category List</h2>
<button id="btn_add" name="btn_add" class="pull-right btn btn-primary"><i class="fa fa-plus"></i> Add Category</button>
<hr>
<div class="blankpage-main">
	<div class="container">
      <div class="col-md-8">
          <div class="table-responsive">
     <table class="table table table-hover">
      <thead>
        <p id="msg" style="color: white; display: block;background-color: yellowgreen" class="text-success"></p>
        <p id="errormsg" style="color: white; display: block;background-color: red" class="text-warning"></p>
      <tr>
        <th width="5%">Sl</th>
        <th width="15%">Category Name</th>
        <th width="12%">Category Disc</th>
        <th width="8%">Slug</th>
        <th width="5%">Created</th>
        <th width="3%">Edit</th>
        <th width="3%">Delete</th>
      </tr>
      </thead>
       <tbody id="category-list" name="category-list">
      @foreach($allcategory as $category) 
      
      <tr id="category{{$category->id}}">
        <td>1</td>
        <td>{{ $category->category_name }}</td>
        <td>{{ $category->category_dis }}</td>
        <td>{{ $category->category_slug }}</td>
        <td>2018-12-12</td>
        <td>
          <button data-toggle="tooltip" data-placement="top" title="Edit Category!" class="btn btn-success btn-detail open_modal" value={{ $category->id }}"">
            <i class="fa fa-edit"></i>&nbsp;   
              </button>
        </td>
        <td>
           <button type="submit" class="btn-sm btn-danger delete-category" value="{{$category->id}}">
           <i class="fa fa-remove"></i>
           </button>
          
        </td>
      </tr>
      </tbody> 
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
                <h4 class="modal-title text-success" id="myModalLabel"><i class="fa fa-star"></i> Category Update</h4>
              </div>
              <div class="modal-body">
                <form id="frmProducts" name="frmProducts" class="form-horizontal">
                  <div class="form-group error">
                    <label for="inputName" class="col-sm-3 control-label">Name</label>
                    <div class="col-sm-9">
                      <input type="text" class="form-control has-error" id="category_name" name="category_name" placeholder="Name" value="">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputDetail" class="col-sm-3 control-label">Disc</label>
                    <div class="col-sm-9">
                      <input type="text" class="form-control" id="category_dis" name="category_dis" placeholder="Disc" value="">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputDetail" class="col-sm-3 control-label">Slug</label>
                    <div class="col-sm-9">
                      <input type="text" class="form-control" id="category_slug" name="category_slug" placeholder="Slug" value="">
                    </div>
                  </div>
             
                </form>
              </div>
              <div class="modal-footer">
              
                <input class="btn btn-success" type="button" id="btn-save"  value="Add">
                <input type="hidden" id="id" name="id" value="0">
              </div>
            </div>
          </div>
        </div>
        {{-- end Modal Div --}}
 <meta name="_token" content="{!! csrf_token() !!}" />
        <!-- Scripts -->
<script src="{{asset('public/js/cateEdit.js')}}"></script>

</div>
@show