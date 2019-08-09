<!DOCTYPE html>
<html lang="en">
<head>
  <title>Sunglasses</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="bootstrap/css/bootstrap-3.4.1.min.css">
  <script src="js/jquery-3.4.1.min.js"></script>
  <script src="bootstrap/js/bootstrap-3.4.1.min.js"></script>
  <link rel="stylesheet" href="css/page.css">

<script>
jQuery(function ($) {

  // BEGIN CONTROL CAPTION SLIDER WITH IMAGE SLIDER

  // large screen
  $("#image-slider-lg .left").click(function(){
    $("#caption-slider-lg").carousel("prev");
  });
  $("#image-slider-lg .right").click(function(){
    $("#caption-slider-lg").carousel("next");
  });

  // medium screen
  $("#image-slider-md .left").click(function(){
    $("#caption-slider-md").carousel("prev");
  });
  $("#image-slider-md .right").click(function(){
    $("#caption-slider-md").carousel("next");
  });

  // small screen
  $("#image-slider-sm .left").click(function(){
    $("#caption-slider-sm").carousel("prev");
  });
  $("#image-slider-sm .right").click(function(){
    $("#caption-slider-sm").carousel("next");
  });

  // extra small screen
  $("#image-slider-xs .left").click(function(){
    $("#caption-slider-xs").carousel("prev");
  });
  $("#image-slider-xs .right").click(function(){
    $("#caption-slider-xs").carousel("next");
  });

  // END CONTROL CAPTION SLIDER WITH IMAGE SLIDER

});
</script>
</head>
<body>

<!-- navigation bar -->
<nav class="navbar">
  <div class="container-fluid">
    <ul class="nav navbar-nav">
      <li><a href="#">SALES: <b>Up to 50% OFF</b> on selected items</a></li>
    </ul>
  </div>
</nav>

<!-- top image and text -->
<div id="top">
  <div id="top-text" class="visible-lg visible-md">
    <h1>SALES</h1>
    <h6>Up to 50% OFF</h6>
  </div>
  <img id="top-image" src="images/top-image.jpg" alt="sunglasses">
  <div class="visible-sm visible-xs">
    <h1>SALES</h1>
    <h6>Up to 50% OFF</h6>
  </div>
</div>

<div id="top-text-2" class="text-center visible-sm visible-xs">
  <h1>SALES</h1>
  <h6>Up to 50% OFF</h6>
</div>

<div class="slider-margins container-fluid">
  <div style="position: relative; width: 100%; height: 30px;">
    <h4 style="position: absolute; top: 20px; left: -15px;"><b>COLLECTIONS</b></h4>
    <hr style="position: absolute; top: 40px; left: -15px; width: 20px; border: 4px solid #d9d9d9;" />
  </div>
  <div style="position: relative; width: 100%; height: 50px;">
    <h5 id="see-collection" style="position: absolute; top: 0; right: -15px;"><a><b>SEE COLLECTION</b></a></h5>
    <hr style="position: absolute; top: 10px; right: -15px; width: 118px; border: 2px solid #d9d9d9;" />
  </div>

  <!-- BEGIN IMAGE SLIDER LARGE SCREEN: 4 SLIDER IMAGES -->
  <div id="image-slider-lg" class="carousel slide hidden-md hidden-sm hidden-xs" data-ride="carousel" data-interval="false">

    <div class="carousel-inner">

      <div class="item active">
        <div class="row">
          <!-- image 1 -->
          <div class="col-xs-3">
            <img src="images/image1.jpg" alt="Image 1">
            <span class="sale-circle-tag">-15%</span>
          </div>
          <!-- image 2 -->
          <div class="col-xs-3">
            <img src="images/image2.jpg" alt="Image 2">
            <span class="sale-circle-tag">-50%</span>
          </div>
          <!-- image 3 -->
          <div class="col-xs-3">
            <img src="images/image3.jpg" alt="Image 3">
            <span class="sale-circle-tag">-15%</span>
          </div>
          <!-- image 4 -->
          <div class="col-xs-3">
            <img src="images/image4.jpg" alt="Image 4">
            <span class="sale-circle-tag">-10%</span>
          </div>
        </div>
      </div>

      <div class="item">
        <div class="row">
          <!-- image 5 -->
          <div class="col-xs-3">
            <img src="images/image5.jpg" alt="Image 5">
            <span class="sale-circle-tag">-15%</span>
          </div>
          <!-- image 6 -->
          <div class="col-xs-3">
            <img src="images/image6.jpg" alt="Image 6">
            <span class="sale-circle-tag">-25%</span>
          </div>
          <!-- image 7 -->
          <div class="col-xs-3">
            <img src="images/image7.jpg" alt="Image 7">
            <span class="sale-circle-tag">-15%</span>
          </div>
          <!-- image 8 -->
          <div class="col-xs-3">
            <img src="images/image8.jpg" alt="Image 8">
            <span class="sale-circle-tag">-50%</span>
          </div>
        </div>
      </div>

      <div class="item">
        <div class="row">
          <!-- image 9 -->
          <div class="col-xs-3">
            <img src="images/image9.jpg" alt="Image 9">
            <span class="sale-circle-tag">-30%</span>
          </div>
          <!-- image 10 -->
          <div class="col-xs-3">
            <img src="images/image10.jpg" alt="Image 10">
            <span class="sale-circle-tag">-15%</span>
          </div>
          <!-- image 11 -->
          <div class="col-xs-3">
            <img src="images/image11.jpg" alt="Image 11">
            <span class="sale-circle-tag">-10%</span>
          </div>
          <!-- image 12 -->
          <div class="col-xs-3">
            <img src="images/image12.jpg" alt="Image 12">
            <span class="sale-circle-tag">-20%</span>
          </div>
        </div>
      </div>
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#image-slider-lg" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#image-slider-lg" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
  <!-- END IMAGE SLIDER LARGE SCREEN: 4 SLIDER IMAGES -->

  <!-- BEGIN IMAGE SLIDER MEDIUM SCREEN: 3 SLIDER IMAGES -->
  <div id="image-slider-md" class="carousel slide hidden-lg hidden-sm hidden-xs" data-ride="carousel" data-interval="false">

    <div class="carousel-inner">

      <div class="item active">
        <div class="row">
          <!-- image 1 -->
          <div class="col-xs-4">
            <img src="images/image1.jpg" alt="Image 1">
            <span class="sale-circle-tag">-15%</span>
          </div>
          <!-- image 2 -->
          <div class="col-xs-4">
            <img src="images/image2.jpg" alt="Image 2">
            <span class="sale-circle-tag">-50%</span>
          </div>
          <!-- image 3 -->
          <div class="col-xs-4">
            <img src="images/image3.jpg" alt="Image 3">
            <span class="sale-circle-tag">-15%</span>
          </div>
        </div>
      </div>

      <div class="item">
        <div class="row">
          <!-- image 4 -->
          <div class="col-xs-4">
            <img src="images/image4.jpg" alt="Image 4">
            <span class="sale-circle-tag">-10%</span>
          </div>
          <!-- image 5 -->
          <div class="col-xs-4">
            <img src="images/image5.jpg" alt="Image 5">
            <span class="sale-circle-tag">-15%</span>
          </div>
          <!-- image 6 -->
          <div class="col-xs-4">
            <img src="images/image6.jpg" alt="Image 6">
            <span class="sale-circle-tag">-25%</span>
          </div>
        </div>
      </div>

      <div class="item">
        <div class="row">
          <!-- image 7 -->
          <div class="col-xs-4">
            <img src="images/image7.jpg" alt="Image 7">
            <span class="sale-circle-tag">-15%</span>
          </div>
          <!-- image 8 -->
          <div class="col-xs-4">
            <img src="images/image8.jpg" alt="Image 8">
            <span class="sale-circle-tag">-50%</span>
          </div>
          <!-- image 9 -->
          <div class="col-xs-4">
            <img src="images/image9.jpg" alt="Image 9">
            <span class="sale-circle-tag">-30%</span>
          </div>
        </div>
      </div>

      <div class="item">
        <div class="row">
          <!-- image 10 -->
          <div class="col-xs-4">
            <img src="images/image10.jpg" alt="Image 10">
            <span class="sale-circle-tag">-15%</span>
          </div>
          <!-- image 11 -->
          <div class="col-xs-4">
            <img src="images/image11.jpg" alt="Image 11">
            <span class="sale-circle-tag">-10%</span>
          </div>
          <!-- image 12 -->
          <div class="col-xs-4">
            <img src="images/image12.jpg" alt="Image 12">
            <span class="sale-circle-tag">-20%</span>
          </div>
        </div>
      </div>
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#image-slider-md" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#image-slider-md" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
  <!-- END IMAGE SLIDER MEDIUM SCREEN: 3 SLIDER IMAGES -->

  <!-- BEGIN IMAGE SLIDER SMALL SCREEN: 2 SLIDER IMAGES -->
  <div id="image-slider-sm" class="carousel slide hidden-lg hidden-md hidden-xs" data-ride="carousel" data-interval="false">

    <div class="carousel-inner">

      <div class="item active">
        <div class="row">
          <!-- image 1 -->
          <div class="col-xs-6">
            <img src="images/image1.jpg" alt="Image 1">
            <span class="sale-circle-tag">-15%</span>
          </div>
          <!-- image 2 -->
          <div class="col-xs-6">
            <img src="images/image2.jpg" alt="Image 2">
            <span class="sale-circle-tag">-50%</span>
          </div>
        </div>
      </div>

      <div class="item">
        <div class="row">
          <!-- image 3 -->
          <div class="col-xs-6">
            <img src="images/image3.jpg" alt="Image 3">
            <span class="sale-circle-tag">-15%</span>
          </div>
          <!-- image 4 -->
          <div class="col-xs-6">
            <img src="images/image4.jpg" alt="Image 4">
            <span class="sale-circle-tag">-10%</span>
          </div>
        </div>
      </div>

      <div class="item">
        <div class="row">
          <!-- image 5 -->
          <div class="col-xs-6">
            <img src="images/image5.jpg" alt="Image 5">
            <span class="sale-circle-tag">-15%</span>
          </div>
          <!-- image 6 -->
          <div class="col-xs-6">
            <img src="images/image6.jpg" alt="Image 6">
            <span class="sale-circle-tag">-25%</span>
          </div>
        </div>
      </div>

      <div class="item">
        <div class="row">
          <!-- image 7 -->
          <div class="col-xs-6">
            <img src="images/image7.jpg" alt="Image 7">
            <span class="sale-circle-tag">-15%</span>
          </div>
          <!-- image 8 -->
          <div class="col-xs-6">
            <img src="images/image8.jpg" alt="Image 8">
            <span class="sale-circle-tag">-50%</span>
          </div>
        </div>
      </div>

      <div class="item">
        <div class="row">
          <!-- image 9 -->
          <div class="col-xs-6">
            <img src="images/image9.jpg" alt="Image 9">
            <span class="sale-circle-tag">-30%</span>
          </div>
          <!-- image 10 -->
          <div class="col-xs-6">
            <img src="images/image10.jpg" alt="Image 10">
            <span class="sale-circle-tag">-15%</span>
          </div>
        </div>
      </div>

      <div class="item">
        <div class="row">
          <!-- image 11 -->
          <div class="col-xs-6">
            <img src="images/image11.jpg" alt="Image 11">
            <span class="sale-circle-tag">-10%</span>
          </div>
          <!-- image 12 -->
          <div class="col-xs-6">
            <img src="images/image12.jpg" alt="Image 12">
            <span class="sale-circle-tag">-20%</span>
          </div>
        </div>
      </div>

    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#image-slider-sm" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#image-slider-sm" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
  <!-- END IMAGE SLIDER SMALL SCREEN: 2 SLIDER IMAGES -->

  <!-- BEGIN IMAGE SLIDER EXTRA SMALL SCREEN: 1 SLIDER IMAGE -->
  <div id="image-slider-xs" class="carousel slide hidden-lg hidden-md hidden-sm" data-ride="carousel" data-interval="false">

    <div class="carousel-inner">

      <div class="item active">
        <div class="row">
          <!-- image 1 -->
          <div class="col-xs-12">
            <img src="images/image1.jpg" alt="Image 1">
            <span class="sale-circle-tag">-15%</span>
          </div>
        </div>
      </div>

      <div class="item">
        <div class="row">
          <!-- image 2 -->
          <div class="col-xs-12">
            <img src="images/image2.jpg" alt="Image 2">
            <span class="sale-circle-tag">-50%</span>
          </div>
        </div>
      </div>

      <div class="item">
        <div class="row">
          <!-- image 3 -->
          <div class="col-xs-12">
            <img src="images/image3.jpg" alt="Image 3">
            <span class="sale-circle-tag">-15%</span>
          </div>
        </div>
      </div>

      <div class="item">
        <div class="row">
          <!-- image 4 -->
          <div class="col-xs-12">
            <img src="images/image4.jpg" alt="Image 4">
            <span class="sale-circle-tag">-10%</span>
          </div>
        </div>
      </div>

      <div class="item">
        <div class="row">
          <!-- image 5 -->
          <div class="col-xs-12">
            <img src="images/image5.jpg" alt="Image 5">
            <span class="sale-circle-tag">-15%</span>
          </div>
        </div>
      </div>

      <div class="item">
        <div class="row">
          <!-- image 6 -->
          <div class="col-xs-12">
            <img src="images/image6.jpg" alt="Image 6">
            <span class="sale-circle-tag">-25%</span>
          </div>
        </div>
      </div>

      <div class="item">
        <div class="row">
          <!-- image 7 -->
          <div class="col-xs-12">
            <img src="images/image7.jpg" alt="Image 7">
            <span class="sale-circle-tag">-15%</span>
          </div>
        </div>
      </div>

      <div class="item">
        <div class="row">
          <!-- image 8 -->
          <div class="col-xs-12">
            <img src="images/image8.jpg" alt="Image 8">
            <span class="sale-circle-tag">-50%</span>
          </div>
        </div>
      </div>

      <div class="item">
        <div class="row">
          <!-- image 9 -->
          <div class="col-xs-12">
            <img src="images/image9.jpg" alt="Image 9">
            <span class="sale-circle-tag">-30%</span>
          </div>
        </div>
      </div>

      <div class="item">
        <div class="row">
          <!-- image 10 -->
          <div class="col-xs-12">
            <img src="images/image10.jpg" alt="Image 10">
            <span class="sale-circle-tag">-15%</span>
          </div>
        </div>
      </div>

      <div class="item">
        <div class="row">
          <!-- image 11 -->
          <div class="col-xs-12">
            <img src="images/image11.jpg" alt="Image 11">
            <span class="sale-circle-tag">-10%</span>
          </div>
        </div>
      </div>

      <div class="item">
        <div class="row">
          <!-- image 12 -->
          <div class="col-xs-12">
            <img src="images/image12.jpg" alt="Image 12">
            <span class="sale-circle-tag">-20%</span>
          </div>
        </div>
      </div>

    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#image-slider-xs" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#image-slider-xs" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
  <!-- END IMAGE SLIDER EXTRA SMALL SCREEN: 1 SLIDER IMAGE -->

</div>

<div class="slider-margins container-fluid">

  <!-- BEGIN CAPTION SLIDER LARGE SCREEN: 4 SLIDER CAPTIONS -->
  <div id="caption-slider-lg" class="carousel slide hidden-md hidden-sm hidden-xs" data-ride="carousel" data-interval="false">

    <div class="carousel-inner">

      <div class="item active">
        <div class="row">
          <!-- caption 1 -->
          <div class="col-xs-3 text-center">
            <h6>CARBON BLACK &#8231; CHROME WARWICK</h6>
            <p><del>$40</del>&nbsp;&nbsp;&nbsp;<b>$34</b></p>
          </div>
          <!-- caption 2 -->
          <div class="col-xs-3 text-center">
            <h6>GOLD &#8231; YELLOW HILLS</h6>
            <p><del>$40</del>&nbsp;&nbsp;&nbsp;<b>$20</b></p>
          </div>
          <!-- caption 3 -->
          <div class="col-xs-3 text-center">
            <h6>BLACK &#8231; DARK LAX</h6>
            <p><del>$40</del>&nbsp;&nbsp;&nbsp;<b>$34</b></p>
          </div>
          <!-- caption 4 -->
          <div class="col-xs-3 text-center">
            <h6>AIR &#8231; SKY ONE</h6>
            <p><del>$25</del>&nbsp;&nbsp;&nbsp;<b>$22<sup>.50</sup></b></p>
          </div>
        </div>
      </div>

      <div class="item">
        <div class="row">
          <!-- caption 5 -->
          <div class="col-xs-3 text-center">
            <h6>CARBON PINK &#8231; CHROME CURVED</h6>
            <p><del>$40</del>&nbsp;&nbsp;&nbsp;<b>$34</b></p>
          </div>
          <!-- caption 6 -->
          <div class="col-xs-3 text-center">
            <h6>CARBON PINK &#8231; CHROME CIRCULAR</h6>
            <p><del>$40</del>&nbsp;&nbsp;&nbsp;<b>$30</b></p>
          </div>
          <!-- caption 7 -->
          <div class="col-xs-3 text-center">
            <h6>BROWN &#8231; DARK LAX</h6>
            <p><del>$40</del>&nbsp;&nbsp;&nbsp;<b>$34</b></p>
          </div>
          <!-- caption 8 -->
          <div class="col-xs-3 text-center">
            <h6>SPOTTED &#8231; RED SKY</h6>
            <p><del>$25</del>&nbsp;&nbsp;&nbsp;<b>$12<sup>.50</sup></b></p>
          </div>
        </div>
      </div>

      <div class="item">
        <div class="row">
          <!-- caption 9 -->
          <div class="col-xs-3 text-center">
            <h6>CARBON BLACK &#8231; DARK LENS</h6>
            <p><del>$40</del>&nbsp;&nbsp;&nbsp;<b>$28</b></p>
          </div>
          <!-- caption 10 -->
          <div class="col-xs-3 text-center">
            <h6>BLACK GOLD &#8231; HILLS</h6>
            <p><del>$40</del>&nbsp;&nbsp;&nbsp;<b>$34</b></p>
          </div>
          <!-- caption 11 -->
          <div class="col-xs-3 text-center">
            <h6>GOLD LINING &#8231; DARK LAX</h6>
            <p><del>$40</del>&nbsp;&nbsp;&nbsp;<b>$36</b></p>
          </div>
          <!-- caption 12 -->
          <div class="col-xs-3 text-center">
            <h6>PURPLE AIR &#8231; SKY TWO</h6>
            <p><del>$25</del>&nbsp;&nbsp;&nbsp;<b>$20</b></p>
          </div>
        </div>
      </div>
    </div>

  </div>
  <!-- END CAPTION SLIDER LARGE SCREEN: 4 SLIDER CAPTIONS -->

  <!-- BEGIN CAPTION SLIDER MEDIUM SCREEN: 3 SLIDER CAPTIONS -->
  <div id="caption-slider-md" class="carousel slide hidden-lg hidden-sm hidden-xs" data-ride="carousel" data-interval="false">

    <div class="carousel-inner">

      <div class="item active">
        <div class="row">
          <!-- caption 1 -->
          <div class="col-xs-4 text-center">
            <h6>CARBON BLACK &#8231; CHROME WARWICK</h6>
            <p><del>$40</del>&nbsp;&nbsp;&nbsp;<b>$34</b></p>
          </div>
          <!-- caption 2 -->
          <div class="col-xs-4 text-center">
            <h6>GOLD &#8231; YELLOW HILLS</h6>
            <p><del>$40</del>&nbsp;&nbsp;&nbsp;<b>$20</b></p>
          </div>
          <!-- caption 3 -->
          <div class="col-xs-4 text-center">
            <h6>BLACK &#8231; DARK LAX</h6>
            <p><del>$40</del>&nbsp;&nbsp;&nbsp;<b>$34</b></p>
          </div>
        </div>
      </div>

      <div class="item">
        <div class="row">
          <!-- caption 4 -->
          <div class="col-xs-4 text-center">
            <h6>AIR &#8231; SKY ONE</h6>
            <p><del>$25</del>&nbsp;&nbsp;&nbsp;<b>$22<sup>.50</sup></b></p>
          </div>
          <!-- caption 5 -->
          <div class="col-xs-4 text-center">
            <h6>CARBON PINK &#8231; CHROME CURVED</h6>
            <p><del>$40</del>&nbsp;&nbsp;&nbsp;<b>$34</b></p>
          </div>
          <!-- caption 6 -->
          <div class="col-xs-4 text-center">
            <h6>CARBON PINK &#8231; CHROME CIRCULAR</h6>
            <p><del>$40</del>&nbsp;&nbsp;&nbsp;<b>$30</b></p>
          </div>
        </div>
      </div>

      <div class="item">
        <div class="row">
          <!-- caption 7 -->
          <div class="col-xs-4 text-center">
            <h6>BROWN &#8231; DARK LAX</h6>
            <p><del>$40</del>&nbsp;&nbsp;&nbsp;<b>$34</b></p>
          </div>
          <!-- caption 8 -->
          <div class="col-xs-4 text-center">
            <h6>SPOTTED &#8231; RED SKY</h6>
            <p><del>$25</del>&nbsp;&nbsp;&nbsp;<b>$12<sup>.50</sup></b></p>
          </div>
          <!-- caption 9 -->
          <div class="col-xs-4 text-center">
            <h6>CARBON BLACK &#8231; DARK LENS</h6>
            <p><del>$40</del>&nbsp;&nbsp;&nbsp;<b>$28</b></p>
          </div>
        </div>
      </div>

      <div class="item">
        <div class="row">
          <!-- caption 10 -->
          <div class="col-xs-4 text-center">
            <h6>BLACK GOLD &#8231; HILLS</h6>
            <p><del>$40</del>&nbsp;&nbsp;&nbsp;<b>$34</b></p>
          </div>
          <!-- caption 11 -->
          <div class="col-xs-4 text-center">
            <h6>GOLD LINING &#8231; DARK LAX</h6>
            <p><del>$40</del>&nbsp;&nbsp;&nbsp;<b>$36</b></p>
          </div>
          <!-- caption 12 -->
          <div class="col-xs-4 text-center">
            <h6>PURPLE AIR &#8231; SKY TWO</h6>
            <p><del>$25</del>&nbsp;&nbsp;&nbsp;<b>$20</b></p>
          </div>
        </div>
      </div>

    </div>

  </div>
  <!-- END CAPTION SLIDER MEDIUM SCREEN: 3 SLIDER CAPTIONS -->

  <!-- BEGIN CAPTION SLIDER SMALL SCREEN: 2 SLIDER CAPTIONS -->
  <div id="caption-slider-sm" class="carousel slide hidden-lg hidden-md hidden-xs" data-ride="carousel" data-interval="false">

    <div class="carousel-inner">

      <div class="item active">
        <div class="row">
          <!-- caption 1 -->
          <div class="col-xs-6 text-center">
            <h6>CARBON BLACK &#8231; CHROME WARWICK</h6>
            <p><del>$40</del>&nbsp;&nbsp;&nbsp;<b>$34</b></p>
          </div>
          <!-- caption 2 -->
          <div class="col-xs-6 text-center">
            <h6>GOLD &#8231; YELLOW HILLS</h6>
            <p><del>$40</del>&nbsp;&nbsp;&nbsp;<b>$20</b></p>
          </div>
        </div>
      </div>

      <div class="item">
        <div class="row">
          <!-- caption 3 -->
          <div class="col-xs-6 text-center">
            <h6>BLACK &#8231; DARK LAX</h6>
            <p><del>$40</del>&nbsp;&nbsp;&nbsp;<b>$34</b></p>
          </div>
          <!-- caption 4 -->
          <div class="col-xs-6 text-center">
            <h6>AIR &#8231; SKY ONE</h6>
            <p><del>$25</del>&nbsp;&nbsp;&nbsp;<b>$22<sup>.50</sup></b></p>
          </div>
        </div>
      </div>

      <div class="item">
        <div class="row">
          <!-- caption 5 -->
          <div class="col-xs-6 text-center">
            <h6>CARBON PINK &#8231; CHROME CURVED</h6>
            <p><del>$40</del>&nbsp;&nbsp;&nbsp;<b>$34</b></p>
          </div>
          <!-- caption 6 -->
          <div class="col-xs-6 text-center">
            <h6>CARBON PINK &#8231; CHROME CIRCULAR</h6>
            <p><del>$40</del>&nbsp;&nbsp;&nbsp;<b>$30</b></p>
          </div>
        </div>
      </div>

      <div class="item">
        <div class="row">
          <!-- caption 7 -->
          <div class="col-xs-6 text-center">
            <h6>BROWN &#8231; DARK LAX</h6>
            <p><del>$40</del>&nbsp;&nbsp;&nbsp;<b>$34</b></p>
          </div>
          <!-- caption 8 -->
          <div class="col-xs-6 text-center">
            <h6>SPOTTED &#8231; RED SKY</h6>
            <p><del>$25</del>&nbsp;&nbsp;&nbsp;<b>$12<sup>.50</sup></b></p>
          </div>
        </div>
      </div>

      <div class="item">
        <div class="row">
          <!-- caption 9 -->
          <div class="col-xs-6 text-center">
            <h6>CARBON BLACK &#8231; DARK LENS</h6>
            <p><del>$40</del>&nbsp;&nbsp;&nbsp;<b>$28</b></p>
          </div>
          <!-- caption 10 -->
          <div class="col-xs-6 text-center">
            <h6>BLACK GOLD &#8231; HILLS</h6>
            <p><del>$40</del>&nbsp;&nbsp;&nbsp;<b>$34</b></p>
          </div>
        </div>
      </div>

      <div class="item">
        <div class="row">
          <!-- caption 11 -->
          <div class="col-xs-6 text-center">
            <h6>GOLD LINING &#8231; DARK LAX</h6>
            <p><del>$40</del>&nbsp;&nbsp;&nbsp;<b>$36</b></p>
          </div>
          <!-- caption 12 -->
          <div class="col-xs-6 text-center">
            <h6>PURPLE AIR &#8231; SKY TWO</h6>
            <p><del>$25</del>&nbsp;&nbsp;&nbsp;<b>$20</b></p>
          </div>
        </div>
      </div>

    </div>

  </div>
  <!-- END CAPTION SLIDER SMALL SCREEN: 2 SLIDER CAPTIONS -->

  <!-- BEGIN CAPTION SLIDER EXTRA SMALL SCREEN: 1 SLIDER CAPTION -->
  <div id="caption-slider-xs" class="carousel slide hidden-lg hidden-md hidden-sm" data-ride="carousel" data-interval="false">

    <div class="carousel-inner">

      <div class="item active">
        <div class="row">
          <!-- caption 1 -->
          <div class="col-xs-12 text-center">
            <h6>CARBON BLACK &#8231; CHROME WARWICK</h6>
            <p><del>$40</del>&nbsp;&nbsp;&nbsp;<b>$34</b></p>
          </div>
        </div>
      </div>

      <div class="item">
        <div class="row">
          <!-- caption 2 -->
          <div class="col-xs-12 text-center">
            <h6>GOLD &#8231; YELLOW HILLS</h6>
            <p><del>$40</del>&nbsp;&nbsp;&nbsp;<b>$20</b></p>
          </div>
        </div>
      </div>

      <div class="item">
        <div class="row">
          <!-- caption 3 -->
          <div class="col-xs-12 text-center">
            <h6>BLACK &#8231; DARK LAX</h6>
            <p><del>$40</del>&nbsp;&nbsp;&nbsp;<b>$34</b></p>
          </div>
        </div>
      </div>

      <div class="item">
        <div class="row">
          <!-- caption 4 -->
          <div class="col-xs-12 text-center">
            <h6>AIR &#8231; SKY ONE</h6>
            <p><del>$25</del>&nbsp;&nbsp;&nbsp;<b>$22<sup>.50</sup></b></p>
          </div>
        </div>
      </div>

      <div class="item">
        <div class="row">
          <!-- caption 5 -->
          <div class="col-xs-12 text-center">
            <h6>CARBON PINK &#8231; CHROME CURVED</h6>
            <p><del>$40</del>&nbsp;&nbsp;&nbsp;<b>$34</b></p>
          </div>
        </div>
      </div>

      <div class="item">
        <div class="row">
          <!-- caption 6 -->
          <div class="col-xs-12 text-center">
            <h6>CARBON PINK &#8231; CHROME CIRCULAR</h6>
            <p><del>$40</del>&nbsp;&nbsp;&nbsp;<b>$30</b></p>
          </div>
        </div>
      </div>

      <div class="item">
        <div class="row">
          <!-- caption 7 -->
          <div class="col-xs-12 text-center">
            <h6>BROWN &#8231; DARK LAX</h6>
            <p><del>$40</del>&nbsp;&nbsp;&nbsp;<b>$34</b></p>
          </div>
        </div>
      </div>

      <div class="item">
        <div class="row">
          <!-- caption 8 -->
          <div class="col-xs-12 text-center">
            <h6>SPOTTED &#8231; RED SKY</h6>
            <p><del>$25</del>&nbsp;&nbsp;&nbsp;<b>$12<sup>.50</sup></b></p>
          </div>
        </div>
      </div>

      <div class="item">
        <div class="row">
          <!-- caption 9 -->
          <div class="col-xs-12 text-center">
            <h6>CARBON BLACK &#8231; DARK LENS</h6>
            <p><del>$40</del>&nbsp;&nbsp;&nbsp;<b>$28</b></p>
          </div>
        </div>
      </div>

      <div class="item">
        <div class="row">
          <!-- caption 10 -->
          <div class="col-xs-12 text-center">
            <h6>BLACK GOLD &#8231; HILLS</h6>
            <p><del>$40</del>&nbsp;&nbsp;&nbsp;<b>$34</b></p>
          </div>
        </div>
      </div>

      <div class="item">
        <div class="row">
          <!-- caption 11 -->
          <div class="col-xs-12 text-center">
            <h6>GOLD LINING &#8231; DARK LAX</h6>
            <p><del>$40</del>&nbsp;&nbsp;&nbsp;<b>$36</b></p>
          </div>
        </div>
      </div>

      <div class="item">
        <div class="row">
          <!-- caption 12 -->
          <div class="col-xs-12 text-center">
            <h6>PURPLE AIR &#8231; SKY TWO</h6>
            <p><del>$25</del>&nbsp;&nbsp;&nbsp;<b>$20</b></p>
          </div>
        </div>
      </div>

    </div>

  </div>
  <!-- END CAPTION SLIDER EXTRA SMALL SCREEN: 1 SLIDER CAPTION -->

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
    $(document).ready(function(){
      $("#failureModal").modal();
    })
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
