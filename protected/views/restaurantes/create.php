<?php
$this->breadcrumbs=array(
	'Restaurantes'=>array('index'),
	'Crear',
);

$this->menu=array(
	array('label'=>'Listar Restaurantes', 'url'=>array('index')),
	array('label'=>'Administrar Restaurantes', 'url'=>array('admin')),
);
?>

<h1>Crear Restaurant</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>