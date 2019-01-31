<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\PerlengkapanPembelajaranSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Perlengkapan Pembelajarans';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="perlengkapan-pembelajaran-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Perlengkapan Pembelajaran', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id_perlengkapan_pembelajaran',
            'id_sekolah',
            'id_bulan_aktif',
            'buku_pedoman_guru',
            'buku_teks_siswa',
            //'alat_peraga',
            //'komputer',
            //'listrik',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
