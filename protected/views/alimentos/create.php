<?php
$this->breadcrumbs=array(
	'Alimentos'=>array('index'),
	'Crear',
);

$this->menu=array(
	array('label'=>'Listar Alimentos', 'url'=>array('index')),
	array('label'=>'Administrar Alimentos', 'url'=>array('admin')),
);
?>

<h1>Crear Alimento</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>