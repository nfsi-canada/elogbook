<!--
    e-log book cruise list page

    first page
    Author: Forde Nedimović
    Creation Date: 2024/02/06 
    Modified Date: yyyy/mm/dd

    Filename:   cruiseList.php
-->

<!DOCTYPE html>
<html>

    <head>
        <meta charset="UTF-8">
		<meta name="description" content="The cruise list page for the e-log book">
		<meta name="keywords" content="crusie, list">
		<meta name="author" content="Forde Nedimović">
		<title>E-Log Curise List</title>
        <link href="..\CSS\base.css" rel="stylesheet">
        <link href="..\CSS\cruiseList.css" rel="stylesheet">
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

        <!-- Login Section -->
        <section id="cList">

            <div class="cListFlex-container">
                
                <div class="cListText-container">

                    <br>
                    <h1>Cruises</h1>

                    <table id="clItems">

                        <tr>

                            <th>NAME</th>
                            <th>ID</th>
                            <th>LOCATION</th>
                            <th>START DATE</th>
                            <th>END DATE</th>
                            <th>VIEW</th>
                            <th>EDIT</th>
                            <th>EXPORT</th>

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

                            $sql = "SELECT c_name, c_id, location, s_date, e_date  FROM cruise ORDER BY e_date DESC LIMIT 0, 10";
                            $result = $mysqli->query($sql);

                            if ($result->num_rows > 0) {
                                while($row = $result->fetch_assoc()) {

                                    $c_name = $row["c_name"];
                                    $c_id = $row["c_id"];
                                    $location = $row["location"];
                                    $s_date = $row["s_date"];
                                    $e_date = $row["e_date"];

                                    echo "<tr>";
                                    echo "<td>$c_name</td>";
                                    echo "<td>$c_id</td>";
                                    echo "<td>$location</td>";
                                    echo "<td>$s_date</td>";
                                    echo "<td>$e_date</td>";

                                    echo "<th> <a href='logs.php'> <button>View Logs</button> </a>  </th>";
                                    echo "<th> <a href='TBD.php'> <button>Edit Cruise</button> </a>  </th>";
                                    echo "<th> <a href='TBD.php'> <button>Export Data</button> </a>  </th>";

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
            <!-- cList Section End -->

    <script src="..\javascript\cruiseList.js"></script>

    </body>
</html>