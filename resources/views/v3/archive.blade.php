<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog - Archive| Thodoris Kouleris - Software Engineer</title>
    <link rel="stylesheet" href="{{asset('v3/css/style.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
</head>
<body>
@include('v3.partials.menu')

<main>
    <h1>Blog - Archive</h1>
    <div>
        <div style="width: 100%;margin-bottom: 10px;">
            <h3>Tags</h3>
            @foreach($tags as $tag)
                <a style="color: white;" href="{{route('demo.blog.tag', ['tag'=>$tag])}}">{{$tag}}</a>
            @endforeach
        </div>
        <hr/>
        <div style="width: 100%;margin-top: 10px;">
            <h3>Years</h3>
            @foreach($years as $year)
                <a style="color: white;" href="{{route('demo.blog.year', ['year'=>$year])}}">{{$year}}</a>
            @endforeach
        </div>
    </div>
</main>

@include('v3.partials.footer')

<script src="{{asset('v3/js/script.js')}}"></script>
</body>
</html>
