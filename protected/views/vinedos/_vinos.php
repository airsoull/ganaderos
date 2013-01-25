<div id='carta'>
<br>
<table border="1" cellspacing="0" cellpadding="0" width="100%">
<?PHP
$cat = 0;
foreach ($model as $m) {
	?>
	<?PHP 
		if($cat != $m->id_vina){ 
			#echo '<tr><td colspan="4"><h2>'.ucwords($m->idCategoriaalimentos->nombre).'</h2><br></td></tr>'; 
			#$cat = $m->id_categoriaalimentos; 
		}
	?>
	<tr>
    	<td width="20px" height="20px"><?PHP if($m->imagen != NULL){ echo '<a href="'.Yii::app()->request->baseUrl.'/imagenes/'.$m->imagen.'" rel="lightbox"><img title="'.$m->nombre.'" src="'.Yii::app()->request->baseUrl.'/imagenes/'.$m->imagen.'" width="20px" height="20px"></a>'; } ?></td>
    	<td>&nbsp;&nbsp;<span class="nombre"><?PHP echo ucwords($m->nombre); ?></span>
    	<br><span class="describir"><?PHP echo ucwords($m->descripcion); ?></span><br><br>
    	<td align="left" width="16%"><?PHP echo '$'.number_format($m->precio); ?></td>
   	</tr>

<?PHP } ?>
</table>
<br>

<div id="ancho">
</div>

</div>

<script type="text/javascript">
$('input:button').click(function(){
	var $calculo = $(this).val();
	var $name = $(this).attr('name');
	var $input = $('input:text[name='+$name+']');
	var $total = $('#total');
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