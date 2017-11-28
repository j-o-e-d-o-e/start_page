<!DOCTYPE html>
<html lang="en">
    <head>
        <title>
            projects by joedoe
        </title>
        <meta charset="UTF-8">
        <meta http-equiv="content-type" content="text/html"/>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="content" content="en"/>
        <meta name="description" content="software development projects"/>
        <meta name="keywords" content="software development, projects java, python, libGDX, C#, mySQL"/>
        <meta name="author" content="joedoe"/>
        <meta name="copyright" content="joedoe"/>
        <link rel="icon" href="img/favicon.ico" type="image/x-icon">
        <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="css/default.css" type="text/css">
        <link rel="stylesheet" href="css/modal.css" type="text/css">
        <link rel="stylesheet" href="css/index.css" type="text/css">
        <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
        <script src="js/index.js"></script>
<<<<<<< HEAD
=======
        <script src="js/mail.js"></script>
        <script src="js/footer.js"></script>
>>>>>>> origin/master
    </head>
    <body>
        <header>
            <h1>
                projects <span>by joedoe</span>
            </h1>
            <!--NAVIGATION-->
            <ul id ="nav">
                <li>
                    <a href="https://github.com/j-o-e-d-o-e" title="github">
                        <i class="fa fa-github"></i>
                    </a>
                </li>
                <li>
<<<<<<< HEAD
                    <a id="mail" title="mail">
=======
                    <a id="mail" title="mail">      
>>>>>>> origin/master
                        <i class="fa fa-envelope"></i>
                    </a>
                </li>
                <li>
                    <i class="icon fa fa-navicon">
                        <!--DROPDOWN-MENU-->
                        <ul>
                            <li>
                                <input  type="checkbox" class="check" value="r" checked>
                                    <span id="span_r">java</span>
                                </input>
                            </li>
                            <li>
                                <input type="checkbox" class="check" value="g" checked>
                                    <span id="span_g">python</span>
                                </input>
                            </li>
                            <li>
                                <input type="checkbox" class="check" value="b" checked>
                                    <span id="span_b">c#</span>
                                </input>
                            </li>
                            <li>
                                <input type="checkbox" class="check" value="o" checked>
                                    <span id="span_o">sql</span>
                                </input>
                            </li>
                        </ul>
                    </i>
                </li>
            </ul>
        </header>
        <?php
                include "php/mail.php";
        ?>
        <div id="container">
<<<<<<< HEAD
            <section class="g box" onclick="location.href='#';">
=======
            <section class="g box" onclick="location.href='web_scraping/index.php';">
>>>>>>> origin/master
                <h2>
                    web scraping
                </h2>
                <div class="div_icon">
                    <i class="fa fa-search" aria-hidden="true"></i>
                </div>
                <div class="border"></div>
                <p>
                    Scraper for the social media aggregator "reddit".
                </p>
                <div class="tags_container">
                    <span class="tag">python</span>
                    <span class="tag">praw</span>
                    <span class="date_tag">08/17</span>
<<<<<<< HEAD
                </div>
            </section>
            <section class="r box" onclick="location.href='#';">
=======
                    <!--int(time.mktime(datetime.strptime("08/2017", "%m/%Y").timetuple()))-->
                </div>
            </section>
            <section class="r box" onclick="location.href='game_dev/index.php';">
>>>>>>> origin/master
                <h2>
                    game dev
                </h2>
                <div class="div_icon">
                    <i class="fa fa-gamepad" aria-hidden="true"></i>
                </div>
                <div class="border"></div>
                <p>
<<<<<<< HEAD
                    Inspired by the commodore
=======
                    Inspired by the commodore 
>>>>>>> origin/master
                    64-classics "mafia".
                </p>
                <div class="tags_container">
                    <span class="tag">java</span>
                    <span class="tag">libGDX</span>
                    <span class="date_tag">09/17</span> 
                </div>
            </section>
<<<<<<< HEAD
            <section class="o box" onclick="location.href='#';">
=======
            <section class="o box" onclick="location.href='database/index.php';">                
>>>>>>> origin/master
                <h2>
                    database
                </h2>
                <div class="div_icon">
                    <i class="fa fa-database" aria-hidden="true"></i>
                </div>
                <div class="border"></div>
                <p>
                    Stores data on aircraft using computer vision.
                </p>
                <div class="tags_container">
                    <span class="tag">sql</span>
<<<<<<< HEAD
                    <span class="misc_tag">python</span>
                    <span class="misc_tag">open cv</span>
                    <span class="date_tag">03/18</span>
                </div>
            </section>
            <section class="b box" onclick="location.href='#';">
=======
                    <span class="g_tag">python</span>
                    <span class="g_tag">open cv</span>
                    <span class="date_tag">03/18</span>
                </div>                  
            </section>
            <section class="b box" onclick="location.href='desktop_app/index.php';">
>>>>>>> origin/master
                <h2>
                    desktop app
                </h2>
                <div class="div_icon">
                    <i class="fa fa-desktop" aria-hidden="true"></i>
                </div>
                <div class="border"></div>
                <p>
                    Editing &amp archiving application.
                </p>
                <div class="tags_container">
                    <span class="tag">c#</span>
                    <span class="date_tag">??/??</span>
                </div>
<<<<<<< HEAD
            </section>
=======
            </section>  
>>>>>>> origin/master
        </div>
        <?php
            include "php/footer.php";
        ?>
    </body>
</html>