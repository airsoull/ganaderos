<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'mailenviar-form',
	'enableAjaxValidation'=>true,
	'enableClientValidation'=>false,
        'clientOptions'=>array(
            'validateOnSubmit'=>true,
        )
)); ?>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'asunto'); ?>
		<?php echo $form->textField($model,'asunto',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'asunto'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'texto'); ?>
		<?php #echo $form->textArea($model,'texto',array('rows'=>6, 'cols'=>50)); ?>
		<?PHP
		$this->widget('ext.niceditor.nicEditorWidget',array(
    "model"=>$model,                // Data-Model
    "attribute"=>'texto',        // Attribute in the Data-Model
    "defaultValue"=>'defaultValue text here',
    "config"=>array("maxHeight"=>"400px"),
    "width"=>"600px",       // Optional default to 100%
    "height"=>"200px",      // Optional default to 150px
)); ?>
		<?php echo $form->error($model,'texto'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Enviar' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->