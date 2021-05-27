@extends('layouts.master')
@section('content')


    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <div class="card-title">Attestation for {{ $user->name }}</div>
                </div>
                <div class="card-body">
                    <form action="{{ route('attestations.store', $user->staff_no) }}" method="POST">

                        @csrf

                        <div class="row">
                            <div class="col-6">
                                <div class="form-group">
                                    <label for="oldie">Have you used a gym before?</label>
                                    <select name="oldie" id="oldie" class="form-control">
                                        <option value="undefined" selected disabled>Select were Appropriate</option>
                                        <option value="yes">Yes</option>
                                        <option value="no">No</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-group">
                                    <label for="time_span">If Yes, How long?</label>
                                    <input type="text" name="time_span" id="time_span" class="form-control" placeholder="How Long?" value="{{ old('time_span') }}">
                                </div>
                            </div>


                            <div class="col-6">
                                <div class="form-group">
                                    <label for="program">Have you ever been on any fitness workout or diet before?</label>
                                    <select name="program" id="program" class="form-control">
                                        <option value="undefined" selected disabled>Select were Appropriate</option>
                                        <option value="yes">Yes</option>
                                        <option value="no">No</option>
                                    </select>
                                </div>
                            </div>

                            <div class="col-6">
                                <div class="form-group">
                                    <label for="success_rate">Was it successful?</label>
                                    <select name="success_rate" id="success_rate" class="form-control">
                                        <option value="" selected disabled>Select were Appropriate</option>
                                        <option value="0">Can't Say</option>
                                        <option value="1">Yes</option>
                                        <option value="0">No</option>
                                    </select>
                                </div>
                            </div>

                            <div class="col-12">
                                <div class="form-group">
                                    <label for="observations">If not please tell us why or your observations</label>
                                    <textarea name="observations" class="form-control" id="observations" cols="30" rows="5">{{ old('observations') }}</textarea>
                                </div>
                            </div>

                            <div class="col-12">
                                <div class="form-group">
                                    <label for="training_goal">Please indicate your goal for training</label>
                                    <textarea name="training_goal" class="form-control" id="training_goal" cols="30" rows="5">{{ old('observations') }}</textarea>
                                </div>
                            </div>


                            <div class="col-12 mt-5">
                                <button type="submit" class="btn btn-success btn-lg">
                                    Submit Attestation
                                </button>
                                <a href="{{ route('users.index') }}" class="btn btn-danger btn-lg">Cancel</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>


@stop
