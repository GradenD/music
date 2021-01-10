<?php 
    require_once '../config/db.php';
	require_once '../library/check.php'; 
	require_once '../action/user-info.php'; 
?>
<div class="info-head">
    <h1>Edit Password</h1>
</div>
<form id="form-auth" class="action-form" method="post" action="javascript:void(0);">
    <div class="info-boddy d-flex justify-content-between">
        <div class="column">
            <div class="bio-row d-flex bio-input">
                <div class="form-group">
				    <label for="password" class="cols-sm-2 control-label">New Password</label>
				    <div class="input-group">
					    <span class="input-group-addon"><i class="fas fa-lock fa-lg" aria-hidden="true"></i></span>
					    <input type="password" required="" class="form-control" name="new-password" id="new-password" placeholder="Enter Your New Password">
				    </div>
                </div>
            </div>
            <div class="bio-row d-flex bio-input">
                <div class="form-group">
				    <label for="password" class="cols-sm-2 control-label">Confirm New Password</label>
				    <div class="input-group">
					    <span class="input-group-addon"><i class="fas fa-lock fa-lg" aria-hidden="true"></i></span>
					    <input type="password" required="" class="form-control" name="confirm" id="confirm" placeholder="Confirm Your New Password">
				    </div>
                </div>
            </div>
        </div>
        <div class="column">
            <div class="bio-row d-flex bio-input">
                <div class="form-group">
				    <label for="new-password" class="cols-sm-2 control-label">Password</label>
				    <div class="input-group">
					    <span class="input-group-addon"><i class="fas fa-lock fa-lg" aria-hidden="true"></i></span>
					    <input type="password" required="" class="form-control" name="password" id="password" placeholder="Your Password">
				    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="info-footer">
        <p style="color: red;" id="php-otvet"></p>
	    <button id="save" class="btn-send" type="submit"> 
		    <i class="fab fa-telegram-plane" aria-hidden="true"></i> Save changes
	    </button>
    </div>
</form>
<div class="info-footer"></div>
<script type="text/javascript" src='js/edit-password.js'></script>