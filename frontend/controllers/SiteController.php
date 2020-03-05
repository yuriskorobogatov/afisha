<?php
namespace app\controllers;

use Yii;
use yii\base\InvalidArgumentException;
use yii\web\BadRequestHttpException;
use yii\web\Controller;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;
use app\models\UserData;


/**
 * Site controller
 */
class SiteController extends Controller
{
	
	$model = new UserData;
	$model->name = "User";
	$model->state = "Online";
	$model->points = 250;
	$model->likes = 5;
	$model->messages = 10;
  
    public function actionList()
    {
        return $this->render('list',['model'=>$model,]);
    }


    public function actionSingle()
    {
        return $this->render('single',['model'=>$model,]);
    }

   
   
}
