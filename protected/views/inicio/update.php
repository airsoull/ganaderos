<?php
$this->breadcrumbs=array(
	'Inicio'=>array('index'),
	$model->titulo=>array('view','id'=>$model->id_inicio),
	'Actualizar',
);

$this->menu=array(
	array('label'=>'Listar Inicio', 'url'=>array('index')),
	array('label'=>'Crear Inicio', 'url'=>array('create')),
	array('label'=>'Ver Inicio', 'url'=>array('view', 'id'=>$model->id_inicio)),
	array('label'=>'Administrar Inicio', 'url'=>array('admin')),
);
?>

<h1>Actualizar <?php echo $model->titulo; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>