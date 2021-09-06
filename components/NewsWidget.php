<?php
namespace app\components;
use yii\base\Widget; 
use app\models\News;
use Yii;
class NewsWidget extends Widget
{
    public function run(){
        $id = Yii::$app->request->get('id');
        $links = News::find()->orderBy(['id'=>SORT_ASC])->all();
        return $this->render('news',compact('links'));
    }
}
//menyu

?>