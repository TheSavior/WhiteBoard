<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>Saros Framework</title>
	<link rel="shortcut icon" type="image/x-icon" href="<?php echo $this->getThemeLocation()?>/Images/favicon.ico" />
	<?php echo $this->headStyles()->addStyle("Main")->addStyle("Colors") ?>
	<?php echo $this->headScripts()->addScript("global_functions")->addScript("jquery-1.3.2") ?>
</head>
<body>
	<div id="container">
		<div id="main">
			<?php echo $this->content() ?>
			<div id="forumfooterbar">
				<div class="left">
					<a href="#top" id="gotop"><span>Top</span></a>
					<a id="numusersonpage"><span>5 Users, 4 Guests On This Page</span></a>
					<span id="shortonline">
						TheSavior
					</span>
				</div>
				<div class="right">
					<span><?php echo 5?></span>
				</div>
			</div>

			<div id="usersonpage">
				<a id="showlessonline">Show Less</a>
				<?php
				/*
				foreach($this->UsersOnPage as $index => $user)
				{
					$comma = "";
					if ($index != $totalUsers-1)
					{
						$comma = ", ";
					}
					echo $user.$comma;
				}
				*/
				?>
			</div>
		</div>
		<div id="copyright">
			Powered By WhiteBoard & SarosFramework<span id="version"><?php echo Saros_Version::getVersion();?></span><br />
			&copy; <a href="http://www.sarosoftware.com">SaroSoftware</a><br />
			All Rights Reserved
		</div>
	</div>
</body>
</html>