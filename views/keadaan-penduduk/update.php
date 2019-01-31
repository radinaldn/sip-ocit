<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\KeadaanPenduduk */

$this->title = 'Update Keadaan Penduduk: ' . $model->id_keadaan_penduduk;
$this->params['breadcrumbs'][] = ['label' => 'Keadaan Penduduks', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_keadaan_penduduk, 'url' => ['view', 'id' => $model->id_keadaan_penduduk]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="keadaan-penduduk-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
