<?php
session_start();
?>

<?php
Include 'header.php';
?>


        <div class="clear"></div>
        <div class="inner shadow">
		<!-- Second Level Navigation Start -->
				<div class="second-nav">
                <ul>
                    <li><a href="entertainment.php">Entertainment</a></li>
                    <li><a href="technology.php">Technlogy</a></li>
                    <li><a href="sports.php">Sports</a></li>
                    <li><a href="academics.php">Academics</a></li>
                    <li><a href="business.php">Business</a></li>
                </ul>
            </div>
				<!-- Second Level Navigation End -->
        	<!-- Banner Start -->
            <div id="banner" class="row ">
			    <div class="container row">
            	<div class="eight columns left hidemobile">
                <div class="slider-wrapper theme-default">
                    <div id="slider" class="nivoSlider">
                        <a href="index.php#"><img src="images/elani.jpg" title="#banner1" alt="" /></a>
                        <a href="index.php#"><img src="images/rugby.jpg" title="#banner2" alt="" /></a>
                        <a href="index.php#"><img src="images/fans.jpg" title="#banner3" alt="" /></a>
                        <a href="index.php#"><img src="images/money.jpg" title="#banner4" alt="" /></a>
						<a href="index.php#"><img src="images/ihub.jpg" title="#banner5" alt="" /></a>
                    </div>
                    <!-- Banner Caption Start -->
                    <div id="banner1" class="nivo-html-caption">
                        <div class="capt-heading">
                        	<h1>Stunning <span class="colr">Elani</span> Magic</h1>
                            <h1>2016<span class="colr"> MAISHA-AFRICA AWARDS</span></h1>
                        </div>
                        <div class="capt-text">
                        	<h4 class="white">29 Mar 2016</h4>
                            <p>
                            	This is an IP focused training event for the SME's and other interested in intellectual Property issues.
                                <br>You can see the program for the event at the link http://www.wipo.int/meetings/en/details.jsp?meeting_id=39702
                            </p>
                        </div>
                    </div>
                    <!-- Banner Caption End -->
                    <!-- Banner Caption Start -->
                    <div id="banner2" class="nivo-html-caption">
                        <div class="capt-heading">
                        	<h1>Tour <span class="colr">RUGBY</span> WORLD</h1>
                            <h1>2016<span class="colr"> MOMBASA</span></h1>
                        </div>
                        <div class="capt-text">
                        	<h4 class="white">29 Jun 2016</h4>
                            <p>
                            	Jamie's track 'Everything You Didn't Do' as featured in the San Miguel advert in Spain
                            </p>
                        </div>
                    </div>
                    <!-- Banner Caption End -->
                    <!-- Banner Caption Start -->
                    <div id="banner3" class="nivo-html-caption">
                        <div class="capt-heading">
                        	<h1>Kenyan<span class="colr"> RUGBY FANS</span></h1>
                            <h1>2016<span class="colr"></span></h1>
                        </div>
                        <div class="capt-text">
                        	<h4 class="white">29 Jun 2016 </h4>
                            <p>
                            	Jamie's track 'Everything You Didn't Do' as featured in the San Miguel advert in Spain
                            </p>
                        </div>
                    </div>
                    <!-- Banner Caption End -->
                    <!-- Banner Caption Start -->
                    <div id="banner4" class="nivo-html-caption">
                        <div class="capt-heading">
                        	<h1>DOWN GOES <span class="colr">CHASE</span></h1>
                            <h1>2016<span class="colr"> Nairobi</span></h1>
                        </div>
                        <div class="capt-text">
                        	<h4 class="white">29 Jun 2016</h4>
                            <p>
                            	Jamie's track 'Everything You Didn't Do' as featured in the San Miguel advert in Spain
                            </p>
                        </div>
                    </div>
                    <!-- Banner Caption End -->
					<!-- Banner Caption Start -->
                    <div id="banner5" class="nivo-html-caption">
                        <div class="capt-heading">
                        	<h1>Tour <span class="colr">ROCK</span> THE WORLD</h1>
                            <h1>2012<span class="colr"> NYCITY</span></h1>
                        </div>
                        <div class="capt-text">
                        	<h4 class="white">29 Jun 2012 - Jamie reaches number 1 in the Spanish iTunes chart!</h4>
                            <p>
                            	Jamie's track 'Everything You Didn't Do' as featured in the San Miguel advert in Spain
                            </p>
                        </div>
                    </div>
                    <!-- Banner Caption End -->
                </div>
				</div>

            	<div class="eight columns right" >
				     <div style="background:#ffc400;text-align:center;padding:10px">
					     <a id="searchmapbutton" class="button">Search For event or Place</a>
						 <a id="closemap" class="button" style="display:none; float:right;background:#800000;color:#ffffff">close</a>
                     </div>
					
						
						<div style="display: none">
						  <div id="info-content">
							<table>
							  <tr id="iw-url-row" class="iw_table_row">
								<td id="iw-icon" class="iw_table_icon"></td>
								<td id="iw-url"></td>
							  </tr>
							  <tr id="iw-address-row" class="iw_table_row">
								<td class="iw_attribute_name">Address:</td>
								<td id="iw-address"></td>
							  </tr>
							  <tr id="iw-phone-row" class="iw_table_row">
								<td class="iw_attribute_name">Telephone:</td>
								<td id="iw-phone"></td>
							  </tr>
							  <tr id="iw-rating-row" class="iw_table_row">
								<td class="iw_attribute_name">Rating:</td>
								<td id="iw-rating"></td>
							  </tr>
							  <tr id="iw-website-row" class="iw_table_row">
								<td class="iw_attribute_name">Website:</td>
								<td id="iw-website"></td>
							  </tr>
							</table>
						  </div>
						</div>
				     <div id="map_canvas" style="width:100%; height:365px;display:none;"></div>
                     
			    </div>
				</div>
            </div>
            <!-- Banner End -->
            <div class="clear"></div>
            <!-- Container Start -->
            <div class="container row">
            	<!-- Event Counter Start -->
            	<div class="one-third column small-banners">
                	<a href="index.php#" class="thumb"><img src="images/img1.jpg" alt="" /></a>
                    <h1 class="title"><a class="white" href="timeline.php">Next Event</a></h1>
                    <div class="event-counter">
                    	<h3><a class="colr" href="timeline.php">Topfest- Letisko Piestany</a></h3>
                    	<div id="defaultCountdown"></div>
                    </div>
                </div>
                <!-- Event Counter End -->
                <!-- Just Arrived Start -->
                <div class="one-third column small-banners">
                	<a href="#" class="thumb"><img src="images/img2.jpg" alt="" /></a>
                    <h1 class="title"><a class="white" href="#">JUST ARRIVED</a></h1>
                </div>
                <!-- Just Arrived End -->
                <!-- Twitter Start -->
                <div class="one-third column tweet-banners">
                	<a href="index.php#" class="thumb"><img src="images/img3.jpg" alt="" /><span>&nbsp;</span></a>
                    <!-- Twitter Scroll Start -->
                    <div class="scroll-sec">
                    	<div id="logoscroll" class="scroller">
                        	<ul>
                            	<li>
                                	<div class="twitter-sec">
                                        <h4 class="white">Mike Robinson</h4>
                                        <p class="date">4 hours Ago</p>
                                        <p class="txt">
                                            If you enjoyed Nowhere Boy last night on Film4, you may like this 10 minute interview special with the stars/director.
                http://t.co/ivdhun4e
                                        </p>
                                    </div>
                                </li>
                                <li>
                                	<div class="twitter-sec">
                                        <h4 class="white">Mike Robinson</h4>
                                        <p class="date">4 hours Ago</p>
                                        <p class="txt">
                                            If you enjoyed Nowhere Boy last night on Film4, you may like this 10 minute interview special with the stars/director.
                http://t.co/ivdhun4e
                                        </p>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <a href="index.php#" class="follow">Follow Us Twitter</a>
                        <div class="controls">
                            <a id="logoPrevious">Previous</a>
                            <a id="logoNext">Next</a>
                        </div>
                    </div>
                    <!-- Twitter Scroll End -->
                </div>
                <!-- Twitter End -->
            </div>
            <!-- Banners End -->
           
            
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
                    	<p>Copyright <a href="index.php#">Maziara</a> 2016</p>
                    </div>
                    <!-- Copyrights End -->
                    <!-- Follow Us and Top Start -->
                    <div class="followus-top">
                    	<a href="index.php#top" class="top">TOP</a>
                        <!-- Follow Us Start -->
                    	<ul>
                        	<li><h6 class="white">Follow Us</h6></li>
                        	<li><a href="index.php#" class="facebook">&nbsp;</a></li>
                            <li><a href="index.php#" class="twitter">&nbsp;</a></li>
                        </ul>
                        <!-- Follow Us End -->
                    </div>
                    <!-- Follow Us and Top End -->
                </div>
            </div>
            <!-- Footer End -->
        </div>
        <div class="clear"></div>
		<div id="searchmap-box" style="width:248px;
			background:#262626;
			border:#2f2f2f solid 1px;
			display:none;
			z-index:19999;
			padding:10px;">
		<ul>
		    <a id="searchrestaurants" style="margin-bottom:10px;" class="button">Search For Restaurants</a>
			
			<a id="searchevent" class="button">Search For Events</a>
			<div id="restaurantform" style="display:none;">
				<li><h5 class="white">Enter City Name</h4></li>
				<div id="locationField">
					<li>
						<input id="autocomplete" placeholder="Enter a city"   type="text" class="bar" />
					</li>
				</div>
				<li><h5 class="white">Select Country</h4></li>
				<div id="controls">
					<select id="country">
						<option value="tz" >Tanzania</option>
						<option value="ug">Uganda</option>
						<option value="ke"selected >Kenya</option>
					</select>
				</div>
			
			</div>
			
		
		</ul>
		
		<div class="clear"></div>
	</div>

	<div id="listing" style="width:160px;
		background:#262626;
		border:#2f2f2f solid 1px;
		display:none;
		z-index:19999;
		">
	  <div style="
		height:300px;
		overflow: scroll;
		cursor: pointer;
		overflow-x: hidden;">
		  <table id="resultsTable">
			<tbody id="results"></tbody>
		  </table>
	  </div>
	  
	</div>
    </div>
</div>
<!-- Outer Wrapper End -->
<script>

    $(".myn").click(function(){
		
		var article=$(this).text();
		
        $.ajax({
            url: 'open_article.php',
            data: {'article':article },
            type: "POST",
            success: function(json) {
                window.location.href="blog-detail.php";
				
            },
            error: function(XMLHttpRequest, textStatus, errorThrown){
                 alert(errorThrown);
                }
            });
     });
	$('#menulock').click(function(){
	    
		$('#menunav').toggle();
	});
	$('#searchevent').click(function(){
	    
		searchevent();
		$.modal.close();
	});
	$('#searchrestaurants').click(function(){
	    $('#searchevent').hide();
		$('#searchrestaurants').hide();
		$('#restaurantform').show();
		
		
	});
	$('#closemap').click(function(){
	   $('#map_canvas').hide();
	   $('#closemap').hide();
	   
	});
	if($(window).width()>767){
	       $( '#galleryclass' ).switchClass("gallery-two-col","gallery-small");
		   $('#menulock').hide();
		   $('#menunav').show();
		   $('#map_canvas').show();
		   $('#searchmapbutton').click(function(){
		      if($('#map_canvas').is(":visible")){
			  
			    $('#searchmap-box').modal();
				$('#searchevent').show();
				$('#searchrestaurants').show();
				$('#restaurantform').hide();
			  }
		   });
		}else{
		   $( '#galleryclass' ).switchClass("gallery-small","gallery-two-col");
		   $('#menulock').show();
		   $('#menunav').hide();
		  
		   $('#searchmapbutton').click(function(){
		      
			  if($('#map_canvas').is(":hidden")){
			  
			    $('#closemap').show();
				$('#map_canvas').show();
			    initMap();
				$('#searchmap-box').modal();
				$('#searchevent').show();
				$('#searchrestaurants').show();
				$('#restaurantform').hide();
				
			  }
			  else if($('#map_canvas').is(":visible")&&$('#searchmap-box').is(":hidden")){
			    $('#searchmap-box').modal(); 
				$('#searchevent').show();
				$('#searchrestaurants').show();
				$('#restaurantform').hide();
			  }
			  
		      
		   });
		}
	$(window).resize(function(){
		if($(this).width()>767){
		   $( '#galleryclass' ).switchClass("gallery-two-col","gallery-small");
		   $('#menulock').hide();
		   $('#menunav').show();
		   $('#map_canvas').show();
		   if($('#closemap').is(":visible")){
		       $('#closemap').hide();
		   }
		   $('#searchmapbutton').click(function(){
		      if($('#map_canvas').is(":visible")){
			    $('#searchmap-box').modal();
				$('#searchevent').show();
				$('#searchrestaurants').show();
				$('#restaurantform').hide();
			  }
		   });
		}else{
		   $( '#galleryclass' ).switchClass("gallery-small","gallery-two-col");
		   $('#menulock').show();
		   $('#menunav').hide();
		   if($('#map_canvas').is(":visible")){
		       $('#closemap').show();
		   }
		   $('#searchmapbutton').click(function(){
		      if($('#map_canvas').is(":hidden")){
			  
			    $('#closemap').show();
				$('#map_canvas').show();
			    initMap();
				$('#searchmap-box').modal();
				$('#searchevent').show();
				$('#searchrestaurants').show();
				$('#restaurantform').hide();
				
			  }
			  else if($('#map_canvas').is(":visible")&&$('#searchmap-box').is(":hidden")){
			    $('#searchmap-box').modal(); 
				$('#searchevent').show();
				$('#searchrestaurants').show();
				$('#restaurantform').hide();
			  }
			  
			  
		   });
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
      // This example uses the autocomplete feature of the Google Places API.
      // It allows the user to find all hotels in a given place, within a given
      // country. It then displays markers for all the hotels returned,
      // with on-click details for each hotel.

      // This example requires the Places library. Include the libraries=places
      // parameter when you first load the API. For example:
      // <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_API_KEY&libraries=places">
      
	  
      var map, places, infoWindow;
      var markers = [];
      var autocomplete;
      var countryRestrict = {'country': 'ke'};
      var MARKER_PATH = 'https://maps.gstatic.com/intl/en_us/mapfiles/marker_orange';
      var hostnameRegexp = new RegExp('^https?://.+?/');
	  
	  var styles = [ 
	 {
		"featureType": "road",
		"stylers": [
		 { "color": "#000000" }
		]
	  },{
		"featureType": "landscape",
		"stylers": [
		 { "color": "#3d3d3d" }
		]
	  },{
		"elementType": "labels.text.fill",
		"stylers": [
		 { "color": "#808080" }
		]
	  },{
		"featureType": "poi",
		"stylers": [
		 { "color": "#161616" }
		]
	  },{
		"elementType": "labels.text",
		"stylers": [
		  { "saturation": 1 },
		  { "weight": 0.1 },
		  { "color": "#b3b3b3" }
		]
	  },{
	  }
	  
	  ];
       var locations = [
			['</p><strong>Beka Lounge</strong> <br>Madtraxx Album Launch<br>4 March 2016</p>', -1.2835345, 36.8199249],
			['</p><strong>Tamasha</strong><br>Reggae Night<br>12 March 2016</p>', -1.2664217, 36.8902172],
			['</p><strong>National Museum</strong><br>Picaso Art Gallery<br>14 March 2016</p>', -1.26664182, 36.78515],
			['</p><strong>Galileo Hill Lounge</strong><br>Smirnoff Ice Party<br> 20 March 2016</p>', -1.2678142, 36.8034052]

			];
      var countries = {
        'tz': {
          center: {lat: -6.353357, lng: 30.394325},
          zoom: 4
        },
        'ug': {
          center: {lat: 1.3671054, lng: 30.0584014},
          zoom: 3
        },
		'ke': {
          center: {lat: 0.2861982, lng: 39.0550645},
          zoom: 5
        }
      };

      function initMap() {
        map = new google.maps.Map(document.getElementById('map_canvas'), {
          zoom: countries['ke'].zoom,
          center: countries['ke'].center,
		  styles: styles
        });

        infoWindow = new google.maps.InfoWindow({
          content: document.getElementById('info-content')
        });

        // Create the autocomplete object and associate it with the UI input control.
        // Restrict the search to the default country, and to place type "cities".
        autocomplete = new google.maps.places.Autocomplete(
            /** @type {!HTMLInputElement} */ (
                document.getElementById('autocomplete')), {
              types: ['(cities)'],
              componentRestrictions: countryRestrict
            });
        places = new google.maps.places.PlacesService(map);

        autocomplete.addListener('place_changed', onPlaceChanged);

        // Add a DOM event listener to react when the user selects a country.
        document.getElementById('country').addEventListener(
            'change', setAutocompleteCountry);
      }
      function searchevent(){
	     var map = new google.maps.Map(document.getElementById('map_canvas'), {
		  zoom: 10,
		  center: new google.maps.LatLng(-1.2973051, 36.7338675),
		  mapTypeId: google.maps.MapTypeId.ROADMAP,
		  scrollwheel: false,
		  styles: styles
		});

		var infowindow = new google.maps.InfoWindow();
	     var marker, i;
         var image = 'images/marker.png';
		for (i = 0; i < locations.length; i++) {  
		  marker = new google.maps.Marker({
			position: new google.maps.LatLng(locations[i][1], locations[i][2]),
			map: map,
			icon:image
		  });

		  google.maps.event.addListener(marker, 'click', (function(marker, i) {
			return function() {
			  infowindow.setContent(locations[i][0]);
			  infowindow.open(map, marker);
			}
		  })(marker, i));
		}
	  }
      // When the user selects a city, get the place details for the city and
      // zoom the map in on the city.
      function onPlaceChanged() {
	  
        var place = autocomplete.getPlace();
        if (place.geometry) {
		  
          map.panTo(place.geometry.location);
          map.setZoom(15);
          search();
        } else {
          document.getElementById('autocomplete').placeholder = 'Enter a city';
        }
      }

      // Search for hotels in the selected city, within the viewport of the map.
      function search() {
        var search = {
          bounds: map.getBounds(),
          types: ['lodging','restaurant']
        };

        places.nearbySearch(search, function(results, status) {
		
          if (status === google.maps.places.PlacesServiceStatus.OK) {
		  
            clearResults();
            clearMarkers();
			
            // Create a marker for each hotel found, and
            // assign a letter of the alphabetic to each marker icon.
            for (var i = 0; i < results.length; i++) {
              var markerLetter = String.fromCharCode('A'.charCodeAt(0) + i);
              var markerIcon = MARKER_PATH + markerLetter + '.png';
              // Use marker animation to drop the icons incrementally on the map.
              markers[i] = new google.maps.Marker({
                position: results[i].geometry.location,
                animation: google.maps.Animation.DROP,
                icon: markerIcon
              });
              // If the user clicks a hotel marker, show the details of that hotel
              // in an info window.
              markers[i].placeResult = results[i];
              google.maps.event.addListener(markers[i], 'click', showInfoWindow);
              setTimeout(dropMarker(i), i * 100);
              addResult(results[i], i);
			  
            }
			  
			// document.getElementById("autocomplete").value = "";
			 $.modal.close();
			 $('#listing').modal();
          }
        });
      }

      function clearMarkers() {
        for (var i = 0; i < markers.length; i++) {
          if (markers[i]) {
            markers[i].setMap(null);
          }
        }
        markers = [];
      }

      // Set the country restriction based on user input.
      // Also center and zoom the map on the given country.
      function setAutocompleteCountry() {
        var country = document.getElementById('country').value;
        if (country == 'all') {
          autocomplete.setComponentRestrictions([]);
          map.setCenter({lat: 15, lng: 0});
          map.setZoom(2);
        } else {
          autocomplete.setComponentRestrictions({'country': country});
          map.setCenter(countries[country].center);
          map.setZoom(countries[country].zoom);
        }
        clearResults();
        clearMarkers();
      }

      function dropMarker(i) {
        return function() {
          markers[i].setMap(map);
        };
      }

      function addResult(result, i) {
        var results = document.getElementById('results');
        var markerLetter = String.fromCharCode('A'.charCodeAt(0) + i);
        var markerIcon = MARKER_PATH + markerLetter + '.png';

        var tr = document.createElement('tr');
        tr.style.backgroundColor = (i % 2 === 0 ? '#F0F0F0' : '#FFFFFF');
        tr.onclick = function() {
           google.maps.event.trigger(markers[i], 'click');
		   $.modal().close();
        };

        var iconTd = document.createElement('td');
        var nameTd = document.createElement('td');
        var icon = document.createElement('img');
        icon.src = markerIcon;
        icon.setAttribute('class', 'placeIcon');
        icon.setAttribute('className', 'placeIcon');
        var name = document.createTextNode(result.name);
        iconTd.appendChild(icon);
        nameTd.appendChild(name);
        tr.appendChild(iconTd);
        tr.appendChild(nameTd);
        results.appendChild(tr);	
      }

      function clearResults() {
        var results = document.getElementById('results');
        while (results.childNodes[0]) {
          results.removeChild(results.childNodes[0]);
        }
      }

      // Get the place details for a hotel. Show the information in an info window,
      // anchored on the marker for the hotel that the user selected.
      function showInfoWindow() {
        var marker = this;
        places.getDetails({placeId: marker.placeResult.place_id},
            function(place, status) {
              if (status !== google.maps.places.PlacesServiceStatus.OK) {
                return;
              }
              infoWindow.open(map, marker);
              buildIWContent(place);
            });
      }

      // Load the place information into the HTML elements used by the info window.
      function buildIWContent(place) {
        document.getElementById('iw-icon').innerHTML = '<img class="hotelIcon" ' +
            'src="' + place.icon + '"/>';
        document.getElementById('iw-url').innerHTML = '<b><a href="' + place.url +
            '">' + " "+place.name + '</a></b>';
        document.getElementById('iw-address').textContent = place.vicinity;

        if (place.formatted_phone_number) {
          document.getElementById('iw-phone-row').style.display = '';
          document.getElementById('iw-phone').textContent =
              place.formatted_phone_number;
        } else {
          document.getElementById('iw-phone-row').style.display = 'none';
        }

        // Assign a five-star rating to the hotel, using a black star ('&#10029;')
        // to indicate the rating the hotel has earned, and a white star ('&#10025;')
        // for the rating points not achieved.
        if (place.rating) {
          var ratingHtml = '';
          for (var i = 0; i < 5; i++) {
            if (place.rating < (i + 0.5)) {
              ratingHtml += '&#10025;';
            } else {
              ratingHtml += '&#10029;';
            }
          document.getElementById('iw-rating-row').style.display = '';
          document.getElementById('iw-rating').innerHTML = ratingHtml;
          }
        } else {
          document.getElementById('iw-rating-row').style.display = 'none';
        }

        // The regexp isolates the first part of the URL (domain plus subdomain)
        // to give a short URL for displaying in the info window.
        if (place.website) {
          var fullUrl = place.website;
          var website = hostnameRegexp.exec(place.website);
          if (website === null) {
            website = 'http://' + place.website + '/';
            fullUrl = website;
          }
          document.getElementById('iw-website-row').style.display = '';
          document.getElementById('iw-website').textContent = website;
        } else {
          document.getElementById('iw-website-row').style.display = 'none';
        }
      }
    </script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBCqiZjHPogtTYLZir3Kd5qheL8Jvae1jA&libraries=places&callback=initMap"
        async defer></script>
</body>
</html>