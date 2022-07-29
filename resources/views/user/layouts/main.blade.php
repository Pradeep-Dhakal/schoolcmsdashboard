<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Prarambha World School</title>


    {{-- links --}}

    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
        href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&display=swap"
        rel="stylesheet" />

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('css/bootstrap.min.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('font-awesome/css/all.min.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('css/owl.carousel.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('css/owl.theme.default.min.css') }}" />
    <link rel="stylesheet" type="text/css"
        href="{{ URL::asset('material-design/css/material-design-iconic-font.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('css/hs-menu.min.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('css/animate.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('css/custom.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('css/admission.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('css/responsive.css') }}" />
    <link rel="stylesheet" href="{{ URL::asset('css/fancybox.css') }}" />

</head>

<body>
    {{-- header --}}
    <div class="app">
        <header>
            <div id="mainMenu">
                <nav class="navbar navbar-expand-lg">
                    <a class="navbar-brand" href="index.html">
                        <img src="img/pwa-1.png" />
                    </a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse"
                        data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation">
                        <span class=""><i class="fas fa-bars"></i></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav mx-auto">
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown" href="/"> Home </a>
                                <span class="nav-underline"></span>
                            </li>
                            <li class="nav-item dropdown service-nav">
                                <a class="nav-link dropdown dropdown-toggle" data-toggle="dropdown" href="#">
                                    About
                                </a>


                                <div class="dropdown-menu">
                                    @php

                                        $about = DB::table('abouts')->select('*')->OrderBy('title','asc')->get();

                                    @endphp
                                    @if ($about)
                                        @foreach ($about as $about)
                                            <a class="dropdown-item"
                                                href="{{ url('about/'.$about->title) }}">{{ $about->title }}</a>
                                        @endforeach
                                    @endif
                                </div>
                                <span class="nav-underline"></span>
                            </li>
                            <li class="nav-item dropdown service-nav">
                                <a class="nav-link dropdown dropdown-toggle" data-toggle="dropdown" href="#">
                                    Courses
                                </a>
                                <div class="dropdown-menu">
                                    <a class="dropdown-item" href="{{ route('course-information') }}">Course
                                        Information</a>
                                    <a class="dropdown-item" href="{{ route('course-curriculm') }}">Curriculum</a>
                                    <a class="dropdown-item"
                                        href="{{ route('course-developmentprogram') }}">Intellectual
                                        Development Program</a>

                                    <a class="dropdown-item" href="{{ route('course-preprationprogram') }}">Study
                                        Preparation Program</a>
                                    <a class="dropdown-item" href="{{ route('course-sportsprogram') }}">Sports
                                        Program</a>
                                    <a class="dropdown-item"
                                        href="{{ route('course-enrichmentprogram') }}">Enrichment
                                        Program</a>
                                </div>
                                <span class="nav-underline"></span>
                            </li>
                            <li class="nav-item dropdown service-nav">
                                <a class="nav-link dropdown dropdown-toggle" data-toggle="dropdown" href="#">
                                    School
                                </a>
                                <div class="dropdown-menu">
                                    <a class="dropdown-item"
                                        href="{{ route('school_kindergarten') }}">Kindergarten</a>
                                    <a class="dropdown-item" href="{{ route('school_elementary') }}">Elementary</a>
                                    <a class="dropdown-item" href="{{ route('school_secondary') }}">Secondary</a>
                                    <a class="dropdown-item" href="{{ route('school_highersecondary') }}">Higher
                                        Secondary</a>
                                    <a class="dropdown-item" href="{{ route('school_gallery') }}">Gallery</a>
                                </div>
                                <span class="nav-underline"></span>
                            </li>
                            <li class="nav-item dropdown service-nav">
                                <a class="nav-link dropdown dropdown-toggle" data-toggle="dropdown" href="#">
                                    Admissions
                                </a>
                                <div class="dropdown-menu">
                                    <a class="dropdown-item" href="overview.html">Overview</a>
                                    <a class="dropdown-item" href="schoolfee.html">School Fees</a>
                                    <a class="dropdown-item" href="regulation.html">Regulations</a>
                                    <a class="dropdown-item" href="registeronline.html">Register Online</a>
                                    <a class="dropdown-item" href="contact.html">Contact Registration</a>
                                </div>
                                <span class="nav-underline"></span>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown" href="contact.html"> Contact Us </a>

                                <span class="nav-underline"></span>
                            </li>
                        </ul>
                        <div class="nav-buttons">
                            <div id="rightNavItems" class="float-right d-flex flex-row">
                                <a title="Facebook" data-toggle="tooltip" data-placement="bottom" id="itemFb"
                                    class="btn btn-sm border-primary rounded-full">
                                    <i class="fab fa-facebook-f"></i>
                                </a>
                                <a title="Instagram" data-toggle="tooltip" data-placement="bottom" id="itemInsta"
                                    class="btn btn-sm mx-2 rounded-full">
                                    <i class="fab fa-instagram"></i>
                                </a>
                                <a title="Mail us" data-toggle="tooltip" data-placement="bottom" id="itemMail"
                                    href="mailto:" class="btn btn-sm border-success">
                                    <i class="fa fa-envelope"></i>
                                </a>
                            </div>
                            <div class="login-button">
                                <a href="javascript:" class="nav-login">LOGIN</a>
                            </div>
                            <div class="calendar-button">
                                <a href="javascraipt:"><i class="fas fa-calendar-alt"></i></a>
                            </div>
                        </div>
                    </div>
                </nav>
            </div>

            <div id="stickyContactInfo">
                <div class="tab mx-1">
                    <span><i class="fa fa-check-circle"></i></span>
                    <span><a href="registeronline.html">Apply Now</a></span>
                </div>
                <div class="tab">
                    <span><i class="fa fa-phone"></i></span>
                    <span><a href="tel:+97701-4025802">01-4025802</a></span>
                </div>
            </div>
        </header>

    @yield('main-content')

        {{-- ======================================================= --}}
        {{-- footer --}}

        <footer>
            <div class="pre-footer">
                <div class="container">
                    <div class="row">
                        <div class="col-md-3 footer-1st">
                            <div class="footer-name">
                                <a class="footer-logo" href="index.html">
                                    <img src="img/pwa-1.png" />
                                </a>
                            </div>
                            <div class="footer-list">
                                <i class="fa fa-map-marker-alt"></i>
                                Tarakeshwor 8, Shanti Tole, Nepaltar
                            </div>
                            <div class="footer-list">
                                <i class="fa fa-phone"></i>
                                +977-01-4025802
                            </div>
                            <div class="footer-list">
                                <i class="fa fa-envelope"></i>
                                info@prarambhaworld.edu.np
                            </div>
                            <div class="footer-social">
                                <a href="#" target="_blank">
                                    <i class="fab fa-facebook-f"></i>
                                </a>
                                <a href="#" target="_blank">
                                    <i class="fab fa-instagram"></i>
                                </a>
                                <a href="#" target="_blank">
                                    <i class="fab fa-youtube"></i>
                                </a>
                            </div>
                        </div>
                        <div class="col-md-3 footer-2nd">
                            <div class="footer-title">Quick Links</div>
                            <div class="footer-bar"></div>
                            <div class="footer-desc">
                                <ul style="padding: 0; list-style: none; margin-bottom: 0">
                                    <li><a href="#">About PWS</a></li>
                                    <li><a href="#">Calender</a></li>
                                    <li><a href="#">Events</a></li>
                                    <li><a href="#">News</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-3 footer-3rd">
                            <div class="footer-title">Our School</div>
                            <div class="footer-bar"></div>
                            <div class="footer-desc">
                                <ul style="padding: 0; list-style: none; margin-bottom: 0">
                                    <li><a href="#">Kindergarten</a></li>
                                    <li><a href="#">Elementary</a></li>
                                    <li><a href="#">Secondary</a></li>
                                    <li><a href="#">Higher Secondary</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-3 footer-4th">
                            <div class="footer-title">Contact Us</div>
                            <div class="footer-bar"></div>
                            <div class="footer-form">
                                <form id="footerContactForm">
                                    <input type="text" name="your-name" placeholder="Your Name" />
                                    <input type="email" name="email-address" placeholder="Email Address" />
                                    <textarea rows="3" placeholder="Message"></textarea>
                                    <button class="footer-btn" type="submit">SEND</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="copyright">
                <div class="container">
                    <div class="copyright-block">
                        <div class="copyright-text">
                            Copyright © <span id="dateHolder"></span> Prarambha School.
                            Developed by
                            <a href="#">IT Arrow Pvt Ltd.</a>
                        </div>
                        <div class="footer-linksection">
                            <a class="footer-link" href="#">Home</a>
                            <a class="footer-link" href="#">About</a>
                            <a class="footer-link" href="#">Help</a>
                            <a class="footer-link" href="#">Personal Data Protection</a>
                            <a id="back-to-top" href="#" class="back-to-top"><i class="fa fa-arrow-up"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <div id="floating-social">
            <a class="floating-link" href="viber://chat?number=977981234567" data-toggle="tooltip"
                data-placement="top" title="9812345677">
                <i class="fab fa-viber"></i>
            </a>
            <a class="floating-link" href="https://api.whatsapp.com/send?phone=977981234567" target="_blank"
                data-toggle="tooltip" data-placement="top" title="98123456655">
                <i class="fab fa-whatsapp"></i>
            </a>
        </div>
    </div>




    {{-- ========================================================= --}}


    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/@fancyapps/ui@4.0/dist/fancybox.umd.js"></script>
    <script type="text/javascript" src="{{ asset('js/owl.carousel.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/jquery.hsmenu.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/wow.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/main.js') }}"></script>
    <script>
        document.getElementById("dateHolder").innerHTML =
            new Date().getFullYear();
    </script>
</body>

</html>
