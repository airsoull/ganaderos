<?php
$this->breadcrumbs=array(
	'Viña'=>array('index'),
	'Crear',
);

$this->menu=array(
	array('label'=>'Listar Vina', 'url'=>array('index')),
	array('label'=>'Administrar Vina', 'url'=>array('admin')),
);
?>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>