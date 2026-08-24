<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{$post['title']}} | Thodoris Kouleris - Software Engineer</title>
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
    <link rel="stylesheet" href="{{asset('v3/css/style.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <style>
        .post-content a {
            color: #e63946 !important;
        }
    </style>
</head>
<body>
@include('v3.partials.menu')

<main class="post-content">
    <div class="post-banner" style="background-image: url('{{$post['image']}}');"></div>
    <div class="post-header">
        <h1>{{$post['title']}}</h1>

        <p><b>Published on:</b> <a href="{{route('demo.blog.year',[$post['year']])}}">{{$post['date']}}</a></p>
        <p><b>Category:</b> <a href="{{route('demo.blog.tag',[$post['category']])}}">{{$post['category']}}</a></p>
        <hr/>
    </div>
    <div class="post-body">
        {!! $post['content'] !!}
    </div>
</main>

@include('v3.partials.footer')

<script src="{{asset('v3/js/script.js')}}"></script>
</body>
</html>
