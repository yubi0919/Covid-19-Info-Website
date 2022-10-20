<?php include('newscrud.php');?>

<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>News</title>
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

            <div id = "news" class="container">
                <header>
                    <h1>Latest News</h1>
                </header>

                <div id = "news_articles">
                    <?php while($row = mysqli_fetch_array($result)) : ?>
                        <ul>
                            <li>
                                <img src = "images/<?php echo $row['image']?>" alt="" id="news_im"></img>
                                <h3><?php echo $row['title'] ?></h3>
                                <p id = "news_content" >
                                    <?php echo $row['content'] ?>
                                </p>
                            </li>
                        </ul>
                        <br><br><br><br><br><br><br><br><br><br>
                    <?php endwhile; ?>
                
                
                <!--<ul>
                        <li>
                            <img src = "images/Status_22.12.2020.jpg" alt="" id="news_im"></img>
                            <h3>24/12/2020 Covid-19 Statistics</h3>
                            <p id = "news_content" >New Recovered Cases: 911<br>
                            Total Number of Recoveries: 79,304<br>
                            New Cases: 2,062<br>
                            Local Cases: 2,058<br>
                            Imported Cases: 4<br>
                            Total Number of Active Cases: 17,646
                            <div id = "read_more_link"><a href = "#">Read More</a></div> 
                            </p>
                        </li>
                        <hr>

                        <li>
                            <img src = "images/vaccine.jpg" alt="" id="news_im"></img>
                            <h3>Malaysia in talks to secure more COVID-19 vaccines from Russia, Pfizer: Minister</h3>
                            <p id = "news_content">
                                KUALA LUMPUR: Malaysia is in talks to buy 6.4 million doses of Russia's Sputnik V COVID-19 
                                vaccine and wants to increase its purchases of the Pfizer-BioNTech vaccine, Minister for Science, 
                                Technology and Innovation Khairy Jamaluddin said on Wednesday (Dec 23), as the country looks to 
                                beef up its arsenal against the pandemic.<br>
                                The country is also in final discussions with two Chinese vaccine makers and drawing up plans to 
                                arrange ultra-cold storage in its tropical heat.<br>
                                Malaysia is spending about US$500 million to buy enough vaccine doses to inoculate 26.5 million 
                                people, or 82.8 per cent of....
                                <div id = "read_more_link"><a href = "#">Read More</a></div> 
                            </p>
                        </li>
                        <hr>
                        
                        <li>
                            <img src = "images/virus_3.jpg" alt="" id="news_im"></img>
                            <h3>New coronavirus variant: What do we know?</h3>
                            <p id = "news_content">
                                The rapid spread of a new variant of coronavirus has been blamed for the introduction of strict 
                                tier four mixing rules for millions of people, harsher restrictions on mixing at Christmas in 
                                England, Scotland and Wales, and other countries placing the UK on a travel ban.<br>
                                So how has it gone from being non-existent to the most common form of the virus in parts 
                                of England in a matter of months?<br>
                                The government's advisers on new infections now say they have "high" confidence that it 
                                is more able to transmit than other variants.<br>
                                <div id = "read_more_link"><a href = "#">Read More</a></div> 
                            </p>
                        </li>
                    </ul>-->
                </div>

            </div>
        </div>
    </div>
</body>

</html>