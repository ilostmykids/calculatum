<?php

require_once __DIR__.'/boot.php';?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="calculatorstyle.css">
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
 
    <div class="calcarea">
        <div class="calcdescription">
            <div class="calclinks">
                <div class="firstlinks">
                    <a class='choosen' href="calculator.php" class="">Standart</a>
                    <a href="calculator.php" class="">Math</a>
                    <a href="calculator.php" class="">Credit</a>
                </div>
                <div class="secondlinks">
                    <a href="calculator_calories" class="">Calories</a>
                    <a href="bmicalculator.php" class="">BMI</a>
                    <a href="calculator.php" class="">Alcohol</a>
                </div>
            </div>
            <div class="description">
                <span class="calctitle">Calculator Description</span>
                <h1 class="">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus scelerisque turpis et velit porta fermentum. Mauris dapibus lorem ut libero maximus, ut tincidunt magna dapibus. Integer velit nisl, sodales in nibh in, ultricies malesuada arcu. Mauris faucibus pharetra turpis non venenatis. Quisque ac commodo sapien. Sed blandit, libero eget efficitur tincidunt, orci libero iaculis turpis, vitae varius nisi arcu sit amet urna. Aliquam nec dapibus nunc, ac imperdiet sem. In hac habitasse platea dictumst. Duis iaculis arcu vel mauris commodo imperdiet.

                    </h1>
            </div>
        </div>
        <div class="calculatorblock">
            <div id="calculator">
                <!-- Screen and clear key -->
                <div class="top">
                    <span class="clear">C</span>
                    <div class="screen"></div>
                </div>
                
                <div class="keys">
                    <!-- operators and other keys -->
                    <span>7</span>
                    <span>8</span>
                    <span>9</span>
                    <span class="operator">+</span>
                    <span>4</span>
                    <span>5</span>
                    <span>6</span>
                    <span class="operator">-</span>
                    <span>1</span>
                    <span>2</span>
                    <span>3</span>
                    <span class="operator">÷</span>
                    <span>0</span>
                    <span>.</span>
                    <span class="eval">=</span>
                    <span class="operator">x</span>
                </div>
            </div>
        </div>
    </div>

    <div class="bottomdescription">
        <div class="bottomtext">
            <h1>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce eu odio sed quam semper aliquam vel non risus. Pellentesque ultricies eros lorem, vel rhoncus ligula vulputate a. Mauris eu arcu volutpat, rutrum ligula scelerisque, iaculis neque. In turpis sem, pharetra ut rhoncus nec, placerat nec mi. Sed gravida augue vel odio consequat, at bibendum ipsum porttitor. Nulla non nulla tortor. Morbi rutrum sem bibendum leo porttitor auctor quis eu lectus. Nullam enim massa, malesuada eget mi quis, luctus consectetur enim. Sed vel suscipit dui.

                Mauris sit amet ullamcorper ipsum. Aliquam tincidunt felis mi, sed pulvinar orci porttitor et. Donec feugiat, erat sed viverra imperdiet, dui erat porttitor odio, ut sollicitudin nibh justo blandit urna. Praesent sodales magna sit amet nunc imperdiet hendrerit. Fusce quis luctus neque. Sed congue urna suscipit, suscipit erat at, sollicitudin metus. Donec egestas blandit ipsum et lobortis. Curabitur bibendum enim et lectus laoreet mollis. Etiam at odio tortor. Aenean eget interdum mauris. Phasellus lorem purus, finibus sit amet orci sit amet, tempus egestas massa. Nam sodales rhoncus porttitor.</h1>
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
                <a href='post.php'>Contact Us</a>
                <div class="logos">
                    <img src="resourses\teleglogo.png" alt="Telegram Logo">
                    <img src="resourses\watsapplogo.png" alt="WatsApp Logo">
                </div>
            </div>
        </div>
        <span class="reserved">2023 © All Rights Reserved</span>
    </div>
<script src="calculator.js"></script>
<script src="button.js"></script>
<script src="scroll.js"></script>
</body>
</html>