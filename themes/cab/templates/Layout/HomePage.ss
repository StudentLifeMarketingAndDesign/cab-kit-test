
	
  <div class="slider-container">
  <div class = "sContainer">
 
  <div class="flexslider">
  	 
            <div class="hero-text">
	            <h2 class="blocktext">Get Involved!</h2>
	            <ul>
	                <li><a href="manage-your-org/">Manage Your Student Org</a></li>
	                <li><a href="services/">Our Services</a></li>
	            </ul>
            </div><!-- end hero-text -->
            
            
      <ul class="slides">
     
        <% loop Slides %>
        <li>
        	
          <a href="$Link" target="_blank"><img src="$ImageURL" alt="Slideshow Photo $Pos" /></a>
          <p class="flex-caption"><a href="$Link" class="full-desc" target="_blank">$Description</a> 
        </li>
         
        <% end_loop %>
       </ul><!-- end slides -->
       
    </div>  <!-- end container -->
  
  </div><!-- end flexslider -->
  
  <% if HomePageHeroFeatures.limit(2) %>
		  
            <div class="hero-article-wrapper">
            	 <h2 id ="cabfare">CabFare</h2>
                <% loop HomePageHeroFeatures %>
               
                <div class="hero-article clearfix">
                    <% if $Image %>
                    	<% if $UseExternalLink %>
                    		<a href="$ExternalLink" target="_blank"><img src="$Image.URL" alt=""></a>
                    	<% else %>
                        	<a href="$AssociatedPage.Link"><img src="$Image.URL" alt=""></a>
                        <% end_if %>
                    <% end_if %>
                    <h3 class="hero-title">
	                    <% if $UseExternalLink %>
	                    	<a href="$ExternalLink" target="_blank">$Title</a>
	                    <% else %>
	                    	<a href="$AssociatedPage.Link">$Title</a>
	                    <% end_if %>
                    </h3>
                    <div class="hero-content">$Content</div>
                    <% if $UseExternalLink %>
                    	<a href="$ExternalLink" target="_blank" class="hero-link">Read More</a>
                    <% else %>
                    	<a href="$AssociatedPage.Link" class="hero-link">Read More</a>
                    <% end_if %>
                </div>
                <% end_loop %>
                </div>
	       <% end_if %>
</div><!-- end slider-container -->


	
	<section class="home-highlights">
        <div class="container clearfix">
	        <% loop HomePageFeatures %>
	            <div class="module">
	                <div class="media">
	                <% if $YouTubeEmbed %>
	                	$YouTubeEmbed
	                <% else %>
	                    <a href="$AssociatedPage.Link">
	                        <img src="$Image.CroppedImage(350,197).URL" alt="$Title">
	                    </a>
	                <% end_if %>
	                </div>
	                <div class="inner">
	                    <h3><a href="$AssociatedPage.Link">$Title</a></h3>
	                    	$Content
	                </div>
	            </div>
	         <% end_loop %>
         </div><!-- end .container -->
    </section>

    <%-- <% include TopicsAndNews %> --%>