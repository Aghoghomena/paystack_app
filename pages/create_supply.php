
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
                                <h2 class="title">Create Supply</h2>
                            </div>
                            <!-- /.col-sm-6 -->

                            <!-- /.col-sm-6 text-right -->
                        </div>
                    </div>
                </section>

                <section class="section">
                    <div class="container-fluid">
                        <form id="form" name="form" method="post">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="col-md-6">
                                        <div class="col-md-12">
                                            <label>Supplier <span style=color:red;>*</span></label>
                                            <select class="form-control" id="supplier">
                                                <option value="">Select Supplier</option>
                                            </select>
                                        </div>
                                        <div class="col-md-12">
                                            <label>Quantity <span style=color:red;>*</span></label>
                                            <input type="number" class="form-control" placeholder="Quantity" id="qty" name="email"/>
                                        </div>
                                        <div class="col-md-12">
                                            <br/>
                                            <div class="btn-group pull-right mt-10" role="group">
                                                <button type="submit" id="btnadd" class="btn btn-success btn-labeled">Submit<span
                                                        class="btn-label btn-label-right"><i class="fa fa-check"></i></span>
                                                </button>
                                            </div>
                                            <!-- /.btn-group -->
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="col-md-12">
                                            <label>Description<span style=color:red;>*</span></label>
                                            <input type="text" class="form-control" placeholder="Description" id="decs" name="name"/>
                                        </div>
                                        <div class="col-md-12">
                                            <label>Total Cost <span style=color:red;>*</span></label>
                                            <input type="number" class="form-control" placeholder="Cost" id="cost" name="address"/>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
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
    $('#btnadd').click(function (e) {
        e.preventDefault();
        var supplier = $('#supplier').val();
        var qty = $('#qty').val();
        var desc = $('#decs').val();
        var price = $('#cost').val();
        var validate_array = [{'value': supplier, 'type': 'number', 'name': "Select Supplier"},
            {'value': qty, 'type': 'string', 'name': "Enter Quantity"},
            {'value': desc, 'type': 'string', 'name': "Enter Desc"},
            {'value': price, 'type': 'number', 'name': "Enter Price"}
        ];
        validate_result = validateForm(validate_array);
        if (validate_result['error'] === 0) {

            $.ajax({
                type: "POST",
                url: "../scripts/supplyscript.php",
                data: {supplier: supplier, qty: qty, desc:desc, price:price,functionID: 1},

                success: function (msg) {
                    console.log('this is it' + msg);

                    if (msg === "1001") {
                        swal({title: "Supplies Created Successfully", type: "success"},
                            function () {
                                location.reload();
                            }
                        );
                    }
                    else if(status === "505"){
                        swal({title: "Session Expired", type: "error"},
                            function () {
                                window.location = "../logout.php";
                            }
                        );
                    }
                    else {
                        sweetAlert("Oops...", msg, "error");
                        return false;
                    }

                }
            });

            return false;
        }
        else {
            sweetAlert("Oops...", validate_result['message'], "error");
            return false;
        }

    });
    //get suppliers

    $.ajax({
        type: "POST",
        url: "../scripts/supplyscript.php",
        data: {functionID: 2},

        success: function (msg) {
            $('#supplier').append(msg);

        }
    });
</script>

<!-- ========== ADD custom.js FILE BELOW WITH YOUR CHANGES ========== -->
</body>
</html>
