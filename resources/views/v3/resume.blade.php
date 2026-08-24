<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resume | Thodoris Kouleris - Software Engineer</title>
    <link rel="stylesheet" href="{{asset('v3/css/style.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
</head>
<body>
<div id="top-anchor"></div>
@include('v3.partials.menu')

<main>
    <div class="resume-nav">
        <a href="https://tkouleris.eu/cv/T.Kouleris.pdf" target="_blank" class="btn">Download CV</a>
        <a href="#work-experience" class="btn" style="font-size: 0.8rem;background-color: dimgray;border-color: red;">#work experience</a>
        <a href="#education" class="btn" style="font-size: 0.8rem;background-color: dimgray;border-color: red;">#education</a>
        <a href="#skills" class="btn" style="font-size: 0.8rem;background-color: dimgray;border-color: red;">#skills</a>
        <a href="#seminars" class="btn" style="font-size: 0.8rem;background-color: dimgray;border-color: red;">#seminars</a>
    </div>

    <h2 class="section-header" id="work-experience">
        Work Experience
        <a href="#top-anchor" class="back-to-top"><i class="fas fa-chevron-up"></i></a>
    </h2>
    <div class="experience-list">
        <div class="experience-item">
            <div class="experience-logo">
                <img src="{{asset('img/companies/agenso.jpg')}}" alt="Company Logo">
            </div>
            <div class="experience-details">
                <h4>Nov. 2020 - Today: Agenso</h4>
                <p>Software Engineer (PHP, Python, Vue)</p>
                <p class="experience-desc">PHP and Python back end developer, Vue front-end for IoT Systems</p>
            </div>
        </div>
        <div class="experience-item">
            <div class="experience-logo">
                <img src="{{asset('img/companies/peppercode.jpg')}}" alt="Company Logo">
            </div>
            <div class="experience-details">
                <h4>Sept. 2016 - Oct. 2020: Peppercode</h4>
                <p>Software Engineer (PHP)</p>
                <p class="experience-desc">PHP back end developer for Information Systems</p>
            </div>
        </div>
        <div class="experience-item">
            <div class="experience-logo">
                <img src="{{asset('img/companies/cocoon.webp')}}" alt="Company Logo">
            </div>
            <div class="experience-details">
                <h4>July 2009 - Jan. 2016: Cocoon Ecoclima</h4>
                <p>IT and Web developer</p>
                <p class="experience-desc">IT support, Web development, basic SEO and CCTV configuration</p>
            </div>
        </div>
        <div class="experience-item">
            <div class="experience-logo">
                <img src="{{asset('img/companies/delta.png')}}" alt="Company Logo">
            </div>
            <div class="experience-details">
                <h4>Feb. 2008 - Feb. 2009: Delta Vocational Training Institute</h4>
                <p>Tutor (Linux administration, Microprocessors, Databases, Networks, etc.)</p>
                <p class="experience-desc">Linux administration, Microprocessors programming, Databases, Computer networks, bash scripting, ECDL</p>
            </div>
        </div>
        <div class="experience-item">
            <div class="experience-logo">
                <img src="{{asset('img/companies/compuforce.jpg')}}" alt="Company Logo">
            </div>
            <div class="experience-details">
                <h4>Feb. 2007 - July 2007: Compuforce ltd</h4>
                <p>Tech Support</p>
                <p class="experience-desc">Installation and configuration of computer networking, Linux Servers, Symantec Firewalls, Zyxel Routers</p>
            </div>
        </div>
        <div class="experience-item">
            <div class="experience-logo">
                <img src="{{asset('img/companies/compuforce.jpg')}}" alt="Company Logo">
            </div>
            <div class="experience-details">
                <h4>Apr. 2005 - Oct 2005: Compuforce ltd</h4>
                <p>Tech Support</p>
                <p class="experience-desc">Installation and configuration of computer networking, Linux Servers, Symantec Firewalls, Zyxel Routers</p>
            </div>
        </div>
        <div class="experience-item">
            <div class="experience-logo">
                <img src="{{asset('img/companies/tei_lamias.jpg')}}" alt="Company Logo">
            </div>
            <div class="experience-details">
                <h4>March 2004 - Dec 2004: TEI of Lamia</h4>
                <p>Tech Support</p>
                <p class="experience-desc">Building and managing the lab's computer network</p>
            </div>
        </div>
    </div>

    <h2 class="section-header" id="education">
        Education
        <a href="#top-anchor" class="back-to-top"><i class="fas fa-chevron-up"></i></a>
    </h2>
    <div class="experience-list">
        <div class="experience-item">
            <div class="experience-logo">
                <img src="https://www.neolaia.gr/wp-content/uploads/2011/02/TEI-Lamias3.jpg" alt="TEI Lamias Logo">
            </div>
            <div class="experience-details">
                <h4>Technological Educational Institute of Lamia</h4>
                <p>Computer Science</p>
            </div>
        </div>
    </div>

    <h2 class="section-header" id="skills">
        Skills
        <a href="#top-anchor" class="back-to-top"><i class="fas fa-chevron-up"></i></a>
    </h2>
    <div class="info-block">
        <h4><i class="fas fa-code"></i> Programming Languages</h4>
        <p>PHP, Python, Java</p>
    </div>
    <div class="info-block">
        <h4><i class="fas fa-globe"></i> Web</h4>
        <p>HTML5, CSS3, Vue, JavaScript, Bootstrap, Jquery</p>
    </div>
    <div class="info-block">
        <h4><i class="fas fa-database"></i> Databases & Frameworks</h4>
        <p><strong>Databases:</strong> MySQL, MSSQL<br><strong>Frameworks:</strong> Laravel, Flask, Spring Boot</p>
    </div>
    <div class="info-block">
        <h4><i class="fas fa-mobile-alt"></i> Mobile</h4>
        <p>React Native</p>
    </div>
    <div class="info-block">
        <h4><i class="fas fa-book"></i> Knowledge</h4>
        <p>Windows, Linux, Design Patterns, OOP, Communication, Problem-Solving, Gimp</p>
    </div>

    <h2 class="section-header" id="seminars">
        Seminars
        <a href="#top-anchor" class="back-to-top"><i class="fas fa-chevron-up"></i></a>
    </h2>
    <div class="experience-list">
        <div class="experience-item">
            <div class="experience-logo">
                <img src="https://www.neolaia.gr/wp-content/uploads/2011/02/TEI-Lamias3.jpg" alt="Logo">
            </div>
            <div class="experience-details">
                <h4>CCTV over IP</h4>
                <p>Delta Vocational Training Institute (30 May 2008)</p>
            </div>
        </div>
        <div class="experience-item">
            <div class="experience-logo">
                <img src="https://www.neolaia.gr/wp-content/uploads/2011/02/TEI-Lamias3.jpg" alt="Logo">
            </div>
            <div class="experience-details">
                <h4>Linux O.S Management</h4>
                <p>Technological Educational Institute of Lamia (June 2002)</p>
            </div>
        </div>
        <div class="experience-item">
            <div class="experience-logo">
                <img src="https://www.neolaia.gr/wp-content/uploads/2011/02/TEI-Lamias3.jpg" alt="Logo">
            </div>
            <div class="experience-details">
                <h4>New Information Technologies</h4>
                <p>Technological Educational Institute of Lamia (October 2002)</p>
            </div>
        </div>
    </div>
</main>

@include('v3.partials.footer')

<script src="{{asset('v3/js/script.js')}}"></script>
</body>
</html>
