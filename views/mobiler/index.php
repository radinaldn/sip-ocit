<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\MobilerSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Mobilers';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="mobiler-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Mobiler', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id_mobiler',
            'id_sekolah',
            'id_bulan_aktif',
            'lemari_guru',
            'meja_guru',
            //'kursi_guru',
            //'lemari_siswa',
            //'meja_siswa',
            //'kursi_siswa',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
