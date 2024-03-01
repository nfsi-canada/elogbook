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
        <link href="..\CSS\log.css" rel="stylesheet">
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

                    <br>
                    <form id="info">
                            
                
                    </form>
                    

                    <form id="Instruments">
                            
                        <h2>Instruments Involved</h2>
                        <ol id="zone"></ol>
                
                    </form>

                </div>
                <!-- Sub Flex Container End -->

            </div>
            <!-- Flex Container End -->

        </section>
            <!-- log Section End -->

    <script src="..\javascript\log.js"></script>

    </body>
</html>