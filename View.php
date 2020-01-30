<?php
/**
 * 
 */
class View 
{
	
  private $Number;
  private $PrudactName;
  private $Quantity;
  private $Rate;
  private $Amount;
  private $FileArray=array();
  private $SizeOf_FileArray;

	
  function printHeader(){
			include("./templates/header.php");
	}

	function printFooter(){
		include("./templates/footer.php");
	}
	function printMenu(){
    include("./templates/menu.php");
  }
 

  function printPageNotFound($page){
    $this->printHeader();
      ?>
      <!DOCTYPE html>
      <html>
      <head>
        <title></title>
      </head>
      <body>
       <h1><?php echo $page; ?>Page Not found</h1>
      </body>
      </html>
      <?php
    $this->printFooter();
  }
  
  function DeleteData(){
    $this->printHeader();
?>
                 <h2 class="page-section-heading text-center text-uppercase text-secondary mb-0">Delete Button</h2>
                     <!-- Icon Divider -->
                      <div class="divider-custom">
                          <div class="divider-custom-line"></div>
                          <div class="divider-custom-icon">
                             <i class="fas fa-star"></i>
                          </div>
                          <div class="divider-custom-line"></div>
                      </div>

<?php
  $this->printMenu();
 ?> 
 <form method="GET" action="index.php">  
         <div class="row">
            <div class="col-md-6 col-lg-6 right_row">   
                   
            <input style="margin-top: 20px;height: 30px,width:40px; padding-right: 20px;" type="submit" name="Delete" value="Delete">
            <input type="hidden" name="page" value="deleteData">
            </div>

            <!-- Portfolio Item 1 -->
            <div class="col-md-6 col-lg-6 left_row">
                 <div class="table-wrapper-scroll-y my-custom-scrollbar header-fixed">
                    
            
                      <table class="table table-hover table-bordered table-striped mb-0">
                          <thead class="bg-success">
                              <tr>  
                                    <th scope="col" style="width:40px;font-size:10px;left: 0px;">Select</th>
                                    <th scope="col">No</th>
                                    <th scope="col">Name</th>
                                    <th scope="col">Last Name</th>
                                    <th scope="col">Year</th>

                              </tr>
                          </thead>
                            <tbody class="tb-info">
                                  <?php
                                     for ($row=0;$row <$this->get_SizeOf_FileArray(); $row++) { 
                                        echo "<tr>";
                                         // echo "<td style='width:40px;font-size:20'><input type='checkbox' name='check_list[]' value='".$this->get_FileArray()[$row][0]."'>";
?>    
                                       <td style='width:40px;font-size:40'>
                                        <?php echo "<input type='checkbox' name='check_list[]' value='".$this->get_FileArray()[$row][0]."'>";  
                                           
?>
                                          </td>                                  
<?php
                                           for ($col=0; $col <4; $col++) { 
                                              echo "<td>".$this->get_FileArray()[$row][$col]."</td>";
                                           }
                                           echo "</tr>";
                                      } 
                                  ?>
                             
                            </tbody>
                          </table>
                     
                     
                </div>
            </div>
        </div>
</form>
<?php


    $this->printFooter();


  }
 
  function InsertData(){
      $this->printHeader();
?>
                 <h2 class="page-section-heading text-center text-uppercase text-secondary mb-0">Total Data</h2>
                     <!-- Icon Divider -->
                      <div class="divider-custom">
                          <div class="divider-custom-line"></div>
                          <div class="divider-custom-icon">
                             <i class="fas fa-star"></i>
                          </div>
                          <div class="divider-custom-line"></div>
                      </div>

<?php
      $this->printMenu();
?>
   
        <div class="row">
            <div class="col-md-6 col-lg-6 right_row">   
                    <form method="GET" action="index.php">
                        <div class="input-group" style="padding-top: 20px">   
                             <input class="form-control" type="text" name="name" placeholder="Enter Name">&nbsp&nbsp&nbsp
                              <input type="text" class="form-control" name="last_name" placeholder="Enter Your Lastname">&nbsp&nbsp&nbsp
                        </div> <br>                  
                        <select class="" name="year" id="year"style="width:180px;">
                          <?php
                          for ($year=1970; $year <=date('Y') ; $year++) { 
                              ?>
                              <option ><?php echo $year; ?></option>
                              <?php
                          }
                          ?>
                        </select>
                        <br>
                        <br>
                        <input type = "hidden" name = "page" value="insertData">
                        <input type="submit" name="submit" value="Insert">
                    </form>

            </div>

            <!-- Portfolio Item 1 -->
            <div class="col-md-6 col-lg-6 left_row">
                 <div class="table-wrapper-scroll-y my-custom-scrollbar header-fixed">
                    
            
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
                                     for ($row=0;$row <$this->get_SizeOf_FileArray(); $row++) { 
                                        echo "<tr>";
      ?>
                                          <td style="width:40px;font-size:40"><input type="checkbox" name="check_list[]">
                                            <input type="hidden" name="page" value="insertData">
      <?php  
                                            $this->get_FileArray()[$row][0];
      ?>
                                          </td>                                  
      <?php
                                           for ($col=0; $col <4; $col++) { 
                                              echo "<td>".$this->get_FileArray()[$row][$col]."</td>";
                                           }
                                           echo "</tr>";
                                      } 
                                  ?>
                             
                            </tbody>
                          </table>
                     
                     
        </div>
</div>
</div>

<?php


    $this->printFooter();
  }

  function UpdataData_table($button="",$State=""){
    $this->printHeader();
    ?>
           <h2 class="page-section-heading text-center text-uppercase text-secondary mb-0">Update Data</h2>
               <!-- Icon Divider -->
                <div class="divider-custom">
                    <div class="divider-custom-line"></div>
                    <div class="divider-custom-icon">
                       <i class="fas fa-star"></i>
                    </div>
                    <div class="divider-custom-line"></div>
                </div>

   <?php
    $this->printMenu();
        ?>

                
                  <form action="index.php" method="GET">
                       <p>Update</p>
                        <div class="input-group">   
                             <input class="form-control" type="text" name="name" placeholder="Enter Name">&nbsp&nbsp&nbsp
                              <input type="text" class="form-control" name="last_name" placeholder="Enter Your Lastname">&nbsp&nbsp&nbsp
                              <input type="text" class="form-control" name="id" placeholder="Enter  ID">&nbsp&nbsp&nbsp
                              <input type="text" class="form-control" name="year" placeholder="Enter Year">

                        </div>
                        <br>
                        <p>Conditions</p>
                        <div class="input-group">    
                             <input class="form-control" type="text" name="name1" placeholder="Enter Name">&nbsp&nbsp&nbsp
                              <input type="text" class="form-control" name="last_name1" placeholder="Enter Your Lastname">&nbsp&nbsp&nbsp
                              <input type="text" class="form-control" name="id1" placeholder="Enter  ID">&nbsp&nbsp&nbsp
                              <input type="text" class="form-control" name="year1" placeholder="Enter Year">
                        </div>
                           
                        <br>
                        <input type="submit" name="submit" value="Update"/>
                        <input type = "hidden" name = "page" value="updateData">
                </form>
                
        <?php
      if(isset($button)){
          if($State=="successfully"){
            echo "Successfully updated";
          }
          else{
            echo "Error";
          }
      }
    $this->printFooter();
  }
  function searchData_table($productName="",$Data=""){
    $this->printHeader();
    ?>
           <h2 class="page-section-heading text-center text-uppercase text-secondary mb-0">Search Data</h2>
               <!-- Icon Divider -->
                <div class="divider-custom">
                    <div class="divider-custom-line"></div>
                    <div class="divider-custom-icon">
                       <i class="fas fa-star"></i>
                    </div>
                    <div class="divider-custom-line"></div>
                </div>

   <?php
    $this->printMenu();
    ?>

                
                  <form action="index.php" method="GET">
                       
                        <div class="input-group">

                             <input class="form-control" type="text" name="name" placeholder="Enter Name">&nbsp&nbsp&nbsp
                              <input type="text" class="form-control" name="last_name" placeholder="Enter Your Lastname">&nbsp&nbsp&nbsp
                              <input type="text" class="form-control" name="id" placeholder="Enter  ID">&nbsp&nbsp&nbsp
                              <input type="text" class="form-control" name="year" placeholder="Enter Year">

                        </div>
                      

                        <input type="checkbox" name="check_list[]" value="id">
                           <label>&nbsp&nbsp&nbspID</label><br>
                        <input type="checkbox" name="check_list[]" value="name">
                           <label>&nbsp&nbsp&nbspName</label> <br>
                        <input type="checkbox" name="check_list[]" value="last_name">
                           <label>&nbsp&nbsp&nbspLastName</label><br>
                        <input type="checkbox" name="check_list[]" value="year">
                        <input type = "hidden" name = "page" value="searchData">
                           <label>&nbsp&nbsp&nbspYear</label><br>
                        
                        <input type="submit" name="submit" value="Search"/>

                </form>
                 
                <?php
              if(isset($productName)){
              
              //  echo "<p class='post-meta'> You have searched ".$productName."</p>";

                if(is_array($Data)){
                  
                  
                   ?>
                      <h2 class="post-title">
                        Search results
                      </h2>
                      <div class="col-md-16 col-lg-16 left_row">
                          <table class="table table-hover table-bordered table-striped mb-0">
                              <thead class="bg-success">
                                  <tr>
                                      <th scope="col">No</th>
                                      <th scope="col">Name</th>
                                      <th scope="col">Last Name</th>
                                      <th scope="col">Year</th>
                                  </tr>
                              </thead>
                                <tbody class="tb-info">
                                  <?php
                                     for ($row=0;$row <count($this->get_FileArray()); $row++) { 
                            
                                        echo "<tr>";
                                          for ($col=0; $col <$this->get_SizeOf_FileArray(); $col++) { 
                                              echo "<td>".$this->get_FileArray()[$row][$col]; 
                                              echo "</td>";
                                           } 

                                          echo "</tr>";  
                                      } 
                                  ?>
                             
                                </tbody>
                              </table>
                            </div> 
                    <?php
                }
                else if($Data == 0)
                     { echo "<p>No products found</p>";}
                else
                {
                  echo "<p>".$Data ."</p>"; // in case if error occurred
                }
              }
  ?>
    <?php
    $this->printFooter();
  }


  function ShowData_Table(){
    $this->printHeader();
     ?>
             <h2 class="page-section-heading text-center text-uppercase text-secondary mb-0">Total Data</h2>
                 <!-- Icon Divider -->
                  <div class="divider-custom">
                      <div class="divider-custom-line"></div>
                      <div class="divider-custom-icon">
                         <i class="fas fa-star"></i>
                      </div>
                      <div class="divider-custom-line"></div>
                  </div>

     <?php
    $this->printMenu();
    ?>   

    
       
            
                <table class="table table-hover table-bordered table-striped mb-0">
                    <thead class="bg-success">
                        <tr>
                              <th scope="col">No</th>
                              <th scope="col">Name</th>
                              <th scope="col">Last Name</th>
                              <th scope="col">Year</th>
                        </tr>
                    </thead>
                      <tbody class="tb-info">
                            <?php
                               for ($row=0;$row <$this->get_SizeOf_FileArray(); $row++) { 
                                  echo "<tr>";
                                     for ($col=0; $col <4; $col++) { 
                                        echo "<td>".$this->get_FileArray()[$row][$col]."</td>";
                                     }
                                     echo "</tr>";
                                } 
                            ?>
                       
                      </tbody>
                    </table>
             
          
       
    <?php
    $this->printFooter();
  }

	function printMainFunct(){
     
    $this->printHeader();
            ?>
               <h2 class="page-section-heading text-center text-uppercase text-secondary mb-0">Welcome To Our WebSite</h2>
                   <!-- Icon Divider -->
                    <div class="divider-custom">
                        <div class="divider-custom-line"></div>
                        <div class="divider-custom-icon">
                           <i class="fas fa-star"></i>
                        </div>
                        <div class="divider-custom-line"></div>
                    </div>

              <?php
    $this->printMenu();
        ?>
   

            
              <h1>
                About our website
              </h1>
              <p>Hello Namatullah</p>
      

       	<?php
       	$this->printFooter();
   	/////*****************************************************/
	}
  






 function set_SizeOf_FileArray($SizeOf_newArray){
    $this->SizeOf_FileArray=$SizeOf_newArray;
  }
  function get_SizeOf_FileArray(){
    return $this->SizeOf_FileArray;
  }

  function set_FileArray($array){
     $this->FileArray=$array;
  }
  function get_FileArray(){
    return $this->FileArray;
  }


 function set_Number($Number) {
    $this->Number = $Number;
  }
  function get_Number() {
    return $this->Number;
  }

  function set_PrudactName($PrudactName) {
    $this->PrudactName = $PrudactName;
  }
  function get_PrudactName() {
    return $this->PrudactName;
  }

  function set_Quantity($Quantity) {
    $this->Quantity = $Quantity;
  }
  function get_Quantity() {
    return $this->Quantity;
  }

  function set_Rate($Rate) {
    $this->Rate = $Rate;
  }
  function get_Rate() {
    return $this->Rate;
  }
  function set_Amount($Amount) {
    $this->Amount = $Amount;
  }
  function get_Amount() {
    return $this->Amount;
  }


	}

?>