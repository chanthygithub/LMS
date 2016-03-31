
	<link rel="stylesheet" href="<?php echo base_url('assets/css/jquery-ui.css');?>" />
    <script src="<?php echo base_url('assets/js/jquery-1.9.1.js');?>"></script>
    <script src="<?php echo base_url('assets/js/jquery-ui.js');?>"></script>
    <script type="text/javascript">
 $(function() {
        $( "#startdate" ).datepicker({
        	minDate: 0,
            maxDate: '+1Y+6M',
            onSelect: function (dateStr) {
                var min = $(this).datepicker('getDate'); // Get selected date
                $("#settingdate").datepicker('option', 'minDate', min || '0'); // Set other min, default to today
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
    	        var stdate = $("#startdate").datepicker("getDate");
    	        var enddate = $("#enddate").datepicker("getDate");
    	        var totaldays = (enddate - stdate) / (1000 * 60 * 60 * 24);
    	        $("#totalday").val(totaldays);
    	    }
     })
  }); 
 
</script>
<script type="text/javascript">
function validatePhone(phone) {
    var error = "";
    var stripped = phone.value.replace(/[\(\)\.\-\ ]/g, '');
 
   if (phone.value == "") {
        error = "You didn't enter a phone number.\n";
        phone.style.background = 'Yellow';
        alert(error);
		return false;
 
    } else if (isNaN(parseInt(stripped))) {
        error = "The phone number contains illegal characters. Don't include dash (-)\n";
        phone.style.background = 'Yellow';
        alert(error);
		return false;
    } else if (!(stripped.length == 10)) {
        error = "The phone number is the wrong length. Make sure you included an area code. Don't include dash (-)\n";
        phone.style.background = 'Yellow';
        alert(error);
		return false;
    }
    return true;
}
</script> 

<script>
$(document).ready(function() { 
	 
	  $('#btn-submit').click(function() {  
	 
	    $(".error").hide();
		//var phonecheck=([0-9]{10})|(\([0-9]{3}\)\s+[0-9]{3}\-[0-9]{4});
	    var hasError = false;
	    var emailReg = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/;
	    var emailblockReg = /^([\w-\.]+@(?!gmail.com)(?!yahoo.com)(?!hotmail.com)([\w-]+\.)+[\w-]{2,4})?$/;
	 
	    var emailaddressVal = $("#email").val();
	    if(emailaddressVal == '') {
	      $("#email").after('<span class="error" style="color:red;">Please enter your email address.</span>');
	      hasError = true;
	    }
	 
	    else if(!emailReg.test(emailaddressVal)) {
	      $("#email").after('<span class="error" style="color:red;">Enter a valid email address.</span>');
	      hasError = true;
	    }
	 
	    if(hasError == true) { return false; }
		
	    });

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
        <form name='frm' class="form-horizontal" action="<?php echo base_url('clients/add');?>" method="post" id="frm">
            <!-- First Name -->
            <div class="form-group">
                <label for='userid' class="col-sm-2 control-label">លេខកូដអតិថិជន</label>
                <div class="col-sm-3">
                    <input type="text" id='clientid' name='clientid' class="form-control" />
                </div>*
            </div>
            <!-- Last Name -->
            <div class="form-group">
                <label for='firstname' class="col-sm-2 control-label">នាម</label>
                <div class="col-sm-3">
                    <input type="text" id='firstname' name='firstname' class="form-control" />
                </div>*
            </div>
			<div class="form-group">
                <label for='lastname' class="col-sm-2 control-label">នាមត្រកូល</label>
                <div class="col-sm-3">
                    <input type="text" id='lastname' name='lastname' class="form-control" />
                </div>*
            </div>
            <div class="form-group">
                <label for='fullname' class="col-sm-2 control-label">ឈ្មោះពេញ</label>
                <div class="col-sm-3">
                    <input type="text" id='fullname' name='fullname' class="form-control" />
                </div>*
            </div>
            <!-- Gender -->
            <div class="form-group">
                <label for='gender' class="col-sm-2 control-label">ភេទ</label>
                <div class="col-sm-3">
                    <select name="gender" id='gender' class="form-control">
                        <option selected value='ប្រុស'>ប្រុស</option>
                        <option value='ស្រី'>ស្រី</option>
                    </select>
                </div>
            </div>
            <!-- Email -->
            <div class="form-group">
                <label for='age' class="col-sm-2 control-label">អាយុ</label>
                <div class="col-sm-3">
                    <input type="number" id='age' name='age' class="form-control" />
                </div>
            </div>
            <div class="form-group">
                <label for='email' class="col-sm-2 control-label">អ៊ីម៉ែល</label>
                <div class="col-sm-3">
                    <input type="text" id='email' name='email' class="form-control" />
                </div>
            </div>
            <!-- User Name -->
            <div class="form-group">
                <label for='phone' class="col-sm-2 control-label">លេខទូរស័ព្ទ</label>
                <div class="col-sm-3">
                    <input type="text" id='phone' name='phone' class="form-control" oninput="validatePhone();"/>
                </div>*
            </div>
			 <!-- Address -->
			<div class="form-group">
                <label for='address' class="col-sm-2 control-label">អាសយដ្ឋាន</label>
                <div class="col-sm-3">
                    <input type="text" id='address' name='address' class="form-control" />
                </div>
            </div>
            <!-- User Status -->
             <div class="form-group">
                <label for='startdate' class="col-sm-2 control-label">ថ្ងៃចាប់ផ្តើម</label>
                <div class="col-sm-3">
                    <input type="date" id='startdate' name='startdate' class="form-control" />
                </div>
            </div>
            <div class="form-group">
                <label for='startdate' class="col-sm-2 control-label">ការកំណត់ថ្ងៃប្រមូល</label>
                <div class="col-sm-3">
                    <input type="date" id='settingdate' name='settingdate' class="form-control" />
                </div>
            </div>
            <div class="form-group">
                <label for='enddate' class="col-sm-2 control-label">ថ្ងៃបញ្ចប់</label>
                <div class="col-sm-3">
                    <input type="date" id='enddate' name='enddate' class="form-control" />
                </div>
            </div>
            <div class="form-group">
                <label for='capital' class="col-sm-2 control-label">មូលធន</label>
                <div class="col-sm-3">
                    <input type="number" id='capital' name='capital' class="form-control" />
                </div>
                <label for='capital' class="col-sm-2 control-label"​ style="text-align: left;">ប្រភេទលុយ</label>
                <div class="col-sm-3">
                    <select name="moneytype" id='moneytype' class="form-control" style="width:100px; margin-left:-130px;">
                        <option selected value='រៀល'>រៀល</option>
                        <option value='ដុល្លារ'>ដុល្លារ</option>
                    </select>
                </div>
            </div>
            <div class="form-group">
                <label for='rate' class="col-sm-2 control-label">អត្រាការប្រាក់</label>
                <div class="col-sm-3">
                    <input type="number" id='rate' name='rate' class="form-control" />
                </div>
            </div>
            <div class="form-group">
                <label for='duration' class="col-sm-2 control-label">រយះពេលខ្ចី</label>
                <div class="col-sm-3">
                    <input type="text" id='duration' name='duration' class="form-control" readonly="readonly"/>
                </div>
            </div><div class="form-group">
                <label for='duration' class="col-sm-2 control-label">ថ្ងៃសរុប</label>
                <div class="col-sm-3">
                    <input type="text" id='totalday' name='totalday' class="form-control" readonly="readonly"/>
                </div>
            </div>
             <div class="form-group">
                <label for='status' class="col-sm-2 control-label">ស្ថានភាព</label>
                <div class="col-sm-3">
                    <input type="text" id='status' name='status' class="form-control" />
                </div>
            </div>


            <div class="form-group">
                <label class="col-sm-2 control-label"></label>
                <div class="col-sm-3">
                    <input type="submit" value='រក្សាទុក' class="btn btn-sm btn-primary" onclick="return confirm('តើអ្នកចង់រក្សាទុកឯកសារនេះទេ?')" id="btn-submit"/>
                    <input type="reset" value="បោះបង់" class='btn btn-sm btn-danger' />
                    <a href="<?php echo base_url('clients'); ?>" class="btn btn-info btn-sm">ត្រឡប់ក្រោយ</a>                    
                    <div id='sms'><?php echo "<br/>".$sms; ?></div>
                </div> 
            </div>
        </form>
    </div>
</div>