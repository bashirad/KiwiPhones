<!DOCTYPE html>
<!--        Change Log - Kiwi Smartphone Service.html      Kiwi Smartphone Service Change Log Page
    10/12/2021 T2 Original Program 
-->
    <html lang="en">

    <?php
		session_start();
        define(FILE_AUTHOR, "Christopher Courts, Bashir Dashir, and Benjamin Fiore");
    ?>

    <head>
        <title> Website Disclaimer | Kiwi </title>
        <meta charset="utf-8">
    </head>

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
<br>

<main>
            <h2 style="font-size: 36px; text-align: center;"> <u>Website Change Log</u></h2>
            
            <ul style="text-align: left; display: inline-block; font-size: 28px;">
                <li>v1.0</li>
                <li style="margin-left: 30px; font-size: 20px;">Version Released: October 12th, 2021</li> <br>
                <li style="margin-left: 30px; font-size: 20px;">Creation of initial website, featuring</li>
                    <li style="margin-left: 60px; font-size: 16px;">Concept home page - Page menu, email/contact link, footer w/ menu, version number</li>
                    <li style="margin-left: 60px; font-size: 16px;">Admin Page - Links to HTML/CSS References, MySQL Reference, MySQL Table Source Code 
                        <i>(NOT WORKING)</i>, Design Documents, Change Log, Disclaimers</li>
                    <li style="margin-left: 60px; font-size: 16px;">Disclaimer Page - Lists all disclaimers to use website, including use of cookies</li>
                    <li style="margin-left: 60px; font-size: 16px;">Change Log - Shows summary of each release version, features added, any bugs</li>
                <li style="margin-left: 30px; font-size: 20px;">Creation of MySQL for database - forming tables, filling with data</li>
                <br><hr> 
                
                <li>v1.1</li>
                <li style="margin-left: 30px; font-size: 20px;">Version Released: November 2nd, 2021</li> <br>
                <li style="margin-left: 30px; font-size: 20px;">Adding database functionality using PHP, featuring</li>
                    <li style="margin-left: 60px; font-size: 16px;">Conversion of all website pages to PHP (from HTML)</li>
                    <li style="margin-left: 60px; font-size: 16px;">Addition of FILE_AUTHOR feature to all website pages</li>
                    <li style="margin-left: 60px; font-size: 16px;">Pages that explain each of the tables in the database (users, products, manufacturers)</li>
                    <li style="margin-left: 60px; font-size: 16px;">Pages that show the data in each of the tables in the database (users, products, manufacturers)</li>
                <li style="margin-left: 30px; font-size: 20px;">Creation of MySQL for database - forming tables, filling with data</li>
                <br><hr>

                <li>v1.2</li>
                <li style="margin-left: 30px; font-size: 20px;">Version Released: November 21st, 2021</li> <br>
                <li style="margin-left: 30px; font-size: 20px;">Adding administrator fuctionality, including</li>
                    <li style="margin-left: 60px; font-size: 16px;">Login/logoff restriction for admin page - Access to admin pages is restricted to admins only, who must login with credentials</li>
                    <li style="margin-left: 60px; font-size: 16px;">Abiliy to add,remove rows from the "display" tables</li>
                    <li style="margin-left: 60px; font-size: 16px;">Ability to sort "display" tables based on values in single column</li>
                <li style="margin-left: 30px; font-size: 20px;">Addressed bugs in v1.1, including,</li>
                    <li style="margin-left: 60px; font-size: 16px;">Ability to view "display", "explain" tables - originally had blank information upon visiting Products, Manufacturers pages</li>
                    <li style="margin-left: 60px; font-size: 16px;">Added additional data to MySQL tables</li>
                <li>v1.2</li>
                <br><hr>

                <li>v1.3</li>
                <li style="margin-left: 30px; font-size: 20px;">Version Released: December 5th, 2021</li> <br>
                <li style="margin-left: 30px; font-size: 20px;">Improvements to login system - contents available on "ADMIN" page will be determined by the account type</li>
                    <li style="margin-left: 60px; font-size: 16px;"> I.E.: Admin-accessible and admin-only links will be available for accounts with the admin login</li>
                <li style="margin-left: 30px; font-size: 20px;">Content accessible on "Dash Pro" and "Dash Slim" pages</li>
                <li style="margin-left: 30px; font-size: 20px;">Blank/filler pages (Support, About) removed from menu</li>
                <li style="margin-left: 30px; font-size: 20px;">Addressed bugs in v1.2, including,</li>
                    <li style="margin-left: 60px; font-size: 16px;">Products table is now pubically-accesible via the "Store" link</li>
                    <li style="margin-left: 60px; font-size: 16px;">Manufacturers Table now allows for spaces in fields (for input validation)</li>
            </ul> <br>
        </main> <hr>


        <footer>
            <?php
                include("footer.php");
            ?>
            </footer>
    </body>

    </html>