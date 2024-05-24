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
        <link href="CSS/base.css" rel="stylesheet">
        <link href="CSS/cruiseCreate.css" rel="stylesheet">
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

    <form action='PHP/cruiseMaker.php' method='get'>   
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

                    <label for="cID"><b>Cruise Name</b></label><br>
                    <input type="text" placeholder="Enter Cruise ID" name="cID" required>
                    <br>

                    <label for="dpName"><b>Departure Port</b></label><br>
                    <input type="text" placeholder="Enter Port of Departure" name="dpName" required>
                    <br>

                    <label for="apName"><b>Arival Port</b></label><br>
                    <input type="text" placeholder="Enter Port of final Arival" name="apName" required>
                    <br>

                    <label for="disc"><b>Cruise Location</b></label><br>
                    <input type="text" placeholder="Enter General Cruise Location" name="disc" required>
                    <br>
                    
                    <label for="start"><b>Cruise Start Date</b></label><br>
                    <input type="text" placeholder="Enter General Cruise Location" name="start" required>
                    <br>

                    <label for="end"><b>Cruise End Date</b></label><br>
                    <input type="text" placeholder="Enter Cruise end date" name="end" required>
                    <br>

                    <!-- dropdown Section -->
                    <section id="formfill">

                        <div class="formfillFlex-container">
                            
                            <div class="formfillText-container">

                                <div id="forms">

                                    <div id="Instruments">
                                        
                                        <h2>Instruments</h2>
                                        <ol id="zone"></ol>

                                        <input type="text" id="Instrument" placeholder="Instrument Name" name="Instrument"/>
                                
                                        <input id="clickMe" type="button" value="Add" onclick="listOne();" />
                                    </div>

                                    <div id="Stations">

                                        <h2>Stations</h2>
                                        <ol id="zone2"></ol>
                                        
                                        <input type="text" id="Station" placeholder="Station Name" name="Station"/>
                                
                                        <input id="clickMe2" type="button" value="Add" onclick="listTwo();" />
                                    </div>

                                    <div id="Crew">
                                        <h2>Crew Members</h2>
                                        <ol id="zone3"></ol>
                                    
                                        <input type="text" id="name" placeholder="Crew Member Name" name="name" />
                            
                                        <input id="clickMe3" type="button" value="Add" onclick="listThree();" />
                                    </div>

                                </div>

                            </div>
                            <!-- Sub Flex Container End --> 

                        </div>
                        <!-- Flex Container End -->

                        </section>
                        <!-- dropdown Section End -->

                    <!-- done button Section -->
                    <section id="done">

                        <a href="PHP/cruiseMaker.php"><button type="submit" id="dbutt">DONE!</button></a>

                    </section>
                    <!-- done button Section end-->

                </div>
                <!-- Sub Flex Container End -->

            </div>
            <!-- Flex Container End -->

        </section>
        <!-- fillout Section End -->

    </form>

        <script>

        function listOne() { 
            var list = document.getElementById('zone');
            var item = document.getElementById('Instruments');
            var Instrument = document.getElementById('Instrument').value;

            var newCheckBox = document.createElement('input'); 
            newCheckBox.setAttribute('type','checkbox')
            newCheckBox.setAttribute('checked','true')
            newCheckBox.setAttribute('value', Instrument)
            newCheckBox.setAttribute('class', 'form')
            newCheckBox.setAttribute('style', 'display:none')
            newCheckBox.setAttribute('name','checkbox[]')

            list.appendChild(newCheckBox); 

            var Instrument = document.getElementById('Instrument').value;
            var item = document.createElement('li');
            item.appendChild(document.createTextNode(Instrument));
            list.appendChild(item);
        };
        function listTwo() { 
            var list2 = document.getElementById('zone2');
            var item2 = document.getElementById('Stations');
            var Station = document.getElementById('Station').value;

            var newCheckBoxTwo = document.createElement('input'); 
            newCheckBoxTwo.setAttribute('type','checkbox')
            newCheckBoxTwo.setAttribute('checked','true')
            newCheckBoxTwo.setAttribute('value', Station)
            newCheckBoxTwo.setAttribute('class', 'form')
            newCheckBoxTwo.setAttribute('style', 'display:none')
            newCheckBoxTwo.setAttribute('name','checkboxTwo[]')

            list2.appendChild(newCheckBoxTwo); 

            var item2 = document.createElement('li');
            item2.appendChild(document.createTextNode(Station));
            list2.appendChild(item2);
        };
        function listThree() { 
            var list3 = document.getElementById('zone3');
            var item3 = document.getElementById('Crew');
            var name = document.getElementById('name').value;

            var newCheckBoxThree = document.createElement('input'); 
            newCheckBoxThree.setAttribute('type','checkbox')
            newCheckBoxThree.setAttribute('checked','true')
            newCheckBoxThree.setAttribute('value', name)
            newCheckBoxThree.setAttribute('class', 'form')
            newCheckBoxThree.setAttribute('style', 'display:none')
            newCheckBoxThree.setAttribute('name','checkboxThree[]')

            list3.appendChild(newCheckBoxThree); 

            var item3 = document.createElement('li');
            item3.appendChild(document.createTextNode(name));
            list3.appendChild(item3);
        };

        </script>

    </body>
</html>




