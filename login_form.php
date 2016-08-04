<div class="container">
	<div class="text-center">
		<p><a href="/"><img src="<?php echo SITE_URL; ?>/lib/skins/skacrewcenter/img/logoheader.png" class="login-photo"></a></p>
		<?php
		if(isset($message)) {
			echo '<br><div class="alert alert-danger nocorner">'.$message.'</div>';
		}
		?>
		<div class="mdl-layout__content">
			<form name="loginform" action="<?php echo url('/login');?>" method="post">
				<div class="mdl-card mdl-shadow--6dp login-form">
					<div class="mdl-card__supporting-text">
						<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
							<input class="mdl-textfield__input" type="text" name="email" value="" <?php if(isset($message)) { ?> required <?php } ?>>
							<label class="mdl-textfield__label" for="name">Username</label>
						</div>
						<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
							<input class="mdl-textfield__input" type="password" name="password" value="" <?php if(isset($message)) { ?> required <?php } ?>>
							<label class="mdl-textfield__label" for="password">Password</label>
						</div>
						<input type="hidden" name="redir" value="index.php/profile">
						<input type="hidden" name="action" value="login">
					</div>
					<a href="<?php echo url('Login/forgotpassword'); ?>" class="goldlink">Forgot Password</a>
					<br>
					<div class="mdl-card__actions mdl-card--border">
						<input type="submit" name="submit" value="Log In" class="mdl-button mdl-button--colored mdl-js-button mdl-js-ripple-effect theme-gold">
					</div>
				</div>
			</form>
		</div>
	</div>
</div>