<?php

require_once __DIR__.'/boot.php';?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="aboutstyle.css">
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
    <!-- <div class="mainback">
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
    </div> -->

    <div class="aboutarea">
        <span class="calculatum">Calculatum</span>
        <div class="aboutus">
            <span>About Us</span>
            <div class="aboutblock">
                <img src="resourses\logo.png" alt="logo">
                <div class="textblock">
                    <h1>You can order the development of an online calculator for the site from us. The online calculator is a software module embedded in your website and allows visitors to your website to quickly calculate the cost of services offered on the website, goods sold, etc. We develop individual online calculators of any subject and complexity.</h1>
                    <h1>The online calculators developed by us are easily installed and work correctly on sites running any CMS (sok. from "Content Management System"), for example, such as: Joomla, WordPress, Drupal, 1C-Bitrix, CMS-S3 ("Megagroup") and others. All calculators are developed taking into account the design and structure of the site on which they will be installed, which allows the calculator to fit seamlessly into your site and look like an integral part of the site.</h1>
                </div>
            </div>
        </div>
        <div class="contactus">
            <span>Contact Us</span>
            
            <h1>In order to order the development of a calculator for the site from us, contact us in any way convenient for you:</h1>
            <h1>- write to us by e-mail: info@calculatum.ru;</h1>
            <h1>- call us by phone: +7 (999) 11-11-111;</h1>
            <h1>- order a callback (specify your phone number and a convenient time of the call in the application or letter).</h1>
            <h1>If you have any questions – write or call us!</h1>  
        </div>
        <div class="description">
            <span class="descspan">5 advantages of developing an online calculator:</span>
            <div class="descblock">
                <div class="descriptionplates">
                    <span>%</span>
                    <span>9</span>
                    <span>6</span>
                    <span>3</span>
                    <span>.</span>
                    <span>0</span>
                    <span>8</span>
                    <span>5</span>
                    <span>2</span>
                    <span>0</span>
                    <span>С</span>
                    <span>7</span>
                    <span>4</span>
                    <span>1</span>
                    <span>+/-</span>
                    <span class="violet">/</span>
                    <span class="violet">X</span>
                    <span class="violet">-</span>
                    <span class="violet">+</span>
                    <span class="grad">=</span>
                </div>
                <div class="descriptiontext">
                    <h1>Updating the website or ordering from scratch, I want to do something interesting to attract the attention of customers and, of course, increase the level of sales - an online calculator to order is what you need! How can a calculator for a website make your page really selling and constantly interesting to customers?</h1>
                    <h1>We offer you to get acquainted with the five main advantages of developing an individual online calculator to order.</h1>
                    <h1>1. The first thing that the development of the calculator will provide is a constant flow of customers to the site.</h1>
                    <h1>Why is it important:</h1>
                    <h1>More potential buyers will learn about your company, and every tenth can become a real customer. The more customers – the more sales, the higher the profit – this formula is clear even to modern children.</h1>
                    <h1>2. The second:</h1>
                    <h1>If the development of an individual online calculator is made to order, then the calculator on the website is a unique service. The site becomes not just a page where you can look at interesting pictures and read information. Its value changes instantly. With an online calculator, it is already an indispensable tool that simplifies daily calculations for visitors. Your page becomes like a native for customers, which means, if necessary, be sure that they will turn to you and will definitely (absolutely selflessly) recommend to friends and acquaintances. Do not forget that now the site plays the role of a powerful weapon to fight competitors. Competitors are nervously looking for ways to get around you, but – unsuccessfully!</h1>
                    <h1>Such a result will bring the development of an online calculator!</h1>
                    <h1>3. The third:</h1>
                    <h1>The development of an online calculator to order helps to reduce advertising costs. A page on the Internet, as an advertising tool, can fully replace less effective (more often, and more expensive) advertising space.</h1>
                    <h1>4. The fourth:</h1>
                    <h1>Creating a calculator simplifies the work of staff. Sales specialists will be able to:</h1>
                    <h1>Save the time they spend calculating the cost for buyers. If the client is not satisfied with the price provided by the calculator on the website, he will not call and distract the manager.
                        Speed up the transaction cycle, because the buyer, who calculated the price using the developed calculator, by calling you, has already agreed with the price. In sales, convincing the customer of the adequacy of the price is not the easiest stage.
                        Direct your efforts to the study of new products and sales technologies. Even in this way, creating a calculator helps to increase the number of sales.</h1>
                    <h1>5. The fifth:</h1>
                    <h1>An online calculator for an order tells (perhaps shows) what the price of a product or service is made of. The client understands that he is not being deceived, sees what he is paying for. Confidence in the company increases. The buyer is happy and positive to cooperate with you. The prestige of the company increases – your company does not hide anything from the client, and he will definitely appreciate it.
                        An important point is that in order for all the properties of the online calculator to reveal themselves 100%, the calculator must:</h1>
                    <h1>be located in the most prominent place. There is no need to hide a convenient service far away, every visitor should find it easily
                        be intuitive to any of your customers. It is worth noting that you are an expert in your field, and a visitor who wants to use a calculator for a website is not necessarily.</h1>
                    <h1>And most importantly, you just need to contact us and order the development of an individual online calculator to order!</h1>
                    <h1>After all, if you don't do this now, then all of the above benefits from an online calculator for a custom website will go to your competitors!</h1>               
                </div>
            </div>
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