<?php
$proses = $_GET['proses'];

if($proses=="kelas") {
	
	$kodekelas = $_GET['kodekelas'];
	
	if ($kodekelas == "AK01" || $kodekelas == "AP11" || $kodekelas == "AP12" || $kodekelas == "AP13" || $kodekelas == "AP14"){
			
			echo "<option>--- Pilih Semester</option>";
			echo "<option value='1'>Semester 1</option>\n";
			echo "<option value='2'>Semester 2</option>\n";
		}
		else if ($kodekelas == "AK02" || $kodekelas == "AP21" || $kodekelas == "AP22" || $kodekelas == "AP23" || $kodekelas == "AP24"){
			echo "<option>--- Pilih Semester</option>";
			echo "<option value='3'>Semester 3</option>\n";
			echo "<option value='4'>Semester 4</option>\n";
		}
		else if ($kodekelas == "AK03" || $kodekelas == "AP31" || $kodekelas == "AP32" || $kodekelas == "AP33" || $kodekelas == "AP34"){
			echo "<option>--- Pilih Semester</option>";
			echo "<option value='5'>Semester 5</option>\n";
			echo "<option value='6'>Semester 6</option>\n";
		}	
}
?>