<!DOCTYPE html>
<html lang="en" class="no-js">
<head>
    <meta charset="UTF-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Thodoris Kouleris - {{$post['title']}}</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1"/>
    <meta name="description" content="{{$post['description']}}"/>
    <meta name="keywords" content="{{$post['keywords']}}"/>
    <meta name="author" content="lmpixels"/>
    <meta property="og:image" itemprop="image" content="{{$post['image']}}"/>
    <meta property="og:title" content="{{$post['title']}}" />
    <meta property="og:description" content="{{$post['description']}}" />
    <meta property="og:url" content="{{$post['url']}}" />
    <meta property="og:image" content="{{$post['image']}}" />
    <meta property="og:type" content="article" />
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

            @include('partials.menu', ['is_main' => false])

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
                                <span><a href="{{route('blog.tag', ['tag'=>$post['category']])}}#blog" rel="category tag">{{$post['category']}}</a></span>
                                    <br/>
                                    <span>(click to check posts of this category)</span>

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
                        <a class="url fn n" href="#" rel="author"> <i class="fas fa-user"></i> tkouleris</a>
                      </span>
                            </div>

                            <!-- Share Buttons -->
                            <div class="entry-share btn-group share-buttons">
                                <a href="https://www.facebook.com/sharer/sharer.php?u=tkouleris.eu/blog/{{$post['page']}}" target="_blank">
                                    <i class="fab fa-facebook-f"></i>
                                </a>

                                <a href="https://twitter.com/intent/tweet?text={{$post['title']}}&url=https://tkouleris.eu/blog/{{$post['page']}}" target="_blank">
                                    <i class="fab fa-twitter"></i>
                                </a>

{{--                                <a href="#" onclick="javascript:window.open(this.href,'', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=600,width=600');return false;" class="btn" title="Share on LinkedIn">--}}
{{--                                    <i class="fab fa-linkedin-in"></i>--}}
{{--                                </a>--}}
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
<!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-ZK76RSLQKJ"></script>
<script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'G-ZK76RSLQKJ');
</script>
@include('partials.javascript')
</body>
</html>
