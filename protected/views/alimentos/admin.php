<?php
$this->breadcrumbs=array(
	'Alimentos'=>array('index'),
	'Administración',
);

$this->menu=array(
	array('label'=>'Listar Alimentos', 'url'=>array('index')),
	array('label'=>'Crear Alimentos', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$.fn.yiiGridView.update('alimentos-grid', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Administrar Alimentos</h1>


<?php #echo CHtml::link('Advanced Search','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'alimentos-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
        'enablePagination'=>TRUE,
	'columns'=>array(
		#'id_alimentos',
		'nombre',
		'descripcion',
		'imagen',
		array('name'=>'precio', 'value'=>'"$".$data->precio'),
                array('name'=>'id_menucomida', 'value'=>'$data->idMenucomida->nombre'),
		#'id_categoriaalimentos',
                array('name'=>'id_categoriaalimentos', 'value'=>'$data->idCategoriaalimentos->nombre'),
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
