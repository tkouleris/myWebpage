<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About | Thodoris Kouleris - Software Engineer</title>
    <link rel="stylesheet" href="{{asset('v3/css/style.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.3.1/css/all.min.css">
</head>
<body>
@include('v3.partials.menu')

<main>
    <div class="row about-profile-row">
        <div class="col about-profile-col">
            <img src="{{asset('img/main_photo.jpg')}}" alt="Thodoris Kouleris" class="profile-photo"
                 style="margin-bottom: 0;">
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
            <p>Hello there!! Welcome to my web site. Yes, this is another boring web site. I made it because I am a vain
                human who has little life out of computers. This page is about things that I like to do. Because this is
                a personal web site you may read a lot the word I. No, that doesn't mean that I am selfish. I really
                care about humanity and I help my neighbour. Now, if you are bored don't go on to read the rest of the
                site, you will be more bored</p>
        </div>
    </div>
    <div class="social-links">
        <ul>
            <li><a href="https://github.com/tkouleris" target="_blank"><i class="fab fa-github"></i></a></li>
            <li><a href="https://www.linkedin.com/in/tkouleris/" target="_blank"><i class="fab fa-linkedin-in"></i></a></li>
            <li><a href="https://x.com/tkouleris" target="_blank"><i class="fa-brands fa-x-twitter"></i></a></li>
            <li><a href="https://bsky.app/profile/tkouleris.eu" target="_blank"><i class="fab fa-bluesky"></i></a></li>
            <li><a href="https://www.facebook.com/kouleris" target="_blank"><i class="fab fa-facebook"></i></a></li>
        </ul>
    </div>
    <h2>What I Do</h2>
    <div class="row">


        <div class="col">
            <div class="info-block">
                <h4><i class="fas fa-coffee"></i> Free Time</h4>
                <p>At my free time, besides programming I love watching movies and TV shows, reading books, playing
                    video games and listen to music.</p>
            </div>
            <div class="info-block">
                <h4><i class="fas fa-code"></i> Programming</h4>
                <p>I like building web apps that may be helpful to others. I use PHP, Python or Java for the backend,
                    Vue for the front-end and React Native for the mobile versions of my apps.</p>
            </div>
        </div>
        <div class="col">

            <div class="info-block">
                <h4><i class="fas fa-laptop-code"></i> Computers</h4>
                <p><b>Athena:</b> This is my main computer. I spent a lot of time with it. It has 32GB of RAM, an Intel
                    Core i5-10600K at 4.1Gh and an RTX 3060 8GB. I used to have Linux installed but for the last 3 years
                    I switched to Win10.</p>

                <p><b>Mars:</b> This is my portable computer. It's a Huawei MateBook D16 16.1" IPS FHD with 16GB of RAM
                    and a Ryzen 5 4600H CPU. It's a good alternative for my main computer for mainly work. I have
                    installed Windows 11.</p>
            </div>
        </div>


    </div>
</main>


@include('v3.partials.footer')

<script src="{{asset('v3/js/script.js')}}"></script>
</body>
</html>
