<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('titulo')); ?>:</b>
	<?php echo CHtml::encode($data->titulo); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('mailContactoUno')); ?>:</b>
	<?php echo CHtml::encode($data->mailContactoUno); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('mailContactoDos')); ?>:</b>
	<?php echo CHtml::encode($data->mailContactoDos); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('telefono')); ?>:</b>
	<?php echo CHtml::encode($data->telefono); ?>
	<br />
	<br>
	<strong>¿Quiénes Somos?</strong>
	<br /><br>
	<b><?php echo CHtml::encode($data->getAttributeLabel('imagen')); ?>:</b>
	<?php echo CHtml::link($data->imagen, array('imagenes/'.$data->imagen), array('rel'=>'lightbox')); ?>
	<br />
	<b><?php echo CHtml::encode($data->getAttributeLabel('descripcion')); ?>:</b><br>
	<?php echo $data->descripcion ?>
	<br />


</div>

<?PHP echo CHtml::link('Actualizar', 'update/1'); ?>