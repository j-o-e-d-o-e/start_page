<?php
    $pdo = new PDO('mysql:host=localhost;dbname=test', 'root', '');
    if($_GET["departed_from"]!="" && $_GET["time_from"]!="" && $_GET["time_until"]!=""){ //airport & time_from & time_until
        $sql = "SELECT * FROM planes WHERE airport = '" . $_GET["departed_from"] . "' AND time >'" . $_GET["time_from"] . "' AND time <'" . $_GET["time_until"] . "'";
    } elseif($_GET["departed_from"]!="" && $_GET["time_from"]!=""){ //airport & time_from
        $sql = "SELECT * FROM planes WHERE airport = '" . $_GET["departed_from"] . "' AND time >'" . $_GET["time_from"] . "'";
    } elseif($_GET["departed_from"]!="" && $_GET["time_until"]!=""){ //airport & time_until
        $sql = "SELECT * FROM planes WHERE airport = '" . $_GET["departed_from"] . "' AND time <'" . $_GET["time_until"] . "'";
    } elseif($_GET["time_from"]!="" && $_GET["time_until"]!=""){ //time_from & time_until
        $sql = "SELECT * FROM planes WHERE time >'" . $_GET["time_from"] . "' AND time <'" . $_GET["time_until"] . "'";
    } elseif($_GET["departed_from"]!=""){ //airport
        $sql = "SELECT * FROM planes WHERE airport = '" . $_GET["departed_from"] . "'";
    } elseif($_GET["time_from"]!=""){ //time_from
        $sql = "SELECT * FROM planes WHERE time >'" . $_GET["time_from"] . "'";
    } elseif($_GET["time_until"]!=""){ //time_until
        $sql = "SELECT * FROM planes WHERE time <'" . $_GET["time_until"] . "'";
    } else {
        $sql = "SELECT * FROM planes";
    }   
     echo "<table class='modal_table'>
                    <caption>
                        <h3>planes today</h3>
                    </caption>
                    <tr style='background:lightgrey'>
                        <th>
                            id
                            <a id='sort' title='sort' action=#> 
                                <i class='fa fa-sort'></i>
                            </a>
                        </th>
                        <th>
                            time
                            <a id='sort' title='sort' action=#> 
                                <i class='fa fa-sort'></i>
                            </a>
                        </th>
                        <th>
                            departed from
                            <a id='sort' title='sort' action=#> 
                                <i class='fa fa-sort'></i>
                            </a>
                        </th>
                        <th>
                            img
                            <a id='sort' title='sort' action=#> 
                                <i class='fa fa-sort'></i>
                            </a>
                        </th>
                    </tr>";
        
    foreach ($pdo->query($sql) as $row) {
        echo "<tr>";
        echo "<td>" . $row['id'] . "</td>";
        echo "<td>" . $row['time'] . "</td>";
        echo "<td>" . $row['airport'] . "</td>";
        echo "<td>" . $row['img'] . "</td>";
        echo "</tr>";
    }
    echo "</table>";
?>