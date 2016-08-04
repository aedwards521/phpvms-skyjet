<h3 class="page-header theme-red">My Logbook</h3>
<?php
if(!$pirep_list) {
	echo '<div class="alert alert-danger nocorner">You have no logbook entries! Get flying! <i class="fa fa-plane"></i></div>';
	return;
}
?>