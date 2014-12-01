<script type="text/javascript" src="<?=base_url()?>js/jquery-1.6.2.js"></script>
<div id="paga_content_outside">
    <div id="pagecontent" style="float:none;">
        <div id="left-container">
        	<div id="form_wrapper">
                <div id="form_header" style="float:left"> 
                    Live N Local Venues
                </div>
                <div style="clear:both;"></div>
                <div id="form_sub_header">
                	Enter your details
                </div>
                <script>
					<?php 
						if($this->session->flashdata('success'))
						{?>
							alert('Thank you, we have received your application');
						<?php }
					?>
					function validateEmail(email) 
					{ 
						var filter = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
    					return filter.test(email);
					}
					function validate_form()
					{						
						var business = $('#business').val();
						var name = $('#name').val();
						var address = $('#address').val();
						var phone = $('#phone').val();
						var email = $('#email').val();
						var re_email = $('#re_email').val();
						var web = $('#web').val();
						var equipment = $('#equipment').val();
						var night_desc = $('#night_desc').val();
						var availability = $('#availability').val();

						var valid = true;
						if($('#logo1').attr("checked") != 'checked' && $('#logo2').attr("checked") != 'checked')
						{
							valid = false;
						}
						if($('#comedy_host1').attr("checked") != 'checked' && $('#comedy_host2').attr("checked") != 'checked')
						{
							valid = false;
						}
						if(business == '') 
						{
							valid = false;
							 jQuery('#business').css('background','#fff3a0');
						}
						else
						{jQuery('#business').css('background','#e7e7e7');}
						
						if(name == '') 
						{
							valid = false;
							 jQuery('#name').css('background','#fff3a0');
						}
						else
						{jQuery('#name').css('background','#e7e7e7');}
						if(email == '') 
						{
							valid = false;
							 jQuery('#email').css('background','#fff3a0');
						}
						else
						{jQuery('#email').css('background','#e7e7e7');}
						if(email != re_email) 
						{
							valid = false;
							 jQuery('#re_email').css('background','#fff3a0');
						}
						else
						{jQuery('#re_email').css('background','#e7e7e7');}
						if(web == '') 
						{
							valid = false;
							 jQuery('#web').css('background','#fff3a0');
						}
						else
						{jQuery('#web').css('background','#e7e7e7');}
						if(equipment == '') 
						{
							valid = false;
							 jQuery('#equipment').css('background','#fff3a0');
						}
						else
						{jQuery('#equipment').css('background','#e7e7e7');}
						if(night_desc == '') 
						{
							valid = false;
							 jQuery('#night_desc').css('background','#fff3a0');
						}
						else
						{jQuery('#night_desc').css('background','#e7e7e7');}
						if(availability == '') 
						{
							valid = false;
							 jQuery('#availability').css('background','#fff3a0');
						}
						else
						{jQuery('#availability').css('background','#e7e7e7');}
						
						if(valid){document.registerform.submit();}
						else
						{alert('Please fill up the form!');}
						
					}
				</script>
                <form action="<?=base_url()?>page/add_host" method="post" id="registerform" name="registerform" >
                    <div id="form_content">
                    	<div>
                        	<div class="form_label" style="float:left">Business Name*</div>
                            <div style="float:left"><input class="form_input" type="text" value="" id="business" name="business"></div>
                        </div>
                        <div class="gap"></div>
                        <div>
                        	<div class="form_label" style="float:left">Contact Name*</div>
                            <div style="float:left"><input class="form_input" type="text" value="" id="name" name="name"></div>
                        </div>
                        <div class="gap"></div>
                        <div>
                        	<div class="form_label" style="float:left">Street Address*</div>
                            <div style="float:left"><textarea class="form_textarea" id="address" name="address"></textarea></div>
                        </div>
                        <div class="gap"></div>
                        <div>
                        	<div class="form_label" style="float:left">Phone Number*</div>
                            <div style="float:left"><input class="form_input" type="text" value="" id="phone" name="phone"></div>
                        </div>
                        <div class="gap"></div>
                        <div>
                        	<div class="form_label" style="float:left">Email Address*</div>
                            <div style="float:left"><input class="form_input" type="text" value="" id="email" name="email"></div>
                        </div>
                        <div class="gap"></div>
                        <div>
                        	<div class="form_label" style="float:left">Re-Enter Email Address*</div>
                            <div style="float:left"><input class="form_input" type="text" value="" id="re_email" name="re_email"></div>
                        </div>
                        <div class="gap"></div>
                        <div>
                        	<div class="form_label" style="float:left">Web Address*</div>
                            <div style="float:left"><input class="form_input" type="text" value="" id="web" name="web"></div>
                        </div>
                        <div class="gap"></div>
                        <div>
                        	<div class="form_label" style="float:left">Business type (eg bar/restaurant/cafe etc)</div>
                            <div style="float:left"><textarea class="form_textarea" id="business_type" name="business_type"></textarea></div>
                        </div>
                        <div class="gap"></div>
                        <div>
                        	<div class="form_label" style="float:left">What days of the week and times would you b able to host a gig?*</div>
                            <div style="float:left"><textarea class="form_textarea" id="availability" name="availability"></textarea></div>
                        </div>
                        <div class="gap"></div>
                        <div>
                        	<div class="form_label" style="float:left">Description of night you would like to host (Music genre of band, number of musicians in the group, accoustic or amplified music) (see the previous page for examples of how Live N Local worked last year)*</div>
                            <div style="float:left"><textarea class="form_textarea" id="night_desc" name="night_desc"></textarea></div>
                        </div>
                        <div class="gap"></div>
                        <div>
                        	<div class="form_label" style="float:left">Do you have any sound equipment available that the musician could use? (eg: PA/microphone). *</div>
                            <div style="float:left"><input class="form_input" type="text" value="" id="equipment" name="equipment"></div>
                        </div>
                        <div class="gap"></div>
                        <div>
                        	<div class="form_label" style="float:left">If yes please itemise the equipment you have available in the space provided</div>
                            <div style="float:left"><textarea class="form_textarea" id="equipment_desc" name="equipment_desc"></textarea></div>
                        </div>
                        <div class="gap"></div>
                        
                        <div>
                        	If you are unable to host music but would be interested in hosting a stand up comedy act then please tick "Yes" *
                        </div>
                        <div class="gap"></div>
                        <div>
                        	<div class="form_label" style="float:left; width:50px;"><input type="radio" name="comedy_host" id="comedy_host1" value="yes"></div>
                            <div style="float:left">Yes</div>
                        </div>
                        <div class="gap"></div>
                        <div>
                        	<div class="form_label" style="float:left; width:50px;"><input type="radio" name="comedy_host" id="comedy_host2" value="no"></div>
                            <div style="float:left">No</div>
                        </div>
                        <div class="gap"></div>
                        
                        <div>
                        	If your business is selected as a host venue then we will promote your business logo and / or picture on our website. If you have a logo and/or image then please email it to stkildafestival@portphillip.vic.gov.au with the heading 'Host Business'. Please tick the box if you are going to provide a logo or picture *
                        </div>
                        <div class="gap"></div>
                        <div>
                        	<div class="form_label" style="float:left; width:50px;"><input type="radio" name="logo" id="logo1" value="I will provide a logo or picture"></div>
                            <div style="float:left">I will provide a logo or picture</div>
                        </div>
                        <div class="gap"></div>
                        <div>
                        	<div class="form_label" style="float:left; width:50px;"><input type="radio" name="logo" id="logo2" value="I will not provide a logo or picture"></div>
                            <div style="float:left">I will not provide a logo or picture</div>
                        </div>
                        <div class="gap"></div>
                        
                        <div>
                        	If you are unable to host music but would be interested in hosting a professional development forum/panel session then please tick "Yes"
                        </div>
                        <div class="gap"></div>
                        <div>
                        	<div class="form_label" style="float:left; width:50px;"><input type="radio" name="forum_host" value="yes"></div>
                            <div style="float:left">Yes</div>
                        </div>
                        <div class="gap"></div>
                        <div>
                        	<div class="form_label" style="float:left; width:50px;"><input type="radio" name="forum_host" value="no"></div>
                            <div style="float:left">No</div>
                        </div>
                        <div class="gap"></div>
                        
                        <div>
                        	<div class="form_label" style="float:left">Social media eg Facebook, Twitter identities</div>
                            <div style="float:left"><input class="form_input" type="text" value="" id="social_media" name="social_media"></div>
                        </div>
                        <div class="gap"></div>
                        <div>
                        	<div class="form_label" style="float:left">Is there anything else going on at your business during Live N Local (3-9 February) that you'd like to tell us about? We may be able to promote these events in our program. Please provide the details below or give Sophie a call on 9209 6139 to discuss your ideas.</div>
                            <div style="float:left"><textarea class="form_textarea" id="activity" name="activity"></textarea></div>
                        </div>
                        <div class="gap"></div>
                        
                        <div style="line-height:15px;">
                        	<span style="font-weight:bold">Please forward the following information to the address below:</span><br/>
                            <ul style="list-style:disc; margin-left:13px;">
                            	<li>CVs or biographies of key personnel (Required only if your event has NOT previously been held at the St Kilda Festival)</li>
                                <li>Photographs or testimonials from past events (optional) St Kilda Festival</li>
                                <li>St Kilda Businesses - Host Proposal Private Bag 3 PO St Kilda VIC 3182 Or <a href="stkildafestival@portphillip.vic.gov.au">stkildafestival@portphillip.vic.gov.au</a></li>
                            </ul>
                            <br/>
                            <!--<span style="font-weight:bold">By submitting this application I certify that I have read and agree with the terms and conditions (submit application)</span>-->
                        </div>
                        <div class="gap"></div>
                        <div>
                        	<input class="form_button" type="button" value="Submit" onclick="validate_form();">
                        </div>
                    </div>
                </form>
            </div> 
             
            
        	<div style="clear:both;"></div>
        </div>
    </div>
</div>

