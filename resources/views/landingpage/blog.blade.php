@extends('layouts.main')
@section('content')
@include('layouts.landingnavbar')
      <!-- header section end -->
      <!-- blog section start -->
      <div class="blog_section layout_padding">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <h1 class="about_taital">Our Blog</h1>
               </div>
            </div>
            <div class="blog_section_2">
               <div class="row">
                  <div class="col-md-6">
                     <div class="blog_box">
                        <div class="blog_img"><img src="{{ asset('images/blog-img1.png') }}"></div>
                        <h4 class="date_text">01 Juni</h4>
                        <h4 class="prep_text">Is Family More Important Than Church?</h4>
                        <p class="lorem_text">"In the tapestry of life, the roles of family and the church intertwine, each offering its unique significance and impact. Family, the cornerstone of our existence, provides us with unconditional love, support, and companionship. It's within the bonds of family that we find solace, understanding, and a sense of belonging that transcends all else. Family shapes our values, nurtures our growth, and forms the very fabric of our identity.</p>
                     </div>
                     <div class="read_btn"><a href="#">Read More</a></div>
                  </div>
                  <div class="col-md-6">
                     <div class="blog_box">
                        <div class="blog_img"><img src="{{ asset('images/blog-img2.png') }}"></div>
                        <h4 class="date_text">07 Juni</h4>
                        <h4 class="prep_text">What Is Our Purpose?</h4>
                        <p class="lorem_text">"Exploring the concept of purpose, particularly in the context of family versus the church, offers profound insights into the depths of human existence and spiritual fulfillment. Here's a text that delves into this idea: "At the core of our being lies a fundamental quest for purpose—a driving force that propels us forward, shapes our choices, and gives meaning to our lives. It's a journey of self-discovery, a quest to uncover the essence of our existence and understand our place in the world.For many, the pursuit.</p>
                     </div>
                     <div class="read_btn"><a href="#">Read More</a></div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- blog section end -->
      @endsection