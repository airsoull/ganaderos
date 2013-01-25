<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="es"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="es"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="es"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html lang="es"> <!--<![endif]-->
<head>
    
    <meta charset="utf-8">
    <?php
                $cs=Yii::app()->clientScript;
                $cs->scriptMap=array(
                        'jquery.js'=>false,
                        'jquery.ajaxqueue.js'=>false,
                        'jquery.metadata.js'=>false,
                );
                ?>
                <script src="http://code.jquery.com/jquery-1.7.1.min.js"></script>
                <?PHP
                #CGoogleApi::$bootstrapUrl = Yii::app()->theme->baseUrl.'/js/jquery-1.8.1.js'; // override default to work with SSL
                #echo CGoogleApi::init(); 
                
        ?>
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
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    
    <link rel="shortcut icon" type="image/x-icon" href="<?php echo Yii::app()->theme->baseUrl; ?>/images/logo.ico" />
    <link rel="stylesheet" href="<?php echo Yii::app()->theme->baseUrl; ?>/css/reset.css">
    <link rel="stylesheet" href="<?php echo Yii::app()->theme->baseUrl; ?>/css/style.css">
    <link rel="stylesheet" href="<?php echo Yii::app()->theme->baseUrl; ?>/css/camera.css">
    <link rel="stylesheet" href="<?php echo Yii::app()->theme->baseUrl; ?>/css/layout.css">
    <link rel="stylesheet" href="<?php echo Yii::app()->theme->baseUrl; ?>/css/skeleton.css">
    <link rel="stylesheet" href="<?php echo Yii::app()->theme->baseUrl; ?>/js/lb/css/lightbox.css">
    <link rel="stylesheet" href="<?php echo Yii::app()->theme->baseUrl; ?>/css/elastislide.css">
    <link rel="stylesheet" href="<?php echo Yii::app()->theme->baseUrl; ?>/css/visor.css">
    <?PHP if($this->pageTitle != 'Contacto') ?>
    <!--
        <script src="http://code.jquery.com/jquery-1.7.1.min.js"></script>
    -->
    <?PHP ?>
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.14/jquery-ui.min.js"></script>
    <script type="text/javascript" src="<?php echo Yii::app()->theme->baseUrl; ?>/js/jquery.iconmenu.js"></script>
    <script src="<?php echo Yii::app()->theme->baseUrl; ?>/js/jquery.mobile.customized.min.js"></script>
    <script src="<?php echo Yii::app()->theme->baseUrl; ?>/js/jquery.easing.1.3.js"></script>
    <script src="<?php echo Yii::app()->theme->baseUrl; ?>/js/camera.min.js"></script>
    <script src="<?php echo Yii::app()->theme->baseUrl; ?>/js/imagepreloader.js"></script>
    <script src="<?php echo Yii::app()->theme->baseUrl; ?>/js/portamento-min.js"></script>
    <script src="<?php echo Yii::app()->theme->baseUrl; ?>/js/print.js"></script>
    <script src="<?php echo Yii::app()->theme->baseUrl; ?>/js/lb/js/lightbox.js"></script>
    <script src="<?php echo Yii::app()->theme->baseUrl; ?>/js/jspdf.js"></script>
    <script src="<?php echo Yii::app()->theme->baseUrl; ?>/js/jquery.elastislide.js"></script>
    <script src="<?php echo Yii::app()->theme->baseUrl; ?>/js/gallery.js"></script>
    <script src="<?php echo Yii::app()->theme->baseUrl; ?>/js/jquery.tmpl.min.js"></script>
    <!--[if lt IE 9]>
        <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
        <script src="js/respond.src.js"></script>
    <![endif]-->
   <script>
       jQuery(document).ready(function(){
           
            jQuery('#camera_wrap_1').camera({
                height: '34%',
                loader: 'none',
                playPause: false
            });
            
            $('#sti-menu').iconmenu({
                animMouseenter  : {
                    'mText' : {speed : 200, easing : 'easeOutExpo', delay : 0, dir : 1},
                    'sText' : {speed : 600, easing : 'easeOutExpo', delay : 400, dir : 1},
                    'icon'  : {speed : 200, easing : 'easeOutExpo', delay : 0, dir : 1}
                    
                },
                animMouseleave  : {
                    'mText' : {speed : 200, easing : 'easeInExpo', delay : 150, dir : 1},
                    'sText' : {speed : 200, easing : 'easeInExpo', delay : 0, dir : 1},
                    'icon'  : {speed : 200, easing : 'easeInExpo', delay : 300, dir : 1}
                },
                defaultTextColor    : '#8fc122',
                defaultBgColor      : '#fff'
            });
       })
        preloadImages([
            'images/pag-hover.png'
        ])
   </script>

   <script id="img-wrapper-tmpl" type="text/x-jquery-tmpl"> 
            <div class="rg-image-wrapper">
                {{if itemsCount > 1}}
                    <div class="rg-image-nav">
                        <a href="#" class="rg-image-nav-prev">Previous Image</a>
                        <a href="#" class="rg-image-nav-next">Next Image</a>
                    </div>
                {{/if}}
                <div class="rg-image"></div>
                <div class="rg-loading"></div>
                <div class="rg-caption-wrapper">
                    <div class="rg-caption" style="display:none;color:#000000">
                        <p></p>
                    </div>
                </div>
            </div>
        </script>

</head>

<body id="home">

    <header>
        <div class="container">
            <div class="header-bg">
                <div class="clearfix">
                    <div class="sixteen columns">
                        <div class="clearfix">
                            <h1 id="site-title"><?php echo CHtml::link('Los Ganaderos', array('/index.php'), array('optionName'=>'optionValue')); ?></h1>
                            <?PHP $pagina = Pagina::model()->find(); ?>
                            <div class="phone"><?PHP echo $pagina->telefono; ?></div>
                            <ul>
                                <li style="float:left">

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
                                <li style="float:left;">
                                    <br>
                                    <!-- FACEBOOK -->
            <iframe src="//www.facebook.com/plugins/like.php?href=http%3A%2F%2Fwww.losganaderos.cl%2F&amp;send=false&amp;layout=button_count&amp;width=450&amp;show_faces=false&amp;action=like&amp;colorscheme=light&amp;font&amp;height=21" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:120px; height:21px;" allowTransparency="true"></iframe>

                                </li>
                                <li style="float:left;">
                                    <br>
                                    <!-- TWITTER -->
            <a href="https://twitter.com/share" class="twitter-share-button" data-url="http://www.losganaderos.cl" data-text="Restautant y parrilladas Los Ganaderos" data-lang="es" data-hashtags="LosGanaderos">Twittear</a>
<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src="//platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>

            
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="clearfix">
                <div class="sixteen columns">
                    <nav class="header">
                        <ul>
                            <li><?php echo CHtml::link('Restaurantes', array('/restaurant')); ?></li>
                            <li><?php echo CHtml::link('Cartas', array('/carta')); ?></li>
                            <li><?php echo CHtml::link('Club', array('/club')); ?></li>
                            <li><?php echo CHtml::link('Contacto', array('/contacto')); ?></li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </header>
 <?php echo $content; ?>
    <footer>
        <div class="container">
            <div class="sixteen columns">
                <div class="inner">
                    <div class="clearfix">
                        <div class="three columns alpha">
                            <div class="copyright">Los Ganaderos &copy; <?PHP echo date('Y'); ?></div>
                        </div>
                        <div class="seven columns">
                            <nav class="footer">
                                <ul>
                                    <li><?php echo CHtml::link('Restaurantes', array('/restaurant'), array('rel'=>'nofollow')); ?></li>
                                    <li><?php echo CHtml::link('Cartas', array('/carta'), array('rel'=>'nofollow')); ?></li>
                                    <li><?php echo CHtml::link('Viñas', array('/vinas')); ?></li>
                                    <li><?php echo CHtml::link('Club Ganaderos', array('/club'), array('rel'=>'nofollow')); ?></li>
                                    <li><?php echo CHtml::link('Contacto', array('/contacto'), array('rel'=>'nofollow')); ?></li> 
                                </ul>
                            </nav>
                        </div>
                        <div class="four columns omega offset-by-two">
                            <ul class="social-icons">
                                <li>Sitio Realizado por cris.andrs@gmail.com</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="clear"></div>
        </div>
    </footer>
</body>
</html>