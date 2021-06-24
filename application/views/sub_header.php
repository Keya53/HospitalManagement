<div class="col-md-12" style="margin-top: 10px;">
	<div class="col-md-6">
		<h4 style="font-weight: bold;">Hello <?php echo $this->session->user_name; ?></h4>
	</div>
	<div class="col-md-6" style="margin-bottom: 5px;">
		<a class="btn btn-danger btn-sm pull-right" href="<?php echo base_url() . 'Authentication/logout' ?>">Log Out</a>
	</div>
</div>
<div class="col-md-12">
	<nav class="navbar navbar-inverse">
		<ul class="nav navbar-nav">

			<li><a href="<?php echo base_url() . 'Category/index' ?>">Category</a></li>
			<li><a href="<?php echo base_url() . 'Subcategory/index' ?>">Sub Category</a></li>
			<li><a href="<?php echo base_url() . 'PlayList/index' ?>">Play List</a></li>
		</ul>

	</nav>
</div>
