@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">
                    Locations - SHOW
                </div>
                <div class="panel-body">
                    <h3>Location</h3>
                    <hr>
                    <dl class="dl-horizontal">
                        <dt>Country:</dt>
                        <dd>{{ $location->country_name }}</dd>
                        <dt>State:</dt>
                        <dd>{{ $location->state_name }}</dd>
                        <dt>City:</dt>
                        <dd>{{ $location->city_name }}</dd>
                    </dl>
                </div>
                <div class="panel-footer clearfix">
                    <a class="btn btn-warning btn-sm" href="{{ URL::previous() }}">< Back</a>
                    <a class="btn btn-primary btn-sm pull-right" href="{{ action('LocationController@edit', [$location->location_id]) }}">Edit</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
