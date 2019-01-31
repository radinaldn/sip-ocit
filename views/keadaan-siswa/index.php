<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\KeadaanSiswaSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Keadaan Siswas';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="keadaan-siswa-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Keadaan Siswa', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id_keadaan_siswa',
            'id_sekolah',
            'id_bulan_aktif',
            'kelas',
            'jumlah_rombel',
            //'jumlah_siswa',
            //'laki_laki',
            //'perempuan',
            //'jumlah_total',
            //'mutasi_siswa',
            //'masuk',
            //'keluar',
            //'rekapitulasi_absen',
            //'sakit',
            //'alpa',
            //'izin',
            //'jumlah_telegram',
            //'keterangan',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
