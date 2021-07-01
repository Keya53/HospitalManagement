<div class="col-md-12">
	<h3 class="text-center">Post List</h3>
	<table class="table table-bordered">


		<tr>
			<th>Id</th>
			<th>Title</th>
			<th>Description</th>
			<th>Category Name </th>
			<th>Created By</th>
			<th>Edit</th>



		</tr>
		<?php
		foreach ($posts as $item) {
		?>

			<tr>
				<td><?php echo $item['id'] ?></td>
				<td><?php echo $item['title'] ?></td>
				<td><?php echo $item['description'] ?></td>
				<td><?php echo $item['category_name'] ?></td>
				<td><?php echo $item['name'] ?></td>
				<td><a href="<?php echo base_url() . 'post/edit?id=' . $item['id'] ?>">Edit</a></td>



			</tr>
		<?php

		}

		?>


	</table>

</div>

