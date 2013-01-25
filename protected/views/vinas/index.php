<?PHP $this->pageTitle = 'Viñas' ?>
<div class="clearfix">
            	<div class="sixteen columns">
                	<h1 class="page-title">Viñedos</h1>
                </div>
            </div>
<?PHP foreach($model as $m){ ?>
    <div class="clearfix top30">
        <div class="ten columns">
            <figure class="img-container"><img src="<?PHP echo Yii::app()->request->baseUrl.'/imagenes/'.$m->imagenPrincipal; ?>" alt="" class="scale-with-grid"/></figure>
        </div>
        <div class="five columns offset-by-one">
            <h6><?PHP echo $m->nombre; ?></h6>
                    <span class="date">Teléfono&nbsp;<strong><?PHP echo $m->telefono; ?></strong></span>
                    <?PHP echo $m->descripcion; ?>
                    <div class="top20"><?php echo CHtml::link('Saber Más', array('/vinas/'.$m->id_vina), array('class'=>'link')); ?></div>
        </div>
        </div>
<?PHP } ?>