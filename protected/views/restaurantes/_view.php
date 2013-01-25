<div class="view">
        <?PHP /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('id_restaurantes')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id_restaurantes), array('view', 'id'=>$data->id_restaurantes)); ?>
	<br />
         * 
         */?>

	<b><?php echo CHtml::encode($data->getAttributeLabel('nombre')); ?>:</b>
	<?php echo CHtml::encode($data->nombre); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('direccion')); ?>:</b>
	<?php echo CHtml::link($data->direccion, array('imagenes/'.$data->direccion), array('rel'=>'lightbox')); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('telefono')); ?>:</b>
	<?php echo CHtml::encode($data->telefono); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('imagenPrincipal')); ?>:</b>
		<?php echo CHtml::link($data->imagenPrincipal, array('imagenes/'.$data->imagenPrincipal), array('rel'=>'lightbox')); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('imagenPromocion')); ?>:</b>
	<?php #echo CHtml::encode($data->imagenPromocion); ?>
	<?php echo CHtml::link($data->imagenPromocion, array('imagenes/'.$data->imagenPromocion), array('rel'=>'lightbox')); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('descripcion')); ?>:</b>
	<?php echo CHtml::encode($data->descripcion); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('activarpromocion')); ?>:</b>
	<?php echo CHtml::encode($data->activarpromocion0->descripcion); ?>
	<br />
	<br>
	<?PHP echo CHtml::link('Actualizar', "update/$data->id_restaurantes"); ?>
</div>