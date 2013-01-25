<?php
$this->breadcrumbs=array(
	'Restaurantes',
);

$this->menu=array(
	array('label'=>'Crear Restaurantes', 'url'=>array('create')),
	array('label'=>'Administrar Restaurantes', 'url'=>array('admin')),
);
?>

<h1>Restaurantes</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
