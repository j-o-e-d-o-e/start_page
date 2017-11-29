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
                    <a id="mail" title="mail">      
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
            <section class="g box" onclick="location.href='#';">
                <h2>
                    web scraping
                </h2>
                <div class="div_icon">
                    <i class="fa fa-search" aria-hidden="true"></i>
                </div>
            </section>
            <section class="r box" onclick="location.href='#';">
                <h2>
                    game dev
                </h2>
                <div class="div_icon">
                    <i class="fa fa-gamepad" aria-hidden="true"></i>
                </div>
            </section>
            <section class="o box" onclick="location.href='#';">
                <h2>
                    database
                </h2>
                <div class="div_icon">
                    <i class="fa fa-database" aria-hidden="true"></i>
                </div>
            </section>
            <section class="b box" onclick="location.href='#';">
                <h2>
                    desktop app
                </h2>
                <div class="div_icon">
                    <i class="fa fa-desktop" aria-hidden="true"></i>
                </div>
            </section>
        </div>
        <footer>
            lorem ipsum
        </footer>
    </body>
</html>