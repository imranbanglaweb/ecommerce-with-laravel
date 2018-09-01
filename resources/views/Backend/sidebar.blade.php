<div class="sidebar-menu">
<div class="logo"> <a href="#" class="sidebar-icon"> <span class="fa fa-bars"></span> </a> <a href="#"> <span id="logo" ></span> 
<!--<img id="logo" src="" alt="Logo"/>--> 
</a> </div>		  
<div class="menu">
<ul id="menu" >
<li id="menu-home" ><a href="{{url('/dashboard')}}"><i class="fa fa-tachometer"></i><span>Dashboard</span></a></li>
<li><a href="#"><i class="fa fa-cogs"></i><span>Category</span><span class="fa fa-angle-right" style="float: right"></span></a>
<ul>
<li><a href="{{ url('category/create')}}">Add Category</a></li>
<li><a href="{{ url('category')}}">Category list</a></li>		            
</ul>
</li>
<li id="menu-comunicacao">
	<a href="#">
	<i class="fa fa-book nav_icon"></i>
	<span>Products</span><span class="fa fa-angle-right" style="float: right"></span></a>
<ul id="menu-comunicacao-sub" >
<li id="menu-mensagens" style="width: 120px" >
	<a href="{{ url('product/create')}}">Add Products</a>		              
</li>
<li id="menu-arquivos" ><a href="{{ url('product')}}">Product List</a></li>
</ul>
</li>
<li id="menu-comunicacao">
	<a href="#">
	<i class="fa fa-book nav_icon"></i>
	<span>Menufecture</span><span class="fa fa-angle-right" style="float: right"></span></a>
<ul id="menu-comunicacao-sub" >
<li id="menu-mensagens" style="width: 120px" >
	<a href="{{ url('menufecture/create')}}">Add Menufecture</a>		              
</li>
<li id="menu-arquivos" ><a href="{{ url('menufecture')}}">Menufecture List</a></li>
</ul>
</li>
<li id="menu-comunicacao">
	<a href="#">
	<i class="fa fa-user nav_icon"></i>
	<span>Users</span><span class="fa fa-angle-right" style="float: right"></span></a>
<ul id="menu-comunicacao-sub" >
<li id="menu-mensagens" style="width: 120px" >
	<a href="{{ url('user/create')}}">Add User</a>		              
</li>
<li id="menu-arquivos" ><a href="{{ url('user')}}">User List</a></li>
</ul>
</li>
<li id="menu-comunicacao">
	<a href="{{url('/manage-order')}}">
	<i class="fa fa-shopping-cart"></i>
	<span>Oders</span></a>

</li>
<li id="menu-comunicacao">
	<a href="#">
	<i class="fa fa-book nav_icon"></i>
	<span>Sliders</span><span class="fa fa-angle-right" style="float: right"></span></a>
<ul id="menu-comunicacao-sub" >
<li id="menu-mensagens" style="width: 120px" >
	<a href="{{ url('slider/create')}}">Add Slider</a>		              
</li>
<li id="menu-arquivos" ><a href="{{ url('slider')}}">Slider List</a></li>
</ul>
</li>
<li id="menu-comunicacao">
	<a href="#">
	<i class="fa fa-book nav_icon"></i>
	<span>Social Profiles</span><span class="fa fa-angle-right" style="float: right"></span></a>
<ul id="menu-comunicacao-sub" >
<li id="menu-mensagens" style="width: 120px" >
	<a href="{{ url('social/create')}}">Add Social</a>		              
</li>
<li id="menu-arquivos" ><a href="{{ url('social')}}">Social List</a></li>
</ul>
</li>
<li id="menu-comunicacao">
	<a href="#">
	<i class="fa fa-book nav_icon"></i>
	<span>Logos</span><span class="fa fa-angle-right" style="float: right"></span></a>
<ul id="menu-comunicacao-sub" >
<li id="menu-mensagens" style="width: 120px" >
	<a href="{{ url('logo')}}">Add Logo</a>		              
</li>
<li id="menu-arquivos" ><a href="{{ url('/logo')}}">Logo List</a></li>
</ul>
</li>

<li><a href="#"><i class="fa fa-envelope"></i><span>Pages</span><span class="fa fa-angle-right" style="float: right"></span></a>
<ul id="menu-academico-sub" >
<li id="menu-academico-avaliacoes" ><a href="{{url('page/create')}}">Add Pages</a></li>
<li id="menu-academico-boletim" ><a href="{{url('page')}}">Pages List</a></li>
</ul>
</li>
<li><a href="{{url('sitting/index')}}"><i class="fa fa-cog"></i><span>Sittings</span><span class="fa fa-angle-right" style="float: right"></span></a>
</li>

</ul>
</div>
</div>
<div class="clearfix"> </div>
</div>