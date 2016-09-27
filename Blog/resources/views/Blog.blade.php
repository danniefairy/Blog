<!DOCTYPE html>
<html>
<title>My Blog</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="http://www.w3schools.com/lib/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
<link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css">
<style>
body {
    background-image: url("picture/background.jpg");
    background-size:cover;
}
</style>
<!--訪客名稱-->
<script type="text/javascript">
  @if(!is_null(Auth::user()))
     {{$guest=Auth::user()->name }}
  @else
    {{$guest="訪客"}}
  @endif
</script>
  <!--訪客名稱-->
<body>
<!--行槓 -->

<ul class="w3-navbar w3-grey w3-opacity w3-hover-opacity-off">
  <li><h2 style="color:white;">Dannie's Blog</h2></li>
  <li><h2 class="w3-opacity w3-hover-opacity-off" style="background-color:lightblue; border-radius: 70%;">  Hello {{$guest}}</h2></li> 
</ul>

<ul class="w3-navbar w3-black w3-opacity w3-hover-opacity-off">
  <li ><a href="Blog" style="font-size: 200%";>Home</a></li>
  <li><a href="/post/profilepageaboutme" style="font-size: 200%";>Profile</a></li>
  <li><a href="post" style="font-size: 200%";>Post</a></li>
   <!--search box-->
  <i class="w3-dropdown-hover" style="font-size: 200%";><a href="/search">Search<a class="fa fa-search w3-xxxlarge" href="/search"></a></a></i>
    <!--search box-->
  <li class="w3-dropdown-hover">
    <a href="#" style="font-size: 200%";>More</a>
    <div class="w3-dropdown-content w3-white w3-card-4">
      <!--查看是否登入 -->
        <?php if($guest=="訪客"):?>
          <a id="login" href="login" style="font-size: 150%";>Login</a>
        <?php else: ?>
          <a id="logout" href="{{ url('/logout') }}"  onclick="event.preventDefault(); document.getElementById('logout-form').submit();"  style="font-size: 150%;" >
            Logout
          </a>
          <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
            {{ csrf_field() }}
          </form>
        <?php endif;?>        
      <!--查看是否登入 -->
      
      

      

      

      <a href="/mail" style="font-size: 150%";>Contact</a>
      <a href="#" style="font-size: 150%";>Link 3</a>
    </div>
  </li>
     
</ul>
<!--行槓 -->
<!--blog picture-->
 <div class="w3-content" style="max-width:1200px;margin-top:46px">
<style>
img {
    border-radius: 50%;
}
</style>
  <!-- Automatic Slideshow Images -->
  <div class="mySlides w3-display-container">  
     <script type="text/javascript"></script>
    <img src="picture/thinking.png"  style="display:block; margin:auto; max-height:12.5cm;"  class="w3-opacity w3-hover-opacity-off">
      <h3 style="color:white; text-align:center; font-size:300%; ">靜下心思考 讓我變更好</h3>
    <div class="w3-display-bottommiddle w3-container w3-text-black w3-padding-32 w3-hide-small">
      
    </div>
  </div>
  
  <div class="mySlides w3-display-container">  
     <script type="text/javascript"></script>
    <img src="picture/friend.png"  style="display:block; margin:auto; max-height:12.5cm;"  class="w3-opacity w3-hover-opacity-off">
      <h3 style="color:white; text-align:center; font-size:300%; ">友情 讓我過得充實</h3>
    <div class="w3-display-bottommiddle w3-container w3-text-black w3-padding-32 w3-hide-small">      
    </div>
  </div>

  <div class="mySlides w3-display-container">  
     <script type="text/javascript"></script>
    <img src="picture/love.png"  style="display:block; margin:auto; max-height:12.5cm;"  class="w3-opacity w3-hover-opacity-off">
      <h3 style="color:white; text-align:center; font-size:300%; ">愛情 完整了我</h3>
    <div class="w3-display-bottommiddle w3-container w3-text-black w3-padding-32 w3-hide-small">      
    </div>
  </div>
  <script>
// Automatic Slideshow - change image every 4 seconds
var myIndex = 0;
carousel();

function carousel() {
    var i;
    var x = document.getElementsByClassName("mySlides");
    for (i = 0; i < x.length; i++) {
       x[i].style.display = "none";
    }
    myIndex++;
    if (myIndex > x.length) {myIndex = 1}
    x[myIndex-1].style.display = "block";
    setTimeout(carousel, 4000);
}

// Used to toggle the menu on small screens when clicking on the menu button
function myFunction() {
    var x = document.getElementById("navDemo");
    if (x.className.indexOf("w3-show") == -1) {
        x.className += " w3-show";
    } else {
        x.className = x.className.replace(" w3-show", "");
    }
}

// When the user clicks anywhere outside of the modal, close it
var modal = document.getElementById('ticketModal');
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}
</script>
<!--blog picture end -->
<!--聯絡資料-->
<footer class="w3-container w3-padding-64 w3-center w3-opacity w3-light-grey w3-xlarge">
  <a href="http://www.facebook.com/dannietony"><i class="fa fa-facebook-official"></i></a>
  <a href="#" class="w3-hover-text-red"><i class="fa fa-pinterest-p"></i></a>
  <a href="#" class="w3-hover-text-light-blue"><i class="fa fa-twitter"></i></a>
  <a href="#" class="w3-hover-text-grey"><i class="fa fa-flickr"></i></a>
  <a href="#"><i class="fa fa-linkedin"></i></a>
  <p class="w3-medium">By Dannie </p>
</footer>
<!--聯絡資料-->
</body>
</html>

