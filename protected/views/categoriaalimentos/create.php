<?php
$this->breadcrumbs=array(
	'Categoría Alimentos'=>array('index'),
	'Crear',
);

$this->menu=array(
	array('label'=>'Listar Categoria Alimentos', 'url'=>array('index')),
	array('label'=>'Administrar Categoria Alimentos', 'url'=>array('admin')),
);
?>

<h1>Crear Categoría Alimentos</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>