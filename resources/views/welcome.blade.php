<!DOCTYPE html>
<html lang="en" class="no-js">
<head>
    <meta charset="UTF-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Thodoris Kouleris - Software Engineer</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1"/>
    <meta name="description" content="Thodoris Kouleris - Software Engineer"/>
    <meta name="keywords" content="vcard, resposnive, retina, resume, jquery, css3, bootstrap, Material CV, portfolio"/>
    <meta name="author" content="lmpixels"/>
    <meta property="og:image" itemprop="image" content="https://tkouleris.eu/img/main_logo.png"/>
    <link rel="icon" type="image/x-icon" href="{{asset('favicon.ico')}}">
    @include('partials.css')
</head>

<body>
@include('partials.animated-background')

<!-- Loading animation -->
<div class="preloader">
    <div class="preloader-animation">
        <div class="preloader-spinner">
        </div>
    </div>
</div>
<!-- /Loading animation -->

<div class="page">
    <div class="page-content">

        <header id="site_header" class="header mobile-menu-hide">
            @include('partials.header-content')

            @include('partials.menu', ['is_main'=>true])

            @include('partials.social')

            @include('partials.cv')

            @include('partials.copyright')
        </header>

        <!-- Mobile Navigation -->
        <div class="menu-toggle">
            <span></span>
            <span></span>
            <span></span>
        </div>
        <!-- End Mobile Navigation -->

        <!-- Arrows Nav -->
        <div class="lmpixels-arrows-nav">
            <div class="lmpixels-arrow-right"><i class="lnr lnr-chevron-right"></i></div>
            <div class="lmpixels-arrow-left"><i class="lnr lnr-chevron-left"></i></div>
        </div>
        <!-- End Arrows Nav -->

        <div class="content-area">
            <div class="animated-sections">
                <!-- Home Subpage -->
                <section data-id="home" class="animated-section start-page">
                    <div class="section-content vcentered">

                        <div class="row">
                            <div class="col-sm-12 col-md-12 col-lg-12">
                                <div class="title-block">
                                    <h2>Thodoris Kouleris</h2>
                                    <div class="owl-carousel text-rotation">
                                        <div class="item">
                                            <div class="sp-subtitle">Software Engineer</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </section>
                <!-- End of Home Subpage -->

                <!-- About Me Subpage -->
                <section data-id="about-me" class="animated-section">
                    <div class="section-content">
                        <div class="page-title">
                            <h2>About <span>Me</span></h2>
                        </div>

                        <!-- Personal Information -->
                        <div class="row">
                            <div class="col-xs-12 col-sm-7">
                                <p style="text-align: justify">
                                    Hello there!! Welcome to my web site. Yes, this is another boring web site. I made
                                    it because I am a vain human who has little life out of computers. This page is
                                    about things that I like to do. Because this is a personal web site you may read a
                                    lot the word I. No, that doesn't mean that I am selfish. I really care about
                                    humanity and I help my neighbour. Now, if you are bored don't go on to read the rest
                                    of the site, you will be more bored
                                </p>
                            </div>

                            <div class="col-xs-12 col-sm-5">
                                <div class="info-list">
                                    <ul>
                                        <li>
                                            <span class="title">DOB</span>
                                            <span class="value">1982/09/22</span>
                                        </li>

                                        <li>
                                            <span class="title">Residence</span>
                                            <span class="value">Greece</span>
                                        </li>

                                        <li>
                                            <span class="title">e-mail</span>
                                            <span class="value">tkouleris@gmail.com</span>
                                        </li>

                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!-- End of Personal Information -->

                        <div class="white-space-50"></div>

                        <!-- Services -->
                        <div class="row">
                            <div class="col-xs-12 col-sm-12">
                                <div class="block-title">
                                    <h3>What <span>I Do</span></h3>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-xs-12 col-sm-6">
                                <div class="col-inner">
                                    <div class="info-list-w-icon">
                                        <div class="info-block-w-icon">
                                            <div class="ci-icon">
                                                <i class="lnr lnr-coffee-cup"></i>
                                            </div>
                                            <div class="ci-text">
                                                <h4>Free Time</h4>
                                                <p style="text-align: justify">
                                                    At my free time, besides programming I love watching movies and TV
                                                    shows, reading books, playing video games and listen to music.
                                                </p>
                                            </div>
                                        </div>
                                        <div class="info-block-w-icon">
                                            <div class="ci-icon">
                                                <i class="lnr lnr-laptop-phone"></i>
                                            </div>
                                            <div class="ci-text">
                                                <h4>Computers</h4>
                                                <p style="text-align: justify">
                                                    <b>Athena: </b>
                                                    This is my main computer. I spent a lot of time with it. It has 32GB
                                                    of RAM, an Intel Core i5-10600K at 4.1Gh and an RTX 3060 8GB. I used
                                                    to have Linux installed but for the last 3 years I switched to
                                                    Win10.</p>
                                                <p style="text-align: justify">
                                                    <b>Mars: </b>
                                                    This is my portable computer. It's a Huawei MateBook D16 16.1" IPS
                                                    FHD with 16GB of RAM and a Ryzen 5 4600H CPU. It's a good
                                                    alternative for my main computer for mainly work. I have installed
                                                    Windows 11.
                                                </p>
                                                <p>

                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-xs-12 col-sm-6">
                                <div class="col-inner">
                                    <div class="info-list-w-icon">
                                        <div class="info-block-w-icon">
                                            <div class="ci-icon">
                                                <i class="lnr lnr-code"></i>
                                            </div>
                                            <div class="ci-text">
                                                <h4>Programming</h4>
                                                <p style="text-align: justify">
                                                    I like building web apps that may be helpful to others. I use PHP,
                                                    Python or Java for the backend,
                                                    Vue for the front-end and React Native for the mobile versions of my
                                                    apps.
                                                </p>
                                            </div>
                                        </div>
                                        <div class="info-block-w-icon">
                                            <div class="ci-icon">
                                                <i class="lnr lnr-map-marker"></i>
                                            </div>
                                            <div class="ci-text">
                                                <h4>Where to find me</h4>
                                                <p>
                                                    - <a href="https://github.com/tkouleris">GitHub</a><br/>
                                                    - <a href="https://app.daily.dev/">Daily Dev</a><br/>
                                                    - <a href="https://dev.to/tkouleris">DEV</a><br/>
                                                    - <a href="https://bsky.app/profile/tkouleris.eu">Bluesky</a><br/>
                                                    - <a href="http://www.facebook.com/kouleris">Facebook</a><br/>
                                                    - <a href="https://www.youtube.com/@tkouleris">YouTube</a><br/>
                                                </p>

                                            </div>
                                        </div>
                                        <!--                          <div class="info-block-w-icon">-->
                                        <!--                            <div class="ci-icon">-->
                                        <!--                              <i class="lnr lnr-flag"></i>-->
                                        <!--                            </div><div class="ci-text">-->
                                        <!--                              <h4>Management</h4>-->
                                        <!--                              <p>Pellentesque pellentesque, ipsum sit amet auctor accumsan, odio tortor bibendum massa, sit amet ultricies ex lectus scelerisque nibh. Ut non sodales.</p>-->
                                        <!--                            </div>-->
                                        <!--                          </div>-->
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End of Services -->

                        <!--                        <div class="white-space-30"></div>-->

                        <!-- Testimonials -->
                        <!--                        <div class="row">-->
                        <!--                            <div class="col-xs-12 col-sm-12">-->
                        <!--                                <div class="block-title">-->
                        <!--                                    <h3>Testimonials</h3>-->
                        <!--                                </div>-->
                        <!--                            </div>-->
                        <!--                        </div>-->

                        <!--                        <div class="row">-->
                        <!--                            <div class="col-xs-12 col-sm-12">-->
                        <!--                                <div class="testimonials owl-carousel">-->
                        <!--                                    &lt;!&ndash; Testimonial 1 &ndash;&gt;-->
                        <!--                                    <div class="testimonial">-->
                        <!--                                        <div class="img">-->
                        <!--                                            <img src="img/testimonials/testimonial-1.jpg" alt="Thodoris Kouleris">-->
                        <!--                                        </div>-->
                        <!--                                        <div class="text">-->
                        <!--                                            <p>Vivamus at molestie dui, eu ornare orci. Curabitur vel egestas dolor.-->
                        <!--                                                Nulla condimentum nunc sit amet urna tempus finibus. Duis mollis leo id-->
                        <!--                                                ligula pellentesque, at vehicula dui ultrices.</p>-->
                        <!--                                        </div>-->

                        <!--                                        <div class="author-info">-->
                        <!--                                            <h4 class="author">Julia Hickman</h4>-->
                        <!--                                            <h5 class="company">Omni Source</h5>-->
                        <!--                                            <div class="icon">-->
                        <!--                                                <i class="fas fa-quote-right"></i>-->
                        <!--                                            </div>-->
                        <!--                                        </div>-->
                        <!--                                    </div>-->
                        <!--                                    &lt;!&ndash; End of Testimonial 1 &ndash;&gt;-->

                        <!--                                    &lt;!&ndash; Testimonial 2 &ndash;&gt;-->
                        <!--                                    <div class="testimonial">-->
                        <!--                                        <div class="img">-->
                        <!--                                            <img src="img/testimonials/testimonial-2.jpg" alt="Thodoris Kouleris">-->
                        <!--                                        </div>-->
                        <!--                                        <div class="text">-->
                        <!--                                            <p>Vivamus at molestie dui, eu ornare orci. Curabitur vel egestas dolor.-->
                        <!--                                                Nulla condimentum nunc sit amet urna tempus finibus. Duis mollis leo id-->
                        <!--                                                ligula pellentesque, at vehicula dui ultrices.</p>-->
                        <!--                                        </div>-->

                        <!--                                        <div class="author-info">-->
                        <!--                                            <h4 class="author">Robert Watkins</h4>-->
                        <!--                                            <h5 class="company">Endicott Shoes</h5>-->
                        <!--                                            <div class="icon">-->
                        <!--                                                <i class="fas fa-quote-right"></i>-->
                        <!--                                            </div>-->
                        <!--                                        </div>-->
                        <!--                                    </div>-->
                        <!--                                    &lt;!&ndash; End of Testimonial 2 &ndash;&gt;-->

                        <!--                                    &lt;!&ndash; Testimonial 3 &ndash;&gt;-->
                        <!--                                    <div class="testimonial">-->
                        <!--                                        <div class="img">-->
                        <!--                                            <img src="img/testimonials/testimonial-3.jpg" alt="Thodoris Kouleris">-->
                        <!--                                        </div>-->
                        <!--                                        <div class="text">-->
                        <!--                                            <p>Vivamus at molestie dui, eu ornare orci. Curabitur vel egestas dolor.-->
                        <!--                                                Nulla condimentum nunc sit amet urna tempus finibus. Duis mollis leo id-->
                        <!--                                                ligula pellentesque, at vehicula dui ultrices.</p>-->
                        <!--                                        </div>-->

                        <!--                                        <div class="author-info">-->
                        <!--                                            <h4 class="author">Kristin Carroll</h4>-->
                        <!--                                            <h5 class="company">Helping Hand</h5>-->
                        <!--                                            <div class="icon">-->
                        <!--                                                <i class="fas fa-quote-right"></i>-->
                        <!--                                            </div>-->
                        <!--                                        </div>-->
                        <!--                                    </div>-->
                        <!--                                    &lt;!&ndash; End of Testimonial 3 &ndash;&gt;-->
                        <!--                                </div>-->
                        <!--                            </div>-->
                        <!--                        </div>-->
                        <!-- End of Testimonials -->

                        <!--                        <div class="white-space-50"></div>-->

                        <!-- Clients -->
                        <!--                        <div class="row">-->
                        <!--                            <div class="col-xs-12 col-sm-12">-->
                        <!--                                <div class="block-title">-->
                        <!--                                    <h3>Cilents</h3>-->
                        <!--                                </div>-->
                        <!--                            </div>-->
                        <!--                        </div>-->

                        <!--                        <div class="row">-->
                        <!--                            <div class="col-xs-12 col-sm-12">-->
                        <!--                                <div class="clients owl-carousel">-->

                        <!--                                    <div class="client-block">-->
                        <!--                                        <a href="#" target="_blank" title="Logo">-->
                        <!--                                            <img src="img/clients/client-1.png" alt="Logo">-->
                        <!--                                        </a>-->
                        <!--                                    </div>-->

                        <!--                                    <div class="client-block">-->
                        <!--                                        <a href="#" target="_blank" title="Logo">-->
                        <!--                                            <img src="img/clients/client-2.png" alt="Logo">-->
                        <!--                                        </a>-->
                        <!--                                    </div>-->

                        <!--                                    <div class="client-block">-->
                        <!--                                        <a href="#" target="_blank" title="Logo">-->
                        <!--                                            <img src="img/clients/client-3.png" alt="Logo">-->
                        <!--                                        </a>-->
                        <!--                                    </div>-->

                        <!--                                    <div class="client-block">-->
                        <!--                                        <a href="#" target="_blank" title="Logo">-->
                        <!--                                            <img src="img/clients/client-4.png" alt="Logo">-->
                        <!--                                        </a>-->
                        <!--                                    </div>-->

                        <!--                                    <div class="client-block">-->
                        <!--                                        <a href="#" target="_blank" title="Logo">-->
                        <!--                                            <img src="img/clients/client-5.png" alt="Logo">-->
                        <!--                                        </a>-->
                        <!--                                    </div>-->

                        <!--                                    <div class="client-block">-->
                        <!--                                        <a href="#" target="_blank" title="Logo">-->
                        <!--                                            <img src="img/clients/client-6.png" alt="Logo">-->
                        <!--                                        </a>-->
                        <!--                                    </div>-->

                        <!--                                    <div class="client-block">-->
                        <!--                                        <a href="#" target="_blank" title="Logo">-->
                        <!--                                            <img src="img/clients/client-7.png" alt="Logo">-->
                        <!--                                        </a>-->
                        <!--                                    </div>-->

                        <!--                                </div>-->
                        <!--                            </div>-->
                        <!--                        </div>-->
                        <!-- End of Clients -->

                        <!--                        <div class="white-space-50"></div>-->

                        <!-- Pricing -->
                        <!--                        <div class="row">-->
                        <!--                            <div class="col-xs-12 col-sm-12">-->

                        <!--                                <div class="block-title">-->
                        <!--                                    <h3>Pricing</h3>-->
                        <!--                                </div>-->
                        <!--                            </div>-->
                        <!--                        </div>-->

                        <!--                        <div class="row">-->
                        <!--                            <div class=" col-xs-12 col-sm-12 ">-->
                        <!--                                <div class="fw-pricing clearfix row">-->

                        <!--                                    <div class="fw-package-wrap col-md-6 ">-->
                        <!--                                        <div class="fw-package">-->
                        <!--                                            <div class="fw-heading-row">-->
                        <!--                                                <span>Silver</span>-->
                        <!--                                            </div>-->

                        <!--                                            <div class="fw-pricing-row">-->
                        <!--                                                <span>$64</span>-->
                        <!--                                                <small>per month</small>-->
                        <!--                                            </div>-->

                        <!--                                            <div class="fw-button-row">-->
                        <!--                                                <a href="#" target="_self" class="btn btn-secondary">Free Trial</a>-->
                        <!--                                            </div>-->

                        <!--                                            <div class="fw-default-row">Lorem ipsum dolor</div>-->
                        <!--                                            <div class="fw-default-row">Pellentesque scelerisque</div>-->
                        <!--                                            <div class="fw-default-row">Morbi eu sagittis</div>-->
                        <!--                                        </div>-->
                        <!--                                    </div>-->

                        <!--                                    <div class="fw-package-wrap col-md-6 highlight-col ">-->
                        <!--                                        <div class="fw-package">-->
                        <!--                                            <div class="fw-heading-row">-->
                        <!--                                                <span>Gold</span>-->
                        <!--                                            </div>-->

                        <!--                                            <div class="fw-pricing-row">-->
                        <!--                                                <span>$128</span>-->
                        <!--                                                <small>per month</small>-->
                        <!--                                            </div>-->

                        <!--                                            <div class="fw-button-row">-->
                        <!--                                                <a href="#" target="_self" class="btn btn-primary">Free Trial</a>-->
                        <!--                                            </div>-->

                        <!--                                            <div class="fw-default-row">Lorem ipsum dolor</div>-->
                        <!--                                            <div class="fw-default-row">Pellentesque scelerisque</div>-->
                        <!--                                            <div class="fw-default-row">Morbi eu sagittis</div>-->
                        <!--                                            <div class="fw-default-row">Donec non diam</div>-->
                        <!--                                            <div class="fw-default-row"></div>-->
                        <!--                                        </div>-->
                        <!--                                    </div>-->

                        <!--                                </div>-->
                        <!--                            </div>-->
                        <!--                        </div>-->
                        <!-- End of Pricing -->

                        <!--                        <div class="white-space-50"></div>-->

                        <!-- Fun Facts -->
                        <!--                        <div class="row">-->
                        <!--                            <div class="col-xs-12 col-sm-12">-->

                        <!--                                <div class="block-title">-->
                        <!--                                    <h3>Fun <span>Facts</span></h3>-->
                        <!--                                </div>-->
                        <!--                            </div>-->
                        <!--                        </div>-->

                        <!--                        <div class="row">-->
                        <!--                            <div class="col-xs-12 col-sm-4">-->
                        <!--                                <div class="fun-fact gray-default">-->
                        <!--                                    <i class="lnr lnr-heart"></i>-->
                        <!--                                    <h4>Happy Clients</h4>-->
                        <!--                                    <span class="fun-fact-block-value">578</span>-->
                        <!--                                    <span class="fun-fact-block-text"></span>-->
                        <!--                                </div>-->
                        <!--                            </div>-->

                        <!--                            <div class="col-xs-12 col-sm-4">-->
                        <!--                                <div class="fun-fact gray-default">-->
                        <!--                                    <i class="lnr lnr-clock"></i>-->
                        <!--                                    <h4>Working Hours</h4>-->
                        <!--                                    <span class="fun-fact-block-value">4,780</span>-->
                        <!--                                    <span class="fun-fact-block-text"></span>-->
                        <!--                                </div>-->
                        <!--                            </div>-->

                        <!--                            <div class="col-xs-12 col-sm-4 ">-->
                        <!--                                <div class="fun-fact gray-default">-->
                        <!--                                    <i class="lnr lnr-star"></i>-->
                        <!--                                    <h4>Awards Won</h4>-->
                        <!--                                    <span class="fun-fact-block-value">15</span>-->
                        <!--                                    <span class="fun-fact-block-text"></span>-->
                        <!--                                </div>-->
                        <!--                            </div>-->
                        <!--                        </div>-->
                        <!-- End of Fun Facts -->

                    </div>
                </section>
                <!-- End of About Me Subpage -->

                <!-- Resume Subpage -->
                <section data-id="resume" class="animated-section">
                    <div class="section-content">
                        <div class="page-title">
                            <h2>Resume</h2>
                        </div>

                        <div class="row">
                            <div class="col-xs-12 col-sm-7">

                                <div class="block-title">
                                    <h3>Work Experience</h3>
                                </div>

                                <div class="timeline timeline-second-style clearfix">
                                    <div class="timeline-item clearfix">
                                        <div class="left-part">
                                            <h5 class="item-period">Nov. 2020 - Today</h5>
                                            <span class="item-company">Agenso</span>
                                        </div>
                                        <div class="divider"></div>
                                        <div class="right-part">
                                            <h4 class="item-title">Software Engineer</h4>
                                            <p>PHP and Python back end developer, Vue front-end for IoT Systems</p>
                                        </div>
                                    </div>

                                    <div class="timeline-item clearfix">
                                        <div class="left-part">
                                            <h5 class="item-period">Sept. 2016 - Oct. 2020</h5>
                                            <span class="item-company">Peppercode</span>
                                        </div>
                                        <div class="divider"></div>
                                        <div class="right-part">
                                            <h4 class="item-title">Software Engineer</h4>
                                            <p>PHP back end developer for Information Systems</p>
                                        </div>
                                    </div>

                                    <div class="timeline-item clearfix">
                                        <div class="left-part">
                                            <h5 class="item-period">July 2009 - Jan. 2016</h5>
                                            <span class="item-company">Cocoon Ecoclima</span>
                                        </div>
                                        <div class="divider"></div>
                                        <div class="right-part">
                                            <h4 class="item-title">IT and Web developer</h4>
                                            <p>IT support, Web development, basic SEO and CCTV
                                                configuration
                                            </p>
                                        </div>
                                    </div>

                                    <div class="timeline-item clearfix">
                                        <div class="left-part">
                                            <h5 class="item-period">Feb. 2008 - Feb. 2009</h5>
                                            <span class="item-company">Delta Vocational Training Institute</span>
                                        </div>
                                        <div class="divider"></div>
                                        <div class="right-part">
                                            <h4 class="item-title">Tutor</h4>
                                            <p>
                                                Linux administration,
                                                Microprocessors programming, Databases, Computer networks, bash
                                                scripting, ECDL
                                            </p>
                                        </div>
                                    </div>

                                    <div class="timeline-item clearfix">
                                        <div class="left-part">
                                            <h5 class="item-period">Feb. 2007 - July 2007</h5>
                                            <span class="item-company">Compuforce ltd</span>
                                        </div>
                                        <div class="divider"></div>
                                        <div class="right-part">
                                            <h4 class="item-title">Tech Support</h4>
                                            <p>
                                                Installation and configuration of computer
                                                networking, Linux Servers, Symantec Firewalls, Zyxel Routers
                                            </p>
                                        </div>
                                    </div>

                                    <div class="timeline-item clearfix">
                                        <div class="left-part">
                                            <h5 class="item-period">Apr. 2005 - Oct 2005</h5>
                                            <span class="item-company">Compuforce ltd</span>
                                        </div>
                                        <div class="divider"></div>
                                        <div class="right-part">
                                            <h4 class="item-title">Tech Support</h4>
                                            <p>
                                                Installation and configuration of computer
                                                networking, Linux Servers, Symantec Firewalls, Zyxel Routers
                                            </p>
                                        </div>
                                    </div>

                                    <div class="timeline-item clearfix">
                                        <div class="left-part">
                                            <h5 class="item-period">March 2004 - Dec 2004</h5>
                                            <span
                                                class="item-company">Technological Educational Institute of Lamia</span>
                                        </div>
                                        <div class="divider"></div>
                                        <div class="right-part">
                                            <h4 class="item-title">Tech Support</h4>
                                            <p>
                                                Building and managing the lab's computer
                                                network
                                            </p>
                                        </div>
                                    </div>
                                </div>

                                <div class="white-space-50"></div>

                                <div class="block-title">
                                    <h3>Education</h3>
                                </div>

                                <div class="timeline timeline-second-style clearfix">
                                    <div class="timeline-item clearfix">
                                        <div class="left-part">
                                            <span
                                                class="item-company">Technological Educational Institute of Lamia</span>
                                        </div>
                                        <div class="divider"></div>
                                        <div class="right-part">
                                            <h4 class="item-title">Computer Science</h4>
                                            <p>Praesent dignissim sollicitudin justo, sed elementum quam lacinia quis.
                                                Phasellus eleifend tristique posuere. Sed vitae dui nec magna.</p>
                                        </div>
                                    </div>
                                </div>

                            </div>

                            <!-- Skills & Certificates -->
                            <div class="col-xs-12 col-sm-5">
                                <!-- Design Skills -->
                                <div class="block-title">
                                    <h3>Programming Languages</h3>
                                </div>

                                <div class="skills-info skills-second-style">
                                    <!-- Skill 1 -->
                                    <div class="skill clearfix">
                                        <h4>PHP</h4>
                                        <!--                                        <div class="skill-value">100%</div>-->
                                    </div>
                                    <div class="skill-container skill-1">
                                        <div class="skill-percentage"></div>
                                    </div>
                                    <!-- End of Skill 1 -->

                                    <!-- Skill 2 -->
                                    <div class="skill clearfix">
                                        <h4>Python</h4>
                                        <!--                                        <div class="skill-value">80%</div>-->
                                    </div>
                                    <div class="skill-container skill-1">
                                        <div class="skill-percentage"></div>
                                    </div>
                                    <!-- End of Skill 2 -->

                                    <!-- Skill 3 -->
                                    <div class="skill clearfix">
                                        <h4>Java</h4>
                                        <!--                                        <div class="skill-value">65%</div>-->
                                    </div>
                                    <div class="skill-container skill-1">
                                        <div class="skill-percentage"></div>
                                    </div>
                                    <!-- End of Skill 3 -->

                                </div>
                                <!-- End of Design Skills -->

                                <div class="white-space-10"></div>

                                <!-- Coding Skills -->
                                <div class="block-title">
                                    <h3>Web</h3>
                                </div>

                                <div class="skills-info skills-second-style">
                                    <!-- Skill Start -->
                                    <div class="skill clearfix">
                                        <h4>HTML5 / CSS3</h4>
                                        <!--                                        <div class="skill-value">95%</div>-->
                                    </div>
                                    <div class="skill-container skill-1">
                                        <div class="skill-percentage"></div>
                                    </div>
                                    <!-- Skill End -->

                                    <!-- Skill Start -->
                                    <div class="skill clearfix">
                                        <h4>Vue</h4>
                                        <!--                                        <div class="skill-value">90%</div>-->
                                    </div>
                                    <div class="skill-container skill-9">
                                        <div class="skill-percentage"></div>
                                    </div>
                                    <!-- Skill End -->

                                    <!-- Skill Start -->
                                    <div class="skill clearfix">
                                        <h4>JavaScript</h4>
                                        <!--                                        <div class="skill-value">75%</div>-->
                                    </div>
                                    <div class="skill-container skill-1">
                                        <div class="skill-percentage"></div>
                                    </div>
                                    <!-- Skill End -->

                                    <!-- Skill Start -->
                                    <div class="skill clearfix">
                                        <h4>Bootstrap</h4>
                                        <!--                                        <div class="skill-value">100%</div>-->
                                    </div>
                                    <div class="skill-container skill-1">
                                        <div class="skill-percentage"></div>
                                    </div>
                                    <!-- Skill End -->

                                    <!-- Skill Start -->
                                    <div class="skill clearfix">
                                        <h4>Jquery</h4>
                                        <!--                                        <div class="skill-value">90%</div>-->
                                    </div>
                                    <div class="skill-container skill-1">
                                        <div class="skill-percentage"></div>
                                    </div>
                                    <!-- Skill End -->
                                </div>
                                <!-- End of Coding Skills -->

                                <div class="white-space-10"></div>

                                <div class="block-title">
                                    <h3>Databases</h3>
                                </div>
                                <div class="skills-info skills-second-style">
                                    <!-- Skill Start -->
                                    <div class="skill clearfix">
                                        <h4>MySQL</h4>
                                        <!--                                        <div class="skill-value">95%</div>-->
                                    </div>
                                    <div class="skill-container skill-1">
                                        <div class="skill-percentage"></div>
                                    </div>
                                    <!-- Skill End -->

                                    <!-- Skill Start -->
                                    <div class="skill clearfix">
                                        <h4>MSSQL</h4>
                                        <!--                                        <div class="skill-value">95%</div>-->
                                    </div>
                                    <div class="skill-container skill-1">
                                        <div class="skill-percentage"></div>
                                    </div>
                                    <!-- Skill End -->
                                </div>

                                <div class="white-space-10"></div>

                                <div class="block-title">
                                    <h3>Frameworks</h3>
                                </div>
                                <div class="skills-info skills-second-style">
                                    <!-- Skill Start -->
                                    <div class="skill clearfix">
                                        <h4>Laravel</h4>
                                        <!--                                        <div class="skill-value">95%</div>-->
                                    </div>
                                    <div class="skill-container skill-1">
                                        <div class="skill-percentage"></div>
                                    </div>
                                    <!-- Skill End -->

                                    <!-- Skill Start -->
                                    <div class="skill clearfix">
                                        <h4>Flask</h4>
                                        <!--                                        <div class="skill-value">95%</div>-->
                                    </div>
                                    <div class="skill-container skill-1">
                                        <div class="skill-percentage"></div>
                                    </div>
                                    <!-- Skill End -->

                                    <!-- Skill Start -->
                                    <div class="skill clearfix">
                                        <h4>Spring Boot</h4>
                                        <!--                                        <div class="skill-value">95%</div>-->
                                    </div>
                                    <div class="skill-container skill-1">
                                        <div class="skill-percentage"></div>
                                    </div>
                                    <!-- Skill End -->
                                </div>

                                <div class="white-space-10"></div>

                                <div class="block-title">
                                    <h3>Mobile</h3>
                                </div>
                                <div class="skills-info skills-second-style">
                                    <!-- Skill Start -->
                                    <div class="skill clearfix">
                                        <h4>React Native</h4>
                                        <!--                                        <div class="skill-value">95%</div>-->
                                    </div>
                                    <div class="skill-container skill-1">
                                        <div class="skill-percentage"></div>
                                    </div>
                                    <!-- Skill End -->

                                </div>

                                <!-- Knowledges -->
                                <div class="block-title">
                                    <h3>Knowledges</h3>
                                </div>

                                <ul class="knowledges">
                                    <li>Windows</li>
                                    <li>Linux</li>
                                    <li>Design Patterns</li>
                                    <li>OOP</li>
                                    <li>Communication</li>
                                    <li>Problem-Solving</li>
                                    <li>Gimp</li>
                                </ul>
                                <!-- End of Knowledges -->
                            </div>
                            <!-- End of Skills & Certificates -->
                        </div>

                        <div class="white-space-50"></div>

                        <!-- Certificates -->
                        <div class="row">
                            <div class="col-xs-12 col-sm-12">
                                <div class="block-title">
                                    <h3>Seminars</h3>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-xs-12 col-sm-12">
                                <div class="certificate-item clearfix">
                                    <div class="certi-logo">
                                        <img src="img/iek_delta.jpg" alt="logo">
                                    </div>

                                    <div class="certi-content">
                                        <div class="certi-title">
                                            <span>CCTV over IP</span>
                                        </div>
                                        <div class="certi-id">
                                            <span>Delta Vocational Training Institute</span>
                                        </div>
                                        <div class="certi-date">
                                            <span>30 May 2008</span>
                                        </div>
                                        <div class="certi-company">
                                            <span></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Certificate 1 -->
                            <div class="col-xs-12 col-sm-12">
                                <div class="certificate-item clearfix">
                                    <div class="certi-logo">
                                        <img src="img/tei_lamias_logo.webp" alt="logo">
                                    </div>

                                    <div class="certi-content">
                                        <div class="certi-title">
                                            <h4>Installation, configuration and management of Linux O.S</h4>
                                        </div>
                                        <div class="certi-id">
                                            <span>Technological Educational Institute of Lamia</span>
                                        </div>
                                        <div class="certi-date">
                                            <span>5 June & 13 June 2002</span>
                                        </div>
                                        <div class="certi-company">
                                            <span></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- End of Certificate 1 -->

                            <!-- Certificate 2 -->
                            <div class="col-xs-12 col-sm-12">
                                <div class="certificate-item clearfix">
                                    <div class="certi-logo">
                                        <img src="img/tei_lamias_logo.webp" alt="logo">
                                    </div>

                                    <div class="certi-content">
                                        <div class="certi-title">
                                            <h4>New Information Technologies, new directions in education and the job
                                                market</h4>
                                        </div>
                                        <div class="certi-id">
                                            <span>Technological Educational Institute of Lamia</span>
                                        </div>
                                        <div class="certi-date">
                                            <span>8 October 2002</span>
                                        </div>
                                        <div class="certi-company">
                                            <span></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- End of Certificate 2 -->

                        </div>
                        <!-- End of Certificates -->
                    </div>
                </section>
                <!-- End of Resume Subpage -->

                <!-- Portfolio Subpage -->
                <section data-id="portfolio" class="animated-section">
                    <div class="section-content">
                        <div class="page-title">
                            <h2>Portfolio</h2>
                        </div>

                        <div class="row">
                            <div class="col-xs-12 col-sm-12">
                                <!-- Portfolio Content -->
                                <div class="portfolio-content">

                                    <ul class="portfolio-filters">
                                        {{--                                        <li class="active">--}}
                                        {{--                                            <a class="filter btn btn-sm btn-link" data-group="category_all">All</a>--}}
                                        {{--                                        </li>--}}
                                        <!--                                        <li>-->
                                        <!--                                            <a class="filter btn btn-sm btn-link" data-group="category_detailed">Detailed</a>-->
                                        <!--                                        </li>-->
                                        <!--                                        <li>-->
                                        <!--                                            <a class="filter btn btn-sm btn-link"-->
                                        <!--                                               data-group="category_mockups">Mockups</a>-->
                                        <!--                                        </li>-->
                                        <!--                                        <li>-->
                                        <!--                                            <a class="filter btn btn-sm btn-link" data-group="category_soundcloud">SoundCloud</a>-->
                                        <!--                                        </li>-->
                                        <!--                                        <li>-->
                                        <!--                                            <a class="filter btn btn-sm btn-link" data-group="category_vimeo-videos">Vimeo-->
                                        <!--                                                Videos</a>-->
                                        <!--                                        </li>-->
                                        <!--                                        <li>-->
                                        <!--                                            <a class="filter btn btn-sm btn-link" data-group="category_youtube-videos">YouTube-->
                                        <!--                                                Videos</a>-->
                                        <!--                                        </li>-->
                                    </ul>

                                    <!-- Portfolio Grid -->
                                    <div class="portfolio-grid three-columns">

                                        <figure class="item lbaudio"
                                                data-groups='["category_all", "category_soundcloud"]'>
                                            <div class="portfolio-item-img">
                                                <img src="img/portfolio/weather_app.png" alt="SoundCloud Audio"
                                                     title=""/>
                                                <a target="_blank" href="https://weather.tkouleris.eu/?city_id=209098"
                                                   class="lightbox mfp-iframe" title="Weather App"></a>
                                            </div>


                                            <h4 class="name">Weather App</h4>
                                            <span class="category">Weather App</span>
                                        </figure>

                                        <figure class="item"
                                                data-groups='["category_all", "category_soundcloud"]'>
                                            <div class="portfolio-item-img">
                                                <img src="img/portfolio/pharmacy_api.jpg" alt="Pharmacy API" title=""/>
                                                <a target="_blank" href="https://pharmacy.tkouleris.eu/"
                                                   title="Pharmacy API"></a>
                                            </div>


                                            <h4 class="name">Pharmacy API</h4>
                                            <span class="category">Pharmacy API</span>
                                        </figure>

                                        <figure class="item"
                                                data-groups='["category_all", "category_soundcloud"]'>
                                            <div class="portfolio-item-img">
                                                <img src="img/portfolio/pharmacy_android_app.jpg"
                                                     alt="Pharmacy Android App" title=""/>
                                                <a target="_blank" href="{{asset('apps/pharmacy_v1.apk')}}"
                                                   title="Pharmacy Android App"></a>
                                            </div>


                                            <h4 class="name">Pharmacy Android App</h4>
                                            <span class="category">Pharmacy Android App</span>
                                        </figure>

                                        <figure class="item"
                                                data-groups='["category_all", "category_soundcloud"]'>
                                            <div class="portfolio-item-img">
                                                <img src="img/portfolio/trivia_web_app.jpg" alt="Trivia Web App"
                                                     title=""/>
                                                <a target="_blank" href="https://trivia.tkouleris.eu"
                                                   title="Trivia Web App"></a>
                                            </div>


                                            <h4 class="name">Trivia Web App</h4>
                                            <span class="category">Trivia Web App</span>
                                        </figure>

                                        <figure class="item"
                                                data-groups='["category_all", "category_soundcloud"]'>
                                            <div class="portfolio-item-img">
                                                <img src="img/portfolio/starfighter.png" alt="Star Fighter (Game)"
                                                     title=""/>
                                                <a target="_blank" href="{{asset('apps/starfighter.zip')}}"
                                                   title="Trivia Web App"></a>
                                            </div>


                                            <h4 class="name">Star Fighter (Game)</h4>
                                            <span class="category">Star Fighter (Game)</span>
                                        </figure>
                                        <!--                                        <figure class="item standard"-->
                                        <!--                                                data-groups='["category_all", "category_detailed"]'>-->
                                        <!--                                            <div class="portfolio-item-img">-->
                                        <!--                                                <img src="img/portfolio/2.jpg" alt="Media Project 2" title=""/>-->
                                        <!--                                                <a href="portfolio-1.html" class="ajax-page-load"></a>-->
                                        <!--                                            </div>-->

                                        <!--                                            <i class="far fa-file-alt"></i>-->
                                        <!--                                            <h4 class="name">Detailed Project 2</h4>-->
                                        <!--                                            <span class="category">Detailed</span>-->
                                        <!--                                        </figure>-->

                                        <!--                                        <figure class="item lbvideo"-->
                                        <!--                                                data-groups='["category_all", "category_vimeo-videos"]'>-->
                                        <!--                                            <div class="portfolio-item-img">-->
                                        <!--                                                <img src="img/portfolio/3.jpg" alt="Vimeo Video 1" title=""/>-->
                                        <!--                                                <a href="https://player.vimeo.com/video/158284739"-->
                                        <!--                                                   class="lightbox mfp-iframe" title="Vimeo Video 1"></a>-->
                                        <!--                                            </div>-->

                                        <!--                                            <i class="fas fa-video"></i>-->
                                        <!--                                            <h4 class="name">Vimeo Video 1</h4>-->
                                        <!--                                            <span class="category">Vimeo Videos</span>-->
                                        <!--                                        </figure>-->

                                        <!--                                        <figure class="item standard"-->
                                        <!--                                                data-groups='["category_all", "category_detailed"]'>-->
                                        <!--                                            <div class="portfolio-item-img">-->
                                        <!--                                                <img src="img/portfolio/4.jpg" alt="Media Project 1" title=""/>-->
                                        <!--                                                <a href="portfolio-1.html" class="ajax-page-load"></a>-->
                                        <!--                                            </div>-->

                                        <!--                                            <i class="far fa-file-alt"></i>-->
                                        <!--                                            <h4 class="name">Detailed Project 1</h4>-->
                                        <!--                                            <span class="category">Detailed</span>-->
                                        <!--                                        </figure>-->

                                        <!--                                        <figure class="item lbimage" data-groups='["category_all", "category_mockups"]'>-->
                                        <!--                                            <div class="portfolio-item-img">-->
                                        <!--                                                <img src="img/portfolio/5.jpg" alt="Mockup Design 1" title=""/>-->
                                        <!--                                                <a class="lightbox" title="Mockup Design 1"-->
                                        <!--                                                   href="img/portfolio/full/5.jpg"></a>-->
                                        <!--                                            </div>-->

                                        <!--                                            <i class="far fa-image"></i>-->
                                        <!--                                            <h4 class="name">Mockup Design 1</h4>-->
                                        <!--                                            <span class="category">Mockups</span>-->
                                        <!--                                        </figure>-->

                                        <!--                                        <figure class="item lbvideo"-->
                                        <!--                                                data-groups='["category_all", "category_youtube-videos"]'>-->
                                        <!--                                            <div class="portfolio-item-img">-->
                                        <!--                                                <img src="img/portfolio/6.jpg" alt="YouTube Video 1" title=""/>-->
                                        <!--                                                <a href="https://www.youtube.com/embed/bg0gv2YpIok"-->
                                        <!--                                                   class="lightbox mfp-iframe" title="YouTube Video 1"></a>-->
                                        <!--                                            </div>-->

                                        <!--                                            <i class="fas fa-video"></i>-->
                                        <!--                                            <h4 class="name">YouTube Video 1</h4>-->
                                        <!--                                            <span class="category">YouTube Videos</span>-->
                                        <!--                                        </figure>-->
                                    </div>
                                </div>
                                <!-- End of Portfolio Content -->
                            </div>
                        </div>
                    </div>
                </section>
                <!-- End of Portfolio Subpage -->

                <!-- Blog Subpage -->
                <section data-id="blog" class="animated-section">
                    <div class="section-content">
                        <div class="page-title">
                            <h2>Blog</h2>
                        </div>

                        <div class="row">
                            <div class="col-xs-12 col-sm-12" style="padding-bottom: 15px;">
                                <a href="{{route('blog.archive')}}">Archive</a>
                            </div>

                            <div class="col-xs-12 col-sm-12">

                                <div class="blog-masonry two-columns clearfix">
                                    @foreach($current_data as $index => $post)
                                        <div class="item post-{{$index}}">
                                            <div class="blog-card">
                                                <div class="media-block">
                                                    <div class="category">
                                                        <a href="#" title="{{$post['category']}}">{{$post['category']}}</a>
                                                    </div>
                                                    <a target=”_blank” href="{{$post['url']}}">
                                                        <img src="{{$post['image']}}"
                                                             class="size-blog-masonry-image-two-c"
                                                             alt="{{$post['title']}}"
                                                             loading="lazy"
                                                             title="{{$post['title']}}" style="width:100%;"/>
                                                        <div class="mask"></div>
                                                    </a>
                                                </div>
                                                <div class="post-info">
                                                    <div class="post-date">{{$post['date']}}</div>
                                                    <a target=”_blank” href="{{$post['url']}}">
                                                        <h4 class="blog-item-title">{{$post['title']}}</h4>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach

                                </div>
                            </div>
                        </div>
                    </div>


                </section>
                <!-- End of Blog Subpage -->

                <!-- Contact Subpage -->
                <section data-id="contact" class="animated-section">
                    <div class="section-content">
                        <div class="page-title">
                            <h2>Contact</h2>
                        </div>

                        <div class="row">
                            <!-- Contact Info -->
                            <div class="col-xs-12 col-sm-4">
                                <div class="lm-info-block gray-default">
                                    <i class="lnr lnr-envelope"></i>
                                    <h4>tkouleris@gmail.com</h4>
                                    <span class="lm-info-block-value"></span>
                                    <span class="lm-info-block-text"></span>
                                </div>
                                <div class="lm-info-block gray-default">
                                    <i class="fab fa-bluesky"></i>
                                    <h4><a href="https://bsky.app/profile/tkouleris.eu" target="_blank">tkouleris.eu</a></h4>
                                    <span class="lm-info-block-value"></span>
                                    <span class="lm-info-block-text"></span>
                                </div>

                                <div class="lm-info-block gray-default">
                                    <i class="fab fa-linkedin"></i>
                                    <h4><a href="https://www.linkedin.com/in/tkouleris/"
                                           target="_blank">LinkedIn</a></h4>
                                    <span class="lm-info-block-value"></span>
                                    <span class="lm-info-block-text"></span>
                                </div>

                                <div class="lm-info-block gray-default">
                                    <i class="fab fa-facebook"></i>
                                    <h4><a href="https://www.facebook.com/kouleris"
                                           target="_blank">Facebook</a></h4>
                                    <span class="lm-info-block-value"></span>
                                    <span class="lm-info-block-text"></span>
                                </div>


                            </div>
                            <!-- End of Contact Info -->

                            <!-- Contact Form -->
                            <div class="col-xs-12 col-sm-8">

                                <div class="block-title">
                                    <h3>How Can I <span>Help You?!</span></h3>
                                </div>

                                <form id="contact_form" class="contact-form" action="{{ route('mail.send') }}"
                                      method="post">
                                    @csrf

                                    <div class="messages"></div>

                                    <div class="controls two-columns">
                                        <div class="fields clearfix">
                                            <div class="left-column">
                                                <div class="form-group form-group-with-icon">
                                                    <input id="form_name" type="text" name="name" class="form-control"
                                                           placeholder="" required="required"
                                                           data-error="Name is required.">
                                                    <label>Full Name</label>
                                                    <div class="form-control-border"></div>
                                                    <div class="help-block with-errors"></div>
                                                </div>

                                                <div class="form-group form-group-with-icon">
                                                    <input id="form_email" type="email" name="email"
                                                           class="form-control" placeholder="" required="required"
                                                           data-error="Valid email is required.">
                                                    <label>Email Address</label>
                                                    <div class="form-control-border"></div>
                                                    <div class="help-block with-errors"></div>
                                                </div>

                                                <div class="form-group form-group-with-icon">
                                                    <input id="form_subject" type="text" name="subject"
                                                           class="form-control" placeholder="" required="required"
                                                           data-error="Subject is required.">
                                                    <label>Subject</label>
                                                    <div class="form-control-border"></div>
                                                    <div class="help-block with-errors"></div>
                                                </div>
                                            </div>
                                            <div class="right-column">
                                                <div class="form-group form-group-with-icon">
                                                    <textarea id="form_message" name="message" class="form-control"
                                                              placeholder="" rows="7" required="required"
                                                              data-error="Please, leave me a message."></textarea>
                                                    <label>Message</label>
                                                    <div class="form-control-border"></div>
                                                    <div class="help-block with-errors"></div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="g-recaptcha" data-sitekey="6LdqmCAUAAAAAMMNEZvn6g4W5e0or2sZmAVpxVqI"
                                             data-theme="dark"></div>

                                        <input type="submit" class="button btn-send" value="Send message">
                                    </div>
                                </form>
                            </div>
                            <!-- End of Contact Form -->
                        </div>

                    </div>
                </section>
                <!-- End of Contact Subpage -->
            </div>
        </div>

    </div>
</div>

<script async src="https://www.googletagmanager.com/gtag/js?id=G-CF6G03Q5JN"></script>
<script>
    window.dataLayer = window.dataLayer || [];

    function gtag() {
        dataLayer.push(arguments);
    }

    gtag('js', new Date());

    gtag('config', 'G-CF6G03Q5JN');
</script>
@include('partials.javascript')
</body>
</html>
