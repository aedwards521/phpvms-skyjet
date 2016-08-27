<div class="demo-layout mdl-layout mdl-js-layout mdl-layout--fixed-drawer mdl-layout--fixed-header">
	<header class="demo-header mdl-layout__header mdl-color--grey-100 mdl-color-text--grey-600">
		<div class="mdl-layout__header-row">
			<span class="mdl-layout-title"><h6><div id="ct"></div></h6></span>
			<div class="mdl-layout-spacer"></div>
			<button class="mdl-button mdl-js-button mdl-js-ripple-effect mdl-button--icon" id="hdrbtn">
				<i class="material-icons">more_vert</i>
			</button>
			<ul class="mdl-menu mdl-js-menu mdl-js-ripple-effect mdl-menu--bottom-right" for="hdrbtn">
				<?php
				if(Auth::LoggedIn()) {
					if(PilotGroups::group_has_perm(Auth::$usergroups, ACCESS_ADMIN)) {
						echo '<a href="'.fileurl('/admin').'"><li class="mdl-menu__item"><i class="fa fa-lock"></i> Admin Center</li></a>';
						?>
						<a href="http://mail.flyskyjetvirtual.com/"><li class="mdl-menu__item"><i class="fa fa-envelope"></i> Email</li></a>
						<?php
						if(count(PilotData::GetPendingPilots()) > 0) {
							?>
							<a href="<?php echo SITE_URL ?>/admin/index.php/pilotadmin/pendingpilots"><li class="mdl-menu__item"><span class="theme-red">Pending Pilots (<?php echo count(PilotData::GetPendingPilots())?>)</span></li></a>
							<?php
						}
					}
				}
				?>
				<a href="<?php echo url('/pilots'); ?>"><li class="mdl-menu__item"><i class="fa fa-user"></i> Pilot Roster</li></a>
				<a href="<?php echo url('/admin'); ?>"><li class="mdl-menu__item"><i class="fa fa-users"></i> Board of Directors</li></a>
				<li class="mdl-menu__item">Legal information</li>
			</ul>
		</div>
	</header>
	<div class="demo-drawer mdl-layout__drawer mdl-color--blue-grey-900 mdl-color-text--blue-grey-50">
		<header class="demo-drawer-header">
			<div class="text-center">
				<br>
				<img src="<?php echo PilotData::getPilotAvatar(Auth::$userinfo->pilotid); ?>" class="dash-photo img-circle">
				<div class="demo-avatar-dropdown dash-actions">
					<button id="accbtn" class="mdl-button mdl-js-button mdl-js-ripple-effect mdl-button--icon">
						<i class="material-icons" role="presentation">arrow_drop_down</i>
						<span class="visuallyhidden">Actions</span>
					</button>
					<ul class="mdl-menu mdl-menu--bottom-left mdl-js-menu mdl-js-ripple-effect" for="accbtn">
						<a href="<?php echo url('/profile'); ?>"><li class="mdl-menu__item"><i class="fa fa-user"></i> My Profile</li></a>
						<a href="<?php echo url('/pireps/mine');?>"><li class="mdl-menu__item"><i class="fa fa-book"></i> Logbook</li></a>
						<a href="<?php echo url('/profile/editprofile'); ?>"><li class="mdl-menu__item"><i class="fa fa-gear"></i> Settings</li></a>
						<a href="<?php echo url('/logout'); ?>"><li class="mdl-menu__item"><i class="fa fa-sign-out"></i> Sign Out</li></a>
					</ul>
				</div>
			</div>
		</header>
		<nav class="demo-navigation mdl-navigation mdl-color--blue-grey-800">
			<a class="mdl-navigation__link whitelink" href="/"><i class="fa fa-home"></i> Home</a>
			<a class="mdl-navigation__link whitelink" href="<?php echo SITE_URL; ?>/?resources"><i class="fa fa-files-o"></i> Resources</a>
			<a class="mdl-navigation__link whitelink" href="<?php echo url('/schedules/');?>"><i class="fa fa-calendar"></i> Schedules</a>
			<a class="mdl-navigation__link whitelink" href="<?php echo SITE_URL; ?>/?communication"><i class="fa fa-microphone"></i> Communication</a>
			<br>
		</nav>
		<div class="text-center dash-copyright">
			<p>Copyright &copy; <?php echo date("Y"); ?> SkyJet Airlines</p>
			<p>Crew Center by <a href="https://albertlua.com/" class="greylink">Albert Lua</a></p>
			<p>Powered by <a href="http://phpvms.net/" class="greylink">phpVMS</a></p>
		</div>
	</div>