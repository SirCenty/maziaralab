<?php 
include('config.php');
session_start(); 
?>


<?php
include 'header.php';
?>
        <!-- Header End -->
        <div class="clear"></div>
        <div class="inner shadow">
        	<!-- Sub Page Banner Start -->
            <div id="sub-banner" class="row">
            </div>
            <!-- Sub Page Banner End -->
            <div class="clear"></div>
        	<!-- Container Start -->
            <div class="container row">
            	<div class="two-thirds column left">
                	<h1 class="heading">Maziara News Detail</h1>
                    <!-- Blog Detail Start -->
                    <div class="in-sec row">
                        <div class="blog-detail">
                        	<a href="blog-detail.php" class="thumb"><img src="<?php
								$title=$_SESSION['article'];
								//select all records form tblmember table
								$query = "SELECT * FROM articles WHERE title='$title'";
								//execute the query using mysql_query
								$result = mysql_query($query);
								//$i=0;
								//then using while loop, it will display all the records inside the table
								while ($row = mysql_fetch_array($result)) {
                            	
                                	echo $row['image-url'];
                                
                                }
								?>" alt="" /></a>
                            <div class="blog-opts">
                                <div class="date">
								    <?php
										$title=$_SESSION['article'];
										//select all records form tblmember table
										$query = "SELECT day,datemonth FROM articles WHERE title='$title'";
										//execute the query using mysql_query
										$result = mysql_query($query);
										//$i=0;
										//then using while loop, it will display all the records inside the table
										while ($row = mysql_fetch_array($result)) {
										
											echo '<h6>'.$row['day'].'</h6>';
											echo '<h1>'.$row['datemonth'].'</h1>';
										
										}
										?>
                                    
                                </div><div class="clear"></div>
                                <div class="desc">
                                    <h4><a><?php echo $_SESSION['article'];?></a></h4>
                                    <p class="by">Posted by <a href="blog-detail.php#">admin</a></p>
                                    
                                    <div class="clear"></div>
                                </div>
                            </div>
                            <div class="blog-desc">
							    <?php
								$title=$_SESSION['article'];
								//select all records form tblmember table
								$query = "SELECT paragraph FROM articles WHERE title='$title'";
								//execute the query using mysql_query
								$result = mysql_query($query);
								//$i=0;
								//then using while loop, it will display all the records inside the table
								while ($row = mysql_fetch_array($result)) {
                            	echo'<p class="txt">';
                                	echo $row['paragraph'];
                                echo '</p>';
                                }
								?>
                            </div>
                            <div class="blog-sharing">
                            	<a href="blog-detail.php#" class="buttonone left"><span class="print"></span> PRINT</a>
                                <div class="sharing right">
                                	<a href="blog-detail.php#"><img src="images/share7.gif" alt="" /></a>
                                    <a href="blog-detail.php#"><img src="images/share1.gif" alt="" /></a>
                                    <a href="blog-detail.php#"><img src="images/share6.gif" alt="" /></a>
                                    <a href="blog-detail.php#"><img src="images/share2.gif" alt="" /></a>
                                </div>
                            </div>
                            <div class="clear"></div>
                        </div>
                    </div>
                    
                    
                </div>
                <!-- Blog Detail End -->
                <div class="one-third column left">
                	<div class="box-small">
                    	<h1 class="heading">More Albums</h1>
                        <div class="box-in">
                        	<!-- Now Playing Start -->
                        	<div class="list-thumb">
                            	<ul>
                                	<li>
                                    	<a href="blog-detail.php" class="thumb"><img src="images/thumb1.gif" alt="" /></a>
                                        <div class="desc">
                                        	<h5><a href="blog-detail.php">Jamie reaches number 1 in</a></h5>
                                            <p>Lorem ipsum dolor sit amet, ectetur adipiscing elit. In tellus orci,</p>
                                            <a href="blog-detail.php" class="readmore">Read More</a>
                                        </div>
                                    </li>
                                    <li>
                                    	<a href="blog-detail.php" class="thumb"><img src="images/thumb2.gif" alt="" /></a>
                                        <div class="desc">
                                        	<h5><a href="blog-detail.php">Jamie reaches number 1 in</a></h5>
                                            <p>Lorem ipsum dolor sit amet, ectetur adipiscing elit. In tellus orci,</p>
                                            <a href="blog-detail.php" class="readmore">Read More</a>
                                        </div>
                                    </li>
                                    <li>
                                    	<a href="blog-detail.php" class="thumb"><img src="images/thumb3.gif" alt="" /></a>
                                        <div class="desc">
                                        	<h5><a href="blog-detail.php">Jamie reaches number 1 in</a></h5>
                                            <p>Lorem ipsum dolor sit amet, ectetur adipiscing elit. In tellus orci,</p>
                                            <a href="blog-detail.php" class="readmore">Read More</a>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <!-- Now Playing End -->
                            <div class="clear"></div>
                        </div>
                    </div>
                    <div class="box-small">
                    	<h1 class="heading">Blog ARCHIVE</h1>
                        <div class="box-in">
                        	<!-- Now Playing Start -->
                        	<div class="widget-links">
                            	<ul>
                                	<li><a href="blog-detail.php#"><span>JULY 2012</span><span>23</span></a></li>
                                    <li><a href="blog-detail.php#"><span>June 2012</span><span>123</span></a></li>
                                    <li><a href="blog-detail.php#"><span>May 2012</span><span>89</span></a></li>
                                    <li><a href="blog-detail.php#"><span>April 2012</span><span>21</span></a></li>
                                    <li><a href="blog-detail.php#"><span>March 2012</span><span>32</span></a></li>
                                    <li><a href="blog-detail.php#"><span>February 2012</span><span>22</span></a></li>
                                    <li><a href="blog-detail.php#"><span>January 2012</span><span>100</span></a></li>
                                    <li><a href="blog-detail.php#"><span>2011</span><span>99</span></a></li>
                                    <li><a href="blog-detail.php#"><span>2010</span><span>98</span></a></li>
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
            

<?php
include 'footer.php';
?>