<?php
	
	if ($_REQUEST['type'] == 'visualizeData') {
		$csvData = file_get_contents('data1.csv');
         $csvData = str_replace("\r\n", "\n", $csvData);
         $csvData = str_replace("\r", "\n", $csvData);
         $csvData = preg_replace("/\n{2,}/", "\n", $csvData);
         $tmpArray = explode(PHP_EOL, $csvData);
         $cvsArray = array();
         foreach ($tmpArray as $value) {
             $tmp_array = explode(',', $value);
             //we only need the X and the Y coordinates
             $new_array = array($tmp_array[0],$tmp_array[1]);
             array_push($cvsArray, $new_array);
         }
         $json_visualisation_data = json_encode($cvsArray);
         print_r($json_visualisation_data);
	}

?>