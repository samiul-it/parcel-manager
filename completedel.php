<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Delivery Complete</title>
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    
</body>
</html>



<?php 
$code=$_POST['code'];
$id=$_POST['p_id'];
$status=$_POST['status'];


$con=mysqli_connect('localhost','root', '','expensesheet');
// echo "<h1>$code</h1>";
echo "<h1>Update Delivery Status</h1>";



$sql="select * from parcels where parcelid='$id' ";
$sql2= "UPDATE parcels
SET status = '$status', deliverytime=CURRENT_TIMESTAMP()
WHERE parcelid='$id'";
$res2=mysqli_query($con,$sql2);
$res=mysqli_query($con,$sql);

?>
<button  onclick="myFunction()">Make a Print Copy</button>
<script>
function myFunction() {
window.print();
}
</script>
<table align="center" border="1">
<tr>
<td>ParcelID</td>
<td>Item Name</td>
<td>Phone</td>
<td>Quantity</td>
<td>Destination</td>
<td>Payment</td>
<td>Received Date</td>
<td>PARCEL Code</td>
<td>Action</td>
<td>Delivered At</td>
</tr><?php
while($row=mysqli_fetch_assoc($res))
{ ?>
<tr>
<td ><?php echo $row["parcelid"]; ?> </td>
<td ><?php echo $row["itemname"]; ?> </td>
<td ><?php echo $row["phone"]; ?> </td>
<td ><?php echo $row["quantity"]; ?> </td>
<td ><?php echo $row["destination"]; ?> </td>
<td ><?php echo $row["payment"]; ?> </td>
<td ><?php echo $row["date"]; ?> </td>
<td ><?php echo $row["code"]; ?> </td>
<td ><?php echo $row["status"]; ?> </td>
<td ><?php echo $row["deliverytime"]; ?> </td>
</tr>
<?php
}
?>
</table>
</script>