<?PHP $this->pageTitle = 'Club Ganaderos' ?>
<div class="clearfix">
    <div class="sixteen columns">
        <h1 class="page-title">Club Ganaderos</h1>
    </div>
</div>
<?php echo CHtml::image(Yii::app()->request->baseUrl.'/imagenes/'.$model->imagen, 'Club Ganaderos', array('class'=>'scale-with-grid')); ?>
<br><br>
<a name="quienes"></a>
<div class="sixteen columns">
    <h2 class="slogan">
        <?PHP echo $model->descripcion; ?> 
    </h2>
</div>
<?PHP if($model->id_envio == 1){ ?>
<br><br>
<div class="clearfix">
    <div class="sixteen columns">
        <h2>Promoción</h1>
    </div>
</div><br>
<?php echo CHtml::image(Yii::app()->request->baseUrl.'/imagenes/'.$model->imagen_promocion, 'Club Ganaderos', array('class'=>'scale-with-grid')); ?>
<?PHP } ?>