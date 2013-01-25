<?php
$this->breadcrumbs=array(
	'Página',
);

/*
$this->menu=array(
	array('label'=>'Create Pagina', 'url'=>array('create')),
	array('label'=>'Manage Pagina', 'url'=>array('admin')),
);
 * 
 */
?>

<h1>Página</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
