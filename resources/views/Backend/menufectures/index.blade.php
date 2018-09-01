@extends('Backend.admin_master')
@section('main_content')
<div class="inner-block">
<div class="blank">
<h2>Menufecture List</h2>
<a class="pull-right btn btn-primary" href="{{ route('menufecture.create')}}"><i class="fa fa-plus"></i>&nbsp;Add Menufecture</a>
<hr>
<div class="blankpage-main">
	<div class="container">
      <div class="col-md-8">
          <div class="table-responsive">
     <table class="table table table-hover">
      <tr>
        <th width="5%">Sl</th>
        <th width="15%">Menufecture Name</th>
        <th width="12%">Status</th>
        <th width="5%">Created</th>
        <th width="3%">Edit</th>
        <th width="3%">Delete</th>
      </tr>
      
      @php
      @$i=1;
      @endphp
      @foreach($menufectures as $menufecture) 
      
      <tr>
        <td>{{$i++}}</td>
        <td>{{ $menufecture->brand_name }}</td>
        @if($menufecture->status == 1)  
        <td>Published</td>
        @else
        <td>Un Published</td>
        @endif
        <td>{{ $menufecture->created_at }}</td>
        <td>
          <a class="btn btn-info" href="{{route('menufecture.edit',$menufecture->id)}}">
            <i class="fa fa-edit"></i>
          </a>
        </td>
        <td>

           <form method="POST" action="{{ route('menufecture.destroy', $menufecture->id) }}">
           <input type="hidden" name="_token" value="{{ Session::token() }}">
          {{ method_field('DELETE') }}
           <button type="submit" class="btn-sm btn-danger">
           <i class="fa fa-remove"></i>
            
           </button>
          
          </form>﻿

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
</div>
@show