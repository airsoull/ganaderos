<?PHP $this->pageTitle = 'Restaurantes, parrilladas y viñas' ?>
<table style="max-width:100%">
	<tr>
		<?PHP 
			$indice = 0;
			foreach($model as $i){
			$im = getimagesize(str_replace(" ", "%20", 'http://'.$_SERVER['HTTP_HOST'].Yii::app()->request->baseUrl.'/imagenes/'.$i->imagen));
			$url = '';
			$link = '';
			switch ($i->id_tipoinicio) {
				case 1:
					$url = 'restaurant/';
					$link = $url.$i->id_vinarestaurant;
					break;
				case 2:
					$url = 'vinas';
					$link = $url;
					break;
				case 3:
					$url = 'vinoteca';
					$link = 'vinas';
					break;
				case 4:
					$url = 'quienessomos';
					$link = '#quienes';
					break;
			}
			/*
			if($i->id_tipoinicio == 1){
				$url = 'restaurant';
			}
			if($i->id_tipoinicio == 2){ 
				$url = 'vina'; 
			}
			if($i->id_tipoinicio == 3){
				$url = 'vinoteca';
			}
			if($i->id_tipoinicio == 4){
				
			} */
		?>
		<td style="max-width:<?PHP echo $im[0]; ?>px;max-height:<?PHP echo $im[1]; ?>px">
			<?php 
				$imagen = CHtml::image(Yii::app()->request->baseUrl.'/imagenes/'.$i->imagen, ucwords($i->titulo), array('style'=>'max-width:100%')); 
				echo CHtml::link($imagen, array($link));
			?>
			<a href="<?PHP echo $link ?>">
			<div class="descripcion">
				<br>
				<h3 style="color:#FFF;font-weight:bold;"><?PHP echo $i->titulo ?></h3>
				<br>
				<h2 style="color:#FFF;"><?PHP echo $i->descripcion ?></h2>
			</div>
		</a>
		</td>
		<?PHP if($indice == 2){ ?>
		</tr>
		<tr>
			<?
			}
			$indice++;
		} 
		?>
	</tr>
</table>
<br><br>
<a name="quienes"></a>
<div class="sixteen columns">
    <h2 class="slogan">
        <?PHP echo $pagina->descripcion; ?> 
    </h2>
</div>

<script type="text/javascript">
	$('table td').hover(function(){
		$ancho = $(this).css('width');
		$largo = $(this).css('height');
		$descripcion = $(this).find('div.descripcion');
		$descripcion.css({
			top: $(this).position().top,
			width: $ancho,
			height: $largo,

		});
		$descripcion.fadeIn('200');
	}, function(){
		$descripcion.fadeOut('200');
	});
</script>