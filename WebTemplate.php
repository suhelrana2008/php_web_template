<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Web Template</title>
</head>
<body>
	<?php 
		include("include_header.html");
	?>
	<div style="width: 20%; text-align: center; float: left;">
		<?php include("include_buttonnav.html"); ?>
	</div>
	<!-- Dynamic content section -->
	<?php 
		if(isset($_GET["content"])) {
			switch ($_GET["content"]) {
				case 'About Me':
					include("include_about.html");
					break;
					
				case "Contact Me":
					include("include_contact.html");
					break;

				default: // Home was clicked
					include("include_home.html");
					break;	
			} // End of switch
		} else {
			// No button has been clicked yet
			include("include_home.html");
		}
	?>
	<!-- End of the dynamic content section -->
	<hr />
	<?php include("include_footer.php"); ?>
</body>
</html>