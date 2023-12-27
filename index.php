<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/styles.css">
    <link rel="icon" href="assets/ig.png">
    <script src="https://kit.fontawesome.com/a363c6a721.js" crossorigin="anonymous"></script>
    <title>Sign Up Instagram</title>
</head>
<body>

<?php
    require('./connection.php');
    if (isset($_POST['signUP_button'])) {
        $email=$_POST['email'];
        $fullname=$_POST['fullname'];
        $username=$_POST['username'];
        $password=$_POST['password'];

            $p=crud::conect()->prepare('INSERT INTO crudtable(email,fullname,username,pass) VALUES(:e,:f,:u,:p)');
            $p->bindValue(':e',$email);
            $p->bindValue(':f',$fullname);
            $p->bindValue(':u',$username);
            $p->bindValue(':p',$password);
            $p->execute();
            echo 'berhasil';
            header('location:login.php');
        }


?>


<div class="instagram-container">
    <div class="instagram-logo">
        <img src="assets/instagram-logo.png" alt="logo">
    </div>

    <div class="instagram-status">
        <p>Sign up to see photos and videos</p>
        <p>from your friends.</p>

    </div>

    <div class="instagram-container-inside">
        <button><i class="fa-brands fa-facebook fa-bounce fa-xl"></i>&nbsp; Login With Facebook</button>
        <h5><hr>OR</h5>
        <form action="" method="post">
        <input type="email" name="email" placeholder="Mobile Number or Email">
        <input type="text" name="fullnme" placeholder="Full Name">
        <input type="text" name="username" placeholder="Username">
        <input type="password" name="password" placeholder="Password">
        <input type="submit" value="Sign Up" name="signUP_button">
</form>
        <p>People who use our service may have uploaded </p>
        <p>your contact information to Instagram. Learn More</p>
        <p>By signing up, you agree to our Terms , Privacy </p>
        <p>Policy and Cookies Policy .</p>
    </div>
    </div>
    <div class="instagram-bottom-container">
        <h4>Have an account? <a href="login.php" style="text-decoration: none; color: #3897f0;">Login</a></h4>
    </div>
</div>

    <div class="instagram-app">
        <h4>Get the app.</h4>
    </div>

    <div class="instagram-download">
        <a href="https://play.google.com/store/apps/details?id=com.instagram.android&hl=en_US"><img src="assets/googleplay-button.png" alt="google play store" id="gplay" >
       <a href="https://apps.apple.com/id/app/instagram/id389801252"><img src="assets/apple-button.png" alt="appStore" id="appstore">
    </div>

<section class="footer">
    <div class="instagram-footer">
        <a href="#">Meta</a>
        <a href="#">About</a>
        <a href="#">Blog</a>
        <a href="#">Jobs</a>
        <a href="#">Help</a>
        <a href="#">API</a>
        <a href="#">Privacy</a>
        <a href="#">Terms</a>
        <a href="#">Locations</a>
        <a href="#">Instagram Lite</a>
        <a href="#">Threads</a>
        <a href="#">Contact Uploading & Non-Users</a>
        <a href="#">Meta Verified</a>
    </div>

    <div class="copyright">
        <select name="bahasa" id="Lang">
            <option value="English">English</option>
            <option value="Indonesia">Indonesia</option>
            <option value="France">France</option>
            <option value="Melayu">Bahasa Melayu</option>
            <option value="UK">English(UK)</option>
        </select>&nbsp; &nbsp;
        <p>© 2023 Instagram from Meta</p>
    </div>


</section>

</body>
</html>