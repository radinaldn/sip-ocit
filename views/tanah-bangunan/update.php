<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\TanahBangunan */

$this->title = 'Update Tanah Bangunan: ' . $model->id_tanah_bangunan;
$this->params['breadcrumbs'][] = ['label' => 'Tanah Bangunans', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_tanah_bangunan, 'url' => ['view', 'id' => $model->id_tanah_bangunan]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="tanah-bangunan-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
