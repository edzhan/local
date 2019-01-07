<?php
/**
 * Created by PhpStorm.
 * User: edzhan
 * Date: 2019-01-06
 * Time: 05:45
 */

namespace app\controllers;

class MyController extends AppController
{
    public function actionIndex($user = null){
        $hi = 'Hello, Index';
        $names = ['Ivanov','Petrov','Sid'];
        return $this->render('index', compact('hi','names', 'user'));
    }
}