<!DOCTYPE html>
<html>
<title>Profile-about</title>
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


<script type='text/javascript'>
function show(obj, id1,id2,id3)
{
  var o1=document.getElementById(id1);
  var o2=document.getElementById(id2);
  var o3=document.getElementById(id3);
  o1.style.display='';
  o2.style.display='none';
  o3.style.display='none';
}
</script>



 
  <!-- Header -->
   <header class="w3-container">
    <a href="#"><img src="img_avatar_g2.jpg" style="width:65px;" class="w3-circle w3-right w3-margin w3-hide-large w3-hover-opacity"></a>
    <span class="w3-opennav w3-hide-large w3-xxlarge w3-hover-text-grey" onclick="w3_open()"><i class="fa fa-bars"></i></span>
    <br><br>
    <div class="w3-section w3-bottombar w3-padding-16">
      <span class="w3-margin-right w3-text-white"  style="font-size:200%;">Filter:</span>
      <button class="w3-btn w3-white w3-hide-small" onclick='show(this,"about","iot","photo")'><i class="fa fa-male w3-margin-right"></i>About</button>
      <button class="w3-btn w3-white" onclick='show(this,"iot","about","photo")'><i class="fa fa-diamond w3-margin-right"></i>IoT For Fun</button>
      <button class="w3-btn w3-white w3-hide-small" onclick='show(this,"photo","about","iot")'><i class="fa fa-photo w3-margin-right"></i>Photos <?php echo '('.$FileNum.')';   ?></button>      
    </div>
  </header>


  <!-- aboutme-->

  <!-- about me context-->
      <div id="about" class="w3-container w3-white w3-hover-opacity  w3-hover-opacity-off" style="border-style:inset;">  
        <br>  
          <img  src="/profile/coverphoto-aboutme.png" style="width:35%; " class="w3-right w3-circle">
        <ul>
          <li>
            <h3><b>General Information:</b></h3>
              <ol><dt>Name: Chen Kuan-Ting <陳冠廷></dt></ol>
              <ol><dt>Phone: 092624823</dt></ol>
              <ol><dt>Email:dannietony@yahoo.com.tw</dt></ol>
          </li>

          <li>
            <h3><b>Education:</b></h3>
            <ol>
              <dt>Educational Background:
                <dd>
                  National Taiwan University
                </dd>
                <dd>
                  National Chiao Tung University
                </dd>
              </dt>
            </ol>
            <ol>
              <dt>Major:
                <dd>Electrical Engineering</dd>
              </dt>
            </ol>
            <ol>
              <dt>Skill: 
                <dd>Programming Language: C/C++, Python, Java, PHP, Javascript, HTML/CSS, Scala
                </dd>
                <dd>Course Included: IoT Application, Algorithm ,Machine Leraning ,Big Data ,Speech Processing  
                </dd>
              </dt>
            </ol>
          </li>

          <li>
            <h3><b>Experience:</b></h3>
            <ol>
              <dt>Extracurricular Activity:
                <dd>
                  Piano Trophy x1
                </dd>
                <dd>
                  Go Trophies x4, Medals x3
                </dd>
                <dd>
                  Mathematical competition Trophy x1  
                </dd>
              </dt>
            </ol>
            <ol>
              <dt>WorkShop:
                <dd>TUTK WorkShop</dd>
                <dd>Haitec(Luxgen) WorkShop</dd>
                <dd>RealTek WorkShop</dd>
              </dt>
            </ol>
          </li>
        </ul>

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

      </div> 



  <!-- aboutme-->

 <!-- iot-->
  <!-- First Photo Grid-->
  <div id="iot" class="w3-row-padding" style="border-style:inset;">
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

<!--照片 -->

  <script>
    var i1="1";
    var i2="2";
    var i3="3";
    var filenums="<?php echo $FileNum;?>";
    var filenumi=Number(filenums);
    function change()
    {
      var numi1=Number(i1);
      var numi2=Number(i2);
      var numi3=Number(i3);

      numi1=numi1+3;      
      if(numi1<=filenumi)
        var b1=true;
      else
        var b1=false;

      numi2=numi2+3;
      if(numi2<=filenumi)
        var b2=true;
      else
        var b2=false;

      numi3=numi3+3;
      if(numi3<=filenumi)
        var b3=true;
      else
        var b3=false;

      var turn=false;

      
      if(!(b1&&b2&&b3))
      {
        if(!b1)
        {
          i1='1';
          i2='2';
          i3='3';
          var img1=document.getElementById('pic1');
          img1.src="/profile/picture/pic"+i1+".png"; 
          var img2=document.getElementById('pic2');
          img2.src="/profile/picture/pic"+i2+".png"; 
          var img3=document.getElementById('pic3');
          img3.src="/profile/picture/pic"+i3+".png"; 
          turn=true;
        }
        else if(!b2)
        {
          i1=String(numi1);
          var img1=document.getElementById('pic1');
          img1.src="/profile/picture/pic"+i1+".png"; 
          var img2=document.getElementById('pic2');
          img2.src=""; 
          var img3=document.getElementById('pic3');
          img3.src="";
          i1='-2';
          i2='-1';
          i3='0';
          turn=true;
        }
        else if(!b3)
        {
          i1=String(numi1);
          i2=String(numi2);
          var img1=document.getElementById('pic1');
          img1.src="/profile/picture/pic"+i1+".png"; 
          var img2=document.getElementById('pic2');
          img2.src="/profile/picture/pic"+i2+".png"; 
          var img3=document.getElementById('pic3');
          img3.src="  "; 
          i1='-2';
          i2='-1';
          i3='0';
          turn=true;
        }
      }

      if(!turn)
      {
        i1=String(numi1);
        i2=String(numi2);
        i3=String(numi3);

        var img1=document.getElementById('pic1');
        img1.src="/profile/picture/pic"+i1+".png"; 
        var img2=document.getElementById('pic2');
        img2.src="/profile/picture/pic"+i2+".png"; 
        var img3=document.getElementById('pic3');
        img3.src="/profile/picture/pic"+i3+".png"; 
      }
    }
  </script>
<style>
div.one {

    margin-top: 50px;
    margin-bottom: 50px;
    margin-right: 180px;
    margin-left: 100px;

}
.button1 {font-size: 50px;}
</style>

  <div id="photo" class="one" align="center" style="border-style:inset;">
  <button class="button1 w3-btn fa fa-arrow-right w3-round-xxlarge w3-center w3-opacity w3-hover-opacity-off"  onclick="change();"></button>
  


  <!-- First Photo Grid-->
  <div class="w3-row-padding">
    <div class="w3-third w3-container w3-margin-bottom">
      <img id='pic1' src="/profile/picture/pic1.png"  class="w3-border w3-padding w3-opacity w3-hover-opacity-off" style="width:80%" class="w3-hover-opacity" >
      
    </div>
    <div class="w3-third w3-container w3-margin-bottom">
      <img id='pic2' src="/profile/picture/pic2.png"  class="w3-border w3-padding w3-opacity w3-hover-opacity-off" style="width:80%" class="w3-hover-opacity" >
    
    </div>
    <div class="w3-third w3-container w3-margin-bottom">
      <img id='pic3' src="/profile/picture/pic3.png"  class="w3-border w3-padding w3-opacity w3-hover-opacity-off" style="width:80%" class="w3-hover-opacity" >
      
    </div>
  </div>
</div>
<!--照片 -->
  

  <!-- Footer -->
  <footer class="w3-container w3-padding-32 w3-white w3-opacity w3-hover-opacity-off">
  <div class="w3-row-padding">
    <div class="w3-third">
      <h3>FOOTER</h3>
      <p>Praesent tincidunt sed tellus ut rutrum. Sed vitae justo condimentum, porta lectus vitae, ultricies congue gravida diam non fringilla.</p>
    </div>

      <!--
      找出前兩大id
      -->
      <?php $i=0?>
      @foreach($blogs as $blog)
      <?php $i=$i+1?>
      @endforeach

      <?php 
        if($i==0)
        {
          $uptitle="No title";
          $updescription="No description";
          $downtitle="No title";
          $downdescription="No description";
        }
        else if($i==1)
        {
        $uptitle=$blogs[0]->title;
        $updescription=$blogs[0]->description;
        $downtitle="No title";
        $downdescription="No description";
        }
        else
        {
          $uptitle=$blogs[$i-2]->title;
          $updescription=$blogs[$i-2]->description;
          $downtitle=$blogs[$i-1]->title;
          $downdescription=$blogs[$i-1]->title;
        }
      ?>


      <!--
      找出前兩大id
      -->

    <div class="w3-third">
      <h3>BLOG</h3>
      <ul class="w3-ul w3-hoverable">
        <li class="w3-padding-16">
          <span class="w3-large"><p>{{$uptitle}}</p></span>
          <span><p>{{$updescription}}</p></span>
        </li>

        <li class="w3-padding-16">
          <span class="w3-large"><p>{{$downtitle}}</p></span>
          <span><p>{{$downdescription}}</p></span>
        </li>

      </ul>
    </div>
    </ul>
    
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


