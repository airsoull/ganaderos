<?PHP $this->pageTitle = 'Restaurantes' ?>
<div class="clearfix">
            	<div class="sixteen columns">
                	<h1 class="page-title">Restaurantes</h1>
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
                    <div class="top20"><?php echo CHtml::link('Saber Más', array('/restaurant/'.$m->id_restaurantes), array('class'=>'link')); ?></div>
        </div>
        </div>
<?PHP } ?>