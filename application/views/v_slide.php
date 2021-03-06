<!DOCTYPE html>
<html>
<head>
<title>Examples Easy Silder</title>
<link rel="stylesheet" media="all" href="<?php echo base_url()?>assets/css/jquery.easy_slides.css" type="text/css">
<script src="<?php echo base_url()?>assets/js/jquery.min.js" type="text/javascript"></script>
<script src="<?php echo base_url()?>assets/js/jquery.easy_slides.js" type="text/javascript"></script>
</head>
<body>
 <h1>Examples Easy Silder</h1>

 <h2>One Big Picture</h2>
 <div class="slider slider_one_big_picture">
  <div><img src="ayam.jpg"></div>
  <div>2</div>
  <div>3</div>
  <div>4</div>
  <div>5</div>
  <div>6</div>
  <div>7</div>
  <div>8</div>
  <div>9</div>
  <div class="next_button">NEXT</div>  
  <div class="prev_button">PREV</div>  
  <div class="nav_indicators"></div>
 </div>

 <h2>Circle</h2>
 <div class="slider slider_circle_10">
  <div><img src="ayam.jpg"></div>
  <div>2</div>
  <div>3</div>
  <div>4</div>
  <div>5</div>
  <div>6</div>
  <div>7</div>
  <div>8</div>
  <div>9</div>
  <div class="next_button">NEXT</div>  
  <div class="prev_button">PREV</div>  
 </div>

 <h2>4 in line</h2>
 <div class="slider slider_four_in_line">
  <div>1</div>
  <div>2</div>
  <div>3</div>
  <div>4</div>
  <div>5</div>
  <div>6</div>
  <div>7</div>
  <div>8</div>
  <div>9</div>
  <div class="next_button">NEXT</div>  
  <div class="prev_button">PREV</div>  
 </div>
 
 <h2>Clock</h2>
 <div class="slider slider_clock">
  <div>1</div>
  <div>2</div>
  <div>3</div>
  <div>4</div>
  <div>5</div>
  <div>6</div>
  <div>7</div>
  <div>8</div>
  <div>9</div>
  <div class="next_button">NEXT</div>  
  <div class="prev_button">PREV</div>  
 </div> 
 <br>
  <br> <br> <br> <br> <br> <br>
 <script>
   $(document).ready(function() {
     $('.slider_one_big_picture').EasySlides({'autoplay': true,'stepbystep':false, 'show': 5})
     $('.slider_circle_10').EasySlides({'autoplay': true, 'show': 13})
     $('.slider_four_in_line').EasySlides({'autoplay': true, 'show': 9})
     $('.slider_clock').EasySlides({'autoplay': true, 'show': 15})

   });
 </script>
</body>
</html>
