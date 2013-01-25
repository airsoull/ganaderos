<?php
$this->breadcrumbs=array(
	'Viñas'=>array('index'),
	$model->nombre,
);

$this->menu=array(
	array('label'=>'Listar Viña', 'url'=>array('index')),
	array('label'=>'Crear Viña', 'url'=>array('create')),
	array('label'=>'Actualizar Viña', 'url'=>array('update', 'id'=>$model->id_vina)),
	array('label'=>'Borrar Viña', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id_vina),'confirm'=>'Esta seguro de borrar este elemento?')),
	array('label'=>'Administrar Viña', 'url'=>array('admin')),
);
?>

<h1>Vina <?php echo $model->nombre; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		#'id_vina',
		'nombre',
		'direccion',
		'telefono',
		'imagenPrincipal',
		'destacados',
		'descripcion',
		'actividades',
	),
)); ?>
