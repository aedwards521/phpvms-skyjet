<div class="container">
	<div class="text-center">
		<p><a href="/"><img src="<?php echo SITE_URL; ?>/lib/skins/skacrewcenter/img/logoheader.png" class="login-photo"></a></p>
		<div class="mdl-layout__content">
			<form action="<?php echo url('/login/forgotpassword');?>" method="post">
				<div class="mdl-card mdl-shadow--6dp login-form">
					<div class="mdl-card__supporting-text">
						<p>A new password will be sent to the email below if it is within our database records.</p>
						<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
							<input class="mdl-textfield__input" type="text" name="email">
							<label class="mdl-textfield__label" for="name">Enter email address</label>
						</div>
						<input type="hidden" name="action" value="resetpass">
						<input type="submit" name="submit" value="Request New Password" class="mdl-button mdl-button--colored mdl-js-button mdl-js-ripple-effect theme-gold">
					</div>
				</div>
			</form>
		</div>
	</div>
</div>