<!DOCTYPE html>
  <html>
    <head>
	<!..add title..>
	 <!--Import Google Icon Font-->
      <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
      <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>
	  

      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    </head>

    <body>
	
	<nav>
    <div class="nav-wrapper">
      <!..menu bar..>
      <ul id="nav-mobile" class="left hide-on-med-and-down">
	    <li><a href="sass.html">Logo</a></li>
        <li><a href="index.php">Home</a></li>
        <li><a href="#about">About</a></li>
        <li><a href="#contact">Contact</a></li>
		<li><a href="collapsible.html">User</a></li>
		<li><a href="login.html">logout</a></li>
		</ul>
		
		<ul class="right hide-on-med-and-down">
		<li><a href="sass.html"><i class="material-icons">search</i></a></li>
        <li><a href="badges.html"><i class="material-icons">view_module</i></a></li>
        <li><a href="index.php"><i class="material-icons">refresh</i></a></li>
		</ul>
    </div>
  </nav>
  <div class="card-panel  purple lighten-2"><h4>Follow us to learn English Quickly!</h4></div>
  
	<!-- Dropdown Trigger -->
	
  <a class='dropdown-button btn' href='#' data-activates='dropdown1'>Drop Me!</a>

  <!-- Dropdown Structure -->
  <ul id='dropdown1' class='dropdown-content'>
  
    <li><a href="wordlist.php">new words</a></li>
    <li><a href="Lw.html">learnt words</a></li>
    <!..li class="divider"></li..>
    <li><a href="tsyrv.html">Test your vocabulary</a></li>
	 <li><a href="Pro.html">Progress</a></li>
  </ul>
        
  
    
	
	<div class="slider">
    <ul class="slides">
      <li>
        <img src="http://pedus.org/images/education-500.jpg"> <!-- random image -->
        <div class="caption center-align">
          <h3>Everyone can do it!</h3>
          <h5 class="light grey-text text-lighten-3">Learning English is simple.</h5>
		  
	
        </div>
      </li>
      <li>
        <img src="http://i.huffpost.com/gen/1310890/images/o-HIGHER-EDUCATION-facebook.jpg"> <!-- random image -->
        <div class="caption left-align">
          <h3>Follow us to Learn English</h3>
          <h5 class="light grey-text text-lighten-3">Self Learning is better than other methods</h5>
        </div>
      </li>
      <li>
        <img src="https://www.timeshighereducation.com/sites/default/files/styles/the_breaking_news_image_style/public/Pictures/web/l/i/f/learn-english-button-mac-keyboard.jpg?itok=a7MqcBkE"> <!-- random image -->
        <div class="caption right-align">
          <h3></h3>
          <h5 class="light grey-text text-lighten-3">Stay for a while and try this.</h5>
        </div>
      </li>
      <li>
        <img src="https://education.ufl.edu/english-education/files/2016/03/english-ed-degrees-masters-1024x584.jpg"> <!-- random image -->
        <div class="caption center-align">
          <h3>Actually,this is real learning!</h3>
          <h5 class="light grey-text text-lighten-3">We are here to give you up.</h5>
        </div>
      </li>
    </ul>
  </div>
  
  <!--Import jQuery before materialize.js-->
      <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
      <script type="text/javascript" src="js/materialize.min.js"></script>
	  
	<script>
	$(document).ready(function(){
      $('.slider').slider({full_width: true});
    });
	</script>
	
	
</ul>

<!-- About Section -->
<section id="about">
	<div class="large-card">
        <div class="col s12 m6">
          <div class="card blue-grey darken-1">
            <div class="card-content white-text">
              <span class="card-title">About Us</span>
			  <p> </p>
			  <br><br>
              <p>I am a very simple card. I am good at containing small bits of information.
              I am convenient because I require little markup to use effectively.I am a very simple card. I am good at containing small bits of information.
              I am convenient because I require little markup to use effectively.I am a very simple card. I am good at containing small bits of information.
              I am convenient because I require little markup to use effectively.I am a very simple card. I am good at containing small bits of information.
              I am convenient because I require little markup to use effectively.I am a very simple card. I am good at containing small bits of information.
              I am convenient because I require little markup to use effectively.I am a very simple card. I am good at containing small bits of information.
              I am convenient because I require little markup to use effectively.</p>
			  <p>I am a very simple card. I am good at containing small bits of information.
              I am convenient because I require little markup to use effectively.I am a very simple card. I am good at containing small bits of information.
              I am convenient because I require little markup to use effectively.I am a very simple card. I am good at containing small bits of information.
              I am convenient because I require little markup to use effectively.I am a very simple card. I am good at containing small bits of information.
              I am convenient because I require little markup to use effectively.I am a very simple card. I am good at containing small bits of information.
              I am convenient because I require little markup to use effectively.I am a very simple card. I am good at containing small bits of information.
              I am convenient because I require little markup to use effectively.</p>
			  
            </div>
            
          </div>
        </div>
      </div>
</section>            

	
	<!-- Contact Section -->
    <section id="contact">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">Contact Us</h2>
                    
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <form name="sentMessage" id="contactForm" novalidate>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Your Name *" id="name" required data-validation-required-message="Please enter your name.">
                                    <p class="help-block text-danger"></p>
                                </div>
                                <div class="form-group">
                                    <input type="email" class="form-control" placeholder="Your Email *" id="email" required data-validation-required-message="Please enter your email address.">
                                    <p class="help-block text-danger"></p>
                                </div>
                                <div class="form-group">
                                    <input type="tel" class="form-control" placeholder="Your Phone *" id="phone" required data-validation-required-message="Please enter your phone number.">
                                    <p class="help-block text-danger"></p>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <textarea class="form-control" placeholder="Your Message *" id="message" required data-validation-required-message="Please enter a message."></textarea>
                                    <p class="help-block text-danger"></p>
                                </div>
                            </div>
                            <div class="clearfix"></div>
                            <div class="col-lg-12 text-center">
                                <div id="success"></div>
                                <button type="submit" class="btn btn-xl">Send Message</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
	
	
	<!..add footer..>
	<footer class="page-footer">
          <div class="container">
            <div class="row">
              <div class="col l6 s12">
                <h5 class="white-text">FEL</h5>
                <li><a class="grey-text text-lighten-3" href="#!">Home</a></li>
                <li><a class="grey-text text-lighten-3" href="#!">Coverage</a></li>
                <li><a class="grey-text text-lighten-3" href="#!">Bug</a></li><br><br><br>
				<li><h5 class="white-text">Help</h5></li>
                
                  <li><a class="grey-text text-lighten-3" href="#!">Help Center</a></li>
                  <li><a class="grey-text text-lighten-3" href="#!">Get Started</a></li>
				
				
              </div>
              <div class="col l4 offset-l2 s12">
                <h5 class="white-text">About</h5>
                <ul>
                  <li><a class="grey-text text-lighten-3" href="#!">About Us</a></li>
                  <li><a class="grey-text text-lighten-3" href="#!">Blog</a></li>
                  <li><a class="grey-text text-lighten-3" href="#!">Privacy Policy</a></li>
                  <li><a class="grey-text text-lighten-3" href="#!">Terms and Services</a></li><br><br>
				  <li><h5 class="white-text">Connect</h5></li>
                
                  <li><a class="grey-text text-lighten-3" href="#!">Face Book</a></li>
                  <li><a class="grey-text text-lighten-3" href="#!">Twitter</a></li>
				
				  
                </ul>
              </div>
			  
			 
			  
			  
            </div>
          </div>
          <div class="footer-copyright">
            <div class="container">
            © 2016 Copyright Text
            <a class="grey-text text-lighten-4 right" href="#!">More Links</a>
            </div>
          </div>
        </footer>
	
	
	
		
	
      
    </body>
  </html>