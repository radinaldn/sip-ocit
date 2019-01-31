<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\SekolahSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Sekolahs';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="sekolah-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Sekolah', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id_sekolah',
            'no_statistik',
            'no_telp',
            'alamat:ntext',
            'kecamatan',
            //'kabupaten',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
