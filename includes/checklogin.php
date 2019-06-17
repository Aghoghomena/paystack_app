<?php
session_name("bakerypay");
session_start();
if (!isset($_SESSION['id']) || $_SESSION['id'] == 0 || $_SESSION['id'] =='' ) {
    header("location: ../logout.php");
}


