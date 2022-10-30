<!doctype html>
<html lang="en">
<head>
    <!-- Meta Tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.min.js" integrity="sha384-IDwe1+LCz02ROU9k972gdyvl+AESN10+x7tBKgc9I5HFtuNz0wWnPclzo6p9vxnk" crossorigin="anonymous"></script>
      
    <!--fontawesome-->
      <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" 
        integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">

          <link rel="stylesheet" href="style.css">
    
    


<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600&display=swap" rel="stylesheet">
</head>
<!-- NAVBAR -->
<div class="navibar">
    <section id="NAVBAR">
    
    <nav class="navbar navbar-expand-lg navbar-light bg-light">

    <a class="navbar-brand" href="#youtube"><img src="logo-ead.png"alt="Bootstrap" width="100" height="24" ></a>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">

        <ul class="navbar-nav mr-auto">
            <li class="nav-item">
                <a class="nav-link" href="index.php">Home</a>
          </li>
            <li class="nav-item">
            <a class="nav-link" href="booking.php">Booking</a>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="Mybooking.php">My Booking</a>
            </li>
      
        </ul>
        </nav>
        </section>
    </div> 
</div>
<br>
<br>
<br>
<br>
<br>
<br>
<br>


<body>
  <?php
  $name =isset($_GET["name"]) ? $_GET["name"] : '';
  $date =isset($_GET["date"]) ? $_GET["date"] : '';
  $duration =isset($_GET["duration"]) ? $_GET["duration"] : '';
  $time =isset($_GET["time"]) ? $_GET["time"] : '';
  $mobil =isset($_GET["mobil"]) ? $_GET["mobil"] : '';
  $phone =isset($_GET["phone"]) ? $_GET["phone"] : '';
  $addservice = isset($_POST['service'])? $_POST['service'] : '';

  $count=0;


  ?>

  <div class="container">
    <table class="table">
      <thead>
        <tr>
          <th scope="col">Booking Number</th>
          <th scope="col">Name</th>
          <th scope="col">Check in</th>
          <th scope="col">Checkout</th>
          <th scope="col">Car Type</th>
          <th scope="col">Phone Number</th>
          <th scope="col">Add Service</th>
          <th scope="col">Total Price</th>
        </tr>
    </thead>
    <tbody>
      <tr>
        <th><?php echo rand();?></td>
        <td><?php echo $name ?></td>
        <td><?php echo date("d-m-y", strtotime(" ",strtotime($date)))?><br><?php echo $time ?> </td>
        <td><?php echo date("d-m-y", strtotime("+$duration day", strtotime($date))) ?><br><?php echo $time ?></td>
        <td><?php echo $mobil?></td>
        <td><?php echo $phone ?></td>
        <td><?php 
         
                    if ($addservice) {
                        $addservice = $_POST["service"];
                        foreach ($addservice as $service){
                            echo "<li> $service</li>";
                            if($service == "Health"){
                                $count += 50000;
                            }
                            elseif($service == "Driver"){
                                $count += 100000;
                            }
                            elseif($service == "Fuel"){
                                $count += 250000;
                            }
                        }
                    }else{
                        echo "No Service Added";
                    }
                
                ?>
          </td>

          <td>
            <?php 
            if ($mobil == "Mercedes Benz 2021"){
              $Mercedes = 1200000;
              echo ($Mercedes*$duration)+$count;
            }
            elseif ($mobil == "BMW SERI 3"){
              $BMW = 1000000;
              echo ($BMW*$duration)+$count;
            }
            elseif ($mobil == "Alphard 2022"){
              $alphard = 800000;
              echo ($alphard*$duration)+$count;
            }
            ?>
          </td>
        </tr>
          </tbody>
          </table>
          </div>
    <!--footer-->
    <footer class="card-footer text-center bg-light">
        Created by: NAHID_1202200049    
    </footer> 