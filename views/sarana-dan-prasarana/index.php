<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\SaranaDanPrasaranaSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Sarana Dan Prasaranas';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="sarana-dan-prasarana-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Sarana Dan Prasarana', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id_sarana_dan_prasarana',
            'id_sekolah',
            'id_bulan_aktif',
            'tanah_bangunan',
            'mobiler',
            //'perlengkapan_pembelajaran',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
