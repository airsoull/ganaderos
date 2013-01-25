<?php
$this->breadcrumbs=array(
	'Viña'=>array('index'),
	'Administrar',
);

$this->menu=array(
	array('label'=>'Listar Vina', 'url'=>array('index')),
	array('label'=>'Crear Vina', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$.fn.yiiGridView.update('vina-grid', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Administración Vinas</h1>


<?php #echo CHtml::link('Advanced Search','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'vina-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		#'id_vina',
		'nombre',
		'direccion',
		'telefono',
		'imagenPrincipal',
		'destacados',
		/*
		'descripcion',
		'actividades',
		*/
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
