<style>
	.hiddenRow {
    padding: 0 !important;
}
</style>
<div class='row'>
    <div class="col-sm-6">
        <div class="table-caption">
                បញ្ជីដែគូ
        </div>
        
    </div>
    <div class="col-sm-6">
        <a href="<?php echo base_url('clients/newclient'); ?>" class="btn btn-success btn-xs pull-right"><i class="glyphicon glyphicon-plus"></i>បង្កើតអតិថិជ</a>
    </div>
</div>
<hr class="hr" />
    <div class="col-sm-12">
      <div class="panel-group" id="accordion">
        <table class="table table-condensed" style="border-collapse:collapse;">
            <thead>
                <tr>
                	<th><input type="checkbox"/></th>
                    <th>លេខកូដដែគូ</th>
                    <th>មូលធន</th>
                    <th>ប្រភេទលុយ</th>
                    <th>ថ្ងៃដាក់</th>
                    <th>លំអិត</th>
                    <th>ស្ថានភាព</th> 
                </tr>
            </thead>
            <tbody>
                <?php if(is_array($partnerscapital)) {foreach($partnerscapital as $capitals){ ?>
                <tr data-toggle="collapse" data-target="#demo1" class="accordion-toggle">
                	<td><a href="#"><span class="caret"></span></a></td>
                    <td><?php echo $capitals->partnersid; ?></td>
                    <td><?php echo $capitals->capital;?></td>
                    <td><?php echo $capitals->moneytype; ?></td>
                    <td><?php echo $capitals->datein; ?></td>
                    <td><?php echo $capitals->description; ?></td>
                    <td>
                        <a href='<?php echo base_url('capitals/'.$capitals->partnersid);?>' class="btn btn-danger btn-xs" title="Delete" onclick="return confirm('តើអ្នកចង់លុបវាឬ?')"><i class="glyphicon glyphicon-trash"></i></a>
                        &nbsp;&nbsp;
                        <a href="<?php echo base_url('capitals/'.$capitals->partnersid); ?>" class="btn btn-success btn-xs" title='Edit'><i class="glyphicon glyphicon-edit"></i></a>
                        &nbsp;&nbsp;
                        <a href="<?php echo base_url('capitals/'.$capitals->partnersid); ?>" class="btn btn-success btn-xs" title='Detail'><i class="glyphicon glyphicon-new-window"></i></a>
                        
                    </td>
                <?php }}?>
            </tbody>
        </table>
    </div>
</div>


<!-- <div class="container"> -->
<!--   <h2>Collapse</h2> -->

<!--   <div class="panel-group" id="accordion"> -->
<!--     <div class="panel panel-default"> -->
<!--       <div class="panel-heading"> -->
<!--         <h4 class="panel-title"> -->
<!--           <a data-toggle="collapse" data-parent="#accordion" href="#collapse1">Collapsible Group 1</a> -->
<!--         </h4> -->
<!--       </div> -->
<!--       <div id="collapse1" class="panel-collapse collapse in"> -->
<!--         <div class="panel-body">Lorem ipsum dolor sit amet, consectetur adipisicing elit, -->
<!--         sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, -->
<!--         quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</div> -->
<!--       </div> -->
<!--     </div> -->

<!--   </div>  -->
<!-- </div> -->

