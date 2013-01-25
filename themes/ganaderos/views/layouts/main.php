<!DOCTYPE HTML>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta name="author" content="cris.andrs@gmail.com">
 <meta name="description" content="Retorant, Restaurant, Talca, Santiago, www.losganaderos.cl, los ganaderos, ensaladas, losganaderos, los ganaderos, ganaderos, carretera, camino, sur de chile, sur, Vitacura, sucursales, Sucusal Talca, sucursal Santiago, ganadero, parrilladas talca, talca, carnes, carnes a las brazas, carnes a las brasas, carne, parrillada, restaurante, restaurant, vinoteca, vinos, viña, cafeteria, autoservicio, eventos, restaurante, consome, ensaladas, postres, cumpleaños, musica en vivo, mas de 450 variedades de vinos talca carretera, Shareware Free to try">
<META name="keywords" content="en,a,de,por,para,con,el,la,los,las,un,uno,unos,chile,talca,Carnes, parrilldas talca, talca, carnes a las brazas, restaurant, restorante, vinoteca, viña, autoservicio, cafeteria">
<link rel="shortcut icon" type="image/x-icon" href="<?php echo Yii::app()->theme->baseUrl; ?>/images/logo.ico" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
<link rel="stylesheet" type="text/css" media="all" href="<?php echo Yii::app()->theme->baseUrl; ?>/css/css.css">
<link rel="stylesheet" type="text/css" media="all" href="<?php echo Yii::app()->theme->baseUrl; ?>/js/lb/css/lightbox.css">
<script type="text/javascript" src="<?php echo Yii::app()->theme->baseUrl; ?>/js/jquery.js"></script>
<script type="text/javascript" src="<?php echo Yii::app()->theme->baseUrl; ?>/js/plugin.js"></script>
<script type="text/javascript" src="<?php echo Yii::app()->theme->baseUrl; ?>/js/print.js"></script>
<script type="text/javascript" src="<?php echo Yii::app()->theme->baseUrl; ?>/js/lb/js/lightbox.js"></script>

<title><?php echo CHtml::encode($this->pageTitle); ?></title>
<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-35019294-1']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>
</head>
<body>
<div id="cerrar">
</div>
<div id="sidebar">
	<h1>
		<div id="logo">
			<img src="<?php echo Yii::app()->theme->baseUrl; ?>/images/logo.png" width="220" height="118">
		</div>
    </h1>
    
    <nav>
    	<ul>
        	<li><?PHP echo CHtml::link('Inicio', array('/index.php')); ?></li>
            <li><?PHP echo CHtml::link('¿Quiénes Somos?', array('/quienessomos')); ?></li>
            <li><?PHP echo CHtml::link('Carta', array('/carta')); ?></li>
            <li><?PHP echo CHtml::link('Carta Vinos', array('/vinedos')); ?></li>
            <li><?PHP echo CHtml::link('Contacto', array('/contacto')); ?></li>
        </ul>
    </nav>
    <div class="menu">
		<img src="<?php echo Yii::app()->theme->baseUrl; ?>/images/logo.png" width="80" height="43">
    <br>
    <select name="">
      <option>Menú</option>
      <option value="<?PHP echo Yii::app()->request->baseUrl.'/index.php'; ?>">Inicio</option>
      <option value="<?PHP echo Yii::app()->request->baseUrl.'/quienessomos'; ?>">¿Quiénes Somos?</option>
      <option value="<?PHP echo Yii::app()->request->baseUrl.'/carta'; ?>">Carta</option>
      <option value="<?PHP echo Yii::app()->request->baseUrl.'/vinedos'; ?>">Carta Vinos</option>
      <option value="<?PHP echo Yii::app()->request->baseUrl.'/contacto'; ?>">Contacto</option>
    </select>
    </div>
</div>
<div id="top">
	<div class="social">
    	<ul>
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
            <!-- FACEBOOK -->
            <iframe src="//www.facebook.com/plugins/like.php?href=http%3A%2F%2Fwww.losganaderos.cl%2F&amp;send=false&amp;layout=button_count&amp;width=450&amp;show_faces=false&amp;action=like&amp;colorscheme=light&amp;font&amp;height=21" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:120px; height:21px;" allowTransparency="true"></iframe>

            </li>
			<li>
            <!-- TWITTER -->
            <a href="https://twitter.com/share" class="twitter-share-button" data-url="http://www.losganaderos.cl" data-text="Restautant y parrilladas Los Ganaderos" data-lang="es" data-hashtags="LosGanaderos">Twittear</a>
<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src="//platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>

            </li>
		</ul>
    </div>
    <?PHP 
    $pagina = Pagina::model();
    $pagina = $pagina->find();
    ?>
    <div class="telefono">
    Llamanos <strong><?PHP echo $pagina->telefono ?></strong>
    </div>
</div>
<?php echo $content; ?>
<footer>
<ul>
    <li><?PHP echo CHtml::link('Inicio', array('/index.php'), array('rel'=>'nofollow')); ?></li>
    <li><?PHP echo CHtml::link('¿Quiénes Somos?', array('/quienessomos'), array('rel'=>'nofollow')); ?></li>
    <li><?PHP echo CHtml::link('Carta', array('/carta'), array('rel'=>'nofollow')); ?></li>
    <li><?PHP echo CHtml::link('Carta Vinos', array('/vinedos'), array('rel'=>'nofollow')); ?></li>
    <li><?PHP echo CHtml::link('Contacto', array('/contacto'), array('rel'=>'nofollow')); ?></li>
    <li><a href="mailto:cris.andrs@gmail.com">Sitio desarrollado por cris.andrs@gmail.com</a></li>
</ul>
</footer>
</body>
</html>
