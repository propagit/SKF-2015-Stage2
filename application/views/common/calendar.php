<?php
	$start_date = CALENDAR_START;
	$calendar_lg = '';
	$calendar_ph = '';
	
 for($i = 0 ; $i < 9; $i++){ 
			$date = date('Y-m-d',strtotime($start_date . '+ '. $i . ' day' ));
			$week_day = date("D", strtotime($date));
			$day_month = date('j M',strtotime($date));
	
		$calendar_lg .=	'<a href="' . base_url() .'page/what_today/' . $date . '"><div class="date-item center"><span class="day">' . strtoupper($week_day) . '</span><br>' . strtoupper($day_month) . '</div></a>';
		$calendar_ph .=	'<a href="' . base_url() .'page/what_today/' . $date . '"><div class="span4"><span class="day">' . strtoupper($week_day) . '</span><br>' . strtoupper($day_month) . '</div></a>';
	}
?>

<div id="list-date">
    <div id="inner" class="hidden-phone">
        <div class="date-item" style="cursor: auto"><span class="day">WHAT'S ON<br>TODAY</span></div>
        <?=$calendar_lg;?>
    </div>
    
    <div id="mob-calendar" class="visible-phone">
		<div class="row-fluid">
        	<?=$calendar_ph;?>
        </div>
	</div>
</div>


