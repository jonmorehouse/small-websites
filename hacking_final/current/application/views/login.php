<h1>Login</h1>
<div id='login'>

	<form action="<?php echo site_url("application/login_post"); ?>" method="post">

		<span>Username:</span><input type='text' value='username' name='username' /><br />
		<span>Password:</span><input type='password' value='password' name='password' /><br />	
		<button type='submit'>Submit</button>
	</form>
</div>

<?php
	if (isset($this->users) && count($this->users) > 0) {

		echo "<div id='all_users'><ul>";
		echo "<h1>Invalid Login Credentials.</h1>";
		echo "<h1>Possible Users:</h1>";

		foreach ($this->users as $value)
			echo "<li>${value}</li>";

		echo "</ul></div>";
	}
?>