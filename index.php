<?php
include("includes/top.php");
?>
  <div style="background-color:#000; width:100%; color:#FFF;">
  	&nbsp;&nbsp;HOME->Login Page------------------
    <p></p>	
  </div>
  
<div class="container">  

    <div class="row">
    	<?php  if(isset($_REQUEST['msg'])){echo $_REQUEST['msg'];} ?>
        <div class="col-sm-12">
            <div class="panel panel-primary">

                <div class="panel-heading">Login</div>
                    <div class="panel-body">
                        <form name="f1" method="post" action="logincheck.php">
                            <div class="form-group">
                                <label for="email">Email address:</label>
                                <input type="email" name="email" class="form-control" id="email" required>
                            </div>
                            <div class="form-group">
                                <label for="pwd">Password:</label>
                                <input type="password"  name="password" class="form-control" id="pwd" required>
                            </div>
                            
                            <button type="submit" class="btn btn-default">Submit</button>
                        </form> 
                        <div class="form-group">
                        		<br>
	                         
                        </div>
                    </div>
                </div>
            </div>
	    </div>
    </div>
</div>





















<?php
include("includes/bottom.php");
?>