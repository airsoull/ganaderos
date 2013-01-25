<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'vina-form',
	'enableAjaxValidation'=>true,
	'htmlOptions' => array('enctype' => 'multipart/form-data'),
	'enableClientValidation'=>false,
        'clientOptions'=>array(
            'validateOnSubmit'=>true,
        )
)); ?>


	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'nombre'); ?>
		<?php echo $form->textField($model,'nombre',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'nombre'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'direccion'); ?>
		<?php echo $form->textField($model,'direccion',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'direccion'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'telefono'); ?>
		<?php echo $form->textField($model,'telefono'); ?>
		<?php echo $form->error($model,'telefono'); ?>
	</div>

	<div class="row">
		<?PHP 

		echo $form->labelEx($model, 'imagenPrincipal');
		?>
             <?PHP if(!$model->isNewRecord){ ?>
                <span><div style="width:50px;"><a href="<?PHP echo Yii::app()->request->baseUrl.'/imagenes/'.$model->imagenPrincipal; ?>" rel="lightbox"><img src="<?PHP echo Yii::app()->request->baseUrl.'/imagenes/'.$model->imagenPrincipal; ?>" width="100%"></a></div></span>
                <?PHP } ?>
            <?PHP
		echo $form->fileField($model, 'image');
		echo $form->error($model, 'image');

		?>

	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'destacados'); ?>
		<?php echo $form->textArea($model,'destacados',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'destacados'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'descripcion'); ?>
		<?php /* $this->widget('application.extensions.eckeditor.ECKEditor', array(
                'model'=>$model,
                'attribute'=>'descripcion',
                'config' => array(
                    'toolbar'=>array(
                        array('Bold', 'Italic', 'Underline', 'Strike','-', 'NumberedList','BulletedList','-','JustifyLeft','JustifyCenter','JustifyRight','JustifyBlock','Format','Font','FontSize'),
                        #array( 'Image', 'Link', 'Unlink', 'Anchor' ),
                    ))
                )); */ ?>
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
		<?PHP echo $form->labelEx($model, 'actividades'); ?>
		<?php /* $this->widget('application.extensions.eckeditor.ECKEditor', array(
                'model'=>$model,
                'attribute'=>'actividades',
                'config' => array(
                    'toolbar'=>array(
                        array('Bold', 'Italic', 'Underline', 'Strike','-', 'NumberedList','BulletedList','-','JustifyLeft','JustifyCenter','JustifyRight','JustifyBlock','Format','Font','FontSize'),
                        #array( 'Image', 'Link', 'Unlink', 'Anchor' ),
                    ))
                )); */ ?>
         <?PHP
		$this->widget('ext.niceditor.nicEditorWidget',array(
    "model"=>$model,                // Data-Model
    "attribute"=>'actividades',        // Attribute in the Data-Model
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