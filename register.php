<?php include('server.php') ?>
<!DOCTYPE html>

<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Sign Up</title>
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="keywords" content="" />
    <meta name="description" content="" />
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700|Archivo+Narrow:400,700" rel="stylesheet" type="text/css">
    <link href="style.css" rel="stylesheet" type="text/css" media="all" />
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
                        <li class="active"><a href="index.html">Homepage</a></li>
                        <li>
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
            <div class="container" id="register">
                <h1>SIGN UP</h1>
                <form action="register.php" method="POST">
                    <?php include('errors.php'); ?>
                    <div class="tbox">
                        <input type="text" placeholder="username" id="user" name="user" value="<?php echo $username; ?>">
                    </div>
                    <div class="tbox">
                        <input type="text" placeholder="email" id="email" name="email" value="<?php echo $email; ?>" >
                    </div>
                    <div class="tbox">
                        <input type="password" placeholder="password" id="pass" name="pass">
                    </div>
                    <div class="tbox">
                        <input type="password" placeholder="confirm password" id="pass2" name="pass2">
                    </div>
                    <input class="btn" type="submit" name="register" value="SIGN UP">
                </form>
            </div>
        </div>
        <div id="footer">
        </div>
    </div>
</body>

</html>
                    