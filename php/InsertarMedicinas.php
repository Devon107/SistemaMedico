<?php 
include('conection.php');
		// get the q parameter from URL
		$q = $_REQUEST["n"];
		$hint = "";
		// lookup all hints from array if $q is different from "" 
		if ($q !== "") {
			$q = strtoupper($q);
		    $sql="INSERT INTO MEDICAMENTOS (NOMBRE) VALUES ('".$q."')";
			if ($conn->query($sql) === TRUE) {
				    $hint= "New record created successfully";
				} else {
				    $hint= "Error: " . $sql . "<br>" . $conn->error;
				}

			
		}
				echo $hint;
				$conn->close();
?>