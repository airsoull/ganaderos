<?php
class ContactoController extends Controller
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
				'actions'=>array('index'),
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
    	$model=new Mail;
    	$res = Restaurantes::model()->findAll();
		if(isset($_POST['Mail']))
		{
			$this->performAjaxValidation($model);
			$model->attributes=$_POST['Mail'];
			$model->setAttribute('mail', $model->getAttribute('email'));
			$model->setAttribute('idenvio', 1);
			$contar = $model->count("mail = '".$model->getAttribute('mail')."'");
			if($contar == 0)
			{
				if($model->save()){
					//Se guarda y se envia mail
				}
			}else{
					//Solo se envia mail
			}

			$m = new Mensaje;
			$m->setAttribute('mail', $_POST['Mail']['email']);
			$m->setAttribute('asunto', $_POST['Mail']['nombre']);
			$m->setAttribute('mensaje', $_POST['Mail']['mensaje']);
			$m->save();
			#print_r($m->getErrors());
		}
		$this->render('index', array('model'=>$model, 'res'=>$res));
    }


    public function actionGuardar(){
    	echo "dsadsadsa";
    }


    protected function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='pagina-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}
}
?>
