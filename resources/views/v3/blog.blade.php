<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog | Software Engineer Portfolio</title>
    <link rel="stylesheet" href="{{asset('v3/css/style.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
</head>
<body>
@include('v3.partials.menu')

<main>
    <h1>Blog</h1>
    <div class="blog-grid">
        @foreach ($current_data as $post)
            <div class="blog-card">
                <img src="{{$post['image']}}" alt="Blog Post 1">
                <h3>{{$post['title']}}</h3>
                <small>{{$post['category']}}</small>
                <p>{{$post['date']}}</p>
                <a href="{{$post['url']}}">Read More</a>
            </div>
        @endforeach
{{--        <div class="blog-card">--}}
{{--            <img src="https://via.placeholder.com/300x150" alt="Blog Post 1">--}}
{{--            <h3>Post Title 1</h3>--}}
{{--            <p>Short excerpt about the post goes here...</p>--}}
{{--            <a href="post-template.html">Read More</a>--}}
{{--        </div>--}}
{{--        <div class="blog-card">--}}
{{--            <img src="https://via.placeholder.com/300x150" alt="Blog Post 2">--}}
{{--            <h3>Post Title 2</h3>--}}
{{--            <p>Short excerpt about the post goes here...</p>--}}
{{--            <a href="post-template.html">Read More</a>--}}
{{--        </div>--}}
    </div>
</main>

@include('v3.partials.footer')

<script src="{{asset('v3/js/script.js')}}"></script>
</body>
</html>
