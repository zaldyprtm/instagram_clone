<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/styles.css">
    <link rel="icon" href="assets/ig.png">
    <script src="https://kit.fontawesome.com/a363c6a721.js" crossorigin="anonymous"></script>
    <title>Reset password</title>
</head>
<body>

    <!-- reset_password.php -->
<?php

require('./connection.php');

// Fungsi untuk mengirim email reset password
function sendResetEmail($email, $resetLink) {
    // Di sini Anda bisa menggunakan fungsi mail() atau pustaka PHPMailer
    // untuk mengirim email reset password dengan tautan yang dibuat
    // Contoh sederhana:
    $subject = "Reset Your Password";
    $message = "Hello,\n\nPlease click on the following link to reset your password:\n$resetLink\n\nThank you.";
    // Mail($email, $subject, $message);
    echo "Password reset instructions have been sent to $email";
}

session_start(); // Start session if not started already

if (isset($_POST['reset_password'])) {
    // Ambil email dari formulir
    $email = $_POST['email'];

    // Di sini Anda dapat menulis logika untuk membuat tautan reset password yang unik
    $resetLink = "https://example.com/reset_password?token=yourtoken"; // Ganti dengan tautan yang sesuai

    // Kirim email dengan tautan reset password
    sendResetEmail($email, $resetLink);
}
?>


    <div class="instagram-container">
        <div class="instagram-logo">
            <img src="assets/instagram-logo.png" alt="logo">
        </div>
        <div class="title-reset">
            <h3>reset password</h3>
        </div>
        <div class="instagram-container-inside">
            <form action="" method="POST">
            <input type="email" name="email" placeholder="Phone number, Username, email">
            <input type="submit" value="Reset" name="reset_password">
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