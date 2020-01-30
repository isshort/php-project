<?php
	
	
?>
<form action="#" method="post">
<!-- 			<div class="input-group">
                 <input class="form-control" type="text" name="name" placeholder="Enter Name" required data-validation-required-message="Please enter your name.">&nbsp&nbsp&nbsp
                  <input type="text" class="form-control" name="inputList[1][]" id="one" placeholder="Enter Your Lastname">&nbsp&nbsp&nbsp
                  <input type="text" class="form-control" name="inputList[2][]" id="two" placeholder="Enter Your ID">&nbsp&nbsp&nbsp
                  <input type="text" class="form-control" name="inputList[3][]" id="three" placeholder="Enter Your ID">

            </div>
 -->
            <input class="form-control" type="text" name="name" placeholder="Enter Name 		of student"><br>
            <input type="checkbox" name="check_list[]" value="ID">
            	<label>&nbsp&nbsp&nbspID</label><br>
            <input type="checkbox" name="check_list[]" value="Name">
            	<label>&nbsp&nbsp&nbspName</label> <br>
            <input type="checkbox" name="check_list[]" value="LastName">
            	<label>&nbsp&nbsp&nbspLastName</label><br>
            <input type="checkbox" name="check_list[]" value="Year">
				<label>&nbsp&nbsp&nbspYear</label><br>
            <br>
            <!-- <input type="radio" name="gender" value="Male">Male
			<input type="radio" name="gender" value="Female">female
            <input type="radio" name="gender" value="Man">Man
            <input type="radio" name="gender" value="Woman">Woman<br>-->
            <input type="submit" name="submit" value="Submit"/>
<!-- 
           <div class="offer">
                <input type="text" name="id" placeholder="ID" >
                <input type="text" name="name" placeholder="Name" >
                <input type="text" name="last_name" placeholder="LastName" >
                <input type="text" name="year" placeholder="Year" >

           </div> -->

</form>		 
<?php
if(isset($_POST['submit']) and !empty($_POST['check_list'])){//to run PHP script on submit

    $sql = "Update Set ".implode('= ', $_POST['check_list'])." ".implode(',', $_POST['check_list'])." from";
    print($sql);
    //print("<br>".$sql." student where ok");
    
    // $generalSql="";
    // $generalType="";
    // if(!empty(isset($_POST['id']))){
    //   $generalSql=$generalSql.$_POST['id']." =? and ";
    //   $generalType=$generalType."i";
    // } 
    // if(!empty(isset($_POST['name']))){
    //   $generalSql=$generalSql.$_POST['name']." =?  and ";
    //   $generalType=$generalType."s";
    // }
    // if(!empty(isset($_POST['last_name']))){
    //   $generalSql=$generalSql.$_POST['last_name']." =?  and ";
    //   $generalType=$generalType."s";
    // }
    // if(!empty(isset($_POST['year']))){
    //   $generalSql=$generalSql.$_POST['year']." =? ";
    //   $generalType=$generalType."s";
    // }

    // print($generalSql);
    // print("<br>".$generalType);





	   //  $LastName=$_POST['last_name'];
    //   $ID=$_POST['id'];
    //   $Year=$_POST['year'];
    //   foreach($_POST['name'] as $index => $name) {
    //     $transformed_data[] = array(
    //       'name' => $name,
    //       'id'=>$ID[$index],
    //       'last_name' => $LastName[$index],
    //       'year' => $Year[$index]
    //     );
    
    // }
    
    // var_dump($transformed_data);
    // print("<br>");
    // print($transformed_data[0]['name']);
    // print("<br>");
    // print_r($transformed_data); 
    // for($i=0;$i<1;$i++){
    //   for ($j=0; $j <4 ; $j++) { 
    //     print($transformed_data[$i][$j]);
    //   }
    // }

     if (!empty($_POST['inputList'])) {
          
          // $sql = "select * from student  where ".implode(' =? and ',$_POST['inputList']);
          // $sql=$sql." =?";
          // echo "Sql is:  ".$sql;
     }



	// if(!empty($_POST['check_list']) && !empty($_POST['name'])){
	// 	// $ok=$_POST['check_list'];
 //        // $i=0;
 //        // echo "Size of array is:".count($ok)."<br>";
 //        // foreach ($ok as $key => $value) {
 //        //     print("i=".$i."<br>");
 //        //     $i+=1;
 //        //     print($value."<br>");
 //        // }
	// $sql = "select ".implode(', ', $_POST['check_list'])." from";
	// print($sql);
 //    print("<br>".$sql." student where ok");
	// }
    
}




?>
<!--**********************************************-->
<!--
<form action="#" method="post">
					<input class="form-control" type="text" name="name" placeholder="Enter Name 		of student"><br>
                    <input type="checkbox" name="check_list[]" value="ID">
                    	<label>&nbsp&nbsp&nbspID</label><br>
                    <input type="checkbox" name="check_list[]" value="Name">
                    	<label>&nbsp&nbsp&nbspName</label> <br>
                    <input type="checkbox" name="check_list[]" value="LastName">
                    	<label>&nbsp&nbsp&nbspLastName</label><br>
                    <input type="checkbox" name="check_list[]" value="Year">
						<label>&nbsp&nbsp&nbspYear</label><br>
					<input type="submit" name="submit" value="Submit"/>

</form>		 -->
<?php
// if(isset($_POST['submit'])){//to run PHP script on submit
// 	echo "Mr ".$_POST['name']." you are welcom";
// 	if(!empty($_POST['check_list'])){
// 		// Loop to store and display values of individual checked checkbox.
// 		foreach($_POST['check_list'] as $selected){
// 			echo $selected."</br>";
// 		}
// 	}
// }
?>
<!--**********************************************-->


<?php




//$name="Namatullah";
// $a=90;
// function Check(){
// 	echo $GLOBALS['name'];

// }
// function Not(){
// 	echo "Not that is not correct ok!";
// }
// if($a==90){
// 	Check();
// }
// else{
// 	Not();
// }


 // $newArray = array();
 // $newArray[0]=array();
 // //$newArray[1]=array();

 // for ($i=0; $i <5 ; $i++) { 
 // 	for ($j=0; $j < 5; $j++) { 
 // 		$newArray[$i][$j]=$i*$j;
 // 	}
 // }


 // for ($i=0; $i <5 ; $i++) { 
 // 	for ($j=0; $j < 5; $j++) { 
 // 		echo $newArray[$i][$j]."  ";
 // 	}
 // 	echo "<br>";
 // }



  ?>
