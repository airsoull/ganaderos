<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_mailenviar')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id_mailenviar), array('view', 'id'=>$data->id_mailenviar)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('asunto')); ?>:</b>
	<?php echo CHtml::encode($data->asunto); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('texto')); ?>:</b>
	<?php echo CHtml::encode($data->texto); ?>
	<br />


</div>