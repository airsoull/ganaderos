<?php
$this->breadcrumbs=array(
	'Galería'=>array('index'),
	$model->id_galeria,
);

$this->menu=array(
	array('label'=>'Listar Galería', 'url'=>array('index')),
	array('label'=>'Crear Galería', 'url'=>array('create')),
	array('label'=>'Actualizar Galería', 'url'=>array('update', 'id'=>$model->id_galeria)),
	array('label'=>'Borrar Galería', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id_galeria),'confirm'=>'Esta Seguro de eliminar este elemento?')),
	array('label'=>'Administrar Galería', 'url'=>array('admin')),
);
?>

<h1>Galería</h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		#'id_galeria',
		#'id_restaurantes',
		array(
			'name'=>'id_restaurantes',
			'value'=>$model->idRestaurantes->nombre,
		),
		'imagen',
		'descripcion',
	),
)); ?>
