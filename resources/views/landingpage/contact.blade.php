@extends('layouts.main')
@section('content')
@include('layouts.landingnavbar')

<!-- Contact section start -->
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
                  <form method="POST" action="/send-mail">
                     @csrf
                     <input type="text" class="mail_text" placeholder="Your Name" name="name">
                     <input type="text" class="mail_text" placeholder="Your Email" name="email">
                     <input type="text" class="mail_text" placeholder="Your Phone" name="phone">
                     <textarea class="massage-bt" placeholder="Message" rows="5" id="comment" name="message"></textarea>
                     <div class="send_bt">
                        <button type="submit">Send</button>
                     </div>
                  </form>
                  @if(session('status'))
                  <div class="alert alert-{{ session('status') }}">
                     {{ session('message') }}
                  </div>
                  @endif
               </div>
            </div>
         </div>
      </div>
   </div>
</div>
<!-- Contact section end -->
@endsection
