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

<title>نظام املاك لادارة العقارات</title>
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
 
    </div>
</div>
    
    
<?php include("language_selector.php")?>

 
    <div class="header">
    <a href="#" class="main-logo"></a>
    <div class="header-controls">
        <a href="#" class="open-more"><i class="fa fa-navicon"></i></a>
        <a href="#" class="open-slide"><i class="fa fa-globe"></i></a>
      
    </div>
</div>
       
<div class="all-elements">
    <div class="snap-drawers">
   
        <div class="snap-drawer snap-drawer-left">
      
            
            <div class="sidebar-divider">
                Navigation
            </div>
                       
            <div class="sidebar-divider">
                by Arrowtec LLC 2016
            </div>
        </div>
        <div class="snap-drawer snap-drawer-right">
            <div class="sidebar-header">

               
            </div>
                    
            <div class="sidebar-divider"  align="center" >
                الرئيسية
            </div>     
            
            <ul class="sidebar-navigation">
                <li><a href="ar_welcome.php"><i class="fa fa-home"></i>العودة للرئيسية<i class="fa fa-caret-right"></i></a></li>
            </ul>
            
 
        <?php include("slider_ar.php");?>
    <!-- Page Content-->
    <div id="content" class="snap-content">
		<div style="margin-top:30px; padding-top:10px; text-align:center; height:40px; background:#27B2B9;Color:#000000;">تفاصيل وحدة</div>
		<div style="padding-left:20px;padding-top: 10px;height: 20px;">
		 <input type="text" id="search" placeholder="Type to search..." />
		</div>
	<div style="margin-top:5px; padding-top:10px; text-align:center; height:1px; background:#27B2B9;Color:#000000;"></div>
        	<div id="page-wrap">
	<table id="table" dir="rtl">
		
			<table id="table" dir="rtl">
			<?php  
			$var = $_SESSION['Id'];
			$propertyDetail =Unitdetail($var);
		
			for($i=0; $i<count($propertyDetail); $i++)
			{
			?>
        		<thead class="cf">
        				<tr height="25px">
        				<th><font color="#8B0000">رقم الطلب</th>
						<td height="25px" data-title="رقم الطلب"><font color="#8B0000"><?php echo $i+1;?> </td>
						</tr>
						<tr height="25px">
        				<th>تفاصيل الطلب</th>
						<td height="25px" data-title="تفاصيل الطلب"color:blue><?php echo propertyName($propertyDetail[$i]['property_name']);?> </td>
						</tr>
						<tr height="25px">
        				<th height="25px" class="numeric">موبايل التاجر</th>
						<td height="25px" data-title="موبايل التاجر" class="numeric"><?php echo propertytype($propertyDetail[$i]['property_type']); ?> </td>
        				</tr>
						<tr height="25px">
						<th height="25px" class="numeric">تاريخ الاستلام</th>
						<td height="25px" data-title="تاريخ الاستلام" class="numeric"><?php echo $propertyDetail[$i]['block_no'];?></td>
        				</tr>
						<tr height="25px">
						<th height="25px" class="numeric">تاريخ التسليم المتوقع</th>
						<td height="25px" data-title="تاريخ الاستلام" class="numeric"> <?php echo $propertyDetail[$i]['annul_lease'];?></td>
        				</tr>
						<tr height="25px">
						<th height="25px" class="numeric">أسم المستلم</th>
						<td height="25px" data-title="تاريخ التسليم المتوقع" class="numeric"> <?php echo $propertyDetail[$i]['comission_amount'];?></td>
        				</tr>
						<tr height="25px">
						<th height="25px" class="numeric">موبايل المستلم</th>
						<td height="25px" data-title="تاريخ التسليم المتوقع" class="numeric"><?php echo $propertyDetail[$i]['comission'];?></td>
        				</tr>
						<tr height="25px">
						<th height="25px" class="numeric"><font color="#DC143C">حالة الطلب</th>
						<td height="25px" data-title="موبايل المستلم" class="numeric"><font color="#DC143C"><?php echo $propertyDetail[$i]['desc-unity'];?></td>
						</tr>
						<tr height="25px">
						<th height="25px" class="numeric"><font color="#DC143C">حالة الطلب</th>
						<td height="25px" data-title="موبايل المستلم" class="numeric"><font color="#DC143C"><?php echo $propertyDetail[$i]['develop_proces'];?> </td>
						</tr>
							<tr height="25px">
						<th height="25px" class="numeric"><font color="#DC143C">حالة الطلب</th>
						<td height="25px" data-title="موبايل المستلم" class="numeric"><font color="#DC143C"><?php echo $propertyDetail[$i]['status'];?> </td>
						</tr>
        			<tr height="5px">
						<th height="5px" class="numeric">    </th>
 						</tr>
        		</thead>
				<?php } ?>
	</table>
	
 
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

