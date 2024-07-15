<?php

use yii\bootstrap5\Html;
use yii\widgets\ActiveForm;
use yii\UploadedFile;

/* @var $this yii\web\View */
/* @var $model app\models\mahasiswa */

?>

<div class="mahasiswa-create">
    <?php $form = ActiveForm::begin(['options' => ['enctype' => 'multipart/form-data']]); ?>

    <?= $this->render('_form', [
        'model' => $model,
        'form' => $form,
    ]) ?>

    <?php ActiveForm::end(); ?>
</div>