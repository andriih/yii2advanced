<?php
 namespace frontend\models;
 use Yii;
 use frontend\components\StringHelper;

 class Test
 {
     public static function getNewsList($max)
     {
        $max = intval($max);
        $sql = 'SELECT * FROM news LIMIT '. $max;

        $result =  Yii::$app->db->createCommand($sql)->queryAll();
        $helper = new StringHelper();
        $helper2 = Yii::$app->stringHelper;

        if(!empty($result) && is_array($result)) {
            foreach ($result as &$item) {
                $item['content'] = $helper2->getShort($item['content']);
            }
        }

        return $result;
     }
 }