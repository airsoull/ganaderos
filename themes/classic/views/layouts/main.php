<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="language" content="en" />

	<!-- blueprint CSS framework -->
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->theme->baseUrl; ?>/css/screen.css" media="screen, projection" />
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->theme->baseUrl; ?>/css/print.css" media="print" />
	<link rel="stylesheet" type="text/css" media="all" href="<?php echo Yii::app()->theme->baseUrl; ?>/js/lb/css/lightbox.css">
	<!--[if lt IE 8]>
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->theme->baseUrl; ?>/css/ie.css" media="screen, projection" />
	<![endif]-->

	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->theme->baseUrl; ?>/css/main.css" />
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->theme->baseUrl; ?>/css/form.css" />

	


	<title><?php echo CHtml::encode($this->pageTitle); ?></title>
</head>

<body>

<div class="container" id="page">

	<div id="header">
		<div id="logo"><?php echo CHtml::encode(Yii::app()->name); ?> - ADMINISTRACIÓN</div>
	</div><!-- header -->
	<?PHP if(!Yii::app()->user->isGuest){ ?>
	<div style="text-align:right">
		<?php echo CHtml::link('Salir ('.Yii::app()->user->name.')', array('/site/logout'), array('optionName'=>'optionValue')); ?>
	</div>
	<?PHP } ?>
	<div id="mainmenu">
		<?php $this->widget('zii.widgets.CMenu',array(
			'items'=>array(
				array('label'=>'Página', 'url'=>array('/pagina/index'), 'visible'=>!Yii::app()->user->isGuest),
				array('label'=>'Club', 'url'=>array('clubs/index'), 'visible'=>!Yii::app()->user->isGuest),
                                array('label'=>'Restaurantes', 'url'=>array('restaurantes/index'), 'visible'=>!Yii::app()->user->isGuest),
                                array('label'=>'Galería', 'url'=>array('galeria/index'), 'visible'=>!Yii::app()->user->isGuest),
                                array('label'=>'Imagenes inicio', 'url'=>array('inicio/index'), 'visible'=>!Yii::app()->user->isGuest),
                                array('label'=>'Categoría alimentos', 'url'=>array('categoriaalimentos/index'), 'visible'=>!Yii::app()->user->isGuest),
                                array('label'=>'Menú Comida', 'url'=>array('menucomida/index'), 'visible'=>!Yii::app()->user->isGuest),
                                array('label'=>'Alimentos', 'url'=>array('alimentos/index'), 'visible'=>!Yii::app()->user->isGuest),
                                array('label'=>'Viñas', 'url'=>array('vina/index'), 'visible'=>!Yii::app()->user->isGuest),
                                array('label'=>'Vinos', 'url'=>array('vinos/index'), 'visible'=>!Yii::app()->user->isGuest),
				#array('label'=>'About', 'url'=>array('/site/page', 'view'=>'about')),
				#array('label'=>'Contact', 'url'=>array('/site/contact')),
                                array('label'=>'Mail masivos', 'url'=>array('/mail/admin'), 'visible'=>!Yii::app()->user->isGuest),
				#array('label'=>'Login', 'url'=>array('/site/login'), 'visible'=>Yii::app()->user->isGuest),
				#array('label'=>'Logout ('.Yii::app()->user->name.')', 'url'=>array('/site/logout'), 'visible'=>!Yii::app()->user->isGuest)
			),
		)); ?>
	</div><!-- mainmenu -->
	<?php if(isset($this->breadcrumbs)):?>
		<?php $this->widget('zii.widgets.CBreadcrumbs', array(
			'links'=>$this->breadcrumbs,
		)); ?><!-- breadcrumbs -->
	<?php endif?>

	<?php echo $content; ?>
                
	<div class="clear"></div>

	<div id="footer">
            <?PHP /*
		Copyright &copy; <?php echo date('Y'); ?> by My Company.<br/>
		All Rights Reserved.<br/>
		<?php echo Yii::powered(); ?>
             * 
             */ ?>
	</div><!-- footer -->

</div><!-- page -->

</body>
<script type="text/javascript" src="<?php echo Yii::app()->theme->baseUrl; ?>/js/lb/js/lightbox.js"></script>
</html>
