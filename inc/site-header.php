<?php
$siteTitle = 'SASS Grid Boilerplate';
$siteDescription = '';

$sanitizeOutput = false;
function sanitize_output($buffer) {
    $search = array( '/\>[^\S ]+/s', '/[^\S ]+\</s', '/(\s)+/s', '/<!--(.|\s)*?-->/' );
    $replace = array('>','<','\\1','');
    $buffer = preg_replace($search, $replace, $buffer);
    return '<!-- 

    Copyright © ' . date("Y") . ' | All Rights Reserved.

-->
' . $buffer;
}
if ($sanitizeOutput === true) { ob_start("sanitize_output"); } ?>
<!DOCTYPE html>
<html class="no-js" lang="">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<title><?php echo $siteTitle; ?></title>
<meta name="description" content="<?php echo $siteDescription; ?>">
<meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0, user-scalable=0, minimum-scale=1.0, maximum-scale=1.0">

<meta name="apple-mobile-web-app-title" content="<?php echo $siteTitle; ?>" />
<meta name="application-name" content="<?php echo $siteTitle; ?>" />
<meta name="msapplication-config" content="ico/browserconfig.xml" />
<meta name="theme-color" content="#ffffff" />
<link rel="apple-touch-icon" sizes="180x180" href="ico/apple-touch-icon-180.png" />
<link rel="manifest" href="ico/manifest.json" />
<link rel="icon" type="image/png" href="ico/favicon-32.png" sizes="32x32" />
<link rel="icon" type="image/png" href="ico/favicon-16.png" sizes="16x16" />
<link rel="icon" href="ico/android-chrome-192.png" sizes="192x192" />

<meta property="og:site_name" content="">
<meta property="og:title" content="">
<meta property="og:description" content="">
<meta property="og:image" content="">
<meta property="og:url" content="h">

<meta name="twitter:site" content="@username">
<meta name="twitter:title" content="">
<meta name="twitter:description" content="">
<meta name="twitter:image" content="">
<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:image:alt" content="">

<link rel="stylesheet" href="css/main.min.css">

<script src="js/vendor/modernizr-shiv.min.js"></script>
</head>

<body>
	
<!-- Wrapper -->
<div id="wrapper">
	