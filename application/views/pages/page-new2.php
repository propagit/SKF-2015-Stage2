<style>
#for-content table img
{
	width:100%;
}
</style>
<div class="container hidden-phone white-container" id="list-date-cont" >
	<!-- <div class="row-fluid">
		<div id="whatsontoday">
			WHAT'S ON TODAY
		</div>
	</div> -->
	<div id="list-date">
		<div class="gap">
			&nbsp;
		</div>
		<div id="inner">
			<div class="date-item left" style="cursor: auto"><span class="day">WHAT'S ON<br>TODAY</span></div>
			<div class="between-date">&nbsp;</div>
			<div class="date-item center" onclick="window.location='<?=base_url()?>page/what_today/2014-02-01'"><span class="day">SAT</span><br>1 FEB</div>
			<div class="between-date">&nbsp;</div>
			<div class="date-item center" onclick="window.location='<?=base_url()?>page/what_today/2014-02-02'"><span class="day">SUN</span><br>2 FEB</div>
			<div class="between-date">&nbsp;</div>
			<div class="date-item center" onclick="window.location='<?=base_url()?>page/what_today/2014-02-03'"><span class="day">MON</span><br>3 FEB</div>
			<div class="between-date">&nbsp;</div>
			<div class="date-item center" onclick="window.location='<?=base_url()?>page/what_today/2014-02-04'"><span class="day">TUE</span><br>4 FEB</div>
			<div class="between-date">&nbsp;</div>
			<div class="date-item center" onclick="window.location='<?=base_url()?>page/what_today/2014-02-05'"><span class="day">WED</span><br>5 FEB</div>
			<div class="between-date">&nbsp;</div>
			<div class="date-item center" onclick="window.location='<?=base_url()?>page/what_today/2014-02-06'"><span class="day">THU</span><br>6 FEB</div>
			<div class="between-date">&nbsp;</div>
			<div class="date-item center" onclick="window.location='<?=base_url()?>page/what_today/2014-02-07'"><span class="day">FRI</span><br>7 FEB</div>
			<div class="between-date">&nbsp;</div>
			<div class="date-item center" onclick="window.location='<?=base_url()?>page/what_today/2014-02-08'"><span class="day">SAT</span><br>8 FEB</div>
			<div class="between-date">&nbsp;</div>
			<div class="date-item center" onclick="window.location='<?=base_url()?>page/what_today/2014-02-09'"><span class="day">SUN</span><br>9 FEB</div>
			<div style="clear: both"></div>
		</div>
		<div class="gap">
			&nbsp;
		</div>
	</div>
</div>
<div class="container white-container hidden-phone">
	<div id="download-wrapper2">
		<div class="gap-download">
				&nbsp;
			</div>
		<div class="download-lines" id="firstdw"><a target="_blank" href="http://stkildafestival.com.au/2014-s2/Program/">VIEW/DOWNLOAD <span class="bold">THE PROGRAM</span></a></div>
		<div class="between-download">&nbsp;</div>
		<div class="download-lines" id="seconddw"><a href="<?=base_url()?>page/pages/91">VOTE FOR A BAND ON THE <span class="bold">NEW MUSIC STAGE</a></span></div>
		<div class="between-download">&nbsp;</div>
		<div class="download-lines" id="thirddw">
			<div style="float:none;">
				
				<div  style="float:right;">
					<input class="right-subscribe" type="text" name="subscribe-right" id="subscribe-right" placeholder="Enter your email here">
					<div style="float:left;">
						<i class="icon-ok" style="margin-top:5px;font-size:25px;color:#7800FF;margin-left:10px; margin-right:10px; cursor:pointer;" onclick="validateEmailRight()"></i>
					</div>
				</div>
				<div style="float:right; margin-right:8px;">SUBSCRIBE</div>
			</div>
			<div style="clear:both;"></div>
		</div>
		<div style="clear: both"></div>
		<hr style="margin-top:30px; margin-bottom:30px" id="download-hr"/>
	</div>
</div>

<div class="container white-container">
		<div class="row-fluid">
			<div class="span12" id="for-content">
				<?php 
				if(isset($page['content']))  
		 		{
			 		echo $page['content'];
		 		}
				?>
				
				
			</div>
            
		</div>		
</div>

<div class="container white-container home-band-show">
	<div class="row-fluid">
		<div class="span12">
			<div style="height:25px;">&nbsp;</div>
			<?php
			foreach($bands as $band) 
			{
				$dir = md5("band".$band['id']);
			?>
			<div class="band-search-wrapper">
				<!-- <a href="<?=base_url()?>band/<?=$band['id']?>"><img style="width: 100%" src="<?=base_url()?>uploads/bands/<?=$dir?>/<?=$band['photo']?>" alt=""/></a> -->
				<a href="<?=base_url()?>page/band/<?=$band['id']?>"><img style="width: 100%" src="<?=base_url()?>uploads/bands/<?=$dir?>/<?=$band['photo']?>" alt=""/></a>
				<div class="band-name">
					<?php echo $band['band_name']?>
				</div>	
				<div class="band-gap"></div>
				<div class="band-date"><?php echo date('d l, M Y',strtotime($band['event_date']));?></div>
				<div class="band-gap"></div>
				<div class="band-detail">
					<?php echo $band['start_time']; if($band['end_time'] != '') { echo ' - '.$band['end_time'] ; } ?><br/>
					<?php if($band['venue'] != '' && $band['venue'] != 'not specified') {  echo $band['venue'] ; } ?><br/>
					<?=$band['extra_details'];?>
				</div>
			</div>
			<?
			}
			?>
			<div style="clear: both"></div>
		</div>
	</div>
</div>