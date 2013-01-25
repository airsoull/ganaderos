<?php
$this->breadcrumbs=array(
	'Mail'=>array('index'),
	$model->mail,
);

$this->menu=array(
	array('label'=>'Listar Mail', 'url'=>array('index')),
	array('label'=>'Crear Mail', 'url'=>array('create')),
	array('label'=>'Actualizar Mail', 'url'=>array('update', 'id'=>$model->id_mail)),
	array('label'=>'Borrar Mail', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id_mail),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Administrar Mail', 'url'=>array('admin')),
);
?>

<h1>Mail <?php echo $model->mail; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		#'id_mail',
		'nombre',
		'mail',
		#'idenvio',
		array(
			'name'=>'idenvio',
			'value'=>$model->idenvio0->descripcion,
		),
	),
)); ?>
