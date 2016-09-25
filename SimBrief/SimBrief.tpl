<head>
	<title><?php echo (string) $info->general[0]->icao_airline.''.(string) $info->general[0]->flight_number; ?> - SkyJet Virtual Airlines</title>
</head>
<script src="http://skyvector.com/linkchart.js"></script>
<h3 class="page-header theme-red">Flight Briefing</h3>
<div class="row">
	<div class="col-md-2">
		<div class="mdl-card card mdl-shadow--2dp card-content">
			<div class="mdl-card__title card card-header">
				<h5 class="theme-white"><?php echo (string) $info->general[0]->icao_airline.''.(string) $info->general[0]->flight_number; ?></h5>
			</div>
			<div class="mdl-card__supporting-text card card-content">
				<div class="card-text">
					<ul class="nav nav-pills nav-stacked">
						<li class="active"><a href="#overview" data-toggle="tab">Overview</a></li>
						<li><a href="#weather" data-toggle="tab">Weather</a></li>
						<li><a href="#flightplan" data-toggle="tab">Flight Plan</a></li>
						<li><a href="#pilotfolder" data-toggle="tab">Pilot Folder</a></li>
						<li><a href="#downloads" data-toggle="tab">Downloads</a></li>
					</ul>
				</div>
			</div>
		</div>
	</div>
	<div class="col-md-10">
		<div class="mdl-card card mdl-shadow--2dp card-content">
			<div class="mdl-card__supporting-text card card-content">
				<div class="tab-content">
					<div class="tab-pane active fade in" id="overview">
						<h4 class="theme-gold">Overview</h4>
						<p><b class="theme-red">Flight</b> <?php echo (string) $info->general[0]->icao_airline.''.(string) $info->general[0]->flight_number; ?></p>
						<p><b class="theme-red">Crew</b> <?php echo (string) $info->crew[0]->cpt ; ?></p>
						<p><b class="theme-red">Aircraft</b> <?php echo (string) $info->aircraft[0]->icaocode.' ('.(string) $info->aircraft[0]->reg.')'; ?></p>
						<hr>
						<div class="row">
							<div class="col-md-4">
								<p><b class="theme-red">Departure</b></p>
								<p><?php echo (string) $info->origin[0]->name.'('.(string) $info->origin[0]->icao_code.')<br>Planned RWY '.$info->origin[0]->plan_rwy; ?></p>
							</div>
							<div class="col-md-4">
								<p><b class="theme-red">Alternate</b></p>
								<p><?php echo (string) $info->alternate[0]->name.'('.(string) $info->alternate[0]->icao_code.')<br>Planned RWY '.$info->alternate[0]->plan_rwy; ?></p> 
							</div>
							<div class="col-md-4">
								<p><b class="theme-red">Arrival</b></p>
								<p><?php echo (string) $info->destination[0]->name.'('.(string) $info->destination[0]->icao_code.')<br>Planned RWY '.$info->destination[0]->plan_rwy; ?></p>
							</div>
						</div>
						<p><b class="theme-red">Route Distance</b> <?php echo (string) $info->general[0]->route_distance.' (nm)'; ?></p>
						<hr>
						<div class="row">
							<div class="col-md-4">
								<p><b class="theme-red">Departure Time</b> <?php $epoch = (string) $info->times[0]->sched_out; $dt = new DateTime("@$epoch"); echo $dt->format('H:i'); ?></p>
							</div>
							<div class="col-md-4">
								<p><b class="theme-red">Flight Time</b> <?php $epoch = (string) $info->times[0]->est_block; $dt = new DateTime("@$epoch"); echo $dt->format('H:i'); ?>          
							</div>
							<div class="col-md-4">
								<p><b class="theme-red">Arrival Time </b> <?php $epoch = (string) $info->times[0]->est_on; $dt = new DateTime("@$epoch"); echo $dt->format('H:i'); ?></p>
							</div>
						</div>
					</div>
					<div class="tab-pane fade" id="weather">
						<h4 class="theme-gold">Weather (METAR)</h4>
						<div class="row">
							<div class="col-md-4">
								<p><b class="theme-red">Departure METAR</b></p>
								<p><?php echo (string) $info->weather[0]->orig_metar; ?></p>
							</div>
							<div class="col-md-4">
								<p><b class="theme-red">Alternate METAR</b></p>
								<p><?php echo (string) $info->weather[0]->altn_metar; ?></p>
							</div>
							<div class="col-md-4">
								<p><b class="theme-red">Arrival METAR</b></p>
								<p><?php echo (string) $info->weather[0]->dest_metar; ?></p>
							</div>
						</div>
						<hr>
						<h4 class="theme-gold">Weather (TAF)</h4>
						<div class="row">
							<div class="col-md-4">
								<p><b class="theme-red">Departure TAF</b></p>
								<p><?php echo (string) $info->weather[0]->orig_taf; ?></p>
							</div>
							<div class="col-md-4">
								<p><b class="theme-red">Alternate TAF</b></p>
								<p><?php echo (string) $info->weather[0]->altn_taf; ?></p>
							</div>
							<div class="col-md-4">
								<p><b class="theme-red">Arrival TAF</b></p>
								<p><?php echo (string) $info->weather[0]->dest_taf; ?></p>
							</div>
						</div>
					</div>
					<div class="tab-pane fade" id="flightplan">
						<h4 class="theme-gold">ATC Flight Plan</h4>
						<pre class="nocorner"><?php echo (string) $info->atc[0]->flightplan_text; ?></pre>
					</div>
					<div class="tab-pane fade" id="pilotfolder">
						<h4 class="theme-gold">Pilot Folder</h4>
						<p>Note: the PDF version of this document is available under the downloads tab.</p>
						<pre class="nocorner"><?php echo (string) $info->text[0]->plan_html; ?></pre>
					</div>
					<div class="tab-pane fade" id="downloads">
						<h4 class="theme-gold">Downloads</h4>
						<p>Please select a format to download from the options list below. The download will automatically commence when the option is selected.</p>
						<script type="text/javascript">
							function download(d) {
									if (d == 'Select Format') return;
									window.location = 'http://www.simbrief.com/ofp/flightplans/' + d;
							}
						</script>
						<select name="download" onChange="download(this.value)" class="form-control nocorner">
							<option>Select Format</option>
							<option value="<?php echo $info->files->pdf->link; ?>"><?php echo $info->files->pdf->name; ?></option>
							<?php
							  foreach($info->files->file as $file) {
								?>
								<option value="<?php echo $file->link; ?>"><?php echo $file->name; ?></option>
								<?php
							}
							?>
						</select>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
            