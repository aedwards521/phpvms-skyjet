<h3 class="page-header theme-red">Flight Pre-Brief</h3>
<p>SkyJet Virtual Airlines uses <a href="http://www.simbrief.com/" class="goldlink" target="_blank">simBrief</a> to dispatch our flights with the utmost accuracy. You will be required to create a simBrief account in order to permit data to be sent to SkyJet for you as well as update the AIRAC cycle being used if you have purchased AIRAC data.</p>
<div class="row">
	<div class="col-md-6">
		<div class="mdl-card card mdl-shadow--2dp card-content">
			<div class="mdl-card__title card card-header">
				<h5 class="theme-white">Flight Information</h5>
			</div>
			<div class="mdl-card__supporting-text card card-content">
				<div class="card-text">
					<p><b>Flight Number</b> <?php echo $schedule->code.$schedule->flightnum; ?></p>
					<p><b>Departure</b> <?php echo "{$schedule->depname} ($schedule->depicao)"; ?></p>
					<p><b>Arrival</b> <?php echo "{$schedule->arrname} ($schedule->arricao)"; ?></p>
				</div>
			</div>
		</div>
	</div>
	<div class="col-md-6">
		<div class="mdl-card card mdl-shadow--2dp card-content">
			<div class="mdl-card__title card card-header">
				<h5 class="theme-white">Scheduling</h5>
			</div>
			<div class="mdl-card__supporting-text card card-content">
				<div class="card-text">
					<p><b>Departure Time</b> <?php echo "{$schedule->deptime}"; ?></p>
					<p><b>Arrival Time</b> <?php echo "{$schedule->arrtime}"; ?></p>
					<p><b>Aircraft</b> <?php echo "{$schedule->aircraft}"; ?></p>
					<p><b>Distance</b> <?php echo "{$schedule->distance}"; ?></p>
				</div>
			</div>
		</div>
	</div>
</div>
<div class="mdl-card card mdl-shadow--2dp card-content">
	<div class="mdl-card__title card card-header">
		<h5 class="theme-white">Notes</h5>
	</div>
	<div class="mdl-card__supporting-text card card-content">
		<div class="card-text">
			<?php
			if($schedule->notes == '') {
				echo '<div class="alert alert-info nocorner"><p>No airline notes.</p></div>';
			}
			else {
				echo "{$schedule->notes}"; 
			}
			?>
		</div>
	</div>
</div>
  

<form id="sbapiform">
	<table>
		<tr>
		   	<?php $planedata=(OperationsData::getAircraftByReg($schedule->registration)) ;?>
			<td><input type="hidden" name="type" size="5" type="text" placeholder="ZZZZ"  value="<?php echo $planedata->icao ;?>"></td>
		</tr>
		<tr>
			<td><input type="hidden" name="orig" size="5" type="text" placeholder="ZZZZ" maxlength="4" value="<?php echo $schedule->depicao ; ?>"></td>
		</tr>
		<tr>
			<td><input type="hidden" name="dest" size="5" type="text" placeholder="ZZZZ" maxlength="4" value="<?php echo $schedule->arricao ; ?>"></td>
		</tr>
		<tr>
			<td><input type="hidden" name="route" placeholder="Enter your route here"></td>
		</tr>
		<tr>
			<td colspan=2></td>
		</tr>
		<tr>
			<td><input type="hidden" name="units" size="5" type="text" placeholder="ZZZZ" maxlength="4" value="KGS"></td>
		</tr>
	</table>
	<input type="hidden" name="airline" value="<?php echo $schedule->code?>">
	<input type="hidden" name="fltnum" value="<?php echo $schedule->flightnum?>"> 
	<?php $today = date("dMy");?>
	<input type="hidden" name="date" value="<?php echo $today?>"> 
	<?php $deptimes = explode(":", $schedule->deptime); ?>
	<input type="hidden" name="deph" value="<?php echo $deptimes[0]?>">
	<input type="hidden" name="depm" value="<?php echo $deptimes[1]?>">    
	<?php $arrtimes = explode(":", $schedule->arrtime); ?>
	<input type="hidden" name="steh" value="<?php echo $arrtimes[0]?>">
	<input type="hidden" name="stem" value="<?php echo $arrtimes[1]?>">
	<input type="hidden" name="reg" value="<?php echo $schedule->registration?>">    
	<input type="hidden" name="navlog" value="1"> 
	<input type="hidden" name="selcal" value="GR-FS">    
	<input type="hidden" name="planformat" value="lido">
	<div class="form-group">
	<input type="button" onclick="simbriefsubmit('<?php echo SITE_URL?>/index.php/SimBrief');" class="mdl-shadow--2dp mdl-button mdl-button--colored mdl-js-button mdl-js-ripple-effect btn-block theme-red" value="Generate simBrief Flight Briefing">
	</div>
</form>
