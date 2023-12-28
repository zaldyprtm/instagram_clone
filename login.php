<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/styles.css">
    <link rel="icon" href="assets/ig.png">
    <script src="https://kit.fontawesome.com/a363c6a721.js" crossorigin="anonymous"></script>
    <title>Login Instagram</title>
</head>
<body>

<?php
    require('./connection.php');

    if (isset($_POST['login_button'])) {
        $_SESSION['validate']=false;
        $email=$_POST['email'];
        $password=$_POST['password'];
        $p=crud::conect()->prepare('SELECT * FROM crudtable WHERE email=:e and pass=:p');  
        $p->bindValue(':e, $');
        $p->bindValue(':p, $password');
        $p->execute();
        $d=$p->fetchAll(PDO::FETCH_ASSOC);
        if ($p->rowCount()>0) {
            $_SESSION['email']=$email;
            $_SESSION['pass']=$password;
            $_SESSION['validate']=true;
            header('location:index.php');
            echo 'Login berhasil';
        }else{
            echo 'make sure that you are registered';
        }
    }




?>


    <div class="instagram-container">
        <div class="instagram-logo">
            <img src="assets/instagram-logo.png" alt="logo">
        </div>

        <div class="instagram-container-inside">
            <form action="" method="post">
            <input type="email" name="email" placeholder="Phone number, Username, or email">
            <input type="password" name="password" placeholder="Password">
            <input type="submit" value="Login" name="login_button">
            <h5><hr>OR</h5>
            <button><i class="fa-brands fa-facebook fa-fade fa-xl"></i>&nbsp; Login With Facebook</button>
            <a href="#">Forgot password?</a>
            </form>
        </div>
        </div>

        <div class="instagram-bottom-container">
            <h4>Don't have an account? &nbsp;<a href="index.php" style="text-decoration: none; color: #3897f0;">Sign Up</a></h4>
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