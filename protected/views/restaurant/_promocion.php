<h1><?PHP echo $model->nombre ?></h1><h2>Teléfono:&nbsp;<?PHP echo $model->telefono ?></h2>
<img src="<?PHP echo Yii::app()->request->baseUrl.'/imagenes/'.$model->imagenPromocion; ?>" alt="" class="scale-with-grid"/>