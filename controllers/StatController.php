<?php
namespace app\controllers;
use yii\base\Controller;

class StatController extends Controller
    {
  
        public $layout = 'my';
        public function actionNews (){
            return $this->render('news');
        }
            public function actionPress (){
            return $this->render('pressreliz');
        }
         public function actionReport (){
            return $this->render('report');
        }
    }
          
?>