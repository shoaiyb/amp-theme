<?php global $Wcms ?>

<!doctype html>
<html ⚡ lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- Meta -->
        <title><?= $Wcms->get('config', 'siteTitle') ?> - <?= $Wcms->page('title') ?></title>
	<meta name="description" content="<?= $Wcms->page('description') ?>">
	<meta name="keywords" content="<?= $Wcms->page('keywords') ?>">
        <!-- Open Graph -->
	<meta property="og:url" content="<?= $this->url() ?>" />
	<meta property="og:type" content="website" />
	<meta property="og:site_name" content="<?= $Wcms->get('config', 'siteTitle') ?>" />
	<meta property="og:title" content="<?= $Wcms->page('title') ?>" />
	<meta name="twitter:site" content="<?= $this->url() ?>" />
	<meta name="twitter:title" content="<?= $Wcms->get('config', 'siteTitle') ?> - <?= $Wcms->page('title') ?>" />
	<meta name="twitter:description" content="<?= $Wcms->page('description') ?>" />


	<link rel="canonical" href=".">
	<link rel="preload" as="script" href="https://cdn.ampproject.org/v0.js">
        <script async src="https://cdn.ampproject.org/v0.js"></script>
	<script async custom-element="amp-sidebar" src="https://cdn.ampproject.org/v0/amp-sidebar-0.1.js"></script>
        <!-- Import other AMP Extensions here -->
        <style amp-custom>
		.hamburger {
  padding-left: 10px;
}
.sidebar {
  padding: 10px;
  margin: 0;
}
.sidebar > li {
  list-style: none;
  margin-bottom:10px;
}
.sidebar a {
  text-decoration: none;
}
.close-sidebar {
  font-size: 1.5em;
  padding-left: 5px;
}
        /* Add your styles here */
		/*!
 * Bootstrap v3.3.7 (http://getbootstrap.com)
 * Copyright 2011-2016 Twitter, Inc.
 * Licensed under MIT (https://github.com/twbs/bootstrap/blob/master/LICENSE)
 *//*! normalize.css v3.0.3 | MIT License | github.com/necolas/normalize.css */html{font-family:sans-serif;-webkit-text-size-adjust:100%;-ms-text-size-adjust:100%}body{margin:0}footer{display:block}/*! Source: https://github.com/h5bp/html5-boilerplate/blob/master/src/css/main.css */@media print{*,:after,:before{color:#000!important;text-shadow:none!important;background:0 0!important;-webkit-box-shadow:none!important;box-shadow:none!important}}@font-face{font-family:'Glyphicons Halflings';src:url(../fonts/glyphicons-halflings-regular.eot);src:url(../fonts/glyphicons-halflings-regular.eot?#iefix) format('embedded-opentype'),url(../fonts/glyphicons-halflings-regular.woff2) format('woff2'),url(../fonts/glyphicons-halflings-regular.woff) format('woff'),url(../fonts/glyphicons-halflings-regular.ttf) format('truetype'),url(../fonts/glyphicons-halflings-regular.svg#glyphicons_halflingsregular) format('svg')}*{-webkit-box-sizing:border-box;-moz-box-sizing:border-box;box-sizing:border-box}:after,:before{-webkit-box-sizing:border-box;-moz-box-sizing:border-box;box-sizing:border-box}html{font-size:10px;-webkit-tap-highlight-color:rgba(0,0,0,0)}body{font-family:"Helvetica Neue",Helvetica,Arial,sans-serif;font-size:14px;line-height:1.42857143;color:#333;background-color:#fff}.text-right{text-align:right}.container{padding-right:15px;padding-left:15px;margin-right:auto;margin-left:auto}@media (min-width:768px){.container{width:750px}}@media (min-width:992px){.container{width:970px}}@media (min-width:1200px){.container{width:1170px}}.container-fluid{padding-right:15px;padding-left:15px;margin-right:auto;margin-left:auto}.col-sm-4,.col-sm-8,.col-xs-12{position:relative;min-height:1px;padding-right:15px;padding-left:15px}.col-xs-12{float:left}.col-xs-12{width:100%}@media (min-width:768px){.col-sm-4,.col-sm-8{float:left}.col-sm-8{width:66.66666667%}.col-sm-4{width:33.33333333%}}.container-fluid:after,.container-fluid:before,.container:after,.container:before{display:table;content:" "}.container-fluid:after,.container:after{clear:both}@-ms-viewport{width:device-width}.visible-xs{display:none!important}@media (max-width:767px){.visible-xs{display:block!important}}
/*# sourceMappingURL=bootstrap.min.css.map */
html {
	min-height: 100%;
	position: relative;
}

body {
	color: #fff;
	background: #eee;
	margin-bottom: 100px;
	font-family: Lucida Sans Unicode, Verdana;
}
*:focus {outline: none;}

.spacer20 {height: 20px;}
.padding20 {padding: 20px;}
.rounded5 {border-radius: 5px;}

.grayFont {color: #444;}
.goldBackground {background: #ddd077;}
.whiteBackground {background: #fff;}

footer {
	bottom: 0;
	width: 100%;
	position: absolute;
	background: #ddd077;
}
        </style>
	<style amp-boilerplate>body{-webkit-animation:-amp-start 8s steps(1,end) 0s 1 normal both;-moz-animation:-amp-start 8s steps(1,end) 0s 1 normal both;-ms-animation:-amp-start 8s steps(1,end) 0s 1 normal both;animation:-amp-start 8s steps(1,end) 0s 1 normal both}@-webkit-keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}@-moz-keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}@-ms-keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}@-o-keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}@keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}</style><noscript><style amp-boilerplate>body{-webkit-animation:none;-moz-animation:none;-ms-animation:none;animation:none}</style></noscript>
</head>
<body>
	<?= $Wcms->settings() ?>
	<?= $Wcms->alerts() ?>
	
      <header class="headerbar">
       <div role="button" on="tap:sidebar1.toggle" tabindex="0" class="hamburger">&#9776;</div>
       <div class="site-name"><?= $Wcms->get('config','siteTitle') ?></div>
      </header>
<amp-sidebar id="sidebar1" layout="nodisplay" side="left">
       <div role="button" aria-label="close sidebar" on="tap:sidebar1.toggle" tabindex="0" class="close-sidebar">✕</div>
  <ul class="sidebar">
    <?= $Wcms->menu() ?>
  </ul>
</amp-sidebar>
<div class="container">
		<div class="col-xs-12 col-sm-8">
			<div class="whiteBackground grayFont padding20 rounded5">
				<?=wCMS::page('content')?>
			</div>
		</div>
		<div class="col-xs-12 col-sm-4">
			<div class="visible-xs spacer20"></div>
			<div class="goldBackground padding20 rounded5">
				<?=wCMS::block('subside')?>
			</div>
		</div>
	</div>

	<footer class="container-fluid">
		<div class="padding20 text-right">
			<?=wCMS::footer()?>
		</div>
	</footer>
<?=wCMS::js()?>
</body>
</html>
