<!DOCTYPE html>
<html>
<title>Post</title>
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
      <a href="#" style="font-size: 150%";>Contact</a>
      <a href="#" style="font-size: 150%";>Link 3</a>
    </div>
    </li>
    <!--search box-->
    <style>
input[type=text] {
    width: 200px;
    box-sizing: border-box;
    border: 2px solid #ccc;
    border-radius: 4px;
    font-size: 22px;
    background-color: white;
    background-position: 10px 10px;
    background-repeat: no-repeat;
    padding: 12px 20px 12px 40px;
    -webkit-transition: width 0.4s ease-in-out;
    transition: width 0.4s ease-in-out;

}

input[type=text]:focus {
    width: 100%;
}
</style>
  <li >
    <form >
      <input  type="text" name="search" placeholder="Search...">
    </form>
  </li>
  <!--search box-->
  

</ul>
<!--行槓 -->
<!--post index-->
<h1 style="text-align:center; color:white;"> Articles </h1>
<?php $i=0 ?>
@foreach($blogs as $blog)
<div class="w3-border w3-round-xlarge" style="max-width: 1300px;margin: auto;">
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

<div style="text-align:center;">
<ul class="pagination w3-opacity w3-hover-opacity-off" >
{{ $blogs->links() }} 
</ul>
</div>
<style>
ul.pagination {
    display: inline-block;
    padding: 0;
    margin: 0;
    font-size: 25px;
}

ul.pagination li {display: inline;}

ul.pagination li a {
    color: black;
    float: center;
    padding: 14px 20px;
    text-decoration: none;
    transition: background-color .3s;
    border: 1px solid #ddd;
    font-size: 25px;
}

ul.pagination li a.active {
    background-color: #eee;
    color: black;
    border: 1px solid #ddd;
}

ul.pagination li a:hover:not(.active) {background-color: #ddd;}
</style>


<!--post index-->
</body>
</html>


