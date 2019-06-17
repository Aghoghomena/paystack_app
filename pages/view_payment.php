
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
            <!-- /.main-page -->
            <div class="main-page">

                <!-- /.container-fluid -->

                <section class="section">
                    <div class="container-fluid">
                        <div class="row page-title-div">
                            <div class="col-sm-6">
                                <h2 class="title">View Payments</h2>
                            </div>
                            <!-- /.col-sm-6 -->

                            <!-- /.col-sm-6 text-right -->
                        </div>
                    </div>
                </section>

                <section class="section">
                    <div class="container-fluid">
                        <div class="card alert">
                            <div class="card-header">
                                <h4>View Supplies</h4>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-striped table-bordered" id="example">
                                        <thead>
                                        <tr>
                                            <th>S/No</th>
                                            <th>Description</th>
                                            <th>Quantity</th>
                                            <th>Supplier</th>
                                            <th>Cost Price</th>
                                            <th>Amount Paid</th>
                                            <th>Paymnent Reference</th>
                                            <th>Paid By</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

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
        url: "../scripts/supplyscript.php",
        data: {functionID: 4},

        success: function (msg) {
            var result = JSON.parse(msg);
            console.log(result);
            var count = 0;
            var table = $('#example').DataTable();
            $.each(result, function (index, value) {
                count ++;
                //var name = value.firstname +' '+ value.lastname;
                var column1 ='<span>'+count+'</span>';
                var column2 ='<span>'+value.description+'</span>';
                var column3 ='<span>'+value.qty+'</span>';
                var column4 ='<span>'+value.name+'</span>';
                var column5 ='<span>'+value.cost+'</span>';
                var column6 ='<span>'+value.amount_payed+'</span>';
                var column7 ='<span>'+value.reference+'</span>';
                var column8 ='<span>'+name+'</span>';


                rowNode = table
                    .row.add( [ column1, column2, column3, column4,column5, column6, column7, column8] )
                    .draw()
            })
        }
    });
</script>

<!-- ========== ADD custom.js FILE BELOW WITH YOUR CHANGES ========== -->
</body>
</html>
