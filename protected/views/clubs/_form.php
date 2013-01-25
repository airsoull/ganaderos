<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'club-form',
	'enableAjaxValidation'=>true,
        'htmlOptions' => array('enctype' => 'multipart/form-data'),
        'enableClientValidation'=>false,
        'clientOptions'=>array(
            'validateOnSubmit'=>true,
       	)
)); ?>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'imagen'); ?>
		<?PHP if(!$model->isNewRecord){ ?>
                <span><div style="width:50px;"><a href="<?PHP echo Yii::app()->request->baseUrl.'/imagenes/'.$model->imagen; ?>" rel="lightbox"><img src="<?PHP echo Yii::app()->request->baseUrl.'/imagenes/'.$model->imagen; ?>" width="100%"></a></div></span>
                <?PHP } ?>
		<?php echo $form->fileField($model, 'image'); ?>
		<?php echo $form->error($model,'imagen'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'descripcion'); ?>
		<?PHP
		$this->widget('ext.niceditor.nicEditorWidget',array(
    "model"=>$model,                // Data-Model
    "attribute"=>'descripcion',        // Attribute in the Data-Model
    "defaultValue"=>'defaultValue text here',
    "config"=>array("maxHeight"=>"400px"),
    "width"=>"600px",       // Optional default to 100%
    "height"=>"200px",      // Optional default to 150px
)); ?>
		<?php echo $form->error($model,'descripcion'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'id_envio'); ?>
		<?php echo $form->dropDownList($model,'id_envio', Chtml::listData(Envio::model()->findAll(), 'id_envio', 'descripcion'), array('empty'=>'Promoción Activada')); ?>
		<?php echo $form->error($model,'id_envio'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'imagen_promocion'); ?>
		<?PHP if(!$model->isNewRecord){ ?>
                <span><div style="width:50px;"><a href="<?PHP echo Yii::app()->request->baseUrl.'/imagenes/'.$model->imagen_promocion; ?>" rel="lightbox"><img src="<?PHP echo Yii::app()->request->baseUrl.'/imagenes/'.$model->imagen_promocion; ?>" width="100%"></a></div></span>
                <?PHP } ?>
		<?php echo $form->fileField($model, 'images'); ?>
		<?php echo $form->error($model,'imagen_promocion'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Crear' : 'Guardar'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->