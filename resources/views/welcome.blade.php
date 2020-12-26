@extends('layouts.mainlayout')
@section('content')

<!-- ======= Hero Section ======= -->
<section id="hero" class="clearfix back-hero">
    <div class="container d-flex h-100">
        <div class="row justify-content-center align-self-center" data-aos="fade-up">
            <div class="col-md-6 intro-info order-md-first order-last" data-aos="zoom-in" data-aos-delay="100">
                <h2>We help <span> add value </span>through technology, custom built for your needs.</h2>
                
                <div>
                    <a href="#about" class="btn-get-started scrollto">Get Started</a>
                </div>
            </div>
            <div class="col-md-6 intro-img order-md-last order-first" data-aos="zoom-out" data-aos-delay="200">
                <img src="{{asset('assets/img/intro-img.svg')}}" alt="" class="img-fluid">
            </div>
        </div>
    </div>
</section>
<!-- End Hero -->

<main id="main">

    <!-- ======= About Section ======= -->

    <!-- <section id="about" class="about">
        <div class="container" data-aos="fade-up">
            <div class="row">

                <div class="col-lg-5 col-md-6">
                    <div class="about-img" data-aos="fade-right" data-aos-delay="100">
                        <img src="assets/img/about-img.jpg" alt="">
                    </div>
                </div>

                <div class="col-lg-7 col-md-6">
                    <div class="about-content" data-aos="fade-left" data-aos-delay="100">
                        <h2>About Us</h2>
                        <h3>Odio sed id eos et laboriosam consequatur eos earum soluta.</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                        <p>Aut dolor id. Sint aliquam consequatur ex ex labore. Et quis qui dolor nulla dolores neque. Aspernatur consectetur omnis numquam quaerat. Sed fugiat nisi. Officiis veniam molestiae. Et vel ut quidem alias veritatis repudiandae ut fugit. Est ut eligendi aspernatur nulla voluptates veniam iusto vel quisquam. Fugit ut maxime incidunt accusantium totam repellendus eum error. Et repudiandae eum iste qui et ut ab alias.</p>
                        <ul>
                            <li><i class="ion-android-checkmark-circle"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat.</li>
                            <li><i class="ion-android-checkmark-circle"></i> Duis aute irure dolor in reprehenderit in voluptate velit.</li>
                            <li><i class="ion-android-checkmark-circle"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate trideta storacalaperda mastiro dolore eu fugiat nulla pariatur.</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

    </section> -->

    <section id="about" class="about">
        <div class="container" data-aos="fade-up">
            <div class="row">

                <div class="col-lg-5 col-md-6">
                    <div class="about-img" data-aos="fade-right" data-aos-delay="100">
                        <img src="assets/img/OWT_logo.jpg" alt="">
                    </div>
                </div>

                <div class="col-lg-7 col-md-6">
                    <div class="about-content" data-aos="fade-left" data-aos-delay="100">
                        <h2> What is One Window Technologies?</h2>
                        <h3>“All Technologies in One Frame”</h3>
                        <p>ONE Window Technologies, an adaptable and complete IT solutions provider and digital media agency,
                            supporting different industries at national and international levels through proficient IT and Tech services
                            under the domain of websites, customized software development, networking, digital marketing, mobile
                            applications, and programming with sustainable
                            innovations through user friendly technological advancements.</p>
                        <p> Apart from this we also provide hardware sales and services at market competitive rates.</p>
                        <ul>
                            <!-- <li><i class="ion-android-checkmark-circle"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate trideta storacalaperda mastiro dolore eu fugiat nulla pariatur.</li> -->
                        </ul>
                    </div>
                </div>
            </div>
        </div>

    </section>

    <!-- End About Section -->

    <!-- ======= Services Section ======= -->
    <section id="services" class="services section-bg">
        <div class="container" data-aos="fade-up">

            <header class="section-header">
                <h3>Services</h3>
                <p>We are helping customers digitalize existing business, build innovative new products, and augment teams with high performance members.</p>
            </header>

            <div class="row">

                <div class="col-md-6 col-lg-4 wow bounceInUp" data-aos="zoom-in" data-aos-delay="100">
                    <div class="box">
                        <div class="icon" style="background: #fceef3;"><i class="ion-ios-analytics-outline" style="color: #ff689b;"></i></div>
                        <h4 class="title"><a href="">Web Designing</a></h4>
                        <p class="description">Versatile arrangements blended with the perfect codes ideal for small, medium and big organizations to pursue their visibility as a brand.</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4" data-aos="zoom-in" data-aos-delay="200">
                    <div class="box">
                        <div class="icon" style="background: #fff0da;"><i class="ion-ios-bookmarks-outline" style="color: #e98e06;"></i></div>
                        <h4 class="title"><a href="">Digital Marketing</a></h4>
                        <p class="description">Digital marketing has become a major part of marketing strategies throughout the world. We provide you with out of the box ideas for Digital Marketing which will make your business grow.</p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4" data-aos="zoom-in" data-aos-delay="300">
                    <div class="box">
                        <div class="icon" style="background: #e6fdfc;"><i class="ion-ios-paper-outline" style="color: #3fcdc7;"></i></div>
                        <h4 class="title"><a href="">Mobile Apps</a></h4>
                        <p class="description">We offer you a creative and innovative platform by developing a compatible and the most recent in-cline structures
                            to outline applications with multiple frameworks for users.</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 wow" data-aos="zoom-in" data-aos-delay="100">
                    <div class="box">
                        <div class="icon" style="background: #eafde7;"><i class="ion-ios-speedometer-outline" style="color:#41cf2e;"></i></div>
                        <h4 class="title"><a href="">Graphic Designing</a></h4>
                        <p class="description">Our teams of creative and competent designers know the art to play with digital pens and sketch ideas by using a vast array of designing tools as we know how to catch an eye and make an impression</p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4" data-aos="zoom-in" data-aos-delay="200"">
    <div class=" box">
                    <div class="icon" style="background: #e1eeff;"><i class="ion-ios-world-outline" style="color: #2282ff;"></i></div>
                    <h4 class="title"><a href="">Networking</a></h4>
                    <p class="description">We provide 24/7 assistance to our customers for uninterrupted
                        networking services, so that you can get access to LAN at any time without any glitches.
                        Networking
                    </p>
                </div>
            </div>
            <div class="col-md-6 col-lg-4" data-aos="zoom-in" data-aos-delay="300">
                <div class="box">
                    <div class="icon" style="background: #ecebff;"><i class="ion-ios-clock-outline" style="color: #8660fe;"></i></div>
                    <h4 class="title"><a href="">CCTV Surveillance & Security System</a></h4>
                    <p class="description">We provide a variety of CCTV systems with complete installation and troubleshooting services, which are designed as per the needs of an organization. We also deal in providing security equipment’s and fire alarm systems.</p>
                </div>
            </div>

        </div>

        </div>
    </section><!-- End Services Section -->

    <!-- ======= Why Us Section ======= -->
    <section id="why-us" class="why-us">
        <div class="container-fluid" data-aos="fade-up">

            <header class="section-header">
                <h3>Why choose us?</h3>
                <p>We don’t pursue every company that needs computer support. We choose only clients that share in our values.</p>
            </header>

            <div class="row">

                <div class="col-lg-6" data-aos="zoom-in" data-aos-delay="100">
                    <div class="why-us-img">
                        <img src="assets/img/why-us.jpg" alt="" class="img-fluid">
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="why-us-content">
                        <!-- <p>Molestiae omnis numquam corrupti omnis itaque. Voluptatum quidem impedit. Odio dolorum exercitationem est error omnis repudiandae ad dolorum sit.</p> -->
                        <!-- <p>
                            Explicabo repellendus quia labore. Non optio quo ea ut ratione et quaerat. Porro facilis deleniti porro consequatur
                            et temporibus. Labore est odio.

                            Odio omnis saepe qui. Veniam eaque ipsum. Ea quia voluptatum quis explicabo sed nihil repellat..
                        </p> -->

                        <div class="features clearfix" data-aos="fade-up" data-aos-delay="100">
                            <i class="fa fa-diamond" style="color: #f058dc;"></i>
                            <h4>Reduced Cost</h4>
                            <p>We work on a planned way to make the steps clear and flow in a right direction thus saving the cost of doing it over.</p>
                        </div>

                        <div class="features clearfix" data-aos="fade-up" data-aos-delay="200">
                            <i class="fa fa-object-group" style="color: #ffb774;"></i>
                            <h4>Save your time</h4>
                            <p>With expert advice know the Mini ways to time taking tasks in
                                a systematic way, so you may invest your right time at the right place</p>
                        </div>

                        <div class="features clearfix" data-aos="fade-up" data-aos-delay="300">
                            <i class="fa fa-language" style="color: #589af1;"></i>
                            <h4>Consultancy</h4>
                            <p>An uninterrupted consultancy, development and support with an experienced entity waiting at each node to serve smartly</p>
                        </div>

                    </div>

                </div>

            </div>

        </div>

        <div class="container">
            <div class="row counters" data-aos="fade-up" data-aos-delay="100">

                <div class="col-lg-3 col-6 text-center">
                    <span data-toggle="counter-up">274</span>
                    <p>Clients</p>
                </div>

                <div class="col-lg-3 col-6 text-center">
                    <span data-toggle="counter-up">421</span>
                    <p>Projects</p>
                </div>

                <div class="col-lg-3 col-6 text-center">
                    <span data-toggle="counter-up">1,364</span>
                    <p>Hours Of Support</p>
                </div>

                <div class="col-lg-3 col-6 text-center">
                    <span data-toggle="counter-up">18</span>
                    <p>Hard Workers</p>
                </div>

            </div>

        </div>
    </section><!-- End Why Us Section -->

    <!-- ======= Call To Action Section ======= -->
    <section id="call-to-action" class="call-to-action">
        <div class="container" data-aos="zoom-out">
            <div class="row">
                <div class="col-lg-9 text-center text-lg-left">
                    <h3 class="cta-title">Get a Quote</h3>
                    <p class="cta-text">We're excited to learn more about what you're working on! The more information we have, the deeper we can dive on our initial conversation.</p>
                </div>
                <div class="col-lg-3 cta-btn-container text-center">
                    <a class="cta-btn align-middle" data-toggle="modal" data-target="#quoteModal">Get a Quote</a>
                </div>
            </div>
        </div>
    </section>
    <!-- Modal -->
    <div class="modal fade" id="quoteModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                
                <div class="modal-header">
                    <h4 class="modal-title" id="exampleModalLabel">Quotation Form</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                
                <form action="/send-quote-mail" method="post">
                @csrf
                    <div class="modal-body">
                        <div class="container">
                            <div align="center" class='my-3'>
                                <h3>Tell us about your project !</h3>
                            </div>
                            <div class='row my-3'>
                                <div class="col-sm-6">
                                    <input class='form-control' placeholder="First Name" name="firstName">
                                </div>
                                <div class="col-sm-6">
                                    <input class='form-control' placeholder='Last Names' name="lastName">
                                </div>
                            </div>
                            <div class="row my-3">
                                <div class='col-sm-6'>
                                    <input class='form-control' placeholder='Email Address' name='email'>
                                </div>
                                <div class='col-sm-6'>
                                    <input class='form-control' placeholder='Phone no' name='phone'>
                                </div>
                            </div>
                            <div class="row my-3">
                                <div class='col-sm-12'>
                                    <input class='form-control' placeholder='How can we help?' name="message">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-info">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!--  End Call To Action Section -->


    <!-- ======= Testimonials Section ======= -->
    {{-- <section id="testimonials" class="testimonials">
        <div class="container" data-aos="zoom-in">

            <header class="section-header">
                <h3>Testimonials</h3>
            </header>

            <div class="row justify-content-center">
                <div class="col-lg-8">

                    <div class="owl-carousel testimonials-carousel">

                        <div class="testimonial-item">
                            <img src="assets/img/testimonial-1.jpg" class="testimonial-img" alt="">
                            <h3>Saul Goodman</h3>
                            <h4>Ceo &amp; Founder</h4>
                            <p>
                                Proin iaculis purus consequat sem cure digni ssim donec porttitora entum suscipit rhoncus. Accusantium quam, ultricies eget id, aliquam eget nibh et. Maecen aliquam, risus at semper.
                            </p>
                        </div>

                        <div class="testimonial-item">
                            <img src="assets/img/testimonial-2.jpg" class="testimonial-img" alt="">
                            <h3>Sara Wilsson</h3>
                            <h4>Designer</h4>
                            <p>
                                Export tempor illum tamen malis malis eram quae irure esse labore quem cillum quid cillum eram malis quorum velit fore eram velit sunt aliqua noster fugiat irure amet legam anim culpa.
                            </p>
                        </div>

                        <div class="testimonial-item">
                            <img src="assets/img/testimonial-3.jpg" class="testimonial-img" alt="">
                            <h3>Jena Karlis</h3>
                            <h4>Store Owner</h4>
                            <p>
                                Enim nisi quem export duis labore cillum quae magna enim sint quorum nulla quem veniam duis minim tempor labore quem eram duis noster aute amet eram fore quis sint minim.
                            </p>
                        </div>

                        <div class="testimonial-item">
                            <img src="assets/img/testimonial-4.jpg" class="testimonial-img" alt="">
                            <h3>Matt Brandon</h3>
                            <h4>Freelancer</h4>
                            <p>
                                Fugiat enim eram quae cillum dolore dolor amet nulla culpa multos export minim fugiat minim velit minim dolor enim duis veniam ipsum anim magna sunt elit fore quem dolore labore illum veniam.
                            </p>
                        </div>

                    </div>

                </div>
            </div>

        </div>
    </section> --}}
    <!-- End Testimonials Section -->

    <!-- ======= Clients Section ======= -->
    <section id="clients" class="clients">
        <div class="container" data-aos="zoom-in">

            <header class="section-header">
                <h3>Our Clients</h3>
            </header>

            <div class="owl-carousel clients-carousel">
                <img src="assets/img/clients/client-1.png" alt="">
                {{-- <img src="assets/img/clients/client-2.png" alt=""> --}}
                <img src="assets/img/clients/client-3.png" alt="">
                <img src="assets/img/clients/client-4.png" alt="">
                <img src="assets/img/clients/client-5.png" alt="">
                <img src="assets/img/clients/client-6.png" alt="">
                {{-- <img src="assets/img/clients/client-7.png" alt=""> --}}
                {{-- <img src="assets/img/clients/client-8.png" alt=""> --}}
            </div>

        </div>
    </section><!-- End Clients Section -->


    <!-- ======= F.A.Q Section ======= -->
    <!-- <section id="faq" class="faq">
        <div class="container" data-aos="fade-up">
            <header class="section-header">
                <h3>Frequently Asked Questions</h3>
                <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque</p>
            </header>

            <ul id="faq-list" data-aos="fade-up" data-aos-delay="100">
                <li>
                    <a data-toggle="collapse" class="collapsed" href="#faq1">Non consectetur a erat nam at lectus urna duis? <i class="ion-android-remove"></i></a>
                    <div id="faq1" class="collapse" data-parent="#faq-list">
                        <p>
                            Feugiat pretium nibh ipsum consequat. Tempus iaculis urna id volutpat lacus laoreet non curabitur gravida. Venenatis lectus magna fringilla urna porttitor rhoncus dolor purus non.
                        </p>
                    </div>
                </li>

                <li>
                    <a data-toggle="collapse" href="#faq2" class="collapsed">Feugiat scelerisque varius morbi enim nunc faucibus a pellentesque? <i class="ion-android-remove"></i></a>
                    <div id="faq2" class="collapse" data-parent="#faq-list">
                        <p>
                            Dolor sit amet consectetur adipiscing elit pellentesque habitant morbi. Id interdum velit laoreet id donec ultrices. Fringilla phasellus faucibus scelerisque eleifend donec pretium. Est pellentesque elit ullamcorper dignissim. Mauris ultrices eros in cursus turpis massa tincidunt dui.
                        </p>
                    </div>
                </li>

                <li>
                    <a data-toggle="collapse" href="#faq3" class="collapsed">Dolor sit amet consectetur adipiscing elit pellentesque habitant morbi? <i class="ion-android-remove"></i></a>
                    <div id="faq3" class="collapse" data-parent="#faq-list">
                        <p>
                            Eleifend mi in nulla posuere sollicitudin aliquam ultrices sagittis orci. Faucibus pulvinar elementum integer enim. Sem nulla pharetra diam sit amet nisl suscipit. Rutrum tellus pellentesque eu tincidunt. Lectus urna duis convallis convallis tellus. Urna molestie at elementum eu facilisis sed odio morbi quis
                        </p>
                    </div>
                </li>

                <li>
                    <a data-toggle="collapse" href="#faq4" class="collapsed">Ac odio tempor orci dapibus. Aliquam eleifend mi in nulla? <i class="ion-android-remove"></i></a>
                    <div id="faq4" class="collapse" data-parent="#faq-list">
                        <p>
                            Dolor sit amet consectetur adipiscing elit pellentesque habitant morbi. Id interdum velit laoreet id donec ultrices. Fringilla phasellus faucibus scelerisque eleifend donec pretium. Est pellentesque elit ullamcorper dignissim. Mauris ultrices eros in cursus turpis massa tincidunt dui.
                        </p>
                    </div>
                </li>

                <li>
                    <a data-toggle="collapse" href="#faq5" class="collapsed">Tempus quam pellentesque nec nam aliquam sem et tortor consequat? <i class="ion-android-remove"></i></a>
                    <div id="faq5" class="collapse" data-parent="#faq-list">
                        <p>
                            Molestie a iaculis at erat pellentesque adipiscing commodo. Dignissim suspendisse in est ante in. Nunc vel risus commodo viverra maecenas accumsan. Sit amet nisl suscipit adipiscing bibendum est. Purus gravida quis blandit turpis cursus in
                        </p>
                    </div>
                </li>

                <li>
                    <a data-toggle="collapse" href="#faq6" class="collapsed">Tortor vitae purus faucibus ornare. Varius vel pharetra vel turpis nunc eget lorem dolor? <i class="ion-android-remove"></i></a>
                    <div id="faq6" class="collapse" data-parent="#faq-list">
                        <p>
                            Laoreet sit amet cursus sit amet dictum sit amet justo. Mauris vitae ultricies leo integer malesuada nunc vel. Tincidunt eget nullam non nisi est sit amet. Turpis nunc eget lorem dolor sed. Ut venenatis tellus in metus vulputate eu scelerisque. Pellentesque diam volutpat commodo sed egestas egestas fringilla phasellus faucibus. Nibh tellus molestie nunc non blandit massa enim nec.
                        </p>
                    </div>
                </li>

            </ul>

        </div>
    </section>End F.A.Q Section -->

</main><!-- End #main -->

@endsection