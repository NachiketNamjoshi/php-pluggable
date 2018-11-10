<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Welcome!</title>
	<link rel="stylesheet" href="<?php echo buildURL(array(getFileURL(__DIR__), 'css/styles.css')); ?>">
</head>
<body>
	<div class="navbar">
		<div class="row">
			<div class="column">
				<div class="navbar-brand">
					<h3 style="padding-top: 7px;">php-pluggable</h3>
				</div>
			</div>
			<div class="column">
				<div align="right">
					<ul class="nav-links">
						<li><a href="#">Tutorials</a></li>
						<li><a href="#">Homepage</a></li>
						<li><a href="#">Plugs</a></li>
						<li><a href="#">Documentation</a></li>
					</ul>
				</div>
			</div>
		</div>
	</div>
	<div class="container">
		<div class="fragment" style="padding: 10px 10px;">
			<h3>Pluggable Status: <?php echo $GLOBALS['config']['coreConfig']['pluggableStatus']; ?> </h3>
		</div>
		<?php if(isset($GLOBALS['config']['coreConfig']['registered_plugs'])) { ?>
			<div class="fragment" style="padding: 10px 10px;">
				Installed Plugs: <br>
				<ul>
					<?php 
						foreach ($GLOBALS['config']['coreConfig']['registered_plugs'] as $plug) {
							echo '<li><pre>';
							print_r($plug['name']);
							echo'</pre></li>';
						}
					?>
				</ul>
			</div>
			<div class="fragment-last" style="padding: 10px 10px;">
				<span class="lighter">If you're seeing this, that means it worked.</span>
			</div>
		<?php } else { ?>
			<div class="fragment">
				Something went wrong while loading the plugs. Please refresh this page and try again. <br> If the issue persists, check <a href="#">this page</a> for more information.
			</div>
		<?php } ?>
	</div>
</body>
</html>

