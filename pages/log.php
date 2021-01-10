<link rel="stylesheet" type="text/css" href="css/log.css">
<div class="log-fon"></div>
<div class="log-wrapper d-flex justify-content-center">
    <div class="log-block d-flex ">
        <a href="/?page=index">
            <div class="previos">
                <i class="fas fa-chevron-left" aria-hidden="true"></i>
            </div>
        </a>
        <div class="logo">
            <img data-src="img/logo.png">
        </div>
        <h1>ONE STEP LEFT TO MUSIC</h1>
        <form id="form-auth" class="action-form" method="post" action="javascript:void(0);">
            <div class="row">
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
							<input type="password" required="" class="form-control text" name="password" id="password" placeholder="Enter your Password">
						</div>
					</div>
                </div>
                <div class="col-12 col-pad">
                    <div class="form-but d-flex justify-content-center">
						<button id="log" name="log" class="btn btn-primary btn-lg btn-block login-button">LOGIN</button>
                        <a href=""><p>Forgot password?</p></a>
                        <a href="/?page=register"><p>Registration</p></a>
                        <p id="php-otvet"></p>
					</div>
                </div>
            </div>
        </form>
    </div>
</div>

<script type="text/javascript" src='js/log.js'></script>