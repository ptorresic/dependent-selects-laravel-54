@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">
                    Locations - INDEX
                </div>
                <div class="panel-body">
                    @if(count($locations))
                        <div class="table-responsive">
                            <table class="table table-striped table-hover table-condensed">
                                <caption>Locations</caption>
                                <thead>
                                <tr>
                                    <th></th>
                                    <th>Country</th>
                                    <th>State</th>
                                    <th>City</th>
                                    <th>Updated &#8615;</th>
                                    <th></th>
                                    <th></th>
                                </tr>
                                </thead>
                                <tbody>
                                    @foreach($locations as $location)
                                        <tr>
                                            <td>
                                                <form method="post" class="sweet-delete-form-trigger" action="{{ route('locations.store')."/".$location->location_id }}">
                                                    {{ method_field('DELETE') }}
                                                    {{ csrf_field() }}
                                                    <input class="btn btn-danger btn-xs sweet-delete-button-trigger" type="submit" value="X">
                                                </form>

                                                {{--{!! Form::open(['method' => 'DELETE', 'action' => ['LocationController@destroy', $location->location_id], 'class' => 'sweet-delete-form-trigger']) !!}--}}
                                                {{--{!! Form::submit('X', ['class' => 'btn btn-danger btn-xs sweet-delete-button-trigger']) !!}--}}
                                                {{--{!! Form::close() !!}--}}
                                            </td>
                                            <td>{{ $location->country_name }}</td>
                                            <td>{{ $location->state_name }}</td>
                                            <td>{{ $location->city_name }}</td>
                                            <td>{{ Carbon\Carbon::parse($location->location_update)->diffForHumans() }}</td>
                                            <td>
                                                <a class="pull-right btn btn-warning btn-sm" href="{{ action('LocationController@show', [$location->location_id]) }}">View</a>
                                            </td>
                                            <td>
                                                <a class="pull-right btn btn-success btn-sm" href="{{ action('LocationController@edit', [$location->location_id]) }}">Edit</a>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    @else
                        <div class="alert alert-info" role="alert">
                            No locations available. シ
                        </div>
                    @endif
                </div>
                <div class="panel-footer clearfix">
                    <a class="btn btn-primary btn-sm pull-right" href="{{ route('locations.create') }}">Create</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('scripts')
    @include('locations.partials.scripts.sweet-alert')
@endsection
