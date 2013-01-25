<?PHP $this->pageTitle = $model->nombre ?>
<div class="clearfix">
            	<div class="sixteen columns">
                	<h1 class="page-title"><?PHP echo $model->nombre; ?></h1>
                </div>
            </div>
    <div class="clearfix top30">
        <div class="ten columns">
            <figure class="img-container"><img src="<?PHP echo Yii::app()->request->baseUrl.'/imagenes/'.$model->imagenPrincipal; ?>" alt="" class="scale-with-grid"/></figure>
        </div>
        <div class="five columns offset-by-one">
            <h6>Teléfono&nbsp;<?PHP echo $model->telefono; ?></h6>
                    <?PHP echo $model->descripcion; ?>
                    <div class="top20"><?php echo CHtml::link('Ver Carta', array('/carta/ver/tipo/restaurant/id/'.$model->id_restaurantes), array('class'=>'link')); ?></div>
        </div>
        </div>

        <div class="clearfix top30">
        <div class="ten columns">
            <figure class="img-container"><img src="<?PHP echo Yii::app()->request->baseUrl.'/imagenes/'.$model->direccion; ?>" alt="" class="scale-with-grid"/></figure>
        </div>
        <div class="five columns offset-by-one">
            <h6>Dirección</h6>
                <?PHP echo $model->direcciond; ?>
        </div>
        </div>
        <?PHP if($model->activarpromocion == 1){ ?>
        <div class="clearfix top30">
        <div class="ten columns">
            <figure class="img-container"><img src="<?PHP echo Yii::app()->request->baseUrl.'/imagenes/'.$model->imagenPromocion; ?>" alt="" class="scale-with-grid"/></figure>
        </div>
        <div class="five columns offset-by-one">
            <h6>Promoción</h6>
                Imprime o baje la promoción
                <br>
                <a href="javascript:void(0)"><img src="<?php echo Yii::app()->theme->baseUrl; ?>/images/Printer.png" class="print" title="Haz click para imprimir el ticket"></a>
                <?PHP  /* <a href="javascript:void(0)"><img src="<?php echo Yii::app()->theme->baseUrl; ?>/images/file_pdf.png" class="pdf" title="Haz click para imprimir el ticket"></a> */ ?>
                <div id="cargar" style="display:none"></div>
            </div>
        </div>
        <?PHP } ?>

        <?PHP if($gal != null){ ?>
        <div class="clearfix top30">
        <div class="sixteen columns">
        


                <div id="rg-gallery" class="rg-gallery">
    <div class="rg-thumbs">
        <!-- Elastislide Carousel Thumbnail Viewer -->
        <div class="es-carousel-wrapper">
            <div class="es-nav">
                <span class="es-nav-prev">Previous</span>
                <span class="es-nav-next">Next</span>
            </div>
            <div class="es-carousel">
                <ul>
                    <?PHP foreach($gal as $g){ ?>
                    <li>
                        <a href="#">
                            <img src="<?PHP echo Yii::app()->request->baseUrl.'/imagenes/'.$g->imagen ?>" data-large="<?PHP echo Yii::app()->request->baseUrl.'/imagenes/'.$g->imagen ?>" alt="<?PHP echo $g->descripcion ?>" data-description="<?PHP echo $g->descripcion ?>" />
                        </a>
                    </li>
                    <?PHP } ?>
                </ul>
            </div>
        </div>
        <!-- End Elastislide Carousel Thumbnail Viewer -->
    </div><!-- rg-thumbs -->
</div>
</div>
</div>
<?PHP } ?>


        <script type="text/javascript">
            $('.print').printPage({
                url: '<?PHP echo str_replace(" ", "%20", Yii::app()->request->baseUrl) ?>/restaurant/promocion/<?PHP echo $model->id_restaurantes ?>',
                message: 'Su ticket promocional se imprimirá',
            });

            $('.pdf').on('click', function(){
                var doc = new jsPDF();
                doc.load('<?PHP echo str_replace(" ", "%20", Yii::app()->request->baseUrl) ?>/restaurant/promocion/<?PHP echo $model->id_restaurantes ?>');
                doc.addPage();
                doc.text(20, 20, 'Do you like that?');
                doc.output('datauri');
            });

        </script>
