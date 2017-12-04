<?php
//Was war nochmal ob_start??
ob_start();
session_start();
$timezone = date_default_timezone_set("Europe/Berlin");
$con = mysqli_connect("localhost", "root", "", "slotify");
if(mysqli_connect_errno()){
    echo "DB-Connect Fail" . mysqli_connect_errno();
}
?>