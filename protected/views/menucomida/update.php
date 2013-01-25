<?php
$this->breadcrumbs=array(
	'Menú comida'=>array('index'),
	$model->nombre=>array('view','id'=>$model->id_menucomida),
	'Actualizar',
);

$this->menu=array(
	array('label'=>'Listar Menú comida', 'url'=>array('index')),
	array('label'=>'Crear Menú comida', 'url'=>array('create')),
	array('label'=>'Ver Menú comida', 'url'=>array('view', 'id'=>$model->id_menucomida)),
	array('label'=>'Administrar Menú comida', 'url'=>array('admin')),
);
?>

<h1>Actualizar <?php echo $model->nombre; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>