<?php
include("includes/top.php");
?>
<script type="text/javascript">
function checkpassworddata()
{
	a=document.f1.password.value;
	b=document.f1.cpassword.value;

	if(a==b)
	{
		
	}
	else
	{
		alert("password and Confirm Passwords are not same....");
		document.f1.password.value="";
		document.f1.cpassword.value="";
		a=document.f1.password.focus();

	}

}
</script>
  <div style="background-color:#000; width:100%; color:#FFF;">
  	&nbsp;&nbsp;HOME->Add Page------------------
    <p></p>
  </div>
  
<div class="container">  
    <div class="row">
        <div class="col-sm-12">
            <div class="panel panel-primary">


                <div class="panel-heading">Add Emp data</div>
                    <div class="panel-body">

                        <form name="f1" method="post" action="add_db.php">
                            <div class="form-group">
                                <label for="text">Enter Name:</label>
                                <input type="text" name="name" class="form-control" id="name" required >
                            </div>
                            <div class="form-group">
                                <label for="text">Gender:</label>
                                <input type="radio" name="gender"  id="gender" checked value="Male">Male
                                <input type="radio"  name="gender" id="gender"  value="Female">Female
                            </div>
                            <div class="form-group">
                                <label for="email">Email address:</label>
                                <input type="email" name="email" class="form-control" id="email" required >
                            </div>
                            <div class="form-group">
                                <label for="mobile">Mobile:</label>
                                <input type="number"  name="mobile" class="form-control" id="mobile" required >
                            </div>
							                          
                            <div class="form-group">
                                <label for="pwd">Password:</label>
                                <input type="password" name="password" class="form-control" id="pwd" required>
                            </div>
                            <div class="form-group">
                                <label for="pwd">Confirm Password:</label>
                                <input type="password" name="cpassword" class="form-control" id="pwd" required onBlur="checkpassworddata();" >
                            </div>
                            <div class="form-group">
                                <label for="mobile">Salary:</label>
                                <input type="number"  name="salary" class="form-control" id="salary" required >
                            </div>  
							<div class="form-group">
                                <label for="pwd">Department:</label>
								<select name="dept" id="dept" rquired>
                                	<option value="Sales">Sales</option>
                                   	<option value="Account">Account</option>
                                	<option value="Purchase">Purchase</option>
                                   	<option value="Advertisement">Advertisement</option>
                                	<option value="Production">Production</option>
                                   	<option value="HR">HR</option>
                                </select>
                            </div>
                            
                                <button type="submit" class="btn btn-default">Submit</button>
                                <button type="reset" class="btn btn-default">Clear</button>
                        </form> 
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>




<?php
include("includes/bottom.php");
?>