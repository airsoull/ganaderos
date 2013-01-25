<?php
$this->breadcrumbs=array(
	'Vinos'=>array('index'),
	$model->nombre,
);

$this->menu=array(
	array('label'=>'Listar Vinos', 'url'=>array('index')),
	array('label'=>'Crear Vinos', 'url'=>array('create')),
	array('label'=>'Actualizar Vinos', 'url'=>array('update', 'id'=>$model->id_vinos)),
	array('label'=>'Borrar Vinos', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id_vinos),'confirm'=>'Seguro que desea eliminar este elemento?')),
	array('label'=>'Administrar Vinos', 'url'=>array('admin')),
);
?>

<h1>Vino <?php echo $model->nombre; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		#'id_vinos',
		'nombre',
		#'id_vina',
		array('name'=>'id_vina', 'value'=>$model->idVina->nombre),
		'descripcion',
		'imagen',
		#'precio',
		array('name'=>'precio', 'value'=>'$'.$model->precio),
	),
)); ?>
