<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\BulanAktif */

$this->title = 'Update Bulan Aktif: ' . $model->id_bulan_aktif;
$this->params['breadcrumbs'][] = ['label' => 'Bulan Aktifs', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_bulan_aktif, 'url' => ['view', 'id' => $model->id_bulan_aktif]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="bulan-aktif-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
