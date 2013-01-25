<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'pagina-form',
	'enableAjaxValidation'=>true,
	'htmlOptions' => array('enctype' => 'multipart/form-data'),
	'enableClientValidation'=>false,
        'clientOptions'=>array(
            'validateOnSubmit'=>true,
        )
)); ?>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'titulo'); ?>
		<?php echo $form->textField($model,'titulo',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'titulo'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'mailContactoUno'); ?>
		<?php echo $form->textField($model,'mailContactoUno',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'mailContactoUno'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'mailContactoDos'); ?>
		<?php echo $form->textField($model,'mailContactoDos',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'mailContactoDos'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'telefono'); ?>
		<?php echo $form->textField($model,'telefono'); ?>
		<?php echo $form->error($model,'telefono'); ?>
	</div>
	<br><br>
	<strong>¿Quiénes Somos?</strong>
	<br>

	<div class="row">
		<?php echo $form->labelEx($model,'imagen'); ?>
		<?PHP if(!$model->isNewRecord){ ?>
                <span><div style="width:50px;"><a href="<?PHP echo Yii::app()->request->baseUrl.'/imagenes/'.$model->imagen; ?>" rel="lightbox"><img src="<?PHP echo Yii::app()->request->baseUrl.'/imagenes/'.$model->imagen; ?>" width="100%"></a></div></span>
                <?PHP } ?>
		<?php echo $form->fileField($model, 'image'); ?>
		<?php echo $form->error($model,'imagen'); ?>
	</div>

	<div class="row">
		<?PHP
		$this->widget('ext.niceditor.nicEditorWidget',array(
    "model"=>$model,                // Data-Model
    "attribute"=>'descripcion',        // Attribute in the Data-Model
    "defaultValue"=>'defaultValue text here',
    "config"=>array("maxHeight"=>"400px"),
    "width"=>"600px",       // Optional default to 100%
    "height"=>"200px",      // Optional default to 150px
)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Crear' : 'Guardar'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->