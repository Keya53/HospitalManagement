<div class="col-md-12" style="margin-top: 10px;">
	<div class="col-md-6">
		<h4 style="font-weight: bold;">Hello <?php echo $this->session->user_name.'('.strtoupper($this->session->user_type).')'; ?></h4>
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
			<li><a href="<?php echo base_url() . 'Post/index' ?>">Post </a></li>
			<li><a href="<?php echo base_url() . 'Post/create' ?>">Add Post </a></li>
		</ul>

	</nav>
</div>
<?php
$messageClass = 'alert-info';
$flashMsg = '';
 if($flashMsg = $this->session->flashdata('error')) {
	$messageClass = "alert-danger";
	unset($_SESSION['error']);
} elseif($flashMsg = $this->session->flashdata('info')) {
	$messageClass = "alert-info";
	unset($_SESSION['info']);
}
 elseif($flashMsg = $this->session->flashdata('success')) {
	$messageClass = "alert-success";
	unset($_SESSION['success']);
}
?>
<?php if($flashMsg != "") {
	?>
	<div class="colo-md-12 flashMessageHtml">
		<div class="col-md-6 col-md-offset-3 alert <?php echo $messageClass;?>">
		<?php echo $flashMsg;?>
		</div>
	</div>
	<?php

}?>

