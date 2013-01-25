<div id="imprimir">
	<?PHP $img = Restaurantes::model()->find('id_restaurantes = '.$id); ?>
	<img src = "<?PHP echo Yii::app()->request->baseUrl.'/imagenes/'.$img->imagenPromocion; ?>">
</div>