<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Pengeluaran */

$this->title = 'Update Pengeluaran: ' . $model->id_pengeluaran;
$this->params['breadcrumbs'][] = ['label' => 'Pengeluarans', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_pengeluaran, 'url' => ['view', 'id' => $model->id_pengeluaran]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="pengeluaran-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
