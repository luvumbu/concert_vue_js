<!DOCTYPE html>
<html lang="en">

<head id="head">
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Bokonzi</title>
</head>
<link rel="icon" href="https://pbs.twimg.com/profile_images/1244325575659061249/YjvhVutG_400x400.jpg" type="image/gif" sizes="16x16">

<body>
	<?php
	include("app.php");
	include("link.php");
	?>
	<style>
		.h_left,
		.h_right {
			font-size: 2em;
		}
		.h_l_and_r{
			display: flex;	
			justify-content:space-between;	 
			border-bottom:1px solid rgba(0,0,0,0.2);
		}
		.h_left{
			display: flex;
			justify-content:space-between;		 
	 
		}
		.h_left div,
		.h_right div{
			padding: 25px;
		}
		.h_left div:hover,
		.h_right div:hover{
			cursor: pointer;
			background-color: black;
			color:white;
		}
		.section_src1_class{
			width: 100%;
			position: relative;
		}
		.section_class_1{
		 
			position: absolute;
			bottom: 0px;
			text-align: center;
			width: 450px;
	 
			margin: auto;		 
			color: white;
		}
		.section_class_1 h1 {
			font-size: 4em;
		}
		.section_class_1 p {
			font-size: 2em;
		}
		.parent_section_class_1{
		 
			width: 300px;
			margin: auto;
		}
		.section_w_80_px{
			width: 50%;
			margin: auto;
		 
		}
		.section_w_80_px i ,.section_w_80_px p{
			font-size: 1.5em;
			padding-top: 25px;
			text-align: justify;
		}
		.section_w_80_px h1{
			font-size: 2.5em;
			padding-bottom: 25px;
			margin-top: 75px;
			text-align: center;
		}
 
		.text_align_flex{
			text-align: center;
			
		}
	</style>
</body>

</html>