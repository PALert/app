<!DOCTYPE html>
<html lang="en">

<head>
    <title>HTU | Login</title>
	<link rel="icon" href="./source/icon/favicon.png">
    <!-- Meta tag Keywords -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="UTF-8" />
    <meta name="keywords"
        content="Report Login Form Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
    <!-- //Meta tag Keywords -->
    <link href="//fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@400;500;700;900&display=swap" rel="stylesheet">
    <!--/Style-CSS -->
    <link rel="stylesheet" href="./assets/css/style.css">

</head>

<body>

<!-- form section start -->
<section class="w3l-hotair-form">
        <h1>Student Login Form</h1>
        <div class="container">
            <!-- /form -->
            <div class="workinghny-form-grid">
                <div class="main-hotair">
                    <div class="content-wthree">
                        <h2>Log In</h2>
                        <form  method="POST">
                            <input type="text" class="text" name="username" placeholder="Student ID No." required autofocus>
                            <input type="password" class="password" name="password" placeholder="Student Password" required autofocus>
                            <button class="btn" name="login" type="submit">Log In</button>
                        </form>
                        
                        <p class="account">Don't have an account? <a href="../reg/register">Request Account</a></p>
                    </div>
                    <div class="w3l_form align-self">
                        <div class="left_grid_info">
                            <img src="./source/icon/favicon.png" alt="" class="img-fluid">
                        </div>
                    </div>
                </div>
            </div>
            <!-- //form -->
        </div>

<?php

if(isset($_SESSION["username"]))
{
    header("location: home");
}
if(isset($_POST["login"])){
if(empty($_POST["username"] || empty($_POST["password"])))
{
    echo '<script>alert("Both fields are required");</script>';
}
else
{
    $username=mysqli_real_escape_string($conn, $_POST["username"]);
    $password=mysqli_real_escape_string($conn, $_POST["password"]);
    $query="SELECT * FROM student_list WHERE username='$username' AND password='$password'";
    $result=mysqli_query($conn,$query);
    if(mysqli_num_rows($result)>0)
    {
       /* $_SESSION["username"]=$username;
        header("location: index.php=user page");*/
        session_start();
        $_SESSION['username']=$_POST['username'];
        header("location: index.php?user page");
    }
    else{
        echo'<script>alert("Wrong Credentials");</script>';
    }
}
}

?>

  <!-- copyright-->
  <div class="copyright text-center">
            <p class="copy-footer-29">&copy; 2021 HTU. All rights reserved | Design by Group H</p>
        </div>
        <!-- //copyright-->
    </section>
    <!-- //form section start -->
</body>

</html>