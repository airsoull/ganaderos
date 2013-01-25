<?php
$this->breadcrumbs=array(
	'Categoría Alimentos'=>array('index'),
	$model->nombre=>array('view','id'=>$model->id_categoriaalimentos),
	'Actualizar',
);

$this->menu=array(
	array('label'=>'Listar Categoría Alimentos', 'url'=>array('index')),
	array('label'=>'Crear Categoría Alimentos', 'url'=>array('create')),
	array('label'=>'Ver Categoría Alimentos', 'url'=>array('view', 'id'=>$model->id_categoriaalimentos)),
	array('label'=>'Administrar Categoría Alimentos', 'url'=>array('admin')),
);
?>

<h1>Actualizar Categoría Alimentos <?php echo $model->nombre; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>