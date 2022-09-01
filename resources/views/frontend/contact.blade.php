@extends('layouts.app')
@section('content')
    <section class="contact-page-section">
        <div class="container">
            <div class="inner-container">
                <div class="row clearfix">

                    <!--Form Column-->
                    <div class="form-column col-md-8 col-sm-12 col-xs-12">
                        <div class="inner-column">

                            <!--Contact Form-->
                            <div class="contact-form">
                                <form method="POST" action="{{ route('contact.store') }}" id="contact-form">
                                    @csrf
                                    <div class="row clearfix">
                                        <div class="form-group col-md-6 col-sm-6 co-xs-12">
                                            <input type="text" name="name" value="" placeholder="Name" required>
                                        </div>
                                        <div class="form-group col-md-6 col-sm-6 co-xs-12">
                                            <input type="email" name="email" value="" placeholder="Email"
                                                required>
                                        </div>
                                        <div class="form-group col-md-6 col-sm-6 co-xs-12">
                                            <input type="text" name="subject" value="" placeholder="Subject"
                                                required>
                                        </div>
                                        <div class="form-group col-md-6 col-sm-6 co-xs-12">
                                            <input type="text" name="phone" value="" placeholder="Phone"
                                                required>
                                        </div>
                                        <div class="form-group col-md-12 col-sm-12 co-xs-12">
                                            <textarea name="message" placeholder="Massage"></textarea>
                                        </div>
                                        <div class="form-group col-md-12 col-sm-12 co-xs-12">
                                            <button type="submit" class="theme-btn btn-style-one">Send Now</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <!--End Contact Form-->

                        </div>
                    </div>

                    <!--Info Column-->
                    <div class="info-column col-md-4 col-sm-12 col-xs-12">
                        <div class="inner-column">
                            <h2>Contact Info</h2>
                            <ul class="list-info">
                                <li><i class="fas fa-globe"></i>#22E, St 594, Beongkak II, Toulkok Phnom Penh, Cambodia 12152</li>
                                <li><i class="far fa-envelope"></i>Phoenix@hotlook.com</li>
                                <li><i class="fas fa-phone"></i>0123456789 <br> 0987654321</li>
                            </ul>
                            <ul class="social-icon-four">
                                <li class="follow">Follow on: </li>
                                <div class="icon-social">
                                    <img src="../img/facebook_icon.png" style="width:30px; height:30px; cursor: pointer"
                                        onclick="window.location.href='https://www.facebook.com/kong.rotanak.7/'">
                                    <img src="../img/telegram_icon.png" style="width:30px; height:30px; cursor: pointer"
                                        onclick="window.location.href='https://web.telegram.org/z/#467814096'">
                                    <img src="../img/gmail_icon.png" style="width:30px; height:30px; cursor: pointer"
                                        onclick="window.location.href='https://mail.google.com/mail/u/0/#inbox?compose=GTvVlcSMVlCTvxqTrbzWjQtKtvKwCZVHlfMBhgPbbSmcsXDhrgxZsVgsPpxmCfldhpRQQjQNkkJNz'">
                                </div>
                            </ul>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>
@endsection
