<?php
    session_start();
    require('navbar.php');
    require 'connection.php';
    require 'check_if_added.php';
    
    $email ='';
    $user_products_query="select * from product limit 152";
    try{
        if($_GET['cars'] == 1){
            $user_products_query="select * from product order by Productname  limit 152 ";
        }
        if($_GET['cars'] == 2){
            $user_products_query="select * from product order by Productname desc limit 152";
        }
        if($_GET['cars'] == 3){
            $user_products_query="select * from product order by price limit 152";
        }
        if($_GET['cars'] == 4){
            $user_products_query="select * from product order by price desc limit 152";
        }
        if($_GET['email']!=null){
            $email = $_GET['email'];
            $user_products_query="select * from product where Productname like '$email%'";
        }
    }
    catch(Exception $e){
        echo "";
    }
    $user_products_result=mysqli_query($con,$user_products_query) or die(mysqli_error($con));
    $no_of_user_products= mysqli_num_rows($user_products_result);
    $sum=0;
    
    if($no_of_user_products==0){
        //echo "Add items to cart first.";
    ?>
        <script>
        window.alert("No items in the product!!");
        </script>
    <?php
    }
    function getfilter(){
        
    }
?>
<!DOCTYPE html>
<html>
    <head>
        <link rel="shortcut icon" href="" />
        <title>Online Store</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- latest compiled and minified CSS -->
        <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" type="text/css">
        <!-- jquery library -->
        <script type="text/javascript" src="bootstrap/js/jquery-3.2.1.min.js"></script>
        <!-- Latest compiled and minified javascript -->
        <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
        <!-- External CSS -->
        <link rel="stylesheet" href="css/style.css" type="text/css">
        <link rel="stylesheet" href="css/pro.css" type="text/css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
        <script>
             $('document').ready(function(){
        document.getElementById('success').onclick = function(){
            alert('Product added to cart successfully');
        }
    });
        </script>
    </head>
    <body>
        <div>
            <?php
               
            ?>
            <div class="container">
                <div class="">
                    <!-- <h3 >Welcome to our Online Store!</h3>
                    <p>We have the best cameras, watches and shirts for you. No need to hunt around, we have all in one place.</p> -->
                    <h2>Products</h2>
                </div>
            </div>
            
            <div class="container">
            
                <div class="row">
                <div class="row">
                <form class="col-md-12">
  <select name="cars" id="cars">
    <option value="1">A-Z</option>
    <option value="2">Z-A</option>
    <option value="3">Low To High</option>
    <option value="4">High To Low</option>
  </select>
  

<div class="form-group col-md-6">
                                        <input type="text" class="form-control" name="email" placeholder="Search">
                                    </div>
  
  <button class="btn btn-primary" type="submit" onclick="getfilter()">Search</button>
</form>
                                    </div>
<br><br>
               
                
                <?php 
                        //  echo $user_products_query;
                        $user_products_result=mysqli_query($con,$user_products_query) or die(mysqli_error($con));
                        $no_of_user_products= mysqli_num_rows($user_products_result);
                        $counter=1;
                       while($row=mysqli_fetch_array($user_products_result)){
                           
                         ?>
        <div class="col-md-3">
        <div class="wsk-cp-product">
          <div class="wsk-cp-img"><img src="./img/pro.jpg" alt="Product" class="img-responsive" /></div>
          <div class="wsk-cp-text">
            <div class="category">
              <span>For Sale</span>
            </div>
            <div class="title-product">
              <h3><?php echo $row['Productname'] ?></h3>
            </div>
            <div class="description-prod">
              <p>Description contains the quality of our product and reach of us  </p>
            </div>
            <div class="card-footer">
              <div class="wcf-left"><span class="price">Rs. <?php echo $row['price'] ?></span></div>
              
              <a id='success' href="AddToCart.php?ProductID=<?php echo $row['ProductID'] ?>"><div class="wcf-right category"><span>AddToCart</span></div></a>
              
              </div>
          </div>
        </div>
      </div>
                    <?php $counter=$counter+1;}?>
            </div>
            <br><br><br><br><br><br><br><br>
           <footer class="footer">
               <div class="container">
                <center>
                   <p>Copyright &copy <a>2022</a> online shopping</p>
               </center>
               </div>
           </footer>
        </div>
    </body>
</html>
