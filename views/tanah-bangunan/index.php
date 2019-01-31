<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\TanahBangunanSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Tanah Bangunans';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tanah-bangunan-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Tanah Bangunan', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id_tanah_bangunan',
            'id_sekolah',
            'id_bulan_aktif',
            'tanah',
            'bangunan',
            //'ruang_belajar',
            //'ruang_tu',
            //'ruang_kepala',
            //'ruang_majelis_guru',
            //'perpustakaan',
            //'ruang_komputer',
            //'tempat_ibadah',
            //'wc_guru',
            //'wc_siswa',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
