<?php

session_start();

$con = mysqli_connect('localhost','root','');

mysqli_select_db($con, 'user_credentials');

$name = $_POST['name'];
$email = $_POST['email'];
$pass = $_POST['password'];
$confpass = $_POST['conf_password'];
$mobile = $_POST['mobile_no'];

$s = "select * from user_credentials where Name ='$name' and password = '$pass' ";

$result = mysqli_query($con, $s);

$num = mysqli_num_rows($result);

if($num == 1){
    echo "Username Already Taken";
}else{
    $reg = "insert into user_credentials(Name, Email, password, Confirm_password, Mobile_no) values('$name','$email','$pass','$confpass','$mobile')";
    mysqli_query($con, $reg);
    echo "Registration Successful";
}

?>