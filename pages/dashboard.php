<?php
include_once "../includes/checklogin.php";
include_once "../includes/header.php"
?>

<!DOCTYPE html>
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
                                    <span class="number counter csuppliers"></span>
                                    <span class="name">Suppliers</span>
                                    <span class="bg-icon"><i class="fa fa-comments"></i></span>
                                </a>
                                <!-- /.dashboard-stat -->

                                <!-- /.src-code -->
                            </div>
                            <!-- /.col-lg-3 col-md-3 col-sm-6 col-xs-12 -->

                            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                                <a class="dashboard-stat bg-danger" href="#">
                                    <span class="number counter csupply"></span>
                                    <span class="name">Supplies</span>
                                    <span class="bg-icon"><i class="fa fa-ticket"></i></span>
                                </a>
                                <!-- /.dashboard-stat -->


                            </div>
                            <!-- /.col-lg-3 col-md-3 col-sm-6 col-xs-12 -->

                            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                                <a class="dashboard-stat bg-warning" href="#">
                                    <span class="number counter cpaid"></span>
                                    <span class="name">Total Paid (&#8358)</span>
                                    <span class="bg-icon"><i class="fa fa-bank"></i></span>
                                </a>
                                <!-- /.dashboard-stat -->

                            </div>
                            <!-- /.col-lg-3 col-md-3 col-sm-6 col-xs-12 -->

                            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                                <a class="dashboard-stat bg-success" href="#">
                                    <span class="number counter cpending"></span>
                                    <span class="name">Total Pending (&#8358)</span>
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
                            <div class="col-md-12">
                                <div class="panel border-primary no-border border-3-top" data-panel-control>
                                    <div class="panel-heading">
                                        <div class="panel-title">
                                            <h5>Table
                                                <small>with actions</small>
                                            </h5>
                                        </div>
                                    </div>
                                    <div class="panel-body">

                                        <table class="table table-striped table-bordered" id="example">
                                            <thead>
                                            <tr>
                                                <th>S/No</th>
                                                <th>Name</th>
                                                <th>Type</th>
                                                <th>Address</th>
                                                <th>Email</th>
                                                <th>Mobile No</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            </tbody>
                                        </table>
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

<script>
    $.ajax({
        type: "POST",
        url: "../scripts/../scripts/home_script.php",
        data: {functionID: 1},

        success: function (response) {
            var result = JSON.parse(response);
            if (result.status === true) {
                $(".csuppliers").html(result.count.suppliers);
                $(".csupply").html(result.count.supplies);


                if(result.count.payed === 'null' || result.count.payed === null){
                    $(".cpaid").html(0);
                }
                else{
                    $(".cpaid").html(result.count.payed);
                }
                if(result.count.pending === 'null' || result.count.pending === null){
                    $(".cpending").html(0);
                }
                else{
                    $(".cpending").html(result.count.pending);
                }


            }
        }
    })

    $.ajax({
        type: "POST",
        url: "../scripts/home_script.php",
        data: {functionID: 2},

        success: function (msg) {
            var result = JSON.parse(msg);
            console.log(result);
            var count = 0;
            var table = $('#example').DataTable();
            $.each(result, function (index, value) {
                count ++;
                var column1 ='<span>'+count+'</span>';
                var column2 ='<span>'+value.name+'</span>';
                var column3 ='<span>'+value.type_name+'</span>';
                var column4 ='<span>'+value.address+'</span>';
                var column5 ='<span>'+value.email+'</span>';
                var column6 ='<span>'+value.phone_no+'</span>';

                rowNode = table
                    .row.add( [ column1, column2, column3, column4,column5, column6] )
                    .draw()
            })
        }
    });

</script>

<!-- ========== ADD custom.js FILE BELOW WITH YOUR CHANGES ========== -->
</body>
</html>
