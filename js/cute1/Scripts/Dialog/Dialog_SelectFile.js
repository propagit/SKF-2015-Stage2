var OxO5cdd=["top","dialogArguments","opener","_dialog_arguments","document","onload","value","","upload_image","browse_Frame","height","style","250px","contentWindow","btn_CreateDir","btn_zoom_in","btn_zoom_out","btn_Actualsize","divpreview","TargetUrl","Button1","Button2","editor","window","\x3Cbr\x3E",".","\x3CIMG src=\x27","\x27 width=\x27150\x27\x3E","\x26nbsp;\x3Cembed src=\x22","\x22 quality=\x22high\x22 width=\x22150\x22 height=\x22150\x22 type=\x22application/x-shockwave-flash\x22 pluginspage=\x22http://www.macromedia.com/go/getflashplayer\x22\x3E\x3C/embed\x3E\x0A","\x26nbsp;","\x26nbsp;\x3Cembed name=\x22MediaPlayer1\x22 src=\x22","\x22 autostart=-1 showcontrols=-1  type=\x22application/x-mplayer2\x22 width=\x22150\x22 height=\x22150\x22 pluginspage=\x22http://www.microsoft.com/Windows/MediaPlayer\x22 \x3E\x3C/embed\x3E\x0A","URL: ",".wav",".mpeg",".mp3",".mpg",".avi",".swf",".bmp",".png",".gif",".jpg",".jpeg","innerHTML","inp","zoom","display","none","wrapupPrompt","iepromptfield","body","div","id","IEPromptBox","promptBlackout","border","1px solid #b0bec7","backgroundColor","#f0f0f0","position","absolute","width","330px","zIndex","100","\x3Cdiv style=\x22width: 100%; padding-top:3px;background-color: #DCE7EB; font-family: verdana; font-size: 10pt; font-weight: bold; height: 22px; text-align:center; background:url(../Images/formbg2.gif) repeat-x left top;\x22\x3E","\x3C/div\x3E","\x3Cdiv style=\x22padding: 10px\x22\x3E","\x3CBR\x3E\x3CBR\x3E","\x3Cform action=\x22\x22 onsubmit=\x22return wrapupPrompt()\x22\x3E","\x3Cinput id=\x22iepromptfield\x22 name=\x22iepromptdata\x22 type=text size=46 value=\x22","\x22\x3E","\x3Cbr\x3E\x3Cbr\x3E\x3Ccenter\x3E","\x3Cinput type=\x22submit\x22 value=\x22\x26nbsp;\x26nbsp;\x26nbsp;","\x26nbsp;\x26nbsp;\x26nbsp;\x22\x3E","\x26nbsp;\x26nbsp;\x26nbsp;\x26nbsp;\x26nbsp;\x26nbsp;","\x3Cinput type=\x22button\x22 onclick=\x22wrapupPrompt(true)\x22 value=\x22\x26nbsp;","\x26nbsp;\x22\x3E","\x3C/form\x3E\x3C/div\x3E","100px","offsetWidth","left","px","block","CuteEditor_ColorPicker_ButtonOver(this)","onmouseover"]; function Window_FindDialogArguments(Ox140){var Ox141=Ox140[OxO5cdd[0x0]];if(Ox141[OxO5cdd[0x1]]){return Ox141[OxO5cdd[0x1]];} ;var Ox142=Ox141[OxO5cdd[0x2]];if(Ox142==null){return Ox141[OxO5cdd[0x4]][OxO5cdd[0x3]];} ;var Ox143=Ox142[OxO5cdd[0x4]][OxO5cdd[0x3]];if(Ox143==null){return Window_FindDialogArguments(Ox142);} ;return Ox143;}  ; function reset_hiddens(){}  ; Event_Attach(window,OxO5cdd[0x5],reset_hiddens) ; function RequireFileBrowseScript(){}  ; function reset_hiddens(){if(TargetUrl[OxO5cdd[0x6]]!=OxO5cdd[0x7]&&TargetUrl[OxO5cdd[0x6]]!=null){ do_preview() ;} ;}  ; RequireFileBrowseScript() ;var upload_image=Window_GetElement(window,OxO5cdd[0x8],true);var browse_Frame=Window_GetElement(window,OxO5cdd[0x9],true);if(!Browser_IsWinIE()){ browse_Frame[OxO5cdd[0xb]][OxO5cdd[0xa]]=OxO5cdd[0xc] ;} ; browse_Frame=browse_Frame[OxO5cdd[0xd]] ;var btn_CreateDir=Window_GetElement(window,OxO5cdd[0xe],true);var btn_zoom_in=Window_GetElement(window,OxO5cdd[0xf],true);var btn_zoom_out=Window_GetElement(window,OxO5cdd[0x10],true);var btn_Actualsize=Window_GetElement(window,OxO5cdd[0x11],true);var divpreview=Window_GetElement(window,OxO5cdd[0x12],true);var TargetUrl=Window_GetElement(window,OxO5cdd[0x13],true);var Button1=Window_GetElement(window,OxO5cdd[0x14],true);var Button2=Window_GetElement(window,OxO5cdd[0x15],true);var arg=Window_FindDialogArguments(window);var editor=arg[OxO5cdd[0x16]];var editwin=arg[OxO5cdd[0x17]];var editdoc=arg[OxO5cdd[0x4]]; do_preview() ; function do_preview(Ox19e){var Oxe; Oxe=OxO5cdd[0x7] ;if(Ox19e!=OxO5cdd[0x7]&&Ox19e!=null){ Oxe=Ox19e ;} ; Oxe=Oxe+OxO5cdd[0x18] ;var Ox2bc=TargetUrl[OxO5cdd[0x6]];if(Ox2bc==OxO5cdd[0x7]){return ;} ;var Ox2bd=Ox2bc.substring(Ox2bc.lastIndexOf(OxO5cdd[0x19])).toLowerCase();switch(Ox2bd){case OxO5cdd[0x2c]:case OxO5cdd[0x2b]:case OxO5cdd[0x2a]:case OxO5cdd[0x29]:case OxO5cdd[0x28]: Oxe=Oxe+OxO5cdd[0x1a]+Ox2bc+OxO5cdd[0x1b] ;break ;case OxO5cdd[0x27]:var Ox2be=OxO5cdd[0x1c]+Ox2bc+OxO5cdd[0x1d]; Oxe=Oxe+Ox2be+OxO5cdd[0x1e] ;break ;case OxO5cdd[0x26]:case OxO5cdd[0x25]:case OxO5cdd[0x24]:case OxO5cdd[0x23]:case OxO5cdd[0x22]:var Ox2bf=OxO5cdd[0x1f]+Ox2bc+OxO5cdd[0x20]; Oxe=Oxe+Ox2bf+OxO5cdd[0x1e] ;break ;default: Oxe=Oxe+OxO5cdd[0x21]+TargetUrl[OxO5cdd[0x6]] ;break ;;;;;;;;;;;;;} ; divpreview[OxO5cdd[0x2d]]=Oxe ;}  ; function do_insert(){var Ox36d=arg[OxO5cdd[0x2e]];if(Ox36d){try{ Ox36d[OxO5cdd[0x6]]=TargetUrl[OxO5cdd[0x6]] ;} catch(x){} ;} ; Window_SetDialogReturnValue(window,TargetUrl.value) ; Window_CloseDialog(window) ;}  ; function do_Close(){ Window_SetDialogReturnValue(window,null) ; Window_CloseDialog(window) ;}  ; function Zoom_In(){if(divpreview[OxO5cdd[0xb]][OxO5cdd[0x2f]]!=0x0){ divpreview[OxO5cdd[0xb]][OxO5cdd[0x2f]]*=1.2 ;} else { divpreview[OxO5cdd[0xb]][OxO5cdd[0x2f]]=1.2 ;} ;}  ; function Zoom_Out(){if(divpreview[OxO5cdd[0xb]][OxO5cdd[0x2f]]!=0x0){ divpreview[OxO5cdd[0xb]][OxO5cdd[0x2f]]*=0.8 ;} else { divpreview[OxO5cdd[0xb]][OxO5cdd[0x2f]]=0.8 ;} ;}  ; function Actualsize(){ divpreview[OxO5cdd[0xb]][OxO5cdd[0x2f]]=0x1 ; do_preview() ;}  ; function ResetFields(){ TargetUrl[OxO5cdd[0x6]]=OxO5cdd[0x7] ;}  ;if(!Browser_IsWinIE()){ btn_zoom_in[OxO5cdd[0xb]][OxO5cdd[0x30]]=btn_zoom_out[OxO5cdd[0xb]][OxO5cdd[0x30]]=btn_Actualsize[OxO5cdd[0xb]][OxO5cdd[0x30]]=OxO5cdd[0x31] ;} ;if(!Browser_IsWinIE()){ btn_zoom_in[OxO5cdd[0xb]][OxO5cdd[0x30]]=btn_zoom_out[OxO5cdd[0xb]][OxO5cdd[0x30]]=btn_Actualsize[OxO5cdd[0xb]][OxO5cdd[0x30]]=OxO5cdd[0x31] ;} else {} ;if(Browser_IsIE7()){var _dialogPromptID=null; function IEprompt(Ox136,Ox137,Ox138){ that=this ; this[OxO5cdd[0x32]]=function (Ox139){ val=document.getElementById(OxO5cdd[0x33])[OxO5cdd[0x6]] ; _dialogPromptID[OxO5cdd[0xb]][OxO5cdd[0x30]]=OxO5cdd[0x31] ; document.getElementById(OxO5cdd[0x33])[OxO5cdd[0x6]]=OxO5cdd[0x7] ;if(Ox139){ val=OxO5cdd[0x7] ;} ; Ox136(val) ;return false;}  ;if(Ox138==undefined){ Ox138=OxO5cdd[0x7] ;} ;if(_dialogPromptID==null){var Ox13a=document.getElementsByTagName(OxO5cdd[0x34])[0x0]; tnode=document.createElement(OxO5cdd[0x35]) ; tnode[OxO5cdd[0x36]]=OxO5cdd[0x37] ; Ox13a.appendChild(tnode) ; _dialogPromptID=document.getElementById(OxO5cdd[0x37]) ; tnode=document.createElement(OxO5cdd[0x35]) ; tnode[OxO5cdd[0x36]]=OxO5cdd[0x38] ; Ox13a.appendChild(tnode) ; _dialogPromptID[OxO5cdd[0xb]][OxO5cdd[0x39]]=OxO5cdd[0x3a] ; _dialogPromptID[OxO5cdd[0xb]][OxO5cdd[0x3b]]=OxO5cdd[0x3c] ; _dialogPromptID[OxO5cdd[0xb]][OxO5cdd[0x3d]]=OxO5cdd[0x3e] ; _dialogPromptID[OxO5cdd[0xb]][OxO5cdd[0x3f]]=OxO5cdd[0x40] ; _dialogPromptID[OxO5cdd[0xb]][OxO5cdd[0x41]]=OxO5cdd[0x42] ;} ;var Ox13b=OxO5cdd[0x43]+InputRequired+OxO5cdd[0x44]; Ox13b+=OxO5cdd[0x45]+Ox137+OxO5cdd[0x46] ; Ox13b+=OxO5cdd[0x47] ; Ox13b+=OxO5cdd[0x48]+Ox138+OxO5cdd[0x49] ; Ox13b+=OxO5cdd[0x4a] ; Ox13b+=OxO5cdd[0x4b]+OK+OxO5cdd[0x4c] ; Ox13b+=OxO5cdd[0x4d] ; Ox13b+=OxO5cdd[0x4e]+Cancel+OxO5cdd[0x4f] ; Ox13b+=OxO5cdd[0x50] ; _dialogPromptID[OxO5cdd[0x2d]]=Ox13b ; _dialogPromptID[OxO5cdd[0xb]][OxO5cdd[0x0]]=OxO5cdd[0x51] ; _dialogPromptID[OxO5cdd[0xb]][OxO5cdd[0x53]]=parseInt((document[OxO5cdd[0x34]][OxO5cdd[0x52]]-0x13b)/0x2)+OxO5cdd[0x54] ; _dialogPromptID[OxO5cdd[0xb]][OxO5cdd[0x30]]=OxO5cdd[0x55] ;var Ox13c=document.getElementById(OxO5cdd[0x33]);try{var Ox13d=Ox13c.createTextRange(); Ox13d.collapse(false) ; Ox13d.select() ;} catch(x){ Ox13c.focus() ;} ;}  ;} ;if(btn_CreateDir){ btn_CreateDir[OxO5cdd[0x57]]= new Function(OxO5cdd[0x56]) ;} ;if(btn_zoom_in){ btn_zoom_in[OxO5cdd[0x57]]= new Function(OxO5cdd[0x56]) ;} ;if(btn_zoom_out){ btn_zoom_out[OxO5cdd[0x57]]= new Function(OxO5cdd[0x56]) ;} ;if(btn_Actualsize){ btn_Actualsize[OxO5cdd[0x57]]= new Function(OxO5cdd[0x56]) ;} ;