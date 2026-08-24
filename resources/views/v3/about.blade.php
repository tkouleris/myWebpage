<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About | Thodoris Kouleris - Software Engineer</title>
    <link rel="stylesheet" href="{{asset('v3/css/style.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
</head>
<body>
@include('v3.partials.menu')

<main>
    <div class="row about-profile-row">
        <div class="col about-profile-col">
            <img src="{{asset('img/main_photo.jpg')}}" alt="Thodoris Kouleris" class="profile-photo" style="margin-bottom: 0;">
        </div>
        <div class="col">
            <div class="about-info">
                <p><i class="fas fa-calendar-alt"></i> DOB: 1982/09/22</p>
                <p><i class="fas fa-map-marker-alt"></i> Residence: Greece</p>
                <p><i class="fas fa-envelope"></i> Email: tkouleris@gmail.com</p>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col">
            <p>Hello there!! Welcome to my web site. Yes, this is another boring web site. I made it because I am a vain human who has little life out of computers. This page is about things that I like to do. Because this is a personal web site you may read a lot the word I. No, that doesn't mean that I am selfish. I really care about humanity and I help my neighbour.</p>
        </div>
    </div>

    <h2>What I Do</h2>
    <div class="row">
        <div class="col">
            <div class="info-block">
                <h4><i class="fas fa-coffee"></i> Free Time</h4>
                <p>At my free time, besides programming I love watching movies and TV shows, reading books, playing video games and listen to music.</p>
            </div>
            <div class="info-block">
                <h4><i class="fas fa-laptop-code"></i> Computers</h4>
                <p>I spend a lot of time with my main computer and my portable computer for work and side projects.</p>
            </div>
        </div>
        <div class="col">
            <div class="info-block">
                <h4><i class="fas fa-code"></i> Programming</h4>
                <p>I like building web apps that may be helpful to others. I use PHP, Python or Java for the backend, Vue for the front-end and React Native for the mobile versions of my applications.</p>
            </div>
        </div>
    </div>
</main>


@include('v3.partials.footer')

<script src="{{asset('v3/js/script.js')}}"></script>
</body>
</html>
