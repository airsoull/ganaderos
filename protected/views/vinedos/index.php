<?PHP $this->pageTitle = 'Viñedos'; ?>
<div id="quienes">
	<div id="head">
		<h1>Viñedos</h1>
	</div>
	<div id='menu'>
		<ul>
			<?php foreach ($model as $m) {
			?>
				<li><?php echo CHtml::link(strtoupper($m->nombre), 'javascript:void(0)', array('class' => 'menues', 'lim' => $m->id_vina)); ?></li>

			<?PHP } ?>
		</ul>
	</div>
	<div id="descripcion">
		<p><span>↑</span> Seleccione el viñedo que desea ver <span>↑</span></p>
	</div>
</div>

<script type="text/javascript">
	$('#descripcion').css('min-height', '100px');
	$('.menues').on('click', function(){
		var $lim = $(this).attr('lim');
		$('#descripcion').hide().fadeIn().load('<?PHP echo Yii::app()->request->baseUrl ?>/vinedos/vinos/'+$lim);
	});
</script>
