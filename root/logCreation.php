<!--
    e-log book log creation page

    Author: Forde Nedimović
    Creation Date: 2024/02/06 
    Modified Date: 2024/02/08

    Filename:   logCreation.php
-->

<!DOCTYPE html>
<html>

    <head>
        <meta charset="UTF-8">
		<meta name="description" content="The log creation page for the e-log book">
		<meta name="keywords" content="log, logs, creation">
		<meta name="author" content="Forde Nedimović">
		<title>E-Log Curise Log Creation</title>
        <link href="..\CSS\base.css" rel="stylesheet">
        <link href="..\CSS\logCreation.css" rel="stylesheet">
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
            
            <!-- dropdown Section -->
            <section id="formfill">
    
                <div class="formfillFlex-container">
                    
                    <div class="formfillText-container">
                        
                    <?php

                        $c_id = $_GET["CID"]; 
                        $c_name = $_GET["CNAME"]; 

                        echo "<h1>  $c_id  = C ID</h1>";
                        echo "<h1>  $c_name  = C NAME</h1>";

                    ?>

                        <h1>LOG X</h1>

                        <form action='PHP\logMaker.php' method='get' >

                        <br>
                        
                        <?php
                        $c_id = $_GET["CID"]; 
                        $c_name = $_GET["CNAME"]; 
                        session_start();
                        $currentUser = $_SESSION["userID"];
                        echo "
                        
                            <label for='author'><b>Author</b></label><br>
                            <input type='text' value='$currentUser' name='author' required>

                            <input id='$c_id' type='hidden' name='CID' value='$c_id' />
                            <input id='$c_name' type='hidden' name='CNAME' value='$c_name' />

                        
                            "
                        ?>
    
                        <br><br><br>
    
                        <label for="date"><b>Date</b></label><br>
                        <input id="date" type="text" name="date" required>
    
                        <br><br><br>
    
                        <label for="time"><b>Time</b></label><br>
                        <input id="time" type="text" name="time" required>
                        <br><br><br>

                        <label for="type"><b>Type</b></label><br>
                        <input id="type" type="text" name="type" required>
                        <br><br>

                        <h2>Instruments Involved</h2>

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

                            $sql = "SELECT Instruments_ins_name FROM cruise_has_instruments WHERE Cruise_c_id = $cruiseID";
                            $result = $mysqli->query($sql);

                            if ($result->num_rows > 0) {
                                while($row = $result->fetch_assoc()) {

                                    
                                    $instrument = $row["Instruments_ins_name"];

                                    echo "<input type='checkbox' class='form' value='$instrument' name='checkbox[]' /> $instrument <br />";
        
                                }
                            } 

                            $mysqli->close();
                            ?>

                        <br><br><br><br>

                        <h2>Description</h2>
                        
                        <input id="disc" name="disc" type="text" required></inputid>

                         <!-- done button Section -->
                            <section id="done">
                     
                                <a href="PHP\logMaker.php"><button type="submit" id="dbutt">CREATE LOG!</button></a>

                             </section>
                        <!-- done button Section End -->

                        </form>
    
                    </div>
                    <!-- Sub Flex Container End --> 
    
                </div>
                <!-- Flex Container End -->
    
            </section>
            <!-- dropdown Section End -->
        
        <script src="..\javascript\logMaker.js"></script>

    </body>
</html>