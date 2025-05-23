@extends('layout')

@section('title', 'Services')

@section('content')

        <!-- Start Page Title Area -->
        <div class="page-title-area item-bg2 jarallax" data-jarallax='{"speed": 0.3}'>
            <div class="container">
                <div class="page-title-content">
                    <h2>Team</h2>
                    <p>Meet our team</p>
                </div>
            </div>
        </div>
        <!-- End Page Title Area -->

        <!-- Start Team Area -->
        <section class="team-area ptb-70">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-6">
                        <div class="single-team-member">
                            <div class="member-image">
                                <img src="assets/img/team-img1.jpg" alt="image">

                                <ul class="social">
                                    <li><a href="#" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
                                    <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                                </ul>
                            </div>

                            <div class="member-content">
                                <h3>James Anderson</h3>
                                <span>CEO & Founder</span>
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley.</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-6 col-md-6">
                        <div class="single-team-member">
                            <div class="member-image">
                                <img src="assets/img/team-img2.jpg" alt="image">

                                <ul class="social">
                                    <li><a href="#" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
                                    <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                                </ul>
                            </div>

                            <div class="member-content">
                                <h3>Sarah Taylor</h3>
                                <span>Co-Founder</span>
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley.</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-6 col-md-6">
                        <div class="single-team-member">
                            <div class="member-image">
                                <img src="assets/img/team-img3.jpg" alt="image">

                                <ul class="social">
                                    <li><a href="#" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
                                    <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                                </ul>
                            </div>

                            <div class="member-content">
                                <h3>Steven Smith</h3>
                                <span>Web Developer</span>
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley.</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-6 col-md-6">
                        <div class="single-team-member">
                            <div class="member-image">
                                <img src="assets/img/team-img4.jpg" alt="image">

                                <ul class="social">
                                    <li><a href="#" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
                                    <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                                </ul>
                            </div>

                            <div class="member-content">
                                <h3>John Capabel</h3>
                                <span>Programer</span>
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Team Area -->

        <!-- Start Account Create Area -->
        <!-- <section class="account-create-area">
            <div class="container">
                <div class="account-create-content">
                    <h2>Apply for an account in minutes</h2>
                    <p>Get your Luvion account today!</p>
                    <a href="login.html" class="btn btn-primary">Get Your Luvion Account</a>
                </div>
            </div>
        </section> -->
        <!-- End Account Create Area -->
        @endsection
