@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <form method="POST" action="{{ action('LocationController@store') }}" accept-charset="UTF-8">
                {{ csrf_field() }}
                <div class="panel panel-default">
                    <div class="panel-heading">
                        Locations - CREATE
                    </div>
                    <div class="panel-body">
                        <div class="form-group">
                            <label for="country">Select Country:</label>
                            <select id="country" class="form-control" name="country">
                                <option selected="selected" value="">Select</option>
                                @foreach($countries as $country)
                                    <option value={{ $country->id }}>{{ $country->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="state">Select State:</label>
                            <select id="state" class="form-control" name="state"></select>
                        </div>
                        <div class="form-group">
                            <label for="city">Select City:</label>
                            <select id="city" class="form-control" name="city_id"></select>
                        </div>
                    </div>
                    <div class="panel-footer">
                        <a href="{{ route('locations.index') }}" class="btn btn-danger btn-sm">Cancel</a>
                        <input class="btn btn-primary btn-sm pull-right" type="submit" value="Create">
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection

@section('scripts')
    @include('locations.partials.scripts.dependent-selects')
@endsection
