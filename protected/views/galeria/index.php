<?php
$this->breadcrumbs=array(
	'Galería',
);

$this->menu=array(
	array('label'=>'Crear Galería', 'url'=>array('create')),
	array('label'=>'Administrar Galería', 'url'=>array('admin')),
);
?>

<h1>Galería</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
