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

            @include('partials.menu', ['is_main'=>false])

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
                <!-- Blog Subpage -->
                <section data-id="blog" class="animated-section">
                    <div class="section-content">
                        <div class="page-title">
                            <h2>Blog</h2>
                        </div>

                        <div class="row">
                            <div class="col-xs-12 col-sm-12">
                                <div class="blog-masonry two-columns clearfix">
                                    <h3>Tags</h3>
                                    <div>
                                        @foreach($tags as $tag)
                                            <div style="background: #3F3F3F;
                                                        float:left;
                                                        margin-right: 5px;
                                                        margin-bottom: 5px;
                                                        padding-right: 5px;
                                                        padding-left: 5px;"
                                            >
                                                <a href="{{route('blog.tag', ['tag'=>$tag])}}">{{$tag}}</a>
                                            </div>
                                        @endforeach
                                    </div>
                                </div>
                                    <div class="blog-masonry two-columns clearfix">
                                    <h3>Years</h3>
                                    <div>
                                        @foreach($years as $year)
                                            <div style="background: #3F3F3F;
                                                        float:left;
                                                        margin-right: 5px;
                                                        margin-bottom: 5px;
                                                        padding-right: 5px;
                                                        padding-left: 5px;"
                                            >
                                                <a href="{{route('blog.tag', ['tag'=>$year])}}">{{$year}}</a>
                                            </div>
                                        @endforeach
                                    </div>


                                </div>
                            </div>
                        </div>
                    </div>


                </section>
                <!-- End of Blog Subpage -->

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
{{--@include('partials.javascript')--}}
</body>
</html>
