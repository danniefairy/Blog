<!DOCTYPE html>
<html>
<title>Edit Post</title>
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
<body>
<!--行槓 -->

<!--訪客名稱-->
<script type="text/javascript">
  @if(!is_null(Auth::user()))
     {{$guest=Auth::user()->name }}
  @else
    {{$guest="訪客請登入"}}
  @endif
</script>
  <!--訪客名稱-->
<ul class="w3-navbar w3-grey w3-opacity w3-hover-opacity-off">
  <li><h2 style="color:white;">Dannie's Blog</h2></li>
  <li><h2 class="w3-opacity w3-hover-opacity-off" style="background-color:lightblue; border-radius: 70%;">  Hello {{$guest}}</h2></li> 
</ul>



<ul class="w3-navbar w3-black w3-opacity w3-hover-opacity-off">
  <li ><a href="/Blog" style="font-size: 200%";>Home</a></li>
  <li><a href="/post/profilepageaboutme" style="font-size: 200%";>Profile</a></li>
  <li><a href="/post" style="font-size: 200%";>Post</a></li>
   <!--search box-->
    <i class="w3-dropdown-hover" style="font-size: 200%";><a href="/search">Search<a class="fa fa-search w3-xxxlarge" href="/search"></a></a></i>
    <!--search box-->
  <li class="w3-dropdown-hover">
    <a href="#" style="font-size: 200%";>Dropdown</a>
    <div class="w3-dropdown-content w3-white w3-card-4">
      <!--查看是否登入 -->
        <?php if($guest=="訪客請登入"):?>
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
     
</ul>
<!--行槓 -->
<!--new post -->

@if(count($errors)>0)
	<ul>
	@foreach($errors->all() as $error)
	<li><h3>{{$error}}</h3></li>
	@endforeach
	</ul>
@endif


<br><br><br>
<form class="w3-container w3-section w3-blue w3-opacity w3-hover-opacity-off" action="/post/{{$blog->id}}" method="post">
<h2 class="w3-card-4" style="text-align:center; color:white;">Edit post</h2>
  <input class="w3-input w3-border w3-container w3-section w3-white w3-opacity w3-hover-opacity-off"  type="text" name="title" value="{{$blog->title}}" placeholder="this is title"><br>
<!-- 新增分類 -->
  <a href="/categories/create">Add new category</a> <!-- 新增或移除 -->
  <select name="category_id">
  <?php $i=1; ?>
  @foreach($categories as $category)
　<option value={{$i}}>{{$category->name}}</option>
  <?php $i=$i+1; ?>
　@endforeach



<!-- 新增分類 -->
<input class="w3-input w3-border w3-container w3-section w3-white w3-opacity w3-hover-opacity-off"  type="text" name="img" value="/postimg/" placeholder="/postimg/"><br>


	<textarea class="w3-input w3-border w3-sand" name="description" rows="8" cols="40" placeholder="this is description">{{$blog->description}}</textarea><br>

  <input type="hidden" name="_method" value="put">
	<input type="hidden" name="_token" value="{{ csrf_token() }}">
	<div style="text-align:center;">
		<input   class="w3-btn w3-round-xxlarge" type="submit" name="name" value="edit" >
	</div>
</form>


<!--new post -->
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




