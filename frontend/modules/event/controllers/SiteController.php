<?php
namespace app\modules\event\controllers;

use Yii;
use yii\web\Controller;
use app\modules\event\models\Userdata;


/**
 * Site controller
 */
class SiteController extends Controller
{
	public $layout = 'main';
 

    public function actionList()
    {
		$model=new Userdata();
		$model->name='User';
		$model->state='Offline';
		$model->points=100;
		$model->likes=50;
		$model->messages=10;

	   \Yii::$app->session['model'] = $model;
		return $this->render('list',['model'=>$model]);
    }


    public function actionSingle()
    {
		$model = new Userdata();	
		$model->name='User';
		$model->state='Online';
		$model->points=200;
		$model->likes=5;
		$model->messages=15;
		
		
        return $this->render('single',['model'=>$model]);
    }

   
   
}
