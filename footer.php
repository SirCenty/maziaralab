                
                <div id="footer">
                <div class="foot-top">
                    <!-- Footer Logo Start -->
                    <div class="logo-foot">
                        <a href="index.php#"><img src="images/logo-foot.png" alt="" /></a>
                    </div>
                    <!-- Footer Logo End -->
                    <!-- Footer Navigation Start -->
                    <div class="links-foot">
                        <ul>
                            <li><a href="about-us.php">About us</a></li>
                            <li><a href="contact-us.php">Contact</a></li>
                            <li><a href="index.php#">Terms of service</a></li>
                            <li><a href="index.php#">Privacy</a></li>
                        </ul>
                    </div>
                    <!-- Footer Navigation End -->
                    <!-- Newsletter Start -->
                    <div class="newsletter">
                    	<h5 class="white">NEWSLETTER</h5>
                        <ul>
                        	<li class="left">
                            	<input name="" value="Enter Email Address"
                                onfocus="if(this.value=='Enter Email Address') {this.value='';}"
                                onblur="if(this.value=='') {this.value='Enter Email Address';}" type="text" class="bar" />    
                            </li>
                            <li class="right"><button class="backcolr">Submit</button></li>
                        </ul>
                    </div>
                    <!-- Newsletter End -->
                </div>
                <div class="foot-bottom">
                	<!-- Copyrights Start -->
                    <div class="copyrights">
                    	<p>Copyright <a href="timeline.php#">Maziara</a> 2016</p>
                    </div>
                    <!-- Copyrights End -->
                    <!-- Follow Us and Top Start -->
                    <div class="followus-top">
                    	<a href="timeline.php#top" class="top">TOP</a>
                        <!-- Follow Us Start -->
                    	<ul>
                        	<li><h6 class="white">Follow Us</h6></li>
                        	<li><a href="timeline.php#" class="facebook">&nbsp;</a></li>
                            <li><a href="timeline.php#" class="twitter">&nbsp;</a></li>
                        </ul>
                        <!-- Follow Us End -->
                    </div>
                    <!-- Follow Us and Top End -->
                </div>
            </div>
            <!-- Footer End -->
        </div>
        <div class="clear"></div>
    </div>
</div>
<!-- Outer Wrapper End -->
<script>
$('#menulock').click(function(){
	    
		$('#menunav').toggle();
	});
	if($(window).width()>767){
		   $('#menulock').hide();
		   $('#menunav').show();
		}else{
		   $('#menulock').show();
		   $('#menunav').hide();
		}
	$(window).resize(function(){
		if($(this).width()>767){
		   $('#menulock').hide();
		   $('#menunav').show();
		}else{
		   $('#menulock').show();
		   $('#menunav').hide();
		}
	});
    var nav = $('#header');
    var navHomeY = nav.offset().top;
    var isFixed = false;
    var $w = $(window);
    $w.scroll(function() {
        var scrollTop = $w.scrollTop();
        var shouldBeFixed = scrollTop > navHomeY;
        if (shouldBeFixed && !isFixed) {
            nav.css({
                position: 'fixed',
                top: 0,
                left: nav.offset().left,
                width: nav.width()
            });
            isFixed = true;
        }
        else if (!shouldBeFixed && isFixed)
        {
            nav.css({
                position: 'static'
            });
            isFixed = false;
        }
    });
</script>
<script type="text/javascript" src="js/gcal.js"></script>
</body>
</html>