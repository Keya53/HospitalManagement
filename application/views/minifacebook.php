<?php
$msg = $this->session->flashdata('success');
if ($msg) {
?>
	<div class="row">
		<div class="col-md-6 alert alert-danger">
			<?php echo $msg; ?>
		</div>
	</div>
<?php
}
?>


<div class="container">
	<h3 class="col-md-offset-4" style="margin-bottom: 10px;">Make Your Post</h3>
	<form action="<?php 
	if(isset($post['id'])) {
		echo base_url().'post/update/'.$post['id'];
	} else {
		echo base_url() . 'post/create';
	}
	?>" method="post">


		<div class="form-group row">
			<label for="title" class="col-sm-2 ">Title</label>
			<div class="col-sm-4">
				<input type="text" name="title" class="form-control" id="title" placeholder="Title" value="<?php echo isset($post) ? $post['title'] : '' ?>">
			</div>
		</div>

		<div class="form-group row">
			<label for="description" class="col-sm-2 ">Description</label>
			<div class="col-sm-4">
				<textarea class="form-control" cols="10" rows="10" id="description" placeholder="Description" name="description"><?php echo isset($post['description']) ? $post['description'] : '' ?></textarea>

			</div>
		</div>

		<div class="form-group row">
			<label for="category_id" class="col-sm-2 ">Post Category</label>
			<div class="col-sm-4">
				<select name="category_id" id="category_id" class="form-control">
					<?php
					foreach ($categories as $category) {
					?>
						<option value="<?php echo $category['category_id'] ?>" 
						<?php echo (isset($post['category_id']) && $post['category_id'] == $category['category_id']) ? 'selected' : '' ?>
						><?php echo $category['category_name'] ?></option>
					<?php
					}
					?>

				</select>
			</div>
		</div>


		<input type="submit" value="Submit" class="btn btn-success margin-top-5">
	</form>


</div>
