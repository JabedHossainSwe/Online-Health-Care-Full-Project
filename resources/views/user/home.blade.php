<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <meta name="copyright" content="Jabed Hossain">

    <title>One Health</title>

    <link rel="stylesheet" href="./assets/css/maicons.css">

    <link rel="stylesheet" href="./assets/css/bootstrap.css">

    <link rel="stylesheet" href="./assets/vendor/owl-carousel/css/owl.carousel.css">

    <link rel="stylesheet" href="./assets/vendor/animate/animate.css">

    <link rel="stylesheet" href="./assets/css/theme.css">
</head>

<body>

    <!-- Back to top button -->
    <div class="back-to-top"></div>

    <header>
        <div class="topbar">
            <div class="container">
                <div class="row">
                    <div class="col-sm-8 text-sm">
                        <div class="site-info">
                            <a href="#"><span class="mai-call text-primary"></span> +880 130 500 9069</a>
                            <span class="divider">|</span>
                            <a href="https://gmail.google.com"><span class="mai-mail text-primary"></span>
                                one-health@gmail.com</a>
                        </div>
                    </div>
                    <div class="col-sm-4 text-right text-sm">
                        <div class="social-mini-button">
                            <a href="https://www.facebook.com/jabedhossainjabu"><span
                                    class="mai-logo-facebook-f"></span></a>
                            <a href="https://www.twitter.com/xabedhossain"><span class="mai-logo-twitter"></span></a>
                            <a href="https://www.instagram.com/jabedhossainjabu"><span
                                    class="mai-logo-instagram"></span></a>
                            <a href="https://www.github.com/jabedhossainswe"><span class="mai-logo-github"></span></a>
                            <a href="https://jabedsportfolio.netlify.app/"><span class="mai-logo-dribbble"></span></a>
                        </div>
                    </div>
                </div> <!-- .row -->
            </div> <!-- .container -->
        </div> <!-- .topbar -->
        @include('user.navbar')
    </header>
    {{-- Showing the confirmed form message --}}
    @if (session()->has('message'))
        <div class="alert alert-success">
            <button type="button" class="close" data-bs-dismiss="alert">

                {{ session()->get('message') }}
            </button>

        </div>
    @endif



    <div class="page-hero bg-image overlay-dark" style="background-image: url(./assets/img/bg_image_1.jpg);">

        <div class="hero-section">
            <div class="container text-center wow zoomIn">
                <span class="subhead">Let's make your life happier</span>
                <h1 class="display-4">Healthy Living</h1>
                <a href="#" class="btn btn-primary">Let's Consult</a>
            </div>
        </div>
    </div>


    <div class="bg-light">
        <div class="page-section py-3 mt-md-n5 custom-index">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-4 py-3 py-md-0">
                        <div class="card-service wow fadeInUp">
                            <div class="circle-shape bg-secondary text-white">
                                <span class="mai-chatbubbles-outline"></span>
                            </div>
                            <a href="{{ route('chat') }}">Chat with a doctor</a>

                        </div>
                    </div>
                    <div class="col-md-4 py-3 py-md-0">
                        <div class="card-service wow fadeInUp">
                            <div class="circle-shape bg-primary text-white">
                                <span class="mai-shield-checkmark"></span>
                            </div>
                            <a href="{{ route('protection') }}">One-Health Protection</a>
                        </div>
                    </div>
                    <div class="col-md-4 py-3 py-md-0">
                        <div class="card-service wow fadeInUp">
                            <div class="circle-shape bg-accent text-white">
                                <span class="mai-basket"></span>
                            </div>
                            <a href="{{ route('pharmacy') }}">One-Health Pharmacy</a>
                        </div>
                    </div>
                </div>
            </div>
        </div> <!-- .page-section -->

        <div class="page-section pb-0">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6 py-3 wow fadeInUp">
                        <h1>Welcome to Your Health Center</h1>
                        <p class="text-grey mb-4">Online healthcare revolutionizes access, connecting patients and providers worldwide. Through telemedicine and digital platforms, it ensures convenient consultations, prescription management, and continuous care. Wearable tech enhances monitoring. Challenges include data security and regulatory needs, yet it promises efficient, patient-focused services.</p>
                        <a href="{{ route('show.about-us') }}" class="btn btn-primary">Learn More</a>
                    </div>
                    <div class="col-lg-6 wow fadeInRight" data-wow-delay="400ms">
                        <div class="img-place custom-img-1">
                            <img src="./assets/img/bg-doctor.png" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div> <!-- .bg-light -->
    </div> <!-- .bg-light -->

    {{-- Doctor section --}}
    @include('user.doctor')


    <!-- .page-section -->
    {{-- Latest News --}}
    @include('user.latestnews')
    <!-- .page-section -->

    {{-- Appointment section --}}
    @include('user.appointment')



    <div class="page-section banner-home bg-image" style="background-image: url(./assets/img/banner-pattern.svg);">
        <div class="container py-5 py-lg-0">
            <div class="row align-items-center">
                <div class="col-lg-4 wow zoomIn">
                    <div class="img-banner d-none d-lg-block">
                        <img src="./assets/img/mobile_app.png" alt="">
                    </div>
                </div>
                <div class="col-lg-8 wow fadeInRight">
                    <h1 class="font-weight-normal mb-3">Get easy access of all features using One Health Application
                    </h1>
                    <a href="https://play.google.com"><img src="./assets/img/google_play.svg" alt=""></a>
                    <a href="https://www.apple.com/app-store/" class="ml-2"><img src="./assets/img/app_store.svg"
                            alt=""></a>
                </div>
            </div>
        </div>
    </div> <!-- .banner-home -->

    <footer class="page-footer">
        <div class="container">
            <div class="row px-md-3">
                <div class="col-sm-6 col-lg-3 py-3">
                    <h5>Company</h5>
                    <ul class="footer-menu">
                        <li><a href="{{ route('show.about-us') }}">About Us</a></li>
                        <li><a href="{{ route('career') }}">Career</a></li>
                        <li><a href="{{ route('team') }}">Editorial Team</a></li>
                        <li><a href="{{ route('protection') }}">Protection</a></li>

                    </ul>
                </div>
                <div class="col-sm-6 col-lg-3 py-3">
                    <h5>More</h5>
                    <ul class="footer-menu">
                        <li><a href="{{ route('terms') }}">Terms & Condition</a></li>
                        <li><a href="{{ route('privacy') }}">Privacy</a></li>
                        <li><a href="https://ads.google.com/">Advertise</a></li>
                        <li><a href="{{ route('doc') }}">Join as a Doctor</a></li>
                    </ul>
                </div>
                <div class="col-sm-6 col-lg-3 py-3">
                    <h5>Our partner</h5>
                    <ul class="footer-menu">
                        <li><a href="https://www.onefitness.com.au/">One-Fitness</a></li>
                        <li><a href="https://www.dea.gov/drug-information/drug-scheduling">One-Drugs</a></li>
                        <li><a href="https://www.onelive.com/">One-Live</a></li>
                    </ul>
                </div>
                <div class="col-sm-6 col-lg-3 py-3">
                    <h5>Contact</h5>
                    <p class="footer-link mt-2">Mirpur, Dhaka, Bangladesh</p>
                    <a href="#" class="footer-link">701-573-7582</a>
                    <a href="#" class="footer-link">healthcare@temporary.net</a>

                    <h5 class="mt-3">Social Media</h5>
                    <div class="footer-sosmed mt-3">
                        <a href="https://www.facebook.com" target="_blank"><span
                                class="mai-logo-facebook-f"></span></a>
                        <a href="https://www.twitter.com" target="_blank"><span class="mai-logo-twitter"></span></a>
                        <a href="https://www.account.google.com" target="_blank"><span
                                class="mai-logo-google-plus-g"></span></a>
                        <a href="https://www.instagram.com" target="_blank"><span
                                class="mai-logo-instagram"></span></a>
                        <a href="https://www.linkedin.com" target="_blank"><span
                                class="mai-logo-linkedin"></span></a>
                    </div>
                </div>
            </div>

            <hr>

            <p id="copyright">Copyright &copy; 2023 <a href="https://www.linkedin.com/in/jabed-hossain-a50a09165/"
                    target="_blank">Jabed Hosain</a>. All right reserved</p>
        </div>
    </footer>

    <script src="./assets/js/jquery-3.5.1.min.js"></script>

    <script src="./assets/js/bootstrap.bundle.min.js"></script>

    <script src="./assets/vendor/owl-carousel/js/owl.carousel.min.js"></script>

    <script src="./assets/vendor/wow/wow.min.js"></script>

    <script src="./assets/js/theme.js"></script>

</body>

</html>
