<link rel="stylesheet" type="text/css" href="css/log.css">
<div class="log-fon"></div>
<div class="log-wrapper">
    <div class="log-block">
        <div class="logo">
            <img data-src="img/logo.png">
        </div>
        <h1>REGISTRATION</h1>
        <form id="form-auth" class="action-form" method="post" action="javascript:void(0);">
            <div class="row">
                <div class="col-12 col-pad">
                    <div class="form-group">
						<label for="username" class="cols-sm-2 control-label">Your Name</label>
						<div class="input-group">
							<span class="input-group-addon"><i class="fas fa-user" aria-hidden="true"></i></span>
							<input type="text" required="" class="form-control" name="username" id="username" placeholder="Enter your Name">
						</div>
					</div>
                </div>
                <div class="col-12 col-pad">
                    <div class="form-group">
						<label for="email" class="cols-sm-2 control-label">Your Email</label>
						<div class="input-group">
							<span class="input-group-addon"><i class="fas fa-envelope" aria-hidden="true"></i></span>
							<input type="text" required="" class="form-control" name="email" id="email" placeholder="Enter your Email">
						</div>
					</div>
                </div>
                <div class="col-12 col-pad">
                    <div class="form-group">
						<label for="password" class="cols-sm-2 control-label">Password</label>
						<div class="input-group">
							<span class="input-group-addon"><i class="fas fa-lock fa-lg" aria-hidden="true"></i></span>
							<input type="password" required="" class="form-control" name="password" id="password" placeholder="Enter your Password">
						</div>
					</div>
                </div>
                <div class="col-12 col-pad">
                    <div class="form-group">
						<label for="password" class="cols-sm-2 control-label">Confirm Password</label>
						<div class="input-group">
							<span class="input-group-addon"><i class="fas fa-lock fa-lg" aria-hidden="true"></i></span>
							<input type="password" required="" class="form-control" name="confirm" id="confirm" placeholder="Confirm your Password">
						</div>
					</div>
                </div>
                <div class="col-12 col-pad">
                    <div class="form-but">
                        <button id="log" class="btn btn-primary btn-lg btn-block login-button" type="submit">REGISTRATION</button>
                        <p style="color: red;" id="php-otvet"></p>
                        <a href="/?page=log"><p>Already have an account? Sign in!</p></a>
					</div>
                </div>
            </div>
        </form>
    </div>
</div>
<script type="text/javascript" src='js/register.js'></script>