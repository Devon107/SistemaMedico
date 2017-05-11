<?php 
		include('conection.php');
		// get the q parameter from URL
		$e= $_REQUEST["e"];
		$s= $_REQUEST["s"];
		$enfermedad=explode(",", $s);
		$hint = "";
		$sql="";
			$e = strtoupper($e);
			for ($i=0;$i<count($enfermedad);$i++) 
      		{ 
      			$enfermedad[$i]= strtoupper($enfermedad[$i]);
      			$sql.="INSERT INTO RELACION_ESPECIALISTAS_ENFERMEDADES (ESPECIALISTA,ENFERMEDAD) VALUES ('".$e."','".$enfermedad[$i]."');";
      		}
			
			if ($conn->multi_query($sql) === TRUE) {
				    $hint= "New record created successfully";
				} else {
				    $hint= "Error: " . $sql . "<br>" . $conn->error;
				}
				echo $hint;
				$conn->close();
?>