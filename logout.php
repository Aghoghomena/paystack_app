<?php
session_start();
session_name("bakerypay");
session_unset();
session_destroy();
header("location: index.php");
//?>
