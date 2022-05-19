@extends('admin.layout')
@section('title','Class Form')


@section('content')
<h2>Add Class</h2>
<div class="x_content">
		<br />
		<form class="form-label-left input_mask" method="post" action="{{url('add_class')}}">
			@csrf
			<div class="form-group row">
				<label class="col-form-label col-md-3 col-sm-3 ">Class Name</label>
				<div class="col-md-9 col-sm-9 ">
					<input type="text" class="form-control" placeholder="Class Name"  name="name" required="required">
					 @if ($errors->any())
					 <div class="alert alert-danger">
			         @foreach ($errors->all() as $error)
			            {{ $error }}
			         @endforeach
    				 </div>
					 @endif
				</div>
			</div>
			<div class="ln_solid"></div>
			<div class="form-group row">
				<div class="col-md-9 col-sm-9  offset-md-3">
					<button class="btn btn-primary" type="reset">Reset</button>
					<button type="submit" class="btn btn-success">Submit</button>
				</div>
			</div>
		</form>

	</div>  

@endsection


