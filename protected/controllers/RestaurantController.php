<?php
class RestaurantController extends Controller
{   
    
    public function filters()
	{
		return array(
			'accessControl', // perform access control for CRUD operations
		);
	}
    
    
    public function accessRules() {
        return array(
			array('allow',  // allow all users to perform 'index' and 'view' actions
				'actions'=>array('index', 'view', 'promocion'),
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
    
    public function actionIndex()
    {
    	$model = Restaurantes::model()->findAll();
		$this->render('index', array('model'=>$model));
    }

    public function actionView($id){
    	$contar = Galeria::model()->count('id_restaurantes ='.$id);
    	$gal = null;
    	if($contar > 0){
    		$gal = Galeria::model()->findAll('id_restaurantes ='.$id);
    	}

    	$model = Restaurantes::model()->find('id_restaurantes ='.$id);
    	$this->render('_view', array('model'=>$model, 'gal'=>$gal));
    }

    public function actionPromocion($id){
    	$model = Restaurantes::model()->find(array('select'=>'imagenPromocion, telefono, nombre', 'condition'=>'id_restaurantes ='.$id));
		$this->render('_promocion', array('model' => $model, Yii::app()->theme='pdf'));
    }
}
?>
