<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\SumberSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Sumbers';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="sumber-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Sumber', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id_sumber',
            'id_sekolah',
            'id_bulan_aktif',
            'sumber',
            'pengeluaran',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
