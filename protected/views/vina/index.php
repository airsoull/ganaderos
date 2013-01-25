<?php
$this->breadcrumbs=array(
	'Viñas',
);

$this->menu=array(
	array('label'=>'Crear Viña', 'url'=>array('create')),
	array('label'=>'Administrar Viña', 'url'=>array('admin')),
);
?>

<h1>Viñas</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
