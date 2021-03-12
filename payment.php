<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Payment Section</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    
    
</head>
<body>
<button align="center" onclick="myFunction()">Make a Print Copy</button>
<script>
function myFunction() {
window.print();
}
</script>
</body>
</html>



<?php

$text=$_POST['date'];
echo "<h1> Total Payment from DATE $text to Current Time</h1>";

//echo "Fees Collection Date ";
echo "<Strong>$text</Strong>  " ;
$temp=$text;
$con=mysqli_connect('localhost','root','','expensesheet');
$sql="select * FROM parcels where Date >= '$temp' and Date <= now() ";
$res=mysqli_query($con,$sql);



?>

<?php

$text=$_POST['date'];

//echo "Fees Collection Date ";
echo "<Strong>$text</Strong>  " ;
$temp=$text;


?>




<?php
echo "<h1> Payment Amount </h1>";


$sql_qry = "SELECT SUM(payment) AS count 
    FROM parcels where Date >= '$temp' and Date <= now()
    ";

$duration = $con->query($sql_qry);
$record = $duration->fetch_array();
$total = $record['count'];

// echo $total;

echo "<div class='alert alert-danger' role='alert'>
<h1>     Total Amount:<b> $total/-BDT </b></h1>
</div>";


echo "<a href=\"javascript:history.go(-1)\"><button>GO BACK</button></a>";


?>