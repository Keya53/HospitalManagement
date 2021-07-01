<div class="col-md-12">
<h3 class="text-center">Sub Table List</h3>
	<table class="table table-bordered">
		<tr>

			<th>Category Id</th>			
			<th>Subcategory Nname</th>
			<th>Category Name</th>
			<th>Edit</th>
		</tr>



		<?php foreach ($posts as $sub) {
		?>
			<tr>
				<td><?php echo $sub['category_id'] ?></td>
				
				<td><?php echo $sub['subcategory_name'] ?></td>
				<td><?php echo $sub['category_name'] ?></td>
				<td><a href="<?php echo base_url() . 'SubCategory/subTableEdit?id=' . $sub['subcategory_id'] ?>">Edit</a></td>


			</tr>




		<?php

		}
		?>
	</table>


</div>

</div>
