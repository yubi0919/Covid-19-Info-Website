<?php 
    include('server.php');
    include('newscrud.php');
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>News Form</title>
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
                    <form method="POST" action="adminnews.php" enctype="multipart/form-data">
                        <input type="hidden" name="id" value="<?php echo $id; ?>">
                        <?php if(isset($_GET['edit'])): ?>
                            <h2>If image does not changes just ignore it!!</h2>
                        <?php endif ?>
                        <div>
                            <img src = "images/<?php echo $record['image']?>" alt="" id="news_im"></img>
                            <input type="file" name="image">
                            <input type="hidden" name="old_image" value="<?php echo $record['image']; ?>">
                        </div>
                        <div>
                            <label>News Title</label>
                            <textarea name="title" rows="2"><?php if(isset($_GET['edit'])) {echo $title;}?></textarea>
                        </div>
                        <div>
                            <label>News Description</label>
                            <textarea name="content" rows="4"><?php if(isset($_GET['edit'])) {echo $content;}?></textarea>
                        </div>
                        <div>

                            <?php if(isset($_GET['edit'])): ?>
                                <button type="submit" name="update" class="btn">Update</button>
                            <?php else: ?>
                                <button type="submit" name="save" class="btn">Save</button>
                            <?php endif ?>
                            
                            <button type="submit" formaction="adminnews.php">Back</button> 
                        </div>
                    </form>
            </div>
        </div>
    </div>
</body>
</html>