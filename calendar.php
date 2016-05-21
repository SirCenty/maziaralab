<?php
Include 'header.php';
?>

        <div class="clear"></div>
        <div class="inner shadow">
        	<!-- Second Level Navigation Start -->
            <div class="second-nav">
            	<ul>
                	<li><a href="timeline.php">Timeline</a></li>
                    <li><a href="calendar.php" class="active">Calendar</a></li>
                    
                </ul>
            </div>
            <!-- Second Level Navigation End -->
            <div class="clear"></div>
            <!-- Sub Page Banner Start -->
            <div id="sub-banner" class="row">
            	<a href="calendar.php#"><img src="images/sub-banner2.jpg" alt="" /></a>
                <div class="sub-caption">
                	<h1></h1>
                    <h1>LETS <span class="colr">PLAN TOGETHER</span></h1>
                </div>
            </div>
            <!-- Sub Page Banner End -->
            <div class="clear"></div>
        	<!-- Container Start -->
            <div class="container row">
            	<div class="two-thirds column left">
                    <!-- Gigs Tabs Start -->
                    <div class="in-sec in-sec-nopad">
                    	<!-- Calandar Start -->
                        <div id="calendar"></div>
                        <!-- Calandar End -->
                        <div class="clear"></div>
                    </div>
                    <!-- Gigs Tabs End -->
                    <div class="clear"></div>
                </div>
                <div class="one-third column left">
                	
                    <div class="box-small">
                    	<h1 class="heading">Blog ARCHIVE</h1>
                        <div class="box-in">
                        	<!-- Now Playing Start -->
                        	<div class="widget-links">
                            	<ul>
                                	<li><a href="calendar.php#"><span>JULY 2012</span><span>23</span></a></li>
                                    <li><a href="calendar.php#"><span>June 2012</span><span>123</span></a></li>
                                    <li><a href="calendar.php#"><span>May 2012</span><span>89</span></a></li>
                                    <li><a href="calendar.php#"><span>April 2012</span><span>21</span></a></li>
                                    <li><a href="calendar.php#"><span>March 2012</span><span>32</span></a></li>
                                    <li><a href="calendar.php#"><span>February 2012</span><span>22</span></a></li>
                                    <li><a href="calendar.php#"><span>January 2012</span><span>100</span></a></li>
                                    <li><a href="calendar.php#"><span>2011</span><span>99</span></a></li>
                                    <li><a href="calendar.php#"><span>2010</span><span>98</span></a></li>
                                </ul>
                            </div>
                            <!-- Now Playing End -->
                            <div class="clear"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="clear"></div>
            <!-- Footer Start -->
            
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
                        <p>Copyright <a href="calendar.php#">Maziara</a> 2016</p>
                    </div>
                    <!-- Copyrights End -->
                    <!-- Follow Us and Top Start -->
                    <div class="followus-top">
                        <a href="calendar.php#top" class="top">TOP</a>
                        <!-- Follow Us Start -->
                        <ul>
                            <li><h6 class="white">Follow Us</h6></li>
                            <li><a href="calendar.php#" class="facebook">&nbsp;</a></li>
                            <li><a href="calendar.php#" class="twitter">&nbsp;</a></li>
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