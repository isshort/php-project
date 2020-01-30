<?php
 
class Controller
{   
	private $view;
	private $model;  
	private $pageId;
	function __construct($newView,$newModel){
		$this->pageId="index";
		$this->view=$newView;
		$this->model=$newModel;
		

	}	

	function setPageId($newPageId){
			$this->pageId = $newPageId;
	}
  function dataFrom_DB(){
  		   $this->model->getAllProducts();
  	// 	   for ($i=0; $i <$this->model->get_size_dataBase_Array() ; $i++) { 
			// 	          	 	for ($j=0; $j <4 ; $j++) { 
			// 	          	 		echo $this->model->get_dataBase_Array()[$i][$j]."  ";
			// 	          	 	}echo "<br>";
			// }
  		 
  		   $this->view->set_FileArray($this->model->get_dataBase_Array());
    	   $this->view->set_SizeOf_FileArray($this->model->get_size_dataBase_Array());
    	 
     
    }	

  function search_Data(){
  		if(isset($_GET['submit'])){
  			// 		echo "name---".$_GET['name']."<br>";
					// echo "lastname---".$_GET['last_name']."<br>";
					// echo "id---".$_GET['id']."<br>";
					// echo "year---".$_GET['year']."<br>";
					$Result=$this->model->SearchSome_Data($_GET['check_list'],$_GET['name'],$_GET['last_name'],$_GET['id'],$_GET['year']);
					$this->view->set_FileArray($this->model->get_dataBase_Array());
    	   			$this->view->set_SizeOf_FileArray($this->model->get_size_dataBase_Array());

					$this->view->searchData_table($_GET['submit'],$Result);
		}
		else{
			$this->view->searchData_table();
		}
  
  }

  function UpdateData(){
  		if(isset($_GET['submit'])){
  		$Result=$this->model->UpdateData($_GET['name'],$_GET['last_name'],$_GET['id'],$_GET['year'],$_GET['name1'],$_GET['last_name1'],$_GET['id1'],$_GET['year1']);
  			$this->view->UpdataData_table($_GET['submit'],$Result);
 		}
		else{
			$this->view->UpdataData_table();
		}
  }
  function UpdateData2(){
  	    echo "Olmus mu".$_GET['submit'];
  		if(isset($_GET['submit'])){
  		$Result=$this->model->UpdateSecondMethod($_GET['name'],$_GET['last_name'],$_GET['id'],$_GET['year'],$_GET['name1'],$_GET['last_name1'],$_GET['id1'],$_GET['year1']);
  			$this->view->UpdataData_table($_GET['submit'],$Result);
 		}
		else{
			$this->view->UpdataData_table();
		}
  }
  function InsertData(){

  	if(isset($_GET['submit'])){
  		$Result=$this->model->InsertData($_GET['name'],$_GET['last_name'],$_GET['year']);
		echo $Result;
		$this->dataFrom_DB();
		$this->view->InsertData();
  		
  	}else{
  		$this->view->InsertData();
  		$this->dataFrom_DB();
  	}
  }
  function DeleteData(){
  $this->dataFrom_DB();
  if(!empty($_GET['check_list']) and isset($_GET['Delete']) ){
		$ok=$_GET['check_list'];
		$this->model->DeleteData($ok);
		$this->view->DeleteData();	
}
else{
	echo "Daha delete active olmadi";
	$this->view->DeleteData();
}
	

  
  }
	function ShowPage(){
		$this->dataFrom_DB();	
		switch ($this->pageId){
			case "index" : $this->view->printMainFunct();
				break;
			case "showData" : 
				$this->dataFrom_DB();
				$this->view->ShowData_Table();
				break;
			case 'searchData': $this->search_Data();
				break;
			case 'updateData': $this->UpdateData();
				break;
			case 'updateData1': $this->UpdateData2();
				break;
			case 'insertData': $this->InsertData();
				break;
			case 'deleteData':
					$this->DeleteData();
					break;	
			default : $this->view->printPageNotFound($this->pageId);
		}
	}

 }

?>