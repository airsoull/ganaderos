<?php
$this->breadcrumbs=array(
	'Vinoteca'=>array('index'),
	$model->id_vinoteca,
);

$this->menu=array(
	array('label'=>'Listar Vinoteca', 'url'=>array('index')),
	array('label'=>'Actualizar Vinoteca', 'url'=>array('update', 'id'=>$model->id_vinoteca)),
);
?>

<h1>Vinoteca</h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		#'id_vinoteca',
		'nombre',
		'direccion',
		'telefono',
		'imagen',
		'descripcion',
	),
)); ?>
