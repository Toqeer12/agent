<?php
session_start();
include("connect.php");
include("raw_file.php");
$vartype = $_GET['id'];
?>
		<div style="padding-left:20px;padding-top: 10px;height: 20px;">
		 <input type="text" id="search" placeholder="Type to search..." />
		</div>
	<div style="margin-top:5px; padding-top:10px; text-align:center; height:1px; background:#27B2B9;Color:#000000;"></div>
<div id="page-wrap">
  
	<table dir="rtl">
		<thead>
 
		</thead>
		<tbody>
		
			
			<?php 
            if($vartype==1)
            {
 			$var = $_SESSION['Id'];
			$propertyDetail =Ownerdetail($var);
		
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
						<td height="25px" data-title="تفاصيل الطلب"color:blue><?php echo $propertyDetail[$i]['real_name'];?> </td>
						</tr>
						<tr height="25px">
        				<th height="25px" class="numeric">موبايل التاجر</th>
						<td height="25px" data-title="موبايل التاجر" class="numeric"><?php echo $propertyDetail[$i]['emi_id'];?></td>
        				</tr>
						<tr height="25px">
						<th height="25px" class="numeric">تاريخ الاستلام</th>
						<td height="25px" data-title="تاريخ الاستلام" class="numeric"><?php echo $propertyDetail[$i]['mob_no'];?></td>
        				</tr>
						<tr height="25px">
						<th height="25px" class="numeric">تاريخ التسليم المتوقع</th>
						<td height="25px" data-title="تاريخ الاستلام" class="numeric"><a href="contact_email_en.php?id=<?php echo $propertyDetail[$i]['email'];?>&name=<?php echo $propertyDetail[$i]['real_name'];?>"><?php echo $propertyDetail[$i]['email'];?></a></td>
        				</tr>
						<tr height="25px">
						<th height="25px" class="numeric">أسم المستلم</th>
						<td height="25px" data-title="تاريخ التسليم المتوقع" class="numeric"><?php echo $propertyDetail[$i]['resi_address'];?></td>
        				</tr>
						<tr height="25px">
						<th height="25px" class="numeric">موبايل المستلم</th>
						<td height="25px" data-title="تاريخ التسليم المتوقع" class="numeric"><?php echo $propertyDetail[$i]['sponsor'];?></td>
        				</tr>
						<tr height="25px">
						<th height="25px" class="numeric"><font color="#DC143C">حالة الطلب</th>
						<td height="25px" data-title="موبايل المستلم" class="numeric"><font color="#DC143C"><?php echo $propertyDetail[$i]['vendor'];?></td>
						</tr>
						<tr height="25px">
						<th height="25px" class="numeric"><font color="#DC143C">حالة الطلب</th>
						<td height="25px" data-title="موبايل المستلم" class="numeric"><font color="#DC143C"><?php echo $propertyDetail[$i]['notes'];?></td>
						</tr>
 
        			<tr height="5px">
						<th height="5px" class="numeric">    </th>
 						</tr>
        		</thead>
				<?php } 
            
	
 
 
			} else {
				
	      	$var = $_SESSION['Id'];
			$propertyDetail =Renterdetail($var);
		
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
						<td height="25px" data-title="تفاصيل الطلب"color:blue><?php echo $propertyDetail[$i]['real_name'];?> </td>
						</tr>
						<tr height="25px">
        				<th height="25px" class="numeric">موبايل التاجر</th>
						<td height="25px" data-title="موبايل التاجر" class="numeric"><?php echo $propertyDetail[$i]['emi_id'];?></td>
        				</tr>
						<tr height="25px">
						<th height="25px" class="numeric">تاريخ الاستلام</th>
						<td height="25px" data-title="تاريخ الاستلام" class="numeric"><?php echo $propertyDetail[$i]['mob_no'];?></td>
        				</tr>
						<tr height="25px">
						<th height="25px" class="numeric">تاريخ التسليم المتوقع</th>
						<td height="25px" data-title="تاريخ الاستلام" class="numeric"><a href="contact_email_en.php?id=<?php echo $propertyDetail[$i]['email'];?>&name=<?php echo $propertyDetail[$i]['real_name'];?>"><?php echo $propertyDetail[$i]['email'];?></a></td>
        				</tr>
						<tr height="25px">
						<th height="25px" class="numeric">أسم المستلم</th>
						<td height="25px" data-title="تاريخ التسليم المتوقع" class="numeric"><?php echo $propertyDetail[$i]['resi_address'];?></td>
        				</tr>
						<tr height="25px">
						<th height="25px" class="numeric">موبايل المستلم</th>
						<td height="25px" data-title="تاريخ التسليم المتوقع" class="numeric"><?php echo $propertyDetail[$i]['sponsor'];?></td>
        				</tr>
						<tr height="25px">
						<th height="25px" class="numeric"><font color="#DC143C">حالة الطلب</th>
						<td height="25px" data-title="موبايل المستلم" class="numeric"><font color="#DC143C"><?php echo $propertyDetail[$i]['vendor'];?></td>
						</tr>
						<tr height="25px">
						<th height="25px" class="numeric"><font color="#DC143C">حالة الطلب</th>
						<td height="25px" data-title="موبايل المستلم" class="numeric"><font color="#DC143C"><?php echo $propertyDetail[$i]['notes'];?></td>
						</tr>
 
        			<tr height="5px">
						<th height="5px" class="numeric">    </th>
 						</tr>
        		</thead>
 
           <?php }
            }?>
		</tbody>
	</table>
	
	</div>