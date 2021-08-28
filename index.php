<?php 
	include 'functions/config.php';

	$pages = scandir('pages/');

	if (isset($_GET['page']) && !empty($_GET['page']) && in_array($_GET['page'].'.php' ,$pages)) {
		$page = $_GET['page'];
	}else{
		$page = 'home';
	}

	$pages_functions = scandir('functions/');

	if (in_array($page.'.func.php', $pages_functions)) {
		include 'functions/'.$page.'.func.php';
	}


 ?>


<!DOCTYPE html>
<html lang="fr">
	<head>
        <meta charset="utf-8">

        <title>TogetTech, Inc</title>

        <meta content="TogetTech, Inc" name="title">
        <meta content="Inspiring Africa, Building and Improving the Future." name="description">
        <meta content="initial-scale=1, minimum-scale=1, width=device-width" name="viewport">
        <meta content="IE=11;IE=Edge" http-equiv="X-UA-Compatible">
        <meta name="thumbnail" content="/img/share/andy-peace.png" />

        <meta itemprop="name" content="TogetTech, Inc">
        <meta itemprop="description" content="Inspiring Africa, Building and Improving the Future.">
        <meta itemprop="image" content="/vues/static/2016/img/share/andy-lg.png">

        <meta name="twitter:card" content="summary_large_image">
        <meta name="twitter:site" content="@android">
        <meta name="twitter:title" content="TogetTech, Inc">
        <meta name="twitter:description" content="Inspiring Africa, Building and Improving the Future.">
        <meta name="twitter:image" content="/img/share/andy-sm.png">
        <meta name="twitter:url" content="index.php">

        <meta property="og:type" content="website">
        <meta property="og:title" content="TogetTech, Inc">
        <meta property="og:description" content="Inspiring Africa, Building and Improving the Future.">
        <meta property="og:url" content="index.php">
        <meta property="og:image" content="/img/share/andy-lg.png">
        <meta property="og:site_name" content="TogetTech, Inc">
        <meta property="og:locale" content="en_US">


        <link href="index.php" rel="canonical">
        <link rel="dns-prefetch" href="http://fonts.googleapis.com/">
        <link rel="dns-prefetch" href="http://www.gstatic.com/">
        <link rel="dns-prefetch" href="http://www.google.com/">
        <link rel="dns-prefetch" href="http://apis.google.com/">

        <link href="http://fonts.googleapis.com/css?family=Roboto:700,500,400,300,100&amp;subset=latin,latin-ext,cyrillic,cyrillic-ext" rel="stylesheet">
        <link href="vues/static/2016/css/main.min.css" rel="stylesheet">

		<link href="vues/static/2016/css/pages/enterprise/main.min.css" rel="stylesheet">


        <link href="vues/static/img/logo.ico" rel="shortcut icon">
        <link href="vues/static/img/touch-icon-iphone.png" rel="apple-touch-icon">
        <link href="vues/static/img/touch-icon-ipad.png" rel="apple-touch-icon" sizes="76x76">
        <link href="vues/static/img/touch-icon-iphone-retina.png" rel="apple-touch-icon" sizes="120x120">
        <link href="vues/static/img/touch-icon-ipad-retina.png" rel="apple-touch-icon" sizes="152x152">

        <script src="vues/external_hosted/modernizr/modernizr.js"></script>
        <script src="vues/external_hosted/picturefill/picturefill.min.js" async></script>
        <script src="vues/google/js/gweb/analytics/autotrack.js"></script>
        <script>
            window.tracker = new gweb.analytics.AutoTrack({
                profile: 'UA-5686560-1',
                cookiePath: '/'
            });
        </script>

    </head>

	<body class="index">
		<!-- Google Tag Manager (noscript) -->
		<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-KQ9GN7P"
			height="0" width="0" style="display:none;visibility:hidden"></iframe>
		</noscript>
		<!-- End Google Tag Manager (noscript) -->

        <!-- The core Firebase JS SDK is always required and must be listed first -->
        <script src="/__/firebase/8.10.0/firebase-app.js"></script>

        <!-- TODO: Add SDKs for Firebase products that you want to use
            https://firebase.google.com/docs/web/setup#available-libraries -->
        <script src="/__/firebase/8.10.0/firebase-analytics.js"></script>

        <!-- Initialize Firebase -->
        <script src="/__/firebase/init.js"></script>

		<?php 
			include 'body/header.php';
		?>

		
		<?php 
			include 'pages/'.$page.'.php';
		?>
			 
        
		<script src="http://www.youtube.com/iframe_api"></script>
    	<script src="vues/external_hosted/hammerjs/v2_0_2/hammer.min.js"></script>
    	<script src="vues/external_hosted/gsap/v1_18_0/TweenMax.min.js"></script>
    	<script src="http://www.google.com/jsapi"></script>
    	
		<script src="vues/static/2016/js/main.min.js"></script>
		<script>
			android.init();
		</script>

		<?php
			$pages_js = scandir('js/');
			if (in_array($page.'.func.js',$pages_js)) {
			  	?>
			  		<script src="js/<?= $page ?>.func.js"></script>
			  	<?php

			  }  
		?>

		<?php 
			include 'body/footer.php';
		?>

	</body>
</html>





