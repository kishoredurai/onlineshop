<?php // <--- do NOT put anything before this PHP tag
include_once "navbar.php";
include('functions.php');

// get the cookieMessage, this must be done before any HTML is sent to the browser.
$cookieMessage = getCookieMessage();
$dbh = connectToDatabase();
$statement = $dbh->prepare('SELECT * FROM Customers;');
$statement->execute();
$booking = $statement->fetchAll(PDO::FETCH_ASSOC);
$booking = json_encode($booking);

?>
<link rel="stylesheet" href="./css/cart.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script>
    var jso= '<?=$booking ?>';
    // var a1='';
    // console.log(a1);
    var json = [JSON.parse(jso)];
    console.log(json);
    var tbody=""
    $('document').ready(function(){

        for(var pro of json[0]){
            console.log("q1")
            tbody+=" <tr>" +
                "<td>"+
                    pro.UserName + 
                    "</td>"+
                    "<td>"+
                    pro.FirstName + pro.LastName+ 
                    "</td>"+
                    "<td>"+
                    pro.Address + 
                    "</td>"+
                    "<td>"+
                    pro.City+ 
                    "</td>"+
           " </tr>"
        }
        console.log(tbody);
    $("#providers tbody").html(tbody);
});
</script>
<div class="container" style="margin-top: 30px; margin-bottom: 60px;">
    <h2 class="text-center mgtt"> Customers </h2>
    <div class="table-responsive">
        <form  method="post">
        <table class="table" id="providers">
            <thead>
            <tr>
                <th>User Name</th>
                <th>Name</th>
                <th>Address</th>
                <th>City</th>
            </tr>
            </thead>
            <tbody></tbody>
           
        </table>
        </form>
    </div>
</div>