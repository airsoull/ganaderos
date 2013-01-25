<?php
$this->breadcrumbs=array(
	'Restaurantes'=>array('index'),
	'Administración',
);

$this->menu=array(
	array('label'=>'Listar Restaurantes', 'url'=>array('index')),
	array('label'=>'Crear Restaurantes', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$.fn.yiiGridView.update('restaurantes-grid', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Administración Restaurantes</h1>

<?php #echo CHtml::link('Advanced Search','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'restaurantes-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		#'id_restaurantes',
		'nombre',
		'direccion',
		'telefono',
		'imagenPrincipal',
		'imagenPromocion',
                array(
                'name'=>'activarpromocion',
                'value'=>'$data->activarpromocion0->descripcion',    
                ),
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
