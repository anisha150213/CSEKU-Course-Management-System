<div class="content">
	<br>
	<form class="form-horizontal" role="form" method="POST" action="<?php echo BASE_URL?>/Login/loginAuth">
        <div class="row">
            <div class="col-md-3"></div>
            <div class="col-md-6">
                <span class="text-success"><?php
                    if(isset($success)){
                        echo $success;
                    }
                    ?></span>
            </div>
        </div>
        <div class="row">
            <div class="col-md-3"></div>
            <div class="col-md-6">
                <h2>Please Login</h2>
                <hr>
            </div>
        </div>
        <div class="row">
            <div class="col-md-3"></div>
            <div class="col-md-6">
                <div class="input-group">
				 	<span class="input-group-addon" id="basic-addon1">@</span>
				 	<input type="text" class="form-control" name="username" placeholder="Username" aria-label="Username" aria-describedby="basic-addon1" required>
				</div>
            </div>
            <div class="col-md-3">
                <div class="form-control-feedback">
                    <span class="text-danger align-middle">

                    </span>
                </div>
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-md-3"></div>
            <div class="col-md-6">
                <div class="input-group">
				 	<span class="input-group-addon" id="basic-addon1">**</span>
				 	<input type="password" class="form-control" name="password" placeholder="Password" aria-label="password" aria-describedby="basic-addon1" required>
				</div>
            </div>
            <div class="col-md-3">
                <div class="form-control-feedback">
                    <span class="text-danger align-middle">
                    <!-- Put password error message here -->    
                    </span>
                </div>
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-md-3"></div>
            <div class="col-md-3">
                <button type="submit" name="btn_login" class="btn btn-outline-customs">Login</button>
            </div>
            <div class="col-md-3">
            	<p>New to this site. Register <a href="<?php echo BASE_URL?>/Register/Index">here!!</a></p>
            </div>
        </div>
    </form>
</div>