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
         <!-- banner section start --> 
         <div class="banner_section layout_padding">
            <div class="container">
               <div id="banner_slider" class="carousel slide" data-ride="carousel">
                  <div class="carousel-inner">
                     <div class="carousel-item active">
                        <div class="row">
                           <div class="col-md-12">
                              <div class="banner_taital_main">
                                 <h1 class="banner_taital">Church <br>Connect</h1>
                                 <p class="banner_text">"I was glad when they said unto me, 'Let us go into the house of the Lord.'" - Psalm 122:1</p>
                                 <div class="btn_main">
                                    <div class="about_bt active"><a href="#">About Us</a></div>
                                    <div class="callnow_bt"><a href="#">Call Now</a></div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="carousel-item">
                        <div class="row">
                           <div class="col-md-12">
                              <div class="banner_taital_main">
                                 <h1 class="banner_taital">Church<br>Connect</h1>
                                 <p class="banner_text">""Enter his gates with thanksgiving and his courts with praise; give thanks to him and praise his name." - Psalm 100:4</p>
                                 <div class="btn_main">
                                    <div class="about_bt active"><a href="#">About Us</a></div>
                                    <div class="callnow_bt"><a href="#">Call Now</a></div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="carousel-item">
                        <div class="row">
                           <div class="col-md-12">
                              <div class="banner_taital_main">
                                 <h1 class="banner_taital">Church <br>Connect</h1>
                                 <p class="banner_text">"Beloved, let us love one another, for love is from God, and whoever loves has been born of God and knows God." - 1 John 4:7 </p>
                                 <div class="btn_main">
                                    <div class="about_bt active"><a href="#">About Us</a></div>
                                    <div class="callnow_bt"><a href="#">Call Now</a></div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <a class="carousel-control-prev" href="#banner_slider" role="button" data-slide="prev">
                  <i class="fa fa-arrow-left"></i>
                  </a>
                  <a class="carousel-control-next" href="#banner_slider" role="button" data-slide="next">
                  <i class="fa fa-arrow-right"></i>
                  </a>
               </div>
            </div>
         </div>
         <!-- banner section end -->
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
      <!-- client section start -->
      <div class="client_section layout_padding">
         <div class="container">
            <div id="custom_slider" class="carousel slide" data-ride="carousel">
               <div class="carousel-inner">
                  <div class="carousel-item active">
                     <div class="row">
                        <div class="col-md-12">
                           <h1 class="about_taital">Testimonial</h1>
                        </div>
                     </div>
                     <div class="client_section_2">
                        <div class="client_taital_main">
                           <div class="client_left">
                              <div class="client_img"><img src="{{ asset('images/client-img1.png') }}"></div>
                           </div>
                           <div class="client_right">
                              <h3 class="moark_text">Matthew Jones</h3>
                              <p class="client_text">In the embrace of fellowship, our testimonies become echoes of His grace, guiding us through every trial and triumph.</p>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="carousel-item">
                     <div class="row">
                        <div class="col-md-12">
                           <h1 class="about_taital">Testimonial</h1>
                        </div>
                     </div>
                     <div class="client_section_2">
                        <div class="client_taital_main">
                           <div class="client_left">
                              <div class="client_img"><img src="{{ asset('images/client-img2.png') }}"></div>
                           </div>
                           <div class="client_right">
                              <h3 class="moark_text">Lucas Stevan</h3>
                              <p class="client_text">"United in faith, our testimonies echo the power of His love, guiding us through every chapter of life's journey."</p>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="carousel-item">
                     <div class="row">
                        <div class="col-md-12">
                           <h1 class="about_taital">Testimonial</h1>
                        </div>
                     </div>
                     <div class="client_section_2">
                        <div class="client_taital_main">
                           <div class="client_left">
                              <div class="client_img"><img src="{{ asset('images/client-img3.png') }}"></div>
                           </div>
                           <div class="client_right">
                              <h3 class="moark_text">Maria Miles</h3>
                              <p class="client_text">"Here, amidst the embrace of faith and fellowship, our testimonies stand as beacons of His boundless love, illuminating the path to redemption and renewal for all who seek His grace."</p>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <a class="carousel-control-prev" href="#custom_slider" role="button" data-slide="prev">
               <i class="fa fa-arrow-left"></i>
               </a>
               <a class="carousel-control-next" href="#custom_slider" role="button" data-slide="next">
               <i class="fa fa-arrow-right"></i>
               </a>
            </div>
         </div>
      </div>
      <!-- client section end -->
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
      <!-- contact section start -->
      <div class="contact_section layout_padding">
         <div class="container">
            <div class="row">
               <div class="col-sm-12">
                  <h1 class="contact_taital">Get In Touch</h1>
               </div>
            </div>
         </div>
         <div class="container-fluid">
            <div class="contact_section_2">
               <div class="row">
                  <div class="col-md-12">
                     <div class="mail_section_1">
                        <input type="text" class="mail_text" placeholder="Your Name" name="Your Name">
                        <input type="text" class="mail_text" placeholder="Your Email" name="Your Email">
                        <input type="text" class="mail_text" placeholder="Your Phone" name="Your Phone">
                        <textarea class="massage-bt" placeholder="Massage" rows="5" id="comment" name="Massage"></textarea>
                        <div class="send_bt"><a href="#">Send</a></div>
                     </div>
                  </div>
                  <div class="map_main">
                     <div class="map-responsive">
                        <iframe src="https://www.google.com/maps/embed/v1/place?key=AIzaSyA0s1a7phLN0iaD6-UE7m4qP-z21pH0eSc&amp;q=HOTEL+ROYAL+PALM,+Jl.+Outer+Ring+Road,+Mutiara+Taman+Palem,+Block+C1,+Cengkareng+11730" width="250" height="500" frameborder="0" style="border:0; width: 100%;" allowfullscreen=""></iframe>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- contact section end -->
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