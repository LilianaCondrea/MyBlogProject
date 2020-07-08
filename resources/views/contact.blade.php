@extends('layouts.app')

@section('content')
<header>
    <div class="header-area ">
        <div id="sticky-header" class="main-header-area">
            <div class="container-fluid">
                <div class="row align-items-center">
                    <div class="col-xl-3 col-lg-2">
                        <div class="logo">
                            <a href="index.html">
                                <img src="img/logo.png" alt="">
                            </a>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-7">
                        <div class="main-menu  d-none d-lg-block">
                            <nav>
                                <ul id="navigation">
                                    <li><a class="active" href="{{ url('/') }}">Home</a></li>
                                    <li><a href="{{ url('/articles') }}">Posts</a></li>
                                    <li><a href="{{ url('/contacts') }}">Contacts</a></li>
                                    <li><a href="{{ url('/') }}">Login</a></li>
                                    <li><a href="{{ url('/') }}">Register</a></li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-3 d-none d-lg-block">
                    </div>
                    <div class="col-12">
                        <div class="mobile_menu d-block d-lg-none"></div>
                    </div>
                </div>

            </div>
         </div>
    </div>
</header>
<div class="bradcam_area bradcam_bg_1">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="bradcam_text text-center">
                            <h3>Contact me</h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
<div class="container">
    <div class="row">
      <div class="col-lg-8 col-md-10 mx-auto">
            <p>Want to get in touch? Fill out the form below to send me a message and I will get back to you as soon as possible!</p>
            <!-- Contact Form - Enter your email address on line 19 of the mail/contact_me.php file to make this form work. -->
            <!-- WARNING: Some web hosts do not allow emails to be sent through forms to common mail hosts like Gmail or Yahoo. It's recommended that you use a private domain email address! -->
            <!-- To use the contact form, your site must be on a live web host with PHP! The form will not work locally! -->
                <form name="sentMessage" id="contactForm"  method="POST" action="url('/save-contact')">
                    @csrf
                    <div class="control-group">
                    <div class="form-group floating-label-form-group controls">
                    <label>Name</label>
                    <input type="text" name="name" class="form-control" placeholder="Name" id="name" required data-validation-required-message="Please enter your name.">
                    <p class="help-block text-danger"></p>
                    </div>
                    </div>
                    <div class="control-group">
                    <div class="form-group floating-label-form-group controls">
                    <label>Email Address</label>
                    <input type="email" name="email" class="form-control" placeholder="Email Address" id="email" required data-validation-required-message="Please enter your email address.">
                    <p class="help-block text-danger"></p>
                    </div>
                    </div>
                    <div class="control-group">
                    <div class="form-group col-xs-12 floating-label-form-group controls">
                    <label>Phone Number</label>
                    <input type="tel" name="phone" class="form-control" placeholder="Phone Number" id="phone" required data-validation-required-message="Please enter your phone number.">
                    <p class="help-block text-danger"></p>
                    </div>
                    </div>
                    <div class="control-group">
                    <div class="form-group floating-label-form-group controls">
                    <label>Message</label>
                    <textarea rows="5" name="message" class="form-control" placeholder="Message" id="message" required data-validation-required-message="Please enter a message."></textarea>
                    <p class="help-block text-danger"></p>
                    </div>
                    </div>
                    <br>
                    <div id="success"></div>
                    <div class="form-group">
                    <button type="submit" value="submit" name="submit" class="btn btn-primary" id="sendMessageButton">Send</button>
                    </div>
                </form>
            
      </div>
    </div>
</div>

@endsection