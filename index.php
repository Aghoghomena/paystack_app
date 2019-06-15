<?php

include_once "./setup/connect_heroku.php";

$get_users ="select email from users";
$query = mysqli_query($connect,$get_users);
$row = mysqli_fetch_row($query);
print_r($row);
echo "test";