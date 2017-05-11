<?php 
include('conection.php');
		// get the q parameter from URL
			$sql="SELECT ID, ESPECIALIDAD from ESPECIALISTAS";
			$result = $conn->query($sql);
			$sick = array(array());
			if($result->num_rows > 0){
        	while($row = mysqli_fetch_array($result))
        	{
            	$sick[] = array($row['ID'],$row['ESPECIALIDAD']);
        	}
			}
        echo json_encode($sick);
		$conn->close();
?>