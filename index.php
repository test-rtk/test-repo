<?php
    session_start();
    require_once "security.php";

    $errors = isset($_SESSION['errors']) ? $_SESSION['errors'] : [];
    $fields = isset($_SESSION['fields']) ? $_SESSION['fields'] : [];
?>

<!DOCTYPE html>
 <html lang="en">
    <head>
        
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="Mr.Cinkos is a premium pancake service for all ages.">
        
        <link rel="stylesheet" type="text/css" href="vendors/css/normalize.css">
        <link rel="stylesheet" type="text/css" href="vendors/css/grid.css">
        <link rel="stylesheet" type="text/css" href="vendors/css/ionicons.min.css">
        <link rel="stylesheet" type="text/css" href="vendors/css/animate.css">
        <link rel="stylesheet" type="text/css" href="resources/css/style.css">
        <link rel="stylesheet" type="text/css" href="resources/css/queries.css">
        <link href="https://fonts.googleapis.com/css?family=Lato:100,300,300i,400" rel="stylesheet">
        <title>Mr. Činkos</title>
    
        <link rel="apple-touch-icon" sizes="180x180" href="/resources/favicons/apple-touch-icon.png">
        <link rel="icon" type="image/png" sizes="32x32" href="/resources/favicons/favicon-32x32.png">
        <link rel="icon" type="image/png" sizes="16x16" href="/resources/favicons/favicon-16x16.png">
        <link rel="manifest" href="/resources/favicons/manifest.json">
        <link rel="mask-icon" href="/resources/favicons/safari-pinned-tab.svg" color="#5bbad5">
        <link rel="shortcut icon" href="/resources/favicons/favicon.ico">
        <meta name="msapplication-config" content="/resources/favicons/browserconfig.xml">
        <meta name="theme-color" content="#ffffff">
        
    </head>
    <body>
        <header>
            <nav>
                <div class="row">
                    <a href="index.php"><img src="resources/img/logoWhite.png" alt="Mr.Činkos" class="logo"></a>
                    <a href="index.php"><img src="resources/img/logoBlack.png" alt="Mr.Činkos" class="logo-black" href="index.php"></a>
                    <ul class="main-nav js--main-nav">
                        <li><a href="index.php">Home</a></li>
                        <li><a href="menu.html">Menu</a></li>
                        <li><a href="index.php?#idmap">Where are we?</a></li>
                    </ul>
<!--                    hamburger-->
<!--                    <a class="mobile-nav-icon js--nav-icon"><i class="ion-navicon-round"></i></a>-->
                </div>
            </nav>
            <div class="hero-text-box">
                <h1>Sugary paradise.</h1>
                <a class="btn btn-full" href="menu.html">Menu</a>
                <a class="btn btn-full js--scroll-to-map" href="#">Where are we?</a>
                
            </div>
            
        </header>
        <section class="section-features js--section-features" id="features">
            <div class="row">
                
                <h2> Sweetest food just few clicks away.</h2>
                <p class="long-copy"> 
                    Hello, I'm Mr. Cinkos, premium pancake eating establishment. I guarantee you that you'll never find anything sweeter than my crepes.
                </p>
            </div>
            
            <div class="row js--wp-1">
                <div class="col span-1-of-4 box">
                    <i class="ion-ios-infinite icon-big"></i>
                    <h3>Open 24/7/365</h3>
                    <p>
                        Diabetes guaranteed. Bring your own insulin or get it from us! 
                    </p>
                </div>
                <div class="col span-1-of-4 box">
                    <i class="ion-ios-alarm-outline icon-big"></i>
                    <h3>Ready in no time!</h3>
                    <p>
                        We relay on our superfast workers which can get your pancakes ready in few minutes.   
                    </p>
                </div>
                <div class="col span-1-of-4 box">
                    <i class="ion-android-sunny icon-big"></i>
                    <h3>100% natural.</h3>
                    <p>
                        Milk, eggs and everything other needed for making our delicious meals is fresh, local and organic. Ingredients are carefully picked from controled environment.  
                    </p>
                </div>
                <div class="col span-1-of-4 box">
                    <i class="ion-ios-cart-outline icon-big"></i>
                    <h3>Check the menu.</h3>
                    <p>
                        Our wide range of sweets can suit everyone's needs. Don't stick to safe option, be adventurous with your choice of filling.
                    </p>
                </div>
            </div>
            
        </section>
    
        <section  class="section-meals">
            <ul class="meals-showcase clearfix">
                <li>
                    <figure class="meal-photo js--wp-2">
                        <img src="resources/img/21.png" alt="Činka1">
                    </figure>
                </li>
                <li>
                    <figure class="meal-photo js--wp-2">
                        <img src="resources/img/22.png" alt="Činka2">
                    </figure>
                </li>
                <li>
                    <figure class="meal-photo js--wp-2">
                        <img src="resources/img/23.png" alt="Činka3">
                    </figure>
                </li>
                <li>
                    <figure class="meal-photo js--wp-2">
                        <img src="resources/img/24.png" alt="Činka4">
                    </figure>
                </li>
            </ul>
            
            <ul class="meals-showcase clearfix">
                <li>
                    <figure class="meal-photo js--wp-2">
                        <img src="resources/img/25.png" alt="Činka5">
                    </figure>
                </li>
                <li>
                    <figure class="meal-photo js--wp-2">
                        <img src="resources/img/6.jpg" alt="Činka6">
                    </figure>
                </li>
                <li>
                    <figure class="meal-photo js--wp-2">
                        <img src="resources/img/7.jpg" alt="Činka7">
                    </figure>
                </li>
                <li>
                    <figure class="meal-photo js--wp-2">
                        <img src="resources/img/13.jpg" alt="Činka8">
                    </figure>
                </li>
            </ul>
        </section>
        
        <div class="map-box js--section-map" id="idmap">
            
            <div class="map"></div>
            
            <div class="about-box">
                <div class="row">
                    <h2>About us</h2>
                </div>
                <div class="row">
                    <p class="long-copy">Sweetest place in Osijek is settled at St. Stjepan Radić 30a near EFOS and PRAVOS. We are open from 10am till 11pm (from 4pm to 11pm on sundays). If you have any questions feel free to contact us in form below or on our facebook page. For freshest updates follow us on Instagram and Facebook.</p>
                    <img class="cinkman" src="resources/img/cinkosMAN.png">
                </div>
            </div>    
        </div>
        
        <section class="section-testimonials">
            <div class="row">
                <h2>Customers loves us</h2>
            </div>
            <div class="row">
                <div class="col span-1-of-3">
                    <blockquote>
                         Mr. Cinkos is best one around. Waldinger and Petar Pan are nuttin.
                        <cite><img src="resources/img/customer-2.png" alt="customer-1-photo">Luke Jackson</cite>
                    </blockquote>
                </div>
                <div class="col span-1-of-3">
                    <blockquote>
                         So delicious and energetic. When I eat one of these crepes it is like i drank 3 redbulls.
                        <cite><img src="resources/img/customer-1.png" alt="customer-1-photo">Enna Miletage</cite>
                    </blockquote>
                </div>
                <div class="col span-1-of-3">
                    <blockquote>
                         I just wanna order thousand of each with every addition and bath in it.
                        <cite><img src="resources/img/customer-3.png" alt="customer-1-photo">Boron Homeouvicz</cite>
                    </blockquote>
                </div>
            </div>
        </section>
        
        <section class="section-form" id="form">
            <div class="row">
                <h2>Send us your review!</h2>
            </div>
            <div class="row">
                
                <form method="post" action="mailer.php" class="contact-form">
                    <div class="row">
                        
                    <?php
                        if(isset($_GET['success'])){
                            if($_GET['success'] == 1) {
                                echo "<div class=\"form-messages success js--wp-5\">Thank you! Your message has been sent.</div>";
                            }
                            else if($_GET['success'] == 0) {
                                echo "<div class=\"form-messages error js--wp-5\">Oops! Something went wrong. Please try again.</div>";
                            }  
                        }
                    ?> 
                        
                    </div>
                    
                    
                    <div class="row">                     
                        <div class="col span-1-of-3">
                            <label for="name">Name:</label>
                        </div>
                        <div class="col span-2-of-3">
                            <input type="text" name="name" id="name" placeholder="Your name" required <?php echo isset($fields['name']) ? 'value="' . e($fields['name']) . '"' : '' ?>>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col span-1-of-3">
                            <label for="email">Email:</label>
                        </div>
                        <div class="col span-2-of-3">
                            <input type="email" name="email" id="email" placeholder="Your email" required <?php echo isset($fields['email']) ? 'value=" ' . e($fields['email']) . ' "' : '' ?>>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col span-1-of-3">
                            <label>Write us something:</label>
                        </div>
                        <div class="col span-2-of-3">
                            <textarea name="message" placeholder="Your message"><?php echo isset($fields['message']) ? e($fields['message']) : '' ?></textarea>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col span-1-of-3">
                            <label>&nbsp;</label>
                        </div>
                        <div class="col span-2-of-3">
                            <input type="submit" name="submit" value="Send">
                        </div>
                    </div>
                    
                    
                </form>
            
            
            </div>
        </section>
        
        <footer>
            <div class="row">
                <div class="col span-1-of-2">
                    <ul class="footer-nav">
                        <li><a href="#">About us</a></li>
                        <li><a href="index.php">Home</a></li>
                        <li><a href="menu.html">Menu</a></li>
                    </ul>
                </div>
                <div class="col span-1-of-2">
                    <ul class="social-links">
                        <li><a href="https://www.facebook.com/mr.cink0s/"><i class="ion-social-facebook"></i></a></li>
                        <li><a href="https://www.instagram.com/mr.cink0s/"><i class="ion-social-instagram"></i></a></li>
                    </ul>
                </div>
            </div>
            <div class="row">
                <p>
                    Copright &copy; 2017 by Mr. CinkOs. All rights reserved.
                </p>
            </div>
            
        </footer>
        
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/respond/1.4.2/respond.min.js"></script>
    <script src="https://cdn.jsdelivr.net/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://cdn.jsdelivr.net/selectivizr/1.0.3b/selectivizr.min.js"></script>
    <script src="vendors/js/jquery.waypoints.min.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAqQWQC4v52rV2KD1wbxPP4VU1fMdCBp7o&callback=myMap"></script>

    <script src="resources/js/script.js"></script>
    <script src="resources/js/gmaps.js"></script>
    
        
    </body>
    
     
    


</html>

<?php

unset($_SESSION['errors']);
unset($_SESSION['fields']);

?>