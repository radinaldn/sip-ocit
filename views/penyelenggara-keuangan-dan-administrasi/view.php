<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\PenyelenggaraKeuanganDanAdministrasi */

$this->title = $model->id_penyelenggara_keuangan;
$this->params['breadcrumbs'][] = ['label' => 'Penyelenggara Keuangan Dan Administrasis', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="penyelenggara-keuangan-dan-administrasi-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id_penyelenggara_keuangan], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id_penyelenggara_keuangan], [
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
            'id_penyelenggara_keuangan',
            'id_sekolah',
            'id_bulan_aktif',
            'sumber',
            'pengeluaran',
        ],
    ]) ?>

</div>
