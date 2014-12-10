<script>
function validateEmailRight()
	{
		var email = $('#subscribe-right').val();
		var reg = /^([A-Za-z0-9_\-\.])+\@([A-Za-z0-9_\-\.])+\.([A-Za-z]{2,4})$/;
  
         if(reg.test(email) == false) {
 
          alert('Invalid Email Address');
          return false;
        }
		else
		{
			$.ajax({
  type: "POST",
  url: "<?php echo base_url()?>page/add_subscribe_ajax",
  data: { email: email }
}).done(function( msg ) {
           alert(msg );
		   $('#subscribe-right').val('');
});
		}
}
</script>
<?php $this->load->view('common/calendar_panel');?>

<hr class="page-hr hidden-phone">

<div class="right-list hidden-phone">VIEW/DOWNLOAD <span class="program-bold">THE PROGRAM</span></div>

<hr class="page-hr">

<div class="right-list">VOTE FOR A BAND ON THE <span class="program-bold">NEW MUSIC STAGE</span></div> 

<hr class="page-hr">

<span class="subheading_content_page" style="margin-bottom: 20px;float: left;text-align: center; width:100%;">Sign up for Festival News, Announcements and Offers</span>
<div style="float:none;"><div class="right-list" style="float:left;margin-top:8px; font-weight:500">
	SUBSCRIBE
</div>
<div  style="float:right;"><input class="right-subscribe" type="text" name="subscribe-right" id="subscribe-right" placeholder="Enter your email here">
<div style="float:left;"><i class="icon-ok" style="margin-top:5px;font-size:25px;color:#7800FF;margin-left:10px; margin-right:10px; cursor:pointer;" onclick="validateEmailRight()"></i></div></div></div>
<div style="clear:both;"></div>

<hr class="page-hr">
