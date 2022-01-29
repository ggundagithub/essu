<!-- Add -->
<div class="modal fade" id="addnew">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
              <h4 class="modal-title"><b>Add New Voter</b></h4>
            </div>
            <div class="modal-body">
             <form class="form-group" method="POST" action="voters_add.php" enctype="multipart/form-data">
            <div class="">
            	
            	             <div class="form-group">
                    <label for="student_id" class="col-sm-3">Student_ID</label>

                      <input type="text" class="form-control" id="student_id" name="student_id" placeholder="Enter  your student id" required>
                   </div>
                   
                <div class="form-group">
                    <label for="firstname" class="col-sm-3">First_name</label>

                      <input type="text" class="form-control" id="firstname" name="firstname" placeholder="Enter  your First Name" required>
                   </div>
                   
                
                <div class="form-group">
                    <label for="lastname" class="col-sm-3">Last_name</label>
                  
                    <div class="">
                      <input type="text" class="form-control" id="lastname" name="lastname" placeholder="Enter your Last Name" required>
                    </div>
                </div>
           
                    <div class="form-group">
                    <label for="password" class="col-sm-3 control-label">Password</label>

                    <div class="">
                      <input type="password" class="form-control" id="password" name="password" placeholder="Enter your Password" required>
                    </div>
                </div>
                <div class="form-group">
                	<label for="gmail" class="col-sm-3 control-label">Gmail</label>
                	<div class="">
                		<input type="gmail" class="form-control" id="gmail" name="gmail" placeholder="Enter your gmail account" required>
               
                	</div>
                </div>
<div class="form-group">
                	<label for="gender" class="col-sm-3 control-label">Gender</label>
                	<div class="">
                		<select class="form-control" id="gender" name="gender" required>
                			
                		<option value="disable">-select-</option>
                			<option>Male </option>
                			<option>Female</option>
                		</select>
                	</div>
                </div>
                <div class="form-group">
                	<label for ="yearlevel"class="col-sm-3 control-label">Year Level</label>
                	<div class="">
                		<select class="form-control" id="yearlevel" name="yearlevel" required>
               		<option value="disable">-select-</option>
                			<option>1st Year</option>
                			<option>2nd Year</option>
                			<option>3rd Year</option>
                			<option>4th Year</option>
                		</select>
                	</div>
                </div>
                <div class="form-group">
                	<label for="course" class="col-sm-3">Course</label>
                	<div class="">
                	<select class="form-control" id="course" name="course" required>
                		<option value="disable">-select-</option>
                		<option>BSIT</option>
                		<option>BEED</option>
                		<option>Criminology</option>
                		<option>BSED - Major in math</ootion>
                		<option>BSED - Socsci</option>
                		<option>BSED - Major in Science</option>
                		<option>BSA - Cropsci</option>
                		<option>BSA - Animal Science</option>
                	</select>
                	</div>
                </div>

                <div class="form-group">
                    <label for="photo" class="col-sm-3 control-label">Photo</label>

                    <div class="">
                      <input type="file" id="photo" name="photo">
                    </div>
                </div>
                <hr>
                <br>
            
                <button type="submit"class="btn btn-lg btn-success btn-block" name="add"style="margin-bottom:50"><i class="fa fa-save">  Save</i></button>
                </div>
              </form>
            
            </div>
        </div>
    </div>
</div>

<!-- Edit -->
<div class="modal fade" id="edit">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
              <h4 class="modal-title"><b>Edit Voter</b></h4>
            </div>
            <div class="modal-body">
              <form class="form-horizontal" method="POST" action="voters_edit.php">
                <input type="hidden" class="id" name="id">
                <div class="form-group">
                    <label for="edit_firstname" class="col-sm-3 control-label">Firstname</label>

                    <div class="col-sm-9">
                      <input type="text" class="form-control" id="edit_firstname" name="firstname">
                    </div>
                </div>
                <div class="form-group">
                    <label for="edit_lastname" class="col-sm-3 control-label">Lastname</label>

                    <div class="col-sm-9">
                      <input type="text" class="form-control" id="edit_lastname" name="lastname">
                    </div>
                </div>

                <div class="form-group">
                    <label for="edit_password" class="col-sm-3 control-label">Password</label>

                    <div class="col-sm-9">
                      <input type="password" class="form-control" id="edit_password" name="password">
                    </div>
                </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-default btn-flat pull-left" data-dismiss="modal"><i class="fa fa-close"></i> Close</button>
              <button type="submit" class="btn btn-success btn-flat" name="edit"><i class="fa fa-check-square-o"></i> Update</button>
              </form>
            </div>
        </div>
    </div>
</div>

<!-- Delete -->
<div class="modal fade" id="delete">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
              <h4 class="modal-title"><b>Deleting...</b></h4>
            </div>
            <div class="modal-body">
              <form class="form-horizontal" method="POST" action="voters_delete.php">
                <input type="hidden" class="id" name="id">
                <div class="text-center">
                    <p>DELETE VOTER</p>
                    <h2 class="bold fullname"></h2>
                </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-default btn-flat pull-left" data-dismiss="modal"><i class="fa fa-close"></i> Close</button>
              <button type="submit" class="btn btn-danger btn-flat" name="delete"><i class="fa fa-trash"></i> Delete</button>
              </div>
              </form>
            </div>
        </div>
    </div>
</div>

<!-- Update Photo -->
<div class="modal fade" id="edit_photo">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
              <h4 class="modal-title"><b><span class="fullname"></span></b></h4>
            </div>
            <div class="modal-body">
              <form class="form-horizontal" method="POST" action="voters_photo.php" enctype="multipart/form-data">
                <input type="hidden" class="id" name="id">
                <div class="form-group">
                    <label for="photo" class="col-sm-3 control-label">Photo</label>

                    <div class="col-sm-9">
                      <input type="file" id="photo" name="photo" required>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-default btn-flat pull-left" data-dismiss="modal"><i class="fa fa-close"></i> Close</button>
              <button type="submit" class="btn btn-success btn-flat" name="upload"><i class="fa fa-check-square-o"></i> Update</button>
              </form>
            </div>
        </div>
    </div>
</div>


     