<?php 
    require_once '../config/db.php';
	require_once '../library/check.php'; 
	require_once '../action/user-info.php'; 
?>
<div class="info-head">
    <h1>Bio Graph</h1>
</div>
<div class="info-boddy">
	<div class="column">
		<div class="bio-row">
			<p>First Name: <?=$usrName?> </p>
		</div>
		<div class="bio-row">
			<p>Country: <?=$usrCountry?> </p>
		</div>
		<div class="bio-row">
			<p>Phone: <?=$usrPhone?> </p>
		</div>
		<div class="bio-row">
			<p>Skype: <?=$usrSkype?> </p>
		</div>
	</div>
	<div class="column">
	    <div class="bio-row">
		    <p>Last Name: <?=$usrLast?> </p>
		</div>
		<div class="bio-row">
			<p>Birthday: 13 July 1998 </p>
		</div>
		<div class="bio-row">
			<p>Email: <?=$usrMail?> </p>
		</div>
		<div class="bio-row">
			<p>Instagram: <?=$usrInstagram?> </p>
		</div>
	</div>
</div>
<div class="info-footer">
    <p>You can change personal information, such as your date of birth and gender, as well as your email address and phone number.</p>
</div>