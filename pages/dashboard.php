<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>BakeryPay </title>

    <!-- ========== COMMON STYLES ========== -->
    <link rel="stylesheet" href="../css/bootstrap.min.css" media="screen">
    <link rel="stylesheet" href="../css/font-awesome.min.css" media="screen">
    <link rel="stylesheet" href="../css/animate-css/animate.min.css" media="screen">
    <link rel="stylesheet" href="../css/lobipanel/lobipanel.min.css" media="screen">

    <!-- ========== PAGE STYLES ========== -->
    <link rel="stylesheet" href="../css/prism/prism.css" media="screen"> <!-- USED FOR DEMO HELP - YOU CAN REMOVE IT -->
    <link rel="stylesheet" href="../css/toastr/toastr.min.css" media="screen">
    <link rel="stylesheet" href="../css/icheck/skins/line/blue.css">
    <link rel="stylesheet" href="../css/icheck/skins/line/red.css">
    <link rel="stylesheet" href="../css/icheck/skins/line/green.css">

    <!-- ========== THEME CSS ========== -->
    <link rel="stylesheet" href="../css/main.css" media="screen">

    <!-- ========== MODERNIZR ========== -->
    <script src="../js/modernizr/modernizr.min.js"></script>
</head>
<body class="top-navbar-fixed">
<div class="main-wrapper">

    <!-- ========== TOP NAVBAR ========== -->
    <nav class="navbar top-navbar bg-white box-shadow">
        <div class="container-fluid">
            <div class="row">
                <div class="navbar-header no-padding">
                    <a class="navbar-brand" href="index.html">
                        <img src="../images/logo-dark.svg" alt="Bakery Pay" class="logo">
                    </a>
                </div>
                <!-- /.navbar-header -->

                <div class="collapse navbar-collapse" id="navbar-collapse-1">

                    <ul class="nav navbar-nav navbar-right" data-dropdown-in="fadeIn" data-dropdown-out="fadeOut">
                        <!-- /.dropdown -->
                       <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
                               aria-expanded="false">John Doe <span class="caret"></span></a>
                            <ul class="dropdown-menu profile-dropdown">
                                <li class="profile-menu bg-gray">
                                    <div class="">
                                        <img src="http://placehold.it/60/c2c2c2?text=User" alt="John Doe" class="img-circle profile-img">
                                        <div class="profile-name">
                                            <h6>John Doe</h6>
                                            <a href="pages-profile.html">View Profile</a>
                                        </div>
                                        <div class="clearfix"></div>
                                    </div>
                                </li>
                                <li><a href="#"><i class="fa fa-cog"></i> Settings</a></li>
                                <li><a href="#"><i class="fa fa-sliders"></i> Account Details</a></li>
                                <li role="separator" class="divider"></li>
                                <li><a href="#" class="color-danger text-center"><i class="fa fa-sign-out"></i> Logout</a></li>
                            </ul>
                        </li>
                   </ul>
                    <!-- /.nav navbar-nav navbar-right -->
                </div>
                <!-- /.navbar-collapse -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container-fluid -->
    </nav>

    <!-- ========== WRAPPER FOR BOTH SIDEBARS & MAIN CONTENT ========== -->
    <div class="content-wrapper">
        <div class="content-container">

            <!-- ========== LEFT SIDEBAR ========== -->
            <div class="left-sidebar fixed-sidebar bg-black-300 box-shadow">
                <div class="sidebar-content">

                    <div class="sidebar-nav">
                        <ul class="side-nav color-gray">
                            <li>
                                <a href="#"><i class="fa fa-dashboard"></i> <span>Dashboard</span> <i class="fa fa-angle-right arrow"></i></a>
                            </li>

                            <li class="nav-header">
                                <span class="">Settings</span>
                            </li>
                            <li class="has-children">
                                <a href="#"><i class="fa fa-file-text"></i> <span>Suppliers</span> <i class="fa fa-angle-right arrow"></i></a>
                                <ul class="child-nav">
                                    <li><a href="layout-fixed-top.html"><i class="fa fa-lock"></i> <span>Create Supplier Navbar</span></a></li>
                                    <li><a href="layout-fixed-top-side.html"><i class="fa fa-thumb-tack"></i>
                                            <span>Fixed Navbar & Sidebar</span></a></li>
                                    <li><a href="layout-static-top-side.html"><i class="fa fa-unlock"></i> <span>Static Navbar & Sidebar</span></a>
                                    </li>
                                    <li><a href="layout-small-sidebar.html"><i class="fa fa-sign-in"></i> <span>Small Sidebar</span></a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                    <!-- /.sidebar-nav -->
                </div>
                <!-- /.sidebar-content -->
            </div>
            <!-- /.left-sidebar -->

            <div class="main-page">
                <!-- /.container-fluid -->

                <section class="section">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                                <a class="dashboard-stat bg-primary" href="#">
                                    <span class="number counter">1,411</span>
                                    <span class="name">Comments</span>
                                    <span class="bg-icon"><i class="fa fa-comments"></i></span>
                                </a>
                                <!-- /.dashboard-stat -->

                                <!-- /.src-code -->
                            </div>
                            <!-- /.col-lg-3 col-md-3 col-sm-6 col-xs-12 -->

                            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                                <a class="dashboard-stat bg-danger" href="#">
                                    <span class="number counter">322</span>
                                    <span class="name">Total Tickets</span>
                                    <span class="bg-icon"><i class="fa fa-ticket"></i></span>
                                </a>
                                <!-- /.dashboard-stat -->


                            </div>
                            <!-- /.col-lg-3 col-md-3 col-sm-6 col-xs-12 -->

                            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                                <a class="dashboard-stat bg-warning" href="#">
                                    <span class="number counter">5,551</span>
                                    <span class="name">Bank Credits</span>
                                    <span class="bg-icon"><i class="fa fa-bank"></i></span>
                                </a>
                                <!-- /.dashboard-stat -->

                            </div>
                            <!-- /.col-lg-3 col-md-3 col-sm-6 col-xs-12 -->

                            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                                <a class="dashboard-stat bg-success" href="#">
                                    <span class="number counter">16,710</span>
                                    <span class="name">Thumbs Up</span>
                                    <span class="bg-icon"><i class="fa fa-thumbs-o-up"></i></span>
                                </a>
                                <!-- /.dashboard-stat -->

                            </div>
                            <!-- /.col-lg-3 col-md-3 col-sm-6 col-xs-12 -->

                        </div>
                        <!-- /.row -->
                    </div>
                    <!-- /.container-fluid -->
                </section>
                <!-- /.section -->

                <section class="section pt-n">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="panel border-primary no-border border-3-top" data-panel-control>
                                    <div class="panel-heading">
                                        <div class="panel-title">
                                            <h5>Table
                                                <small>with actions</small>
                                            </h5>
                                        </div>
                                    </div>
                                    <div class="panel-body">

                                        <table class="table table-striped table-bordered">
                                            <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>First Name</th>
                                                <th>Username</th>
                                                <th>Action</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            <tr>
                                                <th scope="row">1</th>
                                                <td>Mark</td>
                                                <td>@mdo</td>
                                                <td>
                                                    <button type="button" class="btn btn-success btn-xs btn-labeled">Approve<span
                                                            class="btn-label btn-label-right"><i class="fa fa-check"></i></span></button>
                                                    <button type="button" class="btn btn-danger btn-xs btn-labeled">Reject<span
                                                            class="btn-label btn-label-right"><i class="fa fa-times"></i></span></button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th scope="row">2</th>
                                                <td>Jacob</td>
                                                <td>@cool</td>
                                                <td>
                                                    <button type="button" class="btn btn-success btn-xs btn-labeled">Approve<span
                                                            class="btn-label btn-label-right"><i class="fa fa-check"></i></span></button>
                                                    <button type="button" class="btn btn-danger btn-xs btn-labeled">Reject<span
                                                            class="btn-label btn-label-right"><i class="fa fa-times"></i></span></button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th scope="row">5</th>
                                                <td>Sachin</td>
                                                <td>@the.god</td>
                                                <td>
                                                    <button type="button" class="btn btn-success btn-xs btn-labeled">Approve<span
                                                            class="btn-label btn-label-right"><i class="fa fa-check"></i></span></button>
                                                    <button type="button" class="btn btn-danger btn-xs btn-labeled">Reject<span
                                                            class="btn-label btn-label-right"><i class="fa fa-times"></i></span></button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th scope="row">3</th>
                                                <td>Larry</td>
                                                <td>@twitter</td>
                                                <td>
                                                    <button type="button" class="btn btn-success btn-xs btn-labeled">Approve<span
                                                            class="btn-label btn-label-right"><i class="fa fa-check"></i></span></button>
                                                    <button type="button" class="btn btn-danger btn-xs btn-labeled">Reject<span
                                                            class="btn-label btn-label-right"><i class="fa fa-times"></i></span></button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th scope="row">4</th>
                                                <td>Salman</td>
                                                <td>@bhai</td>
                                                <td>
                                                    <button type="button" class="btn btn-success btn-xs btn-labeled">Approve<span
                                                            class="btn-label btn-label-right"><i class="fa fa-check"></i></span></button>
                                                    <button type="button" class="btn btn-danger btn-xs btn-labeled">Reject<span
                                                            class="btn-label btn-label-right"><i class="fa fa-times"></i></span></button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th scope="row">6</th>
                                                <td>Mark</td>
                                                <td>@faceb</td>
                                                <td>
                                                    <button type="button" class="btn btn-success btn-xs btn-labeled">Approve<span
                                                            class="btn-label btn-label-right"><i class="fa fa-check"></i></span></button>
                                                    <button type="button" class="btn btn-danger btn-xs btn-labeled">Reject<span
                                                            class="btn-label btn-label-right"><i class="fa fa-times"></i></span></button>
                                                </td>
                                            </tr>
                                            </tbody>
                                        </table>

                                    </div>
                                </div>
                                <!-- /.panel -->
                            </div>
                            <!-- /.col-md-6 -->

                            <div class="col-md-6">
                                <div class="panel border-primary no-border border-3-top" data-panel-control>
                                    <div class="panel-heading">
                                        <div class="panel-title">
                                            <h5>Tasks
                                                <small>with priority indicator</small>
                                            </h5>
                                        </div>
                                    </div>
                                    <div class="panel-body p-20">

                                        <p>Following is the list of all the pending tasks. Click on task to mark it done. You can toggle the status by
                                            clicking on an item.</p>

                                        <div class="row">
                                            <div class="tasks-list col-md-8 col-md-offset-2">
                                                <div class="task mb-10">
                                                    <input type="checkbox" name="one" class="line-style-blue">
                                                    <label>This is medium priority task. It is indicated in primary color.</label>
                                                </div>
                                                <!-- /.task -->

                                                <div class="task mb-10">
                                                    <input type="checkbox" name="one" class="line-style-red">
                                                    <label>This is top priority task. It is indicated in danger color.</label>
                                                </div>
                                                <!-- /.task -->

                                                <div class="task mb-10">
                                                    <input type="checkbox" name="one" class="line-style-green">
                                                    <label>This is low priority task. It is indicated in success color. </label>
                                                </div>
                                                <!-- /.task -->

                                                <div class="task mb-10">
                                                    <input type="checkbox" name="one" class="line-style-blue" checked="">
                                                    <label>This is medium priority task. It is indicated in primary color.</label>
                                                </div>
                                                <!-- /.task -->

                                            </div>
                                            <!-- /.tasks-list -->
                                        </div>

                                    </div>
                                </div>
                                <!-- /.panel -->
                            </div>
                            <!-- /.col-md-6 -->
                        </div>
                        <!-- /.row -->
                    </div>
                    <!-- /.container-fluid -->
                </section>
                <!-- /.section -->
            </div>
            <!-- /.main-page -->

        </div>
        <!-- /.content-container -->
    </div>
    <!-- /.content-wrapper -->

</div>
<!-- /.main-wrapper -->

<!-- ========== COMMON JS FILES ========== -->
<script src="../js/jquery/jquery-2.2.4.min.js"></script>
<script src="../js/jquery-ui/jquery-ui.min.js"></script>
<script src="../js/bootstrap/bootstrap.min.js"></script>
<script src="../js/pace/pace.min.js"></script>
<script src="../js/lobipanel/lobipanel.min.js"></script>
<script src="../js/iscroll/iscroll.js"></script>

<!-- ========== PAGE JS FILES ========== -->
<script src="../js/prism/prism.js"></script>
<script src="../js/icheck/icheck.min.js"></script>

<!-- ========== THEME JS ========== -->
<script src="../js/main.js"></script>
<script src="../js/production-chart.js"></script>
<script src="../js/traffic-chart.js"></script>
<script src="../js/task-list.js"></script>
<script>

</script>

<!-- ========== ADD custom.js FILE BELOW WITH YOUR CHANGES ========== -->
</body>
</html>
