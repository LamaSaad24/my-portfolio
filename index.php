<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="author" content="lama saad">
    <!-- include favicon -->
    <link rel="shortcut icon" href="assets/images/logo.png" type="image/x-icon">
    <!-- include bootstrap -->
    <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.min.css">
    <!-- include font awesome -->
    <link rel="stylesheet" href="node_modules/@fortawesome/fontawesome-free/css/all.min.css">
    <!-- include aos css -->
    <link rel="stylesheet" href="node_modules/aos/dist/aos.css">
    <!-- include style -->
    <link rel="stylesheet" href="assets/css/style.css">
    <!-- include style responsive -->
    <link rel="stylesheet" href="assets/css/style.responsive.css">
    <title>Portfolio</title>
</head>
<body>
    
    <!-- start navbar -->
    <nav class="navbar navbar-expand-md">
        <div class="container">
            <a class="navbar-brand" href="#">
                <img src="assets/images/logo.png" class="img-fluid" alt="logo">
            </a>
        <div class="btn__toggler">
            <input type="checkbox" id="check__toggle">
            <div></div>
            <div></div>
            <div></div>
        </div>
        <div class="collapse navbar-collapse" id="collapsibleNavId">
            <ul class="navbar-nav ml-auto mt-2 mt-lg-0">
                <li class="nav-item active">
                    <a class="nav-link" href="#home" style="--i:.5s">home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#about" style="--i:1s">about</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#services" style="--i:1.5s">services</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#portfolio" style="--i:2s">portfolio</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#contact" style="--i:2.5s">contact</a>
                </li>
            </ul>
        </div>
        </div>
    </nav>
    <!-- end navbar -->

    <!-- start home -->
    <header class="home" id="home">
        <div class="home__wrapper__video">
            <video autoplay muted loop>
                <source src="assets/images/video.mp4" type="video/mp4">
            </video>
        </div>
        <div class="home__content">
            <h1>welcome</h1>
            <p>i'm a <span id="typer"></span></p>
            <!-- <p>to see my projects<a href="" class="btn__down"><i class="fa fa-hand-point-down"></i></a> </p> -->
            <!-- <p>to contact me <a href="" class="btn__down"><i class="fa fa-hand-point-down"></i></a></p> -->
            <a href="includes/myCV.pdf" class="btn__download" download>download cv</a>
            <a class="down" href="#about"><span><i class="fa fa-minus" aria-hidden="true"></i></span></a>
        </div>
    </header>
    <!-- end home -->

    <main>
            <!-- start about -->
            <section class="about mt-5 pt-5" id="about">
                <div class="container">
                    <h2>about me</h2>
                    <div class="row">
                        <div class="col-md-6 col-11 mx-auto my-2" data-aos="flip-left" data-aos-duration="500">
                            <h3>skills</h3>
                            <div class="progress" >
                                <div class="progress-bar progress-bar-striped progress-bar-animated bg-success"  data-aos="fade-right" data-aos-duration="1500" role="progressbar"
                                    style="width: 85%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">HTML & HTML5</div>
                            </div>
                            <div class="progress">
                                <div class="progress-bar progress-bar-striped progress-bar-animated bg-success"  data-aos="fade-right" data-aos-duration="2000" role="progressbar"
                                    style="width: 85%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">CSS & CSS3</div>
                            </div>
                            <div class="progress">
                                <div class="progress-bar progress-bar-striped progress-bar-animated bg-primary" data-aos="fade-right" data-aos-duration="2500" role="progressbar"
                                    style="width: 75%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">BOOTSTRAP</div>
                            </div>
                            <div class="progress"> 
                                <div class="progress-bar progress-bar-striped progress-bar-animated bg-primary" data-aos="fade-right" data-aos-duration="3000" role="progressbar"
                                    style="width: 50%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">JAVA SCRIPT</div>
                            </div>
                            <div class="progress">
                                <div class="progress-bar progress-bar-striped progress-bar-animated bg-primary" data-aos="fade-right" data-aos-duration="3500" role="progressbar"
                                    style="width: 50%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">JQUERY</div>
                            </div>
                            <!-- <div class="progress">
                                <div class="progress-bar progress-bar-striped progress-bar-animated bg-danger" role="progressbar"
                                    style="width: 25%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">REACT</div>
                            </div> -->
                            <div class="progress">
                                <div class="progress-bar progress-bar-striped progress-bar-animated bg-primary" data-aos="fade-right" data-aos-duration="4000" role="progressbar"
                                    style="width: 75%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">PHP</div>
                            </div>
                            <div class="progress">
                                <div class="progress-bar progress-bar-striped progress-bar-animated bg-primary" data-aos="fade-right" data-aos-duration="4500" role="progressbar"
                                    style="width: 75%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">SQL</div>
                            </div>
                            <!-- <div class="progress">
                                <div class="progress-bar progress-bar-striped progress-bar-animated bg-danger" role="progressbar"
                                    style="width: 25%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">LARAVEL</div>
                            </div> -->
                        </div>
                        <div class="col-md-6 col-11 mx-auto my-2" data-aos="flip-right" data-aos-duration="500">
                            <h3>hello! <span>i'm lama saad</span></h3>
                            <p>
                                Knowledgeable Front End and Back End Developer adept atcreating successful websites that meet customer needs. Specializes in collaborating with clients to gatherrequirements, Produce plans and improve designs for easeof use. Designing influential and pioneering websites thatattract clients. I have knowledge in HTML ,CSS,js ,PHP and SQL.
                            </p>
                            <div class="social__icons">
                                <span><a href="https://www.facebook.com/lamosh.me"><i class="fab fa-facebook" aria-hidden="true"></i></a></span>
                                <span><a href="https://www.linkedin.com/in/lama-saad-4a81761bb"><i class="fab fa-linkedin" aria-hidden="true"></i></a></span>
                                <span><a href="tel:+9630997247035"><i class="fa fa-phone" aria-hidden="true"></i></a></span>
                                <span><a href="https://github.com/lamasaad24"><i class="fab fa-github"></i></a></span>
                                <span><a href="mailto:lamasaad65@gmail.com"><i class="fas fa-envelope"></i></a></span>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- end about -->

            <!-- start services -->
            <section class="services mt-5 py-5 bg-light" id="services">
                <div class="container">
                    <h2>our services</h2>
                    <div class="row">
                        <div class="col-11 mx-auto my-2 col-md-4" >
                            <div class="item" data-aos="zoom-in-left" data-aos-duration="1000">
                                <h3 class="icon"><i class="fas fa-tachometer-alt"></i></h3>
                                <h4>fast</h4>
                                <p>
                                    Fast load times and lag free interaction, my highest priority.
                                </p>
                            </div>
                        </div>
                        <div class="col-11 mx-auto my-2 col-md-4" >
                            <div class="item" data-aos="zoom-in" data-aos-duration="3000">
                                <h3 class="icon"><i class="fa fa-desktop" aria-hidden="true"></i></h3>
                                <h4>Responsive</h4>
                                <p>
                                    My layouts will work on any device, big or small.
                                </p>
                            </div>
                        </div>
                        <div class="col-11 mx-auto my-2 col-md-4">
                            <div class="item"  data-aos="zoom-in-right" data-aos-duration="2000">
                                <h3 class="icon"><i class="fas fa-rocket"></i></h3>
                                <h4>Dynamic</h4>
                                <p>
                                    Websites don't have to be static, I love making pages come to life.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- end services -->

            <!-- start hireMe -->
            <section class="hireme mt-5 py-5" id="hireMe">
                <div class="container">
                    <p data-aos="zoom-in" data-aos-duration="3000">I Am Available For Freelancer.</p>
                    <a href="#contact" data-aos="fade-up" data-aos-duration="3000">hire me</a>
                </div>
            </section>
            <!-- start hireMe -->

            <!-- start portfolio -->
            <section class="portfolio mt-5 py-5 bg-light" id="portfolio">
                <div class="container">
                    <h2>my projects</h2>
                    <div class="portfolio__controlers">
                        <a href="#portfolio" type="button" class="active"  data-filter="all">all</a>
                        <a href="#portfolio" type="button"  data-filter=".php">php</a>
                        <a href="#portfolio" type="button"  data-filter=".notFound">react</a>
                        <a href="#portfolio" type="button"  data-filter=".design">web design</a>
                        <a href="#portfolio" type="button"  data-filter=".notFound">laravel</a>
                    </div>
                    <div class="row">
                        <div class="col-12 my-3 col-md-4"  data-aos="fade-up" data-aos-duration="500">
                            <div class="item mix php  design">
                                <div class="overlay d-flex justify-content-center align-items-center">
                                    <div>
                                        <h3>facebook</h3>
                                        <p>html, css, bootstrap, js, jquery, php-oop, mysql</p>
                                        <a href="https://facelevel2.000webhostapp.com/index.php" target="_blank">view demo</a>
                                    </div>
                                </div>
                                <img src="assets/images/img/facebook.png" class="img-fluid" alt="">
                            </div>
                        </div>
                        <div class="col-12 my-3 col-md-4"  data-aos="fade-up" data-aos-duration="1000">
                            <div class="item mix php design">
                                <div class="overlay d-flex justify-content-center align-items-center">
                                    <div>
                                        <h3>film</h3>
                                        <p>html, css, bootstrap, js, jquery, php, mysql</p>
                                        <a href="https://filmprojectv1.000webhostapp.com/index" target="_blank">view demo</a>
                                    </div>
                                </div>
                                <img src="assets/images/img/film.png" class="img-fluid" alt="">
                            </div>
                        </div>
                        <div class="col-12 my-3 col-md-4"  data-aos="fade-up" data-aos-duration="1500">
                            <div class="item mix design">
                                <div class="overlay d-flex justify-content-center align-items-center">
                                    <div>
                                        <h3>mediaartistic</h3>
                                        <p>html, css, bootstrapp, js, jquery</p>
                                        <a href="https://mediaartistic.netlify.app/blog-details.html" target="_blank">view demo</a>
                                    </div>
                                </div>
                                <img src="assets/images/img/mediaartis.png" class="img-fluid" alt="">
                            </div>
                        </div>
                        <div class="col-12 my-3 col-md-4"  data-aos="fade-up" data-aos-duration="2000">
                            <div class="item mix design">
                                <div class="overlay d-flex justify-content-center align-items-center">
                                    <div>
                                        <h3>medicio</h3>
                                        <p>html, css, bootstrap, js, jquery</p>
                                        <a href="medicio" target="_blank">view demo</a>
                                    </div>
                                </div>
                                <img src="assets/images/img/medicio.png" class="img-fluid" alt="">
                            </div>
                        </div>
                        <div class="col-12 my-3 col-md-4"  data-aos="fade-up" data-aos-duration="2500">
                            <div class="item mix php design">
                                <div class="overlay d-flex justify-content-center align-items-center">
                                    <div>
                                        <h3>rubik</h3>
                                        <p>html, css, bootstrap, js, jquery</p>
                                        <a href="https://rubik.sy" target="_blank">view demo</a>
                                    </div>
                                </div>
                                <img src="assets/images/img/rubik.png" class="img-fluid" alt="">
                            </div>
                        </div>
                        <div class="col-12 my-3 col-md-4  w-100 d-flex justify-content-center align-items-center"  data-aos="fade-up" data-aos-duration="3000">
                            <div class="item mix notFound">
                                <div class="over">
                                    <p>10 May,2021</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- end portfolio -->

            <!-- start contact -->
            <section class="contact mt-5 pt-5" id="contact">
                <div class="container">
                    <h2>contact</h2>
                    <form method="post" action="includes/sendEmail.php">
                    <div class="row">
                        <div class="col-11 mx-auto mb-2 col-md-6"  data-aos="fade-up" data-aos-duration="500">
                            <div class="form-group">
                              <input type="text" name="name" id="" class="form-control" placeholder="Your Name *" required aria-describedby="helpId">
                            </div>
                        </div>
                        <div class="col-11 mx-auto mb-2 col-md-6"  data-aos="fade-up" data-aos-duration="1000">
                            <div class="form-group">
                                <input type="email" name="email" id="" class="form-control" placeholder="Your Email *" required aria-describedby="helpId">
                            </div>
                        </div>
                        <div class="col-11 col-md-12 mx-auto mb-2 "  data-aos="fade-up" data-aos-duration="1500">
                            <div class="form-group">
                                <input type="text" name="subject" id="" class="form-control" placeholder="Your Subject *" required aria-describedby="helpId">
                            </div>
                        </div>
                        <div class="col-11 col-md-12 mx-auto mb-2"  data-aos="fade-up" data-aos-duration="2000">
                            <div class="form-group">
                              <textarea class="form-control" name="message" id="" rows="3" placeholder="your Message *"></textarea>
                            </div>
                        </div>
                        <div class="col-11 mx-auto col-md-12 d-flex justify-content-end">
                            <button type="submit">send message</button>
                        </div>
                    </div>
                    </form>
                </div>
            </section>
            <!-- end contact -->
    </main>

    <footer class="mt-5 py-3">
        <p class="text-center">2020 - 2021 © lama. Design by LamaSaad.</p>
    </footer>

    <!-- start back-to-top -->
    <a href="#home" class="back-to-top">
    <i class="fa fa-arrow-up" aria-hidden="true"></i>
    </a>
    <!-- end back-to-top -->





    <!-- include jquery -->
    <script src="node_modules/jquery/dist/jquery.min.js"></script>
    <!-- include popper -->
    <script src="node_modules/popper.js/dist/popper.min.js"></script>
    <!-- include bootstrap -->
    <script src="node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- include typer js -->
    <script src="assets/plugins/Text-Rotator-With-Typing-Effect-jQuery-Typer/dist/typer.min.js"></script>
    <!-- include aos js -->
    <script src="node_modules/aos/dist/aos.js"></script>
    <!-- include mixt up js -->
    <script src="node_modules/mixitup/dist/mixitup.min.js"></script>
    <!-- include main js -->
    <script src="assets/js/main.js"></script>
</body>
</html>