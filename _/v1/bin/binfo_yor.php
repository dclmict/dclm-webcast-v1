	<?php 
		require_once('libs/db.php');

		// Create connection
		$conn = Connect();

		$sql = "SELECT * FROM webcast_info LIMIT 1";
		$result = $conn->query($sql);

		if ($result->num_rows > 0) { // if any rows were returned
		$row = mysqli_fetch_assoc($result);
		
		//if-else statement to show info if youtube or nothing if jwplayer
		if($row['player'] == 'youtube'){
		
			echo'<ul>
				<li class="agile_color">'. $row["mtitle_yor"]. '</i><i>Akori Iwasu</i></li>
				<li><span class="w3_agile_color"></span></li>
			</ul>
			<ul>
				<li class="agile_color">'. $row["mpreacher"]. '<i>Oniwaasu</i></li>
				<li><span class="w3_agile_color"></span></li>
			</ul>
			<ul>
				<li class="agile_color1">'. $row["ename_yor"]. '<i>Oruko Ipade</i></li>
				<li><span class="w3_agile_color"></span></li>
			</ul>
			<ul>
				<li class="agile_color1">'.$row["etag"].'<i>Akole Ipade</i></li>
				<li><span class="w3_agile_color"></span></li>
			</ul>
			<ul>
				<li class="agile_color3">'. $row["edate"]. '<i>Ojo Ipade</i></li>
				<li><span class="w3_agile_color"></span></li>
			</ul>
			<ul>
				<li class="agile_color2">'. $row["evenue"]. '<i>Ibi Ipade</i></li>
				<li><span class="w3_agile_color"></span></li>
			</ul>
			<ul>
				<li class="agile_color4">'. $row["estuff"]. '<i>Iwe Ipade</i></li>
				<li><span class="w3_agile_color"></span></li>
			</ul>';
		}

		else if($row['player'] == 'facebook'){
		
			echo'<ul>
			<li class="agile_color">'. $row["mtitle_yor"]. '</i><i>Akori Iwasu</i></li>
			<li><span class="w3_agile_color"></span></li>
		</ul>
		<ul>
			<li class="agile_color">'. $row["mpreacher"]. '<i>Oniwaasu</i></li>
			<li><span class="w3_agile_color"></span></li>
		</ul>
		<ul>
			<li class="agile_color1">'. $row["ename_yor"]. '<i>Oruko Ipade</i></li>
			<li><span class="w3_agile_color"></span></li>
		</ul>
		<ul>
			<li class="agile_color1">'.$row["etag"].'<i>Akole Ipade</i></li>
			<li><span class="w3_agile_color"></span></li>
		</ul>
		<ul>
			<li class="agile_color3">'. $row["edate"]. '<i>Ojo Ipade</i></li>
			<li><span class="w3_agile_color"></span></li>
		</ul>
		<ul>
			<li class="agile_color2">'. $row["evenue"]. '<i>Ibi Ipade</i></li>
			<li><span class="w3_agile_color"></span></li>
		</ul>
		<ul>
			<li class="agile_color4">'. $row["estuff"]. '<i>Iwe Ipade</i></li>
			<li><span class="w3_agile_color"></span></li>
		</ul>';
		}

		else{
			echo'<ul>
				<li class="agile_color"></i><i>Akori Iwasu</i></li>
				<li><span class="w3_agile_color"></span></li>
			</ul>
			<ul>
				<li class="agile_color"><i>Oniwaasu</i></li>
				<li><span class="w3_agile_color"></span></li>
			</ul>
			<ul>
				<li class="agile_color1"><i>Oruko Ipade</i></li>
				<li><span class="w3_agile_color"></span></li>
			</ul>
			<ul>
				<li class="agile_color3"><i>Akole Ipade</i></li>
				<li><span class="w3_agile_color"></span></li>
			</ul>
			<ul>
				<li class="agile_color2"><i>Ibi Ipade</i></li>
				<li><span class="w3_agile_color"></span></li>
			</ul>
			<ul>
				<li class="agile_color4"><i>Iwe Ipade</i></li>
				<li><span class="w3_agile_color"></span></li>
			</ul>';
		}
		} 

		$conn->close();

	?>