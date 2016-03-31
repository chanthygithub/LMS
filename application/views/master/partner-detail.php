
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
<script type="text/javascript">
    $(function () {
        $("#chpay").click(function () {
            if ($(this).is(":checked")) {
                $("#dvpay").show();
            } else {
                $("#dvpay").hide();
            }
        });
    });
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
                    <th>លេខកូដដែគូ</th>
                    <th>មូលធន</th>
                    <th>ប្រភេទលុយ</th>
                    <th>ថ្ងៃដាក់លុយ</th>
                    <th>លំអិត</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                	<td><a href="#"><span class="caret"></span></a></td>
                    <td><?php echo $partnerscapital[0]->partnersid; ?></td>
                    <td><?php echo $partnerscapital[0]->capital;?></td>
                    <td><?php echo $partnerscapital[0]->moneytype;?></td>
                    <td><?php echo $partnerscapital[0]->datein; ?></td>
                    <td><?php echo $partnerscapital[0]->description; ?></td>
                    
                </tr>
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

