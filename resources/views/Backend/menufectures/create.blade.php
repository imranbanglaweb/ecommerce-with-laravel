@extends('Backend.admin_master')
@section('main_content')
<div class="inner-block">
<div class="blank">
<h2>Add Menufecture</h2>
<div class="blankpage-main">
	<div class="container">
 <form class="form-horizontal" method="post" action="{{ route('menufecture.store') }}">
    {{ csrf_field() }}

<div class="form-group{{ $errors->has('brand_name') ? ' has-error' : '' }}">
<label for="brand_name" class="col-md-2 control-label">
 Name</label>

    <div class="col-md-6">
        <input id="brand_name" type="text" class="form-control" name="brand_name" value="{{ old('brand_name') }}" autofocus placeholder="Enter Brand Name">
        @if ($errors->has('brand_name'))
        <span class="help-block">
        <strong>{{ $errors->first('brand_name') }}</strong>
        </span>
    @endif
    </div>
</div>
<div class="form-group{{ $errors->has('status') ? ' has-error' : '' }}">
<label for="status" class="col-md-2 control-label">
 Status</label>

    <div class="col-md-6">
        
        <select name="status" class="form-control">
            <option>
                Select Publication Status
            </option>
            <option value="1">Published</option>
            <option value="0">Un Published</option>
        </select>
        @if ($errors->has('status'))
        <span class="help-block">
        <strong>{{ $errors->first('status') }}</strong>
        </span>
    @endif
    </div>
</div>
<div class="form-group">
    <div class="col-md-6 col-md-offset-2">
    <button type="submit" class="btn btn-primary">
           <i class="fa fa-plus"></i>
            Menufecture Added
    </button>
    </div>
</div>
                    </form>
</div>
</div>
</div>
</div>
@show