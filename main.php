<?php

require_once __DIR__.'/boot.php';?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
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
    <div class="mainback">
        <div class="mainarea">
            <div class="logoarea">
                <img src="resourses\logo.png" alt="logo" class="logo">
                <span>Calculatum</span>
                <h1>6 calculator modes</h1>
            </div>
            <div class="calcimg">
                <img src="resourses\calc1.png" alt="calc1" class="calc1">
                <img src="resourses\calc2.png" alt="calc2" class="calc2">
            </div>
        </div>
    </div>
    <div class="description">
        <div class="selectmode">
            <span>Select Mode:</span>
            <a href="calculator.php" class="">Standart</a>
            <a href="calculator.php" class="">Math</a>
            <a href="calculator.php" class="">Credit</a>
            <a href="calculator_calories.php" class="">Calories</a>
            <a href="bmicalculator.php" class="">BMI</a>
            <a href="calculator.php" class="">Alcohol</a>
        </div>
        <div class="design">
            <span>Simple Design</span>
            <img src="resourses\calcstraight.png" alt="calculator image">
        </div>
        <div class="modes">
            <img src="resourses\bigcalc.png" alt="big calculator image">
            <span>Different Modes</span>
        </div>
    </div> 
    <div class="chooseback">
        <div class="choosestyle">
            
            <img class='calcimg' src="resourses\calccutted1.png" alt="calculator cutted image">
            <span class="choose">Choose Your Style</span>
            <img class='calcimg' src="resourses\calccutted2.png" alt="calculator cutted image">
            <span class='hidden'>Choose Your Style</span>

        </div>
    </div>

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
<script src="scroll.js"></script>
</body>
</html>