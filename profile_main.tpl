<h3 class="page-header theme-red">Hello, <?php echo $pilot->firstname . ' ' . $pilot->lastname; ?>.</h3>
<div class="row">
	<div class="col-md-4">
		<div class="mdl-card card mdl-shadow--2dp">
			<div class="card-grey text-center">
				<br><br>
				<img src="<?php echo PilotData::getPilotAvatar($pilotcode); ?>" class="img-circle profile-photo">
				<br><br><br>
			</div>
			<div class="mdl-card__supporting-text">
				<br>
				<p><?php echo $pilot->firstname . ' ' . $pilot->lastname; ?> - <?php echo $pilotcode; ?></p>
				<p><?php echo $pilot->rank; ?></p>
				<br>
			</div>
		</div>
		<div class="card card-grey mdl-card mdl-shadow--2dp">
			<div class="mdl-card__actions mdl-card--border theme-white">
				Account Actions
			</div>
			<div class="mdl-card__title mdl-card--expand">
				<ul>
					<li><a href="<?php echo url('/pireps/mine');?>" class="whitelink silverhover">Logbook</a></li>
					<li><a href="<?php echo url('/profile/editprofile'); ?>" class="whitelink silverhover">Settings</a></li>
					<li><a href="<?php echo url('/profile/changepassword'); ?>" class="whitelink silverhover">Change Password</a></li>
				</ul>
			</div>
			
		</div>

		<div class="card card-rank mdl-card mdl-shadow--2dp">
			<div class="mdl-card__supporting-text">
				<p>You have <?php echo $pilot->totalhours; ?> out of <?php echo $nextrank->minhours; ?> required hours.</p>
			</div>
			<div class="mdl-card__title mdl-card--expand">
				<div id="p3" class="mdl-progress mdl-js-progress"></div>
				<script>
					document.querySelector('#p3').addEventListener('mdl-componentupgraded', function() {
						this.MaterialProgress.setProgress(<?php echo $pilot->totalhours; ?>);
						this.MaterialProgress.setBuffer(<?php echo $nextrank->minhours; ?>);
					});
				</script>
			</div>
			<div class="mdl-card__actions">
				<span class="card__footer">Next rank: <?php echo $nextrank->rank?></span>
			</div>
		</div>
	</div>
	<div class="col-md-8">
		<div class="row-fluid">
			<div class="col-md-6">
				<div class="card mdl-card mdl-shadow--2dp" style="background: url('<?php echo SITE_URL; ?>/lib/skins/skacrewcenter/img/airports/<?php echo $userinfo->hub; ?>.jpg') center / cover;">
					<div class="mdl-card__title mdl-card--expand"></div>
					<div class="mdl-card__actions">
						<span class="card__footer">My Hub: <?php echo $userinfo->hub; ?></span>
					</div>
				</div>
			</div>
			<div class="col-md-3">
				<div class="card card-red mdl-card mdl-shadow--2dp">
					<div class="mdl-card__title mdl-card--expand">
						<span class="card-value"><?php echo $pilot->totalflights; ?></span>
					</div>
					<div class="mdl-card__actions">
						<span class="card__footer">Total Flights</span>
					</div>
				</div>
			</div>
			<div class="col-md-3">
				<div class="card card-gold mdl-card mdl-shadow--2dp">
					<div class="mdl-card__title mdl-card--expand">
						<span class="card-value"><?php echo $pilot->totalhours; ?></span>
					</div>
					<div class="mdl-card__actions">
						<span class="card__footer">Total Hours</span>
					</div>
				</div>
			</div>
		</div>
		<div class="row-fluid">
			<div class="col-md-12">
				<div class="mdl-card card mdl-shadow--2dp">
					<div class="profile-awards">
						<h4 class="theme-white" style="padding-left:10px"> My Awards</h4>
					</div>
					<div class="mdl-card__supporting-text">
						<?php
						if(is_array($allawards)) {
						?>
							<?php
							foreach($allawards as $award) {
								?>
									<hr><img src="<?php echo $award->image?>" alt="<?php echo $award->descrip?>" />
								<?php
							?>
								<?php echo $award->name ?><br><?php echo $award->descrip?><hr>
							<?php } ?>
						<?php
						}
						else {
							echo '<div class="alert alert-danger nocorner">No awards!</div>';
						}
						?>
					</div>
				</div>
			</div>
		</div>
		<div class="row-fluid">
			<div class="col-md-12">
				<a href="<?php echo url('/profile/badge'); ?>">
					<div class="card mdl-card mdl-shadow--2dp" style="background: url('<?php echo SITE_URL; ?>/lib/signatures/<?php echo $pilotcode; ?>.png') center / cover;">
					</div>
				</a>
			</div>
		</div>
	</div>
</div>