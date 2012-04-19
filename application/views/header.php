<!DOCTYPE html>
<html lang="en">
  <head>
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
  </head>

  <body>

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
