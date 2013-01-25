<?php
$this->breadcrumbs=array(
	'Club',
);
/*
$this->menu=array(
	array('label'=>'Crea Club', 'url'=>array('create')),
	array('label'=>'Manage Club', 'url'=>array('admin')),
); */
?>

<h1>Club Ganaderos</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
