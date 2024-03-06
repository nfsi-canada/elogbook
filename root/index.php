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
                    <form action="..\PHP\login.php" method="get" >
                        <br><br><br>

                        <label for="username"><b>Username</b></label>
                        <input id="username" type="text" placeholder="Enter Username" name="username" required>

                        <br><br><br>

                        <label for="password"><b>Password</b></label>
                        <input id="password" type="password" placeholder="Enter Password" name="password" required>

                        <br>
                        
                        <a href="createChoose.php"><button type="submit">Login</button></a>
                    </form>
                </div>
                <!-- Sub Flex Container End -->

            </div>
            <!-- Flex Container End -->

        </section>
        <!-- Login Section End -->

    </body>
</html>