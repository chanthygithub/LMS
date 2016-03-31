<div class='row'>
    <div class="col-sm-12">
        <div class="table-caption">
            កែប្រែអ្នកប្រើ
        </div>
    </div>
</div>
<hr class="hr" />
<div  class='row'>
    <div class='col-sm-12'>
        <form name='frm' class="form-horizontal" action="<?php echo base_url('users/edit');?>" method="post" >
            <!-- First Name -->
            <div class="form-group">
                <label for='userid' class="col-sm-2 control-label">User ID</label>
                <div class="col-sm-3">
                    <input type="text" id='userid' name='userid' class="form-control" value="<?php echo $users[0]->userid;?>" readonly="readonly"/>
                </div>*
            </div>
            <!-- Last Name -->
            <div class="form-group">
                <label for='firstname' class="col-sm-2 control-label">First Name</label>
                <div class="col-sm-3">
                    <input type="text" id='firstname' name='firstname' class="form-control" value="<?php echo $users[0]->firstname;?>"/>
                </div>*
            </div>
			<div class="form-group">
                <label for='lastname' class="col-sm-2 control-label">Last Name</label>
                <div class="col-sm-3">
                    <input type="text" id='lastname' name='lastname' class="form-control" value="<?php echo $users[0]->lastname;?>"/>
                </div>*
            </div>
            <!-- Gender -->
            <div class="form-group">
                <label for='gender' class="col-sm-2 control-label">Gender</label>
                <div class="col-sm-3">
                    <select name="gender" id='gender' class="form-control">
                    	<?php if($users[0]->gender=='Male'){?>
                        <option selected value='Male'>Male</option>
                        <option value='Female'>Female</option>
                        <?php }else{?>
                        <option value='Male'>Male</option>
                        <option selected value='Female'>Female</option>
                        <?php }?>
                    </select>
                </div>
            </div>
            <!-- Email -->
            <div class="form-group">
                <label for='email' class="col-sm-2 control-label">Email</label>
                <div class="col-sm-3">
                    <input type="email" id='email' name='email' class="form-control" value="<?php echo $users[0]->email;?>"/>
                </div>
            </div>
            <!-- User Name -->
            <div class="form-group">
                <label for='username' class="col-sm-2 control-label">User Name</label>
                <div class="col-sm-3">
                    <input type="text" id='username' name='username' class="form-control" value="<?php echo $users[0]->username;?>"/>
                </div>*
            </div>
             <!-- Password -->
            <div class="form-group">
                <label for='pass' class="col-sm-2 control-label">Password</label>
                <div class="col-sm-3">
                    <input type="password" id='pass' name='pass' class="form-control" />
                </div>*
            </div>
			 <!-- Address -->
			<div class="form-group">
                <label for='address' class="col-sm-2 control-label">Address</label>
                <div class="col-sm-3">
                    <input type="text" id='address' name='address' class="form-control" value="<?php echo $users[0]->address;?>"/>
                </div>
            </div>
            <!-- User Status -->
             <div class="form-group">
                <label for='pass' class="col-sm-2 control-label">Status</label>
                <div class="col-sm-3">
                    <input type="number" id='number' name='number' class="form-control" value="<?php echo $users[0]->status;?>"/>
                </div>
            </div>
            <!-- Button Group -->
            <div class="form-group">
                <label class="col-sm-2 control-label"></label>
                <div class="col-sm-3">
                    <input type="submit" value='រក្សាទុកការផ្លាសប្តូរ' class="btn btn-sm btn-primary" onclick="return confirm('តើអ្នកចង់រក្សាទុកឯកសារនេះទេ?')" />
                    <input type="reset" value="បោះបង់" class='btn btn-sm btn-danger' />
                    <a href="<?php echo base_url('users'); ?>" class="btn btn-info btn-sm">ត្រឡប់ក្រោយ</a>                    
                    <div id='sms'><?php echo "<br/>".$sms; ?></div>
                </div> 
            </div>
        </form>
    </div>
</div>
