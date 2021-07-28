@extends('layouts.master')
@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Attendance</h4>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table id="example5" class="display min-w850">
                            <thead>
                            <tr>
                                <th>Date</th>
                                <th>Name</th>
                                <th>Blood Pressure</th>
                                <th>Arrival</th>
                                <th>Departure</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($attendances as $attendee)
                                <tr>
                                    <td>{{ $attendee->created_at->format('d M, y') }}</td>
                                    <td>{{ $attendee->staff->name }}</td>
                                    <td>{{ $attendee->top_level . " / " . $attendee->bottom_level }}</td>
                                    <td>{{ $attendee->created_at->format('H:i:s') }}</td>
                                    <td>{{ $attendee->updated_at->format('H:i:s') }}</td>
                                    <td>
                                        <a class="btn btn-primary {{ $attendee->closed ? ' disabled' : '' }}" href="{{ route('check.out', $attendee->id) }}">Check Out</a>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop
