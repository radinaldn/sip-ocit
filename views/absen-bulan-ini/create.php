<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\AbsenBulanIni */

$this->title = 'Create Absen Bulan Ini';
$this->params['breadcrumbs'][] = ['label' => 'Absen Bulan Inis', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="absen-bulan-ini-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
