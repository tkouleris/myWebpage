<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Projects | Thodoris Kouleris - Software Engineer</title>
    <link rel="stylesheet" href="{{asset('v3/css/style.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
</head>
<body>
@include('v3.partials.menu')

<main>

    <div class="portfolio-grid">
        <div class="portfolio-card" id="weather-app">
            <div class="portfolio-card-body">
                <div class="portfolio-icon"><img src="{{asset('img/portfolio/weather_app.webp')}}" alt="Project 1"></div>
                <div class="portfolio-text">
                    <h3>Weather App</h3>
                    <p>Weather Forecast (Greece) - A Flask app that uses OpenWeatherMap to get forecasts and show it in a web page</p>
                </div>
            </div>
            <div class="portfolio-card-footer">
                <a href="https://github.com/tkouleris/weatherpy"  target="_blank"><i class="fab fa-github"></i> GitHub</a>
                <a href="https://weather.tkouleris.eu/" target="_blank"><i class="fas fa-external-link-alt"></i> Live</a>
            </div>
        </div>

        <div class="portfolio-card" id="pharmacy-api">
            <div class="portfolio-card-body">
                <div class="portfolio-icon"><img src="{{asset('img/portfolio/pharmacy_api.webp')}}" alt="Pharmacy API"></div>
                <div class="portfolio-text">
                    <h3>Pharmacy API</h3>
                    <p>A url that returns in json format the overnight pharmacies in Attica</p>
                </div>
            </div>
            <div class="portfolio-card-footer">
                <a href="https://github.com/tkouleris/pharmacy_api" target="_blank"><i class="fab fa-github"></i> GitHub</a>
                <a href="https://pharmacy.tkouleris.eu/" target="_blank"><i class="fas fa-external-link-alt"></i> Live</a>
            </div>
        </div>

        <div class="portfolio-card" id="pharmacy-android-app">
            <div class="portfolio-card-body">
                <div class="portfolio-icon"><img src="{{asset('img/portfolio/pharmacy_android_app.webp')}}" alt="Project 3"></div>
                <div class="portfolio-text">
                    <h3>Pharmacy Android App</h3>
                    <p>Uses the Pharmacy API to display the overnight pharmacies in Attica in an android app</p>
                </div>
            </div>
            <div class="portfolio-card-footer">
                <a href="https://github.com/tkouleris/pharmacy_mobile" target="_blank"><i class="fab fa-github"></i> GitHub</a>
                <a href="https://tkouleris.eu/apps/pharmacy_v1.apk" target="_blank"><i class="fas fa-external-link-alt"></i> Live</a>
            </div>
        </div>

        <div class="portfolio-card" id="trivia-web-app">
            <div class="portfolio-card-body">
                <div class="portfolio-icon"><img src="{{asset('img/portfolio/trivia_web_app.webp')}}" alt="Trivia Web App"></div>
                <div class="portfolio-text">
                    <h3>Trivia Web App</h3>
                    <p>A modern, responsive trivia game built with React and Vite. This application allows users to register, log in, and challenge themselves with various trivia questions fetched from a backend API.</p>
                </div>
            </div>
            <div class="portfolio-card-footer">
                <a href="https://github.com/tkouleris/trivia_app_web" target="_blank"><i class="fab fa-github"></i> GitHub</a>
                <a href="https://trivia.tkouleris.eu/" target="_blank"><i class="fas fa-external-link-alt"></i> Live</a>
            </div>
        </div>

        <div class="portfolio-card" id="star-fighter-game">
            <div class="portfolio-card-body">
                <div class="portfolio-icon"><img src="{{asset('img/portfolio/starfighter.webp')}}" alt="Star Fighter Game"></div>
                <div class="portfolio-text">
                    <h3>Star Fighter (Game)</h3>
                    <p>A simple shmup that every level increases the number of enemies on the screen</p>
                </div>
            </div>
            <div class="portfolio-card-footer">
                <a href="https://github.com/tkouleris/starfighter" target="_blank"><i class="fab fa-github"></i> GitHub</a>
                <a href="https://tkouleris.eu/apps/starfighter.zip" target="_blank"><i class="fas fa-external-link-alt"></i> Live</a>
            </div>
        </div>

        <div class="portfolio-card" id="devs-wage-prediction">
            <div class="portfolio-card-body">
                <div class="portfolio-icon"><img src="{{asset('img/portfolio/wage.webp')}}" alt="Devs Wage Prediction (Greek)"></div>
                <div class="portfolio-text">
                    <h3>Devs Wage Prediction (Greek)</h3>
                    <p>A simple shmup that every level increases the number of enemies on the screen</p>
                </div>
            </div>
            <div class="portfolio-card-footer">
                <a href="https://github.com/tkouleris/wage_calculator" target="_blank"><i class="fab fa-github"></i> GitHub</a>
                <a href="https://wage.tkouleris.eu/" target="_blank"><i class="fas fa-external-link-alt"></i> Live</a>
            </div>
        </div>



    </div>
</main>

@include('v3.partials.footer')

<script src="{{asset('v3/js/script.js')}}"></script>
</body>
</html>
