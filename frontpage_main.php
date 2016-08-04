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
		include("dash_resources.php");
	} elseif (isset($_GET['communication'])) {
		$title = "Communication";
		include("dash_communication.php");
	} else {
		include("dash_dash.php");
	}
}

// Set the title correspondent to the current page
?>
<script>
	document.title = "<?php echo $title; ?> - SkyJet Airlines";
</script>