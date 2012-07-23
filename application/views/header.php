<!DOCTYPE html>
<html lang="en">
<head prefix="og: http://ogp.me/ns# fb: http://ogp.me/ns/fb# rubricme: http://ogp.me/ns/fb/rubricme#">
    <meta charset="utf-8">
    <title>Rubric.Me</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Le styles -->
    <link href="<?php echo(base_url())?>/assets/css/bootstrap.css" rel="stylesheet">
    <style>
      body {
        padding-top: 60px; /* 60px to make the container go all the way to the bottom of the topbar */
      }
      .bgdiv{
      	height: 300px;
      	overflow-y: hidden;
      	overflow-x: hidden;
      }
   
      .maintext{
  		 z-index: 10;
   		position: absolute;
   		margin-top: 100px;
   		margin-left: 0px;
   		color: #FFFFFF;
   		background-color: #000000;
   		opacity: 0.8;
   		padding-top: 5px;
   		padding-bottom: 5px;
   		
      }
      .bgimg{
      		float:left;
      		z-index: 1;
    	  	position: relative
      		top:0px;
      		width: 300px;
      		height: 150px;
      		overflow-x: hidden;
      		overflow-y: hidden;
      }
    </style>
    <?php $data =  (!isset($_GET['funval']))? file_get_contents(site_url("/api_data/")) : json_encode(array('value'=>$_GET['funval']));?>
    <link href="<?php echo(base_url())?>/assets/css/bootstrap-responsive.css" rel="stylesheet">

    <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

    <!-- Le fav and touch icons -->
    <link rel="shortcut icon" href="<?php echo(base_url())?>/assets/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="<?php echo(base_url())?>/assets/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="<?php echo(base_url())?>/assets/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="<?php echo(base_url())?>/assets/ico/apple-touch-icon-57-precomposed.png">
      <script src="<?php echo(base_url())?>/assets/js/jquery.js"></script>
      	<script type="text/javascript">
	var data = <?php print_r($data);?>
		

	</script>
  <meta property="fb:app_id" content="314513431971709" /> 
  <meta property="og:type"   content="rubricme:rubric" /> 
  <meta property="og:url"    content="http://rubric.me?funval=<?php $val  = json_decode($data); echo($val->value);?>" /> 
  <meta property="og:title"  content="<?php $val  = json_decode($data); echo($val->value);?>" /> 
  <meta property="og:image"  content="http://images.clipartof.com/small/1095745-Clipart-Rocker-Dude-Smiley-Emoticon-With-A-Star-Holding-Up-Fingers-And-Sticking-Out-A-Tongue-Royalty-Free-Vector-Illustration.jpg" /> 

      
  </head>

  <body>
  
     <script>
    
		/** Copy paste from Facebook doc - shit i'm a cheap ass :P **/
     (function(d){
         var js, id = 'facebook-jssdk', ref = d.getElementsByTagName('script')[0];
         if (d.getElementById(id)) {return;}
         js = d.createElement('script'); js.id = id; js.async = true;
         js.src = "//connect.facebook.net/en_US/all.js";
         ref.parentNode.insertBefore(js, ref);
       }(document));
      window.fbAsyncInit = function() {
        FB.init({
          appId      : '314513431971709', 
          channelUrl : 'http://rubric.me/channel.html', // Path to your Channel File
          status     : true, // check login status
          cookie     : true, // enable cookies to allow the server to access the session
          xfbml      : true  // parse XFBML
        });

		$(document).ready(function(){
		 	$('#welcome_msg').html('To connect using Facebook, please click  <a href="#" id="auth-loginlink" onClick="FB.login();">Here</a>');
		});
        FB.Event.subscribe('auth.statusChange', function(response) {
          if (response.authResponse) {
            FB.api('/me', function(me){
              if (me.name) {
              
                $('#welcome_msg').html('Welcome '+me.name+' !');
                postGeneratedRubric();
              }
            })
          } else {
          alert('adasdas');
            $('#welcome_msg').html('To connect using Facebook, please click  <a href="#" id="auth-loginlink" onClick="FB.login();">Here</a>');
          }
        });

      
      };
    
    
  function postGeneratedRubric()
  {
      FB.api(
        '/me/rubricme:generate',
        'post',
        { recipe: 'http://rubric.me?funval='+data['value'] },
        function(response) {
           if (!response || response.error) {
              alert('Yikes ! Something went wrong when publishing to facebook.');
           } else {
              $("#welcome_msg").html($("#welcome_msg").html() + '<br /> Cook was successful! Action ID: ' + response.id);
           }
        });
  }
      
    </script>
    
    <div id="welcome_msg" class="alert alert-error"></div>
    

    <div class="navbar navbar-fixed-top">
      <div class="navbar-inner">
        <div class="container">
          <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </a>
          <a class="brand" href="<?php echo(site_url('/rubric/'));?>">Rubric.me !</a>
         <div class="nav-collapse">
            <ul class="nav">
              <li class=""><a href="<?php echo(site_url('/rubric/'));?>">Home</a></li>
              <li><a href="<?php echo(site_url('/rubric/add'));?>">Add</a></li>
            </ul>
          </div><!--/.nav-collapse -->
        </div>
      </div>
    </div>
