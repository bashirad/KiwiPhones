<!DOCTYPE html>
<!------------------------------------------------------------------------------        
----------------------- Dash Pro - Kiwi Smartphone Service.html      
----------------------- Kiwi Smartphone Service Concept Homepage
----------------------- 12/1/2021 T2 Original Program 
------------------------------------------------------------------------------->
    <html lang="en">
	
	<?php
		session_start();
        define("FILE_AUTHOR", "Christopher Courts, Bashir Dashir, and Benjamin Fiore");
    ?>

    <head>
        <title> 
            Homepage | Kiwi 
        </title>

        <meta charset="utf-8">
        <link rel="stylesheet" type="text/css" href="style.css" /> 
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
<br>
        <main>
            <style>
                p   {
                    text-align: center;
                }
            </style>

            <br><br>
            <a href="DashSlimPromo"><img style="width: 75%; height: 75%;" src="Kiwi_Smartphone_Dash_Slim_Banner_Image.png"></a> <br> <br>

            <h1 style = "text-align: center;"> ADAPT AND EVOLVE </h1> 
            <h2 style = "text-align: center;"> Kiwi's phone to power through your "phone day". Enjoy social media scrolling, 
        video calling, gaming, web surfing with connectivity and consistency you can depend on. </h2> <br> <hr>
            
            <br><br>

            <h2 style = "text-align: center;"> Starting at $599.99 USD </h2> <br> <br>

            <form style = "text-align: center; font-size: 24px;" action = "https://blackfalconsoftware.files.wordpress.com/2016/01/agilememe.png?w=640">
            <input style="background-color: green; color: white; font-family: 'Franklin Gothic Light', 'Arial Narrow', Arial, sans-serif;" type = "submit" value = "Pre-Order NOW">
            </form>
    
            
        </main> 

        <br><br>

        <footer>
            <?php
                include("footer.php");
            ?>
        </footer>
    </body>

    </html>