<!--
    e-log book login

    first page
    Author: Forde Nedimović
    Creation Date: 2024/01/22 
    Modified Date: 2024/02/27

    Filename:   login.php
-->

<!DOCTYPE html>
<html>

    <head>
        <meta charset="UTF-8">
		<meta name="description" content="The login page for the e-log book">
		<meta name="keywords" content="login, first,">
		<meta name="author" content="Forde Nedimović">
		<title>E-Log Login</title>
        <link href="..\CSS\base.css" rel="stylesheet">
        <link href="..\CSS\login.css" rel="stylesheet">
    </head>

    <body>
        <!-- Header Section -->
        <header>

                <!-- Title of app -->
                <h1>Electronic Log Book</h1>
                <h2>An S.O.S production</h2> 

        </header>
        <!-- Header Section End -->

        <!-- Login Section -->
        <section id="login">

            <div class="loginFlex-container">
                
                <div class="loginText-container">

                    <br><br><br>

                    <label for="username"><b>Username</b></label>
                    <input type="text" placeholder="Enter Username" name="username" required>

                    <br><br><br>

                    <label for="pass"><b>Password</b></label>
                    <input type="password" placeholder="Enter Password" name="pass" required>

                    <br>
                    
                    <a href="createChoose.php"><button type="submit">Login</button></a>
                </div>
                <!-- Sub Flex Container End -->

            </div>
            <!-- Flex Container End -->

        </section>
        <!-- Login Section End -->

        <!-- PHP Section -->
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

            echo $mysqli->host_info . "\n";

            $sql = "SELECT username, pasword FROM user";
            $result = $mysqli->query($sql);

            if ($result->num_rows > 0) {
            // output data of each row
            while($row = $result->fetch_assoc()) {
                echo "username: " . $row["username"]. " - Password: " . $row["pasword"]. "<br>";
            }
            } else {
            echo "0 results";
            }
            $mysqli->close();

        ?>
        <!-- PHO Section End -->

    </body>
</html>