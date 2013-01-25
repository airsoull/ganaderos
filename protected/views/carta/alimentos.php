<div class="ten columns" style="background-color:#E0E0E0">
<table border="0" cellspacing="0" cellpadding="0" width="100%">
<?PHP
$cat = 0;
$p = 0;
foreach ($model as $m) {
	?>
	<?PHP 
		if($cat != $m->id_categoriaalimentos){ 
			echo '<tr><td colspan="4"><a name="'.str_replace(' ','',strtolower($m->idCategoriaalimentos->nombre)).'"></a><h2>'.ucwords($m->idCategoriaalimentos->nombre).'</h2><br></td></tr>'; 
			$cat = $m->id_categoriaalimentos; 
		}
	?>
	<?PHP 
		
		if($p != $m->precio){ 
	?>
	<tr>
		<td colspan="4" align="right"><h3>Precio:&nbsp;&nbsp;<?PHP echo '$'.number_format($m->precio); ?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</h3></td>
	</tr>
	<?php
		$p = $m->precio; 
	} 
	?>
	<tr>
    	<td width="20px" height="20px"><?PHP if($m->imagen != NULL){ echo '<a href="'.Yii::app()->request->baseUrl.'/imagenes/'.$m->imagen.'" rel="lightbox"><img title="'.$m->nombre.'" src="'.Yii::app()->request->baseUrl.'/imagenes/'.$m->imagen.'" width="20px" height="20px"></a>'; } ?></td>
    	<td><span class="nombre">&nbsp;&nbsp;<?PHP echo ucwords($m->nombre); ?></span>
    	<br><span class="describir"><?PHP echo ucwords($m->descripcion); ?></span><br><br></td>
    	<td align="left" width="16%"><?PHP #echo '$'.number_format($m->precio); ?></td>
    	<td width="20%" valign="top"><input name="<?PHP echo $m->id_alimentos; ?>" type="button" value="-" class="menos"><input name="<?PHP echo $m->id_alimentos; ?>" type="text" size="2" maxlength="2" value="0" class="numero" dinero="<?PHP echo $m->precio; ?>" readonly><input name="<?PHP echo $m->id_alimentos; ?>" type="button" value="+" class = "mas"></td>
	</tr>

<?PHP } ?>
</table>
</div>

<div class="five columns offset-by-one">
	<div id="va">
	<h3>Total:</h3>
		$<input name="total" type="text" size="10" id="totalD" value="0" readonly><br><br>
		<?php
			foreach($tipo as $t){
				echo CHtml::link(ucwords(strtolower($t->idCategoriaalimentos->nombre)), '#'.str_replace(' ','',strtolower($t->idCategoriaalimentos->nombre)), array('optionName'=>'optionValue')).'<br>';
			}	 
		?>
	</div>
</div>

<script type="text/javascript">

$(document).ready(function() {
        var posicion = $(".five.columns").offset();
        var margenSuperior = 15;
         $(window).scroll(function() {
             if ($(window).scrollTop() > posicion.top) {
                 $(".five.columns").stop().animate({
                     marginTop: $(window).scrollTop() - posicion.top + margenSuperior
                 }, 0);
             } else {
                 $(".five.columns").stop().animate({
                     marginTop: 0
                 }, 0);
             };
         });
});
          
function formateaMiles(numero,separador)
{
	//alert('numero'+numero);
	
	if(separador=='')
		return numero.replace(/[.]+/g,'');
	else
		if(numero.length>3)
			return formateaMiles(numero.substring(0,numero.length-3),separador) + separador + "" + numero.substring(numero.length-3,numero.length); 
		else 
			return numero;
}


$('input:button').click(function(){
	var $calculo = $(this).val();
	var $name = $(this).attr('name');
	var $input = $('input:text[name='+$name+']');
	var $total = $('#total, #totalD');
	if($calculo == '+'){
		$input.attr('value', parseInt($input.val())+parseInt(1));
		$dinero = $input.attr('dinero');
		$cuenta = parseInt($total.val()) + (parseInt($dinero));
		$total.attr('value', $cuenta);
	}else{
		if($input.val() > 0){
			$input.attr('value', parseInt($input.val())-parseInt(1));
			$dinero = $input.attr('dinero');
			$cuenta = parseInt($total.val()) - (parseInt($dinero));
			$total.attr('value', $cuenta);
		}
	}
});
</script>