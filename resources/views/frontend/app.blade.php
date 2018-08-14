<!DOCTYPE html>
<html lang="tr">
<head>
    <title>The Estate</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="The Estate Teplate">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    @yield('css')
</head>

<body>

<div class="super_container">

    @yield('headerust')


    <!-- Header -->

    <header class="header trans_300">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="header_container d-flex flex-row align-items-center trans_300">

                        <!-- Logo -->

                        <div class="logo_container">
                            <a href="#">
                                <div class="logo">
                                    <img src="/frontend/images/logo.png" alt="">
                                    <span>the estate</span>
                                </div>
                            </a>
                        </div>

                        <!-- Main Navigation -->

                        <nav class="main_nav">
                            <ul class="main_nav_list">
                                <li class="main_nav_item"><a href="/">AnaSayfa</a></li>
                                <li class="main_nav_item"><a href="/hakkimizda">Hakkımızda</a></li>
                                <li class="main_nav_item"><a href="/iletisim">Bize Ulaşın</a></li>
                            </ul>
                        </nav>

                        <!-- Phone Home -->

                        <div class="phone_home text-center">
                            <span>{{ $ayarlar->tel }}</span>
                        </div>

                        <!-- Hamburger -->

                        <div class="hamburger_container menu_mm">
                            <div class="hamburger menu_mm">
                                <i class="fas fa-bars trans_200 menu_mm"></i>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>

        <!-- Menu -->

        <div class="menu menu_mm">
            <ul class="menu_list">
                <li class="menu_item">
                    <div class="container">
                        <div class="row">
                            <div class="col">
                                <a href="/">AnaSayfa</a>
                            </div>
                        </div>
                    </div>
                </li>
                <li class="menu_item">
                    <div class="container">
                        <div class="row">
                            <div class="col">
                                <a href="/hakkimizda">Hakkımızda</a>
                            </div>
                        </div>
                    </div>
                </li>

                <li class="menu_item">
                    <div class="container">
                        <div class="row">
                            <div class="col">
                                <a href="/iletisim">Bize Ulaşın</a>
                            </div>
                        </div>
                    </div>
                </li>
            </ul>
        </div>

    </header>

    @yield('icerik')

    <!-- Newsletter -->

        <div class="newsletter">
            <div class="container">
                <div class="row row-equal-height">

                    <div class="col-lg-6">
                        <div class="newsletter_title">
                            <h3>subscribe to our newsletter</h3>
                            <span class="newsletter_subtitle">Get the latest offers</span>
                        </div>
                        <div class="newsletter_form_container">
                            <form action="#">
                                <div class="newsletter_form_content d-flex flex-row">
                                    <input id="newsletter_email" class="newsletter_email" type="email" placeholder="Your email here" required="required" data-error="Valid email is required.">
                                    <button id="newsletter_submit" type="submit" class="newsletter_submit_btn trans_200" value="Submit">subscribe</button>
                                </div>
                            </form>
                        </div>
                    </div>

                    <div class="col-lg-6">
                        <a href="#">
                            <div class="weekly_offer">
                                <div class="weekly_offer_content d-flex flex-row">
                                    <div class="weekly_offer_icon d-flex flex-column align-items-center justify-content-center">
                                        <img src="/frontend/images/prize.svg" alt="">
                                    </div>
                                    <div class="weekly_offer_text text-center">weekly offer</div>
                                </div>
                                <div class="weekly_offer_image" style="background-image:url(/frontend/images/weekly.jpg)"></div>
                            </div>
                        </a>
                    </div>

                </div>
            </div>
        </div>

    <!-- Footer -->

    <footer class="footer">
        <div class="container">
            <div class="row">

                <!-- Footer About -->

                <div class="col-lg-3 footer_col">
                    <div class="footer_col_title">
                        <div class="logo_container">
                            <a href="#">
                                <div class="logo">
                                    <img src="/frontend/images/logo.png" alt="">
                                    <span>the estate</span>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="footer_social">
                        <ul class="footer_social_list">
                            <li class="footer_social_item"><a href="http://{{ $ayarlar->facebook }}"><i class="fab fa-facebook-f"></i></a></li>
                            <li class="footer_social_item"><a href="http://{{ $ayarlar->twitter }}"><i class="fab fa-twitter"></i></a></li>
                            <li class="footer_social_item"><a href="http://{{ $ayarlar->instagram }}"><i class="fab fa-instagram"></i></a></li>
                            <li class="footer_social_item"><a href="http://{{ $ayarlar->google }}"><i class="fab fa-google"></i></a></li>

                        </ul>
                    </div>
                    <div class="footer_about">
                        <p>Lorem ipsum dolor sit amet, cons ectetur  quis ferme adipiscing elit. Suspen dis se tellus eros, placerat quis ferme ntum et, viverra sit amet lacus. Nam gravida  quis ferme semper augue.</p>
                    </div>
                </div>

                <!-- Footer Useful Links -->

                <div class="col-lg-3 footer_col">
                    <div class="footer_col_title">useful links</div>
                    <ul class="footer_useful_links">
                        <li class="useful_links_item"><a href="#">Listings</a></li>
                        <li class="useful_links_item"><a href="#">Favorite Cities</a></li>
                        <li class="useful_links_item"><a href="#">Clients Testimonials</a></li>
                        <li class="useful_links_item"><a href="#">Featured Listings</a></li>
                        <li class="useful_links_item"><a href="#">Properties on Offer</a></li>
                        <li class="useful_links_item"><a href="#">Services</a></li>
                        <li class="useful_links_item"><a href="#">News</a></li>
                        <li class="useful_links_item"><a href="#">Our Agents</a></li>
                    </ul>
                </div>

                <!-- Footer Contact Form -->
                <div class="col-lg-3 footer_col">
                    <div class="footer_col_title">say hello</div>
                    <div class="footer_contact_form_container">
                        <form id="footer_contact_form" class="footer_contact_form" action="post">
                            <input id="contact_form_name" class="input_field contact_form_name" type="text" placeholder="Name" required="required" data-error="Name is required.">
                            <input id="contact_form_email" class="input_field contact_form_email" type="email" placeholder="E-mail" required="required" data-error="Valid email is required.">
                            <textarea id="contact_form_message" class="text_field contact_form_message" name="message" placeholder="Message" required="required" data-error="Please, write us a message."></textarea>
                            <button id="contact_send_btn" type="submit" class="contact_send_btn trans_200" value="Submit">send</button>
                        </form>
                    </div>
                </div>

                <!-- Footer Contact Info -->

                <div class="col-lg-3 footer_col">
                    <div class="footer_col_title">contact info</div>
                    <ul class="contact_info_list">
                        <li class="contact_info_item d-flex flex-row">
                            <div><div class="contact_info_icon"><img src="/frontend/images/placeholder.svg" alt=""></div></div>
                            <div class="contact_info_text">{{ $ayarlar->adres.' '.$ayarlar->il.'/'.$ayarlar->ilce }}</div>
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
                            <div class="contact_info_text"><a href="https://{{ $ayarlar->url }}">{{ $ayarlar->url }}</a></div>
                        </li>
                    </ul>
                </div>

            </div>
        </div>
    </footer>

    <!-- Credits -->

    <div class="credits">
		<span><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></span>
    </div>

</div>


@yield('js')
</body>

</html>