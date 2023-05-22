<!DOCTYPE HTML>
<html>
<head>
	<title>View order</title>
	<link rel="stylesheet" type="text/css" href="./css/cart.css" />
	<meta charset="UTF-8" /> 
</head>
<body>

<?php
include_once "navbar.php";
// did the user provided an OrderID via the URL?
if(isset($_GET['OrderID']))
{
	$UnsafeOrderID = $_GET['OrderID'];
	
	include('functions.php');
	$dbh = connectToDatabase();
	
	// select the order details and customer details. (you need to use an INNER JOIN)
	// but only show the row WHERE the OrderID is equal to $UnsafeOrderID.
	
	$statement = $dbh->prepare('
		SELECT * 
		FROM Orders 
		INNER JOIN Customers ON Customers.CustomerID = Orders.CustomerID 
		WHERE OrderID = ? ; 
	');
	$statement->bindValue(1,$UnsafeOrderID);
	$statement->execute();
	
	// did we get any results?
	if($row1 = $statement->fetch(PDO::FETCH_ASSOC))
	{
		// Output the Order Details.
		$FirstName = makeOutputSafe($row1['FirstName']); 
		$LastName = makeOutputSafe($row1['LastName']); 
		$OrderID = makeOutputSafe($row1['OrderID']); 
		$UserName = makeOutputSafe($row1['UserName']); 
		$Address = makeOutputSafe($row1['Address']); 
		$City = makeOutputSafe($row1['City']); 

		
		// display the OrderID
		echo "<h2 class='mgt'>OrderID: $OrderID</h2>";
		
		// its up to you how the data is displayed on the page. I have used a table as an example.
		// the first two are done for you.
		echo "<table>";
		echo "<tr><th>UserName:</th><td>$UserName</td></tr>";
		echo "<tr><th>Customer Name:</th><td>$FirstName $LastName </td></tr>";
		echo "<tr><th>Address:</th><td>$Address </td></tr>";
		echo "<tr><th>City:</th><td>$City </td></tr>";
		echo "</table>";
		
		// TODO: select all the products that are in this order (you need to use INNER JOIN)
		// this will involve three tables: OrderProducts, Products and Brands.
		$statement2 = $dbh->prepare('
			
			SELECT * FROM orderproducts,product
			WHERE OrderID = ? ; 
		');
		$statement2->bindValue(1,$UnsafeOrderID);
		$statement2->execute();
		
		$totalPrice = 0;
		echo "<h2 class='mgt'>Order Details:</h2>";
		echo "<table>";
		echo "<tr>
		<th>OrderID</th>
		<th>Productname</th>
		<th>price</th>
		<th>Quantity</th>
		<th>Action</th>
		</tr>";
		 
		while($row2 = $statement2->fetch(PDO::FETCH_ASSOC))
		{
			$OrderID = makeOutputSafe($row2['OrderID']);
			$ProductID = makeOutputSafe($row2['ProductID']); 
			$ProductName = makeOutputSafe($row2['Productname']); 
			$price = makeOutputSafe($row2['price']);
			$qua =  makeOutputSafe($row2['Quantity']);
		echo "<tr>
		<td>$OrderID</td>
		<td>$ProductName </td>
		<td>$ProductName </td>
		<td>$price </td>
		<td>$qua </td>
		<td><a href='product.php' class='btn btn-primary'><button>BUY MORE</button></a></td>
		</tr>";
		$totalPrice = $totalPrice + $price;
		}		
		
		echo "</table>";
		echo "<h3 class='mgt'>Total price: $totalPrice </h3>";
		
	}
	else 
	{
		echo "System Error: OrderID not found";
	}
}
else
{
	echo "System Error: OrderID was not provided";
}
?>
</body>
</html>
