<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\KeadaanPenduduk */

$this->title = 'Create Keadaan Penduduk';
$this->params['breadcrumbs'][] = ['label' => 'Keadaan Penduduks', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="keadaan-penduduk-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
