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

                    <h1>CRUISE X LOGS</h1>
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