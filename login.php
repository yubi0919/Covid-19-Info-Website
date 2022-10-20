<?php include('server.php') ?>
<!DOCTYPE html>
<!--
Design by TEMPLATED
http://templated.co
Released for free under the Creative Commons Attribution License

Name       : Endearing Green 
Description: A two-column, fixed-width design with dark color scheme.
Version    : 1.0
Released   : 20130425

-->
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Sign in</title>
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="keywords" content="" />
    <meta name="description" content="" />
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700|Archivo+Narrow:400,700" rel="stylesheet" type="text/css">
    <link href="style.css" rel="stylesheet" type="text/css" media="all" />
    <!--[if IE 6]>
<link href="default_ie6.css" rel="stylesheet" type="text/css" />
<![endif]-->
</head>

<body>
    <div id="wrapper-bg">
        <div id="wrapper">
            <nav>
                <div id="logo">
                    <h1><a href="#"><span>COVID-19</span>INFORMATICS</a></h1>
                </div>
                <div id="menu">
                    <ul class="nav-links">
                        <li><a href="index.html">Homepage</a></li>
                        <li class="active">
                            <a href="login.php">Sign In</a>
                        </li>
                    </ul>
                    <script src="https:/code.jquery.com/jquery-3.3.1.js"></script>
                    <script type="text/javascript">
                        $(document).on('click', 'ul li', function() {
                            $(this).addClass('active').siblings().removeClass('active');
                        })
                    </script>
                    <div class="burger">
                        <div class="line1"></div>
                        <div class="line2"></div>
                        <div class="line3"></div>
                    </div>
                </div>
            </nav>
            <script src="app.js"></script>

            <div class="container" id="signIn">
                <h1>SIGN IN</h1>
                <form action="login.php" method="post">
                    <?php include('errors.php'); ?>
                    <div class="tbox">
                        <input type="text" placeholder="username" id="user" name="user">
                    </div>
                    <div class="tbox">
                        <input type="password" placeholder="password" id="pass" name="pass">
                    </div>
                    <input class="btn" type="submit" name="login" value="SIGN IN">
                </form>
                <a class="b1" href="#">FORGOT PASSWORD ?</a>
                <a class="b2" href="register.php">SIGN UP</a>
            </div>



            <div id="page">
                <div id="content"></div>
                <div id="sidebar"></div>
            </div>
        </div>
        <div id="footer-content" class="container">
            <!-- <div id="fbox1">
                <h2>Recent Updates</h2>
                <ul class="style3">
                    <li class="first">
                        <p class="date"><a href="#">April<b>20</b></a></p>
                        <h3>Amet sed volutpat mauris</h3>
                        <p><a href="#">Mauris tempus nibh sodales adipiscing dolore.</a></p>
                    </li>
                    <li>
                        <p class="date"><a href="#">April<b>18</b></a></p>
                        <h3>Sagittis diam dolor sit amet</h3>
                        <p><a href="#">Duis arcu tortor fringilla sed  sed magna.</a></p>
                    </li>
                    <li>
                        <p class="date"><a href="#">April<b>15</b></a></p>
                        <h3>Adipiscing sed consequat</h3>
                        <p><a href="#">Pharetra ac velit sed in volutpat nisl mauris vel.</a></p>
                    </li>
                    <li>
                </ul>
            </div>
            <div id="fbox2">
                <h2>About</h2>
                <p>This is<strong> Endearing Green</strong>, a free, fully standards-compliant CSS template designed by <a href="http://templated.co" rel="nofollow">TEMPLATED</a>. This free template is released under the <a href="http://creativecommons.org/licenses/by/3/">Creative Commons Attribution</a>                    license, so you’re pretty much free to do whatever you want with it (even use it commercially) provided you give us credit for it. Have fun :)</p>
                <a href="#" class="button-style">Ipsum feugiat consequat</a> </div>
            <div id="fbox3">
                <h2>Contact</h2>
                <p>Nam erat a posuere laoreet eget nibh sodales adipiscing. Phasellus tristique dui.</p>
                <ul class="style5">
                    <li class="first"><span class="address">Address</span> <span class="address-01">1234 Somewhere Road #4285 <br />
					Nashville, TN 00000</span> </li>
                    <li> <span class="mail">Mail</span> <span class="mail-01"><a href="#">someone@untitled.tld</a></span> </li>
                    <li> <span class="phone">Phone</span> <span class="phone-01">(000) 000-0000</span> </li>
                </ul>
            </div> -->
        </div>
    </div>
    <div id="footer">
        <!-- <p>&copy; Untitled. All rights reserved. Design by <a href="http://templated.co" rel="nofollow">TEMPLATED</a>. Photos by <a href="http://fotogrph.com/">Fotogrph</a>.</p> -->
    </div>
</body>

</html>