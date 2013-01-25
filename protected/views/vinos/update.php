<?php
$this->breadcrumbs=array(
	'Vinos'=>array('index'),
	$model->nombre=>array('view','id'=>$model->id_vinos),
	'Actualizar',
);

$this->menu=array(
	array('label'=>'Listar Vinos', 'url'=>array('index')),
	array('label'=>'Crear Vinos', 'url'=>array('create')),
	array('label'=>'Ver Vinos', 'url'=>array('view', 'id'=>$model->id_vinos)),
	array('label'=>'Administración Vinos', 'url'=>array('admin')),
);
?>

<h1>Vino <?php echo $model->nombre; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>