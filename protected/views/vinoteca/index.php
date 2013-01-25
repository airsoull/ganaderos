<?PHP $this->pageTitle = $model->nombre; ?>
<div id="quienes">
	<div id="head">
		<h1><?php echo CHtml::image(Yii::app()->theme->baseUrl.'/images/logo.png', 'Ganaderos', array('style'=>'width:10%')); ?>&nbsp;&nbsp;&nbsp;<?PHP echo $model->nombre; $id = $model->id_vinoteca;?></h1>
	</div>
	<div id="descripcion">
		<div id="imgprincipal">
			<img src = "<?PHP echo Yii::app()->request->baseUrl.'/imagenes/'.$model->imagen; ?>">
		</div>
		<div style="margin-right: 5%; margin-left: 5%;">
		<ul>
			<li><p>Teléfono: <?PHP echo ucwords($model->telefono); ?></p></li>
		</ul>
		</div>
		<br><br>
		<div style="margin-left:5%;margin-right:5%">
		<strong>
			<?PHP echo $model->descripcion ?>
		</strong>

		<?PHP $direccion = str_replace(' ', '+', $model->direccion) ?>
		<div id="imgprincipal">
			<img src = "<?PHP echo Yii::app()->request->baseUrl.'/imagenes/'.$model->direccion; ?>">
		</div>
		<?PHP if(false){
			?>
			<br><br>
			<h2 style="text-align:center;font-size: 25px;font-weight:bold;">Promoción</h2>

			<img src="<?php echo Yii::app()->theme->baseUrl; ?>/images/Printer.png" class="print" title="Haz click para imprimir el ticket">
			<a href="<?php echo Yii::app()->request->baseUrl; ?>/servicios/pdfpromocion/<?PHP echo $model->id_restaurantes; ?>">
			<img src="<?php echo Yii::app()->theme->baseUrl; ?>/images/file_pdf.png" class="pdf" title="Haz click para bajar en pdf el ticket">
			</a>
			<?PHP
			$this->renderPartial('_promocion', array('id' => $id)); 
			?>
			<span style="margin-right: 5%;">Imprime o baja este cupón para hace factible el descuento o promoción</span>
			<?PHP
		} ?>
		<div id="ancho">&nbsp;</div>

	</div>
</div>
<script type="text/javascript">
	$('.print').printPage({
		url: '<?PHP echo Yii::app()->request->baseUrl ?>/servicios/promocion/<?PHP echo $id ?>',
		message: 'Su ticket promocional se imprimirá',
	})

</script>