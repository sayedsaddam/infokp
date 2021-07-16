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
    <body>
        <!--Navbar -->
        <nav class="mb-0 navbar navbar-expand-lg navbar-dark default-color">
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
        <div class="jumbotron jumbotron-fluid aqua-gradient text-light">
            <div class="container">
                <h1 class="display-4">Progressive Ventures</h1>
                <p>Activity Tracking solution - PVSol Pvt. Ltd.</p>
            </div>
        </div>
        <div class="container-fluid my-5">
            <!-- Section -->
            <section>
                <div class="row">
                    <div class="col-8">
                        <div class="card">
                            <div class="card-header">
                                <div class="row">
                                    <div class="col-8">
                                        <h5 class="card-title">Task List - Staff</h5>
                                    </div>
                                    <div class="col-4 text-right">
                                        <a data-toggle="modal" data-target="#add_task" class="text-info font-weight-bold"><i class="fa fa-plus"></i> Add New</a>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body">
                                <table class="table table-hover table-bordered table-sm table-responsive-md btn-table">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Employee Name</th>
                                            <th>Task Description</th>
                                            <th>Due Date</th>
                                            <th>Priority</th>
                                            <th>Status</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <th scope="row">1</th>
                                            <td>Mark Otto</td>
                                            <td><a href="<?= base_url('admin/todo_list'); ?>">Raja Ishtiq Bahria (PVSol) Report (Engr Noreen)</a></td>
                                            <td>Jul 20, 2021</td>
                                            <td><span class="badge badge-secondary">medium</span></td>
                                            <td><span class="badge badge-warning badge-pill">pending</span></td>
                                        </tr>
                                        <tr>
                                            <th scope="row">2</th>
                                            <td>Jacob Fat</td>
                                            <td><a href="<?= base_url('admin/todo_list'); ?>">3KW Hybrid Quotation for Mr. Safeer Bani Gala</a></td>
                                            <td>Jul 21, 2021</td>
                                            <td><span class="badge badge-danger">high</span></td>
                                            <td><span class="badge badge-secondary badge-pill">progress</span></td>
                                        </tr>
                                        <tr>
                                            <th scope="row">3</th>
                                            <td>Larry Page</td>
                                            <td><a href="<?= base_url('admin/todo_list'); ?>">Vehari Mosque System sizing report</a></td>
                                            <td>Jul 12, 2021</td>
                                            <td><span class="badge badge-info">low</span></td>
                                            <td><span class="badge badge-success badge-pill">completed</span></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="card">
                            <div class="card-header">
                                <h5 class="card-title">Todos - My Tasks</h5>
                            </div>
                            <div class="card-body">
                                <ul class="list-group">
                                    <li class="list-group-item d-flex justify-content-between align-items-center">
                                        <a href="">Pending</a>
                                        <span class="badge badge-warning badge-pill">14</span>
                                    </li>
                                    <li class="list-group-item d-flex justify-content-between align-items-center">
                                        <a href="">Progress</a>
                                        <span class="badge badge-secondary badge-pill">2</span>
                                    </li>
                                    <li class="list-group-item d-flex justify-content-between align-items-center">
                                        <a href="">Completed</a>
                                        <span class="badge badge-success badge-pill">1</span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- Section -->
        </div>
        <!-- Side Modal Top Left -->
        <div class="modal fade left" id="add_task" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
        aria-hidden="true">
            <div class="modal-dialog modal-side modal-top-left" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title w-100" id="myModalLabel">Add Task</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        ...
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary">Save changes</button>
                    </div>
                </div>
            </div>
        </div>
        <!-- Side Modal Top Left -->
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