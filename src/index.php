<?php 
$page_title="WC English"; 
?>

<!DOCTYPE html>
<html>
<head>
<title>DCLM Webcast - Deeper Life Bible Church</title>

<!-- custom-theme -->
<?php @include "bin/libs/header.php"; ?>
</head>

<body>
<div class="main">
	<div class="logo">
		<h1><a href="/">DCLM WEBCAST</a></h1>
		<h3>English</h3>
	</div>
	<?php @include "bin/menu.php"; ?>
</div>
<?php @include "bin/mautic.php"; ?>			<!-- #myModal1	-->
<?php @include "bin/event_en.php"; ?>		<!-- #myModal2	-->
<?php @include "bin/resource.php"; ?>		<!-- #myModal3	-->
<?php @include "bin/contact_en.php"; ?>		<!-- #myModal4	-->
<?php @include "bin/testimony_en.php"; ?>	<!-- #myModal5	-->
<?php @include "bin/prequest_en.php"; ?>	<!-- #myModal6	-->
<?php @include "bin/apps.php"; ?>			<!-- #myModal7	-->

<div class="w3_agile_main_grids" >
	
	<?php
		require_once('bin/libs/db.php');

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
<div class="agileits_copyright"><p>© <?php echo date('Y') ?> Deeper Christian Life Ministry </a></p></div>
<script src="assets/js/bootstrap.js"></script>
</body>
</html>