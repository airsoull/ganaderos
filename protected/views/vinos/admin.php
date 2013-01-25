<?php
$this->breadcrumbs=array(
	'Vinos'=>array('index'),
	'Administración',
);

$this->menu=array(
	array('label'=>'Listar Vinos', 'url'=>array('index')),
	array('label'=>'Crear Vinos', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$.fn.yiiGridView.update('vinos-grid', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Administración Vinos</h1>


<?php #echo CHtml::link('Advanced Search','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'vinos-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		#'id_vinos',
		'nombre',
		array('name'=>'id_vina', 'value'=>'$data->idVina->nombre'),
		'descripcion',
		'imagen',
		#'precio',
		array('name'=>'precio', 'value'=>'"$".$data->precio'),
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
