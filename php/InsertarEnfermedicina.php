<?php 
include('conection.php');
		// get the q parameter from URL
		$e = $_REQUEST["e"];
		$m = $_REQUEST["m"];
		$h = $_REQUEST["h"];
		$d = $_REQUEST["d"];
		$p = $_REQUEST["p"];
		$des = $_REQUEST["des"];
		$hint = "";
		// lookup all hints from array if $q is different from "" 
		if ($q !== "") {
			$e = strtoupper($e);$m = strtoupper($m);$d = strtoupper($d);$h = strtoupper($h);$p = strtoupper($p);$des = strtoupper($des);
		    $sql="INSERT INTO RELACION_MEDICAMENTOS_ENFERMEDADES (ENFERMEDAD, MEDICAMENTO, DOSIS, HORARIO, DURACION, DESCRIPCION) VALUES ('".$e."','".$m."','".$d."','".$h."','".$p."','".$des."')";
			if ($conn->query($sql) === TRUE) {
				    $hint= "New record created successfully";
				} else {
				    $hint= "Error: " . $sql . "<br>" . $conn->error;
				}
		}
				echo $hint;
				$conn->close();
?>