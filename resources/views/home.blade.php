@extends('layouts.all')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                   @if(count($blogs))
                        <table class="table table-responsive table-striped">
                            @foreach($blogs as $blog)
                                <tr>
                                    <td>{{ $blog->title }}</td>
                                    <td>
                                        <a href="{{ route('myblogs.show', $blog->id) }}" class="btn btn-primary btn-sm">View</a>
                                        <a href="{{ route('myblogs.edit', $blog->id) }}" class="btn btn-info btn-sm">Edit</a>
                                        <a href="" class="btn btn-danger btn-sm">Delete</a>
                                    </td>
                                </tr>
                            @endforeach
                        </table>
                   @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
