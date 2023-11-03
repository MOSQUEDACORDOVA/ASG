@extends('web.layout.app')
@section('content')

<body>

    <!-- Loader -->
    @include('web.layout.loading')
    <!-- Header -->
    @include('web.layout.navigation')

    <div class="layout">

        <!-- Home -->

        <main class="main main-inner bg-about" data-stellar-background-ratio="0.6">
            <div class="container">
                <header class="main-header">
                    <h1>About Us</h1>
                </header>
            </div>

            <!-- Lines -->

            <div class="page-lines">
                <div class="container">
                    <div class="col-line col-xs-4">
                        <div class="line"></div>
                    </div>
                    <div class="col-line col-xs-4">
                        <div class="line"></div>
                    </div>
                    <div class="col-line col-xs-4">
                        <div class="line"></div>
                        <div class="line"></div>
                    </div>
                </div>
            </div>
        </main>

        <div class="content">

            <!-- About  -->

            <section id="about" class="about">
                <div class="container">
                    <div class="entry">
                        <h3 class="entry-title">Elevating Excellence in Custom Audio, Video,
                            and Automation Solutions<span class="text-primary">.</span></h3>
                        <p class="entry-text">At our core, we are pioneers in the field of cutting-edge audio and video
                            systems.
                            Our commitment to unwavering excellence drives us to set and exceed
                            industry standards, shaping the future of technology in both residential and commercial
                            spaces.</p>
                    </div>
                    <div class="entry">
                        <h3 class="entry-title">Why Choose Us?<span class="text-primary">.</span></h3>
                        <p class="entry-text">We specialize in delivering unparalleled, tailored audio and video
                            solutions.
                            Our advanced automation technologies cater to the diverse needs of our discerning clientele.
                            With a relentless focus on innovation and masterful craftsmanship, we consistently surpass
                            expectations.
                        </p>
                        <p class="entry-text">Client satisfaction is our ultimate goal.</p>
                        <p class="entry-text">Transforming Spaces, Redefining Experiences</p>
                        <p class="entry-text">Our mission is to create immersive, transformative experiences that
                            elevate how people interact with their living spaces, work environments, and leisure
                            pursuits. When you choose us, you choose the future of technology.
                            Elevate your audio, video, and automation experience with us.
                        </p>
                    </div>
                </div>
            </section>

            <!-- Services -->

            <section id="services" class="services section">
                <div class="container">
                    <header class="section-header">
                        <h2 class="section-title">Commitment <span class="text-primary">and Future</span></h2>
                    </header>
                    <div class="section-content">
                        <div class="row-services row-base row">
                            <div class="col-base col-service col-sm-6 wow fadeInUp">
                                <div class="service-item">
                                    <img alt="We transform your spaces"
                                        src="{{ asset('img/img-icon/icon-architecture.png') }}">
                                    <h4>We transform your spaces</h4>
                                    <p>We create a better audiovisual and leisure experience through cutting-edge
                                        technology, using audio video solutions, and home automation.</p>
                                </div>
                            </div>

                            <div class="clearfix visible-sm"></div>
                            <div class="col-base col-service col-sm-6 wow fadeInUp" data-wow-delay="0.6s">
                                <div class="service-item">
                                    <img alt="We are leaders in advanced audio-video systems"
                                        src="{{ asset('img/img-icon/icon-planing.png') }}">
                                    <h4>We are leaders in advanced audio-video systems</h4>
                                    <p>We operate in accordance with the highest-rated standards of excellence in the
                                        market, shaping the future of technology in both residential and commercial
                                        spaces..</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Objects -->

            <section id="objects" class="objects section">
                <div class="container">
                    <header class="section-header">
                        <h2 class="section-title">We are <span class="text-primary">worldwide</span></h2>
                    </header>
                    <div class="section-content">
                        <div class="objects">
                            <img alt="" class="img-responsive" src="{{ asset('img/map.png') }}">

                            <!-- Objects -->

                            <div class="object-label" style="left:12.6%; top:42%;">

                            </div>

                            <div class="object-label" style="left: 25.7%; top: 39.1%;">

                            </div>

                            <div class="object-label" style="left: 32.2%; top: 80.6%;">

                            </div>

                            <div class="object-label" style="left: 47.3%; top: 34.5%;">

                            </div>

                            <div class="object-label" style="left: 50.7%; top: 20.4%;">

                            </div>

                            <div class="object-label" style="left: 64.4%; top: 22.4%;">

                            </div>

                            <div class="object-label" style="left: 82.2%; top: 32.6%;">

                            </div>

                            <div class="object-label" style="left: 84.4%; top: 82.3%;">

                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Contacts -->

            <section class="contacts section">
                <div class="container">
                    <header class="section-header">
                        <h2 class="section-title">Get <span class="text-primary">in touch</span></h2>
                    </header>
                    <div class="section-content">
                        <div class="row-base row">
                            <div class="col-address col-base col-md-4">
                                +1 (305) 725-49-27<br>
                                info@goarch.com<br>
                            </div>
                            <div class="col-base  col-md-8">
                                <form class="js-ajax-form">
                                    <div class="row-field row">
                                        <div class="col-field col-sm-6 col-md-6">
                                            <div class="form-group">
                                                <input type="text" class="form-control" name="name" placeholder="Name">
                                            </div>
                                            <div class="form-group">
                                                <input type="email" class="form-control" name="email" required
                                                    placeholder="Email *">
                                            </div>
                                        </div>
                                        <div class="col-field col-sm-6 col-md-6">
                                            <div class="form-group">
                                                <textarea class="form-control" name="message"
                                                    placeholder="Message"></textarea>
                                            </div>
                                        </div>
                                        <div class="col-message col-field col-sm-12">
                                            <div class="form-group">
                                                <div class="success-message"><i class="fa fa-check text-primary"></i>
                                                    Thank you!. Your message is successfully sent...</div>
                                                <div class="error-message">We're sorry, but something went wrong</div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-submit text-right"><button class="btn btn-shadow-2 wow swing">Send
                                            <i class="icon-next"></i></button></div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Footer -->

            @include('web.layout.footer')

            <!-- Lines -->

            <div class="page-lines">
                <div class="container">
                    <div class="col-line col-xs-4">
                        <div class="line"></div>
                    </div>
                    <div class="col-line col-xs-4">
                        <div class="line"></div>
                    </div>
                    <div class="col-line col-xs-4">
                        <div class="line"></div>
                        <div class="line"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endsection
