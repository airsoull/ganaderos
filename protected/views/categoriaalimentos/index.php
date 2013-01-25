<?php
$this->breadcrumbs=array(
	'Categoría Alimentos',
);

$this->menu=array(
	array('label'=>'Crear Categoría Alimentos', 'url'=>array('create')),
	array('label'=>'Administrar Categoría Alimentos', 'url'=>array('admin')),
);
?>

<h1>Categoría Alimentos</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
