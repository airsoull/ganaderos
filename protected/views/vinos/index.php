<?php
$this->breadcrumbs=array(
	'Vinos',
);

$this->menu=array(
	array('label'=>'Crear Vinos', 'url'=>array('create')),
	array('label'=>'Administrar Vinos', 'url'=>array('admin')),
);
?>

<h1>Vinos</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
