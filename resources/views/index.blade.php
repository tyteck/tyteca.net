@extends('layout.app') @section('pageTitle', 'Once upon a dev')
@section('content')

<section id="main">
    @include ('layout.navbar')

    <!-- Page Content-->
    <div class="container-fluid p-0">
        <!-- About-->
        <section class="resume-section" id="about">
            <div class="resume-section-content">
                <h1 class="mb-0">
                    Frédérick
                    <span class="text-primary">Tyteca</span>
                </h1>
                <div class="subheading mb-5">
                    451 chemin de la prairie · 06790 Aspremont · (33) 6 81 57 58 56 ·
                    <a href="mailto:frederick@tyteca.net">frederick@tyteca.net</a>
                </div>
                <p class="lead mb-5">
                    Développeur PHP passionné, entrepreneur et père de famille nombreuse.<br />

                    J'ai derrière moi un long parcours de développeur/chef de projet/lead technique avec énormément de projets pour de grands comptes comme
                    Médiamétrie, Orange, Airbus, Gamespot tout en travaillant sur des projets plus personnels comme Podmytube.

                    Ce qui me motive ? Faire quelque chose d'utile tout en continuant d'apprendre et me former.
                    En cela mon métier est le meilleur métier du monde 😄️
                </p>
                <div class="social-icons">
                    <a class="social-icon" href="https://www.linkedin.com/in/ftyteca/?originalSubdomain=fr"><i class="fab fa-linkedin-in"></i></a>
                    <a class="social-icon" href="https://github.com/tyteck/"><i class="fab fa-github"></i></a>
                    <a class="social-icon" href="https://twitter.com/ftyteca"><i class="fab fa-twitter"></i></a>
                </div>
            </div>
        </section>
        <hr class="m-0" />
        <!-- Experience-->
        <section class="resume-section" id="experience">
            <div class="resume-section-content">
                <h2 class="mb-5">Expérience</h2>
                <div class="d-flex flex-column flex-md-row justify-content-between mb-5">
                    <div class="flex-grow-1">
                        <h3 class="mb-0">Senior Web Developer</h3>
                        <div class="subheading mb-3">Intelitec Solutions</div>
                        <p>Bring to the table win-win survival strategies to ensure proactive domination. At the end of the day, going forward, a new normal that has evolved from generation X is on the runway heading towards a streamlined cloud solution. User generated content in real-time will have multiple touchpoints for offshoring.</p>
                    </div>
                    <div class="flex-shrink-0"><span class="text-primary">March 2013 - Present</span></div>
                </div>
            </div>
        </section>
        <hr class="m-0" />
        <!-- Education-->
        <section class="resume-section" id="education">
            <div class="resume-section-content">
                <h2 class="mb-5">Education</h2>
                <div class="d-flex flex-column flex-md-row justify-content-between mb-5">
                    <div class="flex-grow-1">
                        <h3 class="mb-0">IUT de Nice-Sophia-antipolis</h3>
                        <div class="subheading mb-3">DUT informatique</div>
                    </div>
                    <div class="flex-shrink-0"><span class="text-primary">1997</span></div>
                </div>
            </div>
        </section>
        <hr class="m-0" />
        <!-- Skills-->
        <section class="resume-section" id="skills">
            <div class="resume-section-content">
                <h2 class="mb-5">Skills</h2>
                <div class="subheading mb-3">Programming Languages & Tools</div>
                <ul class="list-inline dev-icons">
                    <li class="list-inline-item"><i class="fab fa-laravel"></i></li>
                    <li class="list-inline-item"><i class="fab fa-php"></i></li>
                    <li class="list-inline-item"><i class="fab fa-docker"></i></li>

                    <li class="list-inline-item"><i class="fab fa-linux"></i></li>
                    <li class="list-inline-item"><i class="fab fa-git-alt"></i></li>
                    <li class="list-inline-item"><i class="fas fa-server"></i></li>
                    <li class="list-inline-item"><i class="fas fa-database"></i></li>

                    <li class="list-inline-item"><i class="fab fa-html5"></i></li>
                    <li class="list-inline-item"><i class="fab fa-css3-alt"></i></li>
                    <li class="list-inline-item"><i class="fab fa-js-square"></i></li>
                    <li class="list-inline-item"><i class="fab fa-sass"></i></li>
                </ul>
                <div class="subheading mb-3">Workflow</div>
                <ul class="fa-ul mb-0">
                    <li>
                        <span class="fa-li"><i class="fas fa-check"></i></span>
                        Analyse et questionnement du besoin client.
                    </li>
                    <li>
                        <span class="fa-li"><i class="fas fa-check"></i></span>
                        Développement dirigés par les tests (TDD).
                    </li>
                    <li>
                        <span class="fa-li"><i class="fas fa-check"></i></span>
                        Développement Agile (Scrum/Kanban).
                    </li>
                </ul>
            </div>
        </section>
        <hr class="m-0" />
        <!-- Interests-->
        <section class="resume-section" id="interests">
            <div class="resume-section-content">
                <h2 class="mb-5">Interests</h2>
                <p>Apart from being a web developer, I enjoy most of my time being outdoors. In the winter, I am an avid skier and novice ice climber. During the warmer months here in Colorado, I enjoy mountain biking, free climbing, and kayaking.</p>
                <p class="mb-0">When forced indoors, I follow a number of sci-fi and fantasy genre movies and television shows, I am an aspiring chef, and I spend a large amount of my free time exploring the latest technology advancements in the front-end web development world.</p>
            </div>
        </section>
        <hr class="m-0" />
        <!-- Awards-->
        <section class="resume-section" id="awards">
            <div class="resume-section-content">
                <h2 class="mb-5">Awards & Certifications</h2>
                <ul class="fa-ul mb-0">
                    <li>
                        <span class="fa-li"><i class="fas fa-trophy text-warning"></i></span>
                        Google Analytics Certified Developer
                    </li>
                    <li>
                        <span class="fa-li"><i class="fas fa-trophy text-warning"></i></span>
                        Mobile Web Specialist - Google Certification
                    </li>
                    <li>
                        <span class="fa-li"><i class="fas fa-trophy text-warning"></i></span>
                        1
                        <sup>st</sup>
                        Place - University of Colorado Boulder - Emerging Tech Competition 2009
                    </li>
                    <li>
                        <span class="fa-li"><i class="fas fa-trophy text-warning"></i></span>
                        1
                        <sup>st</sup>
                        Place - University of Colorado Boulder - Adobe Creative Jam 2008 (UI Design Category)
                    </li>
                    <li>
                        <span class="fa-li"><i class="fas fa-trophy text-warning"></i></span>
                        2
                        <sup>nd</sup>
                        Place - University of Colorado Boulder - Emerging Tech Competition 2008
                    </li>
                    <li>
                        <span class="fa-li"><i class="fas fa-trophy text-warning"></i></span>
                        1
                        <sup>st</sup>
                        Place - James Buchanan High School - Hackathon 2006
                    </li>
                    <li>
                        <span class="fa-li"><i class="fas fa-trophy text-warning"></i></span>
                        3
                        <sup>rd</sup>
                        Place - James Buchanan High School - Hackathon 2005
                    </li>
                </ul>
            </div>
        </section>
    </div>

</section>
@endsection