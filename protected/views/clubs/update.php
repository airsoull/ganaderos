<?php
$this->breadcrumbs=array(
	'Club'=>array('index'),
	'Actualizar',
);
/*
$this->menu=array(
	array('label'=>'Listar Club', 'url'=>array('index')),
	array('label'=>'Create Club', 'url'=>array('create')),
	array('label'=>'View Club', 'url'=>array('view', 'id'=>$model->id_club)),
	array('label'=>'Manage Club', 'url'=>array('admin')),
); */
?>

<h1>Actualizar Club Ganaderos</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>