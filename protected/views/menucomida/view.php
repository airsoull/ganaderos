<?php
$this->breadcrumbs=array(
	'Menú comida'=>array('index'),
	$model->nombre,
);

$this->menu=array(
	array('label'=>'Listar Menú comida', 'url'=>array('index')),
	array('label'=>'Crear Menú comida', 'url'=>array('create')),
	array('label'=>'Actualizar Menú comida', 'url'=>array('update', 'id'=>$model->id_menucomida)),
	array('label'=>'Borrar Menú comida', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id_menucomida),'confirm'=>'Esta seguro que quiere eliminar este item?')),
	array('label'=>'Administrar Menú comida', 'url'=>array('admin')),
);
?>

<h1>Menú comida <?php echo $model->nombre; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		#'id_menucomida',
                'nombre',
		'descripcion',
	),
)); ?>
