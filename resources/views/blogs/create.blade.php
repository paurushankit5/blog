@extends('layouts.all')

@section('content')

    <div class="card-header">Dashboard</div>

    <div class="card-body">
        <form method="post" action="{{ route('myblogs.store') }}">
        	@csrf
        	<div class="form-group">
        		<label>Title</label>
        		<input type="text" class="form-control" required name="title">
        	</div>
        	<div class="form-group">
        		<label>Content</label>
        		<textarea required class="form-control" rows="6" name="body"></textarea>
        	</div>
        	<input type="submit" class="btn btn-primary" >
        </form>
    </div>
                
            
@endsection
