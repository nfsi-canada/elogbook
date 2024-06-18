<!--
    e-log book export data page

    Author: Forde Nedimović
    Creation Date: 2024/06/17 
    Modified Date: yyyy/mm/dd

    Filename:   exportData.php
-->

<!DOCTYPE html>
<html>

    <head>
        <meta charset="UTF-8">
		<meta name="description" content="The page to export data for user">
		<meta name="keywords" content="data, export">
		<meta name="author" content="Forde Nedimović">
		<title>E-Log Curise List</title>
        <link href="CSS/base.css" rel="stylesheet">
        <link href="CSS/exportData.css" rel="stylesheet">   

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
        <section id="data">

            <div class="dataFlex-container">
                
                <div class="dataText-container">

                <button type="button" onclick="tableToCSV()">
                    download CSV
                </button>

                <table id="clItems">

                <tr>
                <th>Crusie General Info</th>
                </tr>

                <tr>

                    <th>NAME</th>
                    <th>Crusie ID</th>
                    <th>Ship ID</th>
                    <th>Ship Name</th>
                    <th>Arival Port</th>
                    <th>Departure Port</th>
                    <th>LOCATION</th>
                    <th>START DATE</th>
                    <th>END DATE</th>

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

                    $c_id = $_GET["CID"]; 
                    $cName = $_GET["CNAME"];  

                    $sql = "SELECT c_name, c_id, s_id, s_name, ap_name, dp_name, location, s_date, e_date  FROM cruise WHERE c_id = $c_id";
                    $result = $mysqli->query($sql);

                    if ($result->num_rows > 0) {
                        while($row = $result->fetch_assoc()) {

                            $c_name = $row["c_name"];
                            $c_id = $row["c_id"];
                            $s_id = $row["s_id"];
                            $s_name = $row["s_name"];
                            $ap_name = $row["ap_name"];
                            $dp_name = $row["dp_name"];
                            $location = $row["location"];
                            $s_date = $row["s_date"];
                            $e_date = $row["e_date"];

                            echo "<tr>";
                            echo "<td>$c_name</td>";
                            echo "<td>$c_id</td>";
                            echo "<td>$s_id</td>";
                            echo "<td>$s_name</td>";
                            echo "<td>$ap_name</td>";
                            echo "<td>$dp_name</td>";
                            echo "<td>$location</td>";
                            echo "<td>$s_date</td>";
                            echo "<td>$e_date</td>";
                            echo "</tr>";

                            echo "<tr>";
                            echo "<td> &zwnj; </td>";
                            echo "<td> &zwnj; </td>";
                            echo "<td> &zwnj; </td>";
                            echo "<td> &zwnj; </td>";
                            echo "<td> &zwnj; </td>";
                            echo "<td> &zwnj; </td>";
                            echo "<td> &zwnj; </td>";
                            echo "<td> &zwnj; </td>";
                            echo "<td> &zwnj; </td>";
                            echo "</tr>";

                            echo "<tr>";
                            echo "<td>Logs</td>";
                            echo "</tr>";
                        }
                    }
                    $sql = "SELECT log_id, date, time, type, text, crew_crew_name1  FROM logs WHERE cruise_c_id = $c_id ORDER BY date DESC, time DESC";
                    $result = $mysqli->query($sql);

                    if ($result->num_rows > 0) {
                        while($row = $result->fetch_assoc()) {

                            
                            $logID = $row["log_id"];
                            $date = $row["date"];
                            $time = $row["time"];
                            $type = $row["type"];
                            $text = $row["text"];
                            $crew_crew_name1 = $row["crew_crew_name1"];

                            echo "<tr>";
                            echo "<td>$date</td>";
                            echo "<td>$time</td>";
                            echo "<td>$type</td>";
                            echo "<td>$text</td>";
                            echo "<td>$crew_crew_name1</td>";
                            echo "<tr>";
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

        <script type="text/javascript">
            function tableToCSV() {
    
                // Variable to store the final csv data
                let csv_data = [];
    
                // Get each row data
                let rows = document.getElementsByTagName('tr');
                for (let i = 0; i < rows.length; i++) {
    
                    // Get each column data
                    let cols = rows[i].querySelectorAll('td,th');
    
                    // Stores each csv row data
                    let csvrow = [];
                    for (let j = 0; j < cols.length; j++) {
    
                        // Get the text data of each cell
                        // of a row and push it to csvrow
                        csvrow.push(cols[j].innerHTML);
                    }
    
                    // Combine each column value with comma
                    csv_data.push(csvrow.join(","));
                }
    
                // Combine each row data with new line character
                csv_data = csv_data.join('\n');
    
                // Call this function to download csv file  
                downloadCSVFile(csv_data);
    
            }
            function downloadCSVFile(csv_data) {
    
                // Create CSV file object and feed
                // our csv_data into it
                CSVFile = new Blob([csv_data], {
                    type: "text/csv"
                });
    
                // Create to temporary link to initiate
                // download process
                let temp_link = document.createElement('a');
    
                // Download csv file
                temp_link.download = "GfG.csv";
                let url = window.URL.createObjectURL(CSVFile);
                temp_link.href = url;
    
                // This link should not be displayed
                temp_link.style.display = "none";
                document.body.appendChild(temp_link);
    
                // Automatically click the link to
                // trigger download
                temp_link.click();
                document.body.removeChild(temp_link);
            }
        </script>
    
    </body>
</html>