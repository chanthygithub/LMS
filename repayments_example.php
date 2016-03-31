<head>
<?php
    /*------------------------------------------------------------------------------------------
         Monthly Mortgage Payment Calculator -youlay hong
    --------------------------------------------------------------------------------------------*/
    // 52 - Weekly
    // 26 - Biweekly
    // 12 - Monthly
    //  6 - Bimonthly
/*
    $period = 1; 
    function calculateMortgage($balance,$rate,$term){
       global $period; 
       $N = $term * $period; 
       $I = ($rate/100)/$period;
       $v = pow((1+$I),$N);
       $t = ($I*$v)/($v-1);
       $result = $balance*$t;
       return $result;
    }
    $balance = isset($_POST['balance']) ? $_POST['balance'] : '';
    $rate    = isset($_POST['rate']) ? $_POST['rate'] : '';
    $term    = isset($_POST['term']) ? $_POST['term'] : '';
?>
 
 
 
 
   <title>Mortgage Payment Calculator | youlay</title>
   <link href="style/style.css" rel="stylesheet" type="text/css">
 
 
    <div id="main">
      <div class="caption">Mortgage Payment Calculator</div>
      <div id="icon"> </div>
      <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
        <table width="100%">
          <tbody><tr><td>Loan balance:</td><td><input class="text" name="balance" type="text" size="15" value="<?php echo $balance; ?>"> $</td></tr>
          <tr><td>Interest rate:</td><td> <input class="text" name="rate" type="text" size="5" value="<?php echo $rate; ?>"> %</td></tr>
          <tr><td>Loan term:</td><td> <input class="text" name="term" type="text" size="5" value="<?php echo $term; ?>"> Month</td></tr>
          <tr><td align="center" colspan="2">
<input class="text" type="submit" name="submitBtn" value="Calculate"></td></tr>
        </tbody></table>  
      </form>
    <!--?php    
        if ((isset($_POST['submitBtn']) && ($balance != '') && ($rate != '') && ($term != ''))){      
    ?-->
      <div class="caption">RESULT:</div>
      <div id="icon2"> </div>
      <div id="result">
	  <?php
   
                echo "";
            ?>
        <table width="100%">
            <?php
                $pay = round(calculateMortgage($balance,$rate,$term),2); 
                $pay1 = round(($balance/$term),3);
                echo '<tr><tbody><tr><td>Monthly payment:</td><td class="res"> $'.$pay1.'</td></tr><tr><td>Total interest:</td><td> $'.(($term*$pay*$period)-$balance).'</td></tr></tbody></table>';
				?>
            <?php
               echo "<br/>";
               echo "";
               echo "";
               for ($i=0;$i<($term*$period);$i++){
                  $tmp = (($pay) - ($balance*($rate/100/$period)));
                  $diff = round($tmp,2);
                  $int  = round(($balance*$rate/100/$period),2);
                  $princ = $balance - $diff;
                  $princ1 = $int + $pay1;
                  $balance = round($balance,3);
                   if($balance < $pay1){
                        $princ1 = $balance + $pay1; 
                    $balance = 0;
                  }
                  echo "";
                  $test = $balance = $princ;
               }
               echo '<table class="detail" border="1"><tbody><tr><td>Month</td><td>Principle</td><td>Interest</td><td>Principle monthly payment</td><td>Total Monthly Payment</td></tr><tr><td>'.$i.'month</td><td> $'.$balance.'</td><td> $'.$int."</td><td> $".$pay1."</td><td>".$princ1.'</td></tr></tbody></table>';
            ?>
     </div>
<!--?php            
    }
?-->
    <div id="source"><a href="http://webdevelopsharing.blogspot.com">Web develop sharing</a></div>
    </div>
	*/
 // Set timezone

 if(isset($_POST['submit']))
{
	date_default_timezone_set('UTC');
 
 // Start date
 $capital= $_POST['capital'];
 $rate= $_POST['rate']; 
 $start_date = $_POST['startdate'];
 // End date
 $settingdate= $_POST['settingdate'];
 $end_date = $_POST['enddate'];
 
 while (strtotime($settingdate) <= strtotime($end_date)) {
					if(date('d',strtotime($start_date))>date('d',strtotime($settingdate)))
						{
							//echo "$i"."$settingdate"."<br/>";
							//$settingdate= date('Y-m-d',strtotime("+1 month",strtotime($settingdate)));
							echo $start_date."<br/>";
							echo $days=date('d',strtotime($settingdate))-date('d',strtotime($start_date))."<br/>";
							
						}else if(date('d',strtotime($start_date))<date('d',strtotime($settingdate)))
						{
							
							echo $start_date."<br/>";
							echo $days=date('d',strtotime($settingdate))-date('d',strtotime($start_date))."<br/>";
							echo $repayment=((($capital*$rate)/100)*$days)/30;
							echo "<br/>";
							
						}
					//$i;
					for($i=1;$i<=date('m',strtotime($end_date));$i++){
						echo "$i".". ".$settingdate."<br/>";	
						$settingdate = date ("Y-m-d", strtotime("+1 month", strtotime($settingdate)));		
						
					}
					
 }
	
}
 
 
 
?>
</head>
<form action="" method="post">
Capital:<input type="number" name="capital"/><br/>
Rate:<input type="number" name="rate"/><br/>
Start Date:<input type="date" name="startdate"/><br/>
settingdate<input type="date" name="settingdate"/><br/>
End Date:<input type="date" name="enddate"/><br/>
<input type="submit" value="submit" name="submit"/>
</form>
