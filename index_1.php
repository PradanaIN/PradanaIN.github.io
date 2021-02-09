<?php
//ngecek submit dah dipencet blom
if (isset($_POST["submit"])) {
    //cek username password
    if ($_POST["username"] == "RofaRopeRope" && $_POST["password"] == "buatrofa") {
        //jika benar, redirect ke admin.php
        header("Location: ini/index.php");
        exit;
    } else {
        //jika salah. munculkan notif
        $error = true;
    }
}
?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="wid_th=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style_1.css">
    <title>Landing Page</title>
</head>

<?php if (isset($error)) : ?>
    <p style="color: red; font-style: italic; ">Username atau Password salah!</p>
<?php endif; ?>

<body>
    <div class="box">
        <div class="botton-box">
            <!-- <button class="btn" onclick="login()" style="left: 40px;">
                <p type="title">Login</p> -->
            </button>
            <!-- <button class="btn" onclick="register()" style="left:90px;">
                <p type="title">Register</p>
            </button> -->
        </div>
        <form id="login" action="" class="input" method="post">
            <h2 style="text-align: center;">Welcome!</h2>
            <br>
            <p>Email/Username</p>
            <input type="text" class="t-input" placeholder="Enter Email or Username" name="username" id="username" required>
            <br>
            <br>
            <p>Password</p>
            <input type="password" class="t-input" placeholder="Enter Password" name="password" id="password" required>
            <br>
            <!-- <input type="checkbox" class="check-box"><span>Remember Me</span> -->
            <br>
            <br>
            <br>
            <button type="submit" class="submit-btn" name="submit">Login</button>
            <br>
            <br>
            <br>
            <!-- <a href="#" style="font-size: 12px; color:black">Forgot Password</a> -->
        </form>
        <!-- <form id="register" class="input">
            <h2 style="text-align: center;">Join Us!</h2>
            <p>Name</p>
            <input type="text" class="t-input" placeholder="Enter Name" required>
            <br>
            <p>Username</p>
            <input type="text" class="t-input" placeholder="Enter Username" required>
            <br>
            <p>Email</p>
            <input type="text" class="t-input" placeholder="Enter Email" required>
            <br>
            <p>Password</p>
            <input type="password" class="t-input" placeholder="Enter Password" required>
            <br>
            <input type="checkbox" class="check-box"><span>I Accept The Terms & Conditions</span>
            <br>
            <button type="submit" class="submit-btn">Register</button> -->
        </form>
    </div>
    <script type="text/javascript">
        var x = document.getElementById('login');
        var y = document.getElementById('register');

        function register() {
            x.style.left = "-400px";
            y.style.left = "50px";
        }

        function login() {
            x.style.left = "50px";
            y.style.left = "400px";
        }
    </script>
</body>

</html>