<?php 
    require_once '../config/db.php';
	require_once '../library/check.php'; 
	require_once '../action/user-info.php'; 
?>
<div class="info-head">
    <h1>Edit profile</h1>
</div>
<form id="form-auth" class="action-form" method="post" action="javascript:void(0);">
    <div class="info-boddy">
	    <div class="column">
            <div class="bio-row bio-input">
                <div class="form-group">
				    <label for="username" class="cols-sm-2 control-label">Your Name</label>
				    <div class="input-group">
					    <span class="input-group-addon"><i class="fas fa-user" aria-hidden="true"></i></span>
					    <input type="text" required="" class="form-control" value="<?=$usrName?>" name="username" id="username" placeholder="Enter your Name">
				    </div>
			    </div>
            </div>
            <div class="bio-row bio-input">
                <div class="form-group">
                    <label for="date" class="cols-sm-2 control-label">Your Last Name</label>
				    <div class="input-group">
					    <span class="input-group-addon"><i class="fas fa-user" aria-hidden="true"></i></span>
					    <input type="text" required="" class="form-control" value="<?=$usrLast?>" name="LastName" id="LastName" placeholder="Enter your Last Name">
				    </div>
			    </div>
            </div>
            <div class="bio-row bio-input">
                <div class="form-group">
                <label for="date" class="cols-sm-2 control-label">Your Birthday</label>
                    <div class="input-group" id="date">
                        <span class="input-group-addon">
                            <i class="fas fa-calendar-alt"></i>
                        </span>
                        <input type="text" class="form-control" />
                     </div>
			    </div>
            </div>
            <div class="form-group bio-input">
				<label for="email" class="cols-sm-2 control-label">Your Email</label>
				<div class="input-group">
					<span class="input-group-addon"><i class="fas fa-envelope" aria-hidden="true"></i></span>
					<input type="text" required="" class="form-control" value="<?=$usrMail?>" name="email" id="email" placeholder="Enter your Email">
				</div>
			</div>
        </div>
        <div class="column">
            <div class="bio-row bio-input">
                <div class="form-group">
				    <label for="phone" class="cols-sm-2 control-label">Phone</label>
				    <div class="input-group">
					    <span class="input-group-addon"><i class="fas fa-mobile" aria-hidden="true"></i></span>
					    <input type="text" required="" class="form-control" value="<?=$usrPhone?>" name="phone" id="phone" placeholder="Enter your Phone">
				    </div>
			    </div>
            </div>
            <div class="form-group bio-input">
				<label for="country" class="cols-sm-2 control-label">Your Country</label>
				<div class="input-group">
					<span class="input-group-addon"><i class="fas fa-globe-americas"></i></span>
					<input type="text" required="" class="form-control" value="<?=$usrCountry?>" name="country" id="country" placeholder="Enter your Country">
				</div>
            </div>
            <div class="form-group bio-input">
				<label for="skype" class="cols-sm-2 control-label">Your Skype</label>
				<div class="input-group">
					<span class="input-group-addon"><i class="fab fa-skype" aria-hidden="true"></i></span>
					<input type="text" required="" class="form-control" value="<?=$usrSkype?>" name="skype" id="skype" placeholder="Enter your Skype">
				</div>
            </div>
            <div class="form-group bio-input">
				<label for="instagram" class="cols-sm-2 control-label">Your Instagram</label>
				<div class="input-group">
					<span class="input-group-addon"><i class="fab fa-instagram"></i></span>
					<input type="text" required="" class="form-control" value="<?=$usrInstagram?>" name="instagram" id="instagram" placeholder="Enter your Instagram">
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
<script type="text/javascript" src='js/edit-profile.js'></script>	
<script type="text/javascript" src='js/bootstrap-datetimepicker.min.js'></script>
<script>
    $(function () {
         $('#date').datetimepicker({
	        locale: 'ru',
		    stepping:10,
		    format: 'DD.MM.YYYY',
		    defaultDate: moment('01.11.2017').format('DD.MM.YYYY'),
		    daysOfWeekDisabled:[0,6]
	    });
    });
</script>