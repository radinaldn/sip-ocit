<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\KeadaanSiswa */

$this->title = 'Update Keadaan Siswa: ' . $model->id_keadaan_siswa;
$this->params['breadcrumbs'][] = ['label' => 'Keadaan Siswas', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_keadaan_siswa, 'url' => ['view', 'id' => $model->id_keadaan_siswa]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="keadaan-siswa-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
