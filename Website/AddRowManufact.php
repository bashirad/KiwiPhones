<!DOCTYPE html>
<!--  addRowManufact.php    Adding Manufacturers Table Rows 
    11/21/2021 BF Original Program 
    -->
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title> Add Manufacturers - Kiwi Smartphone Service </title>
    <link rel="stylesheet" type="text/css" href="style.css" />
</head>

<body>
    <header>
        <h1> Add Manufacturers </h1>
    </header>
    <hr>

    <main>
        <?php
            define ("FILE_AUTHOR", "Benjamin Fiore");
            include "ErrorHandler.php";
            require "..\connect_db.php";
            
            #Initalize variables

            $error_message="";                         # set this variable during input validation 

            if(isset($_POST['Manufact_ID'])){
                $manufact_id = $_POST['Manufact_ID'];
            }
            else {
                $manufact_id = "";
            }

            if(isset($_POST['Active'])){
                $active = $_POST['Active'];
            }
            else {
                $active = "";
            }

            if(isset($_POST['manufact_name'])){
                $manufact_name = $_POST['manufact_name'];
            }
            else {
                $manufact_name = "";
            }

            if(isset($_POST['ship_addr'])){
                $ship_addr = $_POST['ship_addr'];
            }
            else {
                $ship_addr = "";
            }

            if(isset($_POST['bill_addr'])){
                $bill_addr = $_POST['bill_addr'];
            }
            else {
                $bill_addr = "";
            }

            if(isset($_POST['contact_fname'])){
                $contact_fname = $_POST['contact_fname'];
            }
            else {
                $contacT_fname = "";
            }

            if(isset($_POST['contact_lname'])){
                $contact_lname = $_POST['contact_lname'];
            }
            else {
                $contact_lname = "";
            }

            if(isset($_POST['contact_email'])){
                $contact_email = $_POST['contact_email'];
            }
            else {
                $contact_email = "";
            }

            if(isset($_POST['contact_phone'])){
                $contact_phone = $_POST['contact_phone'];
            }
            else {
                $contact_phone = "";
            }
            
            if(isset($_POST['last_ship_sent'])){
                $last_ship_sent = $_POST['last_ship_sent'];
            }
            else {
                $last_ship_sent = "";
            }

            if(isset($_POST['last_ship_rec'])){
                $last_ship_rec = $_POST['last_ship_rec'];
            }
            else {
                $last_ship_rec = "";
            }



            # Validate form input
            if ($_SERVER['REQUEST_METHOD'] == "POST"){
                if(trim($manufact_name) == ""){
                    $error_message = 'You must provide a manufacturer name';
                }
                else if(ctype_alnum($manufact_name) == FALSE) {
                    $error_message = 'Invalid manufacturer name - A manufacturer name may only contain alphabetic (A, B, C,...) and numeric (1, 2, 3,...) characters. Special characters (@, !, #,...) are NOT PERMITTED.';
                }

                else if(trim($ship_addr) == ""){
                    $error_message = 'You must provide a shipping address for the manufacturer';
                }
                else if(ctype_alnum($ship_addr) == FALSE) {
                    $error_message = 'Invalid shipping address - A shipping address may only contain alphabetic (A, B, C,...) and numeric (1, 2, 3,...) characters. Special characters (@, !, #,...) are NOT PERMITTED.';
                }

                else if(trim($bill_addr) == ""){
                    $error_message = 'You must provide a billing address for the manufacturer';
                }
                else if(ctype_alnum($bill_addr) == FALSE) {
                    $error_message = 'Invalid billing address - A billing address may only contain alphabetic (A, B, C,...) and numeric (1, 2, 3,...) characters. Special characters (@, !, #,...) are NOT PERMITTED.';
                }

                else if(ctype_alpha($contact_fname) == FALSE) {
                    $error_message = 'Invalid contact first name - Contact names may only contain alphabetic (A, B, C,...) characters. Numeric (1, 2, 3,...) and special characters (@, !, #,...) are NOT PERMITTED.';
                }

                else if(ctype_alpha($contact_lname) == FALSE) {
                    $error_message = 'Invalid contact last name - Contact names may only contain alphabetic (A, B, C,...) characters. Numeric (1, 2, 3,...) and special characters (@, !, #,...) are NOT PERMITTED.';
                }

                else if(is_numeric($contact_phone) == FALSE) {
                    $error_message = 'Invalid phone number - A phone number may only contain numeric (1, 2, 3,...) characters. Alphabetic (A, B, C,...) and special characters (@, !, #,...) are NOT PERMITTED.';
                }

                /* else if(checkdate($last_ship_sent) == FALSE) {
                    $error_message = 'Invalid date.';
                }
                else if(checkdate($last_ship_rec) == FALSE) {
                    $error_message = 'Invalid date.'; 
                } */
            }

            echo "<p style='color:red;'> " . $error_message . "</p>";

            
            if ($_SERVER['REQUEST_METHOD'] == "GET" || $error_message != ""){
                echo "<h1> Add New Manufacturer </h1>";
                echo "<form action='" . $_SERVER['SCRIPT_NAME'] . "' method='POST'>";

                echo "<br> Manufacturer Name (max 100 characters) <input type='text' name='manufact_name' value='' maxlength = '100'>";
                echo "<br> Shipping Address (max 100 characters) <input type='text' name='ship_addr' value='' maxlength = '100'>";
                echo "<br> Billing Address (max 100 characters) <input type='text' name='bill_addr' value='' maxlength = '100'>";
                echo "<br> Contact First Name (max 25 characters) <input type='text' name='contact_fname' value='' maxlength = '25'>";
                echo "<br> Contact Last Name (max 35 characters) <input type='text' name='contact_lname' value='' maxlength = '35'>";
                echo "<br> Contact Email (max 35 characters) <input type='text' name='contact_email' value='' maxlength = '35'>";
                echo "<br> Contact Phone (max 25 characters) <input type='text' name='contact_phone' value='' maxlength = '25'>";

                /* echo "<br> Last Shipment Sent (YYYY-MM-DD HH:MI:SS) <input type='datetime' name='last_ship_sent' value=''>";
                echo "<br> Last Shipment Recieved (YYYY-MM-DD HH:MI:SS) <input type='datetime' name='Phone' value=''>"; */
                    
                

                echo     "<br><br> <input type='submit' value='Add Manufacturer' style='color: white; background: blue;'>";

                
                    
                echo "</form>";
            } 
            else if ($_SERVER['REQUEST_METHOD'] == "POST" || $error_message == ""){
                    $q = "INSERT INTO t2_manufacturers (Active, Manufacturer_Name, Shipping_Address, Billing_Address, Contact_First_Name, Contact_Last_Name, Contact_Email, Contact_Phone)
                                VALUES ('Y', '$manufact_name', '$ship_addr', '$bill_addr', '$contact_fname', '$contact_lname', '$contact_email', $contact_phone)";
                    $r = mysqli_query ($dbc, $q);   
        
                    if ($r){
                        echo "<br> <h1 style='color: green';> Success! Manufacturer added. </h1><br>";
                        echo "<br><button><a href='Display Manufacturers Table - Kiwi Smartphone Service.php'>Updated Manufacturers Table</a></button>";

                    }
                    else {
                        if (mysqli_error($dbc) != "") {
                        echo "<h1 style='color: red';> Please try again! </h1>";
                        echo "<h1 style='color: red';> for more information click on the following link </h1>";
                        echo "<a href = 'sqlError.php'> ERROR </a>";
                        $sql_error = mysqli_error($dbc);
                        }
                    }
            }
            include "footer.php";
        ?>
    </main>
    
</body>
</html>