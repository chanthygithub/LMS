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
                    <th>ឈ្មោះដែគូ</th>
                    <th>ភេទ</th>
                    <th>អាសយដ្ឋាន</th>
                    <th>លេខទូរស័ព្ទ</th>
					<th>អ៊ីម៉ែល</th>
					<th>ស្ថានភាព</th>
                </tr>
            </thead>
            <tbody>
                <?php if(is_array($partners)) {foreach($partners as $partner){ ?>
                <tr data-toggle="collapse" data-target="#demo1" class="accordion-toggle">
                	<td><a href="#"><span class="caret"></span></a></td>
                    <td><?php echo $partner->partnerid; ?></td>
                    <td><?php echo $partner->fullname;?></td>
                    <td><?php echo $partner->gender; ?></td>
                    <td><?php echo $partner->address; ?></td>
                    <td><?php echo $partner->phone; ?></td>
                    <td><?php echo $partner->email; ?></td>
                    	<td>
                        <a href='<?php echo base_url('partners/'.$partner->partnerid);?>' class="btn btn-danger btn-xs" title="Delete" onclick="return confirm('តើអ្នកចង់លុបវាឬ?')"><i class="glyphicon glyphicon-trash"></i></a>
                        &nbsp;&nbsp;
                        <a href="<?php echo base_url('partners/'.$partner->partnerid); ?>" class="btn btn-success btn-xs" title='Edit'><i class="glyphicon glyphicon-edit"></i></a>
                        &nbsp;&nbsp;
                        <a href="<?php echo base_url('partnerscapital/'.$partner->partnerid); ?>" class="btn btn-success btn-xs" title='Detail'><i class="glyphicon glyphicon-new-window"></i></a>
                        
                    </td>
                </tr>
				<tr>
                	<td colspan="2" class="hiddenRow">
                    	<div class="accordian-body collapse" id="demo1">
                        	<table class="tbl">
                        		<tr>
					                 <th>លេខកូដដែគូមូលធន</th>
					                 <th>មូលធន</th>
					                 <th>ថ្ងៃដាក់លុយ</th>
					                 <th>លំអិត</th>
								</tr>
								 <?php if(is_array($partnerscapital)) {foreach($partnerscapital as $capitals){ ?>
				                <tr>
					                  <td><?php echo $capitals->partnersid; ?></td>
					                  <td><?php echo number_format(($capitals->capital),2)." "."<span style='margin-left:80%;'>$capitals->moneytype</span>";?></td>
					                  <td><?php echo $capitals->datein; ?></td>
					                  <td><?php echo $capitals->description; ?></td>
					             </tr>
				                 <?php }}?>
                        		</table>
                    		</div>
                		</td>
            		</tr>
                <?php }}?>
            </tbody>
        </table>
    </div>
</div>
