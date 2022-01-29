<aside class="main-sidebar">
  <!-- sidebar: style can be found in sidebar.less -->

  <section class="sidebar">
    <!-- Sidebar user panel -->
    <!-- Sidebar user panel -->
    <div class="user-panel">
      <div class="pull-left image">
        <img src="<?php echo (!empty($user['photo'])) ? '../images/'.$user['photo'] : '../images/profile.jpg'; ?>" class="img-circle" alt="User Image">
      </div>
      <div class="pull-left info">
        <h5><a><b><?php echo $user['firstname'].' '.$user['lastname']; ?></b></a></h5>
		
        <a><i class="fa fa-circle text-success"></i> Online</a>
      </div>
    </div>
    <!-- sidebar menu: : style can be found in sidebar.less -->
    <ul class="sidebar-menu" data-widget="tree">
	<hr>
      <li class="header"><center><b><a class="text-white">REPORTS</a></b></center></li>
      <li class=""><a href="home.php"><i class="fa fa-dashboard"></i> <span>Dashboard</span></a></li>
      <li class=""><a href="votes.php"><span class="glyphicon glyphicon-lock"></span> <span>Votes</span></a></li>
            <li class=""><a href="canvassing.php"><i class="fa fa-file-text"></i> <span>Election Report</span></a></li>
			<hr>
      <li class="header"><center><b><a>MANAGE</a></b></center></li>
      <li class=""><a href="voters.php"><i class="fa fa-users"></i> <span>Voters</span></a></li>
      <li class=""><a href="positions.php"><i class="fa fa-tasks"></i> <span>Positions</span></a></li>
      <li class=""><a href="candidates.php"><i class="fa fa-black-tie"></i> <span>Candidates</span></a></li>
      <li class=""><a href="student_reg.php"><i class="fa fa-users"></i><span> Students List</span></a></li>
	  <hr>
      <li class="header"><center><b><a>SETTINGS</a></b></center></li>
      <li class=""><a href="ballot.php"><i class="fa fa-file-text"></i> <span>Ballot Position</span></a></li>
      <li class=""><a href="#config" data-toggle="modal"><i class="fa fa-cog"></i> <span>Election Title</span></a></li>
    
    </ul>
  </section>
  <!-- /.sidebar -->
</aside>
<?php include 'config_modal.php'; ?>