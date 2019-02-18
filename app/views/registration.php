<div class="content">
	<header>
	<br>
		<h1 class="cntr">Registare as A new Member</h3>
	<br>
	</header>
	<form role="form" method="POST" action="<?php echo BASE_URL?>/Register/registerNewMember">
        <div class="form-group row">
            <?php
            if(!empty($data[0])){
                foreach ($data[0] as $key){
            ?>
                <label class="col-sm-2 text-danger "></label>
                <label class="col-sm-10  text-danger "><?Php echo $key ?></label>
            <?php
                }
            }
            ?>
        </div>
		<div class="form-group row">
		    <label for="firstName" class="col-sm-2 col-form-label">First Name<span class="text-danger"> *</span></label>
		    <div class="col-sm-10">
		    	<input type="text" class="form-control" id="firstName" placeholder="First Name" name="firstName" >
		    </div>
		</div>
		<div class="form-group row">
		    <label for="middleName" class="col-sm-2 col-form-label">Middle Name</label>
		    <div class="col-sm-10">
		    	<input type="text" class="form-control" id="middleName" placeholder="Middle Name" name="middleName">
		    </div>
		</div>
		<div class="form-group row">
		    <label for="lastName" class="col-sm-2 col-form-label">Last Name</label>
		    <div class="col-sm-10">
		    	<input type="text" class="form-control" id="lastName" placeholder="Last Name" name="lastName">
		    </div>
		</div>
		<div class="form-group row">
		    <label for="studentId" class="col-sm-2 col-form-label">Student ID<span class="text-danger"> *</span></label>
		    <div class="col-sm-10">
		    	<input type="text" class="form-control" id="studentId" placeholder="Student ID" name="studentId">
		    </div>
		</div>
		<div class="form-group row">
		    <label for="mobile" class="col-sm-2 col-form-label">Mobile</label>
		    <div class="col-sm-10">
		    	<input type="number" class="form-control" id="mobile" placeholder="Mobile" name="mobile">
		    </div>
		</div>
		<div class="form-group row">
		    <label for="username" class="col-sm-2 col-form-label">Usermame<span class="text-danger"> *</span></label>
		    <div class="col-sm-10">
		    	<input type="text" class="form-control" id="username" placeholder="Username" name="userName">
		    </div>
		</div>
		<div class="form-group row">
		    <label for="email" class="col-sm-2 col-form-label">Email</label>
		    <div class="col-sm-10">
		    	<input type="email" class="form-control" id="email" placeholder="Email" name="email">
		    </div>
		</div>
		<div class="form-group row">
		    <label for="inputPassword" class="col-sm-2 col-form-label">Password<span class="text-danger"> *</span></label>
		    <div class="col-sm-10">
		    	<input type="password" class="form-control" id="inputPassword" placeholder="Password" name="password">
		    </div>
		</div>
		<div class="form-group row">
		    <label for="confirmPassword" class="col-sm-2 col-form-label">Confirm Password<span class="text-danger"> *</span></label>
		    <div class="col-sm-10">
		    	<input type="password" class="form-control" id="confirmPassword" placeholder="Confirm Password" name="confirmPassword">
		    </div>
		</div>
		<div class="form-group row">
			<label class="col-sm-2 col-form-label">Year-Term<span class="text-danger"> *</span></label>
			<div class="col-sm-10">
				<select class="form-control" name="ddlYearTerm" id="singleselect1">
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
		</div>
		<div class="form-group row">
			<label class="col-sm-2 col-form-label">Session<span class="text-danger"> *</span></label>
			<div class="col-sm-10">
                <select class="form-control" name="ddlSession" id="singleselect2">
                    <option value="0">select Session</option>
                    <?php
                    foreach ($data[2] as $key => $value){
                        ?>
                        <option value="<?php echo $value['id']?>"><?php echo $value['sessionNumber'] ?></option>
                        <?php
                    }
                    ?>
                </select>
			</div>
		</div>
		<div>
			<center>
				<button type="submit" name="register" class="btn btn-outline-customs">Register</button>
			</center>
		</div>
	</form>
</div>
