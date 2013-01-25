<!DOCTYPE html>
<html dir="ltr" lang="es-ES" xmlns="http://www.w3.org/1999/xhtml" class="csstransforms csstransforms3d csstransitions">
<!--<![endif]-->
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<meta charset="UTF-8">
	<meta name="author" content="cris.andrs@gmail.com">
    <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1,user-scalable=no">
	<meta name="format-detection" content="telephone=no">
    <meta name="description" content="Retorant, Restaurant, Talca, Santiago, www.losganaderos.cl, los ganaderos, ensaladas, losganaderos, los ganaderos, ganaderos, carretera, camino, sur de chile, sur, Vitacura, sucursales, Sucusal Talca, sucursal Santiago, ganadero, parrilladas talca, talca, carnes, carnes a las brazas, carnes a las brasas, carne, parrillada, restaurante, restaurant, vinoteca, vinos, viña, cafeteria, autoservicio, eventos, restaurante, consome, ensaladas, postres, cumpleaños, musica en vivo, mas de 450 variedades de vinos talca carretera, Shareware Free to try">
<META name="keywords" content="en,a,de,por,para,con,el,la,los,las,un,uno,unos,chile,talca,Carnes, parrilldas talca, talca, carnes a las brazas, restaurant, restorante, vinoteca, viña, autoservicio, cafeteria">
	
	<title><?php echo CHtml::encode($this->pageTitle); ?></title>

<link rel="stylesheet" type="text/css" media="all" href="<?php echo Yii::app()->theme->baseUrl; ?>/css/style.css">
<link rel="stylesheet" type="text/css" media="all" href="<?php echo Yii::app()->theme->baseUrl; ?>/css/pagina.css">
<!-- Favicon -->
<link rel="shortcut icon" type="image/x-icon" href="<?php echo Yii::app()->theme->baseUrl; ?>/images/logo.ico" />

     <!--[if lt IE 9]><script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
	
<!--		
<style id="wrc-middle-css" type="text/css">.wrc_whole_window{	display: none;	position: fixed; 	z-index: 2147483647;	background-color: rgba(40, 40, 40, 0.9);	word-spacing: normal;	margin: 0px;	padding: 0px;	border: 0px;	left: 0px;	top: 0px;	width: 100%;	height: 100%;	line-height: normal;	letter-spacing: normal;}.wrc_middle_main {	font-family: Segoe UI, Arial Unicode MS, Arial, Sans-Serif;	font-size: 14px;	width: 600px;	height: auto;	margin: 0px auto;	margin-top: 15%;    background: url(chrome-extension://icmlaeflemplmjndnaapfdbbnpncnbda/skin/images/background-body.jpg) repeat-x left top;	background-color: rgb(39, 53, 62);}.wrc_middle_logo {    background: url(chrome-extension://icmlaeflemplmjndnaapfdbbnpncnbda/skin/images/logo.jpg) no-repeat left bottom;    width: 140px;    height: 42px;    color: orange;    display: table-cell;    text-align: right;    vertical-align: middle;}.wrc_icon_warning {	margin: 20px 10px 20px 15px;	float: left;	background-color: transparent;}.wrc_middle_title {    color: #b6bec7;	height: auto;    margin: 0px auto;	font-size: 2.2em;	white-space: nowrap;	text-align: center;}.wrc_middle_hline {    height: 2px;	width: 100%;    display: block;}.wrc_middle_description {	text-align: center;	margin: 15px;	font-size: 1.4em;	padding: 20px;	height: auto;	color: white;	min-height: 3.5em;}.wrc_middle_actions_main_div {	margin-bottom: 15px;	text-align: center;}.wrc_middle_actions_blue_button {	-moz-appearance: none;	border-radius: 7px;	-moz-border-radius: 7px/7px;	border-radius: 7px/7px;	background-color: rgb(0, 173, 223) !important;	display: inline-block;	width: auto;	cursor: Pointer;	border: 2px solid #00dddd;}.wrc_middle_actions_blue_button:hover {	background-color: rgb(0, 159, 212) !important;}.wrc_middle_actions_blue_button:active {	background-color: rgb(0, 146, 200) !important;	border: 2px solid #00aaaa;}.wrc_middle_actions_blue_button div {	display: inline-block;	width: auto;	cursor: Pointer;	margin: 3px 10px 3px 10px;	color: white;	font-size: 1.2em;	font-weight: bold;}.wrc_middle_action_low {	font-size: 0.9em;	white-space: nowrap;	cursor: Pointer;	color: grey !important;	margin: 10px 10px 0px 10px;	text-decoration: none;}.wrc_middle_action_low:hover {	color: #aa4400 !important;}.wrc_middle_actions_rest_div {	padding-top: 5px;	white-space: nowrap;	text-align: center;}.wrc_middle_action {	white-space: nowrap;	cursor: Pointer;	color: red !important;	font-size: 1.2em;	margin: 10px 10px 0px 10px;	text-decoration: none;}.wrc_middle_action:hover {	color: #aa4400 !important;}</style><script id="wrc-script-middle_window" type="text/javascript" language="JavaScript">var g_inputsCnt = 0;var g_InputThis = new Array(null, null, null, null);var g_alerted = false;/* we test the input if it includes 4 digits   (input is a part of 4 inputs for filling the credit-card number)*/function is4DigitsCardNumber(val){	var regExp = new RegExp('[0-9]{4}');	return (val.length == 4 && val.search(regExp) == 0);}/* testing the whole credit-card number 19 digits devided by three '-' symbols or   exactly 16 digits without any dividers*/function isCreditCardNumber(val){	if(val.length == 19)	{		var regExp = new RegExp('[0-9]{4}-[0-9]{4}-[0-9]{4}-[0-9]{4}');		return (val.search(regExp) == 0);	}	else if(val.length == 16)	{		var regExp = new RegExp('[0-9]{4}[0-9]{4}[0-9]{4}[0-9]{4}');		return (val.search(regExp) == 0);	}	return false;}function CheckInputOnCreditNumber(self){	if(g_alerted)		return false;	var value = self.value;	if(self.type == 'text')	{		if(is4DigitsCardNumber(value))		{			var cont = true;			for(i = 0; i < g_inputsCnt; i++)				if(g_InputThis[i] == self)					cont = false;			if(cont && g_inputsCnt < 4)			{				g_InputThis[g_inputsCnt] = self;				g_inputsCnt++;			}		}		g_alerted = (g_inputsCnt == 4);		if(g_alerted)			g_inputsCnt = 0;		else			g_alerted = isCreditCardNumber(value);	}	return g_alerted;}function CheckInputOnPassword(self){	if(g_alerted)		return false;	var value = self.value;	if(self.type == 'password')	{		g_alerted = (value.length > 0);	}	return g_alerted;}function onInputBlur(self, bRatingOk, bFishingSite){	var bCreditNumber = CheckInputOnCreditNumber(self);	var bPassword = CheckInputOnPassword(self);	if((!bRatingOk || bFishingSite == 1) && (bCreditNumber || bPassword) )	{		var warnDiv = document.getElementById("wrcinputdiv");		if(warnDiv)		{			/* show the warning div in the middle of the screen */			warnDiv.style.left = "0px";			warnDiv.style.top = "0px";			warnDiv.style.width = "100%";			warnDiv.style.height = "100%";			document.getElementById("wrc_warn_fs").style.display = 'none';			document.getElementById("wrc_warn_cn").style.display = 'none';			if(bFishingSite)				document.getElementById("wrc_warn_fs").style.display = 'block';			else				document.getElementById("wrc_warn_cn").style.display = 'block';			warnDiv.style.display = 'block';		}	}}</script>
-->
</head>


<body id="body" class="home page page-id-8 page-template page-template-template-portfolio-php closedSidebars openedSkie Orange Autohide Left Fill Default">
	
	<div id="sidebar" style="margin-top: 0px; margin-left: 0px; ">
	
		<header id="header">
			<div id="logo" style="width: auto; margin-left: 0px; ">
				<a href="#" style="color: rgb(96, 96, 96); ">
				<h1>
					<div>
						<img src="<?php echo Yii::app()->theme->baseUrl; ?>/images/logo.png" alt="Los Ganaderos" width="200" height="120" id="log">
						<div id="logDos" style="display:none">Los Ganaderos</div>
					</div>
				</h1>
				</a>
			</div>
			<p id="tagline">&nbsp;<br><br><br><br></p>
		</header>

		<nav id="menu">


			<ul id="menu-main-menu" class="main-menu">
				<li id="menu-item-1000" class="parent opened"><p><?PHP echo CHtml::link('Inicio', array('/index.php')); ?></p></li>
				<li id="menu-item-1000" class="parent opened"><p><?PHP echo CHtml::link('¿Quiénes Somos?', array('/quienessomos')); ?></p></li>
				<li id="menu-item-1000" class="parent opened"><p><?PHP echo CHtml::link('Carta', array('#')); ?></p></li>
				<li id="menu-item-1000" class="parent opened"><p><?PHP echo CHtml::link('Contacto', array('#')); ?></p></li>
			</ul>
		</nav>

				<form id="responsiveMenu">
			<span class="select-replace-cover" style="display: inline-block; position: relative; top: 0px; left: 0px; z-index: 0; vertical-align: middle; text-align: left; width: 200px; "><select style="opacity: 0; top: 0px; left: 0px; z-index: 1; position: absolute; visibility: visible; display: inline; ">
				<option selected="" data-href="#">Menú</option>
				<option data-href="index.php">Inicio</option>
				<option data-href="quienessomos">¿Quiénes Somos?</option>
				<option data-href="#">Carta</option>
				<option data-href="#">Contacto</option>		
			</select>
		</span>
		</form>
		
		<footer id="copy">
			<p>GANADEROS &copy; <?php echo date('Y'); ?> </p>
		</footer>

		<a href="#" id="close" class="openIcon">Cerrar</a>

	</div>
		
	<div id="content" class="clearfix">

		<div style="margin-left: 0px; ">
		
        
        
        
        <div id="principal">
        	<?php echo $content; ?>
        </div>
        
        
        
        
        
        
        
</div>

	<!-- top footer -->
	<footer class="footer" id="topFooter" style="margin-left: 0px; ">
					<div class="left">
				<div id="social-widget-2" class="widget clearfix social" style="padding-left: 0px; margin-left: auto; ">
                <span class="hidden">Redes sociales</span>
                <ul class="socialList clearfix">
                
                
                <li>
                <!-- Coloca esta etiqueta en el lugar en el que deseas que se publique el botón de +1. -->
<g:plusone size="medium"></g:plusone>

<!-- Coloca esta función de publicación donde corresponda. -->
<script type="text/javascript">
  window.___gcfg = {lang: 'es-419'};

  (function() {
    var po = document.createElement('script'); po.type = 'text/javascript'; po.async = true;
    po.src = 'https://apis.google.com/js/plusone.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(po, s);
  })();
</script>
                </li>
                
                
                <li>
                <iframe src="//www.facebook.com/plugins/like.php?href=http%3A%2F%2Fwww.losganaderos.cl%2F&amp;send=false&amp;layout=button_count&amp;width=450&amp;show_faces=false&amp;action=like&amp;colorscheme=light&amp;font&amp;height=21" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:120px; height:21px;" allowTransparency="true"></iframe>
                </li>
                
                
                
                <li>
                <a href="https://twitter.com/share" class="twitter-share-button" data-url="http://www.losganaderos.cl" data-text="Restautant y parrilladas Los Ganaderos" data-lang="es" data-hashtags="LosGanaderos">Twittear</a>
<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src="//platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
                </li>
                <!--<li><a target="_blank" class="linkedin socialHover" href="#" style="color: rgb(96, 96, 96); opacity: 0; background-position: -18px -1054px; ">linkedin icon</a>
                <a target="_blank" class="linkedin" href="#">linkedin icon</a></li>
                <li><a target="_blank" class="flickr socialHover" href="#" style="color: rgb(96, 96, 96); opacity: 0; background-position: -18px -1072px; ">flickr icon</a>
                <a target="_blank" class="flickr" href="#">flickr icon</a></li>
                <li><a target="_blank" class="skype socialHover" href="#" style="color: rgb(96, 96, 96); opacity: 1; background-position: -18px -1090px; ">skype icon</a>
                <a target="_blank" class="skype" href="#">skype icon</a></li>-->
                </ul>
                </div><hr class="widget_separator"><div id="search-2" class="widget clearfix widget_search" style="padding-left: 0px; margin-left: auto; ">
	<!--<form role="search" method="get" id="searchform" class="searchBox" action="./WowWay Portfolio Theme   Just another unique and incredibly interactive WordPress Theme_files/WowWay Portfolio Theme   Just another unique and incredibly interactive WordPress Theme.htm">
		<label class="screen-reader-text hidden" for="s">Search for:</label>
		<input type="text" data-value="Type and hit Enter" value="Type and hit Enter" name="s" id="s" class="">
		<!--<input type="submit" id="searchsubmit" value="Search" />-->
   <!--</form>--></div>			</div>
							<div class="right" style="margin-right: 0px; ">
				<div id="phone-widget-2" class="widget clearfix phone" style="padding-left: 0px; margin-left: auto; "><span class="hidden">Número teléfonico</span><p class="phoneNumber">Llamanos <strong>0123-456789</strong></p></div>			</div>
			</footer>

	<!-- bottom footer -->
	<footer class="footer" id="bottomFooter" style="margin-left: 0px; ">
					<div class="left">
				<div id="nav_menu-2" class="widget clearfix widget_nav_menu" style="padding-left: 0px; margin-left: auto; ">
                <div class="menu-footer-menu-container">
                	<ul id="menu-footer-menu" class="menu">
                    	<!--<li id="menu-item-1007" class="menu-item menu-item-type-post_type menu-item-object-page current-menu-item page_item page-item-8 current_page_item menu-item-1007">
                        <a href="./WowWay Portfolio Theme   Just another unique and incredibly interactive WordPress Theme_files/WowWay Portfolio Theme   Just another unique and incredibly interactive WordPress Theme.htm">Portfolio</a></li>-->
<li id="menu-item-1006" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1006"><?PHP echo CHtml::link('¿Quiénes Somos?', array('/quienessomos')); ?></li>
<li id="menu-item-995" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-995"><a href="#">Servicios</a></li>
<li id="menu-item-1005" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1005"><a href="#">Contacto</a></li>
<?PHP #<li id="menu-item-994" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-994"><a href="#">Terminos de uso</a></li>?>
</ul></div></div>			</div>
				<a href="#" id="top">Arriba <span>↑</span></a>
	</footer>

</div>


<div id="scripts">

	
	
	
		<style type="text/css">
			#contactMapHolder {
				background:none;
			}
		</style>

	
	<div id="mobileCheck"></div>
        
	<script type="text/javascript" src="<?php echo Yii::app()->theme->baseUrl; ?>/js/jquery.js"></script>
        <script type="text/javascript" src="<?php echo Yii::app()->theme->baseUrl; ?>/js/plugins.min.js"></script>
        <script type="text/javascript" src="<?php echo Yii::app()->theme->baseUrl; ?>/js/scripts.js"></script>

	
	
	<p id="oldie">Este sitio esta hecho para trabajar en navegadores modernos <a href="https://www.google.com/chrome/">Porfavor actualice</a></p>

</div>


</body></html>