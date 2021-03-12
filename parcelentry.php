<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Entry New Parcel</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    
</body>
</html>

<?php 
$code=$_POST['code'];
$name=$_POST['i_name'];
$phone=$_POST['number'];
$qty=$_POST['qty'];
$dest=$_POST['dest'];

$payment=$_POST['payment'];


echo "<h1>ITEM ADDED </h1>";
$con=mysqli_connect('localhost','root', '','expensesheet');
echo "<h1>PARCEL CODE:$code</h1>";
echo "<h1>ITEM NAME:$name</h1>";
//echo "<h1>$phone</h1>";

$sql="insert into parcels(parcelid,itemname,phone,quantity,destination,payment,date,code,status)values('','$name','$phone','$qty','$dest','$payment',CURRENT_TIMESTAMP(),'$code','NO')";
$res=mysqli_query($con,$sql);

?>
<?php include 'view.php';?>