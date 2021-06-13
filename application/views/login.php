<div class="col-md-4 col-md-offset-4">
	<h3>Login Page</h3>
	<form action="<?php echo base_url() . 'Authentication/login' ?>" method="POST">

		<div class="form-group">
			<label class="">User Id</label>
			<input class="form-control col-md-4" type="text" name="user_id" value=""><br><br>
		</div>
		<div class="form-group">
			<label class="">Password</label>
			<input class="form-control col-md-4" type="password" name="password" value=""><br>
		</div>

		<input type="submit" value="Login" class="btn btn-success margin-top-5">

</div>

</form>
</div>
