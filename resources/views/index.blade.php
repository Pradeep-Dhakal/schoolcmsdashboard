@extends('user.layouts.main')
@section('main-content')
    <div id="app">
        <div class="main-body">
            <section id="homeSliderSection">
                <div class="owl-carousel owl-theme" id="homeSlider">
                    <div class="item">
                        <div class="slider-block" style="background-image: url(img/s1.jpg)">
                            <div class="slider-overlay"></div>
                            <div class="slider-txt">
                                <div class="slider-caption">
                                    Every master was once a beginner
                                </div>
                                <div class="slider-desc">
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit
                                </div>
                                <!-- <a href="contact.html" class="learnmorebtn">Learn More</a> -->
                                <a href="About PWS.html" class="slider-btn">Learn more</a>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="slider-block" style="background-image: url(img/s2.jpg)">
                            <div class="slider-overlay"></div>
                            <div class="slider-txt">
                                <div class="slider-caption">Slider Caption 2</div>
                                <div class="slider-desc">
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit
                                </div>
                                <a href="About PWS.html" class="slider-btn">Learn more</a>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="slider-block" style="background-image: url(img/s4.jpg)">
                            <div class="slider-overlay"></div>
                            <div class="slider-txt">
                                <div class="slider-caption">Slider Caption 3</div>
                                <div class="slider-desc">
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit
                                </div>
                                <a href="javascript:" class="slider-btn">Learn more</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="slider-down-arrow">
                    <a href="#homeAbout" class="slider-down">
                        <i class="fa fa-chevron-down"></i>
                    </a>
                </div>
            </section>

            <section id="homeAbout">
                <div class="container">
                    <div class="header-about">
                        <h1 class="large label">About Us</h1>
                        <div class="title-bar"></div>
                    </div>
                    <div class="row align-items-center">
                        <div class="home-abt-title wow fadeInLeft delay-0.5s ease animated">
                            <div class="col-lg-6 col-md-6">
                                <div class="index-about-image">
                                    <img src="img/university2.jpg" class="rounded">
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6">
                            <div class="home-abt-text wow fadeInRight delay-0.5s ease animated">
                                <p>
                                    The Prarambha School has been providing a modern education
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit,
                                    sed do eiusmod tempor incididunt.
                                </p>
                                <a href="javascript:" class="link-btn large-btn">Learn more about us</a>
                            </div>
                        </div>

                    </div>
                </div>
            </section>
            <section id="homeWhyUs">
                <div class="container-fluid">
                    <div class="header text-center">
                        <h1 class="font-weight-normal">
                            Why
                            <span class="font-weight-bold text-success">Prarambha World School
                            </span>
                            ?
                        </h1>
                        <p class="mx-auto">
                            Lorem ipsum dolor, sit amet consectetur adipisicing elit. Itaque
                            molestiae cumque accusamus sed? Consequuntur eaque maiores autem
                            vol
                        </p>
                    </div>

                    <div class="row row row-cols-1 row-cols-lg-3 g-4 p-4">
                        <div id="featureItems" class="col d-flex flex-column align-items-center justify-content-center">
                            <div>
                                <svg xmlns="http://www.w3.org/2000/svg" class="text-success rounded-circle p-4"
                                    style="background-color: #ececec" width="100" height="100" viewBox="0 0 24 24"
                                    stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round"
                                    stroke-linejoin="round">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                    <path d="M3 19a9 9 0 0 1 9 0a9 9 0 0 1 9 0"></path>
                                    <path d="M3 6a9 9 0 0 1 9 0a9 9 0 0 1 9 0"></path>
                                    <line x1="3" y1="6" x2="3" y2="19"></line>
                                    <line x1="12" y1="6" x2="12" y2="19"></line>
                                    <line x1="21" y1="6" x2="21" y2="19"></line>
                                </svg>
                            </div>
                            <span class="font-weight-bold">Library</span>
                        </div>
                        <div id="featureItems" class="col d-flex flex-column align-items-center justify-content-center">
                            <div>
                                <svg xmlns="http://www.w3.org/2000/svg" class="text-success rounded-circle p-4"
                                    style="background-color: #ececec" width="100" height="100" viewBox="0 0 24 24"
                                    stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round"
                                    stroke-linejoin="round">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                    <path d="M3 19h18"></path>
                                    <path d="M3 11h18a8 8 0 0 1 -8 8h-2a8 8 0 0 1 -8 -8z"></path>
                                    <path d="M9 8v-3"></path>
                                    <path d="M12 5v3"></path>
                                    <path d="M15 5v3"></path>
                                </svg>
                            </div>
                            <span class="font-weight-bold">Canteen</span>
                        </div>
                        <div id="featureItems" class="col d-flex flex-column align-items-center justify-content-center">
                            <div>
                                <svg xmlns="http://www.w3.org/2000/svg" class="text-success rounded-circle p-4" width="100"
                                    height="100" style="background-color: #ececec" viewBox="0 0 24 24" stroke-width="2"
                                    stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                    <polyline points="5 12 3 12 12 3 21 12 19 12"></polyline>
                                    <path d="M5 12v7a2 2 0 0 0 2 2h10a2 2 0 0 0 2 -2v-7"></path>
                                    <rect x="10" y="12" width="4" height="4"></rect>
                                </svg>
                            </div>
                            <span class="font-weight-bold">Hostel</span>
                        </div>
                        <div id="featureItems" class="col d-flex flex-column align-items-center justify-content-center">
                            <div>
                                <svg xmlns="http://www.w3.org/2000/svg" class="text-success rounded-circle p-4" width="100"
                                    height="100" style="background-color: #ececec" viewBox="0 0 24 24" stroke-width="2"
                                    stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                    <circle cx="6" cy="17" r="2"></circle>
                                    <circle cx="18" cy="17" r="2"></circle>
                                    <path d="M4 17h-2v-11a1 1 0 0 1 1 -1h14a5 7 0 0 1 5 7v5h-2m-4 0h-8"></path>
                                    <polyline points="16 5 17.5 12 22 12"></polyline>
                                    <line x1="2" y1="10" x2="17" y2="10"></line>
                                    <line x1="7" y1="5" x2="7" y2="10"></line>
                                    <line x1="12" y1="5" x2="12" y2="10"></line>
                                </svg>
                            </div>
                            <span class="font-weight-bold">Transport</span>
                        </div>
                    </div>
                </div>
            </section>
            <section id="homeEvents">
                <div class="container">
                    <h2 class="section-title label">News and Events</h2>
                    <div class="title-bar mx-auto"></div>
                    <div class="owl-carousel owl-theme" id="eventSlider">
                        <div class="item wow fadeInUp delay-0.5s ease animated">
                            <div class="image-wrap">
                                <a href="javascript:">
                                    <img src="img/s2.jpg" />
                                    <div class="event-overlay"></div>
                                </a>
                            </div>
                            <div class="event-bar">
                                <div class="event-block-date">
                                    <div class="day">16</div>
                                    <div class="month">SEP</div>
                                    <div class="year">2020</div>
                                </div>
                                <div class="event-block-text">
                                    <div class="event-block-title">
                                        Grade 9 Speech Competition
                                    </div>
                                    <div class="event-block-school">Higher Secondary</div>
                                    <a class="event-block-btn" href="javascript:">More Info</a>
                                </div>
                            </div>
                        </div>
                        <div class="item wow fadeInUp delay-0.5s ease animated">
                            <div class="image-wrap">
                                <a href="javascript:">
                                    <img src="img/s1.jpg" />
                                    <div class="event-overlay"></div>
                                </a>
                            </div>
                            <div class="event-bar">
                                <div class="event-block-date">
                                    <div class="day">16</div>
                                    <div class="month">SEP</div>
                                    <div class="year">2020</div>
                                </div>
                                <div class="event-block-text">
                                    <div class="event-block-title">
                                        Grade 9 Speech Competition
                                    </div>
                                    <div class="event-block-school">Secondary School</div>
                                    <a class="event-block-btn" href="javascript:">More Info</a>
                                </div>
                            </div>
                        </div>
                        <div class="item wow fadeInUp delay-0.5s ease animated">
                            <div class="image-wrap">
                                <a href="javascript:">
                                    <img src="img/s3.jpg" />
                                    <div class="event-overlay"></div>
                                </a>
                            </div>
                            <div class="event-bar">
                                <div class="event-block-date">
                                    <div class="day">16</div>
                                    <div class="month">SEP</div>
                                    <div class="year">2020</div>
                                </div>
                                <div class="event-block-text">
                                    <div class="event-block-title">
                                        Grade 9 Speech Competition
                                    </div>
                                    <div class="event-block-school">Higher Secondary</div>
                                    <a class="event-block-btn" href="javascript:">More Info</a>
                                </div>
                            </div>
                        </div>
                        <div class="item wow fadeInUp delay-0.5s ease animated">
                            <div class="image-wrap">
                                <a href="javascript:">
                                    <img src="img/s4.jpg" />
                                    <div class="event-overlay"></div>
                                </a>
                            </div>
                            <div class="event-bar">
                                <div class="event-block-date">
                                    <div class="day">16</div>
                                    <div class="month">SEP</div>
                                    <div class="year">2020</div>
                                </div>
                                <div class="event-block-text">
                                    <div class="event-block-title">
                                        Grade 9 Speech Competition
                                    </div>
                                    <div class="event-block-school">Secondary School</div>
                                    <a class="event-block-btn" href="javascript:">More Info</a>
                                </div>
                            </div>
                        </div>
                        <div class="item wow fadeInUp delay-0.5s ease animated">
                            <div class="image-wrap">
                                <a href="javascript:">
                                    <img src="img/s5.jpg" />
                                    <div class="event-overlay"></div>
                                </a>
                            </div>
                            <div class="event-bar">
                                <div class="event-block-date">
                                    <div class="day">16</div>
                                    <div class="month">SEP</div>
                                    <div class="year">2020</div>
                                </div>
                                <div class="event-block-text">
                                    <div class="event-block-title">
                                        Grade 9 Speech Competition
                                    </div>
                                    <div class="event-block-school">Secondary School</div>
                                    <a class="event-block-btn" href="javascript:">More Info</a>
                                </div>
                            </div>
                        </div>
                        <div class="item wow fadeInUp delay-0.5s ease animated">
                            <div class="image-wrap">
                                <a href="javascript:">
                                    <img src="img/s3.jpg" />
                                    <div class="event-overlay"></div>
                                </a>
                            </div>
                            <div class="event-bar">
                                <div class="event-block-date">
                                    <div class="day">16</div>
                                    <div class="month">SEP</div>
                                    <div class="year">2020</div>
                                </div>
                                <div class="event-block-text">
                                    <div class="event-block-title">
                                        Grade 9 Speech Competition
                                    </div>
                                    <div class="event-block-school">Secondary School</div>
                                    <a class="event-block-btn" href="javascript:">More Info</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="home-events-links">
                        <a class="link-btn" href="javascript:">View all events</a>
                        <a class="link-btn" href="javascript:">Calender</a>
                        <a class="link-btn" href="javascript:">
                            <i class="fa fa-download"></i>
                            Academic Calender 2022-2023
                        </a>
                    </div>
                </div>
            </section>

            <section id="homeGallery" class="container-fluid mx-auto">
                <div class="container">
                    <h1 class="section-title label pb-12">Gallery</h1>
                    <div class="title-bar w-full mx-auto"></div>
                    <div id="galleryFlex"
                        class="d-flex flex-wrap gap-3 justify-content-between align-items-center max-w-5xl mx-auto px-6 mt-4">
                        <a data-fancybox="gallery" href="https://lipsum.app/id/66/1600x1200">
                            <img class="rounded mb-2" src="https://lipsum.app/id/66/200x150" />
                        </a>
                        <a data-fancybox="gallery" href="https://lipsum.app/id/71/1600x1200">
                            <img class="rounded mb-2" src="https://lipsum.app/id/71/200x150" />
                        </a>
                        <a data-fancybox="gallery" href="https://lipsum.app/id/67/1600x1200">
                            <img class="rounded" src="https://lipsum.app/id/67/200x150" />
                        </a>
                        <a data-fancybox="gallery" href="https://lipsum.app/id/68/1600x1200">
                            <img class="rounded mb-2" src="https://lipsum.app/id/68/200x150" />
                        </a>
                        <a data-fancybox="gallery" href="https://lipsum.app/id/67/1600x1200">
                            <img class="rounded" src="https://lipsum.app/id/67/200x150" />
                        </a>
                        <a data-fancybox="gallery" href="https://lipsum.app/id/66/1600x1200">
                            <img class="rounded mb-2" src="https://lipsum.app/id/66/200x150" />
                        </a>
                        <a data-fancybox="gallery" href="https://lipsum.app/id/67/1600x1200">
                            <img class="rounded" src="https://lipsum.app/id/67/200x150" />
                        </a>
                        <a data-fancybox="gallery" href="https://lipsum.app/id/71/1600x1200">
                            <img class="rounded mb-2" src="https://lipsum.app/id/71/200x150" />
                        </a>
                        <a data-fancybox="gallery" href="https://lipsum.app/id/69/1600x1200">
                            <img class="rounded mb-2" src="https://lipsum.app/id/69/200x150" />
                        </a>
                        <a data-fancybox="gallery" href="https://lipsum.app/id/70/1600x1200">
                            <img class="rounded mb-2" src="https://lipsum.app/id/70/200x150" />
                        </a>
                        <a data-fancybox="gallery" href="https://lipsum.app/id/66/1600x1200">
                            <img class="rounded mb-2" src="https://lipsum.app/id/66/200x150" />
                        </a>
                        <a data-fancybox="gallery" href="https://lipsum.app/id/71/1600x1200">
                            <img class="rounded mb-2" src="https://lipsum.app/id/71/200x150" />
                        </a>
                    </div>
                </div>
            </section>

            <section id="homeAdmission" style="background-image: url(img/s3.jpg)">
                <div class="bg-overlay"></div>
                <div class="container">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="home-admission-title wow fadeInLeft delay-0.5s ease animated">
                                <h1 class="large label">Admissions</h1>
                                <div class="title-bar-white"></div>
                                <div class="home-abt-sub-title">
                                    No entrance exams. No waiting list. All year enrollment.
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="home-admission-text wow fadeInRight delay-0.5s ease animated">
                                <p>
                                    The Prarambha School has been providing a modern education
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit,
                                    sed do eiusmod tempor incididunt
                                </p>

                                <p>
                                    <i class="fa fa-mobile-alt bg-success"></i> +977 9812345678
                                </p>
                                <p>
                                    <i class="fa fa-envelope bg-success"></i> info@prarambha.com
                                </p>

                                <a href="javascript:" class="home-admission-btn1">Admissions</a>
                                <a href="javascript:" class="home-admission-btn2">Register Online</a>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section id="accreditation">
                <div class="container">
                    <h2 class="section-title label">Accreditation</h2>
                    <div class="title-bar mx-auto"></div>
                    <div class="accreditation-grid">
                        <div class="accreditation-block wow fadeIn delay-0.5s ease animated">
                            <a href="javascript:" target="_blank" rel="nofollow">
                                <img src="img/pwa-1.png" />
                            </a>
                        </div>
                        <div class="accreditation-block wow fadeIn delay-0.5s ease animated">
                            <a href="javascript:" target="_blank" rel="nofollow">
                                <img src="img/pwa-1.png" />
                            </a>
                        </div>
                        <div class="accreditation-block wow fadeIn delay-0.5s ease animated">
                            <a href="javascript:" target="_blank" rel="nofollow">
                                <img src="img/pwa-1.png" />
                            </a>
                        </div>
                        <div class="accreditation-block wow fadeIn delay-0.5s ease animated">
                            <a href="javascript:" target="_blank" rel="nofollow">
                                <img src="img/pwa-1.png" />
                            </a>
                        </div>
                        <div class="accreditation-block wow fadeIn delay-0.5s ease animated">
                            <a href="javascript:" target="_blank" rel="nofollow">
                                <img src="img/pwa-1.png" />
                            </a>
                        </div>
                        <div class="accreditation-block wow fadeIn delay-0.5s ease animated">
                            <a href="javascript:" target="_blank" rel="nofollow">
                                <img src="img/pwa-1.png" />
                            </a>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>
@endsection
