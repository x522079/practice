<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/12/5 0005
 * Time: 21:40
 */

namespace backend\controllers;


use common\models\TUser;
use yii\data\ArrayDataProvider;
use yii\web\Controller;

class UsersController extends Controller
{
    public function actionIndex(){
        $users=TUser::find()->asArray()->all();
        $dataProvider=new ArrayDataProvider([
            'allModels' => $users,
            'modelClass' => new TUser()
        ]);

        return $this->render('index',['dataProvider'=>$dataProvider]);
    }

    public function actionAdd(){
        $model=new TUser();
        return $this->render('add',['model'=>$model]);
    }

    public function actionCreate(){

    }

    public function actionUpdate(){

    }
}