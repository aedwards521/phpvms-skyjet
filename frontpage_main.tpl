<?php
// Determine if the user is logged in
if (Auth::LoggedIn() == false) {
	// Send them to the login page if not
	header('Location: /index.php/login');
	
	// Terminate everything else
	exit();
} else {
	// Set an empty title
	$title = "Dashboard";
	if (isset($_GET['resources'])) {
		$title = "Resources";
		include("dash_resources.tpl");
	} elseif (isset($_GET['communication'])) {
		$title = "Communication";
		include("dash_communication.tpl");
	} elseif (isset($_GET['liveries'])) {
		$title = "Liveries";
		include("dash_liveries.tpl");
	} else {
		include("dash_dash.tpl");
	}
}

// Set the title correspondent to the current page
?>
<script>
	document.title = "<?php echo $title; ?> - SkyJet Airlines";
</script>