<?php
class ServiciosController extends Controller
{   
    
    public function filters()
	{
		return array(
			'accessControl', // perform access control for CRUD operations
		);
	}
    
    
    public function accessRules() {
        return array(
			array('deny',  // allow all users to perform 'index' and 'view' actions
				'actions'=>array('vina', 'restaurant', 'promocion', 'pdfpromocion'),
				'users'=>array('*'),
			),
                        /*
			array('deny', // allow authenticated user to perform 'create' and 'update' actions
				'actions'=>array('create','delete','index'),
				'users'=>array('*'),
			),
                         * 
                         */
			array('deny',  // deny all users
				'users'=>array('*'),
			),
                         
		);
    }
    
    public function actionIndex(){

    }

    public function actionPromocion($id){
		$this->renderPartial('_promocion', array('id' => $id));
    }

    public function actionPdfpromocion($id){
    	$mPDF1 = Yii::app()->ePdf->mpdf();
    	$mPDF1->WriteHTML('<span style="font-size: 25px;font-weight:bold;">Los Ganaderos - Promoción</span>');
		$mPDF1->WriteHTML($this->renderPartial('_promocion', array('id' => $id), true));
		$mPDF1->Output();
    }

    public function actionVina($id){
    	$model=Vina::model()->find();
		$this->render('_vina', array('model'=>$model));
    }

    public function actionRestaurant($id){
    	$contar = Restaurantes::model()->count('id_restaurantes = '.$id);
    	if($contar != 0){
			$model = Restaurantes::model()->find('id_restaurantes = '.$id);
			$this->render('_restaurant', array('model'=>$model));
		} else {
			$this->redirect(array('/index.php'));
		}
    }
}
?>
