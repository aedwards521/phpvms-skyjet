<h3 class="page-header theme-red">My Flight Bids</h3>
<?php
if(!$bids)
{
	echo '<div class="alert alert-danger nocorner">You have not bid on any flights!</div>';
	return;
}
?>
<table id="tabledlist" class="table table-responsive">
	<thead>
		<tr>
			<th>Flight Number</th>
			<th>Route</th>
			<th>Aircraft</th>
			<th>Departure Time</th>
			<th>Arrival Time</th>
			<th>Distance</th>
			<th>Options</th>
		</tr>
	</thead>
	<tbody>
		<?php
		foreach($bids as $bid)
		{
		?>
		<tr>
			<td><?php echo $bid->code . $bid->flightnum; ?></td>
			<td><?php echo $bid->depicao; ?> to <?php echo $bid->arricao; ?></td>
			<td><?php echo $bid->aircraft; ?> (<?php echo $bid->registration?>)</td>
			<td><?php echo $bid->deptime;?></td>
			<td><?php echo $bid->arrtime;?></td>
			<td><?php echo $bid->distance;?></td>
			<td>
				<a href="<?php echo url('/pireps/filepirep/'.$bid->bidid);?>">File PIREP</a><br />
				<a id="<?php echo $bid->bidid; ?>" class="deleteitem" href="<?php echo url('/schedules/removebid');?>">Remove Bid *</a><br />
				<a href="<?php echo url('/schedules/brief/'.$bid->id);?>">Pilot Brief</a>
			</td>
		</tr>
		<?php
		}
		?>
	</tbody>
</table>
<p class="text-right help-block">* - double click</p>