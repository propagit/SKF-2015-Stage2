<?php
        	if($search_date != '')
			{
				//echo '<span style="color:#00D8C5; font-size:16px;" class="program-bold">'. $search_date.'</span>';
				?>
				<div class="container hidden-phone white-container" id="list-date-cont" >
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
						
						<span style="color:#00D8C5; font-size:16px;" class="program-bold"><?=$search_date?></span>
					</div>
				</div>
				
				<!-- <div class="container white-container">
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
								<div style="float:left; margin-right:8px;">SUBSCRIBE</div>
								<div  style="float:left;">
									<input class="right-subscribe" type="text" name="subscribe-right" id="subscribe-right" placeholder="Enter your email here">
									<div style="float:left;">
										<i class="icon-ok" style="margin-top:5px;font-size:25px;color:#7800FF;margin-left:10px; margin-right:10px; cursor:pointer;" onclick="validateEmailRight()"></i>
									</div>
								</div>
								
							</div>
							<div style="clear:both;"></div>
						</div>
						<div style="clear: both"></div>
						<hr style="margin-top:30px; margin-bottom:30px" id="download-hr"/>
						
						<span style="color:#00D8C5; font-size:16px;" class="program-bold"><?=$search_date?></span>
					</div>
				</div> -->
				<?
			}
			else 
			{
				?>
					<div class="container  white-container">
						<div class="row-fluid">
							<div class="span12" style="color:#00D8C5">
							<!-- <hr class="page-hr"> -->
								<span style="color:#00D8C5" class="right-list">MUSIC </span><span style="color:#00D8C5" class="program-bold">- BAND LISTING</span>        
					        <hr class="page-hr">
					        </div>
					    </div>
					</div>
				<?
			}
        	?>




<div class="container  white-container home-band-show">
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
				<div class="band-date"><?php echo date('d l Y',strtotime($band['event_date']));?></div>
				<div class="band-gap"></div>
				<div class="band-detail">
					<?php echo $band['start_time']; if($band['end_time'] != '') { echo ' - '.$band['end_time'] ; } ?><br/>
					<?php if($band['venue'] != '' && $band['venue'] != 'not specified') {  echo $band['venue'] ; } ?><br/>
					FREE EVENT
				</div>
			</div>
			<?
			}
			?>
			<div style="clear: both"></div>
			
			
			<!-- <?php 
			 if(isset($bands))
			 {
				 $counter =1;
			?>
                 
                 <div style="margin-top:15px">
                 	<?php
	             		foreach($bands as $band) 
	             		{ 
							if($counter==1){?> <div class="row-fluid"> <? }
			 		?>
                   			
                            <div class="span3 page_band" <?php if($counter%3==0) { echo 'style="margin-right:0px"';}?>>
                                <div>
                        <?php
                                $dir = md5("band".$band['id']);
                        ?>
                                <a href="<?=base_url()?>band/<?=$band['id']?>"><img src="<?=base_url()?>uploads/bands/<?=$dir?>/<?=$band['photo']?>" alt="" /></a>
                                </div>
         						<p class="heading_content_page" style="margin-top:15px;"><?php echo $band['band_name']?></p>
                 				<p class="subheading_content_page" style="margin-top:10px"><?php echo date('d l Y',strtotime($band['event_date']));?></p>
                 				<p class="subheading2_content_page" style="margin-top:10px"><?php echo $band['start_time']; if($band['end_time'] != '') { echo ' - '.$band['end_time'] ; } ?></p>
                 				<?php if($band['venue'] != '' && $band['venue'] != 'not specified') { ?><p class="subheading2_content_page"><?php echo $band['venue'] ; ?></p><?php } ?>
                 				<?php if($band['extra_details'] != '') { ?><div class="extra_details"><?php echo $band['extra_details'] ; ?></div><?php } ?>
                  				
                   			</div>
                   	<?php if($counter%4==0) { echo '</div><div style="clear:both;height:30px"></div><div class="row-fluid">';}?>
         			<?php
		  					$counter++; 
				 		}
				 ?> 
                 	</div>
                 </div>
                 <?php
				 	echo '<div style="clear:both;"></div>';
			 }
			 else {echo 'No Band Will Perform at This Date';}
			?> -->
            </div>
            <div class="span4 visible-phone">
            	<div class="visible-phone" style="height:30px;"></div>
				<?=$this->load->view('common/right-page');?>
            </div>
		</div>		
</div>