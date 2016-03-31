
<div class='row'>
    <div class="col-sm-6">
        <div class="table-caption">
                បញ្ជីអតិថិជន
        </div>
        
    </div>
    <div class="col-sm-6">
        <a href="<?php echo base_url('clients/newclient'); ?>" class="btn btn-success btn-xs pull-right"><i class="glyphicon glyphicon-plus"></i>បង្កើតអតិថិជ</a>
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
                    <th>ថ្ងៃដែលត្រូវប្រមូល</th>
                    <th>ថ្ងៃបញ្ចប់</th>
                    <th>មូលធន</th>
                    <th>អត្រាការប្រាក់</th>
                    <th>រយះពេលខ្ចី</th>
                    <th>ស្ថានភាព</th>
                    <th>សកម្មភាព</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($clients as $client){ ?>
                <tr>
                	<td><span class="caret"></span></td>
                    <td><?php echo $client->clientid; ?></td>
                    <td><?php echo $client->firstname;?></td>
                    <td><?php echo $client->lastname;?></td>
                    <td><?php echo $client->fullname; ?></td>
                    <td><?php echo $client->gender; ?></td>
                    <td><?php echo $client->email; ?></td>
                    <td><?php echo $client->phone; ?></td>
					<td><?php echo $client->address; ?></td>					
                    <td><?php echo $client->startdate; ?></td>
                    <td><?php echo $client->settingdate;?></td>
                    <td><?php echo $client->enddate; ?></td>
                    <td><?php echo number_format(($client->capital),2).' '.$client->moneytype;?></td>
                    <td><?php echo $client->rate."%"; ?></td>
                    <td><?php echo $client->totalday." "."days"; ?></td>
                    <?php //echo $clients[0]->status;
                    		$status= $client->status;
                    		if($status=="Finished")
                    		{
                    			echo "<td style='color:#45AB5C;'>".$status."</td>";
                    		}else{
                    			echo "<td style='color:#BF3166;'>".$status."</td>";
                    		}
						?>
                    <td>
                        <a href='<?php echo base_url('clients/delete/'.$client->clientid);?>' class="btn btn-danger btn-xs" title="Delete" onclick="return confirm('តើអ្នកចង់លុបវាឬ?')"><i class="glyphicon glyphicon-trash"></i></a>
                        &nbsp;&nbsp;
                        <a href="<?php echo base_url('clients/editclient/'.$client->clientid); ?>" class="btn btn-success btn-xs" title='Edit'><i class="glyphicon glyphicon-edit"></i></a>
                        &nbsp;&nbsp;
                        <a href="<?php echo base_url('clients/clientdetail/'.$client->clientid); ?>" class="btn btn-success btn-xs" title='Detail'><i class="glyphicon glyphicon-new-window"></i></a>
                        
                    </td>
                </tr>
                <?php }?>
            </tbody>
        </table>
    </div>
</div>
