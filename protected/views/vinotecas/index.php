<?php
$this->breadcrumbs=array(
	'Vinoteca',
);
?>

<h1>Vinotecas</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
