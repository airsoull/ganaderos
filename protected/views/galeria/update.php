<?php
$this->breadcrumbs=array(
	'Galeria'=>array('index'),
	$model->id_galeria=>array('view','id'=>$model->id_galeria),
	'Actualizar',
);

$this->menu=array(
	array('label'=>'Listar Galería', 'url'=>array('index')),
	array('label'=>'Crear Galería', 'url'=>array('create')),
	array('label'=>'Ver Galería', 'url'=>array('view', 'id'=>$model->id_galeria)),
	array('label'=>'Administrar Galería', 'url'=>array('admin')),
);
?>

<h1>Actualizar</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>