<div class="col-md-offset-4">
	<h3>Login Page</h3>

	<?php if ($error = $this->session->flashdata('LoginFailed')) {
	?>
		<div class="row">
			<div class="col-md-6 alert alert-danger">
				<!-- <?=  $error; ?> -->
				<?php echo $error; ?>
			</div>
		</div>
	<?php
	} ?>


	<form action="<?php echo base_url() . 'Authentication/login' ?>" method="POST">
		<div class=row>
			<div class="col-md-6">
				<div class="form-group">
					<label class="">User Id</label>
					<input class="form-control col-md-4" type="text" name="user_id" value="<?php echo set_value('user_id'); ?>"><br><br>

				</div>
			</div>
			<div class="col-md-6">
				<?php echo form_error('user_id', "<div class='text-danger'>", "</div>") ?>
			</div>
		</div>
		<div class="row">
			<div class="form-group col-md-6">
				<label class="">Password</label>
				<input class="form-control col-md-4" type="password" name="password" value="<?php echo set_value('password'); ?>"><br>
			</div>
			<div class="col-md-6">
				<?php echo form_error('password', '<div class="text-danger">', '</div>') ?>
			</div>
		</div>
		<!-- <div class="row"> -->

		<input type="submit" value="Login" class="btn btn-success margin-top-5">
		<input type="reset" value="Reset" class="btn btn-danger margin-top-5">

		<a href="<?php echo base_url() . 'Registration/signup' ?>">Signup ?</a>
</div>

</form>
</div>
