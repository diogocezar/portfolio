<head>
		<title><?php echo (empty($t) ? $i->getConfig('head', 'title') : $t) ?></title>
		<meta charset="utf-8">
		<meta name="keywords" content="<?php $i->getConfig('head', 'keywords'); ?>">
		<meta name="viewport" content="<?php $i->getConfig('head', 'viewport'); ?>">
		<link href="<?php echo $p ?>images/favicon.png" rel="icon" type="image/x-icon" />
		<meta name="description" content="<?php $i->getConfig('head', 'description'); ?>">
		<meta name="publisher" content="<?php $i->getConfig('head', 'publisher'); ?>">
		<meta name="author" content="<?php $i->getConfig('head', 'author'); ?>">
		<meta name="robots" content="<?php $i->getConfig('head', 'robots'); ?>">
		<meta property="og:title" content="<?php $i->getConfig('head', 'og_title'); ?>">
		<meta property="og:description" content="<?php $i->getConfig('head', 'og_description'); ?>">
		<meta property="og:site_name" content="<?php $i->getConfig('head', 'og_site_name'); ?>">
		<meta property="og:image" content="<?php $i->getConfig('head', 'og_image'); ?>">
		<meta property="og:url" content="<?php $i->getConfig('head', 'og_url'); ?>">
		<link href="<?php echo $p ?>css/bootstrap/bootstrap.min.css" rel="stylesheet">
		<link href="<?php echo $p ?>css/shared/shared.css" rel="stylesheet">
		<link href="<?php echo $p ?>css/fonts/fonts.css" rel="stylesheet">
		<link href="<?php echo $p ?>css/libs/owl/owl.carousel.css" rel="stylesheet">
		<link href='https://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
		<!--[if lt IE 9]><script src="<?php echo $p ?>js/bootstrap/ie.fix/ie8.responsive.file.warning.js"></script><![endif]-->
		<script src="<?php echo $p ?>js/bootstrap/ie.fix/ie.emulation.modes.warning.js"></script>
		<script src="<?php echo $p ?>js/bootstrap/ie.fix/ie10.viewport.bug.workaround.js"></script>
		<!--[if lt IE 9]>
			<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
			<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->
		<script>
		  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
		  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
		  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
		  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');
		  ga('create', 'UA-60375903-1', 'auto');
		  ga('send', 'pageview');
		</script>
		<?php if(!empty($e) && is_array($e)) foreach ($e as $key => $value){ ?><link href="<?php echo $p ?>css/public/<?php echo $value ?>" rel="stylesheet">
		<?php } ?>
</head>
	