<!DOCTYPE html>
<html lang="en">
    <head>
        <?php
            include "../php/projects_head.php";
        ?>
        <meta name="description" content="software development projects: computer vision"/>
        <script src="js/computer_vision.js"></script>
    </head>  
    <body onload ="showInitialTable()">
        <?php
            include "../php/projects_header.php";
            include "../php/mail.php";
        ?>
        <section class="g box">
            <h2>
                computer vision
            </h2>
            <div class="div_icon">
                <i class="fa fa-eye" aria-hidden="true"></i>
            </div>
            <?php
                include "../php/projects_nav_box.php";
            ?>
            <div id="project" style="text-align:center">
                <form onsubmit="return false">
                    <label>from</label>
                    <input id="t_from" type="time" name="from">
                    <label>until</label>
                    <input id="t_until" type="time" name="until">                   
                    <label>departed from</label>
                    <input id ="d_list" list="departed_from" name="departed_from">
                        <datalist id="departed_from">
                            <option value="bukarest">
                            <option value="damaskus">
                            <option value="dublin">
                            <option value="köln">
                            <option value="mailand">
                            <option value="paris">
                            <option value="berlin">
                        </datalist>
                    <input id="pt_input" type="submit" value="submit">
                </form>
                <div id="output" style="text-align:-webkit-center;"></div>
            </div>
            <div id="info">
                <h3>
                    description
                </h3>
                <p>
                    This database shows information about planes which are about to land at düsseldorf airport.
                </p>
                <h3>
                    specifications
                </h3>
                <ul>
                    <li>
                        mySQL
                    </li>
                    <li>
                        raspberry pi
                    </li>
                    <li>
                        python
                    </li>
                    <li>
                        open cv
                    </li>
                    <li>
                        open sky
                    </li>
                </ul>
                </h3>
                <h3>
                    links/materials
                </h3>
                <ul>
                    <li>
                        <a href=#>github.com</a>
                    </li>
                </ul>
            </div>
        </section>
        <?php
            include "../php/footer.php";
        ?>
    </body>
</html>