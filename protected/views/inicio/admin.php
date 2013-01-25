<?php
$this->breadcrumbs=array(
	'Inicio'=>array('index'),
	'Administrar',
);

$this->menu=array(
	array('label'=>'Listar Inicio', 'url'=>array('index')),
	array('label'=>'Crear Inicio', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$.fn.yiiGridView.update('inicio-grid', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Administración Inicio</h1>

<?php #echo CHtml::link('Advanced Search','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->
<?PHP if($model->id_vinarestaurant != 0){ ?>
<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'inicio-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		#'id_inicio',
		#'id_tipoinicio',
		array('name'=>'id_tipoinicio', 'value'=>'$data->idTipoinicio->nombre'),
		#'id_vinarestaurant',
		array('name'=>'id_vinarestaurant', 'value'=>'$data->id_tipoinicio == 1  ? $data->restaurant->nombre : $data->vina->nombre'),
		'imagen',
		'titulo',
		'descripcion',
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
<?PHP } ?>

<?PHP if($model->id_vinarestaurant == 0){ ?>
<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'inicio-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		#'id_inicio',
		#'id_tipoinicio',
		array('name'=>'id_tipoinicio', 'value'=>'$data->idTipoinicio->nombre'),
		#'id_vinarestaurant',
		#array('name'=>'id_vinarestaurant', 'value'=>'$data->id_tipoinicio == 1  ? $data->restaurant->nombre : $data->vina->nombre'),
		'imagen',
		'titulo',
		'descripcion',
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
<?PHP } ?>
