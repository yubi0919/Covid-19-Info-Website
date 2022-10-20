<?php 
    include('server.php');
    include('newscrud.php');
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>News Management</title>
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
            

            <div id = "news" class="container">
                <header>
                    <h1>Latest News</h1>
                </header>

                <div id = "news_articles">
                    <a href="newsform.php">Create News</a>
                    <?php while($row = mysqli_fetch_array($result)) : ?>
                        <ul>
                            <li>
                                <img src = "images/<?php echo $row['image']?>" alt="" id="news_im"></img>
                                <h3><?php echo $row['title'] ?></h3>
                                <p id = "news_content" >
                                    <?php echo $row['content'] ?>
                                    <div id = "edit">
                                        <a href = "newsform.php?edit=<?php echo $row['id'];?>">Edit</a></div>
                                    <div id = "delete">
                                        <a class = "del_btn" href = "newscrud.php?del=<?php echo $row['id']; ?>">Delete</a>
                                    </div> 
                                </p>
                            </li>
                        </ul>
                        <br><br><br><br><br><br><br>

                    <?php endwhile; ?>
                </div>

            </div>
        </div>
    </div>
</body>
</html>


        