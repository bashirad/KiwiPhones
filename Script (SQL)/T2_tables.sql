# Drop Existing Employee Table, If It Already Exists - Allows for update of table
DROP TABLE IF EXISTS t2_users;

# Create Users Table, or Replace/Update Existing Employee Table
CREATE TABLE IF NOT EXISTS t2_users
	(
	User_ID INT PRIMARY KEY AUTO_INCREMENT,
	Active ENUM('Y', 'N', 'Locked') NOT NULL DEFAULT('Y'),
	Role ENUM('superadmin', 'admin', 'host', 'employee', 'no role') NOT NULL DEFAULT('no role'),
	Username VARCHAR(35) NOT NULL,
	Password VARCHAR(35) NOT NULL,
	Hash_Password CHAR(100),
	First_Name VARCHAR(25) NOT NULL,
	Last_Name VARCHAR(35) NOT NULL,
	Email VARCHAR(60) NOT NULL,
	Phone VARCHAR(25),
	Account_Locked_Change_Date DATETIME
		DEFAULT(NOW()),
	Username_Change_Date DATETIME NOT NULL
		DEFAULT(NOW()),
	Previous_Username VARCHAR(35),
	Password_Change_Date DATETIME NOT NULL
		DEFAULT(NOW()),
	Previous_Password VARCHAR(35),
	Security_Question1 ENUM('What was the name of the city where you
		were born?', 'What was the name of your first pet?', 'What
		was the color of your first car?'),
	Security_Question2 ENUM('What was the name of the city where you
		were born?', 'What was the name of your first pet?', 'What
		was the color of your first car?'),
	Security_Answer1 TEXT,
	Security_Answer2 TEXT
	);
	
	
	
# Drop Existing Products Table, If It Already Exists - Allows for update of table

DROP TABLE IF EXISTS t2_products;

# Create Products Table, or Replace/Update Existing Products Table

CREATE TABLE IF NOT EXISTS t2_products
	(Product_ID INT AUTO_INCREMENT PRIMARY KEY,
	Active ENUM('Y', 'N') 
		DEFAULT('Y'),
	Model CHAR(100) NOT NULL,
	Manufacturer_ID INT NOT NULL,
	Min_Quantity INT NOT NULL
		DEFAULT(0),
	Quantity INT NOT NULL
		DEFAULT(0),
	Last_Shipment_Date DATETIME
		DEFAULT(NOW()),
	Desc_Short TEXT,
	Desc_Long TEXT,
	Price DECIMAL (10,2)
	);
	
	
	
# Drop Existing Manufacturers Table, If It Already Exists - Allows for update of table
DROP TABLE IF EXISTS t2_manufacturers;

# Create Manufacturers Table, or Replace/Update Existing Manufacturers Table
CREATE TABLE IF NOT EXISTS t2_manufacturers
	(Manufacturer_ID INT AUTO_INCREMENT PRIMARY KEY,
	Active ENUM('Y', 'N')
		DEFAULT('N'),
	Manufacturer_Name VARCHAR(100),
	Shipping_Address CHAR(100),
	Billing_Address CHAR(100),
	Contact_First_Name VARCHAR(25),
	Contact_Last_Name VARCHAR(35),
	Contact_Email VARCHAR(35),
	Contact_Phone VARCHAR(25),
	Last_Shipment_Sent DATETIME
	DEFAULT(NOW()),
	Last_Shipment_Recieved DATETIME 
	DEFAULT(NOW())
	);
	
# Insert values into the users table (t2_users) - each users user ID (or username), password, role, first name, last name, email, phone
INSERT INTO t2_users (User_ID, Role, Username, Password, Hash_Password, First_Name, Last_Name, Email, Phone)
	VALUES (null, 'superadmin', 'atokash', 'ProfAPT0', NULL, 'Andrew', 'Tokash', 'andrew.tokash@marist.edu', '(845)317-7273'), 
			(null, 'employee', 'theboneman15', '247Program1560', NULL, 'Benjamin', 'Fiore', 'Benjamin.Fiore1@marist.edu', '(203)376-4408'),
			(null, 'admin', 'toaster', 'kiwi03', NULL, 'Christopher', 'Courts', 'christopher.courts1@marist.edu', '(845)317-7273'),
			(null, 'host', 'Bashir', 'kiwi04', NULL, 'Bashir', 'Dahir', 'Bashir.Dahir1@marist.edu', '(845)453-2940'),
			(null, 'superadmin', 'Jamesr', 'kiwi05', NULL, 'James', 'Robert', 'James.Robert@marist.edu', '(845)453-2940'),
			(null, 'employee', 'Johnm', 'kiwi06', NULL, 'John', 'Michael', 'John.Michael@marist.edu', '(845)453-8452'),
			(null, 'admin', 'Williamd', 'kiwi07', NULL, 'William', 'David', 'William.David@marist.edu', '(845)785-2940'),
			(null, 'host', 'Richardj', 'kiwi08', NULL, 'Richard', 'Joseph', 'Richard.Joseph@marist.edu', '(845)356-8542'),
			(null, 'superadmin', 'Susant', 'kiwi09', NULL, 'Susan', 'Thomas', 'Susan.Thomas@marist.edu', '(845)951-2586'),
			(null, 'employee', 'Karenc', 'kiwi10', NULL, 'Karen', 'Charles', 'Karen.Charles@marist.edu', '(845)753-1253'),
			(null, 'admin', 'Nancyc', 'kiwi11', NULL, 'Nancy', 'Christopher', 'Nancy.Christopher@marist.edu', '(845)852-7489'),
			(null, 'host', 'Lisad', 'kiwi12', NULL, 'Lisa', 'Daniel', 'Lisa.Daniel@marist.edu', '(845)452-7852'),
			(null, 'superadmin', 'Bettym', 'kiwi13', NULL, 'Betty', 'Matthew', 'Betty.Matthew@marist.edu', '(845)124-9632'),
			(null, 'employee', 'Anthonym', 'kiwi14', NULL, 'Anthony', 'Mark', 'Anthony.Mark@marist.edu', '(852)856-2587'),
			(null, 'admin', 'Stephenp', 'kiwi15', NULL, 'Stephen', 'Paul', 'Stephen.Paul@marist.edu', '(124)854-6352'),
			(null, 'host', 'Joshuak', 'kiwi16', NULL, 'Joshua', 'Kenneth', 'Joshua.Kenneth@marist.edu', '(896)325-6352');


# Insert values into the products table (t2_products) - each products id, active, model, manufacturer ID, minimum quantity, quantity, long description, price
INSERT INTO t2_products (Product_ID, Active, Model, Manufacturer_ID, Min_Quantity, Quantity, Desc_Short, Price)
	VALUES (0001, 'Y', 'Dash Pro', 1001, 1500, 2146, "The Dash Pro is Kiwis flagship smartphone, able to bring the blazing speed of the world 
					to your pocket. ", 899.99),
			(null, 'Y', 'Dash Slim', 1002, 3000, 2988, "The worlds only smartphone with a full two-day battery life.", 499.99),
			(null, 'Y', 'Dash Splice', 1001, 2000, 32,  'To be determined - finalizing product', 250.03),
			(null, 'Y', 'Dash Mini', 1001, 2000, 32,  'To be determined - finalizing product', 250.03),
			(null, 'Y', 'Dash Pro1', 1001, 2000, 32,  'To be determined - finalizing product', 250.03),
			(null, 'Y', 'Dash Slim1', 1001, 2000, 32,  'To be determined - finalizing product', 250.03),
			(null, 'Y', 'Dash Splice1', 1001, 2000, 32,  'To be determined - finalizing product', 250.03),
			(null, 'Y', 'Dash Mini1', 1001, 2000, 32,  'To be determined - finalizing product', 250.03),
			(null, 'Y', 'Dash Splice', 1001, 2000, 32,  'To be determined - finalizing product', 250.03),
			(null, 'Y', 'Dash Splice', 1001, 2000, 32,  'To be determined - finalizing product', 250.03),
			(null, 'Y', 'Dash Splice', 1001, 2000, 32,  'To be determined - finalizing product', 250.03),
			(null, 'Y', 'Dash Splice', 1001, 2000, 32,  'To be determined - finalizing product', 250.03),
			(null, 'Y', 'Dash Splice', 1001, 2000, 32,  'To be determined - finalizing product', 250.03),
			(null, 'Y', 'Dash Splice', 1001, 2000, 32,  'To be determined - finalizing product', 250.03),
			(null, 'Y', 'Dash Splice', 1001, 2000, 32,  'To be determined - finalizing product', 250.03);

# Insert values into the manufacturers table (t2_manufacturers) - each manufacturers id, active, shipping address, contact first name, 
												#contact last name, contact email,  Last_Shipment_Sent
	INSERT INTO t2_manufacturers (Manufacturer_ID, Active, Manufacturer_Name, Shipping_Address, Contact_First_Name, Contact_Last_Name, Contact_Email,  Last_Shipment_Sent)
		VALUES (1001, 'Y', 'Samsung Semiconductor - Austin', '12100 Samsung Boulevard, Austin, Texas 78754', 'Brian', 'DeJennings', 'BrianDeJennings@samsung.com', NULL),
				(NULL, 'Y', 'Samsung Semiconductor - Suzshou', '12100 Samsung Boulevard, Austin, Texas 78754', 'Ha-yoon', 'Cho', 'Ha-yoonCho@samsung.com', NULL),
				(NULL, 'Y', 'Benchmark Electronics', '100 Innovative Way, Nashua NH 03062',  'Melody', 'DiTomasso', 'MelodyDiTomasso@benchmark.com', NULL),
				(NULL, 'Y', 'Benchmark Electronics', '100 Innovative Way, Nashua NH 03062',  'Sandra', 'Mark', 'SandraMark@benchmark.com', NULL),
				(NULL, 'Y', 'Benchmark Electronics', '100 Innovative Way, Nashua NH 03062',  'Emily', 'Ronald', 'EmilyRonald@benchmark.com', NULL),
				(NULL, 'Y', 'Benchmark Electronics', '100 Innovative Way, Nashua NH 03062',  'Donna', 'Timothy', 'DonnaTimothy@benchmark.com', NULL),
				(NULL, 'Y', 'Benchmark Electronics', '100 Innovative Way, Nashua NH 03062',  'Ryan', 'Jeffrey', 'RyanJeffrey@benchmark.com', NULL),
				(NULL, 'Y', 'Benchmark Electronics', '100 Innovative Way, Nashua NH 03062',  'Laura', 'Jacob', 'LauraJacob@benchmark.com', NULL),
				(NULL, 'Y', 'Benchmark Electronics', '100 Innovative Way, Nashua NH 03062',  'Gary', 'Nicholas', 'GaryNicholas@benchmark.com', NULL),
				(NULL, 'Y', 'Benchmark Electronics', '100 Innovative Way, Nashua NH 03062',  'Amy', 'Eric', 'AmyEric@benchmark.com', NULL),
				(NULL, 'Y', 'Benchmark Electronics', '100 Innovative Way, Nashua NH 03062',  'Justin', 'Scott', 'JustinScott@benchmark.com', NULL),
				(NULL, 'Y', 'Benchmark Electronics', '100 Innovative Way, Nashua NH 03062',  'Debra', 'Frank', 'DebraFrank@benchmark.com', NULL),
				(NULL, 'Y', 'Benchmark Electronics', '100 Innovative Way, Nashua NH 03062',  'Alexander', 'Raymond', 'AlexanderRaymond@benchmark.com', NULL),
				(NULL, 'Y', 'Benchmark Electronics', '100 Innovative Way, Nashua NH 03062',  'Carolyn', 'Patrick', 'CarolynPatrick@benchmark.com', NULL),
				(NULL, 'Y', 'Benchmark Electronics', '100 Innovative Way, Nashua NH 03062',  'Tyler', 'Aaron', 'TylerAaron@benchmark.com', NULL);