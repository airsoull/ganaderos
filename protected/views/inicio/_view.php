<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_tipoinicio')); ?>:</b>
	<?php echo CHtml::encode($data->idTipoinicio->nombre); ?>
	<br />
	<?PHP if($data->id_vinarestaurant != 0){ ?>
	<b><?php echo CHtml::encode($data->getAttributeLabel('id_vinarestaurant')); ?>:</b>
	<?php echo CHtml::encode($data->id_tipoinicio == 1  ? $data->restaurant->nombre : $data->vina->nombre); ?>
	<br />
	<?PHP } ?>

	<b><?php echo CHtml::encode($data->getAttributeLabel('imagen')); ?>:</b>
	<?php echo CHtml::link($data->imagen, array('imagenes/'.$data->imagen), array('rel'=>'lightbox')); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('titulo')); ?>:</b>
	<?php echo CHtml::encode($data->titulo); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('descripcion')); ?>:</b>
	<?php echo CHtml::encode($data->descripcion); ?>
	<br />
	<br>
	<?PHP echo CHtml::link('Actualizar', "update/$data->id_inicio"); ?>

</div>