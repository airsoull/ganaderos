<?php
$this->breadcrumbs=array(
	'Menú comida'=>array('index'),
	'Administrar',
);

$this->menu=array(
	array('label'=>'Listar Menú comida', 'url'=>array('index')),
	array('label'=>'Crear Menú comida', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$.fn.yiiGridView.update('menucomida-grid', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Administrar Menú comida</h1>


<?php #echo CHtml::link('Advanced Search','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'menucomida-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		#'id_menucomida',
		'descripcion',
		'nombre',
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
