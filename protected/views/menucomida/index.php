<?php
$this->breadcrumbs=array(
	'Menú comidas',
);

$this->menu=array(
	array('label'=>'Crear Menú comida', 'url'=>array('create')),
	array('label'=>'Administrar Menú comida', 'url'=>array('admin')),
);
?>

<h1>Menú comidas</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
