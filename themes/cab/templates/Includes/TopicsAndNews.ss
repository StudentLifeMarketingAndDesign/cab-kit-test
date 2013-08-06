<section class="topics-news">
            <div class="container">
                <div class="row-fluid">
                    <div class="span6 mod mod-news">

                          <h2 class="mod-title">Latest Tweets</h2>
						 <a class="twitter-timeline" data-dnt="true" href="https://twitter.com/UIstdntInvolve" data-widget-id="337209860296957952">Tweets by @UIstdntInvolve</a>
			<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
                   <!-- <div class="fb-like-box" data-href="https://www.facebook.com/UIstudentinvolvement" data-width="400" data-show-faces="false" data-colorscheme="dark" data-stream="false" data-show-border="false" data-header="false"></div>-->
                    </div>
                    <div class="span6 mod mod-events">

			<h2 class="mod-title">Upcoming Events</h2>
			<ul class="unstyled">
			<% loop Events %>
			<li><h3><a href="$Link" target="_blank">$Title</a></h3>
			<p><% if $Date %><small>$Dates</small><% end_if %></p>
			<p>$Description.Summary(10)</p>

			</li>
			<% end_loop %>

			<li><a href="http://afterclass.uiowa.edu" target="_blank" data-icon="&#x23;">See more events on After Class</a></li>
		        </ul>
                    </div>
                </div>
            </div>
        </section>
