<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>EstateAgency Bootstrap Template</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">
  <script src="SearchProperty.js"> </script>

  <!-- Favicons -->
  <!-- <link href="img/favicon.png" rel="icon"> -->
  <link href="img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">

  <!-- Bootstrap CSS File -->
  <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Libraries CSS Files -->
  <link href="lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link href="lib/animate/animate.min.css" rel="stylesheet">
  <link href="lib/ionicons/css/ionicons.min.css" rel="stylesheet">
  <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

  <!-- Main Stylesheet File -->
  <link href="css/style.css" rel="stylesheet">

  <!-- =======================================================
    Theme Name: EstateAgency
    Theme URL: https://bootstrapmade.com/real-estate-agency-bootstrap-template/
    Author: BootstrapMade.com
    License: https://bootstrapmade.com/license/
  ======================================================= -->
</head>
<body>
<ul>

<div class="click-closed"></div>
  <!--/ Form Search Star /-->
  <div class="box-collapse">
    <div class="title-box-d">
      <h3 class="title-d">Search Property</h3>
    </div>
    <span class="close-box-collapse right-boxed ion-ios-close"></span>
    <div class="box-collapse-wrap form">
      <form class="form-a" method="GET" action="SearchProperty.php">
        <div class="row">
          <div class="col-md-12 mb-2">
            <div class="form-group">
              <!-- <label for="Type">Location</label>
              <input type="text" class="form-control form-control-lg form-control-a" placeholder="Location"> -->
            </div>
          </div>

          <div class="col-md-6 mb-2">
            <div class="form-group">
              <label for="Ra">Commercial/Residential</label><br>
               <label class="radio-inline">
                <input type="radio" name="Commercial_Residential" id="Radios1" value="Residential" onclick="funct()" required>
                  Residential
                </label>

                   <label class="radio-inline">
                    <input type="radio" name="Commercial_Residential" id="Radios2" value="Commercial" onclick="funct()">
                     Commercial
                </label>
                </div>
            </div>



          <div class="col-md-6 mb-2">
            <div class="form-group">
              <label for="Type">Buy/Rent</label>
              <select class="form-control form-control-lg form-control-a" id="BuyRent" name="BuyRent"  onchange="jsFunction(this.value);" required>
                <option value="Buy">Buy</option>
                <option value="Rent">Rent</option>
                <!-- <option>For Sale</option> -->
                <!-- <option></option> -->
              </select>
            </div>
          </div>
          <div class="col-md-6 mb-2">
            <div class="form-group">
              <label for="city">Place</label>
              <select class="form-control form-control-lg form-control-a"  id="city" name="Place" required >
                <option>Ulwe</option>
                <option>Dronagiri</option>
                <option>Nerul</option>
              </select>
            </div>
          </div>

          <div class="col-md-6 mb-2" id="PropertyTypeCommercial" style="display:none;">
            <div class="form-group">
              <label for="garages">Property Type</label>
              <select class="form-control form-control-lg form-control-a" id="PropertyTypeC" name="PropertyTypeC" required>
                <option>Shop</option>
                <option>Office</option>
              </select>
            </div>
          </div>

          <div class="col-md-6 mb-2" id="PropertyTypeResidential" style="display:none;" >
            <div class="form-group">
              <label for="garages">Property Type</label>
              <select class="form-control form-control-lg form-control-a" id="PropertyTypeR" name="PropertyTypeR" required>
                <option>Flat</option>
            </select>
            </div>
          </div>
          <div class="col-md-6 mb-2" id="FlatType" style="display:none;">
            <div class="form-group">
              <label for="bedrooms">FlatType</label>
              <select class="form-control form-control-lg form-control-a" id="FlatType" name="FlatType" required>
                <option>1RK</option>
                <option>1BHK</option>
                <option>2BHK</option>
                <option>3BHK</option>
              </select>
            </div>
          </div>

          <div class="col-md-6 mb-2" id="PR1">
            <div class="form-group">
              <label for="bathrooms">Price Range</label>
              <select class="form-control form-control-lg form-control-a" id="PriceRange" name="PriceRange" required>
                <option>20Lacs-30Lacs</option>
                <option>30Lacs-50Lacs</option>
                <option>50Lacs-80Lacs</option>
                <option>80Lacs-99Lacs</option>
              </select>
            </div>
          </div>

            <div class="col-md-6 mb-2" id="PR2" style="display:none;">
            <div class="form-group">
              <label for="bathrooms">Price Range</label>
              <select class="form-control form-control-lg form-control-a" id="PriceRange2" name="PriceRange2" required>
                <option>05K-10K</option>
                <option>10K-15K</option>
                <option>15K-20K</option>
                <option>20K-40K</option>
              </select>
            </div>
          </div>
          <!-- <div class="col-md-6 mb-2">
            <div class="form-group">
              <label for="price">Max Price</label>
              <select class="form-control form-control-lg form-control-a" id="price">
                <option>30Lacs</option>
                <option></option>
                <option>100,000</option>
                <option>150,000</option>
                <option>200,000</option>
              </select>
            </div>
          </div> -->
          <div class="col-md-12">
            <button type="submit" class="btn btn-b" name="Submit">Search Property</button>
          </div>
        </div>
      </form>
    </div>
  </div>
  <!--/ Form Search End /-->


  <!--/ Nav Star /-->
  <nav class="navbar navbar-default navbar-trans navbar-expand-lg fixed-top">
    <div class="container">
      <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarDefault"
        aria-controls="navbarDefault" aria-expanded="false" aria-label="Toggle navigation">
        <span></span>
        <span></span>
        <span></span>
      </button>
      <a class="navbar-brand text-brand" href="index.php">Rajhans<span class="color-b">Agency</span></a>
      <button type="button" class="btn btn-link nav-search navbar-toggle-box-collapse d-md-none" data-toggle="collapse"
        data-target="#navbarTogglerDemo01" aria-expanded="false">
        <span class="fa fa-search" aria-hidden="true"></span>
      </button>
      <div class="navbar-collapse collapse justify-content-center" id="navbarDefault">
      
        

        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link active" href="index.php">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="about.php">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="property-grid.php">Property</a>
          </li>
           <li class="nav-item">
            <a class="nav-link" href="blog-grid.php">Blog</a>
          </li>
          <!-- <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
              aria-haspopup="true" aria-expanded="false">
              Pages
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="property-single.html">Property Single</a>
              <a class="dropdown-item" href="blog-single.html">Blog Single</a>
              <a class="dropdown-item" href="agents-grid.html">Agents Grid</a>
              <a class="dropdown-item" href="agent-single.html">Agent Single</a>
            </div>-->
          </li>
          <li class="nav-item">
            <a class="nav-link" href="contact.php">Contact</a>
          </li>

          <!-- <li class="nav-item">
            <a class="nav-link" href="#">Search>
          </li>
        </ul>  -->
      </div>
      <button type="button" class="btn btn-b-n navbar-toggle-box-collapse d-none d-md-block" data-toggle="collapse"
        data-target="#navbarTogglerDemo01" aria-expanded="false">
        <!-- <span class="fa fa-search" aria-hidden="true"></span> -->
        <h6>SearchProperty<h6>
      </button>
    </div>
  </nav>
  <!--/ Nav End /-->
 <!-- JavaScript Libraries -->

 
 <!-- JavaScript Libraries -->
  <script src="lib/jquery/jquery.min.js"></script>
  <script src="lib/jquery/jquery-migrate.min.js"></script>
  <script src="lib/popper/popper.min.js"></script> 
  <!-- <script src="lib/bootstrap/js/bootstrap.min.js"></script>--> --> <!-- Because of Footer it was not closin navigation togge in mobile -->
  <script src="lib/easing/easing.min.js"></script>
  <script src="lib/owlcarousel/owl.carousel.min.js"></script>
  <script src="lib/scrollreveal/scrollreveal.min.js"></script> 
  <!-- Contact Form JavaScript File -->
  <script src="contactform/contactform.js"></script>

  <!-- Template Main Javascript File -->
  <script src="js/main.js"></script>
  <!-- Contact Form JavaScript File -->

  <!--/ Nav End /-->
 



</body>
</html>
