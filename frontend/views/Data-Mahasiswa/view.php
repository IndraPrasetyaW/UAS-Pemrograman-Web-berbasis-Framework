<?php

use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\DataMahasiswa */
?>
<div class="DataMahasiswa-view">
 
    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id_mahasiswa',
            'nama_mahasiswa',
        ],
    ]) ?>

</div>
