<!DOCTYPE html>
<html>
<head>
<title>DCLM Webcast - Deeper Life Bible Church</title>
<?php $page_title="WC English"; ?>
<?php require_once('../app/config/db.php'); ?>
<?php @include "menu/header.php"; ?>
</head>

<body>
<div class="main">
	<div class="logo">
	<h1><a href="/">DCLM WEBCAST</a></h1>
		<h3><a href="/">English</a></h3>
	</div>

	<?php @include "menu/menu.php"; ?>
</div>
<?php @include "menu/mautic.php"; ?>			<!-- #myModal1	-->
<?php @include "menu/event_en.php"; ?>		<!-- #myModal2	-->
<?php @include "menu/resource_en.php"; ?>		<!-- #myModal3	-->
<?php @include "menu/contact_en.php"; ?>		<!-- #myModal4	-->
<?php @include "menu/testimony_en.php"; ?>	<!-- #myModal5	-->
<?php @include "menu/prequest_en.php"; ?>	<!-- #myModal6	-->
<?php @include "menu/apps.php"; ?>			<!-- #myModal7	-->


<div class="w3_agile_main_grids">

	<div id="ede">
		<form action="#" method="get" id="babel">
			<label>Language <select name="lang">
				<option value="en" selected>English (en)</option>
				<option value="es">Español / Spanish; Castilian (es)</option>
				<option value="fr">Français / French (fr)</option>
				<option value="it">Italiano / Italian (it)</option>
				<option value="pt">Português / Portuguese (pt)</option>
			</select>
			</label>
			<label>Stretching (Video Only)<select name="stretching">
				<option value="auto" selected>Auto (default)</option>
				<option value="responsive">Responsive</option>
				<option value="fill" selected>Fill</option>
				<option value="none" selected>None (original dimensions)</option>
			</select>
			</label>
		</form>
	</div>	

	<?php
		// Create connection
		$conn = Connect();

		$sql = "SELECT * FROM webcast_info LIMIT 1";
		$result = $conn->query($sql);

		if ($result->num_rows > 0) { // if any rows were returned
		$row = mysqli_fetch_assoc($result);
		
		//if-else statement to show youtube, facebook or mejs player
		if($row['player'] == 'youtube'){
			$r = $row['ytid_en'];
			$e = $row['yt'];
			eval("?> $e <?php ");
		}
		else if($row['player'] == 'facebook'){
			  $r = $row['fbid_en'];
			  $e = $row['fb'];
			  eval("?> $e <?php ");
		  }
		else{
			echo $row['mejs'];
		}
		}
		$conn->close();

	?>

	<div class="agileits_w3layouts_main_grid_right" >
		<section class="slider">
			<div class="flexslider">
				<ul class="slides">
					<li>
						<div class="w3ls_main_grid_right_grid" >
							<div class="w3_main_grid_right_grid" id="binfo">
							</div>
						</div>
					</li>
				</ul>
			</div>
		</section>
	</div>
	<div class="clear"> </div>
</div>
</div>
<?php @include 'menu/footer.php'; ?>
</body>
</html>