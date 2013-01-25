<?php
$this->breadcrumbs=array(
	'Alimentos'=>array('index'),
	$model->nombre=>array('view','id'=>$model->id_alimentos),
	'Actualizar',
);

$this->menu=array(
	array('label'=>'Listar Alimentos', 'url'=>array('index')),
	array('label'=>'Crear Alimentos', 'url'=>array('create')),
	array('label'=>'Ver Alimentos', 'url'=>array('view', 'id'=>$model->id_alimentos)),
	array('label'=>'Administrar Alimentos', 'url'=>array('admin')),
);
?>

<h1>Actualizar Alimento <?php echo $model->nombre; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>