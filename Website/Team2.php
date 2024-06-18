<!DOCTYPE html>
<!------------------------------------------------------------------------------        
----------------------- Homepage - Kiwi Smartphone Service.html      
----------------------- Kiwi Smartphone Service Concept Homepage
----------------------- 10/12/2021 T2 Original Program 
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

            
            <a href="#NewsPromo"><img src="Kiwi_Smartphone_Homepage_Phone_Buy_Now_Promo2.png" style = "width: 75%; height: 75%;"></a>
            <br>

            <p style="font-size: 24px;"> <strong> Subtle in design, yet determined to power through your day.<br>
             DASH FORWARD&TRADE; with the all-new Kiwi Dash Lite and Dash Pro. Available NOW. </strong> </p> <br> <hr>
            
            <br><br>

            <h1 id="Welcome To Kiwi"> <u>Welcome To Kiwi</u> </h3>
            <p> Kiwi welcomes you to the future of the smartphone, in a company committed to providing <br>
            the best consumer experience. Whether you shop in our dozens of stores or visit one
                of our partnered carriers' retail locations, you can expect to find one of our products <br>
                to fit your needs. With best-in-class budget and pro models to choose from, the next
                smart device added to your life should be a Kiwi. </p> <br>  <hr>

            <br><br>

            <h1 id="Find Your Next Kiwi"> <u>Find Your Next Kiwi</u> </h3>
            <p> With direct access to our warehouse selection, you can view our inventory of Kiwi smartphones <br>
            and tablets, all in real-time. Find your model, pick your specs, and choose to pick it up in-store 
                or to your address with FREE two-day shipping*. </p>

            <p> <u>Can't figure out what device to get? Click <strong>HERE</strong> <br>
            to take our Device Assessment.</u> </p> <br>  <hr>
    
            <br><br>

            <h1 id="Fix Your Kiwi"> <u>Fix Your Kiwi</u> </h3>
                <p> Need help or have a problem with your current Kiwi device? Our customer support team and<br> 
                online troubleshooting will resolve the issue. </p>
                <p> <u>VISIT CUSTOMER SUPPORT</u></p>  <br> <hr>
    

        </main> 

        <br><br>

        <footer>
            <?php
                include("footer.php");
            ?>
        </footer>
    </body>

    </html>