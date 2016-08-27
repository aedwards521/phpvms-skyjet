<h3 class="page-header theme-red">Change Password</h3>
<form action="<?php echo url('/profile');?>" method="post">
	<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
		<input class="mdl-textfield__input" type="password" id="password" name="password1" value="" />
		<label class="mdl-textfield__label">Enter New Password</label>
	</div>
	<br>
	<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
		<input class="mdl-textfield__input" type="password" name="password2" value="" />
		<label class="mdl-textfield__label">Enter New Password Again</label>
	</div>
	<br>
	<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
		<input class="mdl-textfield__input" type="password" name="oldpassword" />
		<label class="mdl-textfield__label">Enter Old Password</label>
	</div>
	<br>
	<div class="text-center">
		<input type="hidden" name="action" value="changepassword" />
		<input class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect" type="submit" name="submit" value="Save Password" />
	</div>
</form>