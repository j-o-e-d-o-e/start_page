<!DOCTYPE html>
<html lang="en">
    <head>
        <?php
            include "../php/projects_head.php";
        ?>
        <meta name="description" content="software development projects: database"/>
        <script src="js/database.js"></script>
    </head>  
    <body onload ="showInitialTable()">
        <?php
            include "../php/projects_header.php";
            include "../php/mail.php";
        ?>
        <section class="o box">
            <h2>
                database
            </h2>
            <div class="div_icon">
                <i class="fa fa-database" aria-hidden="true"></i>
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
                    This database contains data on aircraft detected with a raspberry pi.
                </p>
                <p>
                    Basically, python processes the images from the pi camera using "open cv".
                    When an aircraft is detected, a picture is taken and sent together with its timestamp to the database.
                <p>
                    Outages including their date and a short description are listed below in the .txt-file.
                </p>
                <h3>
                    specifications
                </h3>
                <ul>
                    <li>
                        mySQL
                    </li>
                    <li>
                        python
                    </li>
                    <li>
                        open cv
                    </li>
                    <li>
                        raspberry pi
                    </li>
                    <li>
                        pi camera NoIR V2
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
                    <li>
                        <a href="downloads/outages.txt" target="_blank">outages.txt</a>
                    </li>
                </ul>
            </div>
        </section>
        <?php
            include "../php/footer.php";
        ?>
    </body>
</html>