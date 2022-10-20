<?php include('cross_server.php') ?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Cross Border Form</title>
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

            <div id = "cross" class="container">
                <form method="POST" action="crossform.php" enctype="multipart/form-data" name="cross" required>
                    <div class="banner">
                        <h1>Cross Border Application Form</h1>
                    </div>
                    <div id=name>
                        <p>Name</p>
                        <div class="name-item">
                            <input type="text" name="name" placeholder="Name as in IC" required/>           
                        </div>
                    </div>
                    <div class="item" id="date">
                        <p>Traveling Date</p>
                        <input type="date" name="date" required/>
                        <i class="fas fa-calendar-alt"></i>
                    </div>

                    <div class="item" id="reason">
                        <p>Reason</p>
                        <textarea name="reason" rows="3" required></textarea>
                    </div>

                    <div class="item" id="phone">
                        <p>Phone</p>
                        <input type="text" name="phone" required/>
                    </div>
                    
                    <div class="item" id="email">
                        <p>Email</p>
                        <input type="email" name="email" required/>
                    </div>

                    <div class="item" id="to">
                        <p>To State</p>        
                        <select required name="end">
                            <option value="" selected></option>
                            <option value="Johor">Johor</option>
                            <option value="Melaka">Melaka</option>
                            <option value="Selangor">Selangor</option>
                            <option value="Kuala Lumpur">Kuala Lumpur</option>
                            <option value="Perak">Perak</option>
                            <option value="Kedah">Kedah</option>
                            <option value="Pulau Pinang">Pulau Pinang</option>
                            <option value="Perlis">Perlis</option>
                            <option value="Terengganu">Terengganu</option>
                            <option value="Kelantan">Kelantan</option>
                            <option value="Pahang">Pahang</option>
                            <option value="Sabah">Sabah</option>
                            <option value="Sarawak">Sarawak</option>
                        </select>
                    </div>

                    <div class="item" id="from">
			            <p>From State</p>        
                        <select required name="start">
                            <option value="" selected></option>
                            <option value="Johor">Johor</option>
                            <option value="Melaka">Melaka</option>
                            <option value="Selangor">Selangor</option>
                            <option value="Kuala Lumpur">Kuala Lumpur</option>
                            <option value="Perak">Perak</option>
                            <option value="Kedah">Kedah</option>
                            <option value="Pulau Pinang">Pulau Pinang</option>
                            <option value="Perlis">Perlis</option>
                            <option value="Terengganu">Terengganu</option>
                            <option value="Kelantan">Kelantan</option>
                            <option value="Pahang">Pahang</option>
                            <option value="Sabah">Sabah</option>
                            <option value="Sarawak">Sarawak</option>
                        </select>
                    </div>
                    <button type="submit" name="apply" class="btn">Apply</button>
                    
                </form>
            </div>
        </div>
    </div>
</body>
</html>

    