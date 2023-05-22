@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-3">
            <div class="card">
                <div class="card-body">
                    <h4 class="text-center">Doctor Information</h4>
                    <img src="{{ asset('upload/doctors/') }}/{{ $doctor->image }}" width="100px" height="100px" stype="border-radius: 50%">
                    <br>
                    <br>
                    <p>Name: {{ $doctor->name }}</p> 
                    <p>Degree: {{ $doctor->education }}</p> 
                    <p>Department: {{ $doctor->department }}</p>
                </div>
            </div>
        </div>
        <div class="col-md-9">
            @foreach($errors->all() as $error)
                <div class="alert alert-danger">{{ $error }}</div>
            @endforeach

            @if(Session::has('message'))
                <div class="alert alert-success">
                    {{ Session::get('message') }}
                </div>
            @endif

            @if(Session::has('errmessage'))
                <div class="alert alert-danger">
                    {{ Session::get('errmessage') }}
                </div>
            @endif

            <form action="{{ route('book.appointment') }}" method="POST">
                @csrf
                <!-- hidden input -->
                <input type="hidden" name="doctor_id" value="{{ $doctor->id }}">
                <input type="hidden" name="appointment_id" value="{{ $appointment->id }}">
                <input type="hidden" name="date" value="{{ $date }}">

                <div class="card">
                    <div class="card-header"><h5>Booking for {{ $date }}</h5></div>

                    <div class="card-body">
                        <div class="row">
                            @foreach($time_slots as $key => $time)
                            <div class="col-md-3">
                                <label class="btn btn-outline-primary">
                                    <input type="radio" name="time" value="{{ $time->time }}">
                                    <span>{{ $time->time }}</span>
                                </label>
                            </div>
                            @endforeach
                        </div>
                    </div>

                    <div class="card-footer">
                    @if(Auth::check())
                        <button type="submit" class="btn btn-success">Book Appointment</button>
                    @else
                        <p>Please login to make an appointment</p>
                        <a href="/register">Register</a> &nbsp;
                        <a href="/login">Login</a>
                    @endif
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>


@endsection
