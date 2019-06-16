<!DOCTYPE html>

<?php
include_once "../includes/header.php"
?>

<body class="top-navbar-fixed">
<div class="main-wrapper">

    <?php

    include_once '../includes/navbar.php';
    ?>
    <!-- ========== WRAPPER FOR BOTH SIDEBARS & MAIN CONTENT ========== -->
    <div class="content-wrapper">
        <div class="content-container">
            <?php
            include_once "../includes/sidebar.php";
            ?>
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
<?php
include_once "../includes/footer.php";
?>

<!-- ========== ADD custom.js FILE BELOW WITH YOUR CHANGES ========== -->
</body>
</html>
