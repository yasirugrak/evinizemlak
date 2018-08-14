@extends('frontend.app')

@section('icerik')
    <!-- Contact -->

    <div class="contact">
        <div class="container">
            <div class="row">

                <div class="col-lg-6 contact_col">
                    <div class="estate_contact_form">
                        <div class="contact_title">Mesaj Gönderin</div>
                        <div class="estate_contact_form_container">
                            <form id="estate_contact_form" class="estate_contact_form" action="post">
                                <input id="estate_contact_form_name" class="estate_input_field estate_contact_form_name" type="text" placeholder="Name" required="required" data-error="Name is required.">
                                <input id="estate_contact_form_email" class="estate_input_field estate_contact_form_email" type="email" placeholder="E-mail" required="required" data-error="Valid email is required.">
                                <input id="estate_contact_form_subject" class="estate_input_field estate_contact_form_subject" type="email" placeholder="Subject" required="required" data-error="Subject is required.">
                                <textarea id="estate_contact_form_message" class="estate_text_field estate_contact_form_message" name="message" placeholder="Message" required="required" data-error="Please, write us a message."></textarea>
                                <button id="estate_contact_send_btn" type="submit" class="estate_contact_send_btn trans_200" value="Submit">send</button>
                            </form>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 contact_col">
                    <div class="contact_title">İletişim Bilgilerimiz</div>
                    <ul class="contact_info_list estate_contact">
                        <li class="contact_info_item d-flex flex-row">
                            <div><div class="contact_info_icon"><img src="/frontend/images/placeholder.svg" alt=""></div></div>
                            <div class="contact_info_text">{{ $ayarlar->adres .' '. $ayarlar->il .'/'. $ayarlar->ilce }}</div>
                        </li>
                        <li class="contact_info_item d-flex flex-row">
                            <div><div class="contact_info_icon"><img src="/frontend/images/phone-call.svg" alt=""></div></div>
                            <div class="contact_info_text">{{ $ayarlar->tel }}</div>
                        </li>
                        <li class="contact_info_item d-flex flex-row">
                            <div><div class="contact_info_icon"><img src="/frontend/images/message.svg" alt=""></div></div>
                            <div class="contact_info_text"><a href="mailto:{{ $ayarlar->mail }}?Subject=Merhaba" target="_top">{{ $ayarlar->mail }}</a></div>
                        </li>
                        <li class="contact_info_item d-flex flex-row">
                            <div><div class="contact_info_icon"><img src="/frontend/images/planet-earth.svg" alt=""></div></div>
                            <div class="contact_info_text"><a href="http://{{ $ayarlar->url }}">{{ $ayarlar->url }}</a></div>
                        </li>
                    </ul>
                    <div class="estate_social">
                        <ul class="estate_social_list">
                            <li class="estate_social_item"><a href="{{ $ayarlar->facebook }}"><i class="fab fa-facebook-f"></i></a></li>
                            <li class="estate_social_item"><a href="{{ $ayarlar->twitter }}"><i class="fab fa-twitter"></i></a></li>
                            <li class="estate_social_item"><a href="{{ $ayarlar->instagram }}"><i class="fab fa-instagram"></i></a></li>
                            <li class="estate_social_item"><a href="{{ $ayarlar->google }}"><i class="fab fa-google"></i></a></li>
                        </ul>
                    </div>
                </div>

                <div class="col-lg-3 contact_col">
                    <div class="contact_title">Hakkımızda</div>
                    <div class="estate_about_text">
                        <p>Lorem ipsum dolor sit amet, cons ectetur  quis ferme adipiscing elit. Suspen dis se tellus eros, placerat quis ferme ntum et, adipiscingvive rra sit ipsum amet lacus. </p>
                        <p>Nam gravida quis placerat quis fe rme ntum et ferme sadipiscinge te llus semper augue.</p>
                    </div>
                </div>

            </div>

        </div>

        <!-- Google Map -->

        <div class="estate_map">
            <div id="google_map" class="google_map">
                <div class="map_container">
                    <div id="map"></div>
                </div>
            </div>
        </div>

    </div>


    @endsection

@section('headerust')
    <!-- Home -->
    <div class="home">
        <!-- Image by: https://unsplash.com/@breather -->
        <div class="home_background" style="background-image:url(/frontend/images/contact.jpg)"></div>

        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="home_content">
                        <div class="home_title">
                            <h2>single listings</h2>
                        </div>
                        <div class="breadcrumbs">
                            <span><a href="index.html">Home</a></span>
                            <span><a href="#"> Contact</a></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection
@section('css')
    <link rel="stylesheet" type="text/css" href="/frontend/styles/bootstrap4/bootstrap.min.css">
    <link href="/frontend/plugins/fontawesome-free-5.0.1/css/fontawesome-all.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" type="text/css" href="/frontend/plugins/OwlCarousel2-2.2.1/owl.carousel.css">
    <link rel="stylesheet" type="text/css" href="/frontend/plugins/OwlCarousel2-2.2.1/owl.theme.default.css">
    <link rel="stylesheet" type="text/css" href="/frontend/plugins/OwlCarousel2-2.2.1/animate.css">
    <link rel="stylesheet" type="text/css" href="/frontend/styles/contact_styles.css">
    <link rel="stylesheet" type="text/css" href="/frontend/styles/contact_responsive.css">
    @endsection

@section('js')
    <script src="/frontend/js/jquery-3.2.1.min.js"></script>
    <script src="/frontend/styles/bootstrap4/popper.js"></script>
    <script src="/frontend/styles/bootstrap4/bootstrap.min.js"></script>
    <script src="/frontend/plugins/OwlCarousel2-2.2.1/owl.carousel.js"></script>
    <script src="/frontend/plugins/easing/easing.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js?v=3.exp&key=AIzaSyCIwF204lFZg1y4kPSIhKaHEXMLYxxuMhA"></script>
    <script src="/frontend/js/contact_custom.js"></script>

    @endsection
