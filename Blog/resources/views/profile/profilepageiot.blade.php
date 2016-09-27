<!DOCTYPE html>
<html>
<title>Profile-IoT</title>

<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="http://www.w3schools.com/lib/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
<link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css">
<style>
html,body,h1,h2,h3,h4,h5 {font-family: "Raleway", sans-serif}
.w3-sidenav a,.w3-sidenav h4 {font-weight:bold}
body {
    background-image: url("/picture/background.jpg");
    background-size:cover;
}
</style>
<body class=" w3-content" style="max-width:1600px ">

<!-- Sidenav/menu -->
<nav class="w3-sidenav w3-collapse w3-white w3-animate-left w3-opacity w3-hover-opacity-off" style="z-index:3;width:300px;" id="mySidenav"><br>
  <div class="w3-container">
    <a href="#" onclick="w3_close()" class="w3-hide-large w3-right w3-jumbo w3-padding" title="close menu">
      <i class="fa fa-remove"></i>
    </a>
    <img src="/profile/coverphoto.png" style="width:45%; font-size:150%; " class="w3-round"><br><br>
    <h4 class="w3-padding-0" style="font-size:200%;"><b>Profile</b></h4>
  </div>
  <a href="/Blog" class="w3-padding w3-text-teal" style="font-size:150%;">HOME</a>
  <a href="/profile/profilepageaboutme" class="w3-padding" style="font-size:150%;">Profile</a>
  <a href="#" class="w3-padding" style="font-size:150%;">SHOP</a>
  <a href="#" class="w3-padding" style="font-size:150%;">CONTACT</a>
   
  <div class="w3-section w3-padding-top w3-large">
    <a href="http://www.facebook.com/dannietony" class="w3-hover-white w3-hover-text-indigo w3-show-inline-block"><i class="fa fa-facebook-official"></i></a>
    <a href="#" class="w3-hover-white w3-hover-text-red w3-show-inline-block"><i class="fa fa-pinterest-p"></i></a>
    <a href="#" class="w3-hover-white w3-hover-text-light-blue w3-show-inline-block"><i class="fa fa-twitter"></i></a>
    <a href="#" class="w3-hover-white w3-hover-text-grey w3-show-inline-block"><i class="fa fa-flickr"></i></a>
    <a href="#" class="w3-hover-white w3-hover-text-indigo w3-show-inline-block"><i class="fa fa-linkedin"></i></a>
  </div>
</nav>

<!-- Overlay effect when opening sidenav on small screens -->
<div class="w3-overlay w3-hide-large w3-animate-opacity" onclick="w3_close()" style="cursor:pointer" title="close side menu" id="myOverlay"></div>

<!-- !PAGE CONTENT! -->
<div class="w3-main" style="margin-left:300px">

  <!--photo-->
<?php
$FileDir="C:\laragon\www\Blog\public\profile\picture"; 
$FileNum=count(glob("$FileDir/*.*"));
//echo $FileNum; 
?>
<!--photo-->

  <!-- Header -->
    <header class="w3-container">
    <a href="#"><img src="img_avatar_g2.jpg" style="width:65px;" class="w3-circle w3-right w3-margin w3-hide-large w3-hover-opacity"></a>
    <span class="w3-opennav w3-hide-large w3-xxlarge w3-hover-text-grey" onclick="w3_open()"><i class="fa fa-bars"></i></span>
    <br><br>
    <div class="w3-section w3-bottombar w3-padding-16">
      <span class="w3-margin-right w3-text-white" style="font-size:200%;">Filter:</span>
      <button class="w3-btn w3-white w3-hide-small" onclick="location.href='/profile/profilepageaboutme'"><i class="fa fa-male w3-margin-right"></i>About</button>
      <button class="w3-btn w3-white" onclick="location.href='/profile/profilepageiot'"><i class="fa fa-diamond w3-margin-right"></i>IoT For Fun</button>
      <button class="w3-btn w3-white w3-hide-small" onclick="location.href='/profile/profilepagephoto'"><i class="fa fa-photo w3-margin-right"></i>Photos <?php echo '('.$FileNum.')';   ?></button>      
    </div>
  </header>
  
  <!-- iot-->
  <!-- First Photo Grid-->
  <div class="w3-row-padding">
    <div class="w3-third w3-container w3-margin-bottom">
      <img src="img_mountains.jpg" alt="Norway" style="width:100%" class="w3-hover-opacity">
      <div class="w3-container w3-white">
        <p><b>Lorem Ipsum</b></p>
        <p>Praesent tincidunt sed tellus ut rutrum. Sed vitae justo condimentum, porta lectus vitae, ultricies congue gravida diam non fringilla.</p>
      </div>
    </div>
    <div class="w3-third w3-container w3-margin-bottom">
      <img src="img_lights.jpg" alt="Norway" style="width:100%;" class="w3-hover-opacity">
      <div class="w3-container w3-white">
        <p><b>Lorem Ipsum</b></p>
        <p>Praesent tincidunt sed tellus ut rutrum. Sed vitae justo condimentum, porta lectus vitae, ultricies congue gravida diam non fringilla.</p>
      </div>
    </div>
    <div class="w3-third w3-container">
      <img src="img_nature.jpg" alt="Norway" style="width:100%" class="w3-hover-opacity">
      <div class="w3-container w3-white" >
        <p><b>Lorem Ipsum</b></p>
        <p>Praesent tincidunt sed tellus ut rutrum. Sed vitae justo condimentum, porta lectus vitae, ultricies congue gravida diam non fringilla.</p>
      </div>
    </div>
  </div>
    <!-- iot-->

  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <!-- Footer -->
  <footer class="w3-container w3-padding-32 w3-white w3-opacity w3-hover-opacity-off">
  <div class="w3-row-padding">
    <div class="w3-third">
      <h3>FOOTER</h3>
      <p>Praesent tincidunt sed tellus ut rutrum. Sed vitae justo condimentum, porta lectus vitae, ultricies congue gravida diam non fringilla.</p>
      <p>Powered by <a href="http://www.w3schools.com/w3css/default.asp" target="_blank">w3.css</a></p>
    </div>
  
    <div class="w3-third">
      <h3>NONE</h3>
      <ul class="w3-ul w3-hoverable">



      </ul>
    </div>

    <div class="w3-third">
      <h3>POPULAR TAGS</h3>
      <p>
        <span class="w3-tag w3-black w3-margin-bottom">Travel</span> <!-- tag example -->
      </p>
    </div>

  </div>
  </footer>

<!-- End page content -->
</div>

<script>
// Script to open and close sidenav
function w3_open() {
    document.getElementById("mySidenav").style.display = "block";
    document.getElementById("myOverlay").style.display = "block";
}
 
function w3_close() {
    document.getElementById("mySidenav").style.display = "none";
    document.getElementById("myOverlay").style.display = "none";
}
</script>

</body>
</html>

