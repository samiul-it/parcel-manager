<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Delivery Panel</title>
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Complete Delivery</h1>
    <form action="completedel.php" method="POST">

        <span>Parcel CODE:</span>
        <input  type="number" name="code">
        <span>ParcelID:</span>
        <input type="number" name="p_id" required>
        <span>Status:</span>
        <input type="text" name="status">
        
        <button type="submit">Enter</button>

    </form>

    <footer>
        <div class="text-center p-3 fixed-bottom" style="background-color: rgba(0, 0, 0, 0.2);">
            © 2021 Copyright:
            <a class="text-white" href="#">SAMIUL DEVELOPMENTS</a>
          </div>
        </footer>

</body>
</html>