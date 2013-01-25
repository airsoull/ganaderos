<?php
$this->breadcrumbs=array(
	'Mail',
);

$this->menu=array(
	array('label'=>'Crear Mail', 'url'=>array('create')),
	array('label'=>'Administrar Mail', 'url'=>array('admin')),
);
?>

<h1>Mail</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
