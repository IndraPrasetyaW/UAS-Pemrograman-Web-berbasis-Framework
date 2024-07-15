<?php

use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\fakultas */
?>
<div class="fakultas-view">
 
    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id_Fakultas',
            'nama_Fakultas',
        ],
    ]) ?>

</div>
