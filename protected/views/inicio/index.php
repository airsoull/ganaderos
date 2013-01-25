<?php
$this->breadcrumbs=array(
	'Inicio',
);

$this->menu=array(
	array('label'=>'Crear Inicio', 'url'=>array('create')),
	array('label'=>'Administrar Inicio', 'url'=>array('admin')),
);
?>

<h1>Inicio</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>