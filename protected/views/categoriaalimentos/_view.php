<div class="view">
        <?PHP /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('id_categoriaalimentos')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id_categoriaalimentos), array('view', 'id'=>$data->id_categoriaalimentos)); ?>
	<br />
         * 
         */ ?>

	<b><?php echo CHtml::encode($data->getAttributeLabel('nombre')); ?>:</b>
	<?php echo CHtml::encode($data->nombre); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('descripcion')); ?>:</b>
	<?php echo CHtml::encode($data->descripcion); ?>
	<br />
	<br>
	<?PHP echo CHtml::link('Actualizar', "update/$data->id_categoriaalimentos"); ?>

</div>