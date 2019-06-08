@extends('layouts.all')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">

                <div class="card-body">
                        <table class="table table-responsive table-striped">
                                <tr>
                                    <td>{{ $blog->title }}</td>                                    
                                </tr>
                                <tr>
                                	<td>
                                		{{ $blog->body }}
                                	</td>
                                </tr>
                        </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
