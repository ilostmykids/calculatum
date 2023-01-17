<?php
require_once __DIR__.'/boot.php';

$user = null;

if (check_auth()) {
    $stmt = pdo()->prepare("SELECT * FROM `users` WHERE `id` = :id");
    $stmt->execute(['id' => $_SESSION['user_id']]);
    $user = $stmt->fetch(PDO::FETCH_ASSOC);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculatum - Sign Up</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="header">
        <span class="title">
            Calculatum
        </span>
        <div class="buttons">
            <div class="menubuttons">
                <nav class="menubutton">
                    <a href="main.php">Home</a>
                    <a href="calculator.php">Calculators</a>
                    <a href="about.php">About us</a>
                </nav>
            </div>
            <div class="loginbuttons">
                <nav class="loginbutton">
                    <?php if (check_auth()) {?>
                        <a href="index.php">My Account</a>
                        <a href="do_logout.php" class='signup'>Log Out</a>
                    <?php } else { ?>
                        <a href="login.php">Log in</a>
                        <a href="index.php" class='signup'>Sign Up</a>
                    <?php } ?>
                </nav>
            </div>
            

        </div>
        <div class="burger"><span></span></div>
        <div class="menudrop">
            <div class="firstdrops">       
               <a href="main.php">Home</a>
               <a href="calculator.php">Calculators</a>
               <a href="about.php">About us</a>
            </div>
            <div class="seconddrops">
                <?php if (check_auth()) {?>
                    <a href="index.php">My Account</a>
                    <a href="do_logout.php">Log Out</a>
                <?php } else { ?>
                    <a href="login.php">Log in</a>
                    <a href="index.php">Sign Up</a>
                <?php } ?>
            </div>
        </div>
    </div>
        <?php if ($user) { ?>

            <div class="my-account-main">
        <!-- <div class="my-account-info">
            <h1>Welcome, Username!</h1>
            <p>This is your account. You can send your feedback from here.</p>
        </div> -->
        <div class="my-account-container">
            <form action="post.php" method="post" name="form" class="my-account-form">
                <h1>Send Your Feedback</h1>
                <div class="input">
                    <label>Your Name</label>
                    <input name="name" type="text" required>
                </div>
                <div class="input">
                    <label>Your Email</label>
                    <input name="email" type="text" required>
                </div>
                <div class="input">
                    <label>Message Subject</label>
                    <input name="header" type="text" required>
                </div>
                <div class="input">
                    <label>Message Text</label>
                    <textarea cols="32" name="message" rows="5" required></textarea>
                </div>
                <div class="myacc">
                    <button type="submit" class="my-account">Send</button>
                </div>
            </form>
            <div class="do-log-out">
                <p><a href="do_logout.php">Log Out</a></p>
            </div>
        </div>
    </div>

        <?php } else { ?>

        <div class="log-in-main">
          <div class="sign-in-container">
            <div>
                <h1>Sign Up</h1>
                <?php flash(); ?>
                <form method="post" action="do_register.php" class="sign-in-form">
                    <div class="input">
                        <label for="username">Username</label>
                        <input type="text" id="username" name="username" required>
                    </div>
                    <div class="input">
                        <label for="password">Password</label>
                        <input type="password" id="password" name="password" required>
                    </div>
                    <div>
                        <button type="submit" class="log-in">Register</button>
                    </div>
                </form>
            </div>
            <div class="to-sign-up">
                <p>Already have account? <a href="login.php">Sign In</a></p>
            </div>
          </div>
      </div>

        <?php } ?>

        <div class="footer">
        <div class="content">
            <div class="firstblock">
                <img src="resourses\logo.png" alt="logo">
                <div class="firstinblock">
                    <span>Calculatum</span>
                    <a>Questions</a>
                    <a>Help</a>
                </div>
        </div>
            <div class="secondblock">
                <span>About</span>
                <a>Contact Us</a>
                <div class="logos">
                    <img src="resourses\teleglogo.png" alt="Telegram Logo">
                    <img src="resourses\watsapplogo.png" alt="WatsApp Logo">
                </div>
            </div>
        </div>
        <span class="reserved">2023 © All Rights Reserved</span>
    </div>
    <script src="button.js"></script>
  </body>
</html>