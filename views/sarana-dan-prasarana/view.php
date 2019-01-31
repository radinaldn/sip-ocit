<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\SaranaDanPrasarana */

$this->title = $model->id_sarana_dan_prasarana;
$this->params['breadcrumbs'][] = ['label' => 'Sarana Dan Prasaranas', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="sarana-dan-prasarana-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id_sarana_dan_prasarana], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id_sarana_dan_prasarana], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id_sarana_dan_prasarana',
            'id_sekolah',
            'id_bulan_aktif',
            'tanah_bangunan',
            'mobiler',
            'perlengkapan_pembelajaran',
        ],
    ]) ?>

</div>
