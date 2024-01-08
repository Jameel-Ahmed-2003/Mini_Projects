<?php
if (!isset($_POST['submit'])) {
    $uname = $_POST['uname'];
    $pwd = $_POST['pwd'];
    $con=mysqli_connect("localhost:3306","root","","facebook");
    $sql="SELECT * from login WHERE uname='$uname' AND pwd='$pwd'";
    $result=mysqli_query($con,$sql);
    $resultcheck=mysqli_num_rows($result);
    if($resultcheck>0){
        echo "Login Successful";
        sleep(3);
        header("Location:del2.html");
    }
    
    else
    echo "Invalid username or password";
}
?>