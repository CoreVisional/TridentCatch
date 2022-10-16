@extends('layouts.app')

@section('title', 'About Us | TridentCatch')

@section('content')

<!-- ======= Team Section ======= -->
<section id="team">
    <div class="container">
        <div class="section-title">
            <h2>Team</h2>
            <p>This is our team. In consists of three members where Alex is the CEO, Amsyar being the CTO, and Ivy is our CDO. Our team is from APU Web Solution Sdn Bhd. where we named ourselves as the "3RedDots".</p>
        </div>

        <div class="row team__flex">
            <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
                <div class="member">
                    <img class="profile-img" src="{{ asset('assets/img/team_img/team-img-1.png') }}" alt="">
                    <h4>Alex Chiew</h4>
                    <span>Chief Executive Officer</span>
                    <p>
                        Group Leader
                    </p>
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
                    <span>Chief Technology Officer</span>
                    <p>
                        Database Engineer
                    </p>
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
                    <span>Chief Design Officer</span>
                    <p>
                        Frontend Designer
                    </p>
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