<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\SaranaDanPrasarana */

$this->title = 'Update Sarana Dan Prasarana: ' . $model->id_sarana_dan_prasarana;
$this->params['breadcrumbs'][] = ['label' => 'Sarana Dan Prasaranas', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_sarana_dan_prasarana, 'url' => ['view', 'id' => $model->id_sarana_dan_prasarana]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="sarana-dan-prasarana-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
