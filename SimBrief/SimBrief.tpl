<head>
	<title><?php echo (string) $info->general[0]->icao_airline.''.(string) $info->general[0]->flight_number; ?> - SkyJet Virtual Airlines</title>
</head>
<script src="http://skyvector.com/linkchart.js"></script>
<h3 class="page-header theme-red">Flight Briefing</h3>
<div class="row">
	<div class="col-md-3">
		<div class="mdl-card card mdl-shadow--2dp card-content">
			<div class="mdl-card__title card card-header">
				<h5 class="theme-white"><?php echo (string) $info->general[0]->icao_airline.''.(string) $info->general[0]->flight_number; ?></h5>
			</div>
			<div class="mdl-card__supporting-text card card-content">
				<div class="card-text">
					<ul class="nav nav-pills nav-stacked">
						<li class="active"><a href="#overview" data-toggle="tab">Overview</a></li>
						<li><a href="#profile" data-toggle="tab">Profile</a></li>
						<li><a href="#messages" data-toggle="tab">Messages</a></li>
						<li><a href="#settings" data-toggle="tab">Settings</a></li>
					</ul>
				</div>
			</div>
		</div>
	</div>
	<div class="col-md-9">
		<div class="mdl-card card mdl-shadow--2dp card-content">
			<div class="mdl-card__supporting-text card card-content">
				<div class="tab-content">
					<div class="tab-pane active fade in" id="overview">
						<h4 class="theme-gold">Overview</h4>
						<p><b class="theme-red">Flight</b> <?php echo (string) $info->general[0]->icao_airline.''.(string) $info->general[0]->flight_number; ?></p>
						<hr>
						<p>Test</p>
					</div>
					<div class="tab-pane fade" id="profile">...</div>
					<div class="tab-pane fade" id="messages">...</div>
					<div class="tab-pane fade" id="settings">...</div>
				</div>
			</div>
		</div>
	</div>
</div>




<table width="98%" align="center" cellpadding="4">
    <!-- Flight ID -->
    <tr  style="background-color: #333; color: #FFF;">
        <td>Flight Number</td>
        <td></td>
        <td width="36%">Download FlightPlan</td>
    </tr>
    <tr>
        <td width="34%" ><?php echo (string) $info->general[0]->icao_airline.''.(string) $info->general[0]->flight_number; ?><br />
                   <td width="30%" >
                   </td>
                   <td><script type="text/javascript">
function download(d) {
        if (d == 'Select Format') return;
        window.location = 'http://www.simbrief.com/ofp/flightplans/' + d;
}
</script>
 
<select name="download" onChange="download(this.value)">
<option>Select Format</option>
<option value="<?php echo $info->files->pdf->link; ?>"><?php echo $info->files->pdf->name; ?></option>
<?php
  foreach($info->files->file as $file)
                {
?>
 
<option value="<?php echo $file->link; ?>"><?php echo $file->name; ?></option>
                        <?php
                    }
    ?>
</select>
 
                                      
                   </td>
                   
    
    <tr  style="background-color: #333; color: #FFF;">
        <td>Departure</td>
        <td>Alternate</td>
        <td width="36%">Arrival</td>
    </tr>
    
    <tr>
        <td width="34%" ><?php echo (string) $info->origin[0]->name.'('.(string) $info->origin[0]->icao_code.') <br>Planned RWY '.$info->origin[0]->plan_rwy; ?><br />
                   <td width="30%" ><?php echo (string) $info->alternate[0]->name.'('.(string) $info->alternate[0]->icao_code.') <br>Planned RWY '.$info->alternate[0]->plan_rwy; ?><br />
                   </td>
                   <td><?php echo (string) $info->destination[0]->name.'('.(string) $info->destination[0]->icao_code.') <br>Planned RWY '.$info->destination[0]->plan_rwy; ?>                                      
                   </td>
                   
                   <!-- Times Row -->
   <tr  style="background-color: #333; color: #FFF;">
        <td>Departure Time</td>
        <td>Arrival Time</td>
        <td width="36%">Flight Time</td>
    </tr>
    
    <tr>
        <td width="34%" ><?php
        $epoch = (string) $info->times[0]->sched_out; 
$dt = new DateTime("@$epoch");  // convert UNIX timestamp to PHP DateTime
echo $dt->format('H:i'); // output = 2012-08-15 00:00:00  
       ?><br />
                   <td width="30%" ><?php
        $epoch = (string) $info->times[0]->est_on; 
$dt = new DateTime("@$epoch");  // convert UNIX timestamp to PHP DateTime
echo $dt->format('H:i'); // output = 2012-08-15 00:00:00  
       ?><br />
                   </td>
                   <td><?php
        $epoch = (string) $info->times[0]->est_block; 
$dt = new DateTime("@$epoch");  // convert UNIX timestamp to PHP DateTime
echo $dt->format('H:i'); // output = 2012-08-15 00:00:00  
       ?>                                      
                   </td>            
            <!-- Aircraft and Distance Row -->       
  <tr  style="background-color: #333; color: #FFF;">
        <td>Crew</td>
        <td>Aircraft</td>
        <td width="36%">Distance</td>
    </tr>
    
    <tr>
        <td width="34%" ><?php echo (string) $info->crew[0]->cpt ; ?><br />
                   <td width="30%" ><?php echo (string) $info->aircraft[0]->icaocode.'('.(string) $info->aircraft[0]->reg.')'; ?><br />
                   </td>
                   <td><?php echo (string) $info->general[0]->route_distance.'(Nm)'; ?>                                      
                   </td>            
                       
        <!-- Metar and TAF --> 
    
    <tr style="background-color: #333; color: #FFF;">
        <td>Departure METAR</td>
         <td>Alternate METAR</td>
        <td colspan="2">Arrival METAR</td>
    </tr>
    <tr>
        <td width="34%" ><?php echo (string) $info->weather[0]->orig_metar; ?><br />
            
        </td>
          <td width="34%" ><?php echo (string) $info->weather[0]->altn_metar; ?><br />
          <td width="34%" ><?php echo (string) $info->weather[0]->dest_metar; ?><br />
    </tr>
    
     <tr style="background-color: #333; color: #FFF;">
        <td>Departure TAF</td>
         <td>Alternate TAF</td>
        <td colspan="2">Arrival TAF</td>
    </tr>
    <tr>
        <td width="34%" ><?php echo (string) $info->weather[0]->orig_taf; ?><br />
            
        </td>
          <td width="34%" ><?php echo (string) $info->weather[0]->altn_taf; ?><br />
          <td width="34%" ><?php echo (string) $info->weather[0]->dest_taf; ?><br />
    </tr>
    <!-- Route -->
    <tr style="background-color: #333; color: #FFF;">
        <td colspan="3">ATC Flight Plan</td>
    </tr>
    <tr>
        <td colspan="3">
       <?php echo (string) $info->atc[0]->flightplan_text; ?>
        </td>
    </tr>
    
    <!-- Notes -->
    <tr style="background-color: #333; color: #FFF;">
        <td colspan="3">Pilot Folder</td>
    </tr>
    <tr>
        <td colspan="2" style="padding: 6px;">
       <?php echo (string) $info->text[0]->plan_html; ?>
        </td>
    </tr>
    
    
</table>
      
     <?php //print_r($info);?>
            