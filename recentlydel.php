<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Recently Delivered</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    
</body>
</html>


<?php
echo "<h1> Recently Delivered </h1>";
$con=mysqli_connect('localhost','root','','expensesheet');
$sql="select COUNT(status) as count FROM parcels where status='In Delivery'";
$duration = $con->query($sql);
$record = $duration->fetch_array();
$total = $record['count'];

 echo "<h1 >$total</h1> ";
//echo $data;
?>
<html>
<body>
<!-- <button align="center" onclick="myFunction()">Make a Print Copy</button> -->
<script>
function myFunction() {
window.print();
}
</script>

<?php
    
?>
</table>
</body>
</html>