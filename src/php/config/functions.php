<?php 

require_once '../config.php';

function display_users(){

    global $conn;

    $query = "select * from tbl_users";
    $result = mysqli_query($conn,$query);

    return $result;
}





?>