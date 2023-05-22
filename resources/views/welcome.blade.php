@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-6">
            <img src="/banner.jpg" class="img-fluid" style="border: 1px solid #ccc;">
        </div>
        <div class="col-md-6">
            <h2>Create an account & book your appointment</h2>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quam ab iste iure dolores nam minus doloribus vel possimus modi exercitationem illo, laboriosam amet iusto ad quis harum libero. Minima, veniam.</p>
            @if(!Auth::check())
            <div class="mt-5">
                <a href="{{ url('register') }}"><button class="btn btn-success">Register as Patient</button></a>
                <a href="{{ url('login') }}"><button class="btn btn-secondary">Login</button></a>
            </div>
            @endif
        </div>
    </div>   <!-- end row -->
 
    <hr>

    <!-- date picker component -->
    <find-doctor>

    </find-doctor>

    
</div>
@endsection
