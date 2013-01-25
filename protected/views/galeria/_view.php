<div class="view">


	<b><?php echo CHtml::encode($data->getAttributeLabel('id_restaurantes')); ?>:</b>
	<?php echo CHtml::encode($data->idRestaurantes->nombre); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('imagen')); ?>:</b>
	<?php echo CHtml::link($data->imagen, array('imagenes/'.$data->imagen), array('rel'=>'lightbox')); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('descripcion')); ?>:</b>
	<?php echo CHtml::encode($data->descripcion); ?>
	<br />


</div>