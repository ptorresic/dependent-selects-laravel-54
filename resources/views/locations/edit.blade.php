@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <form method="post" action="{{ route('locations.store')."/".$location->id }}">
                {{ method_field('PUT') }}
                {{ csrf_field() }}
                <div class="panel panel-default">
                    <div class="panel-heading">
                        Locations - UPDATE
                    </div>
                    <div class="panel-body">
                        <div class="form-group">
                            <label for="country">Select Country:</label>
                            <select id="country" class="form-control" name="country">
                                <option selected="selected" value="{{ $location->country_id }}">{{ $location->country_name }}</option>
                                @foreach($countries as $country)
                                    @unless($country->id === $location->country_id)
                                        <option value={{ $country->id }}>{{ $country->name }}</option>
                                    @endunless
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="state">Select State:</label>
                            <select id="state" class="form-control" name="state">
                                <option selected="selected" value="{{ $location->state_id }}">{{ $location->state_name }}</option>
                                @foreach($states as $state)
                                    @if($state->country_id === $location->country_id)
                                        @unless($state->id === $location->state_id)
                                            <option value={{ $state->id }}>{{ $state->name }}</option>
                                        @endunless
                                    @endif
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="city">Select City:</label>
                            <select id="city" class="form-control" name="city_id">
                                <option selected="selected" value="{{ $location->city_id }}">{{ $location->city_name }}</option>
                                @foreach($cities as $city)
                                    @if($city->state_id === $location->state_id)
                                        @unless($city->id === $location->city_id)
                                            <option value={{ $city->id }}>{{ $city->name }}</option>
                                        @endunless
                                    @endif
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="panel-footer">
                        <div class="row">
                            <div class="col-xs-12">
                                <a href="{{ route('locations.index') }}" class="btn btn-danger btn-sm">Cancel</a>
                                <input class="btn btn-primary btn-sm pull-right" type="submit" value="Update">
                            </div>
                        </div>
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
