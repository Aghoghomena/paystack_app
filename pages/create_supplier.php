<?php
include_once "../includes/checklogin.php";
require_once "../setup/connect_heroku.php";
$select = "select type_name, id from supplier_type order by type_name";
$query = mysqli_query($connect, $select);
$sdropdown = "";
$sdropdown .= "<select id=\"type\" class=\"form-control\">";
$sdropdown .= "<option value=\"\">"." -- Choose Type --"." </option>";
while ($row = mysqli_fetch_assoc($query)){

    $sdropdown .= "<option value=".$row['id'].">";
    $sdropdown .= $row['type_name'];
    $sdropdown .= "</option>";
}
$sdropdown .= "</select>";
$sdropdown .= '';

?>
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
                                <h2 class="title">Create Supplier</h2>
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
                                                <label>Type <span style=color:red;>*</span></label>
                                                <?php echo $sdropdown; ?>
                                            </div>
                                            <div class="col-md-12">
                                                <label>Supplier Email <span style=color:red;>*</span></label>
                                                <input type="text" class="form-control" placeholder="Supplier Email" id="email" name="email"/>
                                            </div>
                                            <div class="col-md-12">
                                                <label>Supplier Mobile <span style=color:red;>*</span></label>
                                                <input type="text" class="form-control" placeholder="Supplier Mobile" id="mobile" name="mobile"/>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="col-md-12">
                                                <label>Supplier Name <span style=color:red;>*</span></label>
                                                <input type="text" class="form-control" placeholder="Supplier Name" id="name" name="name"/>
                                            </div>
                                            <div class="col-md-12">
                                                <label>Supplier Address <span style=color:red;>*</span></label>
                                                <input type="text" class="form-control" placeholder="Supplier Address" id="address" name="address"/>
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
                                    </div>
                                </div>
                            </form>
                        </div>
                </section>

                <div class="card alert">
                    <div class="card-header">
                        <h4>View Suppliers</h4>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
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
                </div>
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
        var type = $('#type').val();
        var name = $('#name').val();
        var address = $('#address').val();
        var email = $('#email').val();
        var mobile = $('#mobile').val();
        var validate_array = [{'value': type, 'type': 'number', 'name': "Select Type"},
            {'value': address, 'type': 'string', 'name': "Enter Address"},
            {'value': email, 'type': 'email', 'name': "Enter Email"},
            {'value': mobile, 'type': 'string', 'name': "Enter Mobile"}
            ];
        validate_result = validateForm(validate_array);
        if (validate_result['error'] === 0) {

            $.ajax({
                type: "POST",
                url: "../scripts/createscript.php",
                data: {name: name, type: type, address:address, email:email, mobile:mobile, functionID: 1},

                success: function (msg) {
                    console.log('this is it' + msg);

                    if (msg === "1001") {
                        swal({title: "Supplier Created Successfully", type: "success"},
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
        url: "../scripts/createscript.php",
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
