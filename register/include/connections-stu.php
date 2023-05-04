<?php
$conn = mysqli_connect('localhost','root','','education');
if(!$conn){
    die('Error'.mysqli_connect_error());
}
?> 