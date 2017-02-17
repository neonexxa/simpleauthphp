<?php 
session_start();
// die($_SESSION['name']);
if (isset($_SESSION['name'])) {
    header('Location: /index.php');
}

require 'header.php';
 ?>
<body style="background-color: #4CAF50">
	<div class="container">
		<div class="row">
			<form action="/processlogin.php" method="post" class="col s12 m12" style="margin-top: 100px; border:solid #26A69A; padding-bottom: 50px;border-radius: 15px; background-color: white">
				<h4 style="text-align: center;">Login</h4>
				<div class="row">
					<div class="input-field col s12">
			          <input name="name" id="name" type="text" class="validate">
			          <label for="name">Name</label>
			        </div>
				</div>
				<div class="row">
					<div class="input-field col s12">
			          <input name="password" id="password" type="password" class="validate">
			          <label for="passord">Password</label>
			        </div>
				</div>
				<button class="btn waves-effect waves-light" type="submit" name="action" value="login_form">Submit
    				<i class="material-icons right">send</i>
  				</button>
			</form>
		</div>
	</div>
	<?php 
        require 'footer.php';
     ?>
</body>
</html>