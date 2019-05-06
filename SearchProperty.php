<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<!-- onload="check()" -->
<body >
  <?php 
  include_once 'DbConfig.php';
  include_once 'header1.php';
  
  ?>
    <div class="gallery">
     <!--/ Intro Single star /-->
    <section class="intro-single">
      <div class="container">
      <div class="row">
        <div class="col-md-12 col-lg-8">
          <div class="title-single-box">
            <h1 class="title-single">Our Amazing Properties</h1>
            <span class="color-text-a">Grid Properties</span>
          </div>
        </div>
        <div class="col-md-12 col-lg-4">
          <nav aria-label="breadcrumb" class="breadcrumb-box d-flex justify-content-lg-end">
            <ol class="breadcrumb">
              <li class="breadcrumb-item">
                <a href="#">Home</a>
              </li>
              <li class="breadcrumb-item active" aria-current="page">
                Properties Grid
              </li>
            </ol>
          </nav>
        </div>
      </div>
    </div>
  </section>
  <!--/ Intro Single End /-->

  <!--/ Property Grid Star /-->
  <section class="property-grid grid">
    <div class="container">
      <div class="row">
        <div class="col-sm-12">
          <div class="grid-option">
            <form>
              <select class="custom-select">
                <option selected>All</option>
                <option value="1">New to Old</option>
                <option value="2">For Rent</option>
                <option value="3">For Sale</option>
              </select>
            </form>
          </div>
        </div>
     <?php


//handling back case to restore previous stage <-- Clear RadioButton
if (isset($_GET["Submit"])) {
    $valueRadio = $_GET["Commercial_Residential"]; //it could be Residential or Commercial
    $BuyRent = $_GET["BuyRent"];
    $Place = $_GET["Place"];
    $PriceRange = $_GET["PriceRange"]; //20Lacs-30Lacs
    $zeros = "00000";
    $first = substr($PriceRange, 0, 2) . $zeros; //2000000
    $last = substr($PriceRange, -6, -4) . $zeros; //3000000

    $PriceRange2 = $_GET["PriceRange2"]; //05K-10K
    $zeros2 = "000";
    $first2 = substr($PriceRange2, 0, 2) . $zeros2; //05000
    $last2 = substr($PriceRange2, -3  , -1) . $zeros2; //10000
    //echo $first2, " ", $last2;

    if ($valueRadio == "Residential") {
        $PropertyTypeR = $_GET["PropertyTypeR"];
        $FlatType = $_GET["FlatType"];
        //Buy,Flat,1BHK,500000
        $query = "select * from residentialproperty where BuyRent='$BuyRent' and PropertyType='$PropertyTypeR' and FlatType='$FlatType' and Price between $first and $last and Location='$Place'";  
        $result=mysqli_query($conn,$query); 
        if (mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_assoc($result)) {

                $PropertyId = $row["PropertyId"];
                $BuyRent = $row["BuyRent"];
                $PropertyType = $row["PropertyType"];
                $BuildingName = $row["BuildingName"];
                $Location = $row["Location"];
                $Area = $row["Area"];
                $FlatType = $row["FlatType"];
                $Price = $row["Price"];
                $Description = $row["Description"];
                $image = 'img/' . $row["image"];
                $image1=$row["image"]; //Query String
                echo $row["BuyRent"];
                
                ?>
                  <!-- <section class="property-grid grid"> -->
        <div class="col-md-4">
          <div class="card-box-a card-shadow">
            <div class="img-box-a">
              <img src="<?php echo $image; ?>"  alt="" class="img-a img-fluid">
            </div>
            <div class="card-overlay">
              <div class="card-overlay-a-content">
                <div class="card-header-a">
                  <h2 class="card-title-a">
                    <a href="#">204 Mount
                      <br /> <?php echo $BuildingName; ?></a>
                  </h2>
                </div>
                <div class="card-body-a">
                  <div class="price-box d-flex">
                    <span class="price-a">₹<?php echo $Price; ?></span>
                  </div>
                  <!-- Query String Passing -->
                  <a href="property-single.php?Property_Id=<?php echo $PropertyId; ?>" class="link-a">Click here to view
                  <span class="ion-ios-arrow-forward"></span>
                  </a>
                </div>
                <div class="card-footer-a">
                  <ul class="card-info d-flex justify-content-around">
                    <li>
                      <h4 class="card-info-title">Area</h4>
                      <span><?php echo $Area; ?>ft
                        <sup>2</sup>
                      </span>
                    </li>
                    <li>
                      <h4 class="card-info-title">Beds</h4>
                      <span><?php echo $FlatType; ?></span>
                    </li>
                    <!-- <li>
                      <h4 class="card-info-title">Baths</h4>
                      <span>4</span>
                    </li> -->
                    <li>
                      <h4 class="card-info-title">Location</h4>
                      <span><?php echo $Location; ?></span>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>

            <!-- </section> -->

                <?php

            }

        }
    else{
      echo "<script type='text/javascript'>alert('There is no Such Property Such.Kindly For Other Property');</script>";
    }
    }
    //**********************Commercial ************************************************************
    else if ($valueRadio == "Commercial") {
        $PropertyTypeC = $_GET["PropertyTypeC"];
        $query = "select * from commercialproperty where BuyRent='$BuyRent' and PropertyType='$PropertyTypeC' and Price between $first2 and $last2 and Location='$Place'";
        // echo $query;
        $result = mysqli_query($conn, $query);
        if (mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_assoc($result)) {

                $Commercialid = $row["Commercialid"];
                $BuyRent = $row["BuyRent"];
                $PropertyType = $row["PropertyType"];
                $BuildingName = $row["BuildingName"];
                $Location = $row["Location"];
                $Area = $row["Area"];

                $Price = $row["Price"];
                $Description = $row["Description"];
                
                $image = 'img/' . $row["image"];
                $image1=$row["image"]; //Query String
                echo $row["BuyRent"];

                ?>
                  <!-- <section class="property-grid grid"> -->
        <div class="col-md-4">
          <div class="card-box-a card-shadow">
            <div class="img-box-a">
              <img src="<?php echo $image; ?>"  alt="" class="img-a img-fluid">
            </div>
            <div class="card-overlay">
              <div class="card-overlay-a-content">
                <div class="card-header-a">
                  <h2 class="card-title-a">
                    <a href="#">204 Mount
                      <br /> <?php echo $BuildingName; ?></a>
                  </h2>
                </div>
                <div class="card-body-a">
                  <div class="price-box d-flex">
                    <span class="price-a"><?php echo $Price; ?></span>
                  </div>
                  <!-- Query String Passing -->
                  <a href="property-single.php?Property_Id=<?php echo $Commercialid; ?>" class="link-a">Click here to view
                  <!-- Session will always store the Last Value of the Commercialid hence 4 s return -->
                    <span class="ion-ios-arrow-forward"></span>
                  </a>
                </div>
                <div class="card-footer-a">
                  <ul class="card-info d-flex justify-content-around">
                    <li>
                      <h4 class="card-info-title">Area</h4>
                      <span>₹<?php echo $Area; ?>ft
                        <sup>2</sup>
                      </span>
                    </li>
                    <li>
                      <h4 class="card-info-title">PropertyType</h4>
                      <span><?php echo $PropertyTypeC; ?></span>
                    </li>
                    <!-- <li>
                      <h4 class="card-info-title">Baths</h4>
                      <span>4</span>
                    </li> -->
                    <li>
                      <h4 class="card-info-title">Location</h4>
                      <span><?php echo $Location; ?></span>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>

      <?php
}
        }
        else{
          echo "<script type='text/javascript'>alert('There is no Such Property Such.Kindly For Other Property');</script>";
        }
    }
}
include_once 'footer1.php';
?>
    </div>
</body>
</html>