<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>register form</title>
    <link rel="stylesheet" href="register.css">
</head>
<body style="background:url(pexels-george-milton-7034644.jpg);background-size:cover;">
    <div class="form_cont container">
        <form action="register_p.php" method="post">
            <h2>register here</h2>
            <?php
                 if(isset($erroruser)){
                    echo $erroruser;
                 }
            ?>
            <input type="text" id="username" name="name" placeholder="Username..." >
            
            <?php
                 if(isset($erroremail)){
                    echo $erroremail;
                 }
            ?>
            <input type="email" id="email" name="email" placeholder="Email..." >
            
            <?php
                 if(isset($errorpass)){
                    echo $errorpass;
                 }
            ?>
            <input type="password" id="password" name="password" placeholder="Set your password..." >
            
            <input type="password" id="cpassword" name="cpassword" placeholder="Confirm your password..." >
            <?php
                 if(isset($errorphone)){
                    echo $errorphone;
                 }
            ?>
            <input type="text" id="phonenumber" name="phonenumber" placeholder="Phone number..." >
            
            <input type="text" id="homeaddress" name="homeaddress" placeholder="Home address..." >
            
            <input type="text" id="age" name="age" placeholder="age..." >

            <?php
                 if(isset($errorsub)){
                    echo $errorsub;
                 }
            ?>
            <select name="type">
                <option disabled selected value>Subject</option>
                <option value="computer science">Computer Science</option>
                <option value="math-1">Math-1</option>
                <option value="mangement">Mangement</option>
                <option value="economics">Economics</option>
                <option value="physics">Physics</option>
                <option value="information science">Information Science</option>
                <option value="english">English</option>
                <option value="electronics">Electronics</option>
            </select>

            <input type="submit" value="register your data" name="submit" class="button">
            <div>
                <p>if you have an account <a href="../login/index.php">login now</a></p>
            </div> 
            <div>
                <p>if you have to <a href="../index.php">Exit</a></p>
            </div> 
        </form>
    </div>
    <script>
       
       var eduname = document.getElementById('username')
       var edupass = document.getElementById('password')
       var educpass = document.getElementById('cpassword')
       var eduemail = document.getElementById('email')
       eduname.value=''
       edupass.value=''
       educpass.value=''
       eduemail.value=''

   </script> 
</body>
</html>
