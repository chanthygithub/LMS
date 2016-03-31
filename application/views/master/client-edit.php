<!-- 	<link rel="stylesheet" href="http://code.jquery.com/ui/1.10.3/themes/smoothness/jquery-ui.css" /> -->
<!--     <script src="http://code.jquery.com/jquery-1.9.1.js"></script> -->
<!--     <script src="http://code.jquery.com/ui/1.10.3/jquery-ui.js"></script> -->
<!--     <script type="text/javascript"> -->
<!--       $(function() {
//         $( "#startdate" ).datepicker();
//      });
//     $(function(){
//         $("#enddate").datepicker();
//     });
     </script>-->
     	<link rel="stylesheet" href="http://code.jquery.com/ui/1.10.3/themes/smoothness/jquery-ui.css" />
    <script src="http://code.jquery.com/jquery-1.9.1.js"></script>
    <script src="http://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>
    <script type="text/javascript">
 $(function() {
        $( "#startdate" ).datepicker({
        	minDate: 0,
            maxDate: '+1Y+6M',
            onSelect: function (dateStr) {
                var min = $(this).datepicker('getDate'); // Get selected date
                $("#enddate").datepicker('option', 'minDate', min || '0'); // Set other min, default to today
            }
        })
     }); 
  $(function(){ 
     $("#enddate").datepicker({
    	 minDate: '0',
    	    maxDate: '+1Y+6M',
    	    onSelect: function (dateStr) {
    	        var max = $(this).datepicker('getDate'); // Get selected date
    	        $('#datepicker').datepicker('option', 'maxDate', max || '+1Y+6M'); // Set other max, default to +18 months
    	        var start = $("#startdate").datepicker("getDate");
    	        var end = $("#enddate").datepicker("getDate");
    	        var days = (end - start) / (1000 * 60 * 60 * 24);
    	        $("#duration").val(days);
    	    }
     })
  });
  $(function(){ 
	     $("#settingdate").datepicker({
	    	 	minDate: '0',
	    	    maxDate: '+1Y+6M',
	    	    onSelect: function (dateStr) {
	    	        var max = $(this).datepicker('getDate'); // Get selected date
	    	        $('#datepicker').datepicker('option', 'maxDate', max || '+1Y+6M'); // Set other max, default to +18 months
	    	        var startdate = $("#startdate").datepicker("getDate");
	    	        var settingdate = $("#settingdate").datepicker("getDate");
	    	        var days = (settingdate - startdate) / (1000 * 60 * 60 * 24);
	    	        $("#duration").val(days);
	    	    }
	     })
	  });
</script> 
<div class='row'>
    <div class="col-sm-12">
        <div class="table-caption">
            បង្កើតអតិថិជនថ្មី
        </div>
    </div>
</div>
<hr class="hr" />
<div  class='row'>
    <div class='col-sm-12'>
        <form name='frm' class="form-horizontal" action="<?php echo base_url('clients/edit');?>" method="post" >
            <!-- First Name -->
            <div class="form-group">
                <label for='userid' class="col-sm-2 control-label">លេខកូដអតិថិជន</label>
                <div class="col-sm-3">
                    <input type="text" id='clientid' name='clientid' class="form-control" value="<?php echo $clients[0]->clientid;?>" readonly="readonly"/>
                </div>*
            </div>
            <!-- Last Name -->
            <div class="form-group">
                <label for='firstname' class="col-sm-2 control-label">នាម</label>
                <div class="col-sm-3">
                    <input type="text" id='firstname' name='firstname' class="form-control" value="<?php echo $clients[0]->firstname;?>" />
                </div>*
            </div>
			<div class="form-group">
                <label for='lastname' class="col-sm-2 control-label">នាមត្រកូល</label>
                <div class="col-sm-3">
                    <input type="text" id='lastname' name='lastname' class="form-control" value="<?php echo $clients[0]->lastname;?>"/>
                </div>*
            </div>
            <div class="form-group">
                <label for='fullname' class="col-sm-2 control-label">ឈ្មោះពេញ</label>
                <div class="col-sm-3">
                    <input type="text" id='fullname' name='fullname' class="form-control" value="<?php echo $clients[0]->fullname;?>"/>
                </div>*
            </div>
            <!-- Gender -->
            <div class="form-group">
                <label for='gender' class="col-sm-2 control-label">ភេទ</label>
                <div class="col-sm-3">
                    <select name="gender" id='gender' class="form-control">
                    	<?php if($clients[0]->gender=='ប្រុស'){?>
                        <option selected value='ប្រុស'>ប្រុស</option>
                        <option value='ស្រី'>ស្រី</option>
                         <?php }else{?>
                         <option value='ប្រុស'>ប្រុស</option>
                        <option selected value='ស្រី'>ស្រី</option>
                        <?php }?>
                    </select>
                </div>
            </div>
            <!-- Email -->
            <div class="form-group">
                <label for='age' class="col-sm-2 control-label">អាយុ</label>
                <div class="col-sm-3">
                    <input type="number" id='age' name='age' class="form-control" value="<?php echo $clients[0]->age;?>"/>
                </div>
            </div>
            <div class="form-group">
                <label for='email' class="col-sm-2 control-label">អ៊ីម៉ែល</label>
                <div class="col-sm-3">
                    <input type="email" id='email' name='email' class="form-control" value="<?php echo $clients[0]->email;?>"/>
                </div>
            </div>
            <!-- User Name -->
            <div class="form-group">
                <label for='phone' class="col-sm-2 control-label">លេខទូរស័ព្ទ</label>
                <div class="col-sm-3">
                    <input type="text" id='phone' name='phone' class="form-control" value="<?php echo $clients[0]->phone;?>"/>
                </div>*
            </div>
			 <!-- Address -->
			<div class="form-group">
                <label for='address' class="col-sm-2 control-label">អាសយដ្ឋាន</label>
                <div class="col-sm-3">
                    <input type="text" id='address' name='address' class="form-control" value="<?php echo $clients[0]->address;?>"/>
                </div>
            </div>
            <!-- User Status -->
             <div class="form-group">
                <label for='startdate' class="col-sm-2 control-label">ថ្ងៃចាប់ផ្តើម</label>
                <div class="col-sm-3">
                    <input type="text" id='startdate' name='startdate' class="form-control" value="<?php echo $clients[0]->startdate;?>"/>
                </div>
            </div>
             <div class="form-group">
                <label for='settingdate' class="col-sm-2 control-label">ថ្ងៃដែលត្រូវប្រមូល</label>
                <div class="col-sm-3">
                    <input type="text" id='settingdate' name='settingdate' class="form-control" value="<?php echo $clients[0]->settingdate;?>"/>
                </div>
            </div>
            <div class="form-group">
                <label for='enddate' class="col-sm-2 control-label">ថ្ងៃបញ្ចប់</label>
                <div class="col-sm-3">
                    <input type="text" id='enddate' name='enddate' class="form-control" value="<?php echo $clients[0]->enddate;?>"/>
                </div>
            </div>
            <div class="form-group">
                <label for='capital' class="col-sm-2 control-label">មូលធន</label>
                <div class="col-sm-3">
                    <input type="number" id='capital' name='capital' class="form-control" value="<?php echo $clients[0]->capital;?>"/>
                </div>
                <label for='capital' class="col-sm-2 control-label"​ style="text-align: left;">ប្រភេទលុយ</label>
                <div class="col-sm-3">
                    <select name="moneytype" id='moneytype' class="form-control" style="width:100px; margin-left:-130px;">
                    	<?php if($clients[0]->moneytype=='រៀល'){?>
                        <option selected value='រៀល'>រៀល</option>
                        <option value='ដុល្លារ'>ដុល្លារ</option>
                        <?php }else{?>
                        <option value='រៀល'>រៀល</option>
                        <option selected value='ដុល្លារ'>ដុល្លារ</option>
                        <?php }?>
                    </select>
                </div>
            </div>
            <div class="form-group">
                <label for='rate' class="col-sm-2 control-label">អត្រាការប្រាក់</label>
                <div class="col-sm-3">
                    <input type="number" id='rate' name='rate' class="form-control" value="<?php echo $clients[0]->rate;?>"/>
                </div>
            </div>
            <div class="form-group">
                <label for='duration' class="col-sm-2 control-label">រយះពេលខ្ចី</label>
                <div class="col-sm-3">
                    <input type="text" id='duration' name='duration' class="form-control" value="<?php echo $clients[0]->duration;?>" readonly="readonly"/> 
                </div>
            </div>
             <div class="form-group">
                <label for='status' class="col-sm-2 control-label">ស្ថានភាព</label>
                <div class="col-sm-3">
                    <input type="text" id='status' name='status' class="form-control" value="<?php echo $clients[0]->status;?>"/>
                </div>
            </div>
            <!-- Button Group -->
            <div class="form-group">
                <label class="col-sm-2 control-label"></label>
                <div class="col-sm-3">
                    <input type="submit" value='រក្សាទុកការផ្លាស់ប្តូរ' class="btn btn-sm btn-primary" onclick="return confirm('តើអ្នកចង់រក្សាទុកឯកសារនេះទេ?')" />
                    <input type="reset" value="បោះបង់" class='btn btn-sm btn-danger' />
                    <a href="<?php echo base_url('clients'); ?>" class="btn btn-info btn-sm">ត្រឡប់ក្រោយ</a>                    
                    <div id='sms'><?php echo "<br/>".$sms; ?></div>
                </div> 
            </div>
           
        </form>
    </div>
</div>
