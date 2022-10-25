@extends('layouts.app')

@section('title', 'About Us | TridentCatch')

@section('content')

<!-- ======= Team Section ======= -->
<section id="team">
    <div class="container">
        <div class="section-title">
            <h2>Team</h2>
            <p>Our team consists of three members, Alex, Amsyar, and Ivy, and in which we name ourselves as the "3RedDots" team under APU Web Solution Sdn Bhd.</p>
        </div>

        <div class="row team__flex">
            <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
                <div class="member">
                    <img class="profile-img" src="{{ asset('assets/img/team_img/team-img-1.png') }}" alt="">
                    <h4>Alex Chiew</h4>
                    <span>Full-Stack Developer</span>
                    <div class="social">
                        <a href=""><i class="fa-brands fa-twitter"></i></a>
                        <a href=""><i class="fa-brands fa-facebook"></i></a>
                        <a href=""><i class="fa-brands fa-instagram"></i></a>
                        <a href=""><i class="fa-brands fa-linkedin"></i></a>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
                <div class="member">
                    <img src="{{ asset('assets/img/team_img/team-img-2.png') }}" alt="">
                    <h4>Amsyar Fiqrie</h4>
                    <span>Full-Stack Developer</span>
                    <div class="social">
                        <a href=""><i class="fa-brands fa-twitter"></i></a>
                        <a href=""><i class="fa-brands fa-facebook"></i></a>
                        <a href=""><i class="fa-brands fa-instagram"></i></a>
                        <a href=""><i class="fa-brands fa-linkedin"></i></a>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
                <div class="member">
                    <img src="{{ asset('assets/img/team_img/team-img-3.png') }}" alt="">
                    <h4>Ivy Natasha</h4>
                    <span>Frontend Designer</span>
                    <div class="social">
                        <a href=""><i class="fa-brands fa-twitter"></i></a>
                        <a href=""><i class="fa-brands fa-facebook"></i></a>
                        <a href=""><i class="fa-brands fa-instagram"></i></a>
                        <a href=""><i class="fa-brands fa-linkedin"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Team Section -->
@endsection