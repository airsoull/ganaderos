<?php
$this->breadcrumbs=array(
	'Inicio'=>array('index'),
	'Crear',
);

$this->menu=array(
	array('label'=>'Listar Inicio', 'url'=>array('index')),
	array('label'=>'Administrar Inicio', 'url'=>array('admin')),
);
?>

<h1>Crear Inicio</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>