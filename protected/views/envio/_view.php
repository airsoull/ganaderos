<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_envio')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id_envio), array('view', 'id'=>$data->id_envio)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('descripcion')); ?>:</b>
	<?php echo CHtml::encode($data->descripcion); ?>
	<br />


</div>