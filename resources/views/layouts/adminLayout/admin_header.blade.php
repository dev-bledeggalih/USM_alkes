<!--{{-- <?php
	// use App\Admin;
	// use App\Http\Controllers\AdminController;

	// $admin = AdminController::nameAdmin();
?> --}} -->
<!--Header-part-->
<div id="header">
  <h1><a href="{{ url('/admin/dashboard')}}">Admin Panel</a></h1>
</div>
<!--close-Header-part--> 


<!--top-Header-menu-->
<div class="row">
	<div class="col-md-8">
	</div>
	<div class="col-md-4">
		<div id="user-nav" class="navbar navbar-inverse" style="float:right">
  	<ul class="nav navbar-nav ml-auto">
		<li class=""><a title="" href="{{ url('/admin/settings') }}"><i class="icon icon-cog"></i> <span class="text">Settings</span></a></li>
		<li class=""><a title="" href="{{ url('/logout') }}"><i class="icon icon-share-alt"></i> <span class="text">Logout</span></a></li>
	</ul>  
</div>
	</div>
</div>

<div id="search">
	
</div>

<!--close-top-Header-menu-->
<!--start-top-serch-->
<!-- <div id="search">
  <input type="text" placeholder="Search here..."/>
  <button type="submit" class="tip-bottom" title="Search"><i class="icon-search icon-white"></i></button>
</div> -->
<!--close-top-serch-->