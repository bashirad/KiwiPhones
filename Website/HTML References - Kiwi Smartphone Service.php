<!DOCTYPE HTML/>

<html lang = "en">

<?php
    define(FILE_AUTHOR, "Christopher Courts, Bashir Dashir, and Benjamin Fiore");
?>

<head>
	<title>  My HTML Reference </title>
	<meta charset = "utf-8">
	
	<style>
		
        table 
        {
			background-color: darkseagreen; color: black;
			border-collapse: collapse; border: 1px;
			font-family: Arial; font-weight: normal; 
			margin-right:auto; margin-left: auto;
        }
		
        th 
        {
			background-color: grey;
			font-size: 17px; font-weight: bold;
        }
		
        td
        {
			font-size: 15px; padding-left: 5px; padding-right: 5px;
        }
		
        h1
        {
			color: red; text-align: center;
        }
		
        h2 
        {
			color: red; text-align: center;
        }
			
        tr:nth-child(even) {background-color: black; color: white;}
    
	</style>
</head>

<body style="background-color: black; color: white;">
	<header>
		<h1 style = "color:red;"> My HTML Reference Page </h1>
	</header>

	<hr>

	<h2 style = "color:red;"> HTML Commands </h2>
		
		<table><table border = 1>	
			<tr>
				<th> Item </th>
				<th> Description </th>
			</tr>
			
			<tr>
				<td> &lt;DOCTYPE> </td>
				<td> Tells the browser the document type that it should expect </td>
			</tr>
			
			<tr>
				<td> &lt;charset> </td>
				<td> Used to define the character encoding of the code </td>
			</tr>

			<tr>
				<td> &lt;title> </td>
				<td> Defines the title of the document </td>
			</tr>
			
			<tr>
				<td> &lt;p> </td>
				<td> Seperates paragraphs </td>
			</tr>
			
			<tr>
				<td> &lt;i> </td>
				<td> Makes the text italics </td>
			</tr>
			
			<tr>
				<td> &lt;em> </td>
				<td> Makes the text italics </td>
			</tr>
			
			<tr>
				<td> &lt;b> </td>
				<td> Makes the text bold </td>
			</tr>
			
			<tr>
				<td> &lt;strong> </td>
				<td> Makes the text bold </td>
			</tr>
			
			<tr>
				<td> &lt;blockquote> </td>
				<td> Shows sections taken from another source </td>
			</tr>
			
			<tr>
				<td> &lt;h1> - &lt;h6> </td>
				<td> Different header sizes </td>
			</tr>
			
			<tr>
				<td> &lt;hr> </td>
				<td> Adds a horizontal line </td>
			</tr>
			
			<tr>
				<td> &lt;ul> </td>
				<td> Creates an unordered list </td>
			</tr>
			
			<tr>
				<td> &lt;ol> </td>
				<td> Creates an ordered list </td>
			</tr>
			
			<tr>
				<td> &lt;li> </td>
				<td> Adds an element to a list </td>
			</tr>
			
			<tr>
				<td> &lt;dl> </td>
				<td> Creates a description list </td>
			</tr>
			
			<tr>
				<td> &lt;dt> </td>
				<td> Defines a term in a description list </td>
			</tr>
			
			<tr>
				<td> &lt;dd> </td>
				<td> Describes each term in a description list </td>
			</tr>
		</table>

		<footer>
            <?php
                include("footer.php");
            ?>
        </footer>
	<body/>