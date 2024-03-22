<!--
    e-log book createChoose

    first page
    Author: Forde Nedimović
    Creation Date: 2024/01/24 
    Modified Date: 2024/01/25

    Filename:   createChoose.php
-->

<!DOCTYPE html>
<html>

    <head>
        <meta charset="UTF-8">
		<meta name="description" content="ThecreateChoose page for the e-log book">
		<meta name="keywords" content="create, Choose, first,">
		<meta name="author" content="Forde Nedimović">
		<title>Create / Choose</title>
        <link href="..\CSS\base.css" rel="stylesheet">
        <link href="..\CSS\createChoose.css" rel="stylesheet">
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

        <!-- create Section -->
        <section id="createChoose">

            <div class="createChooseFlex-container">
                
                <div class="createChooseText-container">

                    <br><br><br>

                    <h2>Create New Cruise</h2>

                    <br>
                    
                    <a href="cruiseCreation.php"><button type="submit">GO!</button></a>
                </div>
                <!-- Sub Flex Container End -->

            </div>
            <!-- Flex Container End -->

        </section>
        <!-- create Section End -->
        
        <!-- choose Section -->
        <section id="createChoose">

            <div class="createChooseFlex-container">
                
                <div class="createChooseText-container">

                    <br><br><br>

                    <h2>Choose Existing Cruise</h2>

                    <br>
                    
                    <a href="cruiseList.php"><button type="submit">GO!</button></a>
                </div>
                <!-- Sub Flex Container End -->

            </div>
            <!-- Flex Container End -->

        </section>
        <!-- choose Section End -->
        <?php
        // Echo session variables that were set on previous page
        session_start();
        echo "User loged in is " . $_SESSION["userID"] . ".<br>";
        ?>

    </body>
</html>