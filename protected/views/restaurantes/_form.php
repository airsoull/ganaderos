<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'restaurantes-form',
        'htmlOptions' => array('enctype' => 'multipart/form-data'),
	'enableAjaxValidation'=>true,
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
        <?PHP if(!$model->isNewRecord){ ?>
            <span><div style="width:50px;"><a href="<?PHP echo Yii::app()->request->baseUrl.'/imagenes/'.$model->direccion; ?>" rel="lightbox"><img src="<?PHP echo Yii::app()->request->baseUrl.'/imagenes/'.$model->direccion; ?>" width="100%"></a></div></span>
        <?PHP } ?>
        <?PHP echo $form->fileField($model, 'imagenDireccion'); ?>
		<?php echo $form->error($model,'direccion'); ?>
	</div>

    <div class="row">
        <?php echo $form->labelEx($model,'direcciond'); ?>
        <?php echo $form->textField($model,'direcciond',array('size'=>100,'maxlength'=>100)); ?>
        <?php echo $form->error($model,'direcciond'); ?>
    </div>

	<div class="row">
		<?php echo $form->labelEx($model,'telefono'); ?>
		<?php echo $form->textField($model,'telefono'); ?>
		<?php echo $form->error($model,'telefono'); ?>
	</div>
            
        <?PHP /*
	<div class="row">
		<?php echo $form->labelEx($model,'imagenPrincipal'); ?>
		<?php echo $form->textField($model,'imagenPrincipal',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'imagenPrincipal'); ?>
	</div>
         * 
         */?>
    
         <div class="row">
                <?PHP echo $form->labelEx($model, 'imagenPrincipal'); ?>
                <?PHP if(!$model->isNewRecord){ ?>
                <span><div style="width:50px;"><a href="<?PHP echo Yii::app()->request->baseUrl.'/imagenes/'.$model->imagenPrincipal; ?>" rel="lightbox"><img src="<?PHP echo Yii::app()->request->baseUrl.'/imagenes/'.$model->imagenPrincipal; ?>" width="100%"></a></div></span>
                <?PHP } ?>
                <span><?PHP echo $form->fileField($model, 'image'); ?></span>
                <?PHP echo $form->error($model, 'image'); ?>
         </div>
    
        <div class="row">
                <?PHP echo $form->labelEx($model, 'imagenPromocion'); ?>
                <?PHP if(!$model->isNewRecord){ ?>
                <span><div style="width:50px;"><a href="<?PHP echo Yii::app()->request->baseUrl.'/imagenes/'.$model->imagenPromocion; ?>" rel="lightbox"><img src="<?PHP echo Yii::app()->request->baseUrl.'/imagenes/'.$model->imagenPromocion; ?>" width="100%"></a></div></span>
                <?PHP } ?>
                <?PHP echo $form->fileField($model, 'imageDos'); ?>
                <?PHP echo $form->error($model, 'imageDos'); ?>
         </div>
        
        <?PHP /*
	<div class="row">
		<?php echo $form->labelEx($model,'imagenPromocion'); ?>
		<?php echo $form->textField($model,'imagenPromocion',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'imagenPromocion'); ?>
	</div>
         * 
         */
        ?>
    
        <div class="row">
		<?php echo $form->labelEx($model,'activarpromocion'); ?>
                <?php echo $form->dropDownList($model,'activarpromocion', Chtml::listData(Envio::model()->findAll(), 'id_envio', 'descripcion'), array('empty'=>'Promoción Activada')); ?>
		<?php echo $form->error($model,'activarpromocion'); ?>
	</div>

	<div class="row">
		<?php /* echo $form->labelEx($model,'descripcion'); ?>
		<?php $this->widget('application.extensions.eckeditor.ECKEditor', array(
                'model'=>$model,
                'attribute'=>'descripcion',
                'config' => array(
                    'toolbar'=>array(
                        array('Bold', 'Italic', 'Underline', 'Strike','-', 'NumberedList','BulletedList','-','JustifyLeft','JustifyCenter','JustifyRight','JustifyBlock','Format','Font','FontSize'),
                        #array( 'Image', 'Link', 'Unlink', 'Anchor' ),
                    ))
                )); ?>
		<?php echo $form->error($model,'descripcion'); */?>
	</div>
    
    <div class ="row">
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
    
	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Crear' : 'Guardar'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->