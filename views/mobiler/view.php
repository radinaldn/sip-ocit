<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Mobiler */

$this->title = $model->id_mobiler;
$this->params['breadcrumbs'][] = ['label' => 'Mobilers', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="mobiler-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id_mobiler], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id_mobiler], [
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
            'id_mobiler',
            'id_sekolah',
            'id_bulan_aktif',
            'lemari_guru',
            'meja_guru',
            'kursi_guru',
            'lemari_siswa',
            'meja_siswa',
            'kursi_siswa',
        ],
    ]) ?>

</div>
