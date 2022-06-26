<div class="header">
		<h2>Login: Admin</h2>
	</div>
	<form method="post" action="adminlogin.php">

		<?php echo display_error(); ?>

		<div class="input-group">
			<label>Email</label>
			<input type="text" name="email" required>
		</div>
		<div class="input-group">
			<label>Password</label>
			<input type="password" name="password"required>
		</div>
		<div class="w3-container">
		<button class="w3-button w3-red w3-round-large" name="login_admin" >Login</button>
		</div>