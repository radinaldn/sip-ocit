<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\KeadaanPendudukSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Keadaan Penduduks';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="keadaan-penduduk-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Keadaan Penduduk', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id_keadaan_penduduk',
            'id_sekolah',
            'id_bulan_aktif',
            'nama_tenaga_pendidik',
            'tempat_lahir',
            //'tanggal_lahir',
            //'no_telp',
            //'jabatan_mapel_diajar',
            //'pendidikan_ijazah_terakhir',
            //'status_kepegawaian',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
