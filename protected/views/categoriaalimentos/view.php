<?php
$this->breadcrumbs=array(
	'Categoría Alimentos'=>array('index'),
	$model->nombre,
);

$this->menu=array(
	array('label'=>'Listar Categoría Alimentos', 'url'=>array('index')),
	array('label'=>'Crear Categoría Alimentos', 'url'=>array('create')),
	array('label'=>'Actualizar Categoría Alimentos', 'url'=>array('update', 'id'=>$model->id_categoriaalimentos)),
	array('label'=>'Eliminar Categoría Alimentos', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id_categoriaalimentos),'confirm'=>'Seguro que desea eliminar este item?')),
	array('label'=>'Administrar Categoría Alimentos', 'url'=>array('admin')),
);
?>

<h1>Categoría Alimentos <?php echo $model->nombre; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		#'id_categoriaalimentos',
		'nombre',
		'descripcion',
	),
)); ?>
