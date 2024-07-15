<?php

use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Prodi */
?>
<div class="prodi-view">
 
    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id_prodi',
            'nama_prodi',
        ],
    ]) ?>

</div>
