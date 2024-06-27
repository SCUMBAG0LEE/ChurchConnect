@extends('layouts.main')
@section('content')
@include('layouts.landingnavbar')
       <!-- Sermons section start -->
<div class="coffee_section layout_padding">
   <div class="container">
      <div class="row">
         <div class="col-md-12">
            <h1 class="coffee_taital">Latest Sermons</h1>
         </div>
      </div>
   </div>
   <div class="coffee_section_2">
      <div id="main_slider" class="carousel slide" data-ride="carousel">
         <div class="carousel-inner">
            <div class="carousel-item active">
               <div class="container-fluid">
                  <div class="row">
                     <div class="col-lg-3 col-md-6">
                        <div class="coffee_box">
                           <div class="coffee_img"><img src="{{ asset('images/img-1.png') }}"></div>
                           <div class="coffee_content">
                              <h3 class="types_text">BERTUMBUH DEWASA</h3>
                              <p class="looking_text">Minggu, 2 Juni 2024</p>
                              <div class="read_bt"><a href="#">Read More</a></div>
                           </div>
                        </div>
                     </div>
                     <div class="col-lg-3 col-md-6">
                        <div class="coffee_box">
                           <div class="coffee_img"><img src="{{ asset('images/img-2.png') }}"></div>
                           <div class="coffee_content">
                              <h3 class="types_text">Janji Tuhan</h3>
                              <p class="looking_text">Minggu, 2 Juni 2024</p>
                              <div class="read_bt"><a href="#">Read More</a></div>
                           </div>
                        </div>
                     </div>
                     <div class="col-lg-3 col-md-6">
                        <div class="coffee_box">
                           <div class="coffee_img"><img src="{{ asset('images/img-3.png') }}"></div>
                           <div class="coffee_content">
                              <h3 class="types_text">True Worship</h3>
                              <p class="looking_text">Minggu, 2 Juni 2024</p>
                              <div class="read_bt"><a href="#">Read More</a></div>
                           </div>
                        </div>
                     </div>
                     <div class="col-lg-3 col-md-6">
                        <div class="coffee_box">
                           <div class="coffee_img"><img src="{{ asset('images/img-4.png') }}"></div>
                           <div class="coffee_content">
                              <h3 class="types_text">Rely On God</h3>
                              <p class="looking_text">Minggu, 2 Juni 2024</p>
                              <div class="read_bt"><a href="#">Read More</a></div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <div class="carousel-item">
               <div class="container-fluid">
                  <div class="row">
                     <div class="col-lg-3 col-md-6">
                        <div class="coffee_box">
                           <div class="coffee_img"><img src="{{ asset('images/img-5.png') }}"></div>
                           <div class="coffee_content">
                              <h3 class="types_text">God's Love</h3>
                              <p class="looking_text">Minggu, 9 Juni 2024</p>
                              <div class="read_bt"><a href="#">Read More</a></div>
                           </div>
                        </div>
                     </div>
                     <div class="col-lg-3 col-md-6">
                        <div class="coffee_box">
                           <div class="coffee_img"><img src="{{ asset('images/img-6.png') }}"></div>
                           <div class="coffee_content">
                              <h3 class="types_text">Faith Journey</h3>
                              <p class="looking_text">Minggu, 9 Juni 2024</p>
                              <div class="read_bt"><a href="#">Read More</a></div>
                           </div>
                        </div>
                     </div>
                     <div class="col-lg-3 col-md-6">
                        <div class="coffee_box">
                           <div class="coffee_img"><img src="{{ asset('images/img-7.png') }}"></div>
                           <div class="coffee_content">
                              <h3 class="types_text">Peace in Christ</h3>
                              <p class="looking_text">Minggu, 9 Juni 2024</p>
                              <div class="read_bt"><a href="#">Read More</a></div>
                           </div>
                        </div>
                     </div>
                     <div class="col-lg-3 col-md-6">
                        <div class="coffee_box">
                           <div class="coffee_img"><img src="{{ asset('images/img-8.png') }}"></div>
                           <div class="coffee_content">
                              <h3 class="types_text">Hope in Darkness</h3>
                              <p class="looking_text">Minggu, 9 Juni 2024</p>
                              <div class="read_bt"><a href="#">Read More</a></div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <div class="carousel-item">
               <div class="container-fluid">
                  <div class="row">
                     <div class="col-lg-3 col-md-6">
                        <div class="coffee_box">
                           <div class="coffee_img"><img src="{{ asset('images/img-9.png') }}"></div>
                           <div class="coffee_content">
                              <h3 class="types_text">Divine Grace</h3>
                              <p class="looking_text">Minggu, 16 Juni 2024</p>
                              <div class="read_bt"><a href="#">Read More</a></div>
                           </div>
                        </div>
                     </div>
                     <div class="col-lg-3 col-md-6">
                        <div class="coffee_box">
                           <div class="coffee_img"><img src="{{ asset('images/img-10.png') }}"></div>
                           <div class="coffee_content">
                              <h3 class="types_text">Walking with Jesus</h3>
                              <p class="looking_text">Minggu, 16 Juni 2024</p>
                              <div class="read_bt"><a href="#">Read More</a></div>
                           </div>
                        </div>
                     </div>
                     <div class="col-lg-3 col-md-6">
                        <div class="coffee_box">
                           <div class="coffee_img"><img src="{{ asset('images/img-11.png') }}"></div>
                           <div class="coffee_content">
                              <h3 class="types_text">Forgiveness</h3>
                              <p class="looking_text">Minggu, 16 Juni 2024</p>
                              <div class="read_bt"><a href="#">Read More</a></div>
                           </div>
                        </div>
                     </div>
                     <div class="col-lg-3 col-md-6">
                        <div class="coffee_box">
                           <div class="coffee_img"><img src="{{ asset('images/img-12.png') }}"></div>
                           <div class="coffee_content">
                              <h3 class="types_text">Living in Faith</h3>
                              <p class="looking_text">Minggu, 16 Juni 2024</p>
                              <div class="read_bt"><a href="#">Read More</a></div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <div class="carousel-item">
               <div class="container-fluid">
                  <div class="row">
                     <div class="col-lg-3 col-md-6">
                        <div class="coffee_box">
                           <div class="coffee_img"><img src="{{ asset('images/img-13.png') }}"></div>
                           <div class="coffee_content">
                              <h3 class="types_text">Blessings</h3>
                              <p class="looking_text">Minggu, 23 Juni 2024</p>
                              <div class="read_bt"><a href="#">Read More</a></div>
                           </div>
                        </div>
                     </div>
                     <div class="col-lg-3 col-md-6">
                        <div class="coffee_box">
                           <div class="coffee_img"><img src="{{ asset('images/img-14.png') }}"></div>
                           <div class="coffee_content">
                              <h3 class="types_text">Trust in God</h3>
                              <p class="looking_text">Minggu, 23 Juni 2024</p>
                              <div class="read_bt"><a href="#">Read More</a></div>
                           </div>
                        </div>
                     </div>
                     <div class="col-lg-3 col-md-6">
                        <div class="coffee_box">
                           <div class="coffee_img"><img src="{{ asset('images/img-15.png') }}"></div>
                           <div class="coffee_content">
                              <h3 class="types_text">God's Mercy</h3>
                              <p class="looking_text">Minggu, 23 Juni 2024</p>
                              <div class="read_bt"><a href="#">Read More</a></div>
                           </div>
                        </div>
                     </div>
                     <div class="col-lg-3 col-md-6">
                        <div class="coffee_box">
                           <div class="coffee_img"><img src="{{ asset('images/img-16.png') }}"></div>
                           <div class="coffee_content">
                              <h3 class="types_text">Salvation</h3>
                              <p class="looking_text">Minggu, 23 Juni 2024</p>
                              <div class="read_bt"><a href="#">Read More</a></div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <a class="carousel-control-prev" href="#main_slider" role="button" data-slide="prev">
            <i class="fa fa-arrow-left"></i>
         </a>
         <a class="carousel-control-next" href="#main_slider" role="button" data-slide="next">
            <i class="fa fa-arrow-right"></i>
         </a>
      </div>
   </div>
</div>
<!-- Sermons section end -->
      @endsection