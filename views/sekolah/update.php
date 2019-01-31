<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Sekolah */

$this->title = 'Update Sekolah: ' . $model->id_sekolah;
$this->params['breadcrumbs'][] = ['label' => 'Sekolahs', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_sekolah, 'url' => ['view', 'id' => $model->id_sekolah]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="sekolah-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
