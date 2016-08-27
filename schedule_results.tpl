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
				<?php
				if(!$schedule_list) {
					echo '<div class="alert alert-danger nocorner">No schedules have been found.</div>';
					return;
				}
				?>
				<table id="tabledlist" class="table table-responsive">
					<thead>
						<tr>
							<th><p>Flight Info</p></th>
							<th><p>Options</p></th>
						</tr>
					</thead>
					<tbody>
						<?php foreach($schedule_list as $schedule) { ?>
						<tr>
							<td>
								<a href="<?php echo url('/schedules/details/'.$schedule->id);?>"><?php echo $schedule->code . $schedule->flightnum?>
									<?php echo '('.$schedule->depicao.' - '.$schedule->arricao.')'?>
								</a>
								<br />
								
								<strong>Departure: </strong><?php echo $schedule->deptime;?> &nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <strong>Arrival: </strong><?php echo $schedule->arrtime;?><br />
								<strong>Equipment: </strong><?php echo $schedule->aircraft; ?> (<?php echo $schedule->registration;?>)  <strong>Distance: </strong><?php echo $schedule->distance . Config::Get('UNITS');?>
								<br />
								<strong>Days Flown: </strong><?php echo Util::GetDaysCompact($schedule->daysofweek); ?><br />
								<?php echo ($schedule->route=='') ? '' : '<strong>Route: </strong>'.$schedule->route.'<br />' ?>
								<?php echo ($schedule->notes=='') ? '' : '<strong>Notes: </strong>'.html_entity_decode($schedule->notes).'<br />' ?>
								<?php
								# Note: this will only show if the above code to
								#	skip the schedule is commented out
								if($schedule->bidid != 0) {
									echo '<span class="text-danger">This route has been bid on by a seperate pilot.</span>';
								}
								?>
							</td>
							<td nowrap>
								<a href="<?php echo url('/schedules/details/'.$schedule->id);?>">View Details</a><br />
								<a href="<?php echo url('/schedules/brief/'.$schedule->id);?>">Pilot Brief</a><br />
								
								<?php 
								# Don't allow overlapping bids and a bid exists
								if(Config::Get('DISABLE_SCHED_ON_BID') == true && $schedule->bidid != 0) {
								?>
									<a id="<?php echo $schedule->id; ?>" class="addbid" 
										href="<?php echo actionurl('/schedules/addbid/?id='.$schedule->id);?>">Add to Bid</a>
								<?php
								} else {
									if(Auth::LoggedIn()) {
									 ?>
										<a id="<?php echo $schedule->id; ?>" class="addbid" 
											href="<?php echo url('/schedules/addbid');?>">Add to Bid</a>
									<?php			 
									}
								}		
								?>
							</td>
						</tr>
						<?php
						}
						?>
					</tbody>
				</table>
			</div>
		</div>
	</div>
</div>