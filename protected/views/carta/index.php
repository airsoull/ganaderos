<div class="clearfix">
            	<div class="sixteen columns">
                	<h1 class="page-title">Cartas</h1>

                	<h3 style="text-align:center"><strong>Seleccione la carta que desea ver</strong><br><?php echo CHtml::link('Menú', 'javascript:void(0)', array('id'=>'restaurant')); ?> - <?php echo CHtml::link('Vinos', 'javascript:void(0)', array('id'=>'vino')); ?></h3>
                	<br>
                	<div class="alimento" style="display:none;">
                		<?php foreach ($model as $m) { ?>
							<?php echo CHtml::link($m->nombre, 'javascript:void(0)', array('class' => 'menues', 'lim' => $m->id_menucomida)); ?>&nbsp;&nbsp;
						<?PHP } ?>
                	</div>
                	<div class="vino" style="display:none">
                		<?php foreach ($vina as $m) { ?>
							<?php echo CHtml::link(strtoupper($m->nombre), 'javascript:void(0)', array('class' => 'menuv', 'lim' => $m->id_vina)); ?>
						<?PHP } ?>
                	</div>
                </div>
            </div>
            <br>
            <div id="carga"></div>
            <div class="clear"></div>



<?PHP $this->pageTitle = 'Carta' ?>

<script type="text/javascript">
    
    <?PHP if($ver){ 
        if($tipo == "restaurant"){
            $tipo = "alimentos";
        } ?>
        $('#carga').hide().fadeIn().load('<?PHP echo str_replace(" ", "%20", Yii::app()->request->baseUrl) ?>/carta/<?PHP echo $tipo ?>/<?PHP echo $id ?>');
    <?PHP } ?>

	$('#restaurant').on('click', function(){
		$('.vino').fadeOut(0);
		$('.alimento').fadeIn(200);
	});
	$('#vino').on('click', function(){
		$('.alimento').fadeOut(0);
		$('.vino').fadeIn(200);
	});
	$('.menues').on('click', function(){
		var $lim = $(this).attr('lim');
		$('#carga').hide().fadeIn().load('<?PHP echo str_replace(" ", "%20", Yii::app()->request->baseUrl) ?>/carta/alimentos/'+$lim);
	});
    $('.menuv').on('click', function(){
        var $lim = $(this).attr('lim');
        $('#carga').hide().fadeIn().load('<?PHP echo str_replace(" ", "%20", Yii::app()->request->baseUrl) ?>/carta/vinos/'+$lim);
    });
</script>