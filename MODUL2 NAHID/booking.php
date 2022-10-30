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

 <!--form booking mobil-->
<body> 
<br>
<br>
<br>

<?php 
  $mobil = isset($_POST['mobil']) ? $_POST['mobil'] : " ";
?>

<h1 class="text-center">Rent Your Car now!</h1>

<div class="container">
          <div class="card mt-3">
            <div class="row">

                <div class="col-lg-6 d-flex justify-content-center align-items-center">
                  <div>
                    <img src="
                          <?php
                            if($mobil == "Mercedes Benz 2021"){
                              echo "mcben.jpg";
                            }
                            else if ($mobil == "BMW SERI 3"){
                              echo "bmw.jpg";
                            }
                            else if ($mobil == "ALPHARD 2022"){
                              echo "alphard.jpg";
                            }
                          ?>
                          
                      " class="img-fluid rounded">
                  </div>
                </div>
  


    <form action="Mybooking.php" method="GET">

    <div class="formulir">    
    <div class="form">
       <div class="inputan">
          <label>Name</label> 
          <input type="text" class="input" id="name" name="name"readonly value="NAHID_1202200049" >
       </div>  
        <div class="inputan">
          <label>Book Date</label>
          <input type="date" class="input" id="date" name="date" placeholder="Input your book date here">
       </div>  
       <div class="inputan">
          <label>Start Time</label>
          <input type="time" class="input" id="time" name="time" placeholder="Input your book time here">
       </div>  
       <div class="inputan">
          <label>Duration</label>
          <input type="number" class="input" id="duration" name="duration" placeholder="Input your book duration here">
       </div>  
        <div class="inputan">
          <label>Type</label>
          <div class="custom_select">
          <select name="mobil" class="form-select" aria-label="Default select example">
              <option value="">Select</option>
              <option <?php if($mobil == "BMW SERI 3"){echo "selected";}?> value="BMW SERI 3">BMW SERI 3</option>
              <option <?php if($mobil == "Mercedes Benz 2021"){echo "selected";}?> value="Mercedes Benz 2021">Mercedes Benz 2021</option>
              <option <?php if($mobil == "ALPHARD 2022"){echo "selected";}?> value="ALPHARD 2022">ALPHARD 2022</option>
            </select>
          </div>
       </div> 
       <div class="inputan">
          <label>Phone Number</label>
          <input type="number" class="input" id="phone" name="phone" placeholder="Input your phone number here">
      </div>
      <label>Add Service</label>
      <div class="inputan">
           <label class="form-check-label">Health Protocol / Rp.50.000</label>
           <input type="checkbox" class="input"name="addservice"value="Health"  id="Health" >
       </div> 
       <div class="inputan terms">
           <label class="form-check-label">Driver / Rp.100.000</label>
           <input type="checkbox" class="input"name="addservice"value="Driver"  id="Driver" >

       </div> 
       <div class="inputan terms">
           <label class="form-check-label">Fuel Filled /Rp. 250.000</label>
           <input type="checkbox" class="input"name="addservice"value="Fuel"  id="Fuel" >
       </div> 
      <div class="inputan">
        <input type="submit" value="Register" class="btn">
      </div>
      </fieldset>
    </div>
</div>
            


<!--footer-->
<footer class="card-footer text-center bg-light">
    Created by: NAHID_1202200049    
</footer> 