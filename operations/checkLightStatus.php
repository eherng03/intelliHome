<?php  

	include "../models/LightsDBController.php";

	$place = $_GET['place'];

	

	$controller = LightsDBController::getInstance();

	$result = $controller->checkStatus($place);

	$state = array();
    //guardados todos los datos como object destino
    while($row = $result->fetch_array()){
         $state = $row;
    }
    //echo '<pre>'; print_r($driver); echo '</pre>';
    echo json_encode($state);

	
?>