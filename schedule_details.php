<?php
// Prevent browser cache to avoid error in METAR data
header('Cache-Control: no-cache, must-revalidate');
header('Pragma: no-cache');
header('Expires: Sat,1 Jan 2000 00:00:01 GMT');

$depicao = $schedule->depicao;
$arricao = $schedule->arricao;
?>
<h3 class="page-header theme-red">Schedule Details</h3>
<div class="row">
	<div class="col-md-5">
		<div class="mdl-card card mdl-shadow--2dp card-content">
			<div class="mdl-card__title card card-header">
				<h5 class="theme-white">Flight Details</h5>
			</div>
			<div class="mdl-card__supporting-text card card-content">
				<div class="card-text">
					<p><b>Flight Number</b> <?php echo $schedule->code.$schedule->flightnum ?></p>
					<p><b>Departure</b> <?php echo $schedule->depname ?> (<?php echo $schedule->depicao ?>) at <?php echo $schedule->deptime ?></p>
					<p><b>Arrival</b> <?php echo $schedule->arrname ?> (<?php echo $schedule->arricao ?>) at <?php echo $schedule->arrtime ?></p>
				</div>
			</div>
		</div>
	</div>
	<div class="col-md-7">
		<div class="mdl-card card mdl-shadow--2dp card-content">
			<div class="mdl-card__title card card-header">
				<h5 class="theme-white">Weather</h5>
			</div>
			<div class="mdl-card__supporting-text card card-content">
				<div class="card-text">
					<p><b><?php echo $schedule->depname ?> (<?php echo $schedule->depicao ?>)</b></p>
					<?php
					function get_depmetar($deplocation) {
						$fileName = "http://weather.noaa.gov/pub/data/observations/metar/stations/$deplocation.TXT";
						$metar = '';
						$fileData = @file($fileName) or die('METAR not available');
						if ($fileData != false) {
							list($i, $date) = each($fileData);
							$utc = strtotime(trim($date));
							$time = date("D, F jS Y g:i A",$utc);
							
							while (list($i, $line) = each($fileData)) {
								$metar .= ' ' . trim($line);
							}
							$metar = trim(str_replace('  ', ' ', $metar));
						}
						echo "$metar";
					}
					
					$deplocation = $depicao;
					get_depmetar($deplocation);
					?>
					<p><b><?php echo $schedule->arrname ?> (<?php echo $schedule->arricao ?>)</b></p>
					<?php
					function get_arrmetar($arrlocation) {
						$fileName = "http://weather.noaa.gov/pub/data/observations/metar/stations/$arrlocation.TXT";
						$metar = '';
						$fileData = @file($fileName) or die('METAR not available');
						if ($fileData != false) {
							list($i, $date) = each($fileData);
							$utc = strtotime(trim($date));
							$time = date("D, F jS Y g:i A",$utc);
							
							while (list($i, $line) = each($fileData)) {
								$metar .= ' ' . trim($line);
							}
							$metar = trim(str_replace('  ', ' ', $metar));
						}
						echo "$metar";
					}
					
					$arrlocation = $arricao;
					get_arrmetar($arrlocation);
					?>
				</div>
			</div>
		</div>
	</div>
</div>