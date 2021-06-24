<div class=" container col-md-4" style="margin-top: 20px;">

<?php echo form_open('Add_article/index');?>
  <div class="form-group">
    <label class="control-label col-sm-2" for="email">Email:</label>
    <div class="col-sm-10">
      <?php echo form_input(['type'=>'email','name'=>'email', 'class'=>'form-control','placeholder'=>'Enter email'])?>
	  <!-- <input type="email" class="form-control" id="email" placeholder="Enter email"> -->
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-sm-2" for="pwd">Password:</label>
    <div class="col-sm-10">
	<?php echo form_password(['type'=>'password', 'name'=>'password','class'=>'form-control','placeholder'=>'Enter password'])?>
	  <!-- <input type="password" class="form-control" id="pwd" placeholder="Enter password"> -->
    </div>
  </div>
 
  <div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
      <!-- <button type="submit" class="btn btn-default">Submit</button> -->
	  <?php echo form_submit(['type'=>'submit', 'class'=>'btn btn-Primary','value'=>'Submit'])?>
    </div>
  </div>
</form>
</div>
