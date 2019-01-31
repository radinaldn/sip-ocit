<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\TanahBangunan */

$this->title = $model->id_tanah_bangunan;
$this->params['breadcrumbs'][] = ['label' => 'Tanah Bangunans', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="tanah-bangunan-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id_tanah_bangunan], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id_tanah_bangunan], [
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
            'id_tanah_bangunan',
            'id_sekolah',
            'id_bulan_aktif',
            'tanah',
            'bangunan',
            'ruang_belajar',
            'ruang_tu',
            'ruang_kepala',
            'ruang_majelis_guru',
            'perpustakaan',
            'ruang_komputer',
            'tempat_ibadah',
            'wc_guru',
            'wc_siswa',
        ],
    ]) ?>

</div>
