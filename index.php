<!DOCTYPE html>
<html lang="en">
<head>
  <title>Sunglasses</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
  <link rel="stylesheet" href="bootstrap/css/bootstrap-3.4.1.min.css">
  <script src="js/jquery-3.4.1.min.js"></script>
  <script src="bootstrap/js/bootstrap-3.4.1.min.js"></script>
  <link rel="stylesheet" href="page.css">

<script>
var id;
$(document).ready(function(){

  $("#slider-right-control").click(function(){

      if (id === undefined || id === "product1") {
        id = "product2";
      }
      else if (id === "product2") {
        id = "product3";
      }
      else if (id === "product3") {
        id = "product4";
      }
      else if (id === "product4") {
        id = "product5";
      }
      else if (id === "product5") {
        id = "product6";
      }
      else if (id === "product6") {
        id = "product7";
      }
      else if (id === "product7") {
        id = "product8";
      }
      else if (id === "product8") {
        id = "product9";
      }
      else if (id === "product9") {
        id = "product10";
      }
      else if (id === "product10") {
        id = "product11";
      }
      else if (id === "product11") {
        id = "product12";
      }
      else {
        id = "product1";
      }

      var leftPos = document.getElementById(id).offsetLeft;

      $('#scroll-container').stop().animate({
          scrollLeft: leftPos-10
      }, 500);

  });

  $("#slider-left-control").click(function(){

      if (id === undefined || id === "product1") {
        id = "product12";
      }
      else if (id === "product2") {
        id = "product1";
      }
      else if (id === "product3") {
        id = "product2";
      }
      else if (id === "product4") {
        id = "product3";
      }
      else if (id === "product5") {
        id = "product4";
      }
      else if (id === "product6") {
        id = "product5";
      }
      else if (id === "product7") {
        id = "product6";
      }
      else if (id === "product8") {
        id = "product7";
      }
      else if (id === "product9") {
        id = "product8";
      }
      else if (id === "product10") {
        id = "product9";
      }
      else if (id === "product11") {
        id = "product10";
      }
      else {
        id = "product11";
      }

      var leftPos = document.getElementById(id).offsetLeft;

      $('#scroll-container').stop().animate({
          scrollLeft: leftPos
      }, 500);

  });

});
</script>
</head>
<body>

<!-- navigation bar -->
<nav class="navbar">
  <div class="container-fluid">
    <ul class="nav navbar-nav">
      <li class="hidden-xs"><a href="#">SALES: <b>Up to 50% OFF</b> on selected items</a></li>
      <li class="hidden-lg hidden-md hidden-sm"><a href="#">SALES: <b>Up to 50% OFF</b></a></li>
    </ul>
  </div>
</nav>

<!-- top image and text -->
<div id="top">
  <div id="top-text">
    <h1>SALES</h1>
    <h6>Up to 50% OFF</h6>
  </div>
  <div id="top-image"></div>
</div>

<div style="margin:0 5% 0 5.7%" class="container-fluid">
  <div style="position: relative; width: 100%; height: 30px;">
    <h4 style="position: absolute; top: 20px; left: -15px;"><b>COLLECTIONS</b></h4>
    <hr style="position: absolute; top: 40px; left: -15px; width: 20px; border: 4px solid #d9d9d9;" />
  </div>
  <div id="see-collection-container">
    <h5 id="see-collection"><a><b>SEE COLLECTION</b></a></h5>
    <hr id="see-collection-line" />
  </div>
</div>

<div id="slider" class="container-fluid">
  <div class="row">
    <div id="slider-left-control" class="col-sm-1 col-xs-2 text-center">
      <div>
        <span class="glyphicon glyphicon-menu-left"></span>
      </div>
    </div>
    <div id="scroll-container" class="col-sm-10 col-xs-8 scroll-speed">
      <div style="width: 5000px;">
        <!-- product 1 -->
        <div id="product1" class="product-container text-center">
          <div class="sale-circle-tag">-15%</div>
          <img src="images/image1.jpg" alt="Image 1">
          <h6 class="hidden-sm hidden-xs">CARBON BLACK &#8231; CHROME WARWICK</h6>
          <h6 class="hidden-lg hidden-md">CARBON BLACK &#8231;<br />CHROME WARWICK</h6>
          <p><del>$40</del>&nbsp;&nbsp;&nbsp;<b>$34</b></p>
        </div>
        <!-- product 2 -->
        <div id="product2" class="product-container text-center">
          <img src="images/image2.jpg" alt="Image 2">
          <span class="sale-circle-tag">-50%</span>
          <h6 class="hidden-sm hidden-xs">GOLD &#8231; YELLOW HILLS</h6>
          <h6 class="hidden-lg hidden-md">GOLD &#8231;<br />YELLOW HILLS</h6>
          <p><del>$40</del>&nbsp;&nbsp;&nbsp;<b>$20</b></p>
        </div>
        <!-- product 3 -->
        <div id="product3" class="product-container text-center">
          <img src="images/image3.jpg" alt="Image 3">
          <span class="sale-circle-tag">-15%</span>
          <h6 class="hidden-sm hidden-xs">BLACK &#8231; DARK LAX</h6>
          <h6 class="hidden-lg hidden-md">BLACK &#8231;<br />DARK LAX</h6>
          <p><del>$40</del>&nbsp;&nbsp;&nbsp;<b>$34</b></p>
        </div>
        <!-- product 4 -->
        <div id="product4" class="product-container text-center">
          <img src="images/image4.jpg" alt="Image 4">
          <span class="sale-circle-tag">-10%</span>
          <h6 class="hidden-sm hidden-xs">AIR &#8231; SKY ONE</h6>
          <h6 class="hidden-lg hidden-md">AIR &#8231;<br />SKY ONE</h6>
          <p><del>$25</del>&nbsp;&nbsp;&nbsp;<b>$22<sup>.50</sup></b></p>
        </div>
        <!-- product 5 -->
        <div id="product5" class="product-container text-center">
          <img src="images/image5.jpg" alt="Image 5">
          <span class="sale-circle-tag">-15%</span>
          <h6 class="hidden-sm hidden-xs">CARBON PINK &#8231; CHROME CURVED</h6>
          <h6 class="hidden-lg hidden-md">CARBON PINK &#8231;<br />CHROME CURVED</h6>
          <p><del>$40</del>&nbsp;&nbsp;&nbsp;<b>$34</b></p>
        </div>
        <!-- product 6 -->
        <div id="product6" class="product-container text-center">
          <img src="images/image6.jpg" alt="Image 6">
          <span class="sale-circle-tag">-25%</span>
          <h6 class="hidden-sm hidden-xs">CARBON PINK &#8231; CHROME CIRCULAR</h6>
          <h6 class="hidden-lg hidden-md">CARBON PINK &#8231;<br />CHROME CIRCULAR</h6>
          <p><del>$40</del>&nbsp;&nbsp;&nbsp;<b>$30</b></p>
        </div>
        <!-- product 7 -->
        <div id="product7" class="product-container text-center">
          <img src="images/image7.jpg" alt="Image 7">
          <span class="sale-circle-tag">-15%</span>
          <h6 class="hidden-sm hidden-xs">BROWN &#8231; DARK LAX</h6>
          <h6 class="hidden-lg hidden-md">BROWN &#8231;<br />DARK LAX</h6>
          <p><del>$40</del>&nbsp;&nbsp;&nbsp;<b>$34</b></p>
        </div>
        <!-- product 8 -->
        <div id="product8" class="product-container text-center">
          <img src="images/image8.jpg" alt="Image 8">
          <span class="sale-circle-tag">-50%</span>
          <h6 class="hidden-sm hidden-xs">SPOTTED &#8231; RED SKY</h6>
          <h6 class="hidden-lg hidden-md">SPOTTED &#8231;<br />RED SKY</h6>
          <p><del>$25</del>&nbsp;&nbsp;&nbsp;<b>$12<sup>.50</sup></b></p>
        </div>
        <!-- product 9 -->
        <div id="product9" class="product-container text-center">
          <img src="images/image9.jpg" alt="Image 9">
          <span class="sale-circle-tag">-30%</span>
          <h6 class="hidden-sm hidden-xs">CARBON BLACK &#8231; DARK LENS</h6>
          <h6 class="hidden-lg hidden-md">CARBON BLACK &#8231;<br />DARK LENS</h6>
          <p><del>$40</del>&nbsp;&nbsp;&nbsp;<b>$28</b></p>
        </div>
        <!-- product 10 -->
        <div id="product10" class="product-container text-center">
          <img src="images/image10.jpg" alt="Image 10">
          <span class="sale-circle-tag">-15%</span>
          <h6 class="hidden-sm hidden-xs">BLACK GOLD &#8231; HILLS</h6>
          <h6 class="hidden-lg hidden-md">BLACK GOLD &#8231;<br />HILLS</h6>
          <p><del>$40</del>&nbsp;&nbsp;&nbsp;<b>$34</b></p>
        </div>
        <!-- product 11 -->
        <div id="product11" class="product-container text-center">
          <img src="images/image11.jpg" alt="Image 11">
          <span class="sale-circle-tag">-10%</span>
          <h6 class="hidden-sm hidden-xs">GOLD LINING &#8231; DARK LAX</h6>
          <h6 class="hidden-lg hidden-md">GOLD LINING &#8231;<br />DARK LAX</h6>
          <p><del>$40</del>&nbsp;&nbsp;&nbsp;<b>$36</b></p>
        </div>
        <!-- product 12 -->
        <div id="product12" class="product-container text-center">
          <img src="images/image12.jpg" alt="Image 12">
          <span class="sale-circle-tag">-20%</span>
          <h6 class="hidden-sm hidden-xs">PURPLE AIR &#8231; SKY TWO</h6>
          <h6 class="hidden-lg hidden-md">PURPLE AIR &#8231;<br />SKY TWO</h6>
          <p><del>$25</del>&nbsp;&nbsp;&nbsp;<b>$20</b></p>
        </div>
      </div>
    </div>
    <div id="slider-right-control" class="col-sm-1 col-xs-2 text-center">
      <div>
        <span class="glyphicon glyphicon-menu-right"></span>
      </div>
    </div>
  </div>
</div>

<!-- BEGIN PHP CODE SECTION -->
<?php
// define variables and set to empty values
$nameErr = $emailErr = $phoneErr = "";
$name = $email = $phone = $comment = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["name"])) {
    $nameErr = "Name is required";
  } else {
    $name = test_input($_POST["name"]);
    // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z ]*$/",$name)) {
      $nameErr = "Only letters and white space allowed";
    }
  }

  if (empty($_POST["email"])) {
    $emailErr = "Email is required";
  } else {
    $email = test_input($_POST["email"]);
    // check if e-mail address is well-formed
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $emailErr = "Invalid email format";
    }
  }

  if (empty($_POST["phone"])) {
    $phone = "";
  } else {
    $phone = test_input($_POST["phone"]);
    // check if phone number is valid (this regular expression also allows dashes or parenthesis)
    if (!preg_match('/[\d\s-()]{10,}$/',$phone)) {
      $phoneErr = "Invalid Phone Number";
    }
  }

  if (empty($_POST["comment"])) {
    $comment = "";
  } else {
    $comment = test_input($_POST["comment"]);
  }

  /* BEGIN SEND EMAIL */
  if (preg_match("/^[a-zA-Z ]*$/",$name) && filter_var($email, FILTER_VALIDATE_EMAIL) && preg_match('/[\d\s-()]{10,}$/',$phone)) {

    echo '<script>
    $(document).ready(function(){
      $("#successModal").modal();
    })
    </script>';

    $to = "andres@nuethic.com";

    $subject = "Email sent from website created by Dallin Stephens";

    $message = "
    YOUR INPUT
    Name: $name
    Email: $email
    Phone: $phone
    Comment: $comment
    ";

    // Always set content-type when sending HTML email
    $headers = "MIME-Version: 1.0" . "\r\n";
    $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

    // More headers
    $headers = "From: $email" . "\r\n" . "CC: dallinstephens1@gmail.com";

    mail($to,$subject,$message,$headers);

  }

  if (!preg_match("/^[a-zA-Z ]*$/",$name) || !filter_var($email, FILTER_VALIDATE_EMAIL) || !preg_match('/[\d\s-()]{10,}$/',$phone)) {

    echo '<script>
    //$(document).ready(function(){
      //$("#failureModal").modal();
    //})
    </script>';

  }
  /* END SEND EMAIL */

}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>
<!-- END PHP CODE SECTION -->

<div class="container" style="margin-top:10px">
  <div class="row">
    <div id="contact-us" class="col-md-6">
      <h3 class="text-center"><b>Contact Us</b></h3>
      <p>Send us a message to let us know how we can help. We typically respond within 24 hours.<br /><br />You can also give us a call at <a><u>1-801-994-6987</u></a><br /><br />Or send us an email<br /><br />at <a><u>contact@nuethic.com</u></a>.</p>
    </div>
    <div id="form-container" class="col-md-6">

      <p><span class="error" style="position: relative; top: 40px;">* required field</span></p>

      <form id="form" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
        <div class="form-group">
          <label for="name">Name</label><span class="error"> * <?php echo $nameErr;?></span>
          <input type="text" name="name" class="form-control" placeholder="Name" value="<?php echo $name;?>" />
        </div>
        <div class="form-group">
          <label for="email">Email</label><span class="error"> * <?php echo $emailErr;?></span>
          <input type="text" name="email" class="form-control" placeholder="Email" value="<?php echo $email;?>" />
        </div>
        <div class="form-group">
          <label for="phone">Phone</label><span class="error"> * <?php echo $phoneErr;?></span>
          <input type="text" name="phone" class="form-control" placeholder="Phone" value="<?php echo $phone;?>" />
        </div>
        <div class="form-group">
          <label for="comment">What can we do for you?</label>
          <textarea name="comment" rows="5" cols="40" class="form-control" placeholder="Tell us more..."><?php echo $comment;?></textarea>
        </div>

        <input id="submit" type="submit" name="submit" value="SUBMIT" class="btn btn-block" />
      </form>

    </div>
  </div>
</div>

<!-- Success Modal: modal appears when message has been successfully sent to email. -->
<div class="container">
  <div class="modal fade" id="successModal" role="dialog">
    <div class="modal-dialog modal-sm">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Success!</h4>
        </div>
        <div class="modal-body">
          <p>Your message has been sent.</p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- Failure Modal: modal appears when message has been unsuccessfully sent to email. -->
<div class="container">
  <div class="modal fade" id="failureModal" role="dialog">
    <div class="modal-dialog modal-sm">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Failure</h4>
        </div>
        <div class="modal-body">
          <p>Sorry, your message has not been sent. Please try again by making the necessary corrections as indicated on the form.</p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>
</div>

</body>
</html>
