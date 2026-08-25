<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog | Thodoris Kouleris - Software Engineer</title>
    <link rel="stylesheet" href="{{asset('v3/css/style.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
</head>
<body>
@include('v3.partials.menu')

<main>
    <h1>{{$year}}</h1>
    <div class="blog-grid">
        @foreach ($current_data as $post)
            <div class="blog-card">
                <img src="{{$post['image']}}" alt="Blog Post 1">
                <h3>{{$post['title']}}</h3>
                <p><small><a href="{{route('demo.blog.tag',[$post['category']])}}" target="_blank">{{$post['category']}}</a></small></p>
                <p><small><a href="{{route('demo.blog.year',[$post['year']])}}">{{$post['date']}}</a></small></p>
                <p>{{$post['description']}}</p>
                <a href="{{route('demo.blog.page',[$post['page']])}}">read more...</a>
            </div>
        @endforeach
    </div>
</main>

@include('v3.partials.footer')

<script src="{{asset('v3/js/script.js')}}"></script>
</body>
</html>
