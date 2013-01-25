<?php
$this->breadcrumbs=array(
	'Vinoteca'=>array('index'),
	'Actualizar',
);

$this->menu=array(
	array('label'=>'Listar Vinoteca', 'url'=>array('index')),
	array('label'=>'Ver Vinoteca', 'url'=>array('view', 'id'=>$model->id_vinoteca)),
);
?>

<h1>Actualizar Vinoteca</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>