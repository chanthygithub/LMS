<div class='row'>
    <div class="col-sm-6">
        <div class="table-caption">
            ចនួនអ្នកប្រើ
        </div>
        
    </div>
    <div class="col-sm-6">
        <a href="<?php echo base_url('users/newuser'); ?>" class="btn btn-success btn-xs pull-right"><i class="glyphicon glyphicon-plus"></i> បង្កើតអ្នកប្រើ</a>
    </div>
</div>
<hr class="hr" />
<div class="row">
    <div class="col-sm-12">
        <table class='tbl'>
            <thead>
                <tr>
                    <th>លេខកូដអ្នកប្រើ</th>
                    <th>នាម</th>
                    <th>នាមត្រកូល</th>
                    <th>ភេទ</th>
					<th>ឈ្មោះអ្នកប្រើ</th>
                    <th>អ៊ីម៉ែល</th>
                    <th>អាសយដ្ឋាន</th>
                    <th>ស្ថានភាព</th>
                    <th>សកម្មភាព</th>
                    
                </tr>
            </thead>
            <tbody>
                <?php foreach($users as $user){ ?>
                <tr>
                    <td><?php echo $user->userid; ?></td>
                    <td><?php echo $user->firstname; ?></td>
                    <td><?php echo $user->lastname; ?></td>
                    <td><?php echo $user->gender; ?></td>
                    <td><?php echo $user->username; ?></td>
					<td><?php echo $user->email; ?></td>
                    <td><?php echo $user->address; ?></td>
                    <td><?php echo $user->status; ?></td>
                    <td>
                        <a href='<?php echo base_url('users/delete/'.$user->userid);?>' class="btn btn-danger btn-xs" title="Delete" onclick="return confirm('Do you want to delete it?')"><i class="glyphicon glyphicon-trash"></i></a>
                        &nbsp;&nbsp;
                        <a href="<?php echo base_url('users/edituser/'.$user->userid); ?>" class="btn btn-success btn-xs" title='Edit'><i class="glyphicon glyphicon-edit"></i></a>
                    </td>
                </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
</div>