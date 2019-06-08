@extends('layouts.all')

@section('content')

    <div class="card-header">Dashboard</div>

    <div class="card-body">
        <form method="post" action="{{ route('myblogs.update', $blog->id) }}">
        	@csrf
        	<input name="_method" type="hidden" value="PUT">

        	<div class="form-group">
        		<label>Title</label>
        		<input type="text" class="form-control" value="{{ $blog->title }}" required name="title">
        	</div>
        	<div class="form-group">
        		<label>Content</label>
        		<textarea required class="form-control"  rows="6" name="body">{{ $blog->body }}</textarea>
        	</div>
        	<input type="submit" class="btn btn-primary" >
        </form>
    </div>
                
            
@endsection
