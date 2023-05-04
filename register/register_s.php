<?php
include('include/connections-stu.php');


function safety_input($data) {
    $data = htmlentities($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
    
if(isset($_POST['submit'])){
    $username=safety_input(strtolower($_POST['name']));
    $email=safety_input($_POST['email']);
    $password=safety_input($_POST['password']);
    $cpassword=safety_input($_POST['cpassword']);
    $phonenumber=safety_input($_POST['phonenumber']);
    $homeaddress=safety_input($_POST['homeaddress']);
    $age=safety_input($_POST['age']);
    $department=safety_input($_POST['department']);
    
}
//user info

$username=   mysqli_real_escape_string($conn,$_POST['name']);
$email=      mysqli_real_escape_string($conn,$_POST['email']);
$password=   mysqli_real_escape_string($conn,$_POST['password']);
$cpassword=  mysqli_real_escape_string($conn,$_POST['cpassword']);
$phonenumber=mysqli_real_escape_string($conn,$_POST['phonenumber']);
$homeaddress=mysqli_real_escape_string($conn,$_POST['homeaddress']);
$age=        mysqli_real_escape_string($conn,$_POST['age']);
$department= mysqli_real_escape_string($conn,$_POST['department']);
$md5pass= md5($password);
//user type
// if(isset($_POST['type'])){
//     $type=($_POST['type']);
//     $type=htmlentities(mysqli_real_escape_string($conn,$_POST['type']));
//     if(!in_array($type,['professor','student'])){
//         $errortype='please choose if you are professor or student <br>';
//         $error = 1;
//     }
// }

//user already exists
$existance="SELECT * FROM `log_stu` WHERE name='$username'";
$users=mysqli_query($conn,$existance);
$rows=mysqli_num_rows($users);
if($rows>0){
    $erroruser='<p class="error">Username already exists!</p> <br>';
    $error = 1;
}
//email already exists
$exist="SELECT * FROM `log_stu` WHERE email='$email'";
$em=mysqli_query($conn,$exist);
$rows=mysqli_num_rows($em);
if($rows>0){
    $erroremail='<p class="error">Email already exists!</p> <br>';
    $error = 1;
}

//username check
if(empty($username)){
    $erroruser='<p class="error">Please enter your username!</p> <br>';
    $error = 1;
}elseif(strlen($username)< 6){
    $erroruser='<p class="error">Username must contain at least 6 letters!</p> <br>';
    $error = 1;
}elseif(filter_var($username,FILTER_VALIDATE_INT)){
    $erroruser='<p class="error">Enter letters not numbers only!</p> <br>';
    $error = 1;
}
//email check
if(empty($email)){
    $erroremail='<p class="error">Please enter your email!</p> <br>';
    $error = 1;
}elseif(!filter_var($email,FILTER_VALIDATE_EMAIL)){
    $erroremail='<p class="error">Please enter VALID email format!</p> <br>';
    $error = 1;
}
//user
// if(empty($type)){
//     $errortype='<p class="error">Please choose if you are professor or student!</p> <br>';
//     $error= 1;
//     include('register2.php');
// }
//password
if(empty($password)){
    $errorpass='<p class="error">Please enter your password!</p> <br>';
    $error= 1;
    include('register1.php');
}elseif(strlen($password)< 6){
    $errorpass='<p class="error">Password must contain at least 6 characters!</p> <br>';
    $error = 1;
    include('register1.php');
}elseif($password !== $cpassword){
    $errorpass='<p class="error">Your entered password doesnot match!</p> <br>';
    $error = 1;
    include('register1.php');
}
else{
    if(($error==0)&&($rows==0)){
        $insert= "INSERT INTO log_stu(name,email,password,confirmpass,md5pass,phonenumber,homeaddress,age,department) 
        VALUES ('$username','$email','$password','$cpassword','$md5pass','$phonenumber','$homeaddress','$age','$department')";
        mysqli_query($conn,$insert);
        header('location:../login/index2.php');
    }else{
        include('register1.php');
    }
}
?>