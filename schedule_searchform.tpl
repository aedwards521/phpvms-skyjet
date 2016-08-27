<h3 class="page-header theme-red">Schedules</h3>
<a href="<?php echo url('/schedules/bids'); ?>" class="mdl-button mdl-button--colored mdl-js-button mdl-js-ripple-effect mdl-shadow--2dp btn-block">Current Flight Bids</a>
<div class="row">
	<div class="col-md-3">
		<div class="mdl-card card mdl-shadow--2dp card-content">
			<div class="mdl-card__title card card-header">
				<h5 class="theme-white">Parameters</h5>
			</div>
			<div class="mdl-card__supporting-text card card-content">
				<?php include("schedule_form.tpl"); ?>
			</div>
		</div>
	</div>
	<div class="col-md-9">
		<div class="mdl-card card mdl-shadow--2dp card-content">
			<div class="mdl-card__title card card-header">
				<h5 class="theme-white">Schedules</h5>
			</div>
			<div class="mdl-card__supporting-text card card-content">
				<div class="text-center">
					<i class="fa fa-chevron-circle-left fa-5x"></i>
					<br><br>
					<p>Please select schedule parameters on the left.</p>
				</div>
			</div>
		</div>
	</div>
</div>