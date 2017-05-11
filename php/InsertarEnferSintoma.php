<?php 
		include('conection.php');
		// get the q parameter from URL
		$e= $_REQUEST["e"];
		$s= $_REQUEST["s"];
		$sintoma=explode(",", $s);
		$hint = "";
		$sql="";
			$e = strtoupper($e);
			for ($i=0;$i<count($sintoma);$i++) 
      		{ 
      			$sintoma[$i]= strtoupper($sintoma[$i]);
      			$sql.="INSERT INTO RELACION_ENFERMEDADES_SINTOMAS (ENFERMEDAD, SINTOMAS) VALUES ('".$e."','".$sintoma[$i]."');";
      		}
			
			if ($conn->multi_query($sql) === TRUE) {
				    $hint= "New record created successfully";
				} else {
				    $hint= "Error: " . $sql . "<br>" . $conn->error;
				}
				echo $hint;
				$conn->close();
?>