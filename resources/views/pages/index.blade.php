@extends('layouts.master')
@section('title', 'Dashboard | Departments')
@section('content')
     <!-- row -->
     <div class="row">
                <div class="col-lg-12">
                    <div class="profile card card-body px-3 pt-3 pb-0">
                        <div class="profile-head">
                            <div class="photo-content">
                                <div class="cover-photo" style="background: url('../images/gym.jpeg'); background-size: cover; background-position: center; "></div>
                            </div>
                            <div class="profile-info">
                                <div class="profile-photo">
                                    <img src="/images/logo.png" class="img-fluid rounded-circle" alt="">
                                </div>
                                <div class="profile-details">
                                    <div class="profile-name px-3 pt-2">
                                        <h4 class="text-primary mb-0">{{ auth()->user()->name }}</h4>
                                        <p>{{ ucwords(auth()->user()->type) }}</p>
                                    </div>
                                    <div class="profile-email px-2 pt-2">
                                        <h4 class="text-muted mb-0">{{ auth()->user()->email }}</h4>
                                        <p>Email</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
     <div class="row">
         <div class="col-xl-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="profile-tab">
                                <div class="custom-tab-1">
                                    <ul class="nav nav-tabs">
                                        <li class="nav-item"><a href="#about-me" data-toggle="tab" class="nav-link">About Me</a>
                                        </li>
                                        @if(! is_object(auth()->user()->attestation))
                                        <li class="nav-item"><a href="#profile-settings" data-toggle="tab" class="nav-link">Profile</a>
                                        </li>
                                        <li class="nav-item"><a href="#attestation" data-toggle="tab" class="nav-link">Attestation</a>
                                        </li>
                                        @endif
                                        @if(! is_object(auth()->user()->medical))
                                        <li class="nav-item"><a href="#medicals" data-toggle="tab" class="nav-link">Medicals</a>
                                        </li>
                                        @endif
                                    </ul>
                                    <div class="tab-content">
                                        <div id="about-me" class="tab-pane fade active show">
                                            <div class="profile-personal-info">
                                                <h4 class="text-primary mb-4">Personal Information</h4>
                                                <div class="row mb-4 mb-sm-4">
                                                    <div class="col-sm-3">
                                                        <h5 class="f-w-500">Name <span class="pull-right d-none d-sm-block">:</span></h5>
                                                    </div>
                                                    <div class="col-sm-9"><span>{{ auth()->user()->name }}</span>
                                                    </div>
                                                </div>
                                                <div class="row mb-4 mb-sm-4">
                                                    <div class="col-sm-3">
                                                        <h5 class="f-w-500">Email <span class="pull-right d-none d-sm-block">:</span>
                                                        </h5>
                                                    </div>
                                                    <div class="col-sm-9"><span>{{ auth()->user()->email ?? 'Not Set' }}</span>
                                                    </div>
                                                </div>
                                                <div class="row mb-4 mb-sm-4">
                                                    <div class="col-sm-3">
                                                        <h5 class="f-w-500">Department <span class="pull-right d-none d-sm-block">:</span></h5>
                                                    </div>
                                                    <div class="col-sm-9"><span>{{ auth()->user()->department->name ?? ' Not Set' }}</span>
                                                    </div>
                                                </div>
                                                <div class="row mb-4 mb-sm-4">
                                                    <div class="col-sm-3">
                                                        <h5 class="f-w-500">Age <span class="pull-right d-none d-sm-block">:</span>
                                                        </h5>
                                                    </div>
                                                    <div class="col-sm-9"><span>{{ auth()->user()->age != 0 ? auth()->user()->age : 'Not Set' }}</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>


                                        @if(auth()->user()->sex === "undefined")
                                        <div id="profile-settings" class="tab-pane fade">
                                            <div class="pt-3">
                                                <div class="settings-form">
                                                    <form action="{{ route('users.update', auth()->user()->staff_no) }}" method="POST">
                                                        @csrf
                                                        @method('PATCH')
                                                        <div class="row">
                                                            <div class="col-3">
                                                                <div class="form-group">
                                                                    <input type="text" name="staff_no" class="form-control" placeholder="Enter Staff ID" value="{{ auth()->user()->staff_no }}">
                                                                </div>
                                                            </div>
                                                            <div class="col-3">
                                                                <div class="form-group">
                                                                    <input type="text" name="name" class="form-control" placeholder="Enter Fullname" value="{{ auth()->user()->name }}">
                                                                </div>
                                                            </div>
                                                            <div class="col-3">
                                                                <div class="form-group">
                                                                    <input type="text" name="email" class="form-control" placeholder="Enter Email" value="{{ auth()->user()->email }}">
                                                                </div>
                                                            </div>
                                                            <div class="col-3">
                                                                <div class="form-group">
                                                                    <input type="text" name="mobile" class="form-control" placeholder="Enter Mobile Number" value="{{ auth()->user()->mobile ?? old('mobile') }}">
                                                                </div>
                                                            </div>
                                                            <div class="col-3">
                                                                <div class="form-group">
                                                                    <input type="date" name="dob" class="form-control" placeholder="Select Date of Birth" value="{{ auth()->user()->dob }}">
                                                                </div>
                                                            </div>
                                                            <div class="col-3">
                                                                <div class="form-group">
                                                                    <input type="number" name="age" class="form-control" placeholder="Enter Age" value="{{ auth()->user()->age }}">
                                                                </div>
                                                            </div>
                                                            <div class="col-3">
                                                                <div class="form-group">
                                                                    <select name="sex" id="sex" class="form-control">
                                                                        <option value="" selected disabled>Select Gender</option>
                                                                        <option value="male" {{ auth()->user()->sex == "male" ? ' selected' : '' }}>Male</option>
                                                                        <option value="female" {{ auth()->user()->sex == "female" ? ' selected' : '' }}>Female</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                            <div class="col-3">
                                                                <div class="form-group">
                                                                    <select name="type" id="type" class="form-control">
                                                                        <option value="" selected disabled>Select Staff Type</option>
                                                                        <option value="staff" {{ auth()->user()->sex == "staff" ? ' selected' : '' }}>Staff</option>
                                                                        <option value="medical" {{ auth()->user()->sex == "medical" ? ' selected' : '' }}>Medical Staff</option>
                                                                        <option value="instructor" {{ auth()->user()->sex == "instructor" ? ' selected' : '' }}>Gym Instructor</option>
                                                                    </select>
                                                                </div>
                                                            </div>

                                                            <div class="col-12 mt-5">
                                                                <button type="submit" class="btn btn-success btn-lg">
                                                                    Update Profile
                                                                </button>
                                                            </div>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                        @endif
                                        @if(! is_object(auth()->user()->attestation))
                                        <div id="attestation" class="tab-pane fade">
                                            <div class="pt-5">
                                                <div class="settings-form">
                                                    <form action="{{ route('attestations.store', auth()->user()->staff_no) }}" method="POST">
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
                                                            </div>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>

                                        @endif
                                        @if(! is_object(auth()->user()->medical))
                                        <div id="medicals" class="tab-pane fade">
                                            <div class="pt-5">
                                                <div class="settings-form">
                                                    <form action="{{ route('medicals.store', auth()->user()->staff_no) }}" method="POST">
                                                        @csrf

                                                        <div class="row">
                                                            <div class="col-6">
                                                                <div class="form-group">
                                                                    <input type="text" name="weight" class="form-control" value="{{ old('weight') }}" placeholder="Enter Weight">
                                                                </div>
                                                            </div>

                                                            <div class="col-6">
                                                                <div class="form-group">
                                                                    <input type="text" name="height" class="form-control" value="{{ old('height') }}" placeholder="Enter Height">
                                                                </div>
                                                            </div>

                                                            <div class="col-6">
                                                                <div class="form-group">
                                                                    <input type="text" name="emergency_name" class="form-control" value="{{ old('emergency_name') }}" placeholder="Enter Emergency Contact Name">
                                                                </div>
                                                            </div>

                                                            <div class="col-6">
                                                                <div class="form-group">
                                                                    <input type="text" name="mobile" class="form-control" value="{{ old('mobile') }}" placeholder="Enter Emergency Contact Mobile">
                                                                </div>
                                                            </div>

                                                            <div class="col-12">
                                                                <div class="form-group">
                                                                    <textarea name="health_conditions" id="health_conditions" cols="30"
                                                                              rows="5" placeholder="Do you have any health condition? Please specify:" class="form-control"></textarea>
                                                                </div>
                                                            </div>

                                                            <div class="col-6">
                                                                <button type="submit" class="btn btn-primary btn-lg">
                                                                    Submit
                                                                </button>
                                                            </div>

                                                        </div>

                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
     </div>
@stop
