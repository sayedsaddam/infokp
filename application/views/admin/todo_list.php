<!DOCTYPE html>
<html>
    <head>
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
    <!-- Google Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap">
    <!-- Bootstrap core CSS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/css/bootstrap.min.css" rel="stylesheet">
    <!-- Material Design Bootstrap -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.19.1/css/mdb.min.css" rel="stylesheet">
        <title><?php echo $title; ?></title>
        <!-- <link href="https://fonts.googleapis.com/css?family=Lato:400,700,900|Open+Sans:400,700,800|Roboto:400,700,900" rel="stylesheet"> -->
        <link rel="stylesheet" href="<?php //echo base_url('assets/css/font-awesome.min.css'); ?>">
        <link rel="stylesheet" href="<?php //echo base_url('assets/css/bootstrap.min.css'); ?>">
        <link rel="stylesheet" href="<?php //echo base_url('assets/css/style.css'); ?>">
        <link rel="stylesheet" href="<?php //echo base_url('assets/css/styles.css'); ?>">
        <link rel="stylesheet" href="<?php //echo base_url('assets/css/mdb.min.css'); ?>">
    </head>
    <body style="background-color: #eee;">
         <!--Navbar -->
         <nav class="mb-1 navbar navbar-expand-lg navbar-dark default-color">
            <a class="navbar-brand" href="#">Progressive Ventures</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent-333"
                aria-controls="navbarSupportedContent-333" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent-333">
                <ul class="navbar-nav mr-auto"> </ul>
                <ul class="navbar-nav ml-auto nav-flex-icons">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink-333" data-toggle="dropdown"
                        aria-haspopup="true" aria-expanded="false">
                        <i class="fas fa-user"></i>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right dropdown-default"
                        aria-labelledby="navbarDropdownMenuLink-333">
                        <a class="dropdown-item" href="#">Logged in as Admin</a>
                        <a class="dropdown-item" href="#">Profile <i class="fa fa-user ml-5"></i></a>
                        <a class="dropdown-item" href="#">Logout <i class="fa fa-sign-out-alt ml-5"></i></a>
                        </div>
                    </li>
                </ul>
            </div>
        </nav>
        <!--/.Navbar -->
        <div class="container my-5 py-5">
            <!-- Section: Block Content -->
            <section class="">
                <!--Grid row-->
                <div class="row">
                <!--Grid column-->
                <div class="col-lg-4 col-md-12 mb-4">
                    <!-- Admin card -->
                    <div class="card mt-3">
                    <div class="">
                        <i class="far fa-money-bill-alt fa-lg warning-color z-depth-2 p-4 ml-3 mt-n3 rounded text-white"></i>
                        <div class="float-right text-right p-3">
                        <p class="text-uppercase text-muted mb-1"><small>pending</small></p>
                        <h4 class="font-weight-bold mb-0">10</h4>
                        </div>
                    </div>
                    <div class="card-body pt-0">
                        <div class="progress md-progress">
                        <div class="progress-bar bg-warning" role="progressbar" style="width: 75%" aria-valuenow="75" aria-valuemin="0"
                            aria-valuemax="100"></div>
                        </div>
                        <p class="card-text">...</p>
                    </div>
                    </div>
                    <!-- Admin card -->
                </div>
                <!--Grid column-->
                <!--Grid column-->
                <div class="col-lg-4 col-md-6 mb-4">
                    <!-- Admin card -->
                    <div class="card mt-3">
                    <div class="">
                        <i class="fas fa-chart-line fa-lg info-color z-depth-2 p-4 ml-3 mt-n3 rounded text-white"></i>
                        <div class="float-right text-right p-3">
                        <p class="text-uppercase text-muted mb-1"><small>in progress</small></p>
                        <h4 class="font-weight-bold mb-0">3</h4>
                        </div>
                    </div>
                    <div class="card-body pt-0">
                        <div class="progress md-progress">
                        <div class="progress-bar bg-info" role="progressbar" style="width: 46%" aria-valuenow="46" aria-valuemin="0"
                            aria-valuemax="100"></div>
                        </div>
                        <p class="card-text">...</p>
                    </div>
                    </div>
                    <!-- Admin card -->
                </div>
                <!--Grid column-->
                <!--Grid column-->
                <div class="col-lg-4 col-md-6 mb-4">
                    <!-- Admin card -->
                    <div class="card mt-3">
                    <div class="">
                        <i class="fas fa-chart-pie fa-lg success-color z-depth-2 p-4 ml-3 mt-n3 rounded text-white"></i>
                        <div class="float-right text-right p-3">
                        <p class="text-uppercase text-muted mb-1"><small>completed</small></p>
                        <h4 class="font-weight-bold mb-0">7</h4>
                        </div>
                    </div>
                    <div class="card-body pt-0">
                        <div class="progress md-progress">
                        <div class="progress-bar bg-success" role="progressbar" style="width: 31%" aria-valuenow="31" aria-valuemin="0"
                            aria-valuemax="100"></div>
                        </div>
                        <p class="card-text">...</p>
                    </div>
                    </div>
                    <!-- Admin card -->
                </div>
                <!--Grid column-->
                </div>
                <!--Grid row-->
            </section>
            <!--Section: Content-->
        </div>
        <script src="<?php echo base_url('assets/js/bootstrap.min.js'); ?>"></script>
        <script src="<?php echo base_url('assets/js/custom.js'); ?>"></script>
        <!-- JQuery -->
        <script src="https://mdbootstrap.com/api/snippets/static/download/MDB-Pro_4.19.2/js/jquery.min.js"></script>
        <!-- Bootstrap tooltips -->
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.4/umd/popper.min.js"></script>
        <!-- Bootstrap core JavaScript -->
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/js/bootstrap.min.js"></script>
        <!-- MDB core JavaScript -->
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.19.1/js/mdb.min.js"></script>
    </body>
</html>