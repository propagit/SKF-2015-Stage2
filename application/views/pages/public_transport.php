<h1 class="heading_content_page center">Transport Information</h1> 

<img src="<?=base_url();?>img/transport/transportMap.jpg">

<img src="<?=base_url();?>img/transport/transportHeader.png" style="width:80%; margin-top:40px; margin-bottom:40px;">

<div class="tbox">
	<div class="pt-icon">
    	<img src="<?=base_url();?>img/transport/trainIcon.png">
    </div>
    <div class="pt-desc">
    	<h2 class="train">TRAIN</h2>
        <p>Balaclava Station or Windsor Station</p>
    </div>
</div>
<div class="tbox">
	<div class="pt-icon">
    	<img src="<?=base_url();?>img/transport/tramIcon.png">
    </div>
    <div class="pt-desc">
    	<h2 class="tram">TRAM</h2>
        <ul>
        	<li><span class="lt">3a</span> <span class="rt">Luna Park – Caulfield Station – East Malvern</span></li>
            <li><span class="lt">5</span> <span class="rt">Melbourne University – St Kilda Junction – Malvern</span></li>
            <li><span class="lt">16</span> <span class="rt">Melbourne University – cnr Fitzroy & Grey Streets</span></li>
            <li><span class="lt">16</span> <span class="rt">Cnr Acland and Carlisle Streets – Kew</span></li>
            <li><span class="lt">64</span> <span class="rt">Melbourne University – St Kilda Junction – East Brighton</span>
            <li><span class="lt">67</span> <span class="rt">Melbourne University – St Kilda Junction – Carnegie
            (extra services between Elsternwick Station
            & St Kilda Junction)</span>
            </li>
            <li><span class="lt">78</span> <span class="rt">North Richmond – cnr Chapel & Carlisle Streets</span></li>
            <li><span class="lt">96</span> <span class="rt">East Brunswick – St Kilda Station
            (extra services between Bourke & Russell Streets
            – St Kilda Station)</span>
            </li>
            <li><span class="lt">12</span> <span class="rt">West Preston – cnr Fitzroy & Park Streets
            (extra services between Collins and Russell Streets
            – cnr Fitzroy & Park Streets)</span>
			</li>
        
        </ul>
    </div>
</div>

<div class="tbox">
	<div class="pt-icon">
    	<img src="<?=base_url();?>img/transport/busIcon.png">
    </div>
    <div class="pt-desc">
    	<h2 class="bus">BUS</h2>
       	<ul> 
            <li><span class="lt">246</span> <span class="rt">Clifton Hill – St Kilda Junction – Elsternwick Station</span></li>
            <li><span class="lt">600</span> <span class="rt">St Kilda Junction – Cheltenham Station – Southland</span></li>
            <li><span class="lt">606</span> <span class="rt">Cnr Park & Mary Streets – Port Melbourne</span></li>
            <li><span class="lt">922, 223</span> <span class="rt">St Kilda Junction – Cheltenham Station</span></li>
            <li><span class="lt">623</span> <span class="rt">Cnr Carlisle & Foster Streets – Chadstone
    – Glen Waverley Station</span></li>
            <li><span class="lt"></span> <span class="rt"></span></li>
            <li><span class="lt"></span> <span class="rt"></span></li>
            <li><span class="lt"></span> <span class="rt"></span></li>
            <li><span class="lt"></span> <span class="rt"></span></li>
            <li><span class="lt"></span> <span class="rt"></span></li>
        </ul>
    </div>
</div>

<div class="tbox">
    <p style="margin-top:40px; width:80%;">
        Taxi Rank located on Fitzroy Street between Balluk Willam Court & Lakeside Drive.<br>
        Road closed to all traffic<br>
        Permit access only<br><br>
        
        Trams will not run along Fitzroy Street, Acland Street and The Esplanade
        between 5am and last tram on Sunday 8 February.<br><br>
        
        All changes to traffic conditions shown here apply from 5am until midnight
        on Sunday 8 February. Normal tram services will resume from first tram
        on Monday 9 February. <br><br>
        
        Details are correct at the time of printing.
        For train, tram and bus information call Public Transport Victoria on
        1800 800 007 (6am – midnight daily) or visit <a href="http://ptv.vic.gov.au" target="_blank">ptv.vic.gov.au</a>
    </p>
</div>
<style>
.tbox{
	font-size:18px;
	margin-bottom:20px;
	float:left;
}

.tbox ul{
	list-style:none;
	margin-left:0;	
}
.tbox ul li{
	line-height:26px;
	width:100%;
	float:left;
}
.tbox ul li span{
	float:left;
	display:inline-block;	
}
.tbox ul li span.lt{
	width:15%;
	font-weight:600;
}
.tbox ul li span.rt{
	width:80%
}
.tbox h2{
	font-size: 22px;
	font-family: 'Raleway', sans-serif;
	font-weight: 500;
}
.tbox .pt-icon{
	width:100px; 
	float:left;	
}
.tbox .pt-icon img{
	width:auto !important;
}
.tbox .pt-desc{
	margin-left:100px;	
}
.train{
	color:#0087cc;	
}
.tram{
	color:#76b82a;	
}
.bus{
	color:#ef7d00;	
}
</style>