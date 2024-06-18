<!DOCTYPE html>
<!--        Admin Links - Kiwi Smartphone Service.html      Kiwi Smartphone Service Admin Links Page
    10/12/2021 T2 Original Program 
-->
    <html lang="en">

    <?php
		session_start();
        define("FILE_AUTHOR", "Christopher Courts, Bashir Dashir, and Benjamin Fiore");
    ?>

    <head>
        <title> Website Disclaimer | Kiwi </title>
        <meta charset="utf-8">
        <link rel="stylesheet" type="text/css" href="style.css" />
        <style>
            li {
                font-size: 20px;
            }
        </style>
    </head>

    <body>
        <header>
                <a href="Team2.php">
                    <img src="Kiwi Smartphone Website Banner Concept Logo.png"></a>
        </header>


        <div class="the_menu">
        <ul>
                <li><a href="Team2.php">Home</a></li>
                <li><a href="DashPro.php">Dash Pro</a></li> 
                <li><a href="DashSlim.php">Dash Slim</a></li> 
                <li><a href="Display Manufacturers Table - Kiwi Smartphone Service.php"> Manufacturers</a></li>
                <li><a href="Display Products Table - Kiwi Smartphone Service.php">Store</a></li>
                <li><a href="Disclaimers - Kiwi Smartphone Service.php">Disclaimers </a></li>
                <li><a href="mailto:Christopher.Courts1@marist.edu; Bashir.Dashir1@marist.edu; Benjamin.Fiore1@marist.edu">Contact</a> </li>
                <?php
					if($_SESSION['login_status'] == "Logged in as admin")
					{
				?>
						<li><a style="color: forestgreen; background-color: forestgreen;" href ="">_________________________________________________________</li>
						<li><a href="t2_logout.php">Logout </a></li>
						<li><a href="Admin Links - Kiwi Smartphone Service.php">ADMIN </a></li>
				<?php
					}
					else
					{
						if($_SESSION['login_status'] == "Logged in as employee")
						{
						?>
							<li><a style="color: forestgreen; background-color: forestgreen;" href ="">_________________________________________________________________</li>
							<li><a href="t2_logout.php">Logout </a></li>
						<?php
						}
						else
							{
						?>
								<li><a style="color: forestgreen; background-color: forestgreen;" href ="">_________________________________________________________________</li>
								<li><a href="t2_login.php">Login </a></li>
						<?php
							}
						
					}
						?>
            </ul> <hr>
        <br />
    </div>

        <main>
            <h1> <br><u>Admin Items</u></h1>
            
            <p> To access critical files about these Sites, please click the links below. </p>
            <p> <b> NOTE: Some links are files, which may need to be downloaded. </b></p>
            
            <ul>
                <li><a href ="HTML References - Kiwi Smartphone Service.php">HTML/CSS Reference Page</a></li>
                <li><a href="MySQL References - Kiwi Smartphone Service.php">MySQL Reference Page</a></li>
                <li><a href="Kiwi Project Documentation.pdf" download>Requirements and Design Document</a></li> <hr>

                <li>MySQL Database Files - Explain Tables</li>
                <li style="margin-left: 30px;"><a href="Explain Users Table - Kiwi Smartphone Service.php">Users Table </a></li>
                <li style="margin-left: 30px;"><a href="Explain Products Table - Kiwi Smartphone Service.php">Products Table </a></li>
                <li style="margin-left: 30px;"><a href="Explain Manufacturers Table - Kiwi Smartphone Service.php">Manufacturers Table </a></li>
                
                <br> <li>MySQL Database Files - Display Tables</li>
                <li style="margin-left: 30px;"><a href="Display Users Table - Kiwi Smartphone Service.php">Users Table </a></li>
                <li style="margin-left: 30px;"><a href="Display Products Table - Kiwi Smartphone Service.php">Products Table </a></li>
                <li style="margin-left: 30px;"><a href="Display Manufacturers Table - Kiwi Smartphone Service.php">Manufacturers Table </a></li> <hr>
                    
                <li><a href="Change Log - Kiwi Smartphone Service.php">Change Log</a></li>
                <li><a href="Disclaimers - Kiwi Smartphone Service.php">Disclaimers</a></li>
                <br>
            </ul>
        </main> <br>


        <footer>
            <?php
                include("footer.php");
            ?>
        </footer>
    </body>

    </html>