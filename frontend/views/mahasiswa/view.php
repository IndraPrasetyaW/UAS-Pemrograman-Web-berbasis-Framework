<?php

use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\mahasiswa */
?>
<div class="mahasiswa-view">
 
    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'nim_mahasiswa',
            'nama_mahasiswa',
            'prestasi_mahasiswa',
            'foto',
        ],
    ]) ?>

</div>
