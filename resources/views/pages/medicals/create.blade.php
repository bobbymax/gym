@extends('layouts.master')
@section('title', 'Dashboard | Add Medicals')
@section('content')
    <div id="medicals-row" class="container-fluid">
        <div class="pt-5">
            <div class="medical-form">
                <form action="{{ route('medicals.store', $user->staff_no) }}" method="POST">
                    @csrf

                    <div class="row">
                        <div class="col-6">
                            <div class="form-group">
                                <input type="text" name="weight" class="form-control" value="{{ $user->medical->weight ?? old('weight') }}" placeholder="Enter Weight" {{ $user->medical ? 'readonly' : '' }}>
                            </div>
                        </div>

                        <div class="col-6">
                            <div class="form-group">
                                <input type="text" name="height" class="form-control" value="{{ $user->medical->height ?? old('height') }}" placeholder="Enter Height" {{ $user->medical ? 'readonly' : '' }}>
                            </div>
                        </div>

                        <div class="col-6">
                            <div class="form-group">
                                <input type="text" name="emergency_name" class="form-control" value="{{ $user->medical->emergency_name ?? old('emergency_name') }}" placeholder="Enter Emergency Contact Name" {{ $user->medical ? 'readonly' : '' }}>
                            </div>
                        </div>

                        <div class="col-6">
                            <div class="form-group">
                                <input type="text" name="mobile" class="form-control" value="{{ $user->medical->mobile ?? old('mobile') }}" placeholder="Enter Emergency Contact Mobile" {{ $user->medical ? 'readonly' : '' }}>
                            </div>
                        </div>

                        <div class="col-12">
                            <div class="form-group">
                                <textarea name="health_conditions" id="health_conditions" cols="30" rows="5" placeholder="Do you have any health condition? Please specify:" class="form-control" {{ $user->medical ? 'readonly' : '' }}>{{ $user->medical->health_conditions ?? old('health_conditions') }}</textarea>
                            </div>
                        </div>

                        <div class="col-6">
                            <button type="submit" class="btn btn-success btn-lg">
                                Submit
                            </button>
                            <a href="{{ route('users.index') }}" class="btn btn-danger btn-lg">
                                Go Back
                            </a>
                        </div>

                    </div>

                </form>
            </div>
        </div>
    </div>
@stop
