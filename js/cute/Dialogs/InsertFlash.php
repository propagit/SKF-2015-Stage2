<?php
error_reporting(E_ALL ^ E_NOTICE);
header("Expires: " . gmdate("D, d M Y H:i:s", time() + (-1*60)) . " GMT"); 
require("Include_Security.php") ;
?>
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>		
		<link href="../Themes/<?php echo $Theme; ?>/dialog.css" type="text/css" rel="stylesheet" />
		<!--[if IE]>
			<link href="../Style/IE.css" type="text/css" rel="stylesheet" />
		<![endif]-->
		<script type="text/javascript" src="../Scripts/Dialog/DialogHead.js"></script>
		<style type="text/css">
	    #upload_image {height:80; VISIBILITY: inherit; Z-INDEX: 2}
		.row { HEIGHT: 22px }
		.cb { VERTICAL-ALIGN: middle }
		.itemimg { VERTICAL-ALIGN: middle }
		.editimg { VERTICAL-ALIGN: middle }
		.cell1 { VERTICAL-ALIGN: middle }
		.cell2 { VERTICAL-ALIGN: middle }
		.cell3 { PADDING-RIGHT: 4px; VERTICAL-ALIGN: middle; TEXT-ALIGN: right }
		.cb { }
		</style>
		
	<meta http-equiv="Page-Enter" content="blendTrans(Duration=0.1)" />
	<meta http-equiv="Page-Exit" content="blendTrans(Duration=0.1)" />
	<title><?php echo GetString("InsertFlash") ; ?></title>

    <?php
    
      $Current_FlashGalleryPath=$FlashGalleryPath;
      if (@$_GET["FP"]!="")
      {
        $Current_FlashGalleryPath=$_GET["FP"];
      }
    ?>
    
	</head>
	<body>
		<div id="container">
			<table border="0" cellspacing="0" cellpadding="0" width="100%">
	            <tr>
		            <td style="white-space:nowrap; width:250px">
		            </td>
		            <td valign="bottom" style="width:200px">
                  <?php
                        $ButtonStatusClass="dialogButton";
                        if($AllowCreateFolder!="true")
                          $ButtonStatusClass="CuteEditorButtonDisabled";                           
                    ?>
<img src='../Images/newfolder.gif' id='btn_CreateDir' onclick='CreateDir_click();' title="<?php echo GetString("Createdirectory") ; ?>" class='<?php echo $ButtonStatusClass; ?>' onmouseover='CuteEditor_ColorPicker_ButtonOver(this);' />
<img src="../Images/zoom_in.gif" id="btn_zoom_in" onclick="Zoom_In();" title="<?php echo GetString("ZoomIn") ; ?>" class="dialogButton" onmouseover="CuteEditor_ColorPicker_ButtonOver(this);" /> 
<img src="../Images/zoom_out.gif" id="btn_zoom_out" onclick="Zoom_Out();" title="<?php echo GetString("ZoomOut") ; ?>" class="dialogButton" onmouseover="CuteEditor_ColorPicker_ButtonOver(this);" /> 
<img src="../Images/Actualsize.gif" id="btn_Actualsize" onclick="Actualsize();" title="<?php echo GetString("ActualSize") ; ?>" class="dialogButton" onmouseover="CuteEditor_ColorPicker_ButtonOver(this);" /> 
		            </td>
	            </tr>
            </table>
			<table border="0" cellspacing="0" cellpadding="0" width="100%">
				<tr>
					<td valign="top" style="width:260px;">
<iframe src="browse_Flash.php?<?php echo $setting ; ?>&Theme=<?php echo $Theme; ?>&FP=<?php echo $Current_FlashGalleryPath; ?>" id="browse_Frame" frameborder="0" scrolling="auto" style="border:1.5pt inset;width:260px;height:246px"></iframe>		
					</td>
					<td valign="top" style="width:290px">
						<div style="BORDER: 1.5pt inset; VERTICAL-ALIGN: top; OVERFLOW: auto; WIDTH: 290px; HEIGHT: 250px; BACKGROUND-COLOR: white; TEXT-ALIGN: center">
<div id="divpreview" style="BACKGROUND-COLOR: white">&nbsp;</div>
						</div>
					</td>
				</tr>
				<tr>
					<td colspan="2" style="height:2">
					</td>
				</tr>
			</table>
			<table border="0" cellspacing="0" cellpadding="0" width="100%">
				<tr>
					<td valign="top">
						<fieldset><legend><?php echo GetString("Properties") ; ?></legend>
							<table border="0" cellpadding="4" cellspacing="0" id="Table3">
								<tr>
									<td>
										<table border="0" cellpadding="1" cellspacing="0" class="normal">
											<tr>
												<td style="width:110"><?php echo GetString("Width") ; ?>:</td>
												<td style="width:120">
<input type="text" name="Width" id="Width" style="WIDTH : 80px" onchange="do_preview()"	onkeypress="return CancelEventIfNotDigit()" value="200" />
												</td>
											</tr>
											<tr>
												<td><?php echo GetString("Height") ; ?>:</td>
												<td>
 <input type="text" name="Height" id="Height" style="WIDTH : 80px" onchange="do_preview()" onkeypress="return CancelEventIfNotDigit()" value="200" />
											    </td>
											</tr>
								            <tr>
									            <td><?php echo GetString("Backgroundcolor") ; ?>:</td>
									            <td style="text-align:left">
<input type="text" id="bgColortext" name="bgColortext" size="7" style="WIDTH:57px;" />
<img title="" src="../Images/colorpicker.gif" id="bgColortext_Preview" style="vertical-align:top;" />
									            </td>
								            </tr>
											<tr>
												<td><?php echo GetString("Quality") ; ?>:
												</td>
												<td><select name="Quality" id="Quality" style="WIDTH : 80px" onchange="do_preview()" onpropertychange="do_preview()"
														runat="server">
														<option selected="selected" value="high">High</option>
														<option value="medium">Medium</option>
														<option value="low">Low</option>
													</select>
												</td>
											</tr>
											<tr>
												<td style="width:100"><?php echo GetString("Scale") ; ?>:</td>
												<td>
													<select name="Scale" style="WIDTH : 80px" id="Scale" onchange="do_preview()" onpropertychange="do_preview()">
														<option selected="selected" value=""><?php echo GetString("Default") ; ?></option>
														<option value="Noborder"><?php echo GetString("Noborder") ; ?></option>
														<option value="Exactfit"><?php echo GetString("Exactfit") ; ?></option>
													</select>
												</td>
											</tr>
										</table>
									</td>
								</tr>
							</table>
						</fieldset>
						<fieldset>
						<legend><?php echo GetString("Layout") ; ?></legend>
							<table border="0" cellpadding="4" cellspacing="0" width="100%">
								<tr>
									<td>
										<table border="0" cellpadding="1" cellspacing="0" class="normal" width="100%">
											<tr>
												<td style="width:100"><?php echo GetString("Alignment") ; ?>:</td>
												<td>
													<select name="Align" style="WIDTH : 80px" id="Align" onchange="do_preview()" onpropertychange="do_preview()">
														<option id="optNotSet" selected="selected" value=""><?php echo GetString("NotSet") ; ?></option>
														<option id="optLeft" value="left"><?php echo GetString("Left") ; ?></option>
														<option id="optRight" value="right"><?php echo GetString("Right") ; ?></option>
														<option id="optTexttop" value="textTop"><?php echo GetString("Texttop") ; ?></option>
														<option id="optAbsMiddle" value="absMiddle"><?php echo GetString("Absmiddle") ; ?></option>
														<option id="optBaseline" value="baseline"><?php echo GetString("Baseline") ; ?></option>
														<option id="optAbsBottom" value="absBottom"><?php echo GetString("Absbottom") ; ?></option>
														<option id="optBottom" value="bottom"><?php echo GetString("Bottom") ; ?></option>
														<option id="optMiddle" value="middle"><?php echo GetString("Middle") ; ?></option>
														<option id="optTop" value="top"><?php echo GetString("Top") ; ?></option>
													</select>
												</td>
											</tr>
											<tr>
												<td valign="middle" style="width:110px"><?php echo GetString("Horizontal") ; ?>:</td>
												<td>
<input type="text" size="2" name="HSpace" onchange="do_preview()" onpropertychange="do_preview()" onkeypress="return CancelEventIfNotDigit()" style="WIDTH:80px" id="HSpace" />
												</td>
											</tr>
											<tr>
												<td valign="middle"><?php echo GetString("Vertical") ; ?>:</td>
												<td>
<input type="text" size="2" name="VSpace" onchange="do_preview()" onpropertychange="do_preview()" onkeypress="return CancelEventIfNotDigit()" style="WIDTH:80px" id="VSpace" />
												</td>
											</tr>
										</table>
									</td>
								</tr>
							</table>
						</fieldset>
					</td>
					<td style="width:2">
					</td>
					<td valign="top">
						<fieldset style="margin-bottom:5px">
							<legend>
								<?php echo GetString("Insert") ; ?></legend>
							<table border="0" cellpadding="4" cellspacing="0">
								<tr>
									<td>
										<table border="0" cellpadding="1" cellspacing="0" class="normal">
											<tr>
												<td valign="middle" style="width:100">
													<?php echo GetString("Url") ; ?>:</td>
												<td>
<input type="text" id="TargetUrl" size="43" name="TargetUrl" /></td>
											</tr>
											<tr>
												<td colspan="2">
													<input type="checkbox" checked="checked" id="chk_Loop" onchange="do_preview()" onpropertychange="do_preview()" />&nbsp;<?php echo GetString("Loop") ; ?>&nbsp;&nbsp;
													<input type="checkbox" checked="checked" id="chk_Autoplay" onchange="do_preview()" onpropertychange="do_preview()" />&nbsp;<?php echo GetString("Autoplay") ; ?>&nbsp;&nbsp;
													<input type="checkbox" checked="checked" id="chk_Transparency" onchange="do_preview()" onpropertychange="do_preview()" />&nbsp;<?php echo GetString("Transparency") ; ?>&nbsp;
												</td>
											</tr>
										</table>
									</td>
								</tr>
							</table>
						</fieldset>
            <?php
              $Style_Display_None="";
						  if ($AllowUpload!="true")
              {
                $Style_Display_None="Style='Display:none'";
              } 
			?>
						<fieldset id="fieldsetUpload" <?php echo $Style_Display_None ; ?> >
							<legend><?php echo GetString("Upload") ; ?> (Max size <?php echo $MaxFlashSize; ?>K)</legend>
							<table border="0" cellspacing="2" cellpadding="0" width="100%" class="normal">
								<tr>
									<td style="width:8">
									</td>
								</tr>
								<tr>
									<td valign="top">
<iframe src="upload.php?<?php echo $setting ; ?>&Theme=<?php echo $Theme; ?>&FP=<?php echo $Current_FlashGalleryPath; ?>&Type=Flash" id="upload_image" frameborder="0" scrolling="auto" style="width:100%;"></iframe>
									</td>
								</tr>
							</table>
						</fieldset>
						<div style="padding-top:10px; text-align:center">
<input class="formbutton" type="button" value="<?php echo GetString("Insert") ; ?>" onclick="do_insert()" />&nbsp;&nbsp;&nbsp;
<input class="formbutton" type="button" value="<?php echo GetString("Cancel") ; ?>" onclick="do_Close()" />
						</div>
					</td>
				</tr>
			</table>	
		</div>	
	    <script type="text/javascript">	
	        var OK = "<?php echo GetString("OK"); ?>";
	        var Cancel = "<?php echo GetString("Cancel"); ?>";
	        var InputRequired = "<?php echo GetString("InputRequired"); ?>";
	        var ValidID = "<?php echo GetString("ValidID"); ?>";
	        var ValidColor = "<?php echo GetString("ValidColor"); ?>";
	        var SelectImagetoInsert = "<?php echo GetString("SelectImagetoInsert"); ?>";
	        
	        function UploadSaved(sFileName,path){
		        ResetFields();
		        TargetUrl.value = sFileName;
		        setTimeout(function(){do_preview(sFileName);}, 100); 
		        browse_Frame.location="browse_Flash.php?<?php echo $setting ; ?>&Theme=<?php echo $Theme; ?>&FP="+path+"";	
		        row_click(sFileName);
	        }
        	
	        function Refresh(path)
	        {
		        browse_Frame.location="browse_Flash.php?<?php echo $setting ; ?>&Theme=<?php echo $Theme; ?>&FP=<?php echo $FlashGalleryPath; ?>&loc="+path+"";
        }
        function CreateDir_click()
        {
            if(isDemoMode)
            {
            alert("This function is disabled in the demo mode.");
            return;
            }

            <?php
                  $Style_Display_None;
					        if ($AllowCreateFolder!="true")
                  {
                    echo "alert('".GetString("Disabled")."')";
                    echo "return";
                  }
            ?>
            if(Browser_IsIE7())
            {
                IEprompt(promptCallback,'<?php echo GetString("SpecifyNewFolderName"); ?>', "");		
		            function promptCallback(dir)
		            {
			            var tempPath = browse_Frame.location;	
			            tempPath = tempPath + "&action=createfolder&foldername="+dir;
			            browse_Frame.location = tempPath;		
		            }
	            }
	            else
	            {
		            var dir=prompt("<?php echo GetString("SpecifyNewFolderName"); ?>","")
		            if(dir)
		            {
			            var tempPath = browse_Frame.location;	
			            tempPath = tempPath + "&action=createfolder&foldername="+dir;
			            browse_Frame.location = tempPath;			
		            }
	            }
	        }
	        function row_click(path)
	        {	
		        ResetFields();
		        TargetUrl.value=path;
		        do_preview();
	        }	    
    		
	        function SetUpload_FolderPath(path)
	        {	if(path.substring(path.length-1, path.length)=='/')
		        {
			        path=path.substring(0, path.length-1);
		        }
		        upload_image.src="upload.php?<?php echo $setting ; ?>&Theme=<?php echo $Theme; ?>&FP="+path+"&Type=Flash";
	        }	
	        var ResourceDir='<?php echo $ResourceDir ; ?>';
	    </script>	
	    <script type="text/javascript" src="../Scripts/Dialog/DialogFoot.js"></script>
	    <script type="text/javascript" src="../Scripts/Dialog/Dialog_InsertFlash.js"></script>
	</body>	
</html>
