<script src="https://code.jquery.com/jquery-1.10.2.js"></script>
<script>
setInterval(drawClock, 1000);
function drawClock() 
{
	$('#clockDiv').load(document.URL +  ' #clockDiv');
}
</script>
<div id="clockDiv">
<?php
date_default_timezone_set("Asia/Kuala_Lumpur");
$hour = date("H");
$minute = date("i");
$second = date("s");
	$Rsecond = 6.283185307179586476925286766559*30;
	$Msecond = $second*0.0167;
	$Tsecond = $Rsecond * $Msecond;
	$Rminute = 6.283185307179586476925286766559*50;
	$Mminute = $minute*0.0167;
	$Tminute = $Rminute * $Mminute;
	$Rhour = 6.283185307179586476925286766559*70;
	$Mhour = $hour*0.0833;
	$Thour = $Rhour * $Mhour;
	$texttime = date("d-m-Y h:i:s a");
?>
<style>
.second {
  fill: rgba(0, 0, 0, 0);
  stroke: #FFC107;
  stroke-width: 20;
  stroke-dasharray: <?php echo $Tsecond; ?> <?php echo $Rsecond; ?>;
}
.bgsecond {
  fill: rgba(0, 0, 0, 0);
  stroke: #9E9E9E;
  stroke-width: 20;
  stroke-dasharray: <?php echo $Rsecond; ?> <?php echo $Rsecond; ?>;
}
.minute {
  fill: rgba(0, 0, 0, 0);
  stroke: #00BCD4;
  stroke-width: 20;
  stroke-dasharray: <?php echo $Tminute; ?> <?php echo $Rminute; ?>;
}
.bgminute {
  fill: rgba(0, 0, 0, 0);
  stroke: #AEAEAE;
  stroke-width: 21;
  stroke-dasharray: <?php echo $Rminute; ?> <?php echo $Rminute; ?>;
}
.bghour {
  fill: rgba(0, 0, 0, 0);
  stroke: #9E9E9E;
  stroke-width: 20;
  stroke-dasharray: <?php echo $Rhour; ?> <?php echo $Rhour; ?>;
}
.hour {
  fill: rgba(0, 0, 0, 0);
  stroke: #F44336;
  stroke-width: 20;
  stroke-dasharray: <?php echo $Thour; ?> <?php echo $Rhour; ?>;
}
</style>
<svg width="180" height="200">
<circle class="bghour" r="70" cx="100" cy="100" />
<circle class="bgminute" r="50" cx="100" cy="100" />
<circle class="bgsecond" r="30" cx="100" cy="100" />
<circle class="hour" r="70" cx="100" cy="100" />
<circle class="minute" r="50" cx="100" cy="100" />
<circle class="second" r="30" cx="100" cy="100" />
<text x="10" y="200" stroke-width="20" fill="#FF5722" style="font-weight: bold;"><?php echo $texttime; ?></text>
</svg>
</div>
debug
<script src="https://code.jquery.com/jquery-1.10.2.js"></script>
<script>
setInterval(drawClock, 1000);
function drawClock() 
{
	$('#thisdiv').load(document.URL +  ' #thisdiv');
}
</script>
<div id="thisdiv">
<?php
date_default_timezone_set("Asia/Kuala_Lumpur");
$hour = date("H");
$minute = date("i");
$second = date("s");
	$SecondR = 6.283185307179586476925286766559*30;
	$SecondV = $second*0.0167;
	$ssecond = $SecondR * $SecondV;
	$ansRadius = 6.283185307179586476925286766559*50;
	$minuteV = $minute*0.0167;
	$value = $ansRadius * $minuteV;
	$HourR = 6.283185307179586476925286766559*70;
	$HourV = $hour*0.0833;
	$shour = $HourR * $HourV;
?>
<style>
.sec {
  fill: #9E9E9E;
  stroke: #655;
  stroke-width: 20;
  stroke-dasharray: <?php echo $ssecond; ?> <?php echo $SecondR; ?>;
}
.over {
  fill: #AEAEAE;
  stroke: #00BCD4;
  stroke-width: 20;
  stroke-dasharray: <?php echo $value; ?> <?php echo $ansRadius; ?>;
}
.secondz {
  fill: #9E9E9E;
  stroke: #F44336;
  stroke-width: 20;
  stroke-dasharray: <?php echo $shour; ?> <?php echo $HourR; ?>;
}
</style>
	<?php
$texttime = date("d-m-Y h:i:s a");
?>

<svg width="180" height="200">
<circle class="secondz" r="70" cx="100" cy="100" />
<circle class="over" r="50" cx="100" cy="100" />
<circle class="sec" r="30" cx="100" cy="100" />
<text x="0" y="200" stroke-width="20" fill="#FF5722" style="font-weight: bold;"><?php echo $texttime; ?></text>
</svg>
</div>
