<?php  

session_start();


?>


<!DOCTYPE HTML>
<html>

<head>
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
<link rel="stylesheet" href="css2/style.css">

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
 <script type="text/javascript" src="js2/table.js"></script>
 
<style>
	
 @media (max-width: 600px) {
    /* CSS Responsive table */
    table.responsive,
    table.responsive thead,
    table.responsive tbody,
    table.responsive th,
    table.responsive td,
    table.responsive tr {
        display: block;
    }
 
        table.responsive thead tr {
            position: absolute;
            top: -9999px;
            left: -9999px;
        }
 
        table.responsive tr {
            border: 1px solid #ccc;
            margin-bottom: 10px;
        }
 
        table.responsive td {
            border: none;
            border-bottom: 1px solid #eee;
            position: relative;
            padding-left: 50%;
        }
 
            table.responsive td:before {
                top: 6px;
                left: 6px;
                width: 40%;
                padding-right: 10px;
                text-align: left;
                word-wrap: break-word;
                font-weight: bold;
            }
 
        table.responsive tr:first-child {
            /*position: absolute;
            top: -9999px;
            left: -9999px;*/
        }
 
        table.responsive td:before {
            content: attr(data-content);
            height: 50px;
        }
 
        table.responsive td.small-padding {
            padding-top: 5px;
            padding-bottom: 5px;
        }
 
        table.responsive td.medium-padding {
            padding-top: 15px;
            padding-bottom: 15px;
        }
 
        table.responsive td.large-padding {
            padding-top: 25px;
            padding-bottom: 25px;
        }
}
	
	</style>
</head>
<body > 

<div id="preloader">
	<div id="status">
    	<p class="center-text">
			يرجى الانتظار.....
            <em>جاري عرض البيانات...</em>
        </p>
<!--        <p class="center-text">
			Loading the content...
            <em>Loading depends on your connection speed!</em>
        </p>-->
    </div>
</div>
    
    
<?php include("language_selector.php")?>

<!--<div class="header">
    <a href="#" class="main-logo"></a>
    <div class="header-controls">
        <a href="#" class="open-more"><i class="fa fa-envelope"></i></a>
        <a href="#" class="open-slide"><i class="fa fa-star"></i></a>
        <a href="#" class="open-menu"><i class="fa fa-navicon"></i></a>
    </div>-->
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
            
 
        <?php include("slider_ar.php");
?>
    <!-- Page Content-->
    <div id="content" class="snap-content">

        
		<div style="margin-top:30px; padding-top:10px; text-align:center; height:40px; background:#27B2B9;Color:#000000;">تفاصيل العقار</div>
 		<div style="padding-left:20px;padding-top: 10px;height: 20px;">
		 <input type="text" id="search" placeholder="Type to search..." />
		</div>
	<div style="margin-top:5px; padding-top:10px; text-align:center; height:1px; background:#27B2B9;Color:#000000;"></div>
 	<div id="page-wrap">



    
	<table class="responsive" dir="rtl">
		<thead>
				<tr>	<th>رقم الطلب</th>
				<th>تفاصيل الطلب</th>
					<th  >موبايل التاجر</th>
					<th  >تاريخ الاستلام</th>
						<th  >تاريخ التسليم المتوقع</th>
						<th  >أسم المستلم</th>
						
						<th  >موبايل المستلم</th>
							<th  >حالة الطلب</th>
							<th  >حالة الطلب</th>
					</tr>
				</thead>
					<tbody >
						<?php 
$var = $_SESSION['Id'];

$propertyDetail =propertyDetail($var);


for ($i=0; $i<count($propertyDetail); $i++)
{
	?>
			
        	
        				<tr >
        			
						<td  > <?php echo $i+1;
?> </td> 
        				
						<td  ><?php echo $propertyDetail[$i]['propty_name'];
?> </td>
						 
        			
						<td  ><?php echo propertytype($propertyDetail[$i]['property_type']);
?> </td>
        				 
						
						<td  ><?php echo $propertyDetail[$i]['year_build'];
?> </td>
        				 
					
						<td  > <?php echo $propertyDetail[$i]['block_no'];
?></td>
        				 
						
						<td  > <?php echo $propertyDetail[$i]['about_him'];
?></td>
        				 
						
						<td  > <?php echo clientDetail($propertyDetail[$i]['owner_id']);
?></td>
        				 
					
						<td  ><?php echo $propertyDetail[$i]['inst_no'];
?> </td>
					
							
						
						<td  ><?php echo viewpropertyUnit($propertyDetail[$i]['owner_id'],$propertyDetail[$i]['id'],$var);
?> </td>
						</tr>
        		
        		
				<?php
}
?>
</tbody>
	</table>
	
	</div>
        
        <!-- Page Footer-->
    
 
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
	
	
	$(function () {
           $('table.responsive').ngResponsiveTables({
               smallPaddingCharNo: 13,
               mediumPaddingCharNo: 18,
               largePaddingCharNo: 30
           });
       });
	 </script>
</body>
</html>

