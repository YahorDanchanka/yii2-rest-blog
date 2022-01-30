<?php

namespace frontend\controllers;

use common\models\Post;
use yii\filters\Cors;
use yii\rest\ActiveController;

class PostController extends ActiveController {
    public $modelClass = Post::class;

    public function behaviors()
    {
        $behaviors = parent::behaviors();

        $behaviors['corsFilter'] = [
            'class' => Cors::class
        ];

        return $behaviors;
    }
}
