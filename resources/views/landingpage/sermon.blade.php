<!DOCTYPE html>
<html>
   <head>
      <!-- basic -->
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <!-- mobile metas -->
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="viewport" content="initial-scale=1, maximum-scale=1">
      <!-- site metas -->
      <title>ChurchConnect</title>
      <meta name="keywords" content="">
      <meta name="description" content="">
      <meta name="author" content="">
      <!-- bootstrap css -->
      <link rel="stylesheet" type="text/css" href="{{ asset('assets/lpcss/bootstrap.min.css') }}">
      <!-- style css -->
      <link rel="stylesheet" type="text/css" href="{{ asset('assets/lpcss/style.css') }}">
      <!-- Responsive-->
      <link rel="stylesheet" href="{{ asset('assets/lpcss/responsive.css') }}">
      <!-- fevicon -->
      <link rel="icon" href="{{ asset('images/fevicon.png') }}" type="image/gif" />
      <!-- font css -->
      <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;800&display=swap" rel="stylesheet">
      <!-- Scrollbar Custom CSS -->
      <link rel="stylesheet" href="{{ asset('assets/lpcss/jquery.mCustomScrollbar.min.css') }}">
      <!-- Tweaks for older IEs-->
      <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
   </head>
   <body>
      <div class="header_section">
         <div class="container">
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
               <a class="navbar-brand" href="{{ url('/') }}"><img src="{{ asset('images/logo.png') }}"></a>
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
      <!-- header section end -->
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
      <!-- footer section start -->
      <div class="footer_section layout_padding">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <div class="footer_social_icon">
                     <ul>
                        <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                        <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                        <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                        <li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                     </ul>
                  </div>
                  <div class="location_text">
                     <ul>
                        <li>
                           <a href="#">
                           <i class="fa fa-phone" aria-hidden="true"></i><span class="padding_left_10">+01 1234567890</span>
                           </a>
                        </li>
                        <li>
                           <a href="#">
                           <i class="fa fa-envelope" aria-hidden="true"></i><span class="padding_left_10">demo@gmail.com</span>
                           </a>
                        </li>
                     </ul>
                  </div>
                  <div class="form-group">
                     <textarea class="update_mail" placeholder="Your Email" rows="5" id="comment" name="Your Email"></textarea>
                     <div class="subscribe_bt"><a href="#"><i class="fa fa-arrow-right" aria-hidden="true"></i></a></div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- footer section end -->
      <!-- copyright section start -->
      <div class="copyright_section">
         <div class="container">
            <div class="row">
               <div class="col-sm-12">
                  <p class="copyright_text">2024 All Rights Reserved. @BackEnd Programming</a>
                     Distribution by Bare Minimum Developer</></p>
               </div>
            </div>
         </div>
      </div>
      <!-- copyright section end -->
       <!-- Javascript files-->
      <script src="{{ asset('assets/lpjs/jquery.min.js') }}"></script>
      <script src="{{ asset('assets/lpjs/popper.min.js') }}"></script>
      <script src="{{ asset('assets/lpjs/bootstrap.bundle.min.js') }}"></script>
      <script src="{{ asset('assets/lpjs/jquery-3.0.0.min.js') }}"></script>
      <script src="{{ asset('assets/lpjs/plugin.js') }}"></script>
      <!-- sidebar -->
      <script src="{{ asset('assets/lpjs/jquery.mCustomScrollbar.concat.min.js') }}"></script>
      <script src="{{ asset('assets/lpjs/custom.js') }}"></script>
   </body>
</html>