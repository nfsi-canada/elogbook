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