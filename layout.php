<?php
// phpVMS Crew Center Modification Skin by Albert Lua (https://albertlua.com/)
error_reporting(0);
ini_set('display_errors', 0);
?>

<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta http-equiv="X-UA-Compatible" content="IE=7">
		<meta name="description" content="SkyJet Virtual Airlines Crew Center">
		
		<?php echo $page_htmlhead; ?>
		
		<link rel="shortcut icon" href="<?php echo SITE_URL; ?>/lib/skins/skacrewcenter/img/logo.ico">
		<link rel="stylesheet" href="https://cdn.airtranvirtual.net/mdl113/material.min.css">
		 <link rel="stylesheet" href="https://code.getmdl.io/1.1.3/material.grey-orange.min.css" /> 
		<link rel="stylesheet" href="<?php echo SITE_URL; ?>/lib/skins/skacrewcenter/css/material-skatheme.css">
		<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
		<link rel="stylesheet" href="https://cdn.airtranvirtual.net/bootstrap-3.3.5-dist/css/bootstrap.min.css">
		<link rel="stylesheet" href="https://cdn.airtranvirtual.net/animate/animate.css">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
		<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro">
		<link rel="stylesheet" href="<?php echo SITE_URL; ?>/lib/skins/skacrewcenter/css/style.css">
		
		<script src="https://cdn.airtranvirtual.net/mdl113/material.min.js"></script>
        <script src="https://cdn.airtranvirtual.net/bootstrap-3.3.5-dist/js/bootstrap.min.js"></script>
		<script type="text/javascript" src="<?php echo fileurl('lib/js/simbrief.apiv1.js');?>"></script>
		
		<script>
		var mobile = (/iphone|ipod|android|blackberry|mini|windows\sce|palm/i.test(navigator.userAgent.toLowerCase()));
		if (mobile) {
			// Do nothing
		} else {
			function display_c(){
				var refresh=1000;
				mytime=setTimeout('display_ct()',refresh)
			}
			function display_ct() {
				var strcount
				var x = new Date()
				var x1=x.toUTCString();
				document.getElementById('ct').innerHTML = x1;
				tt=display_c();
			}
		}
		</script>
		
		<title><?php echo $page_title; ?></title>
	</head>
	<body onload=display_ct();>
		<?php
		// phpVMS required elements
		echo $page_htmlreq;
		
		// If the user isn't logged in
		if (Auth::LoggedIn() == false) {
			// Show page content without wraparound
			echo $page_content;
		} else {
			// Show the navigation bar for the crew center
			Template::Show('core_navigation.php');
			?>
			<main class="mdl-layout__content mdl-color--grey-100">
				<div class="container-fluid">
					<?php
					// Show page content with wraparound
					echo $page_content;
					?>
				</div>
			</main>
			<?php
		}
		?>
	</body>
</html>