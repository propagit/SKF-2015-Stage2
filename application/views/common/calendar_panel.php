<?php
	$start_date = CALENDAR_START;
	$calendar_ph = '';
 for($i = 0 ; $i < 9; $i++){ 
			$date = date('Y-m-d',strtotime($start_date . '+ '. $i . ' day' ));
			$week_day = date("D", strtotime($date));
			$day_month = date('j M',strtotime($date));
	
		$calendar_ph .=	'<a href="' . base_url() .'page/what_today/' . $date . '"><div class="box-today"><span class="day">' . strtoupper($week_day) . '</span><br>' . strtoupper($day_month) . '</div></a>';
	}
?>
<div class="panel-calendar center">
	<div class="today">WHAT'S ON</div>
    <?=$calendar_ph;?>
</div>


