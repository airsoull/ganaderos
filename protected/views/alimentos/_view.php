<div class="view">

	
	<b><?php echo CHtml::encode($data->getAttributeLabel('nombre')); ?>:</b>
	<?php echo CHtml::encode($data->nombre); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('descripcion')); ?>:</b>
	<?php echo CHtml::encode($data->descripcion); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('imagen')); ?>:</b>
	<?php echo CHtml::link($data->imagen, array('imagenes/'.$data->imagen), array('rel'=>'lightbox')); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('precio')); ?>:</b>
	<?php echo CHtml::encode('$'.number_format($data->precio)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_menucomida')); ?>:</b>
	<?php echo CHtml::encode($data->idMenucomida->nombre); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_categoriaalimentos')); ?>:</b>
	<?php echo CHtml::encode($data->idCategoriaalimentos->nombre); ?>
	<br />
	<br>
	<?PHP echo CHtml::link('Actualizar', "update/$data->id_alimentos"); ?>

</div>