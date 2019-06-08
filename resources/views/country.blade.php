@extends('layouts.all')

@section('content')
    <h1>Welcome</h1>
      <form>
            <div class="form-group">
                <select class="form-control" id="country">
                    <option value="">Select Country</option>
                    @if(count($countries))
                        @foreach($countries as $country)
                            <option>{{ $country->country_name }}</option>
                        @endforeach
                    @endif
                </select>
            </div>

      </form>
@endsection


@section('after_scripts')


@endsection