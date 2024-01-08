<?php
$fname = $_POST['fname'];
$sname = $_POST['sname'];
$email = $_POST['email'];
$dob_date = $_POST['dob_date'];
$dob_month = $_POST['dob_month'];
$dob_year = $_POST['dob_year'];
$gender = $_POST['gender'];

if (!empty($fname) || !empty($sname) || !empty($email) || !empty($date) || !empty($month) || !empty($year) || !empty($gender)) {
    $host = "localhost";
    $dbusername = "root";
    $dbpassword = "";
    $dbname = "test";

    $conn = new mysqli($host, $dbusername, $dbpassword, $dbname);

    if (mysqli_connect_error())
        die('Connect Error (' . mysqli_connect_error() . ')' . mysqli_connect_error());
} else {
    $SELECT = "SELECT email FROM signup where email = ? Limit 1";
    $INSERT = "INSERT Into register (fname,sname,email,dob_date,dob_month,dob_year,gender) values(?,?,?,?,?,?,?)";
}
