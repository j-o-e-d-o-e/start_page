<!DOCTYPE html>
<html lang="en">
    <head>
        <?php
            include "../php/projects_head.php";
        ?>
        <meta name="description" content="software development projects: game dev"/>
        <link rel="stylesheet" href="css/game_dev.css" type="text/css">
        <script src="js/game_dev.js"></script>        
        <script src="js/soundmanager2-setup.js"></script>
        <script src="js/soundmanager2-jsmin.js"></script>
        <script src="html/html.nocache.js"></script>
    </head>  
    <body>
        <?php
            include "../php/projects_header.php";
            include "../php/mail.php";
        ?>
        <section class="r box">
            <h2>
                game dev
            </h2>
            <div class="div_icon">
                <i class="fa fa-gamepad" aria-hidden="true"></i>
            </div>
            <?php
                include "../php/projects_nav_box.php";
            ?>
            <div id="project">
                <div align="center" id="embed-html"></div>
                <p><i>Note:</i> press 'p' for pause/controls during gameplay.</p>
            </div>
            <div id="info">
                <h3>
                    description
                </h3>
                <p>
                    This minigame uses the game-development application framework "libGDX" &amp its ai-module for enemy steering/pathfinding.
                    The overall goal is to develop some open-world rpg. Next step is to implement a sneak mode.
                </p>
                <p>             
                    The chart below provides an overview of its classes &amp their interactions. For maps creation, the editor "Tiled" was used.
                    For html deployment, google web toolkit was used. The game is published on gamejolt.com &amp itch.io.
                </p>
                <h3>
                    specifications
                </h3>
                <ul>
                    <li>
                        java
                    </li>
                    <li>
                        libGDX
                    </li>
                    <li>
                        Tiled
                    </li>
                </ul>
                </h3>
                <h3>
                    links/materials
                </h3>
                <ul>
                    <li>
                        <a href="https://joedoe.itch.io/the-assassin">itch.io</a>
                    </li>
                    <li>
                        <a href="https://gamejolt.com/games/the_assassin/280607">gamejolt.com</a>
                    </li>
                    <li>
                        <a href="https://github.com/J-o-e-D-o-e/the_assassin">github.com</a>
                    </li>
                    <li>
                        <a href="downloads/overview.pdf" target="_blank">overview</a>
                    </li>
                </ul>
            </div>
        </section>
        <?php
            include "../php/footer.php";
        ?>
    </body>
</html>