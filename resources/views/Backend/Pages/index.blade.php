@extends('Backend.admin_master')
@section('page')
<div class="inner-block">
<div class="blank">
<h2>Page List</h2>
<a id="btn_add" href="{{ url('/page/create')}}" class="pull-right btn btn-primary"><i class="fa fa-plus"></i> Add Page</a>
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
        <th style="font-size: 15px" width="12%">Category Disc</th>
        <th width="8%">Slug</th>
        <th width="3%">Edit</th>
        <th width="3%">Delete</th>
      </tr>
      </thead>
       <tbody>
      @foreach($pages as $page) 
      
      <tr>
        <td>1</td>
        <td>{{ $page->page_title }}</td>
        <td>{!! $page->page_dis !!}</td>
        <td>{{ $page->page_slug }}</td>
        <td>
          <button data-toggle="tooltip" data-placement="top" title="Edit Category!" class="btn btn-success btn-detail open_modal" value={{ $page->id }}"">
            <i class="fa fa-edit"></i>&nbsp;   
              </button>
        </td>
        <td>
               <form method="POST" action="{{ url('page/destroy', $page->id) }}">
           <input type="hidden" name="_token" value="{{ Session::token() }}">
          {{ method_field('DELETE') }}
           <button type="submit" class="btn-sm btn-danger">
           <i class="fa fa-remove"></i>
            
           </button>
          
          </form>﻿
          
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
</div>


@show