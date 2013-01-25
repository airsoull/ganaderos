<?php
class CartaController extends Controller
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
				'actions'=>array('index', 'alimentos', 'vinos', 'ver'),
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
    	$menu = Menucomida::model()->findAll();
    	$vina=Vina::model()->findAll();
    	$ver = false;
		$this->render('index', array('model'=>$menu, 'vina'=>$vina, 'ver'=>$ver));
    }

    public function actionAlimentos($id){
		$alimentos = Alimentos::model()->findAll('id_menucomida = '.$id.' order by id_categoriaalimentos, precio');
		$tipo = Alimentos::model()->findAll(array(
			'select'=>'id_categoriaalimentos',
			'condition'=>'id_menucomida = '.$id,
			'group'=>'id_categoriaalimentos',
			'order'=>'id_categoriaalimentos, precio',
		));
    	$this->renderPartial('alimentos', array('model' => $alimentos, 'tipo'=>$tipo));
    }

    public function actionVinos($id){
		$alimentos = Vinos::model()->findAll('id_vina = '.$id.' order by nombre, precio');
    	$this->renderPartial('_vinos', array('model' => $alimentos));
    }

    public function actionVer($tipo, $id)
    {
    	$menu = Menucomida::model()->findAll();
    	$vina=Vina::model()->findAll();
    	$ver = true;
		$this->render('index', array('model'=>$menu, 'vina'=>$vina, 'ver'=>$ver, 'tipo'=>$tipo, 'id'=>$id));
    }
}
?>
