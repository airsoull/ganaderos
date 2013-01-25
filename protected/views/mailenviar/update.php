<?php
$this->breadcrumbs=array(
	'Mailenviars'=>array('index'),
	$model->id_mailenviar=>array('view','id'=>$model->id_mailenviar),
	'Update',
);

$this->menu=array(
	array('label'=>'List Mailenviar', 'url'=>array('index')),
	array('label'=>'Create Mailenviar', 'url'=>array('create')),
	array('label'=>'View Mailenviar', 'url'=>array('view', 'id'=>$model->id_mailenviar)),
	array('label'=>'Manage Mailenviar', 'url'=>array('admin')),
);
?>

<h1>Update Mailenviar <?php echo $model->id_mailenviar; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>