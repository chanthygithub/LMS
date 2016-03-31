<link rel="stylesheet" href="<?php echo base_url('assets/css/jquery-ui.css');?>" />
<link rel="stylesheet" href="<?php //echo base_url('assets/css/style-search.css');?>" />
<script src="<?php echo base_url('assets/js/jquery-1.9.1.js');?>"></script>
<script src="<?php echo base_url('assets/js/jquery-ui.js');?>"></script>
<script type="text/javascript">
 $(function() {
        $( "#from" ).datepicker({
        	minDate: 0,
            maxDate: '+1Y+6M',
            onSelect: function (dateStr) {
                var min = $(this).datepicker('getDate'); // Get selected date
                $("#to").datepicker('option', 'minDate', min || '0'); // Set other min, default to today
            }
        })
     });
 $(function(){ 
     $("#to").datepicker({
    	 	minDate: '0',
    	    maxDate: '+1Y+6M',
    	    onSelect: function (dateStr) {
    	        var max = $(this).datepicker('getDate'); // Get selected date
    	        $('#datepicker').datepicker('option', 'maxDate', max || '+1Y+6M'); // Set other max, default to +18 months
    	        var startdate = $("#from").datepicker("getDate");
    	        var settingdate = $("#to").datepicker("getDate");
//     	        var days = (settingdate - startdate) / (1000 * 60 * 60 * 24);
//     	        $("#duration").val(days);
    	    }
     })
  }); 
</script>

<?php 
// echo form_open('Reports/selectDataByDate');
//                 echo form_label('Select By Date : ');
//                 $data = array(
//                     'type' => 'date',
//                     'name' => 'date',
//                     'value' => '2015-01-01'
//                 );
//                 echo form_input($data,'class="form-control"');
//                 echo "<div class='error_msg'>";
//                 if (isset($date_error_message)) {
//                     echo $date_error_message;
//                 }
//                 echo "</div>";
//                 echo "<br/>";
//                 echo form_submit('submit', 'Search', 'class="btn btn-sm btn-primary"');
//                 echo form_close();
                

//                     if (isset($clients)) {
//                         if ($clients == 'No record found !') {
//                             echo $clients;
//                         } else {
//                         	echo "<div class='row'>";
//                         	echo "<div class='col-sm-12'>";
//                             echo "<table class='tbl'>";
//                             echo '<thead><tr><th>Client ID</th><th>Full Name</th><th>Gender</th><th>Date</th><th>Capital</th><th>Rate</th><tr/></thead>';
//                            if(is_array($clients)){ foreach ($clients as $value) {
//                                 echo '<tbody><tr><td>' . $value->clientid . '</td><td>' . $value->fullname . '</td><td>' . $value->gender . '</td><td>' . $value->settingdate . '</td><td>' . $value->capital . '</td><td>' . $value->rate . '</td><tr/></tbody>';
//                             } 

//                             echo '</table>';
//                             echo "</div></div>";
//                         }
//                     //}

?>
 
<form name="frmsearchbydate" action="<?php echo base_url('Reports/selectDataByDate');?>" method="post">
<div class="row">
		<div class="form-group">
		      <label for='startdate' class="col-sm-2 control-label" style="width:5%;">ចាបពី៖</label>
		          <div class="col-sm-3" style="width:20%;">
		               <input type="date" id="date" name="date" class="form-control" />
		          </div>
		          <div class="col-sm-3" >
                       <input type="submit" value="Search" class="btn btn-sm btn-primary" id="seachbydate" name="searchbydate" style="height:34px;"/>
                  </div> 
		</div>
</div>
</form>
<div class="row">
    <div class="col-sm-12">
        <table class='tbl'>
            <thead>
                <tr>
                    <th>លេខកូដអតិថិជន</th>
                    <th>ឈ្មោះពេញ</th>
                    <th>ភេទ</th>
                    <th>លេខទូរស័ព្ទ</th>
                    <th>អាសយដ្ឋាន</th>
                    <th>ថ្ងៃប្រមូលលុយ</th>
                    <th>មូលធន</th>
                    <th>អត្រាការប្រាក់</th>
                    <th>ស្ថានភាព</th>
                </tr>
            </thead>
            <tbody>
                <?php if(is_array($clients)){foreach($clients as $client){ ?>
                <tr>               	
                    <td><?php echo $client->clientid; ?></td>
                    <td><?php echo $client->fullname; ?></td>
                    <td><?php echo $client->gender; ?></td>
                    <td><?php echo $client->phone; ?></td>
					<td><?php echo $client->address; ?></td>
					<td><?php echo $client->settingdate;?></td>
                    <td><?php echo number_format(($client->capital),2).' '.$client->moneytype;?></td>
                    <td><?php echo $client->rate."%"; ?></td>
                    <td><?php echo $client->status; ?></td>
                </tr>
                <?php }}?>
            </tbody>
        </table>
    </div>
</div>

