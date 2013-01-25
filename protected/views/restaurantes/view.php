<?php
$this->breadcrumbs=array(
	'Restaurantes'=>array('index'),
	$model->nombre,
);

$this->menu=array(
	array('label'=>'Listar Restaurantes', 'url'=>array('index')),
	array('label'=>'Crear Restaurantes', 'url'=>array('create')),
	array('label'=>'Actualizar Restaurantes', 'url'=>array('update', 'id'=>$model->id_restaurantes)),
	array('label'=>'Borrar Restaurantes', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id_restaurantes),'confirm'=>'Seguro que desea borrar este elemento?')),
	array('label'=>'Administrar Restaurantes', 'url'=>array('admin')),
);
?>

<h1>Ver Restaurant <?php echo $model->nombre; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		#'id_restaurantes',
		'nombre',
		'direccion',
		'telefono',
		'imagenPrincipal',
		#array('name'=>'imagenPrincipal', 'value'=>CHtml::link($model->imagenPrincipal, array('imagenes/'.$model->imagenPrincipal), array('rel'=>'lightbox'))),
		'imagenPromocion',
		#'descripcion',
		#'activarpromocion',
            array('name'=>'activarpromocion', 'value'=>$model->activarpromocion0->descripcion),
                
	),
)); ?>
