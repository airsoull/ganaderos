<?php
$this->breadcrumbs=array(
	'Menú comidas'=>array('index'),
	'Crear',
);

$this->menu=array(
	array('label'=>'Listar Menú comidas', 'url'=>array('index')),
	array('label'=>'Administrar Menú comidas', 'url'=>array('admin')),
);
?>

<h1>Crear Menú comidas</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>