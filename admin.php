<?php include('server.php'); ?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Admin Page</title>
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
                        <li>
                            <?php if (isset($_SESSION["username"])): ?>
                                <p>Welcome <strong><?php echo $_SESSION['username']; ?></strong></p>
                            <?php endif ?>
                        </li>
                        <li class="active"><a href="admin.php">Homepage</a></li>
                        <li>
                            <a href="admin.php?logout='1'">Sign Out</a>
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
            
            <!-- working here for admin menu-->
            <div id="three-column" class="container">
                <header>
                    <h2>ONE STOP INFORMATION SOURCE FOR COVID-19</h2>
                </header>
                <div class="tbox1">
                    <div class="box-style box-style01">
                        <div class="content">
                            <a href="#" class="image image-full"><img src="images/virus2.jpeg" alt="" width="1200" height="250" alt=""></a>
                            <h2>NEWS</h2>
                            <p>Provide the latest news and updates regarding the development of Covid-19 in Malaysia. </p>
                            <a href="adminnews.php" class="button-style">Learn More</a> </div>
                    </div>
                </div>
            </div>
            <div id="page">
                <div id="content"></div>
                <div id="sidebar"></div>
            </div>
        </div>
        <div id="footer-content" class="container">
        </div>
        <div id="footer">
        </div>
    </div>
</body>

</html>
