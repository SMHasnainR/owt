@extends('layouts.mainlayout')
@section('content')


<!-- ======= Header Section ======= -->
<section id="portfolio-header" class="clearfix back-hero">
    <div class="container d-flex align-items-center h-100">
        <div class="row" data-aos="fade-up">
            <div class="col-md-12 intro-info" data-aos="zoom-in" data-aos-delay="100">
                <!-- <h2>We help <span> add value </span>through technology, custom built for your needs.</h2> -->
                <div class="d-flex justify-content-center">
                    <center><h2 class="head-h2">We help companies <span>plan, create and  deliver</span> integrated product and brand experiences</h2></center>
                </div>
            </div>
            <!-- <div class="col-md-6 intro-img order-md-last order-first" data-aos="zoom-out" data-aos-delay="200">
                <img src="{{asset('assets/img/intro-img.svg')}}" alt="" class="img-fluid">
            </div> -->
        </div>
    </div>
</section>
<!-- End Hero -->



<!-- ======= Portfolio Section ======= -->
<section id="portfolio" class="portfolio section-bg mt-5">
    <div class="container" data-aos="fade-up">

        <header class="section-header">
            <h3 class="section-title">Our Portfolio</h3>
        </header>

        <div class='row'>
            <embed src="/assets/files/profile.pdf" type="application/pdf" width="100%" height="400px">
        </div>
{{-- 
        <div class="row" data-aos="fade-up" data-aos-delay="100">
            <div class="col-lg-12">
                <ul id="portfolio-flters">
                    <li data-filter="*" class="filter-active">All</li>
                    <li data-filter=".filter-app">App</li>
                    <li data-filter=".filter-card">Card</li>
                    <li data-filter=".filter-web">Web</li>
                </ul>
            </div>
        </div>

        <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="200">

            <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                <div class="portfolio-wrap">
                    <img src="assets/img/portfolio/app1.jpg" class="img-fluid" alt="">
                    <div class="portfolio-info">
                        <h4><a href="portfolio-details.html">App 1</a></h4>
                        <p>App</p>
                        <div>
                            <a href="assets/img/portfolio/app1.jpg" data-gall="portfolioGallery" title="App 1" class="link-preview venobox"><i class="ion ion-eye"></i></a>
                            <a href="portfolio-details.html" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 portfolio-item filter-web" data-wow-delay="0.1s">
                <div class="portfolio-wrap">
                    <img src="assets/img/portfolio/web3.jpg" class="img-fluid" alt="">
                    <div class="portfolio-info">
                        <h4><a href="portfolio-details.html">Web 3</a></h4>
                        <p>Web</p>
                        <div>
                            <a href="assets/img/portfolio/web3.jpg" class="link-preview venobox" data-gall="portfolioGallery" title="Web 3"><i class="ion ion-eye"></i></a>
                            <a href="portfolio-details.html" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 portfolio-item filter-app" data-wow-delay="0.2s">
                <div class="portfolio-wrap">
                    <img src="assets/img/portfolio/app2.jpg" class="img-fluid" alt="">
                    <div class="portfolio-info">
                        <h4><a href="portfolio-details.html">App 2</a></h4>
                        <p>App</p>
                        <div>
                            <a href="assets/img/portfolio/app2.jpg" class="link-preview venobox" data-gall="portfolioGallery" title="App 2"><i class="ion ion-eye"></i></a>
                            <a href="portfolio-details.html" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 portfolio-item filter-card">
                <div class="portfolio-wrap">
                    <img src="assets/img/portfolio/card2.jpg" class="img-fluid" alt="">
                    <div class="portfolio-info">
                        <h4><a href="portfolio-details.html">Card 2</a></h4>
                        <p>Card</p>
                        <div>
                            <a href="assets/img/portfolio/card2.jpg" class="link-preview venobox" data-gall="portfolioGallery" title="Card 2"><i class="ion ion-eye"></i></a>
                            <a href="portfolio-details.html" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 portfolio-item filter-web" data-wow-delay="0.1s">
                <div class="portfolio-wrap">
                    <img src="assets/img/portfolio/web2.jpg" class="img-fluid" alt="">
                    <div class="portfolio-info">
                        <h4><a href="portfolio-details.html">Web 2</a></h4>
                        <p>Web</p>
                        <div>
                            <a href="assets/img/portfolio/web2.jpg" class="link-preview venobox" data-gall="portfolioGallery" title="Web 2"><i class="ion ion-eye"></i></a>
                            <a href="portfolio-details.html" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 portfolio-item filter-app" data-wow-delay="0.2s">
                <div class="portfolio-wrap">
                    <img src="assets/img/portfolio/app3.jpg" class="img-fluid" alt="">
                    <div class="portfolio-info">
                        <h4><a href="portfolio-details.html">App 3</a></h4>
                        <p>App</p>
                        <div>
                            <a href="assets/img/portfolio/app3.jpg" class="link-preview venobox" data-gall="portfolioGallery" title="App 3"><i class="ion ion-eye"></i></a>
                            <a href="portfolio-details.html" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 portfolio-item filter-card">
                <div class="portfolio-wrap">
                    <img src="assets/img/portfolio/card1.jpg" class="img-fluid" alt="">
                    <div class="portfolio-info">
                        <h4><a href="portfolio-details.html">Card 1</a></h4>
                        <p>Card</p>
                        <div>
                            <a href="assets/img/portfolio/card1.jpg" class="link-preview venobox" data-gall="portfolioGallery" title="Card 1"><i class="ion ion-eye"></i></a>
                            <a href="portfolio-details.html" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 portfolio-item filter-card" data-wow-delay="0.1s">
                <div class="portfolio-wrap">
                    <img src="assets/img/portfolio/card3.jpg" class="img-fluid" alt="">
                    <div class="portfolio-info">
                        <h4><a href="portfolio-details.html">Card 3</a></h4>
                        <p>Card</p>
                        <div>
                            <a href="assets/img/portfolio/card3.jpg" class="link-preview venobox" data-gall="portfolioGallery" title="Card 3"><i class="ion ion-eye"></i></a>
                            <a href="portfolio-details.html" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 portfolio-item filter-web" data-wow-delay="0.2s">
                <div class="portfolio-wrap">
                    <img src="assets/img/portfolio/web1.jpg" class="img-fluid" alt="">
                    <div class="portfolio-info">
                        <h4><a href="portfolio-details.html">Web 1</a></h4>
                        <p>Web</p>
                        <div>
                            <a href="assets/img/portfolio/web1.jpg" class="link-preview venobox" data-gall="portfolioGallery" title="Web 1"><i class="ion ion-eye"></i></a>
                            <a href="portfolio-details.html" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>
                        </div>
                    </div>
                </div>
            </div>

        </div> --}}

    </div>
</section><!-- End Portfolio Section -->


@endsection