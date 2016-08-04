<?php
error_reporting(0);
ini_set('display_errors', 0);
?>
<h3 class="page-header theme-red">SkyJet Virtual Airlines Dashboard</h3>
<div class="row">
	<div class="col-md-4">
		<div class="mdl-card card mdl-shadow--2dp card-content">
			<div class="mdl-card__title card card-header">
				<h5 class="theme-white">News</h5>
			</div>
			<div class="mdl-card__supporting-text card card-content">
				<div class="card-text">
					<?php SimpleNews::NewsList(10); ?>
				</div>
			</div>
		</div>
	</div>
	<div class="col-md-4">
		<div class="mdl-card card mdl-shadow--2dp card-content">
			<div class="mdl-card__title card card-header">
				<h5 class="theme-white">Latest Flights</h5>
			</div>
			<div class="mdl-card__supporting-text card card-content">
				<div class="card-text">
					<?php MainController::Run('PIREPS', 'RecentFrontPage', 5); ?>
				</div>
			</div>
		</div>
	</div>
	<div class="col-md-4">
		<div class="mdl-card card mdl-shadow--2dp card-content">
			<div class="mdl-card__title card card-header">
				<h5 class="theme-white">Newest Pilots</h5>
			</div>
			<div class="mdl-card__supporting-text card card-content">
				<div class="card-text">
					<?php MainController::Run('Pilots', 'RecentFrontPage', 5); ?>
				</div>
			</div>
		</div>
	</div>
</div>