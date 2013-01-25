<?PHP $this->pageTitle = '¿Quiénes Somos?'; ?>
<div id="quienes">
	<div id="head">
		<h1>¿Quiénes Somos?</h1>
	</div>
	<div id="descripcion">
		<div id="imgprincipal">
			<?php echo CHtml::image(Yii::app()->request->baseUrl.'/imagenes/'.$model->imagen, 'Quienes Somos', array('optionName'=>'optionValue')); ?>
		</div>
		<div style="margin-left: 5%; margin-right: 5%;"> <?PHP #id="texto" ?>
			<?PHP echo $model->descripcion ?>
		</div>
		<div id="ancho">
		</div>
	</div>
</div>

<script type="text/javascript">

		var $mobile = ($(document).width() < 640 ? true : false);
		if($mobile){
			/*
			$('#texto, #descripcion, #quienes').css('height', '1200px');
			console.log($('#texto').css('height'));
			*/
		}
	
</script>