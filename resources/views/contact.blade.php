@extends('layouts.mainlayout')

@section('content')


<!-- ======= Header Section ======= -->
<section id="contact-header" class="clearfix back-hero">
    <div class="container d-flex align-items-center h-100">
        <div class="row" data-aos="fade-up">
            <div class="col-md-12 intro-info" data-aos="zoom-in" data-aos-delay="100">
                <!-- <h2>We help <span> add value </span>through technology, custom built for your needs.</h2> -->
                <div class="d-flex justify-content-center">
                    <center>
                        <h2 class="head-h2"><span>Need Help? Any Quiries?</span> We are ready to provide you with our
                            services,<br> Just contact us !</h2>
                    </center>
                </div>
            </div>
            <!-- <div class="col-md-6 intro-img order-md-last order-first" data-aos="zoom-out" data-aos-delay="200">
                <img src="{{ asset('assets/img/intro-img.svg') }}" alt="" class="img-fluid">
            </div> -->
        </div>
    </div>
</section>
<!-- End Hero -->


<div class="container my-5">
    <div class="row">
        <div class="col-lg-6">
            <section class='about' id="about">

                <div class="about-img" data-aos="fade-right" data-aos-delay="100">
                    <img src="assets/img/OWT_logo.jpg" alt="">
                </div>
            </section>
        </div>
        <div class="col-lg-6" style="padding-top: 80px">
            <div class="form">
                <h4>Send us a message</h4>
                <p>Let's Talk. We'd love to understand what you're trying to build and how we can set up the right team
                    for it.</p>
                <form action="/send-contact-mail" method="post">
                    @csrf
                    <div class="form-group">
                        <input type="text" name="name" class="form-control" id="name" placeholder="Your Name"
                            data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                        <div class="validate"></div>
                    </div>
                    <div class="form-group">
                        <input type="email" class="form-control" name="email" id="email" placeholder="Your Email"
                            data-rule="email" data-msg="Please enter a valid email" />
                        <div class="validate"></div>
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject"
                            data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
                        <div class="validate"></div>
                    </div>
                    {{-- <img src="" alt=""> --}}
                    <div class="form-group">
                        <textarea class="form-control" name="message" rows="5" data-rule="required"
                            data-msg="Please write something for us" placeholder="How can we help you?"></textarea>
                        <div class="validate"></div>
                    </div>
                    {{-- <div class="mb-3">
                        <div class="loading">Loading</div>
                        <div class="error-message"></div>
                        <div class="sent-message">Your message has been sent. Thank you!</div>
                    </div> --}}
                    <div class="text-center"><button type="submit" class='btn btn-dark2 p-2 ' title="Send Message">Send Message</button></div>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection