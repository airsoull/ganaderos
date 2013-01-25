<?php
$this->breadcrumbs=array(
	'Alimentos'=>array('index'),
	$model->nombre,
);

$this->menu=array(
	array('label'=>'Listar Alimentos', 'url'=>array('index')),
	array('label'=>'Crear Alimentos', 'url'=>array('create')),
	array('label'=>'Actualizar Alimentos', 'url'=>array('update', 'id'=>$model->id_alimentos)),
	array('label'=>'Borrar Alimentos', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id_alimentos),'confirm'=>'Esta seguro que quiere eliminar este item?')),
	array('label'=>'Administrar Alimentos', 'url'=>array('admin')),
);
?>

<h1>Alimentos <?php echo $model->nombre; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		#'id_alimentos',
		'nombre',
		'descripcion',
		'imagen',
		#'precio',
                array('name'=>'precio', 'value'=>'$'.$model->precio),
		#'id_menucomida',
                array('name'=>'id_menucomida', 'value'=>$model->idMenucomida->nombre),
                array('name'=>'id_categoriaalimentos', 'value'=>$model->idCategoriaalimentos->nombre),
		#'id_categoriaalimentos',
	),
)); ?>
