<?php

use yii\bootstrap5\Html;
use yii\widgets\ActiveForm;
use yii\web\UploadedFile;

/* @var $this yii\web\View */
/* @var $model app\models\mahasiswa */
/* @var $form yii\widgets\ActiveForm */

?>

<?php $form = ActiveForm::begin([
    'id' => 'mahasiswa-form',
    'method' => 'post',
    'options' => ['enctype' => 'multipart/form-data']
]); ?>

<?= $form->errorSummary($model) ?> <!-- Tampilkan kesalahan validasi -->

<?= $form->field($model, 'nim_mahasiswa')?>

<?= $form->field($model, 'nama_mahasiswa')?>

<?= $form->field($model, 'prestasi_mahasiswa')?>

<?= $form->field($model, 'fotoFile')->fileInput()?>

<input type="hidden" name="<?= Yii::$app->request->csrfParam ?>" value="<?= Yii::$app->request->csrfToken ?>">

<div class="form-group">
    <?= Html::submitButton('Buat', ['class' => 'btn btn-success'])?>
</div>

<?php ActiveForm::end(); ?>