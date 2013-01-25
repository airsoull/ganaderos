<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'inicio-form',
	'enableAjaxValidation'=>true,
        'htmlOptions' => array('enctype' => 'multipart/form-data'),
         'enableClientValidation'=>false,
        'clientOptions'=>array(
            'validateOnSubmit'=>true,
        )
)); ?>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'id_tipoinicio'); ?>
                <?PHP echo $form->dropDownList($model, 'id_tipoinicio', CHtml::listData(Tipoinicio::model()->findAll(), 'id_tipoinicio', 'nombre'), array('empty'=>'Elija Tipo')); ?>
		<?php echo $form->error($model,'id_tipoinicio'); ?>
	</div>

    <div class="row" id="restDes" style="display:none">
    	<?php echo $form->labelEx($model,'id_vinarestaurant'); ?>
    	<?PHP echo $form->dropDownList($model,'id_vinarestaurant', CHtml::listData(Restaurantes::model()->findAll(), 'id_restaurantes', 'nombre'), array('empty'=>'Elija Restaurant', 'class'=>'restaurant', 'disabled'=>'disabled')); ?>
    </div>	

    <div class="row" id="vinaDes" style="display:none">
    	<?php echo $form->labelEx($model,'id_vinarestaurant'); ?>
    	<?PHP echo $form->dropDownList($model,'id_vinarestaurant', CHtml::listData(Vina::model()->findAll(), 'id_vina', 'nombre'), array('empty'=>'Elija Vina', 'class'=>'vina', 'disabled'=>'disabled')); ?>
    </div>
    	<script type="text/javascript">

    		$(document).ready(function(e) {
        		if($('#Inicio_id_tipoinicio').val() == 1)
        		{
        			$('.restaurant').removeAttr('disabled');
    				$('.vina').attr('disabled', 'disabled');
        			$('#restDes').slideToggle('200');
        		}

        		if($('#Inicio_id_tipoinicio').val() == 2){
        			$('.vina').removeAttr('disabled');
    				$('.restaurant').attr('disabled', 'disabled');
    				$('#vinaDes').slideToggle('200');
        		}
    		});

    		jQuery('body').delegate('#Inicio_id_tipoinicio', 'change', function(){
    			$tipo = $('#Inicio_id_tipoinicio').val();
    			if($tipo != 1 || $tipo != 2)
    			{
    				$('.restaurant, .vina').attr('disabled', 'disabled');
    				$('#restDes,#vinaDes').slideUp('200');
    			}
    			if($tipo == 1)
    			{
    				$('.restaurant').removeAttr('disabled');
    				$('.vina').attr('disabled', 'disabled');
    				$('#restDes').slideToggle('200');
    			}
    			if($tipo == 2){
    				$('.vina').removeAttr('disabled');
    				$('.restaurant').attr('disabled', 'disabled');
    				$('#vinaDes').slideToggle('200');
    			}
    		});
    		
    		if(false){
    			//$('.restaurant').attr('disabled','-1');
    			$('.restaurant').removeAttr('disabled');
    		}
    	</script>

	<div class="row">
		<?PHP echo $form->labelEx($model, 'imagen');
            ?>
             <?PHP if(!$model->isNewRecord){ ?>
                <span><div style="width:50px;"><a href="<?PHP echo Yii::app()->request->baseUrl.'/imagenes/'.$model->imagen; ?>" rel="lightbox"><img src="<?PHP echo Yii::app()->request->baseUrl.'/imagenes/'.$model->imagen; ?>" width="100%"></a></div></span>
                <?PHP } ?>
            <?PHP
			  echo $form->fileField($model, 'image');
			  echo $form->error($model, 'image'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'titulo'); ?>
		<?php echo $form->textField($model,'titulo',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'titulo'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'descripcion'); ?>
		<?php echo $form->textArea($model,'descripcion',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'descripcion'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Crear' : 'Guardar'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->