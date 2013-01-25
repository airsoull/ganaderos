<?php
$this->breadcrumbs=array(
	'Mail'=>array('index'),
	'Administrar',
);

$this->menu=array(
	array('label'=>'Listar Mail', 'url'=>array('index')),
	array('label'=>'Crear Mail', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$.fn.yiiGridView.update('mail-grid', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Administrar Mail</h1>

<?php echo CHtml::link('Envio Masivo', array('/mailenviar/create'), array('optionName'=>'optionValue')); ?>
&nbsp;&nbsp;&nbsp;<?php echo CHtml::link('Mensajes', array('/mensaje'), array('optionName'=>'optionValue')); ?>

<?php #echo CHtml::link('Advanced Search','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'mail-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		#'id_mail',
		'nombre',
		'mail',
		#'idenvio',
		array(
			'name'=>'idenvio',
			'value'=>'$data->idenvio0->descripcion',
		),
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
