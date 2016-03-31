
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
<script type="text/javascript">
//     $(function () {
//         $("#chpay").click(function () {
//             if ($(this).is(":checked")) {
//                 $("#dvpay").show();
//             } else {
//                 $("#dvpay").hide();
//             }
//         });
//     });
</script>
<div class='row'>
    <div class="col-sm-6">
        <div class="table-caption">
          របាយការណ៏អតិថិជន
        </div>
        
    </div>
    <div class="col-sm-6">
        <a href="<?php echo base_url('clients/newclient'); ?>" class="btn btn-success btn-xs pull-right"><i class="glyphicon glyphicon-plus"></i> បង្កើតអតិថិជ</a>
    </div>
</div>
<hr class="hr" />
<div class="row">
    <div class="col-sm-12">
        <table class='tbl'>
            <thead>
                <tr>
                	<th><input type="checkbox"/></th>
                    <th>លេខកូដអតិថិជន</th>
                    <th>នាម</th>
                    <th>នាមត្រកូល</th>
                    <th>ឈ្មោះពេញ</th>
                    <th>ភេទ</th>
					<th>អ៊ីម៉ែល</th>
                    <th>លេខទូរស័ព្ទ</th>
                    <th>អាសយដ្ឋាន</th>
                    <th>ថ្ងៃចាប់ផ្តើម</th>
                    <th>ថ្ងៃបញ្ចប់</th>
                    <th>ការប្រាក់ត្រូវបង់</th>
                    <th>មូលធន</th>
                    <th>អត្រាការប្រាក់</th>
                    <th>ស្ថានភាព</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                	<td><a href="#"><span class="caret"></span></a></td>
                    <td><?php echo $clients[0]->clientid; ?></td>
                    <td><?php echo $clients[0]->firstname;?></td>
                    <td><?php echo $clients[0]->lastname;?></td>
                    <td><?php echo $clients[0]->fullname; ?></td>
                    <td><?php echo $clients[0]->gender; ?></td>
                    <td><?php echo $clients[0]->email; ?></td>
                    <td><?php echo $clients[0]->phone; ?></td>
					<td><?php echo $clients[0]->address; ?></td>
                    <td><?php echo $clients[0]->startdate; ?></td>
                    <td><?php echo $clients[0]->enddate; ?></td>
                    <td><?php echo number_format(($clients[0]->total),2).' '.$clients[0]->moneytype;?>
                    <td><?php echo number_format(($clients[0]->capital),2).' '.$clients[0]->moneytype;?></td>
                    <td><?php echo $clients[0]->rate."%"; ?></td>
                     <?php //echo $clients[0]->status;
                    		$status= $clients[0]->status;
                    		if($status=="Finished")
                    		{
                    			echo "<td style='color:#45AB5C;'>".$status."</td>";
                    		}else{
                    			echo "<td style='color:#BF3166;'>".$status."</td>";
                    		}
						?>

                </tr>
                <tr>
                	<th>ល.រ</th>
                	<th>ថ្ងៃសងប្រាក់</th>
                	<th>សមតុល្យដើមគ្រា</th>
                	<th>ប្រាក់ដើម</th>
                	<th>ការប្រាក់</th>
                	<th>សរុបប្រាក់ត្រូវបង់</th>
                	<th>ការបង់ប្រាក់</th>
                	<th>ស្ថានភាព</th>
                </tr>
                	<?php
                		$settingdate= $clients[0]->settingdate;
                		$startdate= $clients[0]->startdate;
                		$capital= $clients[0]->capital;
                		$rate= $clients[0]->rate;
                		$days=date("Y-m-d",strtotime($settingdate));
                		$enddate= $clients[0]->enddate;
                		$totaldays=date("d",strtotime($settingdate))-date("d",strtotime($startdate));
                		$repayments=((($capital*$rate)/100)*$totaldays)/30;
						$typeofmoney=$clients[0]->moneytype;
                		
                		$start=strtotime($startdate);
                		$end=strtotime($enddate);
                		$setting=strtotime($settingdate);
                		$currentdate=$setting;

                		
                		if(date('d',strtotime($startdate))<date('d',strtotime($settingdate)))
                		{
                			$startdaysmallthansettingday=date('d',strtotime($settingdate))-date('d',strtotime($startdate));
                			//echo "<br/>";
                			$startdaysmallthensettingdaypayment=((($capital*$rate)/100)*$startdaysmallthansettingday)/30;
							$monthlypayment=((($capital*$rate)/100)*30)/30;
							$firstmonthpayment=$monthlypayment+$startdaysmallthensettingdaypayment;
                			
							$total=$capital+$monthlypayment;
							$small=date('Y-m',$currentdate);
							$andsmall=date('d', strtotime('+1 month', strtotime($settingdate)));
                			$i=1;
                			echo "<th>1</th>"."<td>".date('Y-m-d',strtotime($settingdate))."</td>"."<td>0.00 $typeofmoney</td>"."<td>".number_format(($clients[0]->capital),2)." $typeofmoney"."</td>"."<td>0.00 $typeofmoney</td>";
                			echo "<td>0.00 $typeofmoney</td>";
                			if($small<=date('Y-m') && date('d')>$andsmall)
                					{
                						echo '<td style="color:#45AB5C;font-weight:bold;">ត្រូវបានបង់</td>';
                						
                					}else{
                						echo '<td style="color:#BF3166;font-weight:bold;">មិនត្រូវបានបង់</td>';
                						
                					}
                			
                			while($currentdate<$end){
                				$currentdate= strtotime('+1 month', $currentdate);
                				$cur_date=date('Y-m-d', $currentdate);
                				$small=date('Y-m',$currentdate);
                				$andsmall=date('d', strtotime('+1 month', strtotime($settingdate)));
                				echo "<tr><th>".(($i++)+1)."</th>"."<td>".$cur_date."</td>";
								echo "<td>0.00 $typeofmoney </td>";
								echo "<td>".number_format(($clients[0]->capital),2)." ".$typeofmoney."</td>";
								
								if($i==2){
									echo "<td>".number_format(($firstmonthpayment),2)." $typeofmoney"."</td>";
								}else{
									echo "<td>".number_format(($monthlypayment),2)." ".$typeofmoney."</td>";
								}
								if($i==2){
									echo "<td>".number_format(($firstmonthpayment),2)." $typeofmoney"."</td>";
								}elseif($currentdate==$end){
									echo "<td>".number_format(($total),2)." ".$typeofmoney."</td>";
								}else{
									echo "<td>".number_format(($monthlypayment),2)." $typeofmoney"."</td>";
								}
                				if($small<=date('Y-m') && date('d')>$andsmall)
                					{
                						echo '<td style="color:#45AB5C;font-weight:bold;">ត្រូវបានបង់</td>';
                						
                					}else{
                						echo '<td style="color:#BF3166;font-weight:bold;">មិនត្រូវបានបង់</td>';
                					
                					}
                			}
                		}
                		elseif(date('d',strtotime($startdate))>=date('d',strtotime($settingdate)))
                			{
                				$daysoffirstmonth=(30-(date('d', strtotime($startdate))))+30;
                				//echo "</br>";
                				$daysoffirstmonth=(30-(date('d', strtotime($startdate))))+date('d', strtotime('+1 month', strtotime($settingdate)));
                				$totalfirstmonthpayment=((($capital*$rate)/100)*$daysoffirstmonth)/30;
								$monthlypayment=((($capital*$rate)/100)*30)/30;
// 								
								$finaltotal=$capital+$monthlypayment;
								$bigup=date('Y-m',$currentdate);
								$andbigup=date('d', strtotime('+1 month', strtotime($settingdate)));
								echo "<th>1</th>"."<td>".date('Y-m-d',strtotime($settingdate))."</td>"."<td>0.00 $typeofmoney</td>"."<td>".number_format(($clients[0]->capital),2)." $typeofmoney"."</td>"."<td>0.00 $typeofmoney</td>"."<td>0.00 $typeofmoney</td>";
								if($bigup<=date('Y-m') && date('d')>$andbigup)
								{
									echo '<td style="color:#45AB5C;font-weight:bold;">ត្រូបានបង </td>';
									
								}else{
									echo '<td style="color:#BF3166;font-weight:bold;">មិនត្រូវបានបង់</td>';
									
								}
								$i=1;
                				while($currentdate<$end)
                				{
                					$currentdate=strtotime('+1 month', $currentdate);
                					$cur_date=date('Y-m-d',$currentdate);
                					$big=date('Y-m',$currentdate);
                					$andbig=date('d', strtotime('+1 month', strtotime($settingdate)));
                					echo "<tr><th>".(($i++)+1)."</th>"."<td>".$cur_date."</td><td>0.00 $typeofmoney</td>";
                					echo "<td>".number_format(($clients[0]->capital),2)." $typeofmoney"."</td>";
                					if($i==2){
                						echo "<td>".number_format(($totalfirstmonthpayment),2)." $typeofmoney"."</td>";
//                 					}elseif($currentdate==$end){
//                 						echo "<td>".number_format(($finaltotal),2)." ".$typeofmoney."</td>";
                					}else{
                						echo "<td>".number_format(($monthlypayment),2)." $typeofmoney"."</td>";
                					}
                					if($i==2){
                						echo "<td>".number_format(($totalfirstmonthpayment),2)." $typeofmoney"."</td>";
                					}elseif($currentdate==$end){
                						echo "<td>".number_format(($finaltotal),2)." $typeofmoney"."</td>";
                					}else{
                						echo "<td>".number_format(($monthlypayment),2)." $typeofmoney"."</td>";
                					}
                					if($big<=date('Y-m') && date('d')>$andbig)
                					{
                						echo '<td style="color:#45AB5C;font-weight:bold;">ត្រូវបានបង់ </td>';
                						
                					}else{
                						echo '<td style="color:#BF3166;font-weight:bold;">មិនត្រូវបានបង់ </td>';
                						
                					}
//                 					
                			}
//                 			
							}
                			

                	?>
            </tbody>
        </table>
    </div>
     <div class="form-group">	
                <label class="col-sm-2 control-label"></label>
                <div class="btn pull-right">
                    <a href="<?php echo base_url('clients'); ?>" class="btn btn-info btn-sm" style="margin-right:20px;">ត្រឡប់ក្រោយ</a>                    
                    
                </div> 
    </div>
</div>

