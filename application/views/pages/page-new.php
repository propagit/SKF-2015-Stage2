<style>
#for-content img
{
	width:100%;
}
</style>
<div class="container white-container">
		<div class="row-fluid">
        	<?php # a hack to accomodate festiva map and Public Transport ?>
            
            <?php if($page['id'] == 93 || $page['id'] == 98) { ?>
            <div class="span12" id="for-content">
            	<?php
				# trasport page - was build under the pump so build in a separate page as prev template was all image - optimize to cms controlled in future
				
				if($page['id'] == 98){
					$this->load->view('pages/public_transport');
				#}else if($page['id'] == 92){
					# to test the tempate for sponsors
					#$this->load->view('pages/sponsors_template');
				}else{
					if(isset($page['content']))  
					{
						echo $page['content'];
					}
				}
				?>
            </div>
            <?php }else{ ?>
        
			<div class="span8" id="for-content">
				<?php 
				if(isset($page['content']))  
		 		{
			 		echo $page['content'];
		 		}
				?>
				
				
			</div>
            <div class="span4">
            	<div class="visible-phone" style="height:30px;"></div>
				<?=$this->load->view('common/right-page');?>
            </div>
            
            <?php }  # if($page['id'] == 93) # the festival map page?>
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