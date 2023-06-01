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
{{-- 
<div class="box_gioithieu">
    <div  class="chinhsach_conten">
        <div class="row"> 
            <div class="item_cs col-md-4">
                <div class="item_cs_top">
                    <div class="img_cs">
                        <img src="upload/news/1.png" alt="Khám và Chữa Bệnh">
                    </div>
                </div>
                <div class="item_cs_top_info">
                    <span>Nhiều năm kinh nghiệm</span>
                    <h3>Khám và Chữa Bệnh</h3>
                </div>
                <div class="info_cs">
                    <p>Phòng Khám Đa Khoa Đông Phương luôn mong muốn đem đến cuộc sống khỏe mạnh cho mọi người, mọi nhà.</p>  
                </div>
            </div>
            <div class="item_cs col-md-4">
                <p>Test</p>
            </div>
            <div class="item_cs col-md-4">
                <p>Test</p>
            </div>
        </div> 
    </div>
</div> --}}
    <!-- date picker component -->
    <find-doctor>

    </find-doctor>

    
</div>
@endsection
