<?php // <--- do NOT put anything before this PHP tag
	include('navbar.php');
	include('functions.php');
	$cookieMessage = getCookieMessage();
	
session_start();
?>
<!doctype html>
<html>
<head>
	<meta charset="UTF-8" /> 
	<title>Sign Up Page</title>
	<link rel="stylesheet" type="text/css" href="./css/form.css" />
	<link rel="stylesheet" href="https://codepen.io/gymratpacks/pen/VKzBEp#0">
        <link href='https://fonts.googleapis.com/css?family=Nunito:400,300' rel='stylesheet' type='text/css'>
		
</head>
<body>
	<?php
		// display any error messages. TODO style this message so that it is noticeable.
		echo $cookieMessage;
	?>
	
	<div class="row">
    <div class="col-md-12">
      <form action="AddNewCustomer.php" method="post">
        <h1> Sign Up </h1>
        
        
        
          <label for="name"><span class="number">1</span> UserName:</label>
          <input type="text" id="UserName" name="UserName">
        
          <label for="email"><span class="number">2</span> FirstName:</label>
          <input type="text" id="FIrstName" name="FirstName">
       
          <label for="password"><span class="number">3</span> LastName:</label>
          <input type="text" id="LastName"       name="LastName">
        
          <label><span class="number">4</span> Address:</label>
          <textarea  id="Address" value="age" name="Address"></textarea>
          
		  <label for="password"><span class="number">5</span> City:</label>
          <input type="text" id="City"       name="City">
       
        <button type="submit">Sign Up</button>
        
       </form>
        </div>
      </div>
	
</body>
</html>