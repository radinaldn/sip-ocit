<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\KeadaanPenduduk */

$this->title = $model->id_keadaan_penduduk;
$this->params['breadcrumbs'][] = ['label' => 'Keadaan Penduduks', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="keadaan-penduduk-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id_keadaan_penduduk], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id_keadaan_penduduk], [
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
            'id_keadaan_penduduk',
            'id_sekolah',
            'id_bulan_aktif',
            'nama_tenaga_pendidik',
            'tempat_lahir',
            'tanggal_lahir',
            'no_telp',
            'jabatan_mapel_diajar',
            'pendidikan_ijazah_terakhir',
            'status_kepegawaian',
        ],
    ]) ?>

</div>
