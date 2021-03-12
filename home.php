<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MATTRIX Delivery</title>
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>MATTRIX Delivery Manager</h1>
    
    <!-- <a href="view.php">See Parcel History</a>
    <a href="delivery.php">Complete Delivery</a>
    <a href="track.php">See Status</a>
    <a href="return.php">Return a Parcel</a>
    <a href="pay-check.php">Payments</a>  -->
    

    <div class="navbar navbar-expand-lg navbar-light bg-light">
    

    
        
       

        <ul class="nav nav-pills">
            <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="index.php" tabindex="-1">Entry a New Parcel</a>
              </li>
            <li class="nav-item">
              <a class="nav-link "  href="view.php" tabindex="-1">See Parcel History</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="delivery.php" tabindex="-1">Complete Delivery</a>
            </li>
            <li class="nav-item">
              <a class="nav-link " href="track.php" tabindex="-1">See Status</a>
            </li>
            <li class="nav-item">
                <a class="nav-link " href="return.php" tabindex="-1">Return a Parcel</a>
              </li>
              <li class="nav-item">
                <a class="nav-link " href="pay-check.php" tabindex="-1">Payments</a>
              </li>
              <li class="nav-item">
                <a class="nav-link " href="" tabindex="-1">Support</a>
              </li>
              <li class="nav-item">
                <a class="nav-link " href="" tabindex="-1" disabled>SEARCH</a>
              </li>
          </ul>
        </div>
    
        <button class="nav-link active" onclick="calcFunc()">Calculate Charge</button> 

        <p id="demo"></p>
        
        <script>
        function calcFunc() {
          var weight = prompt("Please item weight");
          var qty = prompt("Quantity");
          if (weight != null) {
            fee=90+(weight*6.50)*qty
            //console.log(fee)
            document.getElementById("demo").innerHTML =
            "<h1>Fee is <strong>" + fee + "tk</strong> (Delivery time 2 days)</h1>";
          }
        }
        </script>
        
    

    <a href="view.php"><img src="home-photo.jpg" alt="home.xml"></a>
    
    <a href="track.php"><img src="22.jpg" alt="home.xml"></a>
    
    <div class="fl">
        <a href="return.php"><img src="data-integrity.png" alt="home.xml"></a>
        
    </div>
    
    <?php include 'remainhub.php';?>
    <?php include 'recentlydel.php';?>
    <?php include 'returned-hub.php';?>
    

    <footer>
        <div class="text-center p-3 fixed-bottom" style="background-color: rgba(0, 0, 0, 0.2);">
            © 2021 Copyright:
            <a class="text-white" href="#">SAMIUL DEVELOPMENTS</a>
          </div>
        </footer>

    
</body>
</html>