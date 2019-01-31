<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\AbsenBulanIniSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Absen Bulan Inis';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="absen-bulan-ini-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Absen Bulan Ini', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id_absen',
            'id_sekolah',
            'id_bulan_aktif',
            'sakit',
            'izin',
            //'alpa',
            //'jumlah',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
