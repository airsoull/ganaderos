<?php
$this->breadcrumbs=array(
	'Restaurantes'=>array('index'),
	$model->nombre=>array('view','id'=>$model->id_restaurantes),
	'Actualizar',
);

$this->menu=array(
	array('label'=>'Listar Restaurantes', 'url'=>array('index')),
	array('label'=>'Crear Restaurantes', 'url'=>array('create')),
	array('label'=>'Mostrar Restaurantes', 'url'=>array('view', 'id'=>$model->id_restaurantes)),
	array('label'=>'Administrar Restaurantes', 'url'=>array('admin')),
);
?>

<h1>Actualizar Restaurant <?php echo $model->nombre; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>