<?php
$this->breadcrumbs=array(
	'Alimentos',
);

$this->menu=array(
	array('label'=>'Crear Alimentos', 'url'=>array('create')),
	array('label'=>'Administrar Alimentos', 'url'=>array('admin')),
);
?>

<h1>Alimentos</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
