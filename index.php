<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Expesnse Log</title>
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Entry a New Parcel</h1>
    <div class="jumbotron">
    <form action="parcelentry.php" method="POST">

<span>Parcel CODE:  </span>
<input  type="text" name="code"align="middle">

<span>Item Name:</span>
<input type="text" name="i_name">
<br>
<span>Phone Number:</span>
<input type="number" name="number" required>

<span >QTY:</span>
<input type="text" name="qty">
<br>
<span>Destination:</span>
<input type="text" name="dest">

<span>Payment:</span>
<input type="number" name="payment" required>
<br>
<label class="form-check-label" for="invalidCheck2">
         <input class="form-check-input" type="checkbox" value="" id="invalidCheck2" required>Confirm Entry?
      </label>
<button type="submit">Enter</button>



</form>
    </div>

    
    
</body>
</html>