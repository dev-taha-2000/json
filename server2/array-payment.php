
                   <?php                      
                            $table=file_get_contents('data_payment.json'); 
                            $students=json_decode($table,true); 
              ?> 
            <div class="table-responsive"> 
                      <table class="table table-striped table-hover">  
                        
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
                          
                          foreach ($students as $student) {     
                        ?>  
                          <tr> 
                            <td ><?php echo  $student['name'];  ?> </td>  
                            <td ><?php echo $student['payment_schedule'];  ?></td>
                            <td ><?php echo $student['bill_number'] ; ?></td>
                            <td ><?php echo $student['amount_paid'];  ?></td>
                            <td ><?php echo $student['balance_amount'];  ?></td> 
                            <td ><?php echo $student['date'];  ?></td>
                            <td ><img src="svg/vue.svg" alt="image"></td>     
                          </tr>                            
                          <?php
                          } 
                          ?>
                      </table>   
            </div> 