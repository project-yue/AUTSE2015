<html>
<head>
<title>Seler database insertion</title>

<meta http-equiv="content-type" content="text/html; charset=utf-8" />
</head>
<body>
<?php
	// sql info or use include 'file.inc'
       require_once('sqlinfo.inc.php');
	
	// The @ operator suppresses the display of any error messages
	// mysqli_connect returns false if connection failed, otherwise a connection value
	$conn = @mysqli_connect($sql_host,
		$sql_user,
		$sql_pass,
		$sql_db
	);
  
	// Checks if connection is successful
	if (!$conn) {
		// Displays an error message, avoid using die() or exit() as this terminates the execution
		// of the PHP script
		echo "<p>Database connection failure</p>";
	} else {
		// Upon successful connection
		
		// Get data from the form
		$make	= $_POST["make"];
		$model	= $_POST["model"];
		$price	= $_POST["price"];
		$yom	= $_POST["yom"];

		// Set up the SQL command to add the data into the table
		$query = "insert into $sql_tble"
						."(make, model, price,yom)"
					." values "
						."('$make','$model', $price, $yom)";
echo $query;
		// executes the query
		$result = mysqli_query($conn, $query);
		// checks if the execution was successful
		if(!$result) {
			echo "<p>Something is wrong with ",	$query, "</p>";
		} else {
			// display an operation successful message
			echo "<p>Success</p>";
		} // if successful query operation

		// close the database connection
		mysqli_close($conn);
	}  // if successful database connection
?>
</body>
</html>




