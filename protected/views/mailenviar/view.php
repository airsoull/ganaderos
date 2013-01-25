<?php
$this->breadcrumbs=array(
	'Mailenviars'=>array('index'),
	$model->id_mailenviar,
);

$this->menu=array(
	array('label'=>'List Mailenviar', 'url'=>array('index')),
	array('label'=>'Create Mailenviar', 'url'=>array('create')),
	array('label'=>'Update Mailenviar', 'url'=>array('update', 'id'=>$model->id_mailenviar)),
	array('label'=>'Delete Mailenviar', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id_mailenviar),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Mailenviar', 'url'=>array('admin')),
);
?>

<h1>View Mailenviar #<?php echo $model->id_mailenviar; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id_mailenviar',
		'asunto',
		'texto',
	),
)); ?>
