<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html lang="en"> <!--<![endif]-->
<head>
    
    <meta charset="utf-8">
    <title><?php echo CHtml::encode($this->pageTitle); ?></title>
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    
    <link rel="stylesheet" href="<?php echo Yii::app()->theme->getBaseUrl(true); ?>/css/reset.css">
    <link rel="stylesheet" href="<?php echo Yii::app()->theme->getBaseUrl(true); ?>/css/style.css">
    <link rel="stylesheet" href="<?php echo Yii::app()->theme->getBaseUrl(true); ?>/css/camera.css">
    <link rel="stylesheet" href="<?php echo Yii::app()->theme->getBaseUrl(true); ?>/css/layout.css">
    <link rel="stylesheet" href="<?php echo Yii::app()->theme->getBaseUrl(true); ?>/css/skeleton.css">
    
    <script src="http://code.jquery.com/jquery-1.7.1.min.js"></script>
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.14/jquery-ui.min.js"></script>
    <script type="text/javascript" src="<?php echo Yii::app()->theme->baseUrl; ?>/js/jquery.iconmenu.js"></script>
    <script src="<?php echo Yii::app()->theme->getBaseUrl(true); ?>/js/jquery.mobile.customized.min.js"></script>
    <script src="<?php echo Yii::app()->theme->getBaseUrl(true); ?>/js/jquery.easing.1.3.js"></script>
    <script src="<?php echo Yii::app()->theme->getBaseUrl(true); ?>/js/camera.min.js"></script>
    <script src="<?php echo Yii::app()->theme->getBaseUrl(true); ?>/js/imagepreloader.js"></script>
    <script src="<?php echo Yii::app()->theme->getBaseUrl(true); ?>/js/portamento-min.js"></script>
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
                            <div class="phone" style="display:none"><?PHP echo $pagina->telefono; ?></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="clearfix">
                <div class="sixteen columns">
                    <nav class="header" style="display:none">
                        <ul>
                            <li><?php echo CHtml::link('Restaurantes', array('/restaurant')); ?></li>
                            <li><?php echo CHtml::link('Cartas', array('/carta')); ?></li>
                            <li><?php echo CHtml::link('Viñas', array('/index.php')); ?></li>
                            <li><?php echo CHtml::link('Contacto', array('/index.php')); ?></li>
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
                            <nav class="footer" style="display:none">
                                <ul>
                                    <li><?php echo CHtml::link('Restaurantes', array('/restaurant'), array('rel'=>'nofollow')); ?></li>
                                    <li><?php echo CHtml::link('Cartas', array('/carta'), array('rel'=>'nofollow')); ?></li>
                                    <li><?php echo CHtml::link('Viñas', array('/index.php'), array('rel'=>'nofollow')); ?></li>
                                    <li><?php echo CHtml::link('Contacto', array('/index.php'), array('rel'=>'nofollow')); ?></li> 
                                </ul>
                            </nav>
                        </div>
                        <div class="four columns omega offset-by-two">
                            <ul class="social-icons" style="display:none">
                                <li><a href="#"><img src="<?php echo Yii::app()->theme->baseUrl; ?>/images/facebook.png" alt=""/></a></li>
                                <li><a href="#"><img src="<?php echo Yii::app()->theme->baseUrl; ?>/images/twitter.png" alt=""/></a></li>
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