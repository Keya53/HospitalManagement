<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>

<body>

	<form action="<?php echo base_url() . 'PlayList/index' ?>" method="POST">
		<input type="hidden" name="id" value="<?php echo (isset($specific_playlist)) ? $specific_playlist['id']:'' ?>">
		<label>Play List Name</label>
		<input type="text" name="name" value="<?php echo (isset($specific_playlist)) ? $specific_playlist['name']:'' ?>">
		<input type="submit" value="<?php echo (isset($specific_playlist)) ? 'Update':'Submit' ?>">

	</form>

	<table class="" border="1px solid black">

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
				<td><?php echo $item['id']?></td>
				<td><?php echo $item['name']?></td>
				<td><?php echo $item['user_id']?></td>
				<td><a href="<?php echo base_url().'PlayList/index?id='.$item['id']?>">Edit</a></td>
				
			</tr>
		<?php

		}

		?>


	</table>


</body>

</html>
