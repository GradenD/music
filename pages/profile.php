<?php require_once 'action/user-info.php'; ?>
<link rel="stylesheet" type="text/css" href="css/profile.css">
<div class="container">
    <div class="user-form">
        <div id="config-user" class="config-user">
            <div class="row user-mb">
                <div class="col-12">
                    <div class="user-head">
                        <img data-src="img/profile/avatar.jpg">
                        <h1>
                            <?=$usrName?>
                        </h1>
                    </div>
                    <div class="user-body">
						<div class="block-config">
							<div id="pr" class="param" formaction="/action/profile-action.php">
								<p><i class="fas fa-user" aria-hidden="true"></i> Profile</p>
							</div>
						</div>
						<div class="block-config">
							<div id="ed-pr" class="param" formaction="/action/edit-profile.php">
								<p><i class="fas fa-edit" aria-hidden="true"></i> Edit profile</p>
							</div>
						</div>
						<div class="block-config">
							<div id="password" class="param" formaction="/action/edit-password.php">
								<p><i class="fas fa-pencil-alt" aria-hidden="true"></i> Change password</p>
							</div>
						</div>
						<div class="block-config">
							<a href="library/logout.php">
								<div class="param" formaction="/action/logout.php">
									<p><i class="fas fa-door-open" aria-hidden="true"></i> Sign out</p>
								</div>
							</a>
						</div>
					</div>
                </div>
            </div>
        </div>
        <div id="info-user" class="info-user"></div> 
    </div>
</div>
<script type="text/javascript" src='js/profile.js'></script>