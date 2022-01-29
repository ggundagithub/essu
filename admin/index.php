<?php
  	session_start();
  	if(isset($_SESSION['admin'])){
    	header('location:home.php');
  	}
?>
<?php include 'includes/header.php'; ?>
<body background="../images/images (5).jpeg" style="background-repeat:no-repeat; background-attachment:fixed; background-size:100% 100%" >
<div class="login-box">
  	
  
  	<div class="login-box">
    	  	<center><img src="../images/header1.png" width="330px"></center>
        <center><h3><b>Admin Login</h3></center>
        
        	<div>
  	<?php
  		if(isset($_SESSION['error'])){
  			echo "
  				<div class='callout callout-danger text-center mt20'>
			  		<p>".$_SESSION['error']."</p> 
			  	</div>
  			";
  			unset($_SESSION['error']);
  		}
  	?>
</div>
        <hr>
    	<form action="login.php" method="POST">
      		<div class="form-group has-feedback">
      			    <label for="password" class="col-sm-3 control-label">Username</label>
        		<input type="text" class="form-control" name="username" placeholder="Username" required>
        		<span class="glyphicon glyphicon-user form-control-feedback"></span>
      		</div>
      		
          <div class="form-group has-feedback">
          	  <label for="password" class="col-sm-3 control-label">Password</label>
            <input type="password" class="form-control" name="password" placeholder="Password" required>
            <span class="glyphicon glyphicon-lock form-control-feedback"></span>
          </div>
          
          <hr>
      		                  <center><button class="btn btn-lg btn-success btn-block " name = "login" style= " margin-bottom:0px;" width="50"><i class="fa fa-sign-in"> Login</button></i></center>
        		                  
      		                  <hr>
      	<center><label><a href="../login_form.php">Click here to Vote!</a></label></center>
    <hr>
      		</div>
    	</form>
  	
	
<?php include 'includes/scripts.php' ?>
</body>
</html>