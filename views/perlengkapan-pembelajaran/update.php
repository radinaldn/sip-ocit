<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\PerlengkapanPembelajaran */

$this->title = 'Update Perlengkapan Pembelajaran: ' . $model->id_perlengkapan_pembelajaran;
$this->params['breadcrumbs'][] = ['label' => 'Perlengkapan Pembelajarans', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_perlengkapan_pembelajaran, 'url' => ['view', 'id' => $model->id_perlengkapan_pembelajaran]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="perlengkapan-pembelajaran-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
