<!DOCTYPE html>
<!--        Disclaimers - Kiwi Smartphone Service.html      Kiwi Smartphone Service Disclaimer Page
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
        
        <main>
        <h1> Website Disclaimers </h1>

            <h3> <u> Table of Contents </u> </h3>
            <ul>
                <li><a href="#Use of Cookies"> Use of Cookies </a></li>
                <li><a href="#Intellectual Property Disclaimer"> Intellectual Property Disclaimer </a></li>
                <li><a href="#Information Disclaimer"> Information Disclaimer </a></li>
                <li><a href="#External Links Disclaimer"> External Links Disclaimer </a></li>
                <li><a href="#Testimonials Disclaimer"> Testimonials Disclaimer </a>
            </ul>

            <br>
            <p> The disclaimers of this website (idenified in these agreements as "Disclaimers") are only applicable to all websites owned 
                and operated by Kiwi Smartphone Company, Inc.
                As used in these Disclaimers, "Kiwi", "us", "our", or "we" refers to Kiwi Smartphone Company, Inc., which owns and operates these Sites. 
                "You" and "Your" refer to the user(s) of these Sites. </p>

            <p> Other Kiwi Smartphone Company services may have additional disclaimers regarding your use 
                of those services, and nothing in these Disclaimers is intended to modify such additional conditions. </p>

            <p> <strong style="color:red"> NOTE: PLEASE DO NOT USE THIS SITE IF YOU DO NOT CONSENT TO OUR WEBSITE(S)'S DISCLAIMERS. </strong></p> <hr>

            <h3 id= "Use of Cookies"> <u>Use of Cookies</u> </h3>
            <p> <b> What is a Cookie? </b> 
                <br> A cookie is a text file that collects information about your account - such as your username and password - to recognize you 
                and track your preferences. Some cookies are kept during your current browser session only, while other are kept permanently.
                Cookies are required to be used on these Sites, as they provide information to perform critical services. </p>
            
            <p> <i> <b>By using these Sites, you consent to the use of cookies defined by these Sites, and that they may use your data for advertising and promotional purposes. 
                If you do not consent to the use of cookies, please leave this Site, and we reccomend that you delete any cookies used while using these Sites. </b> </i> </p>
            
            <h3 id="Intellectual Property Disclaimer"> <u>Intellectual Property Disclaimer</u> </h3>
            <p> All products and servies listed on these Sites are protexted under applicable copyright, trademark, trade secret, patent, and other 
                intellectual property laws and treaties. By accessing these Sites, you are granted a limited right of use to the intellectual property 
                of Kiwi Smartphone Company, Inc. and its affiliates and partners. This use does <i> NOT </i> any ownership of such property or properties, 
                and such limited rights can be revoked at any time, to Our discretion. </p>

            <h3 id="Information Disclaimer"> <u>Information Disclaimer</u> </h3>
            <p> The information provided by Kiwi on kiwi.com is for general information purposes only. All information on our Sites is provided in 
                good faith, however we make no representation or warranty of any kind, express or implied, regarding the accuracy,
                adequacy, validity, reliability, availability, or completeness of any information on the Site. </p>

            <p>
                Kiwi holds no liability to you - <i> under any any circumstance </i> - for any damage that results from using these Sites, 
                or any information provided. Your use of these Sites and any information it provides is solely at your own risk. </p>
    

            <h3 id= "External Links Disclaimer"> <u>External Links Disclaimer</u> </h3> 
            <p> These Sites may contain, or send to you through our Sites, links to third-party websites or content. These third-party links 
                are not investigated, monitored, or checked for accuracy, adequacy, validity, reliability, availability, or completeness by us. </p>

            <p> We do not warrant, endorse, guarantee, or assume responsibility for the accuracy, or reliability for any information offered 
                by third-party websites linked through our Sites. 
                Kiwi will not be held responsible for monitoring any transaction(s) between you and third-party providers for products and 
                services. </p>


            <h3 id= "Testimonials Disclaimer"> <u>Testimonials Disclaimer</u> </h3>
            <p> These Sites may contain testimonials by users of our products and/or services. These testimonials are personal to those 
                particular users, and they may not be representative of all users of our products and/or services. We does not claim that 
                all users share the same experience(s). Results may vary. </p>

            <p> The testimonials on these Sites are submitted in various forms, such as text, audio, and/or video, and are reviewed before 
                being posted on our website. Some testimonials may be shortened to remove information that is irrelevant to the general public. </p>

            <p> The views and/or opinions in these testimonials belong solely to the individual user(s) and do not reflect our views and 
                opinions. We are not affiliated with users who provide testimonials - unless otherwise noted - and users are not compensated 
                for their testimonials. </p><br>
        </main> <br>


        <footer>
            <?php
                include("footer.php");
            ?>
        </footer>
    </body>

    </html>