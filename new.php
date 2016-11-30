<!DOCTYPE html>











  <html>
    <head>
	<!..add title..>
	
	<div class="card-panel  purple lighten-2"><h4>Follow us to learn English quickly</h4></div>
      
	
	
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
        <li><a href="new.php">Home</a></li>
        <li><a href="badges.html">About</a></li>
        <li><a href="collapsible.html">Contact</a></li>
		<li><a href="collapsible.html">User</a></li>
		<li><a href="collapsible.html">logout</a></li>
		</ul>
		
		<ul class="right hide-on-med-and-down">
		<li><a href="sass.html"><i class="material-icons">search</i></a></li>
        <li><a href="badges.html"><i class="material-icons">view_module</i></a></li>
        <li><a href="collapsible.html"><i class="material-icons">refresh</i></a></li>
		</ul>
    </div>
  </nav>
  
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
	
	<!..add word list..>
	<div class="card-panel  cyan accent-3"><h6>Word List</h6></div>
	<ul class="collapsible" data-collapsible="accordion">
	
	
	<?php
$read = file_get_contents('doc2.txt');
$new = "";
for ($i=0; $i < strlen($read); $i++ ){
	$char = $read[$i];
	if ($char == " " or $char == "'" or (ord($char) >= ord('a') and ord($char) <= ord('z')) or (ord($char) >= ord('A') and ord($char) <= ord('Z'))){
		if (ord($char) >= ord('A') and ord($char) <= ord('Z')){
			$char = chr(ord($char)+32);
		}
		$new = $new.$char;
	}	
}

$new = preg_replace('/\s+/', ' ', $new);
$words = explode(" ", $new);
sort($words);

$pickedWord = $words[0];
$index = 0;
$count = 0;


$counters = array_count_values($words);
asort($counters);
$counters = array_reverse($counters);
$top250wordsWithCount = array_slice($counters, 0, 250);
//print_r($top250words);
$top250words = array_keys($top250wordsWithCount);
//print_r($top250words);

?>

	
    <?php foreach($top250words as $key=>$value): ?>
    <?php $link="https://translate.google.lk/#auto/si/";?>
		<div class="collection">
        <a href="https://translate.google.lk/#auto/si/"<?php $value; ?> class="collection-item"><?php echo $value; ?></a>
		</div>
       
    <?php endforeach; ?>


    
   
  
  
  
  
  
  
</ul>
	
	
	
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
	
	<script type="text/javascript">
	
		var words = document.getElementsByClassName('collection-item');
		for(i=0;i<words.length;i++){
			words[i].href=words[i].href+words[i].innerText;
		}
		
	
	</script>
	
	
		
	
      
    </body>
  </html>