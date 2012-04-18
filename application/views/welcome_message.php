
    <div class="container">
		<div class="hero-unit">
		<h1><span id="rub"> </span></h1> 
		</div>
    </div> <!-- /container -->

<script>
$(document).ready(function() {
	$.ajax({
	  url: '<?php echo(site_url("/api_data/"));?>',
	  success: function(data) {
    		$('#rub').html(data['value']);
  		},
	  dataType: 'JSON'
	  });
});
</script>