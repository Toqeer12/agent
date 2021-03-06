
<?php
session_start();
?>
<!DOCTYPE HTML><head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="user-scalable=no, initial-scale=1.0, maximum-scale=1.0 minimal-ui"/>
<meta name="apple-mobile-web-app-capable" content="yes"/>
<meta name="apple-mobile-web-app-status-bar-style" content="black">

<link rel="apple-touch-icon-precomposed" sizes="114x114" href="images/splash/splash-icon.png">
<link rel="apple-touch-icon-precomposed" sizes="180x180" href="images/splash/splash-icon-big.png">
<link rel="apple-touch-startup-image" href="images/splash/splash-screen.png" 	media="screen and (max-device-width: 320px)" />  
<link rel="apple-touch-startup-image" href="images/splash/splash-screen@2x.png" media="(max-device-width: 480px) and (-webkit-min-device-pixel-ratio: 2)" /> 
<link rel="apple-touch-startup-image" href="images/splash/splash-screen-six.png" media="(device-width: 375px)">
<link rel="apple-touch-startup-image" href="images/splash/splash-screen-six-plus.png" media="(device-width: 414px)">
<link rel="apple-touch-startup-image" sizes="640x1096" href="images/splash/splash-screen@3x.png" />
<link rel="apple-touch-startup-image" sizes="1024x748" href="images/splash/splash-screen-ipad-landscape" media="screen and (min-device-width : 481px) and (max-device-width : 1024px) and (orientation : landscape)" />
<link rel="apple-touch-startup-image" sizes="768x1004" href="images/splash/splash-screen-ipad-portrait.png" media="screen and (min-device-width : 481px) and (max-device-width : 1024px) and (orientation : portrait)" />
<link rel="apple-touch-startup-image" sizes="1536x2008" href="images/splash/splash-screen-ipad-portrait-retina.png"   media="(device-width: 768px)	and (orientation: portrait)	and (-webkit-device-pixel-ratio: 2)"/>
<link rel="apple-touch-startup-image" sizes="1496x2048" href="images/splash/splash-screen-ipad-landscape-retina.png"   media="(device-width: 768px)	and (orientation: landscape)	and (-webkit-device-pixel-ratio: 2)"/>

<title>Amlacc</title>
<link rel="stylesheet"                   href="css2/style.css">
<link href="styles/style.css"     		 rel="stylesheet" type="text/css">
<link href="styles/framework.css" 		 rel="stylesheet" type="text/css">
<link href="styles/owl.theme.css" 		 rel="stylesheet" type="text/css">
<link href="styles/swipebox.css"		 rel="stylesheet" type="text/css">
<link href="styles/font-awesome.css"	 rel="stylesheet" type="text/css">
<link href="styles/animate.css"			 rel="stylesheet" type="text/css">

<script type="text/javascript" src="scripts/jquery.js"></script>
<script type="text/javascript" src="scripts/jqueryui.js"></script>
<script type="text/javascript" src="scripts/framework.plugins.js"></script>
<script type="text/javascript" src="scripts/custom.js"></script>
 <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>



 	<style>
	
	/* 
	Max width before this PARTICULAR table gets nasty
	This query will take effect for any screen smaller than 760px
	and also iPads specifically.
	*/
	@media 
	only screen and (max-width: 760px),
	(min-device-width: 768px) and (max-device-width: 1024px)  {
	
		/* Force table to not be like tables anymore */
		table, thead, tbody, th, td, tr { 
			display: block; 
		}
		
		/* Hide table headers (but not display: none;, for accessibility) */
		thead tr { 
			position: absolute;
			top: -9999px;
			left: -7777px;
		}
		
		tr { border: 3px solid #ccc; }
		
		td { 
			/* Behave  like a "row" */
			border: none;
			border-bottom: 1px solid #eee; 
			position: relative;
			padding-left: 50%; 
		}
		
		td:before { 
			/* Now like a table header */
			position: absolute;
			/* Top/left values mimic padding */
			top: 6px;
			left: 6px;
			width: 85%; 
			padding-right: 5px; 
 		}
		
		/*
		Label the data
		*/
		
		td:nth-of-type(1):before { content: "Sr #"; }
		td:nth-of-type(2):before { content: "Real Name"; }
		td:nth-of-type(3):before { content: "Emirate ID"; }
 		td:nth-of-type(4):before { content: "Mobile #"; }
		td:nth-of-type(5):before { content: "Email"; }
		td:nth-of-type(6):before { content: "Residence Address"; }
		td:nth-of-type(7):before { content: "Sponsor"; }
        td:nth-of-type(8):before { content: "Vendor"; }
 		td:nth-of-type(9):before { content: "Notes"; }
	  }
	}
	
	/* Smartphones (portrait and landscape) ----------- */
	@media only screen
	and (min-device-width : 320px)
	and (max-device-width : 480px) {
		body { 
			padding: 0; 
			margin: 0; 
			width: 520px; }
		}
	
	/* iPads (portrait and landscape) ----------- */
	@media only screen and (min-device-width: 768px) and (max-device-width: 1024px) {
		body { 
			width: 595px; 
		}
	}
	
	</style>
</head>
<body> 

<div id="preloader">
	<div id="status">
<!--    	<p class="center-text">
			يرجى الانتظار.....
            <em>جاري عرض البيانات...</em>
        </p>-->
        <p class="center-text">
			Loading the content...
            <em>Loading depends on your connection speed!</em>
        </p>
    </div>
</div>
    
    
<?php include("language_selector.php")?>

 
       
<div class="all-elements">
    <div class="snap-drawers">
        <!-- Left Sidebar -->
        <div class="snap-drawer snap-drawer-left">
                       
            <div class="sidebar-divider"  align="center" >
                Welcome
            </div>     
            
            <ul class="sidebar-navigation">
                <li><a href="en_welcome.php"><i class="fa fa-home"></i>Back to Main Page<i class="fa fa-caret-right"></i></a></li>
            </ul>
            <?php include("slider.php")?>
 
        </div>
    </div>
     
    <!-- Page Content-->
    <div id="content" class="snap-content">
		<div style="margin-top:30px; padding-top:10px; text-align:center; height:40px; background:#27B2B9;Color:#000000;">Client Details </div>
		<div style="padding-left:20px;padding-top: 10px;height: 20px;">
		 <input type="text" id="search" placeholder="Type to search..." />
		</div>
	<div style="margin-top:5px; padding-top:10px; text-align:center; height:1px; background:#27B2B9;Color:#000000;"></div>
	<div id="page-wrap">



    
	<table id="table" style="width: 300px;">
		<thead>
 
		</thead>
		<tbody>
		
			
			<?php 
			$var = $_SESSION['Id'];
			$propertyDetail =clientDetail2($var);
		
			for($i=0; $i<count($propertyDetail); $i++)
			{
			?>
			<tr>
			<td><?php echo $i+1;?></td>
			<td><?php echo $propertyDetail[$i]['real_name'];?></td>
 			<td><?php echo $propertyDetail[$i]['emi_id'];?></td>
			<td><?php echo $propertyDetail[$i]['mob_no'];?></td>
			<td><?php echo $propertyDetail[$i]['email'];?></td>
			<td><?php echo $propertyDetail[$i]['resi_address'];?></td>
			<td><?php echo $propertyDetail[$i]['sponsor'];?></td>		
            <td><?php echo $propertyDetail[$i]['vendor'];?></td>		
			<td><?php echo $propertyDetail[$i]['notes'];?></td>		

 		</tr>
		 <?php }?>
		</tbody>
	</table>
	
	</div>
     
 
    </div>
    

    
</div>
 <script type="text/javascript">
 $("#search").keyup(function(){
        _this = this;
        // Show only matching TR, hide rest of them
        $.each($("#table tbody tr"), function() {
            if($(this).text().toLowerCase().indexOf($(_this).val().toLowerCase()) === -1)
               $(this).hide();
            else
               $(this).show();                
        });
    }); 	 
	 </script>
</body>

