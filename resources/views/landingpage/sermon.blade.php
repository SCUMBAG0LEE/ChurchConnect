@extends('layouts.main')
@section('content')
@include('layouts.landingnavbar')
      <!-- coffee section start -->
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
                              <div class="coffee_img"><img src="{{ asset('images/img-1.png') }}"></div>
                              <div class="coffee_box">
                                 <h3 class="types_text">BERTUMBUH DEWASA</h3>
                                 <p class="looking_text">Minggu, 2 Juni 2024</p>
                                 <div class="read_bt"><a href="#"> Read More</a></div>
                              </div>
                           </div>
                           <div class="col-lg-3 col-md-6">
                              <div class="coffee_img"><img src="{{ asset('images/img-1.png') }}"></div>
                              <div class="coffee_box">
                                 <h3 class="types_text">Janji Tuhan</h3>
                                 <p class="looking_text">Minggu, 2 Juni 2024</p>
                                 <div class="read_bt"><a href="#">Read More</a></div>
                              </div>
                           </div>
                           <div class="col-lg-3 col-md-6">
                              <div class="coffee_img"><img src="{{ asset('images/img-1.png') }}"></div>
                              <div class="coffee_box">
                                 <h3 class="types_text">True Worship</h3>
                                 <p class="looking_text">Minggu, 2 Juni 2024</p>
                                 <div class="read_bt"><a href="#">Read More</a></div>
                              </div>
                           </div>
                           <div class="col-lg-3 col-md-6">
                              <div class="coffee_img"><img src="{{ asset('images/img-1.png') }}"></div>
                              <div class="coffee_box">
                                 <h3 class="types_text">Rely On God</h3>
                                 <p class="looking_text">Minggu, 2 Juni 2024</p>
                                 <div class="read_bt"><a href="#">Read More</a></div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="carousel-item">
                     <div class="container-fluid">
                        <div class="row">
                           <div class="col-lg-3 col-md-6">
                              <div class="coffee_img"><img src="{{ asset('images/img-1.png') }}"></div>
                              <div class="coffee_box">
                                 <h3 class="types_text">BERTUMBUH DEWASA</h3>
                                 <p class="looking_text">Minggu, 2 Juni 2024</p>
                                 <div class="read_bt"><a href="#"> Read More</a></div>
                              </div>
                           </div>
                           <div class="col-lg-3 col-md-6">
                              <div class="coffee_img"><img src="{{ asset('images/img-1.png') }}"></div>
                              <div class="coffee_box">
                                 <h3 class="types_text">Janji Tuhan</h3>
                                 <p class="looking_text">Minggu, 2 Juni 2024</p>
                                 <div class="read_bt"><a href="#">Read More</a></div>
                              </div>
                           </div>
                           <div class="col-lg-3 col-md-6">
                              <div class="coffee_img"><img src="{{ asset('images/img-1.png') }}"></div>
                              <div class="coffee_box">
                                 <h3 class="types_text">True Worship</h3>
                                 <p class="looking_text">Minggu, 2 Juni 2024</p>
                                 <div class="read_bt"><a href="#">Read More</a></div>
                              </div>
                           </div>
                           <div class="col-lg-3 col-md-6">
                              <div class="coffee_img"><img src="{{ asset('images/img-1.png') }}"></div>
                              <div class="coffee_box">
                                 <h3 class="types_text">Rely On God</h3>
                                 <p class="looking_text">Minggu, 2 Juni 2024</p>
                                 <div class="read_bt"><a href="#">Read More</a></div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="carousel-item">
                     <div class="container-fluid">
                        <div class="row">
                           <div class="col-lg-3 col-md-6">
                              <div class="coffee_img"><img src="{{ asset('images/img-1.png') }}"></div>
                              <div class="coffee_box">
                                 <h3 class="types_text">BERTUMBUH DEWASA</h3>
                                 <p class="looking_text">Minggu, 2 Juni 2024</p>
                                 <div class="read_bt"><a href="#"> Read More</a></div>
                              </div>
                           </div>
                           <div class="col-lg-3 col-md-6">
                              <div class="coffee_img"><img src="{{ asset('images/img-1.png') }}"></div>
                              <div class="coffee_box">
                                 <h3 class="types_text">Janji Tuhan</h3>
                                 <p class="looking_text">Minggu, 2 Juni 2024</p>
                                 <div class="read_bt"><a href="#">Read More</a></div>
                              </div>
                           </div>
                           <div class="col-lg-3 col-md-6">
                              <div class="coffee_img"><img src="{{ asset('images/img-1.png') }}"></div>
                              <div class="coffee_box">
                                 <h3 class="types_text">True Worship</h3>
                                 <p class="looking_text">Minggu, 2 Juni 2024</p>
                                 <div class="read_bt"><a href="#">Read More</a></div>
                              </div>
                           </div>
                           <div class="col-lg-3 col-md-6">
                              <div class="coffee_img"><img src="{{ asset('images/img-1.png') }}"></div>
                              <div class="coffee_box">
                                 <h3 class="types_text">Rely On God</h3>
                                 <p class="looking_text">Minggu, 2 Juni 2024</p>
                                 <div class="read_bt"><a href="#">Read More</a></div>
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
      <!-- coffee section end -->
      @endsection