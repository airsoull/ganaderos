<?php
$this->breadcrumbs=array(
	'Vinos'=>array('index'),
	'Crear',
);

$this->menu=array(
	array('label'=>'Listar Vinos', 'url'=>array('index')),
	array('label'=>'Administrar Vinos', 'url'=>array('admin')),
);
?>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>