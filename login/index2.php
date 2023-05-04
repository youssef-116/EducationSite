<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="css/login.css" rel="stylesheet" >

</head>
<body style="background:url(pexels-george-milton-7034644.jpg);background-size:cover;">
    

    <div class="form_cont container" >
        <form method="POST" enctype="multipart/form-data" action="login2.php">
            <h2>student Login</h2>
            <?php 
                
                if(isset($_GET['error1'])){
                    echo '<p class="error" >'.$_GET['error1'].'</p>';}

                ?>
            <input  id="username" style="margin-left: -4px;" name="username" placeholder="Email..." value="" class="w-100 m-10 h-30" type="email">
            <?php if(isset($_GET['error2'])){
                    echo '<p class="error" >'.$_GET['error2'].'</p>';}

            ?>
            <input  id="password" name="password" style="margin-left: -4px;" placeholder="Password..." value="" class="w-100 m-10 h-30" type="password">
            <?php if(isset($_GET['error'])){
                    echo '<p class="error" >'.$_GET['error'].'</p>';}
                    if(isset($_GET['error3'])){
                        echo '<p class="error" >'.$_GET['error3'].'</p>';}
            ?>
            <input class="button" name="submit" Value="Log In" class="w-100 m-10 h-30" type="submit">
            <div>
                <p>if you don't have an account <a class="register-a" href="../register/register1.php">Register now</a></p>
            </div> 
        </form>
    </div>
    <script>
       
       var eduname = document.getElementById('username')
       var edupass = document.getElementById('password')
       eduname.value=''
       edupass.value=''

   </script> 
   
</body>
</html>