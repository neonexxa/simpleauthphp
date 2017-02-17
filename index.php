<?php 
session_start();
// die($_SESSION['name']);
if (isset($_SESSION['name'])) {
    $current_user = $_SESSION['name'];
}

require 'header.php';
 ?>

<body>
	<!-- begin navbar -->
	<nav>
	    <div class="nav-wrapper container">
			<a href="#" class="brand-logo">Logo</a>
			<ul id="nav-mobile" class="right hide-on-med-and-down">
			
			<?php 
            if (isset($current_user)) {
                echo '<li><a href="#">Hello, '.$current_user.'</a></li><li><a href="/logout.php">Logout</a></li>';
            } else {
                echo '	<li><a href="/login.php">Login</a></li>';
            }
             ?>
			</ul>
	    </div>
	</nav>
	<!-- ..end navbar -->
	<div class="carousel carousel-slider center" data-indicators="true">
	    <div class="carousel-fixed-item center">
	      <a class="btn waves-effect white grey-text darken-text-2">button</a>
	    </div>
	    <div class="carousel-item red white-text" href="#one!">
	      <h2>First Panel</h2>
	      <p class="white-text">This is your first panel</p>
	    </div>
	    <div class="carousel-item amber white-text" href="#two!">
	      <h2>Second Panel</h2>
	      <p class="white-text">This is your second panel</p>
	    </div>
	    <div class="carousel-item green white-text" href="#three!">
	      <h2>Third Panel</h2>
	      <p class="white-text">This is your third panel</p>
	    </div>
	    <div class="carousel-item blue white-text" href="#four!">
	      <h2>Fourth Panel</h2>
	      <p class="white-text">This is your fourth panel</p>
	    </div>
	</div>
	
	<div class="row">
		<div class="container">
			<div class="card hoverable">
			    <div class="card-content">
			      <p>This will be our news letter section.</p>
			    </div>
			    <div class="card-tabs">
			      <ul class="tabs tabs-fixed-width">
			        <li class="tab"><a href="#test4">News 1</a></li>
			        <li class="tab"><a class="active" href="#test5">News 2</a></li>
			        <li class="tab"><a href="#test6">News 3</a></li>
			      </ul>
			    </div>
			    <div class="card-content grey lighten-4">
			      <div id="test4">Test 1</div>
			      <div id="test5">Test 2</div>
			      <div id="test6">Test 3</div>
			    </div>
			</div>
		</div>
	</div>

	<!-- footer begin -->
	<footer class="page-footer">
      <div class="container">
        <div class="row">
          <div class="col l6 s12">
            <h5 class="white-text">Footer Content</h5>
            <p class="grey-text text-lighten-4">You can use rows and columns here to organize your footer content.</p>
          </div>
          <div class="col l4 offset-l2 s12">
            <h5 class="white-text">Links</h5>
            <ul>
              <li><a class="grey-text text-lighten-3" href="#!">Link 1</a></li>
              <li><a class="grey-text text-lighten-3" href="#!">Link 2</a></li>
              <li><a class="grey-text text-lighten-3" href="#!">Link 3</a></li>
              <li><a class="grey-text text-lighten-3" href="#!">Link 4</a></li>
            </ul>
          </div>
        </div>
      </div>
      <div class="footer-copyright">
        <div class="container">
        © 2014 Copyright Text
        <a class="grey-text text-lighten-4 right" href="#!">More Links</a>
        </div>
      </div>
    </footer>
    <!-- ..end footer -->
    
	<!-- js will be here -->
	<?php 
        require 'footer.php';
     ?>
	<script>
		$(document).ready(function(){
			$('.carousel.carousel-slider').carousel({fullWidth: true});	
		});
	</script>
</body>
</html>