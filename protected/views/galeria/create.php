<?php
$this->breadcrumbs=array(
	'Galería'=>array('index'),
	'Crear',
);

$this->menu=array(
	array('label'=>'Listar Galería', 'url'=>array('index')),
	array('label'=>'Administrar Galería', 'url'=>array('admin')),
);
?>

<h1>Crear Galería</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>