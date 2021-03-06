<div class="container white-container">

		<?php $this->load->view('common/calendar');?>
        
        
        <ul class="festival-page-links">
        	<li class="first"><a href="<?=base_url();?>Program">VIEW/DOWNLOAD THE PROGRAM</a></li>
            <li class="second"><a href="<?=base_url();?>page/pages/93">VIEW/DOWNLOAD FESTIVAL SUNDAY MAP</a></li>
            <li class="last"><a href="<?=base_url();?>page/pages/91">VOTE FOR A BAND ON THE MUSIC STAGE</a></li>
        </ul>
        
		<div class="row-fluid">
			<div class="span12">
			<div class="crumb">
            	<span class="right-list"><?=$search_date ? strtoupper($search_date) . ' - ' : '';?>MUSIC </span><span class="program-bold">- BAND LISTING</span>
            </div>
			<?php 
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
                 				<p class="subheading_content_page" style="margin-top:10px"><?php echo date('l d F',strtotime($band['event_date']));?></p>
                 				<p class="subheading2_content_page" style="margin-top:10px"><?php echo $band['start_time']; if($band['end_time'] != '') { echo ' - '.$band['end_time'] ; } ?></p>
                 				<?php if($band['venue'] != '' && $band['venue'] != 'not specified') { ?><p class="subheading2_content_page"><?php echo $band['venue'] ; ?></p><?php } ?>
                 				<?php if($band['extra_details'] != '') { ?><div class="extra_details"><?php echo $band['extra_details'] ; ?></div><?php } ?>
                  				<!--<?php if($band['description'] != '') { ?><p style="margin-top:10px;width:231px" class="text_content_page"><?php echo substr($band['description'],0,strrpos(substr($band['description'],0,200),' ')) ; ?>...</p><?php } ?>
                  				<p style="margin-top:10px"><a class="text_content_page" href="<?=base_url()?>band/<?php echo $band['id'];?>">Read more</a></p>-->
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
			?>
            </div>
		</div>	
        <div style="clear:both;height:30px"></div>	
</div>
