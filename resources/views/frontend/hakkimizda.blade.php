@extends('frontend.app')
@section('headerust')
    <!-- Home -->
    <div class="home">
        <!-- Image by: https://unsplash.com/@jbriscoe -->
        <div class="home_background" style="background-image:url(/frontend/images/home_background.jpg)"></div>

        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="home_content">
                        <div class="home_title">
                            <h2>about us</h2>
                        </div>
                        <div class="breadcrumbs">
                            <span><a href="index.html">Home</a></span>
                            <span><a href="#"> About Us</a></span>
                            <span><a href="#"> Our Agents</a></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @endsection

@section('icerik')

    <!-- Intro -->

    <div class="intro">
        <div class="container">
            <div class="row">
                <div class="col-lg-7 order-lg-1 order-2">
                    <h2 class="intro_title">{{ $hakkimizda->baslik }}</h2>
                    <div class="intro_subtitle">{{ $hakkimizda->kisa_yazi }}</div>
                    <p class="intro_text">{{ $hakkimizda->icerik }}</p>
                    <div class="button intro_button trans_200"><a class="trans_200" href="#">Daha Fazla</a></div>
                </div>
                <div class="col-lg-5 order-lg-2 order-1">
                    <div class="intro_image">
                        <img src="/frontend/images/intro.png" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Milestones -->

    <div class="milestones">
        <div class="milestones_background parallax-window" data-parallax="scroll" data-image-src="/frontend/images/milestones.jpg"></div>
        <div class="container">
            <div class="row">

                <!-- Milestone -->
                <div class="col-lg-2 milestone_col">
                    <div class="milestone text-center d-flex flex-column align-items-center justify-content-start">
                        <div class="milestone_icon d-flex flex-column justify-content-end"><img src="/frontend/images/milestone_1.svg" alt=""></div>
                        <div class="milestone_counter" data-end-value="310">0</div>
                        <div class="milestone_text">houses sold</div>
                    </div>
                </div>

                <!-- Milestone -->
                <div class="col-lg-2 milestone_col">
                    <div class="milestone text-center d-flex flex-column align-items-center justify-content-start">
                        <div class="milestone_icon d-flex flex-column justify-content-end"><img src="/frontend/images/milestone_2.svg" alt=""></div>
                        <div class="milestone_counter" data-end-value="129">0</div>
                        <div class="milestone_text">clients</div>
                    </div>
                </div>

                <!-- Milestone -->
                <div class="col-lg-2 milestone_col">
                    <div class="milestone text-center d-flex flex-column align-items-center justify-content-start">
                        <div class="milestone_icon d-flex flex-column justify-content-end"><img src="/frontend/images/milestone_3.svg" alt=""></div>
                        <div class="milestone_counter" data-end-value="14">0</div>
                        <div class="milestone_text">agents</div>
                    </div>
                </div>

                <!-- Milestone -->
                <div class="col-lg-2 milestone_col">
                    <div class="milestone text-center d-flex flex-column align-items-center justify-content-start">
                        <div class="milestone_icon d-flex flex-column justify-content-end"><img src="/frontend/images/milestone_4.svg" alt=""></div>
                        <div class="milestone_counter" data-end-value="521">0</div>
                        <div class="milestone_text">rents</div>
                    </div>
                </div>

                <!-- Milestone -->
                <div class="col-lg-2 milestone_col">
                    <div class="milestone text-center d-flex flex-column align-items-center justify-content-start">
                        <div class="milestone_icon d-flex flex-column justify-content-end"><img src="/frontend/images/milestone_5.svg" alt=""></div>
                        <div class="milestone_counter" data-end-value="1107">0</div>
                        <div class="milestone_text">contracts</div>
                    </div>
                </div>

                <!-- Milestone -->
                <div class="col-lg-2 milestone_col">
                    <div class="milestone text-center d-flex flex-column align-items-center justify-content-start">
                        <div class="milestone_icon d-flex flex-column justify-content-end"><img src="/frontend/images/milestone_6.svg" alt=""></div>
                        <div class="milestone_counter" data-end-value="39">0</div>
                        <div class="milestone_text">investments</div>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <!-- Agents -->

    <div class="agents">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="section_title text-center">
                        <h3>out agents</h3>
                        <span class="section_subtitle">The best out there</span>
                    </div>
                </div>
            </div>

            <div class="row agents_row">

                <!-- Agent -->
                <div class="col-lg-3 agent_col text-center">
                    <div class="agent_image mx-auto">
                        <img src="/frontend/images/agent_1.jpg" alt="image by Andrew Robles">
                    </div>
                    <div class="agent_content">
                        <div class="agent_name">michael williams</div>
                        <div class="agent_role">Real Estate Agent</div>
                        <div class="agent_social">
                            <ul class="agent_social_list">
                                <li class="agent_social_item"><a href="#"><i class="fab fa-pinterest"></i></a></li>
                                <li class="agent_social_item"><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                <li class="agent_social_item"><a href="#"><i class="fab fa-twitter"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>

                <!-- Agent -->
                <div class="col-lg-3 agent_col text-center">
                    <div class="agent_image mx-auto">
                        <img src="/frontend/images/agent_2.jpg" alt="https://unsplash.com/@gabrielsilverio">
                    </div>
                    <div class="agent_content">
                        <div class="agent_name">michael williams</div>
                        <div class="agent_role">Real Estate Agent</div>
                        <div class="agent_social">
                            <ul class="agent_social_list">
                                <li class="agent_social_item"><a href="#"><i class="fab fa-pinterest"></i></a></li>
                                <li class="agent_social_item"><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                <li class="agent_social_item"><a href="#"><i class="fab fa-twitter"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>

                <!-- Agent -->
                <div class="col-lg-3 agent_col text-center">
                    <div class="agent_image mx-auto">
                        <img src="/frontend/images/agent_3.jpg" alt="https://unsplash.com/@mehdizadeh">
                    </div>
                    <div class="agent_content">
                        <div class="agent_name">michael williams</div>
                        <div class="agent_role">Real Estate Agent</div>
                        <div class="agent_social">
                            <ul class="agent_social_list">
                                <li class="agent_social_item"><a href="#"><i class="fab fa-pinterest"></i></a></li>
                                <li class="agent_social_item"><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                <li class="agent_social_item"><a href="#"><i class="fab fa-twitter"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>

                <!-- Agent -->
                <div class="col-lg-3 agent_col text-center">
                    <div class="agent_image mx-auto">
                        <img src="/frontend/images/agent_4.jpg" alt="https://unsplash.com/@michaeldam">
                    </div>
                    <div class="agent_content">
                        <div class="agent_name">michael williams</div>
                        <div class="agent_role">Real Estate Agent</div>
                        <div class="agent_social">
                            <ul class="agent_social_list">
                                <li class="agent_social_item"><a href="#"><i class="fab fa-pinterest"></i></a></li>
                                <li class="agent_social_item"><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                <li class="agent_social_item"><a href="#"><i class="fab fa-twitter"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>

            </div>

            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="agents_more">
                        <div class="button agents_more_button trans_200"><a class="trans_200" href="#">read more</a></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endsection

@section('css')
    <link rel="stylesheet" type="text/css" href="/frontend/styles/bootstrap4/bootstrap.min.css">
    <link href="/frontend/plugins/fontawesome-free-5.0.1/css/fontawesome-all.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" type="text/css" href="/frontend/styles/about_styles.css">
    <link rel="stylesheet" type="text/css" href="/frontend/styles/about_responsive.css">
    @endsection

@section('js')
    <script src="/frontend/js/jquery-3.2.1.min.js"></script>
    <script src="/frontend/styles/bootstrap4/popper.js"></script>
    <script src="/frontend/styles/bootstrap4/bootstrap.min.js"></script>
    <script src="/frontend/plugins/greensock/TweenMax.min.js"></script>
    <script src="/frontend/plugins/greensock/TimelineMax.min.js"></script>
    <script src="/frontend/plugins/scrollmagic/ScrollMagic.min.js"></script>
    <script src="/frontend/plugins/greensock/animation.gsap.min.js"></script>
    <script src="/frontend/plugins/greensock/ScrollToPlugin.min.js"></script>
    <script src="/frontend/plugins/scrollTo/jquery.scrollTo.min.js"></script>
    <script src="/frontend/plugins/easing/easing.js"></script>
    <script src="/frontend/plugins/parallax-js-master/parallax.min.js"></script>
    <script src="/frontend/js/about_custom.js"></script>

    @endsection

