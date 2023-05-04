<?php 
    session_start();
   

    function safety_input($data) {
        $data = stripslashes($data);
        $data = htmlentities($data);
        $data = htmlspecialchars($data);
        $data = strtolower($data);
        return $data;}

$conn = mysqli_connect("localhost", "root", "", "education");
// Check connection
if (!$conn) {
die("Connection failed: " . mysqli_connect_error());
}

if(isset($_POST['submit'])){
$username =  safety_input($_POST['username'])  ;
$password =  safety_input($_POST['password'])  ;

$username = filter_input(INPUT_POST,'username');

$username = mysqli_real_escape_string($conn,$_POST['username']) ;
$password = mysqli_real_escape_string($conn,$_POST['password']) ;
}


if (empty($username)&& !empty($password)){
    $err_n = 1 ;
    header('location:../login/index2.php?error1=Please enter username');
    
}
elseif (empty($password) && !empty($username)){
    
    $err_n = 1 ;
    
    header('location:../login/index2.php?error2=Please enter password');}
elseif (empty($password) && empty($username)){
    
    $err_n = 1 ;
        
    header('location:../login/index2.php?error=Please you have to enter your username and password');}

if(!isset($err_n)){
    $sql = "SELECT * FROM log_stu WHERE email='$username' AND password ='$password'";
    $result = mysqli_query($conn,$sql);
    $row = mysqli_fetch_assoc($result);}

    if($row['email'] === $username && $row['password'] === $password){
        $_SESSION['username'] = $row['email'] ; 
        $_SESSION['id'] = $row['id'] ; 
        $_SESSION['name'] = $row['name'] ; 
       // if ($row['user']=="student"){
            header('location:../home/home-stu.php');
            exit();
       // }
        // elseif($row['user']=="professor"){
        //     header('location:../home/home-prof.php');
        //     exit();
        }else{
        header('location:../login/index2.php?error3=Wrong username or password');
        exit();
    }




?>