<?php
class VinedosController extends Controller
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
				'actions'=>array('index', 'vinos'),
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
    	$model=Vina::model()->findAll();
		$this->render('index', array('model'=>$model));
    }

     public function actionVinos($id){
		$alimentos = Vinos::model()->findAll('id_vina = '.$id.' order by nombre, precio');
    	$this->renderPartial('_vinos', array('model' => $alimentos));
    }
}
?>
