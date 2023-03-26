	<?php 
		require_once('libs/db.php');

		// Create connection
		$conn = Connect();

		$sql = "SELECT * FROM webcast_info LIMIT 1";
		$result = $conn->query($sql);

		if ($result->num_rows > 0) { // if any rows were returned
		$row = mysqli_fetch_assoc($result);
		
		//if-else statement to show result
		if($row['player'] == 'youtube')  {
			echo'<ul>
				<li class="agile_color">'.$row["mtitle_en"].'</i><i>Message Title</i></li>
				<li><span class="w3_agile_color"></span></li>
			</ul>
			
			<ul>
				<li class="agile_color">'.$row["mpreacher"].'<i>Speaker</i></li>
				<li><span class="w3_agile_color"></span></li>
			</ul>
			<ul>
				<li class="agile_color1">'.$row["ename_en"].'<i>Event Name</i></li>
				<li><span class="w3_agile_color"></span></li>
			</ul>
			<ul>
				<li class="agile_color1">'.$row["etag"].'<i>Event Tag</i></li>
				<li><span class="w3_agile_color"></span></li>
			</ul>
			<ul>
				<li class="agile_color3">'.$row["edate"].'<i>Event Date</i></li>
				<li><span class="w3_agile_color"></span></li>
			</ul>
			<ul>
				<li class="agile_color2">'.$row["evenue"].'<i>Event Venue</i></li>
				<li><span class="w3_agile_color"></span></li>
			</ul>
			<ul>
				<li class="agile_color4">'.$row["estuff"].'<i>Event Materials</i></li>
				<li><span class="w3_agile_color"></span></li>
			</ul>';
		}
			
		//if-else statement to show info if youtube or nothing if jwplayer
		else if($row['player'] == 'facebook'){
			
			echo'<ul>
				<li class="agile_color">'.$row["mtitle_en"].'</i><i>Message Title</i></li>
				<li><span class="w3_agile_color"></span></li>
			</ul>
			<ul>
				<li class="agile_color">'.$row["mpreacher"].'<i>Speaker</i></li>
				<li><span class="w3_agile_color"></span></li>
			</ul>
			<ul>
				<li class="agile_color1">'.$row["ename_en"].'<i>Event Name</i></li>
				<li><span class="w3_agile_color"></span></li>
			</ul>
			<ul>
				<li class="agile_color3">'.$row["edate"].'<i>Event Date</i></li>
				<li><span class="w3_agile_color"></span></li>
			</ul>
			<ul>
				<li class="agile_color2">'.$row["evenue"].'<i>Event Venue</i></li>
				<li><span class="w3_agile_color"></span></li>
			</ul>
			<ul>
				<li class="agile_color4">'.$row["estuff"].'<i>Event Materials</i></li>
				<li><span class="w3_agile_color"></span></li>
			</ul>';
		}

		else{
			echo'<ul>
				<li class="agile_color"></i><i>Message Title</i></li>
				<li><span class="w3_agile_color"></span></li>
			</ul>
			<ul>
				<li class="agile_color"><i>Speaker</i></li>
				<li><span class="w3_agile_color"></span></li>
			</ul>
			<ul>
				<li class="agile_color1"><i>Event Name</i></li>
				<li><span class="w3_agile_color"></span></li>
			</ul>
			<ul>
				<li class="agile_color3"><i>Event Date</i></li>
				<li><span class="w3_agile_color"></span></li>
			</ul>
			<ul>
				<li class="agile_color2"><i>Event Venue</i></li>
				<li><span class="w3_agile_color"></span></li>
			</ul>
			<ul>
				<li class="agile_color4"><i>Event Materials</i></li>
				<li><span class="w3_agile_color"></span></li>
			</ul>';
		}
		} 
		$conn->close();

	?>