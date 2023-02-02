<?php

namespace app\models;

use yii\db\ActiveRecord;

class mysite extends ActiveRecord {
    public static function phoneName(){
        return 'Users';
    }
}

?>