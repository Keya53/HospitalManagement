<div class="col-md-12">
<h3 class="text-center">Category Management</h3>
	<form class="form-horizontal" action="<?php echo base_url() . 'Category/index' ?>" method="POST">
		<input type="hidden" name="category_id" value="<?php echo (isset($specific_playlist['category_id'])) ? $specific_playlist['category_id'] : '' ?>">
		<div class="form-group">
			<label for="inputEmail3" class="col-sm-2 control-label">Category Name</label>
			<div class="col-sm-6">
				<input type="text" class="form-control col-md-6" name="category_name" value="<?php echo (isset($specific_playlist['category_name'])) ? $specific_playlist['category_name'] : '' ?>">
			</div>
		</div>

		<div class="form-group">

			<div class="col-sm-6 col-sm-offset-2">
				<input type="submit" class="btn btn-primary" value="<?php echo (isset($specific_playlist)) ? 'Update' : 'Submit' ?>">
			</div>
		</div>

		<div class="col-md-8">

		</div>
	</form>

</div>


<table class="table table-bordered">

	
	<tr>
		<th>Category Id</th>
		<th>Category Name</th>
		
		
	</tr>
	<?php
	foreach ($playlists as $item) {
	?>

		<tr>
			<td><?php echo $item['category_id'] ?></td>
			<td><?php echo $item['category_name'] ?></td>
			
			<td><a href="<?php echo base_url() . 'Category/index?category_id=' . $item['category_id'] ?>">Edit</a></td>

		</tr>
	<?php

	}

	?>


</table>
