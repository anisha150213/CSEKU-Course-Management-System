<div class="content">
    <div class = "form-group">
        <div class="cntr">
        	<h2>Account Manage</h2>
        </div>
        <br>
        <div class="form-group row cntr">
            <div class="col-12">
                <label for="user_name" class="col-form-label">User Name</label>
                <label id="user_name" class="col-form-label"><b><?php echo $data['username']?></b></label>
            </div>
            <div class="col-12">
                <label class="col-form-label">Do you want to change password? <a data-toggle="modal" href="#changePassword">Edit</a></label>
            </div>
        </div> 
    </div>
    <br>
    <div class="form-group">
        <div class="cntr">
        	<h2><b>Open/Close course registration</b></h2>
        </div>
        <br>
        <div class="cntr">
	        <label for="" style="font-size:25px" class="col-form-label"><b>Current status</b></label>
	        <label class="text-danger col-form-label"><b><?php if($data['is_open'][0]['is_open'] == 1){echo 'Opened';}else{echo 'Closed';}?></b></label>
        </div>
        <br>
        <div class="form-froup row cntr">
        	<?php if($data['is_open'][0]['is_open'] == '1'){?>
	        <div class="col-sm-6">
	            <label for="" class="fcol-form-label">Start Date</label>
	            <input type="text" disabled="disabled" class="form-control" value="<?php echo $data['is_open'][0]['start_date']?>">
            </div>
            <div class="col-sm-6">
	            <label for="" class="col-form-label">End Date</label>
	            <input type="text" disabled="disabled" class="form-control" value="<?php echo $data['is_open'][0]['end_date']?>">
	        </div>
            <br>
        </div>
        <br>
        <a href="<?php echo BASE_URL?>/dashboard/closeRegistration/<?php echo $data['is_open'][0]['id']?>" class="btn btn-outline-customs">Close Registration</a>
        	<?php }else{?>
            <form action="<?php echo BASE_URL?>/dashboard/openRegistration" method="post">
	            <div class="row">
	                <div class="col-sm-5">
		                <label for="" class="col-form-lebel">Start Date</label>
		                <input type="date" name="start_date" class="col-12" required="required" >
	                </div>
	                <br>
	                <div class="col-sm-5">
		                <label for="" class="col-form-lebel">End Date</label>
		                <input type="date" name="end_date" class="col-12" required="required">
	                </div>
	        
	                <br>
	                <div class="col-sm-2">
		                <input type="hidden" class="form-control" name="id" value="<?php echo $data['is_open'][0]['id']?>">
		                <label style="visibility:hidden" class="col-form-lebel">hidden</label>
		                <input type="submit" class="btn btn-outline-customs" value="Open Registration">
		            </div>
	            </div>
       		</form>
        	<?php }?>
    </div>
    <br>
    <div class="form-froup">
        <div class="cntr">
        	<h2><b>Session</b></h2>
        </div>
        <table class="table">
            <thead>
                <tr>
                    <td>Session</td>
                    <td>Update</td>
                </tr>
            </thead>
            <tbody>
            <?php foreach ($data['session'] as $key => $value){?>
                <tr>
                    <form action="<?php echo BASE_URL?>/dashBoard/updateSession" method="post">
                        <td>
                            <input class="form-control col-md-2"type="text" value="<?php echo $value['sessionNumber']?>" name="session" id="session" disabled="disabled">
                        </td>
                        <td>
                            <input type="hidden" value="<?php echo $value['id']?>" name="id">
                            <input type="submit" value="update" name="update" id="update" style="display: none" class="btn btn-outline-customs">
                        </form>
                        <button class="btn btn-outline-customs" onclick="edit(this);" id="edit">Edit</button>
                    </td>
                </tr>
            <?php }?>
            </tbody>
        </table>
        <form action="<?php echo BASE_URL?>/dashboard/addNewSession" method="post">
            <div class="form-group row">
	            <label id="lbl_session" class="col-form-lebel col-md-2" style="display: none"><b>Session</b></label>
	            <input type="text" class="col-md-6 form-control" name="session_name" id="session_name" style="display: none">
	            <label class="col-md-1" style="visibility:hidden">hidden</label>
	            <input type="submit" class="btn btn-outline-customs col-md-1" style="display: none"  id="add" value="Add">
            </div>
        </form>
        <button class="btn btn-outline-customs" style="display: block" onclick="addNew();" id="add_new">Add New</button>
    </div>


    <div class="modal fade" id="changePassword" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Change Your Password</h5>
                    <button type="button" class="btn btn-outline-customs" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form method="post" action="<?php echo BASE_URL?>/dashboard/changePassword">
                        <div class="Form-group row col-12 col-md-12">
                            <input type="password" class="form-control" placeholder="Current Password"  required="1" aria-describedby="basic-addon2" name="currentPassword">
                        </div>
                        <br>
                        <div class="Form-group row col-12 col-md-12">
                            <input type="password" class="form-control" placeholder="New Password"  required="1" aria-describedby="basic-addon2" name="newPassword">
                        </div>
                        <br>
                        <div class="Form-group row col-12 col-md-12">
                            <input type="password" class="form-control" placeholder="Repeat New Password"  required="1" aria-describedby="basic-addon2" name="confirmPassword">
                        </div>
                        <br>
                        <div class="input-group row col-12 col-md-12">
                            <label class="col-5 col-md-5"></label>
                            <button type="submit" class="btn btn-outline-customs">Save Changed</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    function addNew() {
        document.getElementById('lbl_session').style.display = "block";
        document.getElementById('session_name').style.display = "block";
        document.getElementById('add').style.display = "block";
        document.getElementById('add_new').style.display = "none";
    }

    function edit(edit) {
        var parent = edit.parentNode.parentNode;
        var txt = parent.childNodes[3].childNodes[1];
        var btnUpdate = parent.childNodes[5].childNodes[3];
        var btnEdit = parent.childNodes[5].childNodes[5];
        txt.removeAttribute("disabled");
        btnUpdate.style.display = "block";
        btnEdit.style.display = "none";

    }
</script>