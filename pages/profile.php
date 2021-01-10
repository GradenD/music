<?php 
	require_once 'action/user-info.php'; 
?>
<link rel="stylesheet" type="text/css" href="css/profile.css">
<div class="container">
    <div class="user-form d-flex justify-content-between">
        <div id="config-user" class="config-user d-flex">
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
        <div id="info-user" class="info-user d-flex justify-content-between"></div> 
	</div>
	<div class="music-user d-flex justify-content-between">
		<div id="music-action" class="music-playlist">
			<p id="add-otevet"></p>
		</div>
		<div class="music-param">
			<div class="param-column d-flex">
				<div class="param-head">
					<h1>MY ALBUMS</h1>
				</div>
				<div id="albums" class="param-body d-flex">
					<div class="albums d-flex justify-content-start">
						<div class="albums-img">
							<img data-src="img/albums/all-we.jpg">
						</div>
						<div class="albums-title d-flex justify-content-between">
							<h1>All We Know Of Heaven, All We Need Of Hell<br>by PVRIS</h1>
							<p>2020-12-20</p>
						</div>
					</div>
				</div>
			</div>
			<div class="param-column d-flex">
				<div class="param-head">
					<h1>AUDIO RECORDINGS</h1>
				</div>
				<div id="records" class="param-body d-flex">
					<div id="sounds-all" class="recordings" formaction="/action/pr-all-music.php">
						<p><i class="fas fa-music" aria-hidden="true"></i> All</p>
					</div>
					<div id="popular" class="recordings" formaction="/action/pr-popular-music.php">
						<p><i class="fas fa-fire" aria-hidden="true"></i> Popularity</p>
					</div>
					<div class="recordings" formaction="/action/pr-date-music.php">
						<p><i class="fas fa-calendar-alt" aria-hidden="true"></i> By date added</p>
					</div>
					<div class="recordings" formaction="/action/pr-name-music.php">
						<p><i class="fas fa-signature" aria-hidden="true"></i> By name</p>
					</div>
					<div class="recordings" formaction="/action/pr-performer-music.php">
						<p><i class="fas fa-theater-masks" aria-hidden="true"></i> By performer</p>
					</div>
				</div>
			</div>
			<div class="param-column d-flex">
				<div class="param-head">
					<h1>LOADING</h1>
				</div>
				<div id="load" class="param-body d-flex">
					<div id="sounds-load" class="recordings" formaction="/action/download-sounds.php">
						<p><i class="fas fa-file-download"></i> Loading sounds</p>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<script type="text/javascript" src='js/jplayer.playlist.min.pr.js'></script>
<script type="text/javascript" src='js/profile.js'></script>