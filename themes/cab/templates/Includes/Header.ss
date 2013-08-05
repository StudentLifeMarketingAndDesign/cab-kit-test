<header class="header clearfix" role="banner">
	<div class="container">
		<div class = "preheader">
		 <h1>
		 	<img src ="themes/cab/images/cablogo.png">
		
		 	<a href="{$BaseHref}" class="logo"> Entertainment Done  <span class = "white">Right.</span></a>
		 </h1> 
		 </div>
		<nav role="navigation" class="nav-main-wrapper clearfix hide-print">
			<h2 class="nav-title"><a href="#">Menu <span></span></a></h2>
			<ul class="nav-main clearfix">
				<% loop Menu(1) %>
					<li class="<% if $LinkOrSection = section %>active<% end_if %>"><a href="$Link">$MenuTitle</a></li>
				<% end_loop %>
			</ul>
		</nav>

	</div><!-- end .container -->
</header>