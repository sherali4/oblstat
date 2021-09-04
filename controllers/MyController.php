<?php
namespace app\controllers;
use yii\base\Controller;

class MyController extends Controller
    {
        //$layout ='my';
        public $layout = 'my';
        public function actionFermer (){
            return $this->render('fermer');
        }
    }
          
?>