<?php 

$page_title="WC Portuguese"; 
?>

<!DOCTYPE html>
<html>
<head>
<title>Yoruba - DCLM Webcast</title>
<?php require_once('../app/controller/db.php'); ?>
<!-- custom-theme -->
<?php @include "../app/header.php"; ?>
</head>

<body>
<div class="main">
	<div class="logo">
		<h1><a href="yoruba">DCLM WEBCAST</a></h1>
		<h3>Yoruba</h3>
	</div>

	<?php @include "../app/menu.php"; ?>
</div>

<?php @include "../app/mautic.php"; ?>			<!-- #myModal1-->
<?php @include "../app/event_en.php"; ?>			<!-- #myModal2-->
<?php @include "../app/resource.php"; ?>		<!-- #myModal3-->
<?php @include "../app/contact_en.php"; ?>			<!-- #myModal4-->
<?php @include "../app/testimony_en.php"; ?>		<!-- #myModal5	-->
<?php @include "../app/prequest_en.php"; ?>		<!-- #myModal6-->
<?php @include "../app/apps.php"; ?>				<!-- #myModal7-->

<div class="w3_agile_main_grids">
	
	<?php 
		//require_once('../app/libs/db.php');

		// Create connection
		$conn = Connect();


		$sql = "SELECT * FROM webcast_info LIMIT 1";
		$result = $conn->query($sql);

		if ($result->num_rows > 0) { // if any rows were returned
		$row = mysqli_fetch_assoc($result);
		// test if wins is greater than or over 5
		if($row['player'] == 'youtube'){
			$r = $row['ytid_yor'];
			$e = $row['yt'];
			eval("?> $e <?php ");
		}
		else if($row['player'] == 'facebook'){
			$r = $row['fbid_yor'];
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
							<div class="w3_main_grid_right_grid" id="binfo_yor">
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
<div class="agileits_copyright"><p>© <?php echo date('Y') ?> Deeper Christian Life Ministry</a></p></div>
<script src="assets/js/bootstrap.js"></script>
</body>
</html>