<?php

use common\models\Mahasiswa;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;
use yii\widgets\Pjax;
/** @var yii\web\View $this */
/** @var common\models\MahasiswaSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Mahasiswas';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="mahasiswa-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Mahasiswa', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php Pjax::begin(); ?>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id_mahasiswa',
            'nim',
            'nama',
            'id_prodi',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, Mahasiswa $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'id_mahasiswa' => $model->id_mahasiswa]);
                 }
            ],
        ],
    ]); ?>

    <?php Pjax::end(); ?>

</div>
