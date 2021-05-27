@extends('layouts.master')
@section('content')

    <div class="row">
        <div class="col-12">
            <div class="card">
               <div class="card-header">
                   <div class="card-title">Edit Member</div>
               </div>
                <div class="card-body">
                    <form action="{{ route('users.update', $user->staff_no) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PATCH')

                        <div class="row">
                            <div class="col-4">
                                <div class="form-group">
                                    <input type="text" name="staff_no" class="form-control" placeholder="Enter Staff ID" value="{{ $user->staff_no }}">
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="form-group">
                                    <input type="text" name="name" class="form-control" placeholder="Enter Fullname" value="{{ $user->name }}">
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="form-group">
                                    <input type="text" name="email" class="form-control" placeholder="Enter Email" value="{{ $user->email }}">
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="form-group">
                                    <select name="department_id" id="department_id" class="form-control">
                                        <option value="" selected disabled>Select Department</option>
                                        @foreach($departments as $department)
                                            <option value="{{ $department->id }}">{{ $department->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="form-group">
                                    <input type="text" name="mobile" class="form-control" placeholder="Enter Mobile Number" value="{{ $user->mobile ?? old('mobile') }}">
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="form-group">
                                    <input type="date" name="dob" class="form-control" placeholder="Select Date of Birth" value="{{ $user->dob }}">
                                </div>
                            </div>
                            <div class="col-3">
                                <div class="form-group">
                                    <input type="number" name="age" class="form-control" placeholder="Enter Age" value="{{ $user->age }}">
                                </div>
                            </div>
                            <div class="col-3">
                                <div class="form-group">
                                    <select name="sex" id="sex" class="form-control">
                                        <option value="" selected disabled>Select Gender</option>
                                        <option value="male" {{ $user->sex == "male" ? ' selected' : '' }}>Male</option>
                                        <option value="female" {{ $user->sex == "female" ? ' selected' : '' }}>Female</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-3">
                                <div class="form-group">
                                    <select name="type" id="type" class="form-control">
                                        <option value="" selected disabled>Select Staff Type</option>
                                        <option value="male" {{ $user->sex == "staff" ? ' selected' : '' }}>Staff</option>
                                        <option value="female" {{ $user->sex == "medical" ? ' selected' : '' }}>Medical Staff</option>
                                        <option value="female" {{ $user->sex == "instructor" ? ' selected' : '' }}>Gym Instructor</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-3">
                                <div class="input-group">
                                    <div class="custom-file">
                                        <input type="file" class="custom-file-input">
                                        <label class="custom-file-label">Choose file</label>

                                    </div>
                                </div>
                            </div>

                            <div class="col-12 mt-5">
                                <button type="submit" class="btn btn-success btn-lg">
                                    Update Profile
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
