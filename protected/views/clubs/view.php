<?php
$this->breadcrumbs=array(
	'Clubs'=>array('index'),
	$model->id_club,
);

$this->menu=array(
	array('label'=>'List Club', 'url'=>array('index')),
	array('label'=>'Create Club', 'url'=>array('create')),
	array('label'=>'Update Club', 'url'=>array('update', 'id'=>$model->id_club)),
	array('label'=>'Delete Club', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id_club),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Club', 'url'=>array('admin')),
);
?>

<h1>View Club #<?php echo $model->id_club; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id_club',
		'imagen',
		'descripcion',
		'id_envio',
		'imagen_promocion',
	),
)); ?>
