<?php 
include('conection.php');
		// get the q parameter from URL
		$q = $_REQUEST["q"];
		$hint = "";
		// lookup all hints from array if $q is different from "" 
		if ($q !== "") {
		    $q = strtoupper($q);
		    $len=strlen($q);
		    $sql="SELECT NOMBRE from sintomas WHERE NOMBRE LIKE '".$q."%'";
			$result = $conn->query($sql);
			if($result->num_rows > 0){

				while($row = mysqli_fetch_array($result)) {
					$name=$row['NOMBRE'];
			    	if ($hint === "") {
		                $hint = $name;
		            } else {
		                $hint .= ", $name";
		            }
				}
			}
		}
				echo $hint === "" ? "no suggestion" : $hint;
				$conn->close();
?>
