<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Payment Section</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>

<div class="jumbotron">
    




<body>

    <form action="payment.php"  action="" method="POST">

            
        <div class="alert alert-warning alert-dismissible fade show" role="alert">
            <strong>Enter Date:</strong><input type="date" name="date">  
            <input type="submit" name="btn" value="Submit"> Date Format Must be  <strong> [YEAR-Month-Date] Must follow the Patern</strong>!
            <a href="javascript:history.go(-1)"><button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button></a>
            
          </div>

    </form>
    
</body>
</html>