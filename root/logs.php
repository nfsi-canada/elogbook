<!--
    e-log book log page

    Author: Forde Nedimović
    Creation Date: 2024/02/06 
    Modified Date: 2024/02/029

    Filename:   logs.php
-->

<!DOCTYPE html>
<html>

    <head>
        <meta charset="UTF-8">
		<meta name="description" content="The log list page for the e-log book">
		<meta name="keywords" content="log, logs, list">
		<meta name="author" content="Forde Nedimović">
		<title>E-Log Curise Logs</title>
        <link href="..\CSS\base.css" rel="stylesheet">
        <link href="..\CSS\logs.css" rel="stylesheet">
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
        <section id="logList">

            <div class="logListFlex-container">
                
                <div class="logListText-container">


                    <?php   
                         
                        $cName = $_GET["CNAME"];  
                        echo "<h1>  $cName LOGS</h1>";

                        

                    ?>
                    <h1><button id="lButton"><a href="logCreation.php">Make New Log</a></button></h1>
                   
                    <table id="logs">
                        
                        <tr>

                            <th><h3>DATE</h3></th>
                            <th><h3>TIME</h3></th>
                            <th><h3>TYPE</h3></th>
                            <th><h3>DESCRIPTION</h3></th>
                            <th><h3>AUTHOR</h3></th>
                            <th><h3>VIEW</h3></th>
                            <th><h3>EDIT</h3></th>

                        </tr>
                        
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

                            $cruiseID = $_GET["CID"];  

                            $sql = "SELECT log_id, date, time, type, text, Crew_crew_name1  FROM logs WHERE Cruise_c_id = $cruiseID ORDER BY date DESC LIMIT 0, 10";
                            $result = $mysqli->query($sql);

                            if ($result->num_rows > 0) {
                                while($row = $result->fetch_assoc()) {

                                    
                                    $logID = $row["log_id"];
                                    $date = $row["date"];
                                    $time = $row["time"];
                                    $type = $row["type"];
                                    $text = $row["text"];
                                    $Crew_crew_name1 = $row["Crew_crew_name1"];

                                    echo "<tr>";
                                    echo "<td>$date</td>";
                                    echo "<td>$time</td>";
                                    echo "<td>$type</td>";
                                    echo "<td>$text</td>";
                                    echo "<td>$Crew_crew_name1</td>";

                                    echo "<th> 
                            
                                            <form action='log.php' method='get' >

                                                <input id='$logID' type='hidden' name='logID' value='$logID' />

                                                <a href='log.php'><button type='submit'>View</button></a>
                                                
                                            </form>

                                          </th>";
                                    echo "<th> <a href='TBD.php'> <button>Edit</button> </a>  </th>";

                                    echo "</tr>";
                                }
                            } 

                            $mysqli->close();
                            ?>

                    </table>

                </div>
                <!-- Sub Flex Container End -->

            </div>
            <!-- Flex Container End -->

        </section>
            <!-- log Section End -->

    <script src="..\javascript\logs.js"></script>

    </body>
</html>