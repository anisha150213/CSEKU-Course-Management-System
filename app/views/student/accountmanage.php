<div class="content">
    <header>
        <h1 class="cntr">Manage Your Account</h1>
    </header>
    <br>
    <?php
    if(!empty($data[2])){
        ?>
        <div class="form-group row">
            <label class="col-sm-4 col-form-label"></label>
            <div class="col-sm-7">
                <label class="text-info" ><?php echo $data[2];?></label>
            </div>
        </div>
        <?php
    }
    ?>
    <div class="cntr">
        <?php if($data['isOpen'][0]['is_open'] == '1'){?>
        <span class="text-danger">Course Registration open now. Starting Date : <?php echo $data['isOpen'][0]['start_date']?> Ending Date : <?php echo $data['isOpen'][0]['end_date']?></span>
    <?php }?>
    </div>
    <br>
    <div class="form-group row">
        <label for="inputPassword" class="col-sm-4 col-form-label">User Name</label>
        <div class="col-sm-7">
            <label class="form-control" id="inputPassword" ><?php echo $data[0]['user_name'];?></label>
        </div>
    </div>
    <div class="form-group row">
        <label for="inputPassword" class="col-sm-4 col-form-label">First Name</label>
        <div class="col-sm-7">
            <label class="form-control" id="inputPassword" ><?php echo $data[0]['first_name'];?></label>
        </div>
    </div>
    <div class="form-group row">
        <label for="inputPassword" class="col-sm-4 col-form-label">Middle Name</label>
        <div class="col-sm-7">
            <label class="form-control" id="inputPassword" ><?php echo $data[0]['middle_name'];?></label>
        </div>
    </div>
    <div class="form-group row">
        <label for="inputPassword" class="col-sm-4 col-form-label">Last Name</label>
        <div class="col-sm-7">
            <label class="form-control" id="inputPassword" ><?php echo $data[0]['last_name'];?></label>
        </div>
    </div>
    <div class="form-group row">
        <label for="inputPassword" class="col-sm-4 col-form-label">Student ID</label>
        <div class="col-sm-7">
            <label class="form-control" id="inputPassword" ><?php echo $data[0]['student_id'];?></label>
        </div>
    </div>
    <div class="form-group row">
        <label for="inputPassword" class="col-sm-4 col-form-label">Session</label>
        <div class="col-sm-7">
            <label class="form-control" id="inputPassword" ><?php echo $data[0]['sessionNumber'];?></label>
        </div>
    </div>
    <div class="form-group row">
        <label for="inputPassword" class="col-sm-4 col-form-label">Year - Term</label>
        <div class="col-sm-6">
            <label class="form-control" id="inputPassword" ><?php echo $data[0]['year']." - ".$data[0]['term'];?></label>
        </div>
        <div class="col-sm-1">
            <label class="form-text" ><a class="button" data-toggle="modal" href="#changeYearTerm">Edit!!</a></label>
            <!-- Modal -->
            <div class="modal fade" id="changeYearTerm" tabindex="-1" role="dialog" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">Change Year-Term</h5>
                            <button type="button" class="btn btn-outline-customs" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                        <form method="post" action="<?php echo BASE_URL?>/AccountManage/changeYearTerm">
                            <div class="input-group row col-12 col-md-12">
                                <input type="password" class="form-control" placeholder="Current Password" name="currentPassword_4"  required="1" aria-describedby="basic-addon2">
                            </div>
                            <br>
                            <div class="input-group row col-12 col-md-12">
                                <select class="form-control" name="ddlYearTerm">
      					            <option value="0">select Year-term</option>
                                    <?php
                                    foreach ($data[1] as $key => $value){
                                        ?>
                                        <option value="<?php echo $value['id']?>"><?php echo $value['year']." year ".$value['term']." term" ?></option>
                                        <?php
                                    }
                                    ?>
      				            </select>
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
    </div>
    <div class="form-group row">
        <label for="inputPassword" class="col-sm-4 col-form-label">Email</label>
        <div class="col-sm-6">
            <label class="form-control" id="inputPassword" ><?php echo $data[0]['email'];?></label>
        </div>
        <div class="col-sm-1">
            <label class="form-text" ><a class="button" data-toggle="modal" href="#changeEmail">Edit!!</a></label>
            <!-- Modal -->
            <div class="modal fade" id="changeEmail" tabindex="-1" role="dialog" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">Change Email Address</h5>
                            <button type="button" class="btn btn-outline-customs" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <form method="post" action="<?php echo BASE_URL?>/AccountManage/changeEmail">
                                <div class="input-group row col-12 col-md-12">
                                    <input type="password" class="form-control" placeholder="Current Password" name="currentPassword_3"  required="1" aria-describedby="basic-addon2">
                                </div>
                                <br>
                                <div class="input-group row col-12 col-md-12">
                                    <input type="email" class="form-control" placeholder="New Email" name="newEmail" required="1" aria-describedby="basic-addon2">
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
    </div>
    <div class="form-group row">
        <label for="inputPassword" class="col-sm-4 col-form-label">Mobile</label>
        <div class="col-sm-6">
            <label class="form-control" id="inputPassword" ><?php echo $data[0]['mobile'];?></label>
        </div>
        <div class="col-sm-1">
            <label class="form-text" ><a class="button" data-toggle="modal" href="#changeMobile">Edit!!</a></label>
            <!-- Modal -->
            <div class="modal fade" id="changeMobile" tabindex="-1" role="dialog" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">Change Mobile Number</h5>
                            <button type="button" class="btn btn-outline-customs" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <form method="post" action="<?php echo BASE_URL?>/AccountManage/changeMobile">
                                <div class="input-group row col-12 col-md-12">
                                    <input type="password" class="form-control" placeholder="Current Password" name="currentPassword_2"  required="1" aria-describedby="basic-addon2">
                                </div>
                                <br>
                                <div class="input-group row col-12 col-md-12">
                                    <input type="text" class="form-control" placeholder="New Mobile" name="newMobile"  required="1" aria-describedby="basic-addon2">
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
    </div>
    <div class="form-group row">
        <label for="inputPassword" class="col-sm-4 col-form-label"></label>
        <div class="col-sm-6">
            <p>Do you wanna change your password? <a class="button" data-toggle="modal" href="#changePassword">Yes!!</a></p>
            <!-- Modal -->
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
                            <form method="post" action="<?php echo BASE_URL?>/AccountManage/changePassword">
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
    </div>
</div> <!--content-->
