<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Mobiler */

$this->title = 'Update Mobiler: ' . $model->id_mobiler;
$this->params['breadcrumbs'][] = ['label' => 'Mobilers', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_mobiler, 'url' => ['view', 'id' => $model->id_mobiler]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="mobiler-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
