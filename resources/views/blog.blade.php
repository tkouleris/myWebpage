<!DOCTYPE html>
<html lang="en" class="no-js">
<head>
    <meta charset="UTF-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Thodoris Kouleris - Software Engineer</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1"/>
    <meta name="description" content="my blog post title"/>
    <meta name="keywords" content="vcard, resposnive, retina, resume, jquery, css3, bootstrap, Material CV, portfolio"/>
    <meta name="author" content="lmpixels"/>
    <meta property="og:image" itemprop="image" content="https://tkouleris.eu/img/blog/blog_post_1_full.jpg"/>
    <meta property="og:title" content="my blog post title" />
    <meta property="og:description" content="my blog post description" />
    <meta property="og:url" content="" />
    <meta property="og:image" content="./img/blog/blog_post_1_full.jpg" />
    <meta property="og:type" content="article" />
    <link rel="icon" type="image/x-icon" href="favicon.ico">




    <link rel="stylesheet" href="css/reset.css" type="text/css">
    <link rel="stylesheet" href="css/bootstrap-grid.min.css" type="text/css">
    <link rel="stylesheet" href="css/animations.css" type="text/css">
    <link rel="stylesheet" href="css/perfect-scrollbar.css" type="text/css">
    <link rel="stylesheet" href="css/owl.carousel.css" type="text/css">
    <link rel="stylesheet" href="css/magnific-popup.css" type="text/css">
    <link rel="stylesheet" href="css/main.css" type="text/css">
</head>

<body>
<!-- Animated Background -->
<div class="lm-animated-bg" style="background-image: url(img/main_bg.png);"></div>
<!-- /Animated Background -->

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
            <div class="header-content">
                <div class="header-photo">
                    <img src="img/main_photo.jpg" alt="Thodoris Kouleris">
                </div>
                <div class="header-titles">
                    <h2>Thodoris Kouleris</h2>
                    <h4>Software Engineer</h4>
                </div>
            </div>

            <ul class="main-menu">
                <li class="active">
                    <a href="#home" class="nav-anim">
                        <span class="menu-icon lnr lnr-home"></span>
                        <span class="link-text">Home</span>
                    </a>
                </li>
                <li>
                    <a href="#about-me" class="nav-anim">
                        <span class="menu-icon lnr lnr-user"></span>
                        <span class="link-text">About Me</span>
                    </a>
                </li>
                <li>
                    <a href="#resume" class="nav-anim">
                        <span class="menu-icon lnr lnr-graduation-hat"></span>
                        <span class="link-text">Resume</span>
                    </a>
                </li>
                <li>
                    <a href="#portfolio" class="nav-anim">
                        <span class="menu-icon lnr lnr-briefcase"></span>
                        <span class="link-text">Portfolio</span>
                    </a>
                </li>
                <li>
                    <a href="#blog" class="nav-anim">
                        {{--                        <span class="menu-icon lnr lnr-book"></span>--}}

                        <span class="menu-icon lnr fab fa-blogger"></span>
                        <span class="link-text">Blog</span>
                    </a>
                </li>
                <li>
                    <a href="#contact" class="nav-anim">
                        <span class="menu-icon lnr lnr-envelope"></span>
                        <span class="link-text">Contact</span>
                    </a>
                </li>
            </ul>

            <div class="social-links">
                <ul>
                    <li><a href="https://www.linkedin.com/in/thodoris-kouleris-22087460/" target="_blank"><i
                                class="fab fa-linkedin-in"></i></a></li>
                    <li><a href="https://blog.tkouleris.eu/" target="_blank"><i class="fab fa-blogger"></i></a></li>
                    <li><a href="https://twitter.com/tkouleris" target="_blank"><i class="fab fa-twitter"></i></a></li>
                </ul>
            </div>

            <div class="header-buttons">
                <a href="cv/T.Kouleris.pdf" target="_blank" class="btn btn-primary">Download CV</a>
            </div>

            <div class="copyrights">© {{ now()->year }} Thodoris Kouleris</div>
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

        <div class="content-area single-page-area">
            <div class="single-page-content">

                <article class="post">

                    <div class="post-thumbnail">
                        <img src="{{$post['image']}}" alt="image">
                    </div>

                    <div class="post-content">
                        <!-- /Entry header -->
                        <header class="entry-header">
                            <!-- Entry meta -->
                            <div class="entry-meta entry-meta-top">
                                <span><a href="#" rel="category tag">UI</a></span>
                            </div>
                            <!-- /Entry meta -->

                            <h2 class="entry-title">{{$post['title']}}</h2>
                        </header>
                        <!-- /Entry header -->

                        <!-- Entry content -->
                        <div class="entry-content">
                            <div class="row">
                                <div class=" col-xs-12 col-sm-12 ">
                                    <div class="col-inner">
                                        {!! $post['content'] !!}
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /Entry content -->

                        <div class="entry-meta entry-meta-bottom">
                            <div class="date-author">
                      <span class="entry-date">
                        <a href="#" rel="bookmark">
                          <i class="far fa-clock"></i> <span class="entry-date"> {{$post['date']}}</span>
                        </a>
                      </span>
                                <span class="author vcard">
                        <a class="url fn n" href="#" rel="author"> <i class="fas fa-user"></i> LMPixels</a>
                      </span>
                            </div>

                            <!-- Share Buttons -->
                            <div class="entry-share btn-group share-buttons">
                                <a href="#" onclick="javascript:window.open(this.href, '', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=300,width=600');return false;" class="btn" target="_blank" title="Share on Facebook">
                                    <i class="fab fa-facebook-f"></i>
                                </a>

                                <a href="#" onclick="javascript:window.open(this.href, '', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=300,width=600');return false;" class="btn" target="_blank" title="Share on Twitter">
                                    <i class="fab fa-twitter"></i>
                                </a>

                                <a href="#" onclick="javascript:window.open(this.href,'', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=600,width=600');return false;" class="btn" title="Share on LinkedIn">
                                    <i class="fab fa-linkedin-in"></i>
                                </a>
                            </div>
                            <!-- /Share Buttons -->
                        </div>

{{--                        <div class="post-tags">--}}
{{--                            <div class="tags">--}}
{{--                                <a href="#" rel="tag">animate</a>--}}
{{--                                <a href="#" rel="tag">bar</a>--}}
{{--                                <a href="#" rel="tag">design</a>--}}
{{--                                <a href="#" rel="tag">progress</a>--}}
{{--                                <a href="#" rel="tag">ui</a>--}}
{{--                            </div>--}}
{{--                        </div>--}}
                    </div>
                </article>

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
<script src="js/jquery.min.js"></script>
<script src="js/modernizr.custom.js"></script>
<script src="js/animating.js"></script>

<script src="js/imagesloaded.pkgd.min.js"></script>
<script src='https://www.google.com/recaptcha/api.js'></script>

<script src='js/perfect-scrollbar.min.js'></script>
<script src='js/jquery.shuffle.min.js'></script>
<script src='js/masonry.pkgd.min.js'></script>
<script src='js/owl.carousel.min.js'></script>
<script src="js/jquery.magnific-popup.min.js"></script>

<script src="js/validator.js"></script>
<script src="js/main.js"></script>
</body>
</html>
