<?php
$this->breadcrumbs=array(
	'Mailenviars',
);

$this->menu=array(
	array('label'=>'Create Mailenviar', 'url'=>array('create')),
	array('label'=>'Manage Mailenviar', 'url'=>array('admin')),
);
?>

<h1>Mailenviars</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
