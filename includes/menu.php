<?php
if(isset($_SESSION['uname']))
{
	
}
else
{
	header("location:index.php?msg=session expire...");
}
?>
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
      </button>
   </div>

    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li><a href="welcome.php">Home</a></li>
        <li><a href="logout.php">logout</a></li>

      </ul>
    </div>
  </div>
</nav>