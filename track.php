<?php

    

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Track</title>
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>
<body>
<h1>See Status</h1>
    <form action="seestat.php" method="POST">

        <span>Parcel CODE:</span>
        <input  type="number" name="code">
        <span>ParcelID:</span>
        <input type="number" name="p_id" required>
        
        <button type="submit">Enter</button>

    </form>
</body>
</html>