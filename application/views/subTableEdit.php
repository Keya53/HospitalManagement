<div class="col-md-12" style="margin-top:20px">
	<form action="<?php echo base_url('Subcategory/updateSubTable/'.$editdata['subcategory_id'])?>" class="form-horizontal" method="post">
	<!-- <input type="hidden" name="subcategory_id" value="7"> -->
		<div class="form-group">
			<label class="control-label col-md-2">Subcateogry Name</label>
			<div class="col-md-4">
				<input type="text" name="subcategory_name" class="form-control" value="<?php echo (isset($editdata['subcategory_name'])) ? $editdata['subcategory_name'] : '' ?>">

			</div>
		</div>

		<div class="form-group">
			<label for="category_id" class="control-label col-md-2">Cateogry</label>
			<div class="col-md-4">
				<select name="category_id" id="category_id" class="form-control">
					<?php foreach ($categories as $category) { ?>
						<option value="<?php echo $category['category_id']?>"
						<?php echo(isset($editdata['category_id'])&&$editdata['category_id']==$category['category_id'])?'selected':''?>
						><?php  echo $category['category_name']?></option>
					<?php
					} ?>


				</select>

			</div>
		</div>

		<div class="form-group">
				<div class="col-sm-6 col-sm-offset-2">
					<input type="submit" class="btn btn-primary margin-top-10" value="Update">
				</div>
			</div>


	</form>

</div>
