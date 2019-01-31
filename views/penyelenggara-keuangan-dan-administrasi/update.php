<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\PenyelenggaraKeuanganDanAdministrasi */

$this->title = 'Update Penyelenggara Keuangan Dan Administrasi: ' . $model->id_penyelenggara_keuangan;
$this->params['breadcrumbs'][] = ['label' => 'Penyelenggara Keuangan Dan Administrasis', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_penyelenggara_keuangan, 'url' => ['view', 'id' => $model->id_penyelenggara_keuangan]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="penyelenggara-keuangan-dan-administrasi-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
