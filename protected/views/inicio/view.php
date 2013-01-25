<?php
$this->breadcrumbs=array(
	'Inicio'=>array('index'),
	$model->titulo,
);

$this->menu=array(
	array('label'=>'Listar Inicio', 'url'=>array('index')),
	array('label'=>'Crear Inicio', 'url'=>array('create')),
	array('label'=>'Actualiza Inicio', 'url'=>array('update', 'id'=>$model->id_inicio)),
	array('label'=>'Borrar Inicio', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id_inicio),'confirm'=>'Esta seguro de eliminar este elemento?')),
	array('label'=>'Administrar Inicio', 'url'=>array('admin')),
);
?>

<h1>Inicio <?php echo $model->titulo; ?></h1>

<?PHP if($model->id_vinarestaurant == 0){ ?>
<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		#'id_inicio',
		#'id_tipoinicio',
		array('name'=>'id_tipoinicio', 'value'=>$model->idTipoinicio->nombre),
		#'id_vinarestaurant',
		#array('name'=>'id_vinarestaurant', 'value'=>$model->id_tipoinicio == 1  ? $model->restaurant->nombre : $model->vina->nombre),
		'imagen',
		'titulo',
		'descripcion',
	),
)); ?>
<?PHP } ?>

<?PHP if($model->id_vinarestaurant != 0){ ?>
<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		#'id_inicio',
		#'id_tipoinicio',
		array('name'=>'id_tipoinicio', 'value'=>$model->idTipoinicio->nombre),
		#'id_vinarestaurant',
		array('name'=>'id_vinarestaurant', 'value'=>$model->id_tipoinicio == 1  ? $model->restaurant->nombre : $model->vina->nombre),
		'imagen',
		'titulo',
		'descripcion',
	),
)); ?>
<?PHP } ?>
