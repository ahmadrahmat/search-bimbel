
      <!-- Inner Header -->
      <section class="section-padding bg-dark inner-header">
         <div class="container">
            <div class="row">
               <div class="col-md-12 text-center">
                  <h1 class="mt-0 mb-3 text-white">Contact Us</h1>
                  <div class="breadcrumbs">
                     <!-- <p class="mb-0 text-white"><a class="text-white" href="#">Home</a>  /  <span class="text-success">Contact Us</span></p> -->
                  </div>
               </div>
            </div>
         </div>
      </section>
      <!-- End Inner Header -->
      <!-- Contact Us -->
      <section class="section-padding">
         <div class="container">
            <div class="row">
               <div class="col-lg-4 col-md-4">
                  <h3 class="mt-1 mb-5">Get In Touch</h3>
                  <h6 class="text-dark"><i class="mdi mdi-home-map-marker"></i> Address :</h6>
                  <p>Gorontalo, Indonesia</p>
                  <h6 class="text-dark"><i class="mdi mdi-phone"></i> Phone :</h6>
                  <p>+61 525 240 310</p>
                  <h6 class="text-dark"><i class="mdi mdi-deskphone"></i> Mobile :</h6>
                  <p>+61 525 240 310</p>
                  <h6 class="text-dark"><i class="mdi mdi-email"></i> Email :</h6>
                  <p><a class="text-success" href="mailto:cbot59@gmail.com" target="_blank">cbot59@gmail.com</a></p>
                  <h6 class="text-dark"><i class="mdi mdi-link"></i> Website :</h6>
                  <p><a class="text-info" href="<?= base_url() ?>"><?= substr(base_url(),7,-1) ?></a></p>
                  <div class="footer-social"><span>Follow : </span>
				  		<a href="https://www.facebook.com/rivaldy.saputra" target="_blank"><i class="mdi mdi-facebook"></i></a>
						<a href="https://instagram.com/rivaldi.dev" target="_blank"><i class="mdi mdi-instagram"></i></a>
						<a href="https://www.linkedin.com/in/cbot59/" target="_blank"><i class="mdi mdi-linkedin"></i></a>
                  </div>
               </div>
               <div class="col-lg-8 col-md-8">
                  <div class="card">
                     <div class="card-body">
                        <div id="map"></div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <!-- End Contact Us -->
      <!-- Contact Me -->
      <!-- <section class="section-padding  bg-white">
         <div class="container">
            <div class="row">
               <div class="col-lg-12 col-md-12 section-title text-left mb-4">
                  <h2>Contact Us</h2>
               </div>
               <form class="col-lg-12 col-md-12" name="sentMessage" id="contactForm" novalidate>
                     <div class="control-group form-group">
                        <div class="controls">
						   <label>Full Name <span class="text-danger">*</span></label>
                           <input type="text" placeholder="Full Name" class="form-control" id="name" required data-validation-required-message="Please enter your name.">
                           <p class="help-block"></p>
                        </div>
                     </div>
                     <div class="row">
                        <div class="control-group form-group col-md-6">
						   <label>Phone Number <span class="text-danger">*</span></label>
                           <div class="controls">
                              <input type="tel" placeholder="Phone Number" class="form-control" id="phone" required data-validation-required-message="Please enter your phone number.">
                           </div>
                        </div>
                        <div class="control-group form-group col-md-6">
                           <div class="controls">
						      <label>Email Address <span class="text-danger">*</span></label>
                              <input type="email" placeholder="Email Address"  class="form-control" id="email" required data-validation-required-message="Please enter your email address.">
                           </div>
                        </div>
                     </div>
                     <div class="control-group form-group">
                        <div class="controls">
						   <label>Message <span class="text-danger">*</span></label>
                           <textarea rows="4" cols="100" placeholder="Message"  class="form-control" id="message" required data-validation-required-message="Please enter your message" maxlength="999" style="resize:none"></textarea>
                        </div>
                     </div>
                     <div id="success"></div>
                     For success/fail messages
                     <button type="submit" class="btn btn-success">Send Message</button>
               </form>
            </div>
         </div>
      </section> -->
      <!-- End Contact Me -->
      <!-- Google Map Api -->
      <script>
         function initMap() {
         	var uluru = {
         		lat: 0.543944,
         		lng: 123.059761
         	};
         	var map = new google.maps.Map(document.getElementById('map'), {
         		zoom: 13,
         		center: uluru,
         		styles: [{
         				elementType: 'geometry',
         				stylers: [{
         					color: '#64DDBA'
         				}]
         			},
         			{
         				elementType: 'labels.text.stroke',
         				stylers: [{
         					color: '#64DDBA'
         				}]
         			},
         			{
         				elementType: 'labels.text.fill',
         				stylers: [{
         					color: '#34495E'
         				}]
         			},
         			{
         				featureType: 'administrative.locality',
         				elementType: 'labels.text.fill',
         				stylers: [{
         					color: '#8A8A8A'
         				}]
         			},
         			{
         				featureType: 'poi',
         				elementType: 'labels.text.fill',
         				stylers: [{
         					color: '#8A8A8A'
         				}]
         			},
         			{
         				featureType: 'poi.park',
         				elementType: 'geometry',
         				stylers: [{
         					color: '#263c3f'
         				}]
         			},
         			{
         				featureType: 'poi.park',
         				elementType: 'labels.text.fill',
         				stylers: [{
         					color: '#6b9a76'
         				}]
         			},
         			{
         				featureType: 'road',
         				elementType: 'geometry',
         				stylers: [{
         					color: '#ABABAB'
         				}]
         			},
         			{
         				featureType: 'road',
         				elementType: 'geometry.stroke',
         				stylers: [{
         					color: '#212a37'
         				}]
         			},
         			{
         				featureType: 'road',
         				elementType: 'labels.text.fill',
         				stylers: [{
         					color: '#9ca5b3'
         				}]
         			},
         			{
         				featureType: 'road.highway',
         				elementType: 'geometry',
         				stylers: [{
         					color: '#34495E'
         				}]
         			},
         			{
         				featureType: 'road.highway',
         				elementType: 'geometry.stroke',
         				stylers: [{
         					color: '#1f2835'
         				}]
         			},
         			{
         				featureType: 'road.highway',
         				elementType: 'labels.text.fill',
         				stylers: [{
         					color: '#f3d19c'
         				}]
         			},
         			{
         				featureType: 'transit',
         				elementType: 'geometry',
         				stylers: [{
         					color: '#2f3948'
         				}]
         			},
         			{
         				featureType: 'transit.station',
         				elementType: 'labels.text.fill',
         				stylers: [{
         					color: '#8A8A8A'
         				}]
         			},
         			{
         				featureType: 'water',
         				elementType: 'geometry',
         				stylers: [{
         					color: '#F2F6FF'
         				}]
         			},
         			{
         				featureType: 'water',
         				elementType: 'labels.text.fill',
         				stylers: [{
         					color: '#BCBCBC'
         				}]
         			},
         			{
         				featureType: 'water',
         				elementType: 'labels.text.stroke',
         				stylers: [{
         					color: '#F2F6FF'
         				}]
         			}
         		]
         	});
         	var contentString = '<div id="content">' +
         		'<div class="pl-3 pr-3 pt-3 pb-3" id="bodyContent">' +
         		'<h6 class="text-dark"><i class="mdi mdi-home-map-marker"></i> Address :</h6><p>86 Petersham town, New South wales Waedll Steet, Australia PA 6550</p><h6 class="text-dark"><i class="mdi mdi-deskphone"></i> Mobile :</h6><p>(+20) 220 145 6589, +91 12345-67890</p><h6 class="text-dark"><i class="mdi mdi-email"></i> Email :</h6><p>iamosahan@gmail.com, info@gmail.com</p><h6 class="text-dark"><i class="mdi mdi-link"></i> Website :</h6><p>www.askbootstrap.com</p><div class="footer-social"><span>Follow : </span><a href="#"><i class="mdi mdi-facebook"></i></a><a href="#"><i class="mdi mdi-twitter"></i></a><a href="#"><i class="mdi mdi-instagram"></i></a><a href="#"><i class="mdi mdi-google"></i></a></div>' +
         		'</div>' +
         		'</div>';
         
         	var infowindow = new google.maps.InfoWindow({
         		content: contentString,
         		maxWidth: 300
         	});
         	var image = 'img/marker.png';
         	var marker = new google.maps.Marker({
         		position: uluru,
         		map: map,
         		icon: image
         	});
         	marker.addListener('click', function() {
         		infowindow.open(map, marker);
         	});
         }
          
      </script>
      <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBUsOUkZbTEwLxeUN5Qfag6Vr5BjngCGMY&amp;callback=initMap"></script>