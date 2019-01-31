<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\AbsenBulanIni */

$this->title = 'Update Absen Bulan Ini: ' . $model->id_absen;
$this->params['breadcrumbs'][] = ['label' => 'Absen Bulan Inis', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_absen, 'url' => ['view', 'id' => $model->id_absen]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="absen-bulan-ini-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
