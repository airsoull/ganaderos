<?PHP $this->pageTitle = 'Contacto' ?>
<div class="clearfix">
    <div class="sixteen columns">
        <h1 class="page-title">Contacto</h1>
    </div>
</div>
<div class="clearfix top30">
    <div class="ten columns">
        <?PHP if($_POST){ ?>
            <h3>Gracias Por Contactarnos</h3>
        <?PHP } ?>
            <?php $form = $this->beginWidget('CActiveForm', array(
	'id'=>'pagina-form',
	'enableAjaxValidation'=>true,
	'htmlOptions' => array('enctype' => 'multipart/form-data'),
	'enableClientValidation'=>false,
        'clientOptions'=>array(
            'validateOnSubmit'=>true,
        )
)); ?>

<?php echo $form->labelEx($model,'nombre'); ?>
<?php echo $form->textField($model,'nombre',array('size'=>30,'maxlength'=>50)); ?>
&nbsp;<?php echo $form->error($model,'nombre'); ?>

<?php echo $form->labelEx($model,'email'); ?>
<?php echo $form->textField($model,'email',array('size'=>30,'maxlength'=>50)); ?>
&nbsp;<?php echo $form->error($model,'email'); ?>

<?php echo $form->labelEx($model,'mensaje'); ?>
<?php echo $form->textArea($model,'mensaje',array('cols'=>34,'rows'=>10)); ?>
&nbsp;<?php echo $form->error($model,'mensaje'); ?>

<?php echo CHtml::submitButton(''); ?>
<?php $this->endWidget(); ?>


    </div>
    <div class="five columns offset-by-one">
    	<?PHP foreach($res as $r){ ?>
    		<div><strong><?php echo CHtml::link($r->nombre, array('/restaurant/'.$r->id_restaurantes)); ?></strong></div>
    		<div><strong>Teléfono</strong>&nbsp;<?PHP echo $r->telefono ?></div>
    		<div><strong>Dirección</strong>&nbsp;<?PHP echo $r->direcciond ?></div><br>
    	<?PHP } ?>
    </div>
</div>