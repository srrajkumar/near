<!DOCTYPE html>
<html lang="en" class="no-js">
    <head>
		<meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
        <title>Animated Responsive Image Grid</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
        <meta name="description" content="Animated Responsive Image Grid - Cycling through a set of images in a responsive grid." />
        <meta name="keywords" content="grid, images, thumbnails, responsive, css3, jquery, javascript, random, transition, 3d, perspective" />
        <meta name="author" content="Codrops" />
        <link rel="shortcut icon" href="../favicon.ico"> 
        <link rel="stylesheet" type="text/css" href="css/demo.css" />
		<link rel="stylesheet" type="text/css" href="assets/css/grid-random.css" />
  <script src="assets/js/modernizr.custom.26633.js"></script>
		<noscript>
			<link rel="stylesheet" type="text/css" href="css/fallback.css" />
		</noscript>
		<!--[if lt IE 9]>
			<link rel="stylesheet" type="text/css" href="css/fallback.css" />
		<![endif]-->
    </head>
    <body>
<div id="ri-grid" class="ri-grid ri-grid-size-2">
          <ul>
            <li><a href="#"><img src="<?php IMAGE('team/anil-mathews.png') ?>"/></a></li>
            <li><a href="#"><img src="<?php IMAGE('team/shobhit-shukla.png') ?>"/></a></li>
            <li><a href="#"><img src="<?php IMAGE('team/madhu-therani.png') ?>"/></a></li>
            <li><a href="#"><img src="<?php IMAGE('team/justin-joseph.png') ?>"/></a></li>
            <li><a href="#"><img src="<?php IMAGE('team/rahul-agarwal.png') ?>"/></a></li>
            <li><a href="#"><img src="<?php IMAGE('team/andries.png') ?>"/></a></li>
            <li><a href="#"><img src="<?php IMAGE('team/cameron-curtis.png') ?>"/></a></li>
            <li><a href="#"><img src="<?php IMAGE('team/inotani-hisashi.png') ?>"/></a></li>
            <li><a href="#"><img src="<?php IMAGE('team/kenneth-parnham.png') ?>"/></a></li>
            <li><a href="#"><img src="<?php IMAGE('team/aditi-kohli.png') ?>"/></a></li>
            <li><a href="#"><img src="<?php IMAGE('team/michelle-zhou.png') ?>"/></a></li>
            <li><a href="#"><img src="<?php IMAGE('team/smriti-kataria.png') ?>"/></a></li>
            <li><a href="#"><img src="<?php IMAGE('team/himanchal-singh.png') ?>"/></a></li>
            <li><a href="#"><img src="<?php IMAGE('team/tony-c-scott.png') ?>"/></a></li>
            <li><a href="#"><img src="<?php IMAGE('team/jayachandra-reddy.png') ?>"/></a></li>
            <li><a href="#"><img src="<?php IMAGE('team/murali-veeraiyan.png') ?>"/></a></li>
          </ul>
        </div>
			
        <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
		<script type="text/javascript" src="assets/js/jquery.gridrotator.js"></script>
		<script type="text/javascript">	
			$(function() {
			
				$( '#ri-grid' ).gridrotator( {
					rows		: 2,
					columns		: 4,
					animType	: 'fadeInOut',
					animSpeed	: 500,
					interval	: 1500,
					step		: 5,
					w320		: {
						rows	: 2,
						columns	: 8
					},
					w240		: {
						rows	: 2,
						columns	: 8
					}
				} );
			
			});
		</script>
    </body>
</html>