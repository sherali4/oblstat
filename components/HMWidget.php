<?php
namespace app\components;
use yii\base\Widget; 
use app\models\HeaderMenu;
use Yii;
class HMWidget extends Widget
{
    public function run(){
        $id = Yii::$app->request->get('id');
        $links = HeaderMenu::find()->orderBy(['sort'=>SORT_ASC])->all();
        return $this->render('headermenu',compact('links'));
    }
}
//menyu

?>