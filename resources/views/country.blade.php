@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    <form>
                        <select class="form-control" id="country">
                            <option value="">Select Country</option>
                            @if(count($countries))
                                @foreach($countries as $country)
                                    <option value="{{ $country->id }}">{{ $country->country_name }}</option>
                                @endforeach
                            @endif  
                        </select>                      
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('after_scripts')
    <script type="text/javascript">
        $("#country").on('change', function(){
            var id = $("#country").val();
            alert(id);
        })
    </script>
@endsection
