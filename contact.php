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
    <section class="intro-single">
    <div class="container">
      <div class="row">
        <div class="col-md-12 col-lg-8">
          <div class="title-single-box">
            <h1 class="title-single">Contact US</h1>
            <span class="color-text-a">Reach us out for the best experience in property dealings. We thrive for customer satisfaction. Transparency is the key to our superb dealings.</span>
          </div>
        </div>
        <div class="col-md-12 col-lg-4">
          <nav aria-label="breadcrumb" class="breadcrumb-box d-flex justify-content-lg-end">
            <ol class="breadcrumb">
              <li class="breadcrumb-item">
                <a href="index.html">Home</a>
              </li>
              <li class="breadcrumb-item active" aria-current="page">
                Contact
              </li>
            </ol>
          </nav>
        </div>
      </div>
    </div>
  </section>
  <!--/ Intro Single End /-->
  <section class="contact">
    <div class="container">
      <div class="row">
        <div class="col-sm-12">
          <div class="contact-map box">
            <div id="map" class="contact-map">
              <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3022.1422937950147!2d-73.98731968482413!3d40.75889497932681!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c25855c6480299%3A0x55194ec5a1ae072e!2sTimes+Square!5e0!3m2!1ses-419!2sve!4v1510329142834"
                width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
            </div>
          </div>
        </div>
        <div class="col-sm-12 section-t8">
          <div class="row">
            <div class="col-md-7">
              <form class="form-a" action="contact.php" method="POST" role="form">
                <!-- <div id="sendmessage">Your message has been sent. Thank you!</div>
                <div id="errormessage"></div> -->
                <div class="row">
                  <div class="col-md-6 mb-3">
                    <div class="form-group">
                      <input type="text" name="Name" class="form-control form-control-lg form-control-a" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars">
                      <div class="validation"></div>
                    </div>
                  </div>
                  <div class="col-md-6 mb-3">
                    <div class="form-group">
                      <input name="Email" type="Email" class="form-control form-control-lg form-control-a" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email">
                      <div class="validation"></div>
                    </div>
                  </div>
                  <!-- <div class="col-md-12 mb-3">
                    <div class="form-group">
                      <input type="url" name="subject" class="form-control form-control-lg form-control-a" placeholder="Subject" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject">
                      <div class="validation"></div>
                    </div>
                  </div> -->
                  <div class="col-md-12 mb-3">
                    <div class="form-group">
                    <input type="tel" class="form-control form-control-lg form-control-a" id="Phoneno"
                      placeholder="Phoneno"  name="PhoneNo" required autocomplete="off" class="form-control form-control-lg form-control-a" placeholder="Subject" data-rule-mobileUK="true" data-msg="Please enter at least 8 chars of subject">
                    <div class="validation"> </div>  
                    </div>
                  </div>
                  <div class="col-md-12 mb-3">
                    <div class="form-group">
                      <textarea name="Message" class="form-control" cols="45" rows="8" data-rule="required" data-msg="Please write something for us" placeholder="Message"></textarea>
                      <div class="validation"></div>
                    </div>
                  </div>
                  <div class="col-md-12">
                    <button type="submit" class="btn btn-a" name="Submit">Send Message</button>
                  </div>
                </div>
              </form>
            </div>
            <div class="col-md-5 section-md-t3">
              <div class="icon-box section-b2">
                <div class="icon-box-icon">
                  <span class="ion-ios-paper-plane"></span>
                </div>
                <div class="icon-box-content table-cell">
                  <div class="icon-box-title">
                    <h4 class="icon-title">Say Hello</h4>
                  </div>
                  <div class="icon-box-content">
                    <p class="mb-1">Email.
                      <span class="color-a">rajhansrealestate17@gmail.com</span>
                    </p>
                    <p class="mb-1">Phone.
                      <span class="color-a">+91 7977 92 8064</span>
                    </p>
                  </div>
                </div>
              </div>
              <div class="icon-box section-b2">
                <div class="icon-box-icon">
                  <span class="ion-ios-pin"></span>
                </div>
                <div class="icon-box-content table-cell">
                  <div class="icon-box-title">
                    <h4 class="icon-title">Find us in</h4>
                  </div>
                  <div class="icon-box-content">
                    <p class="mb-1">
                      Shop No-6,Paradise Sai Fortune,Plot No-5
                      <br> Sec-8B,Ulwe-410206
                    </p>
                  </div>
                </div>
              </div>
              <div class="icon-box">
                <div class="icon-box-icon">
                  <span class="ion-ios-redo"></span>
                </div>
                <div class="icon-box-content table-cell">
                  <div class="icon-box-title">
                    <h4 class="icon-title">Social networks</h4>
                  </div>
                  <div class="icon-box-content">
                    <div class="socials-footer">
                      <ul class="list-inline">
                        <li class="list-inline-item">
                          <a href="https://www.facebook.com/rajhansrealestate/" class="link-one">
                            <i class="fa fa-facebook" aria-hidden="true"></i>
                          </a>
                        </li>
                        <li class="list-inline-item">
                          <a href="https://twitter.com/rajhansreal" class="link-one">
                            <i class="fa fa-twitter" aria-hidden="true"></i>
                          </a>
                        </li>
                        <li class="list-inline-item">
                          <a href="https://www.instagram.com/rajhans_real_estate/" class="link-one">
                            <i class="fa fa-instagram" aria-hidden="true"></i>
                          </a>
                        </li>
                        <li class="list-inline-item">
                          <a href="https://www.youtube.com/channel/UCbsjSyczjk761fVgdqhZMDA" class="link-one">
                            <i class="fa fa-youtube" aria-hidden="true"></i>
                          </a>
                        </li>
                        <li class="list-inline-item">
                          <a href="https://www.linkedin.com/company/rajhansrealestate" class="link-one">
                            <i class="fa fa-linkedin" aria-hidden="true"></i>
                          </a>
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
 <?php
  if (isset($_POST["Submit"])) {
    $Name = $_POST["Name"];
    $PhoneNo = $_POST["PhoneNo"];
    $Email = $_POST["Email"];
    $Message = $_POST["Message"];

    $query = "Insert into contactus
           (Name,Mobileno,Email,Message)
           values
           ('$Name','$PhoneNo','$Email','$Message')
    ";

    $result = mysqli_query($conn, $query);
    if (mysqli_affected_rows($conn) > 0) {
        echo "<script type='text/javascript'> alert(' Your Data Has been Recorded Successfully and You will Shortly Contacted');</script>";
    } else {
        echo "<script type='text/javascript'> alert(' Data Inserted not  Succesfully');</script>";

    }
    //----------------- Mailing(guru99.com/php-mail.html) to check whether such email exist----------------
    // Setting in the php.ini + Ctrl+F(mail function)

    $to = 'asingh1248@gmail.com';
    $Subject = 'Customer ';
    //Message From above
    $headers = "From:,$Email";

    // echo "<script type='text/javascript'> alert(' Mail Send Succesfully');</script>";
    // mail($to, $Subject, $Message, $headers); Check in wherein you host your site whether it has smtp server like local server to support it

} 
?>
  <!--/ Property Single End /-->
 <?php include_once 'footer1.php';?>

</body>
</html>