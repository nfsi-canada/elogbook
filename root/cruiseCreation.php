<!--
    e-log book cruise creation page

    first page
    Author: Forde Nedimović
    Creation Date: 2024/01/22 
    Modified Date: yyyy/mm/dd

    Filename:   cruiseCreation.php
-->

<!DOCTYPE html>
<html>

    <head>
        <meta charset="UTF-8">
		<meta name="description" content="The cruise creation page for the e-log book">
		<meta name="keywords" content="login, first,">
		<meta name="author" content="Forde Nedimović">
		<title>E-Log Curise Creation</title>
        <link href="..\CSS\base.css" rel="stylesheet">
        <link href="..\CSS\cruiseCreate.css" rel="stylesheet">
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

        
        <!-- fillout Section -->
        <section id="formfill">

            <div class="formfillFlex-container">
                
                <div class="formfillText-container">

                    
                    <label for="sID"><b>Ship ID</b></label><br>
                    <input type="text" placeholder="Enter Ship ID" name="sID" required>

                    <br>
                    <label for="sName"><b>Ship Name</b></label><br>
                    <input type="text" placeholder="Enter Ship Name" name="sName" required>
                    <br>

                    <label for="cID"><b>Cruise ID</b></label><br>
                    <input type="text" placeholder="Enter Cruise ID" name="cID" required>
                    <br>

                    <label for="dpName"><b>Departure Port</b></label><br>
                    <input type="text" placeholder="Enter Port of Departure" name="pName" required>
                    <br>

                    <label for="dpName"><b>Arival Port</b></label><br>
                    <input type="text" placeholder="Enter Port of final Arival" name="dpName" required>
                    <br>

                    <label for="disc"><b>Cruise Location</b></label><br>
                    <input type="text" placeholder="Enter General Cruise Location" name="disc" required>
                    <br>
                    
                    <label for="start"><b>Cruise Start Date</b></label><br>
                    <input type="text" placeholder="Enter General Cruise Location" name="start" required>
                    <br>

                    <label for="end"><b>Cruise End Date</b></label><br>
                    <input type="text" placeholder="Enter Cruise end date" name="end" required>

                </div>
                <!-- Sub Flex Container End -->

            </div>
            <!-- Flex Container End -->

        </section>
        <!-- fillout Section End -->
        
        <!-- dropdown Section -->
        <section id="formfill">

            <div class="formfillFlex-container">
                
                <div class="formfillText-container">

                    <div id="forms">

                        <form id="Instruments">
                            
                            <h2>Instruments</h2>
                            <ol id="zone"></ol>

                            <input type="text" id="Instrument" placeholder="Instrument Name" name="Instrument"/>
                    
                            <button>Add</button>
                        </form>

                        <form id="Stations">

                            <h2>Stations</h2>
                            <ol id="zone2"></ol>
                            
                            <input type="text" id="Station" placeholder="Station Name" name="Station"/>
                    
                            <button>Add</button>
                        </form>

                        <form id="Crew">
                            <h2>Crew Members</h2>
                            <ol id="zone3"></ol>
                        
                            <input type="text" id="name" placeholder="Crew Member Name" name="name" />
                
                            <button>Add</button>
                        </form>

                    </div>

                </div>
                <!-- Sub Flex Container End --> 

            </div>
            <!-- Flex Container End -->

        </section>
        <!-- dropdown Section End -->

        <!-- done button Section -->
        <section id="done">

          
        <a href="createChoose.php"><button type="submit" id="dbutt">DONE!</button></a>

        </section>
        <!-- done button Section End -->

    <script src="..\javascript\cruiseCreation.js"></script>

    </body>
</html>