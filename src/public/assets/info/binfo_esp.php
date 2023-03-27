<?php 
		require_once __DIR__ .'/../../../app/controller/db.php';

		// Create connection
		$conn = Connect();

		$sql = "SELECT * FROM webcast_info LIMIT 1";
		$result = $conn->query($sql);

		if ($result->num_rows > 0) { // if any rows were returned
		$row = mysqli_fetch_assoc($result);
		
		//if-else statement to show info if youtube or nothing if jwplayer
		if($row['player'] == 'youtube'){
		
			echo'<ul>
				<li class="agile_color">'. $row["mtitle_esp"]. '</i><i>Título del Mensaje</i></li>
				<li><span class="w3_agile_color"></span></li>
			</ul>
			<ul>
				<li class="agile_color">'. $row["mpreacher"]. '<i>Orador</i></li>
				<li><span class="w3_agile_color"></span></li>
			</ul>
			<ul>
				<li class="agile_color1">'. $row["ename_esp"]. '<i>Nombre del Evento</i></li>
				<li><span class="w3_agile_color"></span></li>
			</ul>
            <ul>
				<li class="agile_color1">'.$row["etag"].'<i>Event Tag</i></li>
				<li><span class="w3_agile_color"></span></li>
			</ul>
			<ul>
				<li class="agile_color3">'. $row["edate"]. '<i>Fecha del Evento</i></li>
				<li><span class="w3_agile_color"></span></li>
			</ul>
			<ul>
				<li class="agile_color2">'. $row["evenue"]. '<i>Lugar del Evento</i></li>
				<li><span class="w3_agile_color"></span></li>
			</ul>
			<ul>
				<li class="agile_color4">'. $row["estuff"]. '<i>Recursos del Evento</i></li>
				<li><span class="w3_agile_color"></span></li>
			</ul>';
		}

		else if($row['player'] == 'facebook'){
		
			echo'<ul>
				<li class="agile_color">'. $row["mtitle_esp"]. '</i><i>Título del Mensaje</i></li>
				<li><span class="w3_agile_color"></span></li>
			</ul>
			<ul>
				<li class="agile_color">'. $row["mpreacher"]. '<i>Orador</i></li>
				<li><span class="w3_agile_color"></span></li>
			</ul>
			<ul>
				<li class="agile_color1">'. $row["ename_esp"]. '<i>Nombre del Evento</i></li>
				<li><span class="w3_agile_color"></span></li>
			</ul>
			<ul>
				<li class="agile_color3">'. $row["edate"]. '<i>Fecha del Evento</i></li>
				<li><span class="w3_agile_color"></span></li>
			</ul>
			<ul>
				<li class="agile_color2">'. $row["evenue"]. '<i>Lugar del Evento</i></li>
				<li><span class="w3_agile_color"></span></li>
			</ul>
			<ul>
				<li class="agile_color4">'. $row["estuff"]. '<i>Recursos del Evento</i></li>
				<li><span class="w3_agile_color"></span></li>
			</ul>';
		}

		else{
			echo'<ul>
				<li class="agile_color"></i><i>Título del Mensaje</i></li>
				<li><span class="w3_agile_color"></span></li>
			</ul>
			<ul>
				<li class="agile_color"><i>Orador</i></li>
				<li><span class="w3_agile_color"></span></li>
			</ul>
			<ul>
				<li class="agile_color1"><i>Nombre del Evento</i></li>
				<li><span class="w3_agile_color"></span></li>
			</ul>
			<ul>
				<li class="agile_color3"><i>Fecha del Evento</i></li>
				<li><span class="w3_agile_color"></span></li>
			</ul>
			<ul>
				<li class="agile_color2"><i>Lugar del Evento</i></li>
				<li><span class="w3_agile_color"></span></li>
			</ul>
			<ul>
				<li class="agile_color4"><i>Recursos del Evento</i></li>
				<li><span class="w3_agile_color"></span></li>
			</ul>';
		}
		} 
		$conn->close();

	?>