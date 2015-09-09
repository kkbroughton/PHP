<html>
<head>
	<title><?php echo $pageTitle; ?></title>
	<link rel="stylesheet" href="css/style.css" type="text/css">
	<link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Oswald:400,700" type="text/css">
    <link rel="shortcut icon" href="favicon.ico">
	<script type="text/javascript" charset="utf-8">var switchTo5x=true;</script>
    <script type="text/javascript" src="https://ws.sharethis.com/button/buttons.js"></script>
    <script type="text/javascript">stLight.options({publisher: "de9d7d20-3004-4851-850e-3f9d2e83ee55", onhover: false, doNotHash: true, doNotCopy: false, hashAddressBar: false, shorten:false});</script>
</head>
<body>
	<div class="header">
		<div class="wrapper">
			<h1 class="branding-title"><a href="./">Shirts 4 Kim</a></h1>
			<ul class="nav">
                <li class="latest <?php if($section == "latest" || $section == "home"){ echo "on"; } ?>"><a href="index.php" style="color:#ff8400">&nbsp;</a></li>
                <li class="shirts <?php if($section == "shirts"){ echo "on"; } ?>"><a href="shirts.php">Shirts</a></li>
				<li class="guns <?php if($section == "guns"){ echo "on"; } ?>"><a href="guns.php">Guns</a></li>
				<li class="contact <?php if($section == "contact"){ echo "on"; } ?>"><a href="contact.php">Contact Me</a></li>
				<!--<li class="cart"><a href="#">Shopping Cart</a></li>-->
			</ul>
		</div>
	</div>
	<div id="content">