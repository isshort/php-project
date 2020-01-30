<?php

	// $valuesSets=array();
	// $valuse=array('name','last_name','id','year');
	// foreach ($valuse as $key => $value) {
	// 	$valuesSets[]=$key." = '".$value."'";
	// }
	// $ConditionSets = array();
	// foreach ($valuse as $key => $value) {
	// 	$ConditionSets[]=$key." = '".$value."'";
	// }

	// $sql="UPDATE Student SET ".join(',',$valuesSets)." WHERE ".join(" AND ",$ConditionSets);
	// print($sql);

?>        
<form method="GET" action="#">  
<table class="table table-hover table-bordered table-striped mb-0">
  <thead class="bg-success">
      <tr>  <th scope="col" style="width:40px;font-size:10">Select</th>
            <th scope="col">No</th>
            <th scope="col">Name</th>
            <th scope="col">Last Name</th>
            <th scope="col">Year</th>

      </tr>
  </thead>
    <tbody class="tb-info">
          <?php
          	$cars = array
			  (
			  array("Volvo",22,18),
			  array("BMW",15,13),
			  array("Saab",5,2),
			  array("Land Rover",17,15)
			  );
             for ($row=0;$row <count($cars); $row++) { 
                echo "<tr>";

                  echo "<td style='width:40px;font-size:40'><input type='checkbox' name='check_list[]' value='".$cars[$row][0]."'>";
  
?>
                  </td>                                  
<?php
                   for ($col=0; $col <3; $col++) { 
                      echo "<td>".$cars[$row][$col]."</td>";
                   }
                   echo "</tr>";
              } 
?>
     
    </tbody>
  </table>


 
  
        <input type="submit" name="submit">
</form>
<?php

 if(!empty($_GET['check_list']) ){
		$ok=$_GET['check_list'];
        $i=0;
        echo "Size of array is:".count($ok)."<br>";
        $sql="Delete from student2 where ";
        $sayic=0;
        foreach ($ok as $key => $value) {
            // print("i=".$i."<br>");
            // $i+=1;
            // print($value."<br>");
            $sql=$sql." id = ? ";
            $sayic+=1;
            if($sayic<count($ok)){
            	$sql=$sql." or ";
            }
        }                 
        print($sql); 
			
}
//echo date('Y');
  ?>