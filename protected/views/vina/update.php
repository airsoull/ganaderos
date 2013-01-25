<?php
$this->breadcrumbs=array(
	'Vinas'=>array('index'),
	$model->nombre=>array('view','id'=>$model->id_vina),
	'Actualizar',
);

$this->menu=array(
	array('label'=>'Listar Viña', 'url'=>array('index')),
	array('label'=>'Crear Viña', 'url'=>array('create')),
	array('label'=>'Ver Viña', 'url'=>array('view', 'id'=>$model->id_vina)),
	array('label'=>'Administrar Viña', 'url'=>array('admin')),
);
?>

<h1>Actualizar Vina <?php echo $model->nombre; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>