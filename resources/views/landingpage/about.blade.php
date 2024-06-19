@extends('layouts.main')
@section('content')
      <div class="header_section header_bg">
         <div class="container">
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
               <a class="navbar-brand"href="index.html"><img src="images/logo.png"></a>
               <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
               <span class="navbar-toggler-icon"></span>
               </button>
               <div class="collapse navbar-collapse" id="navbarSupportedContent">
                  <ul class="navbar-nav ml-auto">
                     <li class="nav-item active">
                        <a class="nav-link" href="{{ url('/') }}">Home</a>
                     </li>
                     <li class="nav-item">
                        <a class="nav-link" href="{{ url('/about') }}">About</a>
                     </li>
                     <li class="nav-item">
                        <a class="nav-link" href="{{ url('/sermon') }}">Sermons</a>
                     </li>
                     <li class="nav-item">
                        <a class="nav-link" href="{{ url('/blog') }}">Blog</a>
                     </li>
                     <li class="nav-item">
                        <a class="nav-link" href="{{ url('/contact') }}">Contact</a>
                     </li>
                  </ul>
                  <form class="form-inline my-2 my-lg-0">
                     <div class="login_bt">
                        <ul>
                        <li><a href="{{ url('/login') }}"><span class="user_icon"><i class="fa fa-user" aria-hidden="true"></i></span>Login</a></li>
                           <li><a href="#"><i class="fa fa-search" aria-hidden="true"></i></a></li>
                        </ul>
                     </div>
                  </form>
               </div>
            </nav>
         </div>
      </div>
      <!-- header section end -->
      <!-- about section start -->
      <div class="about_section layout_padding">
    <div class="container">
        <div class="about_section_2">
            <div class="row">
                <div class="col-md-6"> 
                    <div class="about_taital_box">
                        <h1 class="about_taital">Welcome To Our Church</h1>
                        <h1 class="about_taital_1">About Us</h1>
                        <p class="about_text">"Welcome to GBI Praise Revival for Jesus, where every soul finds a home in the embrace of God's love and the warmth of Christian fellowship. At the heart of Gereja Bethel Indonesia (GBI), our vibrant community is a beacon of hope and revival, radiating the joy of knowing Jesus Christ.</p>
                        <div class="readmore_btn"><a href="#">Read More</a></div>
                    </div>
                </div>
                <div class="col-md-6"> 
                    <div class="image_iman"><img src="{{ asset('images/about-img.png') }}" class="about_img"></div>
                </div>
            </div>
        </div>
    </div>
</div>
      <!-- about section end -->
      @endsection