
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta http-equiv="x-ua-compatible" content="ie=edge">

	<title>Suleman Amjad</title>

	<!-- Font Awesome -->
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css">
    <!-- Bootstrap core CSS -->
    <link href="https://mdbootstrap.com/previews/templates/portfolio/css/bootstrap.min.css" rel="stylesheet">
    <!-- Material Design Bootstrap -->
    <link href="https://mdbootstrap.com/previews/templates/portfolio/css/mdb.min.css" rel="stylesheet">

    <style>
        html,
        body,
        header,
        .jarallax {
          height: 100%;
        }

        @media (min-width: 560px) and (max-width: 740px) {
          html,
          body,
          header,
          .jarallax {
            height: 600px;
          }
        }
    </style>

</head>
<body class="developer">

    <!--Navigation & Intro-->
    <header>

        <!-- Navbar -->
        <nav class="navbar navbar-expand-lg navbar-dark fixed-top scrolling-navbar">
            <div class="container">
                <a class="navbar-brand" href="#">Suleman</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
                    <ul class="navbar-nav mr-auto smooth-scroll">
                        <li class="nav-item">
                            <a class="nav-link" href="#home">Home <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#about" data-offset="100">About</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#skills" data-offset="100">Skills</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#works" data-offset="100">Works</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#contact" data-offset="100">Contact</a>
                        </li>
                    </ul>
                    <!-- Social Icon  -->
                    <ul class="navbar-nav nav-flex-icons">
                        <li class="nav-item">
                            <a target="_blank" href="#" class="nav-link"><i class="fab fa-facebook-f light-green-text-2"></i></a>
                        </li>
                        <li class="nav-item">
                            <a target="_blank" href="#" class="nav-link"><i class="fab fa-twitter light-green-text-2"></i></a>
                        </li>
                        <li class="nav-item">
                            <a target="_blank" href="#" class="nav-link"><i class="fab fa-instagram light-green-text-2"></i></a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

        <!-- Intro Section -->
        <div id="home" class="view jarallax" data-jarallax='{"speed": 0.2}' style="background-image: url('https://mdbootstrap.com/img/Photos/Others/forest1.jpg'); background-repeat: no-repeat; background-size: cover; background-position: center center;">
            <div class="mask rgba-white-strong">
                <div class="container h-100 d-flex justify-content-center align-items-center">
                    <div class="row smooth-scroll">
                        <div class="col-md-12 pt-3">
                            <div class="white-text text-center pt-5">
                                <h1 class="display-2 mb-4 dark-grey-text wow fadeIn">I am <strong>Suleman Amjad</strong></h1>
                                <h5 class="text-uppercase font-weight-bold wow fadeIn" data-wow-delay="0.4s"><mark>Gamer & Mobile Repair</mark></h5>
                                <?php if($success = $this->session->flashdata('success')): ?>
                                  <div class="alert alert-primary bg-dark text-white mt-4"><?=$success;?></div>
                                <?php endif; ?>
                                <a href="#about" class="btn btn-floating btn-large wow fadeIn" data-wow-delay="0.4s" data-offset="100"><i class="fas fa-angle-down" aria-hidden="true"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </header>
    <!--/Navigation & Intro-->

    <!--Main layout-->
    <main>

        <!-- First container -->
        <div class="container">

            <!-- Section About -->
            <section id="about" class="section feature-box mb-5">

                <!-- Section title -->
                <h2 class="text-center text-uppercase my-5 pt-5 wow fadeIn" data-wow-delay="0.2s">About <strong>me</strong></h2>

                <p class="text-center w-responsive mx-auto wow fadeIn my-5" data-wow-delay="0.2s">Born in Faislabad, Punab - Pakistan.</p>

                <!-- First row -->
                <div class="row features-big text-center wow fadeIn" data-wow-delay="0.4s">

                    <!-- First column -->
                    <div class="col-md-4 mb-5">

                        <!--Panel-->
                        <div class="card card-body hoverable">
                            <i class="fas fa-laptop fa-3x mb-4" aria-hidden="true"></i>
                            <h5 class="font-weight-bold text-uppercase mb-4">Gamer</h5>
                            <p class="dark-grey-text">Playing online games.</p>
                        </div>
                        <!--/.Panel-->

                    </div>
                    <!-- /First column -->

                    <!-- Second column -->
                    <div class="col-md-4 mb-5">

                        <!--Panel-->
                        <div class="card card-body yellow hoverable">
                            <i class="fas fa-code fa-3x mb-4" aria-hidden="true"></i>
                            <h5 class="font-weight-bold text-uppercase mb-4">Mobile Repair</h5>
                            <p class="dark-grey-text">Mobile repairing, installing software.</p>
                        </div>
                        <!--/.Panel-->

                    </div>
                    <!-- /.Second column -->

                    <!-- Third column -->
                    <div class="col-md-4 mb-5">

                        <!--Panel-->
                        <div class="card card-body hoverable">
                            <i class="fas fa-pencil-alt fa-3x mb-4" aria-hidden="true"></i>
                            <h5 class="font-weight-bold text-uppercase mb-4">Photography</h5>
                            <p class="dark-grey-text">Capturing nature in my camera lens.</p>
                        </div>
                        <!--/.Panel-->

                    </div>
                    <!-- /.Third column -->

                </div>
                <!-- /.First row -->

            </section>
            <!-- /.Second section -->

        </div>
        <!-- /.First container -->

        <!--Second container-->
        <div class="container-fluid" style="background-color: #f3f3f5;">
            <div class="container py-4 pt-4">

                <!-- Second section -->
                <section id="skills">

                    <!-- First row -->
                    <div class="row py-5">

                        <!--First column-->
                        <div class="col-lg-6 col-md-12 mb-3 wow fadeIn" data-wow-delay="0.4s">

                        <!--Section heading-->
                        <div class="d-flex justify-content-start">
                            <h4 class="text-center text-uppercase mb-5 pb-3 mt-4 wow fadeIn" data-wow-delay="0.2s">My <strong>experience</strong></h4>
                        </div>

                                <!--Description-->
                                <blockquote class="blockquote bq-warning mb-4">
                                    <div class="row"> <i class="fas fa-briefcase fa-x mb-1 mr-3 ml-3" aria-hidden="true"></i>
                                        <h5 class="font-weight-bold mb-3">Gamer <span class="badge badge-success">Current</span></h5>
                                    </div>
                                    <p class="font-weight-bold ml-1 dark-grey-text mb-2">Feb, 2020 - Present</p>
                                    <p class="mb-0 ml-1 light-grey-text">Al Hayyat Group of Companies, Islamabad, Pakistan.</p>
                                </blockquote>

                                <blockquote class="blockquote bq-warning mt-1 mb-4">
                                    <div class="row"> <i class="fas fa-briefcase fa-x mb-1 mr-3 ml-3" aria-hidden="true"></i>
                                        <h5 class="font-weight-bold mb-3">Mobile Repair <span class="badge badge-info">11 Mos</span></h5> </div>
                                    <p class="font-weight-bold ml-1 dark-grey-text mb-2">March, 2019 - Jan, 2020</p>
                                    <p class="mb-0 ml-1 light-grey-text">Mobile repairing and software installation.</p>
                                </blockquote>
                        </div>
                        <!--/First column-->

                        <!--Second column-->
                        <div class="col-lg-5 offset-lg-1 col-md-12 mb-4 wow fadeIn" data-wow-delay="0.4s">

                        <!--Second heading-->
                        <div class="d-flex justify-content-start">
                            <h4 class="text-center text-uppercase mb-5 pb-3 mt-4 wow fadeIn" data-wow-delay="0.2s">Gaming & Video <strong>Skills</strong></h4>
                        </div>

                            <!--Description-->
                            <p class="black-text text-uppercase font-weight-bold" align="justify">PUBG</p>
                                <div class="md-progress">
                                    <div class="progress-bar" role="progressbar" style="width: 90%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>

                            <p class="black-text text-uppercase font-weight-bold pt-3" align="justify">Mobile Repair</p>
                                <div class="md-progress">
                                    <div class="progress-bar" role="progressbar" style="width: 65%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>

                            <p class="black-text text-uppercase font-weight-bold pt-3" align="justify">Photography</p>
                                <div class="md-progress">
                                    <div class="progress-bar" role="progressbar" style="width: 75%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>

                        </div>
                        <!--/Second column-->

                    </div>
                    <!--/First row-->

                </section>
                <!-- /.Second section -->

          </div>
        </div>
        <!--/Second container-->

        <!-- Streak -->
        <div class="streak streak-photo streak-md" style="background-image:url('https://mdbootstrap.com/img/Photos/Horizontal/Work/12-col/img%20%2811%29.jpg')">
            <div class="mask flex-center rgba-indigo-strong">
                <div class="white-text smooth-scroll mx-4">
                    <h2 class="h2-responsive wow fadeIn mb-5"><i class="fas fa-quote-left" aria-hidden="true"></i> Design is not just what it looks like and feels like. Design is how it works. <i class="fas fa-quote-right" aria-hidden="true"></i></h2>
                    <h5 class="text-center font-italic wow fadeIn" data-wow-delay="0.2s">~ Steve Jobs</h5>
                </div>
            </div>
        </div>
        <!-- /.Streak -->

        <!-- Contact form -->
        <div id="contact" class="container">

            <!--Section: Contact v.2-->
            <section class="section contact-section mt-4 mb-5">
                <!--Section heading-->
                <h2 class="text-center text-uppercase my-5 pt-5 wow fadeIn" data-wow-delay="0.2s">Contact <strong>me</strong></h2>
                <!--Section sescription-->
                <p class="text-center w-responsive mx-auto mb-5 pb-4 wow fadeIn" data-wow-delay="0.2s">Let's work together to create game-changing experiences that will take your brand from bland to buzzworthy.</p>
                <div class="row wow fadeIn" data-wow-delay="0.4s">

                    <!--First column-->
                    <div class="col-md-8 mb-5">
                        <form action="<?=base_url('home/send_email');?>" method="post">
                            <!--First row-->
                            <div class="row">

                                <!--First column-->
                                <div class="col-md-6">
                                    <div class="md-form mb-0">
                                        <div class="md-form mb-0">
                                            <input type="text" name="first_name" id="form41" class="form-control">
                                            <label for="form41" class="">First name *</label>
                                        </div>
                                    </div>
                                </div>
                                <!--Second column-->
                                <div class="col-md-6">
                                    <div class="md-form mb-0">
                                        <div class="md-form mb-0">
                                            <input type="text" name="last_name" id="form52" class="form-control">
                                            <label for="form52" class="">Last name *</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--/.First row-->

                            <!--Second row-->
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="md-form mb-0">
                                        <input type="text" name="email" id="form51" class="form-control">
                                        <label for="form51" class="">Email *</label>
                                    </div>
                                </div>
                            </div>
                            <!--/Second row-->

                            <!--Third row-->
                            <div class="row">
                                <!--First column-->
                                <div class="col-md-12">
                                    <div class="md-form mb-0">
                                        <textarea type="text" name="comments" id="form76" class="md-textarea form-control" rows="3"></textarea>
                                        <label for="form76">Your message</label>
                                    </div>
                                </div>
                            </div>
                            <!--/.Third row-->
                            <div class="text-center text-md-right mt-4"> <button type="submit" class="btn btn-dark rounded-pill">Submit</button> </div>
                        </form>
                    </div>
                    <!--.First column-->

                    <!--Second column-->
                    <div class="col-md-4">
                        <ul class="contact-icons list-unstyled text-center">
                            <li><i class="fas fa-map-marker-alt fa-2x"></i>
                                <p>Islamabad, 44000, Pakistan.</p>
                            </li>
                            <li><i class="fas fa-phone fa-2x"></i>
                                <p>+92 344 493 6099</p>
                            </li>
                            <li><i class="fas fa-envelope fa-2x"></i>
                                <p>sulemancute12@gmail.com</p>
                            </li>
                        </ul>
                    </div>
                    <!--.Second column-->
                </div>

            </section>
            <!--/Section: Contact v.2-->

        </div>
        <!-- Contact form -->

        <div class="streak1">
            <div class="flex-center">
                <ul class="list-unstyled">
                    <li><h2 class="h2-responsive mt-5 wow fadeIn">Want an outstanding project?</h2></li>
                    <li><h5 class="h5-responsive wow fadeIn" data-wow-delay="0.2s">Just send me a message!</h5></li>
                </ul>
            </div>
        </div>

        <!-- /.Customers carousel -->

    </main>
    <!--/Main layout-->

    <!-- Scrollspy -->
    <div class="dotted-scrollspy clearfix d-none d-sm-block">
        <ul class="nav smooth-scroll flex-column">
            <li class="nav-item"><a class="nav-link" href="#home"><span></span></a></li>
            <li class="nav-item"><a class="nav-link" href="#about"><span></span></a></li>
            <li class="nav-item"><a class="nav-link" href="#skills"><span></span></a></li>
            <li class="nav-item"><a class="nav-link" href="#works"><span></span></a></li>
            <li class="nav-item"><a class="nav-link" href="#contact"><span></span></a></li>
        </ul>
    </div>

    <!-- SCRIPTS -->

    <!-- JQuery -->
    <script type="text/javascript" src="https://mdbootstrap.com/previews/templates/portfolio/js/jquery-3.3.1.min.js"></script>
    <!-- Bootstrap tooltips -->
    <script type="text/javascript" src="https://mdbootstrap.com/previews/templates/portfolio/js/popper.min.js"></script>
    <!-- Bootstrap core JavaScript -->
    <script type="text/javascript" src="https://mdbootstrap.com/previews/templates/portfolio/js/bootstrap.min.js"></script>
    <!-- MDB core JavaScript -->
    <script type="text/javascript" src="https://mdbootstrap.com/previews/templates/portfolio/js/mdb.min.js"></script>

    <script>
        // initialize scrollspy
        $('body').scrollspy({
            target: '.dotted-scrollspy'
        });

        // initialize lightbox
        $(function () {
            $("#mdb-lightbox-ui").load("../mdb-addons/mdb-lightbox-ui.html");
        });

        $('.navbar-collapse a').click(function(){
            $(".navbar-collapse").collapse('hide');
        });

        /* WOW.js init */
        new WOW().init();

    </script>

</body>
</html>
