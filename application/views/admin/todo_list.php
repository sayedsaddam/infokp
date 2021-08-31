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
         <nav class="mb-0 navbar navbar-expand-lg navbar-dark default-color">
            <a class="navbar-brand" href="<?= base_url('admin'); ?>">Progressive Ventures</a>
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
        <div class="jumbotron jumbotron-fluid aqua-gradient text-light">
            <div class="container">
                <h1 class="display-4">Progressive Ventures</h1>
                <p>Activity Tracking solution - PVSol Pvt. Ltd.</p>
            </div>
        </div>
        <div class="container-fluid">
            <div class="row">
                <div class="col-4">
                    <div class="list-group list-group-flush z-depth-1 rounded">
                        <div class="list-group-item active d-flex justify-content-start align-items-center py-3">
                            <img src="https://mdbootstrap.com/img/Photos/Avatars/img%20(31).jpg" class="rounded-circle z-depth-0" width="50" alt="avatar image">
                            <div class="d-flex flex-column pl-3">
                            <p class="font-weight-normal mb-0">Mark Otto</p>
                            <p class="small mb-0">Field Officer</p>
                            </div>
                        </div>
                        <a href="#!" class="list-group-item list-group-item-action d-flex justify-content-between align-items-center">Projects
                            <span class="badge badge-info badge-pill">26</span>
                        </a>
                        <a href="#!" class="list-group-item list-group-item-action d-flex justify-content-between align-items-center">Tasks
                            <span class="badge badge-warning badge-pill">17</span>
                        </a>
                        <a href="#!" class="list-group-item list-group-item-action d-flex justify-content-between align-items-center">Completed projects
                            <span class="badge badge-success badge-pill">10</span>
                        </a>
                        <a href="#!" class="list-group-item list-group-item-action d-flex justify-content-between align-items-center">Followers
                            <span class="badge badge-danger badge-pill">728</span>
                        </a>
                    </div>
                </div>
                <div class="col-8">
                    <!-- Section: Block Content -->
                    <section class="">
                        <div class="row">
                            <div class="col-lg-4 col-md-12 mb-4">
                                <div class="card mt-3">
                                    <div class="">
                                        <i class="far fa-money-bill-alt fa-lg warning-color z-depth-2 p-4 ml-3 mt-n3 rounded text-white"></i>
                                        <div class="float-right text-right p-3">
                                        <p class="text-uppercase text-muted mb-1"><small>Pending</small></p>
                                        <h4 class="font-weight-bold mb-0">08</h4>
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
                            </div>
                            <div class="col-lg-4 col-md-6 mb-4">
                                <div class="card mt-3">
                                    <div class="">
                                        <i class="fas fa-chart-line fa-lg info-color z-depth-2 p-4 ml-3 mt-n3 rounded text-white"></i>
                                        <div class="float-right text-right p-3">
                                        <p class="text-uppercase text-muted mb-1"><small>Progress</small></p>
                                        <h4 class="font-weight-bold mb-0">05</h4>
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
                            </div>
                            <div class="col-lg-4 col-md-6 mb-4">
                                <div class="card mt-3">
                                    <div class="">
                                        <i class="fas fa-chart-pie fa-lg success-color z-depth-2 p-4 ml-3 mt-n3 rounded text-white"></i>
                                        <div class="float-right text-right p-3">
                                        <p class="text-uppercase text-muted mb-1"><small>completed</small></p>
                                        <h4 class="font-weight-bold mb-0">04</h4>
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
                            </div>
                        </div>
                    </section>
                </div>
            </div>
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