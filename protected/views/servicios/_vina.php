<div id="quienes">
	<div id="head">
		<h1><?PHP echo $model->nombre; $id = $model->id_vina;?></h1>
	</div>
	<div id="descripcion">
		<div id="imgprincipal">
			<img src = "<?PHP echo Yii::app()->request->baseUrl.'/imagenes/'.$model->imagenPrincipal; ?>">
		</div>
		<?PHP $direccion = str_replace(' ', '+', $model->direccion) ?>
		<!--
		<iframe width="100%" height="200" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" 
		src="http://maps.google.com.ar/maps?f=q&amp;source=s_q&amp;hl=es&amp;q=<?PHP echo $direccion ?>,+Chile&amp;sll=-38.341656,-63.28125&amp;sspn=90.773575,214.277344&amp;ie=UTF8&amp;geocode=FS7Z__0dXETL-w&amp;split=0&amp;hq=&amp;hnear=<?PHP echo $direccion ?>,+Chile&amp;t=m&amp;z=14&amp;ll=-33.56437,-70.564772&amp;output=embed"></iframe><br /><small><a href="http://maps.google.com.ar/maps?f=q&amp;source=embed&amp;hl=es&amp;q=Laguna+Caren+1751,+Puente+Alto,+Cordillera,+Regi%C3%B3n+Metropolitana,+Chile&amp;sll=-38.341656,-63.28125&amp;sspn=90.773575,214.277344&amp;ie=UTF8&amp;geocode=FS7Z__0dXETL-w&amp;split=0&amp;hq=&amp;hnear=Laguna+Caren+1751,+Puente+Alto,+Cordillera,+Regi%C3%B3n+Metropolitana,+Chile&amp;t=m&amp;z=14&amp;ll=-33.56437,-70.564772" style="color:#0000FF;text-align:left"></a></small>
		-->
		<br>
		<div style="margin-right: 5%; margin-left: 5%">
		<ul>
			<li>Teléfono: <?PHP echo ucwords($model->telefono); ?></li>
		</ul>
		<br>
		<?PHP echo $model->descripcion ?>
		<br>
		<h2 style="font-size:30px;">Destacados</h2>
		<br>
		<?PHP echo $model->destacados ?>
		<br>
		<h2 style="font-size:30px;">Actividades</h2>
		<br>
		<?PHP echo $model->actividades ?>
		</div>
		<div id="ancho">&nbsp;</div>

	</div>
</div>