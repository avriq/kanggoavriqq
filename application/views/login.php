<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">

	<head>

		<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />

		<title>Simpla Admin | Sign In</title>

		<!--                       CSS                       -->

		<!-- Reset Stylesheet -->
                <link rel="stylesheet" href="<?php echo base_url();?>template/simplaadmin/resources/css/reset.css" type="text/css" media="screen" />

		<!-- Main Stylesheet -->

		<link rel="stylesheet" href="<?php echo base_url();?>template/simplaadmin/resources/css/style.css" type="text/css" media="screen" />

		<!-- Invalid Stylesheet. This makes stuff look pretty. Remove it if you want the CSS completely valid -->
		<link rel="stylesheet" href="<?php echo base_url();?>template/simplaadmin/resources/css/invalid.css" type="text/css" media="screen" />

		<!-- Colour Schemes

		Default colour scheme is green. Uncomment prefered stylesheet to use it.

		<link rel="stylesheet" href="resources/css/blue.css" type="text/css" media="screen" />

		<link rel="stylesheet" href="resources/css/red.css" type="text/css" media="screen" />

		-->

		<!-- Internet Explorer Fixes Stylesheet -->

		<!--[if lte IE 7]>
			<link rel="stylesheet" href="resources/css/ie.css" type="text/css" media="screen" />
		<![endif]-->

		<!--                       Javascripts                       -->

		<!-- jQuery -->
		<script type="text/javascript" src="<?php echo base_url();?>template/simplaadmin/resources/scripts/jquery-1.3.2.min.js"></script>


		<!-- jQuery Configuration -->
		<script type="text/javascript" src="<?php echo base_url();?>template/simplaadmin/resources/scripts/simpla.jquery.configuration.js"></script>

		<!-- Facebox jQuery Plugin -->
		<script type="text/javascript" src="<?php echo base_url();?>template/simplaadmin/resources/scripts/facebox.js"></script>

		<!-- jQuery WYSIWYG Plugin -->
		<script type="text/javascript" src="<?php echo base_url();?>template/simplaadmin/resources/scripts/jquery.wysiwyg.js"></script>

		<!-- Internet Explorer .png-fix -->


		<!--[if IE 6]>
			<script type="text/javascript" src="resources/scripts/DD_belatedPNG_0.0.7a.js"></script>
			<script type="text/javascript">
				DD_belatedPNG.fix('.png_bg, img, li');
			</script>
		<![endif]-->

	</head>

	<body id="login">

		<div id="login-wrapper" class="png_bg">
			<div id="login-top">

				<h1>Simpla Admin</h1>
				<!-- Logo (221px width) -->
				<img id="logo" src="<?php echo base_url();?>template/simplaadmin/resources/images/logo.png" alt="Simpla Admin logo" />

			</div> <!-- End #logn-top -->

			<div id="login-content">

                            <form action="<?php echo site_url("login/auth");?>" method="post">
                                      <?php
                                      $notif =$this->session->flashdata("notif");
                                   
                                      if(!empty($notif)){?>
					<div class="notification information png_bg">
						<div>
							<?php echo $this->session->flashdata("notif");?>
						</div>
					</div>
                                        <?php } ?>
					<p>

						<label>Username</label>
                                                <input class="text-input" type="text" name="username"/>
					</p>
					<div class="clear"></div>
					<p>
						<label>Password</label>
						<input class="text-input" type="password" name="password"/>
					</p>

					<div class="clear"></div>
					<p id="remember-password">
						<input type="checkbox" />Remember me
					</p>
					<div class="clear"></div>
					<p>
						<input class="button" type="submit" value="Sign In" />
					</p>

				</form>

			</div> <!-- End #login-content -->

		</div> <!-- End #login-wrapper -->

  </body>

</html>
