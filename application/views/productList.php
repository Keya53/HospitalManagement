
<div class="col-md-12">
	<form action="" method="post">
		<form>
			<div class="form-group row">
				<label for="productName" class="col-sm-2 col-form-label">ProductName</label>
				<div class="col-sm-6">
					<input type="text" class="form-control" name="productName" placeholder="">
				</div>
			</div>
			<div class="form-group row">
				<label for="description" class="col-sm-2 col-form-label">Description</label>
				<div class="col-sm-6">

					<textarea class="form-control" name="description" placeholder="" cols="10" rows=""></textarea>
				</div>
			</div>
			<div class="form-group row">
				<label for="ActualPrice" class="col-sm-2 col-form-label">ActualPrice</label>
				<div class="col-sm-6">
					<input type="text" class="form-control" name="ActualPrice" placeholder="">
				</div>
			</div>
			<div class="form-group row">
				<label for="discount" class="col-sm-2 col-form-label">Discount</label>
				<div class="col-sm-6">
					<input type="text" class="form-control" name="discount" placeholder="">
				</div>
			</div>

			<div class="form-group row">
				<label for="category" class="col-md-2 col-form-label">Category</label>
				<div class="col-md-6">
					<select name="category" id="category">

						<?php foreach ($categorys as $category) {
						?>
							<option value="<?php echo $category['category_id'] ?>"><?php echo $category['category_name'] ?></option>
						<?php
						}
						?>


					</select>
				</div>
			</div>

			<div class="form-group row">
				<label for="SubCategory" class="col-md-2 col-form-label">SubCategory</label>
				<div class="col-md-6">
					<select name="SubCategory" id="">

						<?php foreach ($SubCategorys as $subCategory) {
						?>
							<option value="<?php echo $subCategory['subcategory_id'] ?>"><?php echo $subCategory['subcategory_name'] ?></option>
						<?php
						}
						?>


					</select>
				</div>
			</div>

			<div class="form-group">
				<div class="col-md-6 col-sm-offset-2">
					<input type="submit" class="btn btn-primary" name="submit" id="" value="Submit">
				</div>
			</div>




</div>
</form>


</form>

</div>
