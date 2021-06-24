<div class="col-md-offset-4">
	<h3>Registration Page</h3>
	<form class="form-horizontal col-md-12" action=<?php echo base_url() . 'Registration/signup' ?> method="POST">
		<div class=row>
			<div class="col-md-6">
				<div class="form-group">
					<label class="" for="user_name">Name</label>
					<input class="form-control col-md-4" type="text" name="user_name" id="user_name" value=""><br><br>

				</div>
			</div>
			<div class="col-md-6">
				<?php echo form_error('user_name', "<div class='text-primary'>", "</div>") ?>
			</div>
		</div>
		<div class=row>
			<div class="col-md-6">
				<div class="form-group">
					<label class="">User Id (used for login)</label>
					<input class="form-control col-md-4" type="text" name="user_id" value=""><br><br>

				</div>
			</div>
			<div class="col-md-6">
				<?php echo form_error('user_id', "<div class='text-primary'>", "</div>") ?>
			</div>
		</div>



		<div class=row>
			<div class="col-md-6">
				<div class="form-group">
					<label class="">Password</label>
					<input class="form-control col-md-4" type="text" name="password" value=""><br><br>

				</div>
			</div>
			<div class="col-md-6">
				<?php echo form_error('password', "<div class='text-primary'>", "</div>") ?>
			</div>
		</div>

		<div class=row>
			<div class="col-md-6">
				<div class="form-group">
					<label class="">Email</label>
					<input class="form-control col-md-4" type="email" name="email" value=""><br><br>

				</div>
			</div>
			<div class="col-md-6">
				<?php echo form_error('email', "<div class='text-primary'>", "</div>") ?>
			</div>
		</div>

		<input type="submit" value="Submit" class="btn btn-success margin-top-5">
	</form>
</div>
