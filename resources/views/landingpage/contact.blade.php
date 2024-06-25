@extends('layouts.main')
@section('content')
@include('layouts.landingnavbar')

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
                        <form method="POST" action="/send-mail">
                            @csrf
                            <input type="text" class="mail_text" placeholder="Your Name" name="name">
                            <input type="text" class="mail_text" placeholder="Your Email" name="email">
                            <input type="text" class="mail_text" placeholder="Your Phone" name="phone">
                            <textarea class="massage-bt" placeholder="Message" rows="5" id="comment"
                                name="message"></textarea>
                            <div class="send_bt"><button type="submit">Send</button></div>
                        </form>
                        @if(session('status'))
                        <div class="alert alert-{{ session('status') }}">
                            {{ session('message') }}
                        </div>
                        @endif
                    </div>
                </div>
                <div class="map_main">
                    <div class="map-responsive">
                        <iframe
                            src="https://www.google.com/maps/embed/v1/place?key=AIzaSyA0s1a7phLN0iaD6-UE7m4qP-z21pH0eSc&amp;q=HOTEL+ROYAL+PALM,+Jl.+Outer+Ring+Road,+Mutiara+Taman+Palem,+Block+C1,+Cengkareng+11730"
                            width="250" height="500" frameborder="0" style="border:0; width: 100%;" allowfullscreen=""></iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- contact section end -->
@endsection
