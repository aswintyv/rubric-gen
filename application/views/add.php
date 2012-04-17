<script type="text/javascript">

</script>
<div class="container">
 <div class="alert alert-success" style="visibility: <?php if($msg == '') echo 'hidden'?>">
  <a class="close" data-dismiss="alert">×</a>
  <?php echo $msg ?>
</div>
</div>
<div class="container">
Add new words to the growin dictionary !!<br> Add one entry per line in the text area and click the submit button to add the words into the database ! <br />
	<br />
	<div class="tabbable">
		  <ul class="nav nav-tabs">
			<li class="active">
				<a href="#1" data-toggle="tab">Add Adjectives</a>
			</li>
			<li>
				<a href="#2" data-toggle="tab">Add Nouns</a>
			</li>
		  </ul>
		 
		  <div class="tab-content">
			<div class="tab-pane active" id="1">
			  <form id="f_adjectives" action = "<?php echo(site_url('/rubric/add_process'));?>" class="well form-horizontal" method="POST">
			  <input type="hidden" name="what" value="adj"></input>
			  <textarea width="700" rows="15" style="width: 400px" name="value"></textarea>
			  <div class="form-actions" style="width:230px">
			  	<input type="submit" value="Add Adjectives!" class="btn btn-primary inp" id="b_adjectives">
			  </div>
			  </form>
			</div>
			<div class="tab-pane" id="2">
			  <form id="f_objects" action = "<?php echo(site_url('/rubric/add_process'));?>" class="well form-horizontal" method="POST">
			  <input type="hidden" name="what" value="noun"></input>
			  <textarea width="700" rows="15" style="width: 400px" name="value"></textarea>
			  <div class="form-actions" style="width:230px">
			  	<input type="submit" value="Add Objects!" class="btn btn-primary inp" id="b_nouns">
			  </div>
			  </form>
			</div>
		  </div>
		</div>
    </div> <!-- /container -->
