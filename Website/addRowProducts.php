<!DOCTYPE html>
<!--    addRow.php   
    11/10/2021 BD Original Program 
    -->
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title> Adding a User</title>
    <link rel="stylesheet" type="text/css" href="style.css" />
</head>

<body>
    <header>
        <h1> Add another product to the Products Table </h1>
    </header>
    <hr>

    <main>

<?php
    define ("FILE_AUTHOR", "BASHIR DAHIR");
    include "ErrorHandler.php";
    require "..\connect_db.php";
   
    #---------- Initialize some varibales ---------#

    $error_message="";                         # set this variable during input validation 

/*    if (isset($_POST['Product_ID'])){
        $Product_ID = $_POST['Product_ID'];
    }
    else {
        $Product_ID = "";
    }
*/
    if (isset($_POST['Model'])){
        $Model = $_POST['Model'];
    }
    else {
        $Model = "";
    }
    if (isset($_POST['Manufacturer_ID'])){
        $Manufacturer_ID = $_POST['Manufacturer_ID'];
    }
    else {
        $Manufacturer_ID = "";
    }
    if (isset($_POST['Min_Quantity'])){
        $Min_Quantity = $_POST['Min_Quantity'];
    }
    else {
        $Min_Quantity = "";
    }
    if (isset($_POST['Quantity'])){
        $Quantity = $_POST['Quantity'];
    }
    else {
        $Quantity = "";
    }
    if (isset($_POST['Desc_Long'])){
        $Desc_Long = $_POST['Desc_Long'];
    }
    else {
        $Desc_Long = "";
    }
    if (isset($_POST['Price'])){
        $Price = $_POST['Price'];
    }
    else {
        $Price = "";
    }


    #-----------Input Validation ------------
    // Input Validation for User name
    if ($_SERVER['REQUEST_METHOD'] == "POST"){
        /*if (trim($Product_ID) == ""){
            $error_message = 'Product_ID must not be blank!';
        }
        else */if (trim($Model) == ""){
            $error_message = 'Model must not be blank!';
        }
        else if (trim($Manufacturer_ID) == ""){
            $error_message = 'Manufacturer_ID must not be blank!';
        }
        else if (trim($Min_Quantity) == ""){
            $error_message = 'Min_Quantity must not be blank!';
        }
        else if (trim($Quantity) == ""){
            $error_message = 'Quantity must not be blank!';
        }
        else if (trim($Desc_Long) == ""){
            $error_message = 'Desc_Long must not be blank!';
        }
        else if (trim($Price) == ""){
            $error_message = 'Price must not be blank!';
        }
        

    }

    // error meassages for user name and password 
    echo "<p style='color:red;'> " . $error_message . "</p>";

    
    if ($_SERVER['REQUEST_METHOD'] == "GET" || $error_message != ""){
        //Form to process differnet sort options 
        echo "<h1> Please fill the next form to insert a new product </h1>";
        echo "<form action='" . $_SERVER['SCRIPT_NAME'] . "' method='POST'>";
        //echo "<br> Enter your User_ID (numbers) <input type='text' name='User_ID' value=''>";
        echo "<br> Enter product Model (numbers, max 100 digits) <input type='text' name='Model' value='' max = '100'>";
        echo "<br> Enter product Manufacturer_ID (numbers) <input type='text' name='Manufacturer_ID' value=''>";
        echo "<br> Enter product Min_Quantity (numbers)<input type='text' name='Min_Quantity' value=''>";
        echo "<br> Enter product Quantity (numbers)<input type='text' name='Quantity' value=''>";
        echo "<br> Enter product Description (short) <input type='text' name='Desc_Long' value=''>";
        echo "<br> Enter product Price (numbers) <input type='text' name='Price' value=''>";
            
        

        echo     "<br><br> <input type='submit' value='Submit!' style='color: white; background: blue;'>";

        
            
        echo "</form>";
    } 

    else if ($_SERVER['REQUEST_METHOD'] == "POST" || $error_message == ""){
            $q = "INSERT INTO t2_products (Active, Model, Manufacturer_ID, Min_Quantity, Quantity, Desc_Long, Price)
                        VALUES (null, '$Model', $Manufacturer_ID, $Min_Quantity, $Quantity, '$Desc_Long', $Price)";
            $r = mysqli_query ($dbc, $q);   
   
            if ($r){
                echo "<br> <h1 style='color: green';> Thank you for inserting the new product information. </h1><br>";
                echo "<a href='Display Products Table - Kiwi Smartphone Service.php'> Display Updated Products Table </a>";
            }
            else {
                if (mysqli_error($dbc) != "") {
                echo "<h1 style='color: red';> Please try again! </h1>";
                echo "<h1 style='color: red';> for more information click on the following link </h1>";
                //echo "<a href = '" . mysqli_error($dbc) . "'> ERROR </a>";
                echo mysqli_error($dbc);
                }
            }
    }
    

   
    
   
    include "footer.php";

    
?>

    </main>
    
</body>
</html>