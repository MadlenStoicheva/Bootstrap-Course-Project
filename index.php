<!DOCTYPE html>
<html>
<head>
	<title>Bootstrap Framework</title>
	<link rel="icon" href="img/left-image.png">
	<meta charset="utf-8">
	  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
	  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
	  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
	  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	  <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<header>
		<nav class="navbar navbar-expand-lg navbar-light bg-light">
	  <a class="navbar-brand" href="#">Bootstrap</a>
	  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
	    <span class="navbar-toggler-icon"></span>
	  </button>

	  <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
	    <ul class="navbar-nav ml-auto my-2 my-lg-0 mr-5">
	      <li class="nav-item active">
	        <a class="nav-link font-weight-bold" href="index.html">Home</a>
	      </li>
	      <li class="nav-item">
	        <a class="nav-link font-weight-bold" href="layout.html">Layout</a>
	      </li>
	      <li class="nav-item">
	        <a class="nav-link font-weight-bold" href="blog.html">Blog</a>
	      </li>
	    </ul>
	  </div>
	</nav>
		<div class="mt3">
			<div id="myCarousel" class="carousel slide" data-ride="carousel">

			  <!-- Indicators -->
			  <ul class="carousel-indicators">
			    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
			    <li data-target="#myCarousel" data-slide-to="1"></li>
			    <li data-target="#myCarousel" data-slide-to="2"></li>
			  </ul>
			  
			  <!-- The slideshow -->
			  <div class="carousel-inner">
			    <div class="carousel-item active  ">
			      <img class="w-100" src="img/bootstrap-nedir-nasil-kullanilir.jpg">
			    </div>
			    <div class="carousel-item  ">
			      <img class="w-100" src="img/bootstrap-icons-social.png">
			    </div>
			    <div class="carousel-item ">
			      <img class="w-100" src="img/bootstrap-4.jpg">
			    </div>
			  </div>
			  
			  <!-- Left and right controls -->
			  <a class="carousel-control-prev" href="#myCarousel" data-slide="prev">
			    <span class="carousel-control-prev-icon"></span>
			  </a>
			  <a class="carousel-control-next" href="#myCarousel" data-slide="next">
			    <span class="carousel-control-next-icon"></span>
			  </a>
			</div>
	</header>

	<main>
		<div class="container about-us mt-5 mb-5">
			<div class="row">
				<div class="col-lg-6">
					<img class="w-100 p-4" src="img/left-image.png">
				</div>
				<div class="col-lg-6 p-5">
					<div class="row">
					<h2>Bootstrap</h2>
					<p class="text-justify">Build responsive, mobile-first projects on the web with the world’s most popular front-end component library. Bootstrap is an open source toolkit for developing with HTML, CSS, and JS. Quickly prototype your ideas or build your entire app with our Sass variables and mixins, responsive grid system, extensive prebuilt components, and powerful plugins built on jQuery.
					</p>
					</div>
					<div class="row">
					<div class="col-lg-6">
						<h4>Components</h4>
						<p class="text-justify">Components and options for laying out your project, including wrapping containers, a powerful grid system, a flexible media object, and responsive utility classes. Over a dozen reusable components built to provide iconography, navigation and much more.</p>
						<button class="btn btn-primary float-right" type="submit">Read more</button>
					</div>
					<div class="col-lg-6">
						<h4>Utilities</h4>
						<p class="text-justify">For faster mobile-friendly and responsive development, Bootstrap includes dozens of utility classes for showing, hiding, aligning, and spacing content. Bootstrap 4 has a lot of utility/helper classes to quickly style elements without using any CSS code.</p>
						<button class="btn btn-primary float-right" type="submit" >Read more</button>
					</div>
					</div>
				</div>
			</div>
		</div>
	</main>

	<section class="container">
		<h2 class="text-center text-uppercase">How to Get Started</h1>
		<hr class="hr-line" >
		<div class="row">
			<div class="col-lg-6 mt-5">
				<h3>There are two ways to start using Bootstrap 4 on your own web site.</h3>
				<ul class="ml-5 mt-5">
					<li>Include Bootstrap 4 from a CDN</li>
					<li class="mt-2">Download Bootstrap 4 from getbootstrap.com</li>
				</ul>
			</div>
			<div class="col-lg-6 w-100">
				<div class="embed-responsive embed-responsive-16by9">
				<iframe class="embed-responsive-item"  src="https://www.youtube.com/embed/OU8wX88mulk" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
				</div>
			</div>
		</div>
	</section>

	<section id="boxes-containers">
		<div class="container">
			<h2 class="text-center text-uppercase">Components</h1>
			<hr class="hr-line" >
			<div class="row">
				<div class="col-xl-3 col-lg-6 col-md-6">
					<div class="boxes" data-toggle="modal" data-target="#modal">
					<h2>Modal</h2>
					<p>Use Bootstrap’s JavaScript modal plugin to add dialogs to your site for lightboxes, user notifications, or completely custom content.</p>
					</div>
					<!-- Modal -->
					<div class="modal fade" id="modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
					  <div class="modal-dialog modal-dialog-centered" role="document">
					    <div class="modal-content">
					      <div class="modal-header">
					        <h2 class="modal-title" id="exampleModalCenterTitle">Modal </h2>
					        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
					          <span aria-hidden="true">&times;</span>
					        </button>
					      </div>
					      <div class="modal-body">
					       <h3>How it works</h3>
					       <p>Before getting started with Bootstrap’s modal component, be sure to read the following as our menu options have recently changed.</p>
					       <ul class="ml-4">
					       		<li>Modals are built with HTML, CSS, and JavaScript. They’re positioned over everything else in the document and remove scroll from the <strong>body</strong> so that modal content scrolls instead.</li>
					       		<li>Bootstrap only supports one modal window at a time. Nested modals aren’t supported as we believe them to be poor user experiences.</li>
					       		<li>
					       		Modals use <strong>position: fixed</strong>, which can sometimes be a bit particular about its rendering. Whenever possible, place your modal HTML in a top-level position to avoid potential interference from other elements. You’ll likely run into issues when nesting a <strong>.modal</strong> within another fixed element.
					       		</li>
					       </ul>
					      </div>
					      <div class="modal-footer">
					        <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
					      </div>
					    </div>
					  </div>
					</div>

				</div>
				<div class="col-xl-3 col-lg-6 col-md-6">
					<div class="boxes" data-toggle="modal" data-target="#navbar">
					<h2>Navbar</h2>
					<p>Documentation and examples for responsive navigation header, the navbar. Includes support for branding, navigation, collapse plugin.</p>
					</div>

					<!-- Modal -->
					<div class="modal fade" id="navbar" tabindex="-1" role="dialog" aria-labelledby="navbarInfo" aria-hidden="true">
					  <div class="modal-dialog modal-dialog-centered" role="document">
					    <div class="modal-content">
					      <div class="modal-header">
					        <h2 class="modal-title" id="navbarInfo">Navbar </h2>
					        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
					          <span aria-hidden="true">&times;</span>
					        </button>
					      </div>
					      <div class="modal-body">
					       <h3>How it works</h3>
					       <p>Here’s what you need to know before getting started with the navbar:</p>
					       <ul class="ml-4">
					       		<li>Navbars require a wrapping <strong>.navbar</strong> with <strong>.navbar-expand{-sm|-md|-lg|-xl} </strong>for responsive collapsing and color scheme classes.</li>
					       		<li>Use Bootstrap <strong>spacing</strong> and <strong> flex</strong> utility classes for controlling spacing and alignment within navbars.</li>
					       		<li>
					       		Navbars are responsive by default, but you can easily modify them to change that. Responsive behavior depends on our Collapse JavaScript plugin.s
					       		</li>
					       </ul>
					      </div>
					      <div class="modal-footer">
					        <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
					      </div>
					    </div>
					  </div>
					</div>

				</div>
				<div class="col-xl-3 col-lg-6 col-md-6">
					<div class="boxes" data-toggle="modal" data-target="#carousel">
					<h2>Carousel</h2>
					<p>The carousel is a slideshow for cycling through a series of content, built with CSS 3D transforms and a bit of JavaScript. It works with images, etc.</p>
					</div>

					<!-- Modal -->
					<div class="modal fade" id="carousel" tabindex="-1" role="dialog" aria-labelledby="carouselInfo" aria-hidden="true">
					  <div class="modal-dialog modal-lg" role="document">
					    <div class="modal-content">
					      <div class="modal-header">
					        <h2 class="modal-title" id="carouselInfo">Carousel </h2>
					        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
					          <span aria-hidden="true">&times;</span>
					        </button>
					      </div>
					      <div class="modal-body">
					       <h3>How it works</h3>
					       <p>In browsers where the Page Visibility API is supported, the carousel will avoid sliding when the webpage is not visible to the user.</p>
					       <ul class="ml-4">
					       		<li>Carousels don’t automatically normalize slide dimensions. As such, you may need to use additional utilities or custom styles to appropriately size content. While carousels support previous/next controls and indicators, they’re not explicitly required. Add and customize as you see fit.</li>
					       		<li>The <strong>.active</strong> class needs to be added to one of the slides otherwise the carousel will not be visible. Also be sure to set a unique id on the <strong>.carousel</strong> for optional controls, especially if you’re using multiple carousels on a single page. Control and indicator elements must have a data-target attribute (or href for links) that matches the id of the <strong>.carousel </strong> element.</li>
					       		<li>
					       		The <strong>data-ride="carousel"</strong> attribute is used to mark a carousel as animating starting at page load. If you don’t use <strong>data-ride="carousel"</strong> to initialize your carousel, you have to initialize it yourself. 
					       		</li>
					       </ul>
					      </div>
					      <div class="modal-footer">
					        <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
					      </div>
					    </div>
					  </div>
					</div>

				</div>
				<div class="col-xl-3 col-lg-6 col-md-6">
					<div class="boxes" data-toggle="modal" data-target="#forms">
					<h2>Forms</h2>
					<p>Examples and usage guidelines for form control styles, layout options, and custom components for creating a wide variety of forms.</p>
					</div>

					<!-- Modal -->
					<div class="modal fade" id="forms" tabindex="-1" role="dialog" aria-labelledby="formslInfo" aria-hidden="true">
					  <div class="modal-dialog modal-lg" role="document">
					    <div class="modal-content">
					      <div class="modal-header">
					        <h2 class="modal-title" id="formsInfo">Forms </h2>
					        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
					          <span aria-hidden="true">&times;</span>
					        </button>
					      </div>
					      <div class="modal-body">
					       <h5>Overview</h5>
					       <ul class="ml-4">
					       		<li>Bootstrap’s form controls expand on Rebooted form styles with classes. Use these classes to opt into their customized displays for a more consistent rendering across browsers and devices.</li>
					       		<li>Be sure to use an appropriate <strong>type</strong> attribute on all inputs (e.g., <strong>email</strong> for email address or <strong>number</strong> for numerical information) to take advantage of newer input controls like email verification, number selection, and more.</li>
					       		<li>
					       		Textual form controls—like <strong>input</strong>s, selects, and <strong>textarea</strong>s—are styled with the<strong> .form-control</strong> class. Included are styles for general appearance, focus state, sizing, and more.
					       		</li>
					       		<li>
					       		More complex forms can be built using our grid classes. Use these for form layouts that require multiple columns, varied widths, and additional alignment options.	
					       		</li>
					       </ul>
					      </div>
					      <div class="modal-footer">
					        <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
					      </div>
					    </div>
					  </div>
					</div>

				</div>
			</div>

		</div>
	</section>

	<div class="container">
		<h2 class="text-center">BASICS ARE HERE</h2>
	  	<hr class="hr-line">
	  	<div class="row d-flex flex-wrap justify-content-center">
		  	<div class="m-5 img-learn-container2">
		  		<img class="s-learn rounded-circle shadow-lg rounded w-100" src="img\circle_1.jpg">
		  		<p class="title">Basics</p>
			    <div class="overlay rounded-circle"></div>
		  	</div>
		  	<div class="m-5 img-learn-container1">
		  		<img class="s-learn rounded-circle shadow-lg rounded w-100" src="img\circle_2.jpg">
		  		<p class="title">Styles</p>
			  <div class="overlay rounded-circle"></div>
		  	</div>
		  	<div class="m-5 img-learn-container">
			  <img class="s-learn rounded-circle shadow-lg rounded w-100" src="img\circle3.png" alt="" />
			  <p class="title">Layout</p>
			  <div class="overlay rounded-circle"></div>
		  	</div>
	  	</div>
	</div>

	<div class="container mb-5 " id="utilities">
		<h2 class="text-center mt-5">UTILITIES</h2>
	  	<hr class="hr-line">
	  	<div class="row">
	  	 <div class="accordion" id="accordionExample">
		  <div class="card">
		    <div class="card-header" id="headingOne">
		      <h2 class="mb-0">
		        <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
		          Borders
		        </button>
		      </h2>
		    </div>

		    <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
		      <div class="card-body">
		      	<p>Use border utilities to quickly style the border and border-radius of an element. Great for images, buttons, or any other element.</p>
		      	<ul class="ml-5">
		      		<li>Border color</li>
			      		<ul class="ml-5">
			      			<li><b>class: "border border-info"</b></li>
			      		</ul>
		      		</li>
		      		<li>Border-radius
			      		<ul class="ml-5">
			      			<li><b>class="rounded-circle"</b></li>
			      		</ul>
		      		</li>
		      		<li>Sizes</li>
			      		<ul class="ml-5">
			      			<li>Use <b>class="rounded-sm"</b> or <b>class="rounded-lg"</b> for larger or smaller border-radius. </li>
			      		</ul>
		      		</li>
		      	</ul>
		      </div>
		    </div>
		  </div>
		  <div class="card">
		    <div class="card-header" id="headingTwo">
		      <h2 class="mb-0">
		        <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
		         Sizing
		        </button>
		      </h2>
		    </div>
		    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
		      <div class="card-body">
		       <p>Includes support for 25%, 50%, 75%, 100%, and auto by default. </p>
		      	<ul class="ml-5">
		      		<li>Relative to the parent</li>
			      		<ul class="ml-5">
			      			<li><b>class="w-25 p-3" , class="w-75 p-3" , class="w-auto p-3" </b></li>
			      			<li><b>class="h-50 d-inline-block" , class="h-100 d-inline-block"</b></li>
			      			<li>You can also use max-width: 100%; and max-height: 100%; utilities as needed.
			      				<ul class="ml-5"><li>
			      				<b>class="mw-100" , class="mh-100" </b></li></ul>
			      			</li>
			      		</ul>
		      		</li>
		      		<li>Relative to the viewport</li>
			      		<ul class="ml-5">
			      			<li><b>class="min-vw-100" , class="min-vh-100", class="vw-100", class="vh-100"
			      			</b> </li>
			      		</ul>
		      		</li>
		      	</ul>
		      </div>
		    </div>
		  </div>
		  <div class="card">
		    <div class="card-header" id="headingThree">
		      <h2 class="mb-0">
		        <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
		          Flex
		        </button>
		      </h2>
		    </div>
		    <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
		      <div class="card-body">
		        <p>Quickly manage the layout, alignment, and sizing of grid columns, navigation, components, and more with a full suite of responsive flexbox utilities. For more complex implementations, custom CSS may be necessary. </p>
		      	<ul class="ml-5">
		      		<li>Responsive variations exist for .d-flex and .d-inline-flex.
			      		<ul class="ml-5">
			      			<li><b>class="d-sm-flex" , class="d-md-flex" , class="d-xl-inline-flex" </b></li>
			      		</ul>
		      		</li>
		      		<li>Justify content
			      		<ul class="ml-5">
			      			<li>Use <b>justify-content</b> utilities on flexbox containers to change the alignment of flex items on the main axis (the x-axis to start, y-axis if <b>flex-direction: column</b>). Choose from start (browser default), end, center, between, or around.</li>
			      		</ul>
		      		</li>
		      	</ul>
		      </div>
		    </div>
		  </div>
		  <div class="card">
		    <div class="card-header" id="headingFour">
		      <h2 class="mb-0">
		        <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
		          Text
		        </button>
		      </h2>
		    </div>

		    <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordionExample">
		      <div class="card-body">
		        <ul class="ml-5">
			      	<li>Text alignment
			      		<ul class="ml-5">
			      			<li><b> class="text-center" , class="text-sm-left" , class="text-lg-right"</b></li>
			      		</ul>
			      	</li>
			      	<li>Wrap text with a <b>.text-wrap</b> class.
			      	</li>
			      	<li>Font weight and italics<br>
			      		<b>class="font-weight-bold", class="font-italic"</b>
			      	</li>
			    </ul>
		      </div>
		    </div>
		  </div>

		</div>
	  	</div>
	  </div>
	<footer>
	<div id="contact" class="container">
	  <h2 class="text-center">CONTACT US</h2>
	  <hr class="hr-line">
	  <div class="row">
	    <div class="col-sm-5">
	      <h3>Here is where you can find us.</h3>
	      <p><i class="fa fa-map-pin"></i>Bul. Bulgaria 256 B, Plovdiv</p>
	      <p><i class="fa fa-phone"></i>456-500-777</p>
	      <p><i class="fa fa-envelope"></i> student@gmail.com</p>
	      <div class="social-media-buttons">
	      	<a href="#" class="fa fa-facebook"></a>
			<a href="#" class="fa fa-linkedin"></a>
			<a href="#" class="fa fa-instagram"></a>
	      </div>
	    </div>
	    <div class="col-sm-7">
	      <div class="row">
	        <div class="col-sm-6 form-group">
	        	<label>Your Name</label>
	          <input class="form-control" id="name" name="name" type="text" required>
	        </div>
	        <div class="col-sm-6 form-group">
	        	<label>Your Email</label>
	          <input class="form-control" id="email" name="email" type="email" required>
	        </div>
	      </div>
	      <label>Comment</label>
	      <textarea class="form-control" id="comments" name="comments" rows="5"></textarea><br>
	      <div class="row">
	        <div class="col-lg-12">
	          <button class="btn btn-default pull-right submit" type="submit">Send Comment</button>
	        </div>
	      </div>
	    </div>
	  </div>
	</div>
	</footer>
</body>
</html>