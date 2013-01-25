<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('imagen')); ?>:</b>
	<?php echo CHtml::link($data->imagen, array('imagenes/'.$data->imagen), array('rel'=>'lightbox')); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('descripcion')); ?>:</b>
	<?php echo CHtml::encode($data->descripcion); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_envio')); ?>:</b>
	<?php echo CHtml::encode($data->idEnvio->descripcion); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('imagen_promocion')); ?>:</b>
	<?php echo CHtml::link($data->imagen_promocion, array('imagenes/'.$data->imagen_promocion), array('rel'=>'lightbox')); ?>
	<br /><br>
	<?PHP echo CHtml::link('Actualizar', "update/$data->id_club"); ?>

</div>