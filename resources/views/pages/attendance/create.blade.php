@extends('layouts.master')
@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <div class="card-title">Attendance for {{ $user->name }}</div>
                </div>
                <div class="card-body">
                    <form action="{{ route('attendances.store', $user->staff_no) }}" method="POST">

                        @csrf

                        <div class="row">
                            <div class="col-4">
                                <div class="form-group">
                                    <label for="top_level">Top Level Reading</label>
                                    <input type="text" name="top_level" class="form-control" value="{{ old('top_level') }}" placeholder="Enter Top Level Reading" />
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="form-group">
                                    <label for="bottom_level">Bottom Level Reading</label>
                                    <input type="text" name="bottom_level" class="form-control" value="{{ old('bottom_level') }}" placeholder="Enter Bottom Level Reading" />
                                </div>
                            </div>


                            <div class="col-4">
                                <div class="form-group">
                                    <label for="attended">Attended</label>
                                    <select name="attended" id="attended" class="form-control">
                                        <option value="undefined" selected disabled>Select were Appropriate</option>
                                        <option value="yes">Yes</option>
                                        <option value="no">No</option>
                                    </select>
                                </div>
                            </div>


                            <div class="col-12 mt-5">
                                <button type="submit" class="btn btn-success btn-lg">
                                    Mark Attendance
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
