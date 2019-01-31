<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\PerlengkapanPembelajaran */

$this->title = $model->id_perlengkapan_pembelajaran;
$this->params['breadcrumbs'][] = ['label' => 'Perlengkapan Pembelajarans', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="perlengkapan-pembelajaran-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id_perlengkapan_pembelajaran], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id_perlengkapan_pembelajaran], [
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
            'id_perlengkapan_pembelajaran',
            'id_sekolah',
            'id_bulan_aktif',
            'buku_pedoman_guru',
            'buku_teks_siswa',
            'alat_peraga',
            'komputer',
            'listrik',
        ],
    ]) ?>

</div>
