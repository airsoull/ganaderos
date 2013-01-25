<?php
$this->breadcrumbs=array(
	'Mail enviar'=>array('index'),
	'Enviar',
);

$this->menu=array(
	array('label'=>'Listar Mail enviados', 'url'=>array('index')),
	#array('label'=>'Administrar Mailenviar', 'url'=>array('admin')),
);
?>

<h1>Enviar Mail</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>