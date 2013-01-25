<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'alimentos-form',
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
		<?php echo $form->labelEx($model,'descripcion'); ?>
		<?php echo $form->textArea($model,'descripcion',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'descripcion'); ?>
	</div>

	<div class="row">
		<?PHP echo $form->labelEx($model, 'imagen'); ?>
		<?PHP if(!empty($model->imagen)&&!$model->isNewRecord){ ?>
                <span><div style="width:50px;"><a href="<?PHP echo Yii::app()->request->baseUrl.'/imagenes/'.$model->imagen; ?>" rel="lightbox"><img src="<?PHP echo Yii::app()->request->baseUrl.'/imagenes/'.$model->imagen; ?>" width="100%"></a></div></span>
                <?PHP } ?>
        <?PHP echo $form->fileField($model, 'image'); ?>
        <?PHP echo $form->error($model, 'image'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'precio'); ?>
		<?php echo '$ '.$form->textField($model,'precio'); ?>
		<?php echo $form->error($model,'precio'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'id_menucomida'); ?>
                <?php echo $form->dropDownList($model,'id_menucomida', Chtml::listData(Menucomida::model()->findAll(), 'id_menucomida', 'nombre'), array('empty'=>'Elija menú')); ?>
		<?php echo $form->error($model,'id_menucomida'); ?>
	</div>
    
        <div id="data">
            <?php #$this->renderPartial('_ajaxContent', array('myValue'=>$myValue)); ?>
        </div>
    
	<div class="row">
		<?php echo $form->labelEx($model,'id_categoriaalimentos'); ?>
		<?php echo $form->dropDownList($model,'id_categoriaalimentos', Chtml::listData(Categoriaalimentos::model()->findAll(), 'id_categoriaalimentos', 'nombre'), array('empty'=>'Elija Categoría Alimento')); ?>
		<?php echo $form->error($model,'id_categoriaalimentos'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Crear' : 'Guardar'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->