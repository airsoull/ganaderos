<?php
$this->breadcrumbs=array(
	'Envios'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Envio', 'url'=>array('index')),
	array('label'=>'Manage Envio', 'url'=>array('admin')),
);
?>

<h1>Create Envio</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>