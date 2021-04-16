<?php
include("includes/top.php");
include("includes/menu.php");
?>
<script language="javascript">
function setAction(action,mid,name)
{

	if(action=="singledelete")
	{
		// it will get ask user to delete details.
		if(!confirm("Are you sure you want to delete "+name+"?"))
		{
			//if answer is not then it will transfer control in contactus.php page.
			window.location.href='welcome.php';
			// it will return false.
			return false;
		}			
		// it will transfer first field into mid textbox.
		document.frm1.mid.value=mid;	
		// it will transfer action details wich is stroed in myaction textbox.

		document.frm1.myaction.value=action;		
		// it will transfer control to admin_db.php page.
		document.frm1.action="delete_db.php";
		// it will submit details.
		document.frm1.submit();
	}
	
	if(action=="edit")
	{
	
     	document.frm1.mid.value=mid;	
		// it will transfer action details wich is stroed in myaction textbox.

		document.frm1.myaction.value=action;		
		// it will transfer control to admin_db.php page.
		document.frm1.action="addedit.php";
		// it will submit details.
		document.frm1.submit();
	}
	if(action=="add")
	{
	
     	document.frm1.mid.value=mid;	
		// it will transfer action details wich is stroed in myaction textbox.

		document.frm1.myaction.value=action;		
		// it will transfer control to admin_db.php page.
		document.frm1.action="addedit.php";
		// it will submit details.
		document.frm1.submit();
	}
}
</script>
<form name="frm1" method="post" action="">
<div class="container"> 
<DIV class="row" style="height:400px;"> 
 &nbsp;&nbsp;&nbsp;Welcome to Client page

 <table border="1" cellspacing="0" cellpadding="0" width="100%" align="center">
 <tr>
 	<td colspan="10" align="right">
    	<a href="javascript:setAction('add');"> Add&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a>
    </td>
 </tr>
 <tr align="center">
 	<td>
    	ENo
    </td>
     	<td>
    	EName
    </td>
     	<td>
    	Gender
    </td>
     	<td>
    	Email
    </td>
     	<td>
    	Mobile
    </td>
     	<td>
    	Password
    </td>
     	<td>
    	Confirm Password
    </td>
     	<td>
    	Salary
    </td>
     	<td>
    	Department
    </td>
     	<td>
    	Action
    </td>
 </tr>
<?php
$q="select * from master_emp order by eno";
$r=mysql_query($q) or die("could not execute query");
while($row=mysql_fetch_array($r))
{
?>
<tr align="center">
 	<td>
    	<?php echo $row[0];?>
    </td>
     	<td>
    	<?php echo $row[1];?>
    </td>
     	<td>
    <?php echo $row[2];?>
    </td>
     	<td>
    	<?php echo $row[3];?>
    </td>
     	<td>
    	<?php echo $row[4];?>
    </td>
     	<td>
    	<?php echo "**********"?>
    </td>
     	<td>
    	<?php echo "**********"?>
    </td>
     	<td>
    	<?php echo $row[7];?>
    </td>
     	<td>
    	<?php echo $row[8];?>
    </td>
     	<td>
    	<a href="javascript:setAction('edit','<?php echo $row[0];?>');"> Edit</a>
       			<A href="javascript:setAction('singledelete','<?php echo $row[0];?>','<?php echo $row[1];?>');"> Delete</a>
    </td>
 </tr>
<?php
}
?>
</table>
</div>
</div>
<input type="hidden" name="myaction">
<input type="hidden" name="mid">
</form>
<?php
include("includes/bottom.php");
?>