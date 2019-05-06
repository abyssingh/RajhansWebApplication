<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
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
            <h1 class="title-single">Our Lastest Properties</h1>
            <span class="color-text-a">Residential/Commercial Properties</span>
          </div>
        </div>
        <div class="col-md-12 col-lg-4">
          <nav aria-label="breadcrumb" class="breadcrumb-box d-flex justify-content-lg-end">
            <ol class="breadcrumb">
              <li class="breadcrumb-item">
                <a href="index.php">Home</a>
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
// $countquery = "select count(*) from ResidentialProperty";
// $result = mysqli_query($conn, $countquery);
// $numrow = mysqli_num_rows($result);
// echo "<script type='text/javascript'> alert($numrow); </script>";
// if (mysqli_num_rows($result) >0) {

$query1 = "select  *  from residentialproperty ORDER BY PropertyId DESC LIMIT 3";
$result1 = mysqli_query($conn, $query1);

if (mysqli_num_rows($result1) > 0) {
    while ($row = mysqli_fetch_assoc($result1)) {
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
    <?php

    }

}
// } else {
//     echo "<script type='text/javascript'> alert('Atleast 4 entries in the DataBase for ResidentialProperty'); </script>";
// }

// *********************************************Commercial Top Display******
$query2 = "select * from commercialproperty ORDER BY Commercialid DESC LIMIT 3";
$result2 = mysqli_query($conn, $query2);
if (mysqli_num_rows($result2) > 0) {
    while ($row = mysqli_fetch_assoc($result2)) {

        $Commercialid = $row["Commercialid"];
        $BuyRent = $row["BuyRent"];
        $PropertyType = $row["PropertyType"];
        $BuildingName = $row["BuildingName"];
        $Location = $row["Location"];
        $Area = $row["Area"];

        $Price = $row["Price"];
        $Description = $row["Description"];

        $image = 'img/' . $row["image"];
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
                <!-- Ctrl+Alt+4 for ;;₹-->
                <div class="card-body-a">
                  <div class="price-box d-flex">
                    <span class="price-a">₹<?php echo $Price; ?></span> 
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
                  <span><?php echo $Area; ?>ft
                    <sup>2</sup>
                  </span>
                </li>
                <li>
                  <h4 class="card-info-title">PropertyType</h4>
                  <span><?php echo $PropertyType; ?></span>
                </li>
                <li>
                  <h4 class="card-info-title">BuyRent</h4>
                  <span><?php echo $BuyRent?></span>
                </li>
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

include_once 'footer1.php';
?>