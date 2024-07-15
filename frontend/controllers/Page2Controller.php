<?php

namespace frontend\controllers;

use yii\web\Controller;

class Page2Controller extends Controller
{
    public function actionIndex()
    {
        return $this->render('index');
    }

    public function actionNewPage()
    {
        return $this->render('new-page2');
    }
}
