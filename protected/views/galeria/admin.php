<?php
$this->breadcrumbs=array(
	'Galería'=>array('index'),
	'Administrar',
);

$this->menu=array(
	array('label'=>'Listar Galería', 'url'=>array('index')),
	array('label'=>'Crear Galería', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$.fn.yiiGridView.update('galeria-grid', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Administrar Galería</h1>


<?php #echo CHtml::link('Advanced Search','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'galeria-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		#'id_galeria',
		#'id_restaurantes',
		array(
			'name'=>'id_restaurantes',
			'value'=>'$data->idRestaurantes->nombre',
		),
		'imagen',
		'descripcion',
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
