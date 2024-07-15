<?php

namespace frontend\controllers;

use yii\web\Controller;

class PageController extends Controller
{
    public function actionIndex()
    {
        return $this->render('index');
    }

    public function actionNewPage()
    {
        return $this->render('new-page');
    }
}
