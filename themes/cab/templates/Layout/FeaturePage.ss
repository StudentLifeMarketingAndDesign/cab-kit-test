<section class="feature-page-header" style="background-image: url($HeroFeatureImage.URL)">
        <div class="container">
              <h1>$Title</h1>
        </div>
  </section>

  <% if $Content %>
  <div class="feature-content-bg">
  <section class="container feature-page clearfix">
  
      <section class="main-content row-fluid">
	      <% if $ButtonText %>
	      	<div class="span9">
		        $Form
		        $Content
	      	</div>
	      	<div class="span3 button-container">
	      		$ButtonText
	      	</div>
	      <% else %>
	      	<div class="span12">
	      		$Form
	      		$Content
	      	</div>
	      <% end_if %>
      </section>
  </section>
  </div>
  <% end_if %>
<% if Children %>
 <div class="features-bg">
   <section class="container feature-wrapper feature-page clearfix">
      <ul class="features">
         <% loop Children %>
           <li>
             <a href="$Link" <% if $RedirectionType = "External" %>target="_blank"<% end_if %>><span class="visuallyhidden">More information about $Title</span>
             <div class="feature-image" <% if $PreviewImage %>style="background-image: url('$PreviewImage.URL')<% end_if %>" >
               
             </div>
             </a>

             <div class="feature-content">
               <h3><a href="$Link" <% if $RedirectionType = "External" %> data-icon="&#x23;" target="_blank"<% end_if %>>$Title</a></h3>
               <p>$Content.Summary(30)</p>
               <span class="read-more"><a href="$Link" class="$ClassName" <% if $RedirectionType = "External" %>  data-icon="&#x23;" target="_blank" class="external"<% end_if %>><span class="visuallyhidden">Information about $Title</span>More<%if LinkShortName %> at $LinkShortName<% end_if %></a></span>
               <div class="clearfix"></div>
                  <a href="$Link"<% if $RedirectionType = "External" %> target="_blank"<% end_if %>><span class="visuallyhidden">More information about $Title</span><div class="feature-content-overlay"></div></a>
             </div>


           </li>
         <% end_loop %>
          <li class="placeholder"></li>
       </ul>


  </section>
</div>
<% end_if %>

<% if StaffPages %>
	<section id="feature-staff-members">
		<div class="container">
			<h2 class="staff-title">$Title Staff Members</h2>

			<ul class="staff-list">
				<% loop StaffPages %>
					<li><% include StaffCard %></li>
				<% end_loop %>
			<li class="filler"></li>
			<li class="filler"></li>
			</ul>
      <hr />
			  <a href="staff-directory/" class="view-all-staff-link">View all CSIL staff members &raquo;</a>
				<a href="#" class="return-to-top">Return to the top of the page &raquo;</a>
        <div class="clearfix"></div>
			
		</div>
	</section>
<% end_if %>

<% include TopicsAndNews %>
