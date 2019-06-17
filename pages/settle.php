
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
                                <h2 class="title">Settle Supplies</h2>
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
                                <h4>Settle Supplies</h4>
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
                                            <th>Amount to Pay </th>
                                            <th>Action </th>
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
<script src="https://js.paystack.co/v1/inline.js"></script>
<script>
    $.ajax({
        type: "POST",
        url: "../scripts/settlescript.php",
        data: {functionID: 2},

        success: function (msg) {
            var result = JSON.parse(msg);
            console.log(result);
            var count = 0;
            var table = $('#example').DataTable();
            $.each(result, function (index, value) {
                count ++;
                var column1 ='<span>'+count+'</span>';
                var column2 ='<span>'+value.description+'</span>';
                var column3 ='<span>'+value.qty+'</span>';
                var column4 ='<span>'+value.name+'</span>';
                var column5 ='<span>'+value.cost+'</span>';
                var column6 ='<input type="number" name="price" id="price"  class="price" />';
                var column7 = '<button type="button" class="btn btn-primary btn-flat btn-addon m-b-10 m-l-5" id="paybtn" data-id ="'+value.id+'"><i class="ti-pencil"></i>Pay</button>';


                rowNode = table
                    .row.add( [ column1, column2, column3, column4,column5, column6, column7] )
                    .draw()
            })
        }
    });

    $('#example').on('click', '#paybtn', function (e) {
        e.preventDefault();
        var id = $(this).attr("data-id");;
        var price =  $(this).closest('tr').find('.price').val();

        var validate_array = [{'value': id, 'type': 'number', 'name': "Select an item"},
            {'value': price, 'type': 'number', 'name': "Amount Paid"},
        ];
        validate_result = validateForm(validate_array);
        if (validate_result['error'] === 0) {
            payWithPaystack(price * 100,'ovieoghenerume@gmail.com', id);
            return false;
        }
        else {
            sweetAlert("Oops...", validate_result['message'], "error");
            return false;
        }

    })

    function payWithPaystack(amount, email, id){
        var handler = PaystackPop.setup({
            key: 'pk_test_dedd78a591c8383b2881cf3442bc426fcebd5815',
            email: email,
            amount: amount,
            currency: "NGN",
            ref: ''+Math.floor((Math.random() * 1000000000) + 1), // generates a pseudo-unique reference. Please replace with a reference you generated. Or remove the line entirely so our API will generate one for you
            metadata: {
                custom_fields: [
                    {
                        display_name: "Mobile Number",
                        variable_name: "mobile_number",
                        value: "+2348012345678"
                    }
                ]
            },
            callback: function(response){

                 console.log(response);
                if(response['status'] === "success"){
                    update_db(amount,id,response['reference']);
                }
                else{
                    alert(response['message']);
                }
            },
            onClose: function(){
                //return {"status": 0, 'message': "Process Ended"};
                alert('window closed');
            }
        });
        handler.openIframe();
    }

    function update_db(price, id, reference){
        $.ajax({
            type: "POST",
            url: "../scripts/settlescript.php",
            data: {id: id, price: price, reference: reference, functionID: 1},

            success: function (msg) {
                console.log(msg);
                if (msg === "1001") {
                    swal({title: "Settled Successfully", type: "success"},
                        function () {
                            location.reload();
                        }
                    );
                }
                else if(msg === "505"){
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
    }
</script>

<!-- ========== ADD custom.js FILE BELOW WITH YOUR CHANGES ========== -->
</body>
</html>
