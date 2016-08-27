<h3 class="page-header theme-red">Profile Settings</h3>
<form action="<?php echo url('/profile');?>" method="post" enctype="multipart/form-data">
	<div class="row">
		<div class="col-md-6">
			<p class="theme-gold"><?php echo $userinfo->firstname . ' ' . $userinfo->lastname;?> | <?php echo $userinfo->code?></p>
			<p class="help-block">To change your name or airline, please contact the Director of Human Resources.</p>
			<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
				<input class="mdl-textfield__input" type="email" name="email" value="<?php echo $userinfo->email;?>" required>
				<label class="mdl-textfield__label">Email</label>
			</div>
			<br>
			<label class="theme-red">Location</label>
			<select name="location" class="form-control nocorner">
			<?php
			foreach($countries as $countryCode=>$countryName)
			{
				if($pilot->location == $countryCode)
					$sel = 'selected="selected"';
				else	
					$sel = '';
				
				echo '<option value="'.$countryCode.'" '.$sel.'>'.$countryName.'</option>';
			}
			?>
			</select>
			<?php
				if(isset($location_error) &&  $location_error == true)
					echo '<div class="alert alert-danger nocorner">Please select a location.</div>';
			?>
			<br>
			<label class="theme-red">Signature Design</label>
			<select name="bgimage" class="form-control">
			<?php
			foreach($bgimages as $image)
			{
				if($pilot->bgimage == $image)
					$sel = 'selected="selected"';
				else	
					$sel = '';
				
				echo '<option value="'.$image.'" '.$sel.'>'.$image.'</option>';
			}
			?>
			</select>
		</div>
		<div class="col-md-6">
			<div class="mdl-card card mdl-shadow--2dp">
				<div class="card-grey text-center">
					<br>
					<img src="<?php echo PilotData::getPilotAvatar($pilotcode); ?>" class="img-circle card-image text-center">
					<br><br>
				</div>
				<div class="mdl-card__supporting-text">
					<br>
					<input type="hidden" name="MAX_FILE_SIZE" value="<?php echo Config::Get('AVATAR_FILE_SIZE');?>" />
					<input type="file" name="avatar" class="form-control nocorner"> 
					<p>Your image will be resized to <?php echo Config::Get('AVATAR_MAX_HEIGHT').'x'.Config::Get('AVATAR_MAX_WIDTH');?>px</p>
					<br>
				</div>
			</div>
		</div>
	</div>
	<hr>
	<div class="text-center">
		<input type="hidden" name="action" value="saveprofile" />
		<input type="submit" name="submit" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect" value="Save Changes" />
	</div>
	<br><br>
</form>