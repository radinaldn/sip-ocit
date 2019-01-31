<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\PenyelenggaraKeuanganDanAdministrasiSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Penyelenggara Keuangan Dan Administrasis';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="penyelenggara-keuangan-dan-administrasi-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Penyelenggara Keuangan Dan Administrasi', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id_penyelenggara_keuangan',
            'id_sekolah',
            'id_bulan_aktif',
            'sumber',
            'pengeluaran',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
