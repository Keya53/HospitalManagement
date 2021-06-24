<div class="col-md-12">
<h3 class="text-center">PlayList Management</h3>
	<form class="form-horizontal" action="<?php echo base_url() . 'PlayList/index' ?>" method="POST">
		<input type="hidden" name="id" value="<?php echo (isset($specific_playlist)) ? $specific_playlist['id'] : '' ?>">
		<div class="form-group">
			<label for="inputEmail3" class="col-sm-2 control-label">Play List Name</label>
			<div class="col-sm-6">
				<input type="text" class="form-control col-md-6" name="name" value="<?php echo (isset($specific_playlist)) ? $specific_playlist['name'] : '' ?>">
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

	<h3>List of Playlist Name</h3>
	<tr>
		<th>ID</th>
		<th>Name</th>
		<th>User Id</th>
		<th>Edit</th>
	</tr>
	<?php
	foreach ($playlists as $item) {
	?>

		<tr>
			<td><?php echo $item['id'] ?></td>
			<td><?php echo $item['name'] ?></td>
			<td><?php echo $item['user_id'] ?></td>
			<td><a href="<?php echo base_url() . 'PlayList/index?id=' . $item['id'] ?>">Edit</a></td>

		</tr>
	<?php

	}

	?>


</table>
