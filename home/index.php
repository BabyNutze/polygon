<!DOCTYPE html>
<html lang="en">

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<!-- Meta, title, CSS, favicons, etc. -->
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title>Admin</title>

	<!-- Bootstrap -->
	<link href="../vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
	<!-- Font Awesome -->
	<link href="../vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
	<!-- NProgress -->
	<link href="../vendors/nprogress/nprogress.css" rel="stylesheet">
	<!-- iCheck -->
	<link href="../vendors/iCheck/skins/flat/green.css" rel="stylesheet">
	<!-- bootstrap-progressbar -->
	<link href="../vendors/bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet">
	<!-- PNotify -->
	<link href="../vendors/pnotify/dist/pnotify.css" rel="stylesheet">
	<link href="../vendors/pnotify/dist/pnotify.buttons.css" rel="stylesheet">
	<link href="../vendors/pnotify/dist/pnotify.nonblock.css" rel="stylesheet">

	<link href="https://fonts.googleapis.com/css?family=Kanit|Kodchasan" rel="stylesheet">

	<!-- Custom Theme Style -->
	<link href="../build/css/custom.min.css" rel="stylesheet">
	<style>
		body {
			font-family: 'Kanit', sans-serif;
			font-family: 'Kodchasan', sans-serif;
		}
	</style>
</head>

<body class="nav-md">
	<div class="container body">
		<div class="main_container">
			<div class="col-md-3 left_col">
				<?php include("inc/leftsidebar.php");?>
			</div>

			<!-- top navigation -->
			<?php include("inc/topnav.php");?>
			<!-- /top navigation -->

			<!-- page content -->
			<?php 
			if(!isset($_GET["job"])){
				include("job/home.php");
			}
			if(isset($_GET["job"])){
				$job = $_GET["job"];
				
			}
			?>
			<!-- /page content -->

			<!-- footer content -->
			<footer>
				<div class="pull-right">
					<a href="https://sixtthailand.com/admintool.php">sixt</a>
				</div>
				<div class="clearfix"></div>
			</footer>
			<!-- /footer content -->
		</div>
	</div>



	<!-- jQuery -->
	<script src="../vendors/jquery/dist/jquery.min.js" type="23ff86389b59444d58cae709-text/javascript"></script>
	<!-- Bootstrap -->
	<script src="../vendors/bootstrap/dist/js/bootstrap.min.js" type="23ff86389b59444d58cae709-text/javascript"></script>
	<!-- FastClick -->
	<script src="../vendors/fastclick/lib/fastclick.js" type="23ff86389b59444d58cae709-text/javascript"></script>
	<!-- NProgress -->
	<script src="../vendors/nprogress/nprogress.js" type="23ff86389b59444d58cae709-text/javascript"></script>
	<!-- bootstrap-progressbar -->
	<script src="../vendors/bootstrap-progressbar/bootstrap-progressbar.min.js" type="23ff86389b59444d58cae709-text/javascript"></script>
	<!-- iCheck -->
	<script src="../vendors/iCheck/icheck.min.js" type="23ff86389b59444d58cae709-text/javascript"></script>
	<!-- PNotify -->
	<script src="../vendors/pnotify/dist/pnotify.js" type="23ff86389b59444d58cae709-text/javascript"></script>
	<script src="../vendors/pnotify/dist/pnotify.buttons.js" type="23ff86389b59444d58cae709-text/javascript"></script>
	<script src="../vendors/pnotify/dist/pnotify.nonblock.js" type="23ff86389b59444d58cae709-text/javascript"></script>

	<!-- Custom Theme Scripts -->
	<script src="../build/js/custom.min.js" type="23ff86389b59444d58cae709-text/javascript"></script>
	<!-- Google Analytics -->
	<script type="23ff86389b59444d58cae709-text/javascript">
		( function ( i, s, o, g, r, a, m ) {
			i[ 'GoogleAnalyticsObject' ] = r;
			i[ r ] = i[ r ] || function () {
				( i[ r ].q = i[ r ].q || [] ).push( arguments )
			}, i[ r ].l = 1 * new Date();
			a = s.createElement( o ),
				m = s.getElementsByTagName( o )[ 0 ];
			a.async = 1;
			a.src = g;
			m.parentNode.insertBefore( a, m )
		} )( window, document, 'script', 'https://www.google-analytics.com/analytics.js', 'ga' );

		ga( 'create', 'UA-23581568-13', 'auto' );
		ga( 'send', 'pageview' );
	</script>

	<script src="https://ajax.cloudflare.com/cdn-cgi/scripts/a2bd7673/cloudflare-static/rocket-loader.min.js" data-cf-settings="23ff86389b59444d58cae709-|49" defer=""></script>
</body>

</html>