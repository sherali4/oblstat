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
                 public function actionVvp (){
            return $this->render('vvp');
        }
                 public function actionRuyxat (){
            return $this->render('ruyxat');
        }
                 public function actionShakl (){
            return $this->render('shakl');
        }
                 public function actionTel (){
            return $this->render('tel');
        }
                 public function actionHujjat (){
            return $this->render('hujjat');
        }
                 public function actionAbout (){
            return $this->render('about');
        }
    }
          
?>