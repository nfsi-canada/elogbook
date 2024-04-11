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

                        echo "<h1>  $c_id  = C ID</h1>";

                    ?>

                        <h1>LOG X</h1>

                        <form action='PHP\logMaker.php' method='get' >

                        <br>
                        
                        <?php
                        session_start();
                        $currentUser = $_SESSION["userID"];
                        echo "
                        
                            <label for='author'><b>Author</b></label><br>
                            <input type='text' value='$currentUser' name='author' required>
                        
                            "
                        ?>
    
                        <br><br><br>
    
                        <label for="date"><b>Date</b></label><br>
                        <input id="date" type="text" name="date" required>
    
                        <br><br><br>
    
                        <label for="time"><b>Time</b></label><br>
                        <input id="time" type="text" name="time" required>
                        <br><br>

                        <h2>Instruments Involved</h2>

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