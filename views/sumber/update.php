<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Sumber */

$this->title = 'Update Sumber: ' . $model->id_sumber;
$this->params['breadcrumbs'][] = ['label' => 'Sumbers', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_sumber, 'url' => ['view', 'id' => $model->id_sumber]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="sumber-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
