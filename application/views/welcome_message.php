
    <div class="container">
		<div class="hero-unit bgdiv" style="padding-top:5px; padding-left:5px; padding-right: 5px; padding-bottom:5px">
				<div class="maintext"><h1><span id="rub"></span></h1></div> 
		<div id="imgtile" style="width:1200px">
		</div>
		</div>
    </div> <!-- /container -->

<script>
$(document).ready(function() {
function loadImages(text){
$.ajax({
	  url: 'https://ajax.googleapis.com/ajax/services/search/images?v=1.0&q=funny '+text+'&callback=processImages&rsz=8',
	  dataType: 'jsonp'
	  });

}
	$.ajax({
	  url: '<?php echo(site_url("/api_data/"));?>',
	  success: function(data) {
    		$('#rub').html(data['value']);
    		loadImages(data['value']);
  		},
	  dataType: 'JSON'
	  });
});

function processImages(data){
	console.log(data);
	var images = data['responseData']['results'];
	console.log(images);
	for(var i = 0; i< images.length; i++){
		var img = images[i];
		var imgObj = new Image();
		imgObj.src = img['url'];
		imgObj.onerror = function(){
		//alert('adasdas');
			var rand = Math.floor((Math.random()*8)+1);
			img = images[rand];
		};
		$('#imgtile').append('<div class="bgimg"> <img src="'+img['url']+'" width="300" height="'+(img['width']/300) * img['height']+'"/></div>')
	}
	
}
</script>