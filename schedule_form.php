<form id="form" action="<?php echo url('/schedules/view');?>" method="post">
	<div class="form-group">
		<label>Departure Airport</label>
		<select id="depicao" name="depicao" class="form-control nocorner">
			<option value="">Select All</option>
			<?php
			if(!$depairports) $depairports = array();
	
			foreach($depairports as $airport) {
				echo '<option value="'.$airport->icao.'">'.$airport->icao
						.' ('.$airport->name.')</option>';
			}
			?>
		</select>
	</div>
	<div class="form-group">
		<label>Arrival Airport</label>
		<select id="arricao" name="arricao" class="form-control nocorner">
			<option value="">Select All</option>
			<?php
			if(!$depairports) $depairports = array();
	
			foreach($depairports as $airport) {
				echo '<option value="'.$airport->icao.'">'.$airport->icao
						.' ('.$airport->name.')</option>';
			}
			?>
		</select>
	</div>
	<div class="form-group">
		<label>Aircraft</label>
		<select id="equipment" name="equipment" class="form-control nocorner">
			<option value="">Select Aircraft</option>
			<?php
			if(!$aircraft_list) {
				$aircraft_list = array();
			}
	
			foreach($aircraft_list as $aircraft) {
				echo '<option value="'.$aircraft->name.'">'.$aircraft->name.'</option>';
			}
			?>
		</select>
	</div>
	<input type="hidden" name="action" value="findflight" />
	<input type="submit" name="submit" value="Find Flights" class="mdl-button mdl-button--colored mdl-js-button mdl-js-ripple-effect mdl-shadow--2dp btn-block">
</form>