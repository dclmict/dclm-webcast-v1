<!DOCTYPE html>
<html>
<head>
<title>Igbo - DCLM Webcast</title>
<?php $page_title="WC Igbo"; ?>
<?php require_once('../app/config/db.php'); ?>
<?php @include "menu/header.php"; ?>
</head>

<body>
<div class="main">
	<div class="logo">
		<h1><a href="/">DCLM WEBCAST</a></h1>
		<h3><a href="igbo">Igbo</a></h3>
	</div>

	<?php @include "menu/menu.php"; ?>
</div>

<?php @include "menu/mautic.php"; ?>				<!-- #myModal1-->
<?php @include "menu/event_por.php"; ?>			<!-- #myModal2-->
<?php @include "menu/resource.php"; ?>			<!-- #myModal3-->
<?php @include "menu/contact_por.php"; ?>		<!-- #myModal4-->
<?php @include "menu/testimony_por.php"; ?>		<!-- #myModal5	-->
<?php @include "menu/prequest_por.php"; ?>		<!-- #myModal6-->
<?php @include "menu/apps.php"; ?>				<!-- #myModal7-->

<div class="w3_agile_main_grids">
	
	<?php 
		//require_once('menu/libs/db.php');

		// Create connection
		$conn = Connect();


		$sql = "SELECT * FROM webcast_info LIMIT 1";
		$result = $conn->query($sql);

		if ($result->num_rows > 0) { // if any rows were returned
		$row = mysqli_fetch_assoc($result);
		// test if wins is greater than or over 5
		if($row['player'] == 'youtube'){
			$r = $row['ytid_igbo'];
			$e = $row['yt'];
			eval("?> $e <?php ");
		}
		else if($row['player'] == 'facebook'){
			$r = $row['fbid_igbo'];
			$e = $row['fb'];
			eval("?> $e <?php ");
		}		
		else{
			echo $row['mejs'];
		}
		} 

		$conn->close();

	?>


	<div class="agileits_w3layouts_main_grid_right">
		<section class="slider">
			<div class="flexslider">
				<ul class="slides">
					<li>
						<div class="w3ls_main_grid_right_grid">
							<!--<div class="w3l_net_worth">
								<h4>Diffusion en Direct</h4>
								<p> </p>
							</div>-->
							<div class="w3_main_grid_right_grid" id="binfo_por">
								<!-- load binfo_fr_in.php-->
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