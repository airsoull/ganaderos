<?php
$this->breadcrumbs=array(
	'Vinotecas'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Vinoteca', 'url'=>array('index')),
	array('label'=>'Manage Vinoteca', 'url'=>array('admin')),
);
?>

<h1>Create Vinoteca</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>