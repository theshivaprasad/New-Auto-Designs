<?php
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "project_autoz";

	// Create connection
	$conn = new mysqli($servername, $username, $password, $dbname);

	// Check connection
	if ($conn->connect_error) {
	    die("Connection failed: " . $conn->connect_error);
	} 

	$files = array('i.csv');

	function ifExists($conn, $node, $item) {
		$sql = "SELECT ".$node."_name FROM tbl_car_".$node." WHERE ".$node."_name=\"".$item."\"";
		$result = $conn->query($sql);
		if($result) {
			if (mysqli_num_rows($result)>0) {
				return 1;
			}
			else {
				return 0;
			}
		}
	}

	function checkInventory($conn, $part_id, $model_id) {
		$sql = "SELECT inv_id FROM tbl_inventory WHERE part_id=\"".$part_id."\" AND model_id=\"".$model_id."\"";
		$result = $conn->query($sql);
		if($result) {
			if (mysqli_num_rows($result)>0) {
				return 1;
			}
			else {
				return 0;
			}
		}
	}

	function extractId($conn, $node, $item) {
		$sql = "SELECT ".$node."_id FROM tbl_car_".$node." WHERE ".$node."_name=\"".$item."\"";
		$result = $conn->query($sql);
		if($result) {
			if (mysqli_num_rows($result)>0) {
				$row = $result->fetch_assoc();
				return $row[$node.'_id'];
			}
			else {
				return 0;
			}
		}
	}

	function ifYearExists($conn, $item) {
		$sql = "SELECT year_id FROM tbl_year WHERE year=\"".$item."\"";
		$result = $conn->query($sql);
		if($result) {
			if (mysqli_num_rows($result)>0) {
				return 1;
			}
			else {
				return 0;
			}
		}
	}

	function ifOptionExists($conn, $item) {
		$sql = "SELECT opt_name FROM tbl_part_options WHERE opt_name=\"".$item."\"";
		$result = $conn->query($sql);
		if($result) {
			if (mysqli_num_rows($result)>0) {
				return 1;
			}
			else {
				return 0;
			}
		}
	}

	function ifOptExists($conn, $inv_id, $opt_id, $year_id) {
		$sql = "SELECT opt_id FROM tbl_part_details WHERE inv_id=\"".$inv_id."\" AND opt_id=\"".$opt_id."\" AND year_id=\"".$year_id."\"";
		$result = $conn->query($sql);
		if($result) {
			if (mysqli_num_rows($result)>0) {
				return 1;
			}
			else {
				return 0;
			}
		}
	}

	function extractOptId($conn, $item) {
		$sql = "SELECT opt_id FROM tbl_part_options WHERE opt_name=\"".$item."\"";
		$result = $conn->query($sql);
		if($result) {
			if (mysqli_num_rows($result)>0) {
				$row = $result->fetch_assoc();
				return $row['opt_id'];
			}
			else {
				return 0;
			}
		}
	}

	function extractYearId($conn, $item) {
		$sql = "SELECT year_id FROM tbl_year WHERE year=\"".$item."\"";
		$result = $conn->query($sql);
		if($result) {
			if (mysqli_num_rows($result)>0) {
				$row = $result->fetch_assoc();
				return $row['year_id'];
			}
			else {
				return 0;
			}
		}
	}

	function extractInvId($conn, $part_id, $model_id) {
		$sql = "SELECT inv_id FROM tbl_inventory WHERE part_id=\"".$part_id."\" AND model_id=\"".$model_id."\"";
		$result = $conn->query($sql);
		if($result) {
			if (mysqli_num_rows($result)>0) {
				$row = $result->fetch_assoc();
				return $row['inv_id'];
			}
			else {
				return 0;
			}
		}
	}

	for ($i=0; $i < sizeof($files); $i++) { 
		$file = fopen($files[0],"r");
		$maker = "";
		$model = "";
		$part = "";
		$data = fgetcsv($file);
		$n = 0;
		print_r($data);

		while($data = fgetcsv($file)) { 
			if (!ifExists($conn,'maker',$data[0])) {
				$sql = "INSERT INTO tbl_car_maker(maker_name) VALUES(\"".$data[0]."\")";
				$result = $conn->query($sql);
				echo "Inserted maker.";

			}
			if(!ifExists($conn,'model',$data[1])) {
				$sql = "INSERT INTO tbl_car_model(model_name,maker_id) VALUES(\"".$data[1]."\",\"".extractId($conn,'maker',$data[0])."\")";
				$result = $conn->query($sql);
				echo "Inserted model.";

			}
			if(!ifExists($conn,'part',$data[2])) {
				$sql = "INSERT INTO tbl_car_part(part_name) VALUES(\"".$data[2]."\")";
				$result = $conn->query($sql);
				echo "Inserted part.";
			}
			if(!checkInventory($conn, extractId($conn,'part',$data[2]), extractId($conn,'model',$data[1]))) {
				$sql = "INSERT INTO tbl_inventory(part_id,model_id) VALUES(\"".extractId($conn,'part',$data[2])."\",\"".extractId($conn,'model',$data[1])."\")";
				$result = $conn->query($sql);
				echo "Added part to Inventory.";
			}
			if(!ifYearExists($conn, $data[3])) {
				$sql = "INSERT INTO tbl_year(year) VALUES(\"".$data[3]."\")";
				$result = $conn->query($sql);
				echo "Inserted year.";
			}
			if(!ifOptionExists($conn, $data[4])) {
				$sql = "INSERT INTO tbl_part_options(opt_name) VALUES(\"".$data[4]."\")";
				$result = $conn->query($sql);
				echo "Inserted option.";
			}
			if(!ifOptExists($conn, extractInvId($conn, extractId($conn, "part", $data[2]), extractId($conn, "model", $data[1])), extractOptId($conn, $data[4]), extractYearId($conn, $data[3]))) {
				$sql = "INSERT INTO tbl_part_details(inv_id,opt_id,year_id) VALUES(".extractInvId($conn, extractId($conn, "part", $data[2]), extractId($conn, "model", $data[1])).",".extractOptId($conn, $data[4]).",".extractYearId($conn, $data[3]).")";
					$result = $conn->query($sql);
					echo "option ADDED\n";
			}
			$n++;
			echo "$n\n";

		}
		fclose($file);
	}
?>	