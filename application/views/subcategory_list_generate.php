

<div class="col-md-12">
<h3 class="text-center">Sub Category Management</h3>
	<form class="form-horizontal" action="<?php echo base_url() . 'Subcategory/index' ?>" method="POST">
		<input type="hidden" name="subcategory_id" value="<?php echo (isset($specific_playlist)) ? $specific_playlist['subcategory_id'] : '' ?>">
		<div class="form-group">
			<label class="col-sm-2 control-label">Subcateogry Name</label>
			<div class="col-sm-6">
				<input type="text" class="form-control" name="subcategory_name" value="<?php echo (isset($specific_playlist)) ? $specific_playlist['subcategory_name'] : '' ?>">
			</div>
		</div>

		<div class="form-group">
			<label class="col-sm-2 control-label">Sub Category</label>
			<div class="col-sm-6">
				<select name="category_id" class="form-control">
				<?php foreach($categories as $categorie){
					?>
					<option value="<?php echo $categorie['category_id'];?>"
					<?php if(isset($specific_playlist['category_id']) && $specific_playlist['category_id'] == $categorie['category_id']) {echo "selected";}?>
					><?php echo $categorie['category_name'];?></option>

					<?php

				} ?>				
				</select>
				
			</select>
		</div>

		<div class="form-group">

			<div class="col-sm-6 col-sm-offset-2">
				<input type="submit" class="btn btn-primary margin-top-10" value="<?php echo (isset($specific_playlist)) ? 'Update' : 'Submit' ?>">
			</div>
		</div>

		
	</form>

</div>

<h3>Subcateogry List</h3>
<table class="table table-bordered">

	
	<tr>
		<th>Subcategory Id</th>
		<th>Subcategory Name</th>
		<th>Cateogry</th>
		<th>Edit</th>
		
	</tr>
	<?php
	foreach ($playlists as $item) {
	?>

		<tr>
			<td><?php echo $item['subcategory_id'] ?></td>
			<td><?php echo $item['subcategory_name'] ?></td>
			<td><?php echo $item['category_name'] ?></td>
			
			<td><a  href="<?php echo base_url() . 'Subcategory/index?subcategory_id=' . $item['subcategory_id'] ?>">Edit</a></td>
			<td><a href="<?php echo base_url() . 'Subcategory/deleteSubcategory?subcategory_id=' . $item['subcategory_id'] ?>">Delete</a></td>

		</tr>
	<?php

	}

	?>


</table>
