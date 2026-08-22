<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thodoris Kouleris - Software Engineer</title>
    <link rel="stylesheet" href="{{asset('v3/css/style.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
</head>
<body>
@include('v3.partials.menu')

<main>
    <section id="home" class="home-section">
        <img src="{{asset('img/main_photo.jpg')}}" alt="Thodoris Kouleris" class="profile-photo">
        <h1 class="home-name">Thodoris Kouleris</h1>
        <h2 class="home-title">Software Engineer</h2>
        <div class="social-links">
            <ul>
                <li><a href="https://github.com/tkouleris" target="_blank"><i class="fab fa-github"></i></a></li>
                <li><a href="https://www.linkedin.com/in/tkouleris/" target="_blank"><i class="fab fa-linkedin-in"></i></a></li>
                <li><a href="https://x.com/tkouleris" target="_blank"><i class="fa-brands fa-x-twitter"></i></a></li>
                <li><a href="https://bsky.app/profile/tkouleris.eu" target="_blank"><i class="fab fa-bluesky"></i></a></li>
                <li><a href="https://www.facebook.com/kouleris" target="_blank"><i class="fab fa-facebook"></i></a></li>
            </ul>
        </div>
        <a href="https://tkouleris.eu/cv/T.Kouleris.pdf" target="_blank" class="btn">Download CV</a>
    </section>
</main>

@include('v3.partials.footer')

<script src="{{asset('v3/js/script.js')}}"></script>
</body>
</html>
