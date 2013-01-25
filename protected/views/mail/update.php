<?php
$this->breadcrumbs=array(
	'Mail'=>array('index'),
	'Actualizar',
);

$this->menu=array(
	array('label'=>'Listar Mail', 'url'=>array('index')),
	array('label'=>'Crear Mail', 'url'=>array('create')),
	array('label'=>'Ver Mail', 'url'=>array('view', 'id'=>$model->id_mail)),
	array('label'=>'Administrar Mail', 'url'=>array('admin')),
);
?>

<h1>Actualizar Mail <?php echo $model->mail; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>