<?php
$firstname = $_SESSION['fname'];
$lastname = $_SESSION['lname'];
?>
<!-- ========== TOP NAVBAR ========== -->
<nav class="navbar top-navbar bg-white box-shadow">
    <div class="container-fluid">
        <div class="row">
            <div class="navbar-header no-padding">
                <a class="navbar-brand" href="index.php">
                    <img src="../images/logo-dark.svg" alt="Bakery Pay" class="logo">
                </a>
            </div>
            <!-- /.navbar-header -->

            <div class="collapse navbar-collapse" id="navbar-collapse-1">

                <ul class="nav navbar-nav navbar-right" data-dropdown-in="fadeIn" data-dropdown-out="fadeOut">
                    <!-- /.dropdown -->
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
                           aria-expanded="false"><?php echo $firstname.' '. $lastname;?> <span class="caret"></span></a>
                        <ul class="dropdown-menu profile-dropdown">
                            <li class="profile-menu bg-gray">
                                <div class="">
                                    <img src="http://placehold.it/60/c2c2c2?text=User" alt="John Doe" class="img-circle profile-img">
                                    <div class="profile-name">
                                        <h6>John Doe</h6>
                                    </div>
                                    <div class="clearfix"></div>
                                </div>
                            </li>
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