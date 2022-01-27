
        <div class="table-responsive">   
                <table class="table">  
                       <?php     
                         $data = file_get_contents("dataa.json");    
                         $array= json_decode($data,true); 
                        ?>   
                         <tr  class="text-muted" >   
                         <td scope="col">Name </td> 
                         <td scope="col">Payment Schedule</td>
                         <td scope="col">Bill Number</td>
                         <td scope="col">Amount Paid</td>
                         <td scope="col">Balance Amount</td>
                         <td scope="col">Date</td>
                         <td></td>
                       </tr> 
                       <?php
                         
                          foreach ($array as $student) {     
                            ?>  
                       <tr >  
                          <td><img src="svg/imgdach.svg" alt=""></td>  
                         <td ><?php echo  $student['name'];  ?> </td> 
                         <td ><?php echo  $student['payment_schedule'];  ?> </td>   
                         <td ><?php echo $student['bill_number'] ; ?></td>
                         <td ><?php echo $student['amount_paid'];  ?></td>
                         <td ><?php echo $student['date'];  ?></td>
                         <td>
                            <div class="p-2">
                                <img src="svg/modifier.svg" alt="">
                                <img src="svg/suprimer.svg" alt=""> 
                            </div>
                         </td>
                       </tr> 
                       
                       <?php
                       } 
                      ?>  
                </table> 
        </div>
                        
                         
                      
               
          
