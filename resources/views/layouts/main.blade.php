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
      <link rel="icon" href="{{ asset('images/favicon.png') }}" type="image/gif" />
      <!-- font css -->
      <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;800&display=swap" rel="stylesheet">
      <!-- Scrollbar Custom CSS -->
      <link rel="stylesheet" href="{{ asset('assets/lpcss/jquery.mCustomScrollbar.min.css') }}">
      <!-- Tweaks for older IEs-->
      <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
   </head>
<body>
    @yield('content')

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
                           <i class="fa fa-envelope" aria-hidden="true"></i><span class="padding_left_10">BackEnd@gmail.com</span>
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