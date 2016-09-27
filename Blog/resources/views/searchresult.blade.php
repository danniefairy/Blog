
<!DOCTYPE html>
<html>
<title>Search Result</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://www.w3schools.com/lib/w3.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
  <link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css">
  <style>
    body {
        background-image: url("/picture/background.jpg");
        background-size:cover;
    }
  </style>

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
          <a id="login" href="/login" style="font-size: 150%";>Login</a>
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
<!--post index-->
<h1 style="text-align:center; color:white;"> Articles </h1>
<?php $i=0 ?>
@foreach($blogs as $blog)
<div class="w3-border w3-round-xlarge" style="max-width: 1300px;margin: auto;">
<?php if(preg_match( "/".$_POST["keywords"]."/i",$blog->title)) { ?>
  <?php $i++; ?>
  <h1 class="w3-container w3-section w3-blue w3-opacity w3-hover-opacity-off" style="max-width: 1200px; margin: auto;">{{'第'.$i.'篇文章: '.$blog->title}}</h1>
  <h2 class="w3-container w3-section w3-blue w3-opacity w3-hover-opacity-off" style="max-width: 1200px;margin: auto;">{{date('F d,Y',strtotime($blog->created_at))}}</h2>
  <div style="font-size:150%; word-wrap:break-word; max-width: 1200px; margin: auto;"  class="w3-container w3-section w3-light-blue w3-opacity w3-hover-opacity-off">


  <?php if(strlen($blog->description)>125) {?>  
    <p id="text" style="color:white;">{{substr($blog->description,0,125).'...'}}</p>
  <?php }else { ?>
    <p style="color:white;">{{$blog->description}}</p>
  <?php } ?>
  <a href="/categories/tag/{{$blog->category_id}}"> {{'#'.$categories[$blog->category_id-1]->name}}</a><!-- 傳值-->
</div>

<div style="text-align:center;">
<button type="button" class="w3-btn w3-round-xxlarge " onclick="location.href='/more/{{$blog->id}}'">More</button> </div>
<br>
<div style="text-align:center;">  
  <!-- edit --> 
  <?php 
  if($guest=="Dannie"): {?>
      <button type="button" class="w3-btn w3-round-xxlarge " onclick="location.href='/post/{{$blog->id}}/edit'">Edit</button>   


  <!-- edit -->
  <br><br>
  <!-- delete -->
  <form    action="/post/{{$blog->id}}" method="post">
    <input type="hidden" name="_method" value="delete">
    <input type="hidden" name="_token" value="{{ csrf_token()}}">
    <input class="w3-btn  w3-round-xxlarge" type="submit" name="name" value="delete">
  </form>
  <br>
  <?php } endif;?>
  <!-- delete -->
</div>

</div>

  <hr>
  <?php } ?>
@endforeach

<p>
<div style="text-align:center;">
<?php 
  if($guest=="Dannie"): ?>
      <button type="button" class="w3-btn w3-round-xxlarge" onclick="location.href='post/create'">Go to submit page</button> 


<br>

<?php endif;?>


<!-- comment--> 
<div  style="text-align:center;" id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/zh_TW/sdk.js#xfbml=1&version=v2.7";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>

<div  class="fb-comments" data-href="http://localhost:8000/post" data-numposts="100"></div>
</div>
<!--改上架後的網址


<!-- comment-->



<!--post index-->
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


