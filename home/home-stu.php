
<?php
    session_start(); 

    $conn = mysqli_connect("localhost", "root", "", "education");
    // Check connection
    if (!$conn) {
      die("Connection failed: " . mysqli_connect_error());
    }
    if(isset($_SESSION['name']) && isset($_SESSION['username']))
        $name = $_SESSION['name'];
    else   {
        header('location:../login/index2.php ');
        exit();
    }  if(isset($_GET['error']))
    echo '<p class="error" >'.$_GET['error'].'</p>';
       

    ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/home.css">
</head>
<body>
    <div class="header">
        <div class="nav">
            <a href="home-stu.php" class="navb navbar1">Home</a>
            <a href="../about/aboutus-stu.php" class="navb navbar2">About</a>
            <a href="../yazed/contact_us.php" class="navb navbar3">Contact us</a>
            <!-- <a href="logout.php" class="navb navbar4">Login from another account</a> -->
            <a href="../stu func/gpa.php" class="navb navbar4">Your GPA Calculator</a>
            <!-- <span class="navbar">THANKS</span> -->
        </div>    
    </div>
    <div class="background" style="width: 100%; height: 100vh; background-image: url(img/J-PAL-summary-126-ed-tech-studies-MIT-00.jpg); background-repeat: no-repeat; background-size: cover; background-position: center; filter: blur(20px);"></div>
        <!-- <div class="images">
        </div> -->
        <div class="container" style="  background-position: center; background-image: url(img/J-PAL-summary-126-ed-tech-studies-MIT-00.jpg); background-repeat: no-repeat; background-size: cover;" >
            <div class="overlay"  >
                <div class="content">
                    <div class="nam">
                        <h2 class="welcome">Welcome Student :</h2>
                        <span class="welc"><?php echo  $name ?></span>
                    </div>
                    <div class="btns">
                        <button class="btn-signup"><a class="logout" href="logout.php">Log Out</a></button>
                    </div>
                </div>
                <div class="content2">    
                            <div class="item">
                                <img src="img/fci2019-09-237340037.jpg" alt="this is image" >
                                <div class="layer-cont">
                                    <div class="layer">                                      
                                        <a href="../register courses/it_project/index.php" class="link">Click Here</a>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <img src="img/990468.png" alt="this is image" >
                                <div class="layer-cont">
                                    <div class="layer">                                    
                                        <a href="../upload sheet/index.php" class="link">Click Here</a>          
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <img src="img/film-and-vid.jpg" alt="this is image" >
                                <div class="layer-cont">
                                    <div class="layer">                                      
                                        <a href="../video-pdf/chose.php" class="link">Click Here</a>         
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <img src="img/icpc_2019_2-1024x504.jpg" alt="this is image" >
                                <div class="layer-cont">
                                    <div class="layer">                                      
                                        <a href="../events/index.php" class="link">Click Here</a>         
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <img src="img/istockphoto-1210746752-612x612.jpg" alt="this is image" >
                                <div class="layer-cont">
                                    <div class="layer">                                     
                                        <a href="../take-exam/take-exam/form.php" class="link">Click Here</a>          
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <img src="img/grades.jpg" alt="this is image" >
                                <div class="layer-cont">
                                    <div class="layer">                                                                           
                                        <a href="../grades/getresults.php" class="link">Click Here</a>     
                                    </div>
                                </div>
                            </div>
                        </div>
             </div>
        </div>
            
    
            
</body>
</html>