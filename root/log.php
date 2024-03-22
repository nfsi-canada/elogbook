<!--
    e-log book logpage

    first page
    Author: Forde Nedimović
    Creation Date: 2024/02/12 
    Modified Date: 2024/02/12

    Filename:   log.php
-->

<!DOCTYPE html>
<html>

    <head>
        <meta charset="UTF-8">
		<meta name="description" content="The log page for the e-log book">
		<meta name="keywords" content="log">
		<meta name="author" content="Forde Nedimović">
		<title>E-Log Log</title>
        <link href="..\CSS\base.css" rel="stylesheet">
        <link href="..\CSS\fullLog.css" rel="stylesheet">
    </head>

    <body>
         <!-- Header Section -->
         <header>
            <!-- nav Section -->
            <section class="nav">
                <ul class="menu">
                  <li><a href="index.php">Login Out</a></li>
                  <li><a href="createChoose.php">Home</a></li>
                  <li><a href="cruiseList.php">Cruises</a></li>
                </ul>
            </section>
            <!-- sav Section end -->
        </header>
        <!-- Header Section End -->

        <!-- Log Section -->
        <section id="log">

            <div class="logFlex-container">
                
                <div class="logText-container">

                <?php

                $host = "localhost";
                $username= "root";
                $user_pass = "usbw";
                $data_base_in_use = "sakila";

                $mysqli = new mysqli($host, $username, $user_pass, $data_base_in_use);

                if ($mysqli -> connect_errno) {
                    echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
                    exit();
                }

                $logID = $_GET["logID"]; 

                $sql = "SELECT text, Crew_crew_name1  FROM logs WHERE log_id = $logID";
                $result = $mysqli->query($sql);

                if ($result->num_rows > 0) {
                    while($row = $result->fetch_assoc()) {

                        $text = $row["text"];
                        $Crew_crew_name1 = $row["Crew_crew_name1"];

                        echo "<h2>Author: $Crew_crew_name1</h2>";
                        echo "<p>$text</p>";

                        
                    }
                } 
                echo "<h1>Instruments:</h1>";
                
                echo "<table>";

                $sql = "SELECT instruments_ins_name  FROM logs_has_instruments WHERE logs_log_id = $logID";
                $result = $mysqli->query($sql);

                if ($result->num_rows > 0) {
                    while($row = $result->fetch_assoc()) {

                        $instrument = $row["instruments_ins_name"];


                        
                        echo "<tr>";
                        echo "<td>$instrument</td>";
                        echo "</tr>";
                    }
                } 
                
                echo "</table>";

                $mysqli->close();
                ?>

                </div>
                <!-- Sub Flex Container End -->

            </div>
            <!-- Flex Container End -->

        </section>
            <!-- log Section End -->

    </body>
</html>