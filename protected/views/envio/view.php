<?php
$this->breadcrumbs=array(
	'Envios'=>array('index'),
	$model->id_envio,
);

$this->menu=array(
	array('label'=>'List Envio', 'url'=>array('index')),
	array('label'=>'Create Envio', 'url'=>array('create')),
	array('label'=>'Update Envio', 'url'=>array('update', 'id'=>$model->id_envio)),
	array('label'=>'Delete Envio', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id_envio),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Envio', 'url'=>array('admin')),
);
?>

<h1>View Envio #<?php echo $model->id_envio; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id_envio',
		'descripcion',
	),
)); ?>
