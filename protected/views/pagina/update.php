<?php
$this->breadcrumbs=array(
	'Página'=>array('index'),
	#$model->id_pagina=>array('view','id'=>$model->id_pagina),
	'Actualizar',
);

$this->menu=array(
	array('label'=>'List Pagina', 'url'=>array('index')),
	array('label'=>'Create Pagina', 'url'=>array('create')),
	array('label'=>'View Pagina', 'url'=>array('view', 'id'=>$model->id_pagina)),
	array('label'=>'Manage Pagina', 'url'=>array('admin')),
);
?>


<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>