@extends('layouts.app')

@section('title', 'Contact Us | TridentCatch')

@section('content')
<section id="contact-us">
    <div class="container">
        <div class="contact-us__section-title">
            <h2>Contact Us</h2>
            <p>Get in touch with us for any inquiries you may have about our products, services offered, bulk ordering,
                and any other inquiries you may have on our business. Thank you.
            </p>
        </div>

        <div class="row contact-us__flex">
            <div class="col-lg-5 d-flex align-items-stretch">
                <div class="business-info">
                    <div class="business-address">
                        <i class="fa-solid fa-location-dot contact-us__flex"></i>
                        <h4>Location:</h4>
                        <p>12A, Jalan Kuchai Maju 1, Off, Jalan Kuchai Lama, 58200, Kuala Lumpur</p>
                    </div>
                    <div class="business-email">
                        <i class="fa-solid fa-envelope contact-us__flex"></i>
                        <h4>Email:</h4>
                        <p>tridentcatch@gmail.com</p>
                    </div>
                    <div class="phone-number">
                        <i class="fa-solid fa-phone contact-us__flex"></i>
                        <h4>Phone Number:</h4>
                        <p>011-60866135</p>
                    </div>
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3984.028802618116!2d101.69157861404321!3d3.0869869543942614!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31cc4a6e7247be6d%3A0x7016392ca41e0d7f!2s12%2C%20Jalan%20Kuchai%20Lama%2C%2058200%20Kuala%20Lumpur%2C%20Wilayah%20Persekutuan%20Kuala%20Lumpur!5e0!3m2!1sen!2smy!4v1665877804637!5m2!1sen!2smy" frameborder="0" allowfullscreen></iframe>
                </div>
            </div>
            <div class="col-lg-7 mt-5 mt-lg-0 d-flex align-items-stretch">
                <form class="business-email-form" action="{{ route('contact.store') }}" method="POST" >
                    @csrf
                    <div class="row contact-us__flex">
                        <div class="form-group col-md-6">
                            <label for="name">Name</label>
                            <input type="text" name="name" class="form-control" id="name" required>
                        </div>
                        <div class="form-group col-md-6 mt-md-0">
                            <label for="email">Email Address</label>
                            <input type="email" class="form-control" name="email" id="email" required>
                        </div>
                    </div>
                    <div class="form-group mt-3">
                        <label name="subject">Subject</label>
                        <input type="text" class="form-control" name="subject" id="subject" required>
                    </div>
                    <div class="form-group mt-3">
                        <label name="message">Message</label>
                        <textarea class="form-control" name="message" rows="10" required spellcheck="false"></textarea>
                    </div>
                    <div class="text-center">
                        <button type="submit">
                            Submit Message
                        </button>
                    </div>
                </form>
            </div>
        </div>
</section>
@endsection