<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Delivery Panel</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0s
    zH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Retrun Product</h1>
    <form action="return-back.php" method="POST">

        <span>Parcel CODE:</span>
        <input  type="number" name="code">
        <span>ParcelID:</span>
        <input type="number" name="p_id">
        <span>Status:</span>
        <input type="text" name="status" disabled>
        <select name="status" class="form-select" aria-label="Default select example">
        <option selected>Select</option>
        <option value="Returned">Returned</option>
        </select>
        
        <button type="submit">Enter</button>

    </form>

</body>
</html>