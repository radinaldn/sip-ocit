<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\KeadaanSiswa */

$this->title = $model->id_keadaan_siswa;
$this->params['breadcrumbs'][] = ['label' => 'Keadaan Siswas', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="keadaan-siswa-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id_keadaan_siswa], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id_keadaan_siswa], [
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
            'id_keadaan_siswa',
            'id_sekolah',
            'id_bulan_aktif',
            'kelas',
            'jumlah_rombel',
            'jumlah_siswa',
            'laki_laki',
            'perempuan',
            'jumlah_total',
            'mutasi_siswa',
            'masuk',
            'keluar',
            'rekapitulasi_absen',
            'sakit',
            'alpa',
            'izin',
            'jumlah_telegram',
            'keterangan',
        ],
    ]) ?>

</div>
