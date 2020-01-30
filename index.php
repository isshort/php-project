<?php
	require_once("Config.php");
	require_once("Controller.php");
	require_once("Model.php");
	require_once("View.php");
	$view=new View();
	$model = new Model($dbServerName, $dbUserName, $dbPass, $dbName);
	$controller=new Controller($view,$model);

	if(isset($_GET["page"])){
    	$controller->setPageId($_GET["page"]);
    	//echo $_GET['page'];
  	}
  	else {
    $controller->setPageId('index');
  }
  //$controller->dataFrom_DB();
  $controller->ShowPage();

	//$model->getAllProducts();
	

?>