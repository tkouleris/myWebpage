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


                                    <!-- Οι πιο συχνοί κωδικοί πρόσβασης -->
                                    {{--                                    <div class="item post-1">--}}
                                        {{--                                        <div class="blog-card">--}}
                                            {{--                                            <div class="media-block">--}}
                                                {{--                                                <div class="category">--}}
                                                    {{--                                                    <a href="#" title="Misc">Misc</a>--}}
                                                    {{--                                                </div>--}}
                                                {{--                                                <a target=”_blank” href="https://blog.tkouleris.eu/2024/04/blog-post.html">--}}
                                                    {{--                                                    <img src="https://blogger.googleusercontent.com/img/b/R29vZ2xl/AVvXsEj6U7dww-meHcqOxR8e9LKvrsLfCgF7-xR5kWq6knwonFUxUtx4B1eoWnGlDcvGZEyUY1561P5eYNTaLeZ-kmhM1YPlZo1eopbFM3yu0pLvSBdk_wd7oN00-vqUhY_vxKsOKKm3rSw60Wo-3tjK-OCaKDBCxxRwdD-25OH2xw6ME_xoNrdPdC6qnUAEZ4RG/w590-h334/imposter.jpg"--}}
                                                                                                                 {{--                                                         class="size-blog-masonry-image-two-c"--}}
                                                                                                                 {{--                                                         alt="Οι πιο συχνοί κωδικοί πρόσβασης" title="Οι πιο συχνοί κωδικοί πρόσβασης"/>--}}
                                                    {{--                                                    <div class="mask"></div>--}}
                                                    {{--                                                </a>--}}
                                                {{--                                            </div>--}}
                                            {{--                                            <div class="post-info">--}}
                                                {{--                                                <div class="post-date">12 Apr. 2024</div>--}}
                                                {{--                                                <a target=”_blank” href="https://blog.tkouleris.eu/2024/04/blog-post.html">--}}
                                                    {{--                                                    <h4 class="blog-item-title">Οι πιο συχνοί κωδικοί πρόσβασης</h4>--}}
                                                    {{--                                                </a>--}}
                                                {{--                                            </div>--}}
                                            {{--                                        </div>--}}
                                        {{--                                    </div>--}}

                                    <!-- Ο εθισμός στους υπολογιστές....το 1980 -->
                                    {{--                                    <div class="item post-1">--}}
                                        {{--                                        <div class="blog-card">--}}
                                            {{--                                            <div class="media-block">--}}
                                                {{--                                                <div class="category">--}}
                                                    {{--                                                    <a href="#" title="Hardware">Misc</a>--}}
                                                    {{--                                                </div>--}}
                                                {{--                                                <a target=”_blank” href="https://blog.tkouleris.eu/2024/04/1980.html">--}}
                                                    {{--                                                    <img src="https://blogger.googleusercontent.com/img/b/R29vZ2xl/AVvXsEi6Q5mnwyuiHFISD11DJyDOaY6G7zB0vSHFY0Avgjv9slKKIXceZUAJLzm2grjBV_Zl-a1Wg3cP3KYZGrGUssFvBSWQv7ohBuYpdAYIUYInFeN-zjbxWVl9GQBWalc1gq4CuHLoU-7-GJsUmQVL0l_JmL3T63WQkf0W_cY-nT-nRAubzshnFTMGJQ6JTfdB/w586-h331/29f8095c-28ac-4d00-8c50-587425dc4b35.png"--}}
                                                                                                                 {{--                                                         class="size-blog-masonry-image-two-c"--}}
                                                                                                                 {{--                                                         alt="Ο εθισμός στους υπολογιστές....το 1980" title="Ο εθισμός στους υπολογιστές....το 1980"/>--}}
                                                    {{--                                                    <div class="mask"></div>--}}
                                                    {{--                                                </a>--}}
                                                {{--                                            </div>--}}
                                            {{--                                            <div class="post-info">--}}
                                                {{--                                                <div class="post-date">19 Apr. 2024</div>--}}
                                                {{--                                                <a target=”_blank” href="https://blog.tkouleris.eu/2024/04/1980.html">--}}
                                                    {{--                                                    <h4 class="blog-item-title">Ο εθισμός στους υπολογιστές....το 1980</h4>--}}
                                                    {{--                                                </a>--}}
                                                {{--                                            </div>--}}
                                            {{--                                        </div>--}}
                                        {{--                                    </div>--}}


                                    <!-- Πέντε (5) βιβλία που μου άλλαξαν τη ζωή -->
                                    {{--                                    <div class="item post-1">--}}
                                        {{--                                        <div class="blog-card">--}}
                                            {{--                                            <div class="media-block">--}}
                                                {{--                                                <div class="category">--}}
                                                    {{--                                                    <a href="#" title="Misc">Misc</a>--}}
                                                    {{--                                                </div>--}}
                                                {{--                                                <a target=”_blank” href="https://blog.tkouleris.eu/2024/04/5.html">--}}
                                                    {{--                                                    <img src="https://blogger.googleusercontent.com/img/b/R29vZ2xl/AVvXsEj_dX4AkOx0g3yJdL1XXks6blDhEh0a81WwPLrykpciX_j-QxBMKhnKUYkT1XpTMXUHIIDLmvVbMOHd5JL5Ol6uDBRIsUbfcb-mXAo78WrqnhSuARlS7lJnfafV1gyEzOL1dPBdyObuDCQYyPCXAGruKIyUhzvbA5Fu-MMM0sYlne9Mlxl_Bj9wRlQpoqfC/w593-h336/d76a9a29-27cd-4921-9b84-2a5de05ddc97.png"--}}
                                                                                                                 {{--                                                         class="size-blog-masonry-image-two-c"--}}
                                                                                                                 {{--                                                         alt="Πέντε (5) βιβλία που μου άλλαξαν τη ζωή" title="Πέντε (5) βιβλία που μου άλλαξαν τη ζωή"/>--}}
                                                    {{--                                                    <div class="mask"></div>--}}
                                                    {{--                                                </a>--}}
                                                {{--                                            </div>--}}
                                            {{--                                            <div class="post-info">--}}
                                                {{--                                                <div class="post-date">05 Apr. 2024</div>--}}
                                                {{--                                                <a target=”_blank” href="https://blog.tkouleris.eu/2024/04/5.html">--}}
                                                    {{--                                                    <h4 class="blog-item-title">Πέντε (5) βιβλία που μου άλλαξαν τη ζωή</h4>--}}
                                                    {{--                                                </a>--}}
                                                {{--                                            </div>--}}
                                            {{--                                        </div>--}}
                                        {{--                                    </div>--}}

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
